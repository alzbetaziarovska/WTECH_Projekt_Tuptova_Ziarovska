<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function storePhoto(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'file' => 'required|image|max:2048',
        ]);

        $path = $request->file('file')->store('public/photos');

        Photo::create([
            'product_id' => $request->product_id,
            'file' => basename($path), // or full $path if you prefer
        ]);

        return back()->with('success', 'Photo uploaded!');
    }

}


