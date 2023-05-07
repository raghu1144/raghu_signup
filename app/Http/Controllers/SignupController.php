<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\userdata;
use DB;
use Illuminate\Support\Facades\Validator;



class SignupController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function insert(Request $request){
        // return "Hello Pranjali pal How are you";

        // $request->validate(
        //     [
        //     'name' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
        //     'email' => 'required|string|email|max:255',
        //     'mobile' => 'required|numeric|digits:10'
        // ]
    // );

        $check_email = $request->input('email');
        // $res = userdata::find($check_email);
        if (userdata::where('email', $check_email )->exists()){
            return redirect('/')->with('false', 'Enter email alraedy exists');
        }
        else
        {
            $user = new userdata;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->msg = $request->msg;
            // $user->department = $request->department;
            // $user->gender = $request->gender;
            
            $user->save();
            return redirect('/view')->with('success', 'User Details Successfully added');
        }
        

    }

    public function show(){
        // return "Hello my mammsd";

         $users = DB::table('employee_details')->get();

        return view('registration.view', ['users' => $users]);
    }

    public function delete($id){
        // return "delete";
        DB::delete('delete from employee_details where id = ?',[$id]);
        
        return redirect('/view');
    }


    public function getUserDetails(Request $r)
    {
        return userdata::select('*')->where('id', $r->id)->get();
    }


    public function change(Request $r){
        // return "Hello";
         $user_id = $r->input('userid');

        $employee = userdata::find($user_id);

        $name = $r->input('name');
        $email = $r->input('email');
        $mobile = $r->input('mobile');
        $msg = $r->input('msg');
        $department = $r->input('department');

        userdata::where('id', $user_id)->update(['name' => $name, 'email' => $email, 'mobile' => $mobile, 'msg'=> $msg, 'department'=> $department]);
        return redirect('/view')->with('success', 'User Details Successfully updated'); 
    }
}