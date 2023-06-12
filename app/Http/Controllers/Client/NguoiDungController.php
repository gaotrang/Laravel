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

        $check = DB::insert('INSERT INTO nguoidung (email, password, name) 
        VALUES (?, ?, ?)', [$request->email, $password, $request->name]);

        return redirect()->route('home')->with('message', 'Dang ky thanh cong');
        // dd($check);
    }

    public function dangnhap(Request $request){
        dd($request->all());
    }
}
