<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
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
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //



        //validate input
     
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

 

    if($validator->fails()){

        return redirect('/products')->with('error', 'Product not created');
    }else{
           
             //handle file upload
        if($request->hasFile('image')){
            //get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //create new product
        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->category = $request->input('category');
        $product->image = 'images/'.$fileNameToStore;
        $product->save();

        session::flash('success', 'Product Created');
        return redirect('/products');


        }

       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product=Product::findorfail($id);

  
        return view('products.show', compact('product'));
    }

 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

               //validate input
     
               $validator = Validator::make($request->all(), [
                'name' => 'required',
                'price' => 'required',
                'description' => 'required',
                'quantity' => 'required',
                'category' => 'required',
                'image' => 'image|nullable|max:1999'
            ]);
    
     
    
        if($validator->fails()){

            return redirect('/products')->with('error', 'Product not created');
        }else{
               
                 //handle file upload
            if($request->hasFile('image')){
                //get filename with extension
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                //get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //get just extension
                $extension = $request->file('image')->getClientOriginalExtension();
                //filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                //upload image
                $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }
    
            //create new product
            $product = Product::findorfail($id);
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->description = $request->input('description');
            $product->quantity = $request->input('quantity');
            $product->category = $request->input('category');
            // $product->image = 'images/'.$fileNameToStore;
            $product->update();
    
            session::flash('success', 'Product Updated');
            return redirect('/products');
    
    
            }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findorfail($id);
        $product->delete();
        session::flash('success', 'Product Deleted');
        return redirect('/products');

    }
}
