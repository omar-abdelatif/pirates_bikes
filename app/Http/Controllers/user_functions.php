<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class user_functions extends Controller
{
    public function dashboard()
    {
        $superAdmin = DB::table("super_admin")->get();
        return view("dashboard", compact("superAdmin"));
    }
    public function create()
    {
        return view("create");
    }
    public function store(Request $request)
    {
        DB::table("super_admin")->insert(["name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ]);
    }
}
