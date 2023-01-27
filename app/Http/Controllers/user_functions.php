<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class user_functions extends Controller
{
    public function create()
    {
        return view("create");
    }
    public function store(Request $request)
    {
        DB::table("super_admin")->insert([
            "name" => $request->name
        ]);
    }
}
