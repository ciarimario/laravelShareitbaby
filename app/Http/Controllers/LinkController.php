<?php
namespace App\Http\Controllers;


class LinkController extends Controller {

    /**
     * return view
     * 
     */
    public function list() {
        return view('link/listLink');
    }


    /**
     * return view
     * 
     */
    public function add() {
        return view('link/addLink');
    }



    
}