<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        //Connect to DB
        //Get all record on table Product
        //Pass variable into view
        $arrayProduct = [
            ['id' => 2, 'name'=>'Product A', 'price' => 32000],
            ['id' => 4, 'name'=>'Product B', 'price' => 30000],
            ['id' => 6, 'name'=>'Product C', 'price' => 35000],
            ['id' => 8, 'name'=>'Product D', 'price' => 38000],
            ['id' => 10, 'name'=>'<b>Product E</b>', 'price' => 9999999],
        ]; 
        $test = 'test';
        // 3 cach de truyen bien vao view
        //cach 1: 
        // return view('user.list_user_blade', ['arrayProduct' => $arrayProduct, 'test' => 'aaaaaa']);

        //Cach 2:
        // return view('user.list_user_blade')->with('arrayProduct', $arrayProduct)->with('test', $test);

        //Cach 3:
        return view('user.list_user_blade', compact('arrayProduct', 'test'));
    }
}
