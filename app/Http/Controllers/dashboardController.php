<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class dashboardController extends Controller
{
    function view(){
        return view('dashboard.index');
    }

    function services(){
        return view('dashboard.services');
    }

    function gallery(){
        return view('dashboard.gallery');
    }

    function aboutus(){
        return view('dashboard.aboutus');
    }

    function moregallery(){
        return view('dashboard.moregallery');
    }

    public function galleryuploadImage(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'image_name' => 'required|string',
        ]);

        // Get the uploaded file and image name
        $image = $request->file('image');
        $imageName = $request->input('image_name'); // Full path, e.g., "services/123.png"

        // Define the storage path
        $folderPath = 'public/' . pathinfo($imageName, PATHINFO_DIRNAME); // Example: "public/services"
        $fullPath = $folderPath . '/' . pathinfo($imageName, PATHINFO_BASENAME); // Full path to the file

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Check if an old image exists and delete it
        if (Storage::exists($fullPath)) {
            Storage::delete($fullPath);
        }

        // Store the new image at the specified path
        $image->storeAs($folderPath, pathinfo($imageName, PATHINFO_BASENAME));

        // Redirect back with a success message
        return redirect()->route('dashboard.gallery')->with('success', 'Image updated successfully!');
    }

    public function aboutusuploadImage(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'image_name' => 'required|string',
        ]);

        // Get the uploaded file and image name
        $image = $request->file('image');
        $imageName = $request->input('image_name'); // Full path, e.g., "services/123.png"

        // Define the storage path
        $folderPath = 'public/' . pathinfo($imageName, PATHINFO_DIRNAME); // Example: "public/services"
        $fullPath = $folderPath . '/' . pathinfo($imageName, PATHINFO_BASENAME); // Full path to the file

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Check if an old image exists and delete it
        if (Storage::exists($fullPath)) {
            Storage::delete($fullPath);
        }

        // Store the new image at the specified path
        $image->storeAs($folderPath, pathinfo($imageName, PATHINFO_BASENAME));

        // Redirect back with a success message
        return redirect()->route('dashboard.aboutus')->with('success', 'Image updated successfully!');
    }

    public function servicesuploadImage(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'image_name' => 'required|string',
        ]);

        // Get the uploaded file and image name
        $image = $request->file('image');
        $imageName = $request->input('image_name'); // Full path, e.g., "services/123.png"

        // Define the storage path
        $folderPath = 'public/' . pathinfo($imageName, PATHINFO_DIRNAME); // Example: "public/services"
        $fullPath = $folderPath . '/' . pathinfo($imageName, PATHINFO_BASENAME); // Full path to the file

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Check if an old image exists and delete it
        if (Storage::exists($fullPath)) {
            Storage::delete($fullPath);
        }

        // Store the new image at the specified path
        $image->storeAs($folderPath, pathinfo($imageName, PATHINFO_BASENAME));

        // Redirect back with a success message
        return redirect()->route('dashboard.services')->with('success', 'Image updated successfully!');
    }

    public function homeuploadImage(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'image_name' => 'required|string',
        ]);

        // Get the uploaded file and image name
        $image = $request->file('image');
        $imageName = $request->input('image_name'); // Full path, e.g., "services/123.png"

        // Define the storage path
        $folderPath = 'public/' . pathinfo($imageName, PATHINFO_DIRNAME); // Example: "public/services"
        $fullPath = $folderPath . '/' . pathinfo($imageName, PATHINFO_BASENAME); // Full path to the file

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Check if an old image exists and delete it
        if (Storage::exists($fullPath)) {
            Storage::delete($fullPath);
        }

        // Store the new image at the specified path
        $image->storeAs($folderPath, pathinfo($imageName, PATHINFO_BASENAME));

        // Redirect back with a success message
        return redirect()->route('dashboard')->with('success', 'Image updated successfully!');
    }

    function moregalleryuploadImage(Request $request){
         // Validate the request
         $validated = $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'image_name' => 'required|string',
        ]);

        // Get the uploaded file and image name
        $image = $request->file('image');
        $imageName = $request->input('image_name'); // Full path, e.g., "services/123.png"

        // Define the storage path
        $folderPath = 'public/' . pathinfo($imageName, PATHINFO_DIRNAME); // Example: "public/services"
        $fullPath = $folderPath . '/' . pathinfo($imageName, PATHINFO_BASENAME); // Full path to the file

        // Ensure the folder exists
        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
        }

        // Check if an old image exists and delete it
        if (Storage::exists($fullPath)) {
            Storage::delete($fullPath);
        }

        // Store the new image at the specified path
        $image->storeAs($folderPath, pathinfo($imageName, PATHINFO_BASENAME));

        // Redirect back with a success message
        return redirect()->route('dashboard.moregallery')->with('success', 'Image updated successfully!');
    }

}
