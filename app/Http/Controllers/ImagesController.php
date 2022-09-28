<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller

{
    public  $images=['1.jpg','2.jpg','3.jpg'];

    function index(){
    $images=$this->images;

        return view('home' ,compact('images'));
    }

    function show($img){

        return $this->images[$img];
    }
}
