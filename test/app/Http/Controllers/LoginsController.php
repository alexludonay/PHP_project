<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
        {
            return view("login/stillLog");
        }
        else{
            return view("login/index");
        }
    }
    public function connexion(Request $request)
    {
        $input = $request->all();

        if(isset($input["remember"]) && $input["remember"] == true )
        {

            Auth::attempt(array('email'=>$input["email"], 'password' => $input['password'],true));

        }
        else
        {

            Auth::attempt(array('email'=>$input["email"], 'password' => $input['password']));

        }
        if(Auth::check()){
            
            return redirect(route('users.index'))->with("success","Vous êtes connecter");
        }
        else{
            return redirect(route('login'))->with("danger","La combinaison Nom de compte mot de passe est incorrect.");
        }
    }
    
    public function deconnexion()
    {
        Auth::logout();
        return redirect(route('login'))->with("info","Vous venez de vous deconneter");
    }
}
    