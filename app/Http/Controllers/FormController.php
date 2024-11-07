<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect('/form')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Generate unique file name
        $fileName = 'data_' . uniqid() . '.json';

        // Save data in file
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        file_put_contents(storage_path('app/' . $fileName), json_encode($data));

        return redirect('/form')->with('success', 'Data was saved!');
    }
}

