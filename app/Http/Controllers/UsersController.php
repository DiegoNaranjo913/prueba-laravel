<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::all();
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = "";
        $user = Users::where('nickname',$request->input('nickname'))->first();
        if($user){
            $response = "Usuario Existente";
        }else{
            $users = Users::create($request->all());
            $response = "Usuario Guardado";
        }
        return $response;
    }

}
