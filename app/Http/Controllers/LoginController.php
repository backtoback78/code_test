<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
 
  	public function showLogin(Request $request)
    {
      // on teste si on arrive dans la méthode en post, vérifie le verb HTTP
      if( $request->isMethod('post') == true)
      {
        // dump($request->all());
        
        $this->validate($request,[
          		'email' => 'required|email',  // rules 
          		'password' => 'required'
          ]);
        
        // récupérer en même temps les champs email et password
        $credentials = $request->only('email', 'password');  // $credentials = ['email'=> $request->email, 'password'=>$request->password];
        
        $remember = true;
        
        // Auth classe de Laravel qui permet de faire la requête sur la table User et de vérifier le couple email + password
        // use Auth; // importer son namespace dans celui du controller
        
        if(Auth::attempt($credentials, $remember))
        {

           return redirect()->intended('dashboard/question');
        }

        return redirect()->back();
        
      }
        
      
      return view('auth.login');
      
    }



    public function showLogout()
    {

        auth()->logout(); 

        return redirect()->route('question.index');

    }
      
  
}

