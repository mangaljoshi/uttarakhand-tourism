<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    // Public Page
    public function index()
    {
        $packages = Package::all();

        return view('packages', compact('packages'));
    }

    //Home//
    public function home()
{
    $packages = Package::latest()->take(3)->get();

    return view('home', compact('packages'));
}

    // Admin List
    public function adminIndex()
    {
        $packages = Package::all();

        return view('admin.packages.index', compact('packages'));
    }

    public function create()
{
    return view('admin.packages.create');
}

    public function store(Request $request)
{
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('imagesdata'), $imageName);

    Package::create([
        'title' => $request->title,
        'price' => $request->price,
        'duration' => $request->duration,
        'description' => $request->description,
        'image' => $imageName
    ]);

    return redirect('/admin/packages');
}
}