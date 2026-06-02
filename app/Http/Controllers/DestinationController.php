<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destination = Destination::all();

        return view('admin.destination', compact('destination'));
    }

    public function create()
    {
        return view('admin.create-destination');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'description' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('imagesdata'), $imageName);

        Destination::create([
            'name' => $request->name,
            'image' => $imageName,
            'description' => $request->description,
        ]);

        return redirect('/admin/destination')
                ->with('success', 'Destination Added Successfully!');
    }

    public function edit($id)
{
    $destination = Destination::findOrFail($id);

    return view('admin.edit-destination', compact('destination'));
}

public function update(Request $request, $id)
{
    $destination = Destination::findOrFail($id);

    $data = [
        'name' => $request->name,
        'description' => $request->description,
    ];

    if ($request->hasFile('image')) {

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(
            public_path('images'),
            $imageName
        );

        $data['image'] = $imageName;
    }

    $destination->update($data);

    return redirect('/admin/destination');
}
public function destroy($id)
{
    $destination = Destination::findOrFail($id);

    $destination->delete();

    return back();
}
}