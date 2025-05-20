<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomTshirt;
use Illuminate\Support\Facades\Storage;

class CustomTshirtController extends Controller
{
    public function uploadCustomTshirt(Request $request)
    {
        $request->validate([
            'design_name' => 'required|string|max:255',
            'design_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('design_image');
        $path = $file->store('custom_tshirts', 'public');

        CustomTshirt::create([
            'user_id' => auth()->id(),
            'design_name' => $request->design_name,
            'design_path' => $path,
        ]);

        return redirect()->back()->with('success', 'Design uploaded successfully!');
    }
    
}
