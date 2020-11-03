<?php
namespace App\Http\Controllers;




class TestController extends Controller {


    public function hello($name) {
        return view('test/test', [ 'name'=> $name ]);
    }
    
}