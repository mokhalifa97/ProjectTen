<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users= User::all();
        $data=[
            "msg"=> "return all users data",
            "status"=> 200,
            "data" =>$users
        ];
        return response()->json($data);
    }
}
