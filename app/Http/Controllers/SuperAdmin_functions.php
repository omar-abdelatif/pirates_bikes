<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class user_functions extends Controller
{
    public function dashboard()
    {
        $superAdmin = DB::table("super_admin")->get();
        return view("dashboard", compact("superAdmin"));
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => "min:3|required|unique:super_admin,name",
            "password" => "min:3|required",
            "email" => "required|email"
        ]);
        DB::table("super_admin")->insert([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);
        return redirect("dashboard");
    }
    public function delete($id)
    {
        DB::table("super_admin")->delete($id);
        return redirect("dashboard");
    }
    public function edit($id)
    {
        $admin = DB::table("super_admin")->find($id);
        return view("edit", compact("admin"));
    }
    public function update(Request $request)
    {
        DB::table('super_admin')->where("id", $request->id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
        ]);
        return redirect("dashboard");
    }
    public function signin(Request $request)
    {
        if (Auth::attempt($request->only(['email', "password"]))) {
            return redirect("dashboard");
        }
        return redirect("login");
    }
}
