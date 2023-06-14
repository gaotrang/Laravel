<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NguoiDungController extends Controller
{
    public function luuNguoiDung(Request $request){
         //Validate Request
        $request->validate([
            'email' => 'required|min:3|max:255|email',
            'name' => 'required|min:3|max:255',
            'password' => 'required|min:3|max:20',
        ],
        [
            'email.required'=>'Email bac buoc phai nhap',
            'email.min'=>'Email it nhat 3 ky tu!',
            'email.max'=>'Email nhieu nhat 255 ky tu!',
        ]);

       //Save into database
       
        $password = Hash::make($request->password);

        $check = DB::insert("INSERT INTO nguoidung (name, email, password) 
        VALUES (?, ?, ?)", [$request->name,$request->email, $password]);

        return redirect()->route('home')->with('message', 'Dang ky thanh cong');
        // dd($check);
    }

    public function dangnhap(Request $request){
        // dd($request->all());
        $request->validate([
            'email'=> ['required','email'],
            'password' => ['required']
        ]);

        $user = DB::SELECT("SELECT * FROM nguoidung WHERE email = ?", [$request->email]);

        if(count($user) && Hash::check($request->password, $user[0]->password)){
            session()->push('user',['id'=>$user[0]->id, 'email'=>$user[0]->email, 'name'=> $user[0]->name]);
            //session()->push('email', 'nguyenvana@gmail.com');
            return redirect()->route('home');
        }
        return back()->with('error', 'Email hoac Password khong dung');
        
    }

    public function dangXuat(){
        // session()->flush();
        session()->forget('user');
        return redirect()->route('home');
    }


}

