<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Auth;
use App\Models\User;
use session;
use App\Models\Product;

class POSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $products=Product::all();
        return view('pos.welcome', compact('products'));

    }

    public function pos()
    {
        //
        $products=Product::all();
        return view('pos.pos', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {   
            
            return view('pos.cart');
      
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */



   
    public function addToCart($id)
    {   

               

              $product=Product::findorfail($id);   
              
                              
                $cart = session()->get('cart', []);

                
                if($product->quantity!=0){
                    
                    if(isset($cart[$id])) {
                        $cart[$id]['quantity']++;
                    } else {
                        $cart[$id] = [
                            "name" => $product->name,
                            "quantity" => 1,
                            "price" => $product->price,
                        ];
                    }
                    
                    session()->put('cart', $cart);

                    return redirect()->back()->with('message', 'Product added to cart successfully!');
                }

            
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {   
      
            if($request->id && $request->quantity && $request->price){
                $cart = session()->get('cart');
                $cart[$request->id]["quantity"] = $request->quantity;
                $cart[$request->id]["price"] = $request->price;
                session()->put('cart', $cart);
                session()->flash('message', 'Cart updated successfully');
            }
         
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {

       
            
                if($request->id) {
                    $cart = session()->get('cart');
                    if(isset($cart[$request->id])) {
                        unset($cart[$request->id]);
                        session()->put('cart', $cart);
                    }
                    session()->flash('message', 'Product removed successfully');
                }
           
    }

    public function store(Request $request){
        $user = $this->getUserInfo();
        $user_id=$user['id'];
        

        $token=session('token');
  
    
        if($token!=null){
            
        $profile=http::withToken($token)->get('http://doctor-apis.herokuapp.com/api/details/'.$user_id,[
                    
        ]);

        if($user->hasRole('organization')){
            $seller_id=0;
        }else{
            $seller_id=$profile[0]['id'];
        }
         
        $sale_date=date("Y-m-d") ;

            
                $cart = session()->get('cart');
                foreach(session('cart') as $id => $details){
                        $price=$details['price']*$details['quantity'];
                    $postsale=http::withToken($token)->post('http://doctor-apis.herokuapp.com/api/storesales',[
                        'headers' => [
                            'Accept' => 'application/json',
                            'Content-Type' => 'application/x-www-form-urlencoded',
                        ],
                        
                        'stock_id'=>$id,
                        'price'=>$price,
                        'quantity' => $details['quantity'],
                        'sale_date'=>$sale_date,
                        'seller_id'=>$seller_id,
                          
                    ]);

                    $reducestock=http::withToken($token)->post('http://doctor-apis.herokuapp.com/api/reducestock',[
                        'headers' => [
                            'Accept' => 'application/json',
                            'Content-Type' => 'application/x-www-form-urlencoded',
                        ],
                        
                        'stock_id'=>$id,
                        'quantity' => $details['quantity'],
                          
                    ]);
                    
                    unset($cart[$id]);
                    session()->put('cart', $cart);

                }

            session()->flash('message', 'Sale Complete successfully');
            return redirect()->route('pos');
           
        }else{
            return redirect()->back();
        } 
    }
}
