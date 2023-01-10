<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);
   
        $user=User::where('phone',$request->phone)->first();
        if(empty($user)){
            return redirect()->back()->withErrors(['phone'=>'Wrong Username or Password']);
        }else{
            if($user->is_active == 1){
                    if(Auth::attempt(['phone' => $request->phone, 'password' => $request->password])){

                        if(Auth::user()->userRole == 'bussiness'){
                            return redirect()->route('dashboard');
                        }else{
                            return redirect()->route('pos'); 
                        }

                               
                    }
                    else{
                        return redirect()->route('login')->withErrors(['phone'=> 'Wrong Phone Number or Password']);
                    }
            }else{
                return redirect()->route('login')->withErrors(['phone' =>'Account Deactivated']); 
            }
        }
        
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.register');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'phone' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'phone' => $data['phone'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard.dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}