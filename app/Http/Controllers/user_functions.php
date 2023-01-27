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
    public function store(Request $request)
    {
        DB::table("super_admin")->insert($request->except("_token"));
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
        DB::table('super_admin')->where("id", $request->id)->update($request->except(["_token", "id"]));
        return redirect("dashboard");
    }
    public function select()
    {
        echo "select function";
    }
}
