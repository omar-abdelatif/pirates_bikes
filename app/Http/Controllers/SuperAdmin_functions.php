<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuperAdmin_functions extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
            "email" => "required|email|unique:super_admin,email"
        ]);
        DB::table("super_admin")->insert([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);
        return redirect("signin");
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
    public function loginrequest(Request $request)
    {
        dd($request);
    }
}
