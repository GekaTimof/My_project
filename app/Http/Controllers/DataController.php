<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class DataController extends Controller
{
    public function showData()
    {
        $files = File::allFiles(storage_path('app'));
        $data = [];

        foreach ($files as $file) {
            $content = json_decode(File::get($file), true);
            $data[] = $content;
        }

        return view('data', compact('data'));
    }
}

