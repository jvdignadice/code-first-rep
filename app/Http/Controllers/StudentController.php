<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientModel;




class StudentController extends Controller
{

    public function index() {
        $clients = clientModel::all();
        return view('/index' , ['client' => $clients]);
        

    }

    public function content(){
        return view('content');
    }
    
    // public function index(){
    //     return view('index');
    // }
    
    // public function edit(){
    //     return view('edit');
    // }    
    public function layout(){
        return view('layout');
    }    
    public function welcome(){
        return view('welcome');
    }    
    public function database(){
        return view('database');
    }    
    // public function crud(){
    //     return view('crud');
    // }    
        public function edit ($id) {
            $data = clientModel::find($id);
            $res = [
                'id' => $data->id,
                'fname' => $data->fname,
                'mname' => $data->mname,
                'lname' => $data->lname,
                'gender' => $data->gender,

            ];

            return view('edit', $res);
        }

        public function addClient(Request $request) {
            $request->validate([
                'fname'=> 'required',
                'mname'=> 'required',
                'lname'=> 'required',
                'gender'=> 'required',
            ]);
            $fname = $request->fname;
            $mname = $request->mname;
            $lname = $request->lname;
            $gender = $request->gender;


            $cli = new clientModel();
            $cli->fname = $fname;
            $cli->mname = $mname;
            $cli->lname = $lname;
            $cli->gender = $gender;
            $cli->save();
            return redirect(route('about'));

            
        }
        public function putClient(Request $request, $id) {
            $cli = clientModel::find($id);
    
            $cli->fname = $request->input('fname');
            $cli->mname = $request->input('mname');
            $cli->lname = $request->input('lname');
            $cli->gender = $request->input('gender');
            $cli->update();
            return redirect(route('about'));

            
        }
        public function deleteClient(Request $request, $id) {
            $cli = clientModel::find($id);
    
            $cli->fname = $request->input('fname');
            $cli->mname = $request->input('mname');
            $cli->lname = $request->input('lname');
            $cli->gender = $request->input('gender');
            $cli->delete();
            return redirect(route('about'));

            
        }



    public function create(Request $req){

        $fname = $req->input()['fname'];
        $mname = $req->input()['mname'];
        $lname = $req->input()['lname'];
        $gender = $req->input()['gender'];
        $address = $req->input()['address'];


        $clients =  new clientModel;



        $clients['fname'] = $fname;
        $clients['mname'] = $mname;
        $clients['lname'] = $lname;
        $clients['gender'] = $gender;
        $clients['address'] = $address;
        $clients->save();

        return redirect(route('about'));

    }
}

 