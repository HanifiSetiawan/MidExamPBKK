<?php

namespace App\Http\Controllers;
use App\Models\phone;
use Illuminate\Http\Request;

class PhoneDataController extends Controller
{
    public function index(){
        /*$phones = phone::take(5)->get(); 
        return view('yes', ['phones' => $phones]);*/
        $phones = phone::orderBy('created_at', 'desc')->take(5)->get();
        return view('data', ['phones' => $phones]);
    }
}
