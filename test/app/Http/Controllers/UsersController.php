<?php

namespace App\Http\Controllers;

use App\User;
use App\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Monolog\Handler\Curl\Util;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        $users->load("tags");
        $users->load("commentaires");

        return view("front/users/index" , compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back/users/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $this->validate($request,User::$rules["create"]);
        $status_create = User::create($input);

        if($status_create)
        {
            return redirect(route('users.show', $status_create))->with("succes", "Le compte est créé");
        }
        else{
            return redirect()->back()->with("danger", "Une erreur est survenue, merci de bien vouloir recommencer")->withInput();
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view("front/users/edit",compact("user"));
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

        $input = $request->all();
        $user_update=User::findOrFail($id);
        $this->validate($request,User::$rules["update"]);
        $status_create = $user_update->update($input);

        if($status_create)
        {
            return redirect(route('users.edit', $user_update))->with("success", "L'utilisateur à été modifié");
        }
        else{
            return redirect()->back()->with("danger", "Une erreur est survenue, merci de bien vouloir recommencer")->withInput();
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
        $count= User::destroy($id);
        if($count ==1)
        {
            return redirect()->back()->with("success", "L'utilisateur a bien été supprimé");
        }
        else{
            return redirect()->back()->with("danger","L'utilisateur n'a pas été supprimé");
        }
    }
}
