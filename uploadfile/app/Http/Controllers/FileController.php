<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    
    public function showForm()
    {
        return view('upload-form');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,gif|max:5120', // 5MB
        ]);

        $file = $request->file('file');

        if ($file->isValid()) {
            $extension = $file->getClientOriginalExtension();
            $newFileName = 'toloan.' . $extension;

            $file->storeAs('uploads', $newFileName, 'public');

            return view('upload-success', [
                'newFileName' => $newFileName,
                'extension' => $extension,
            ]);
        }

        return 'File không hợp lệ.';
    }
}


