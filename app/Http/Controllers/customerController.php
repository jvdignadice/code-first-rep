<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customerController extends Controller
{
    //
        public function index(){
            $cust = customer::all();
            return view('customer/index' , ['custom' => $cust]);
    
        }

        public function customerLayout(){
            return view('customer/customerLayout');
        }

        public function view(){
            return view('customer/index');
        }
        public function addCustomer(Request $req){

            $req->validate([
                'fname'=> 'required',
                'mname'=> 'required',
                'lname'=> 'required',
                'email'=> 'required',
                'gender'=> 'required',
            ]);

            $fname = $req->input()['fname'];
            $mname = $req->input()['mname'];
            $lname = $req->input()['lname'];
            $email = $req->input()['email'];
            $gender = $req->input()['gender'];
    
    
            $cust =  new customer;
    
    
    
            $cust['fname'] = $fname;
            $cust['mname'] = $mname;
            $cust['lname'] = $lname;
            $cust['email'] = $email;
            $cust['gender'] = $gender;
            $cust->save();
    
            return redirect(route('views'));
    
        }

        public function putCustomer(Request $req, $id){

        $custs = customer::find($id);

            $custs->fname = $req->input('fname');
            $custs->mname = $req->input('mname');
            $custs->lname = $req->input('lname');
            $custs->email = $req->input('email');
            $custs->gender = $req->input('gender');
            $custs->update();

            return redirect(route('views'));


        }


        public function edited($id){
            $custs = customer::find($id);
            $res = [
                'id' => $custs->id,
                'fname' => $custs->fname,
                'mname' => $custs->mname,
                'lname' => $custs->lname,
                'email' => $custs->email,
                'gender' => $custs->gender,

            ];

            return view('/customer/editCustomer', $res);
        }

        public function deleteCustomer(Request $req, $id){

        $custs = customer::find($id);

            $custs->fname = $req->input('fname');
            $custs->mname = $req->input('mname');
            $custs->lname = $req->input('lname');
            $custs->email = $req->input('email');
            $custs->gender = $req->input('gender');
            $custs->delete();

            return redirect(route('views'));


        }
}
