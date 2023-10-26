<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\phone;

use Illuminate\Http\Request;

class PhoneFormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'price' => 'required|numeric',
            'type' => 'required|string|in:physics,glasswares,devices,safety',
            'condition' => 'required|string|in:Available,Unavailable',
            'picture' => 'required|image', 
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        $PicturePath = $request->file('picture')->store('public/picture');
    
        $phone = new phone;
        $phone->name = $request->input('name');
        $phone->amount = $request->input('amount');
        $phone->price = $request->input('price');
        $phone->type = $request->input('type');
        $phone->condition = $request->input('condition');
        $phone->picture = $PicturePath;
        $phone->save();

        return view('success');
    }
}