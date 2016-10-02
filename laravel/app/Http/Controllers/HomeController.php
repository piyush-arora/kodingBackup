<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialize;

use App\hic_user;
class HomeController extends Controller
{
    // home page
    
    
    public function home()
    {
        return view('Pages.Home.home');
    }
    
    public function load_block()
    {
        return view('Pages.Blockly.blockly');
        
    }
    
    public function go_fb()
    {
        return Socialize::with('facebook')->redirect();
    }

    public function back_fb()
    {
        
        $user = Socialize::with('facebook')->user();
       
       return view('Pages.thanks')->with('user', $user);
       
    // $user->token;
    }
    
     public function go1()
    {
        return Socialize::with('google')->redirect();
    }

    public function back1()
    {
        
        
        $user = Socialize::with('google')->user();
        
    
        
        hic_user::firstOrCreate(array('name' => $user->getName(),'email'=>$user->getEmail(),'photo'=>$user->getAvatar()));
        
        
        
        
        return view('Pages.thanks')->with('user', $user);
        
       // return redirect()->route('home'); //workiing
    // $user->token;
    }
    
    
    
       public function showLogin()
    {
        // show the form
       return view('Pages.Login.login');
        
    }
    
     public function simulation()
    {
        // show the form
       return view('Pages.Simulation');
        
    }


     public function front_page()
    {
        // show the form
       return view('front_page');
        
    }
    
    public function get_user()
    {
         $user = Socialize::with('facebook')->user();
         return $user;
        
        
    }
}
