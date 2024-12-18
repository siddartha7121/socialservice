<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register_form');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'whatsapp_number' => 'required|string|max:15',
            'alternate_number' => 'nullable|string|max:15',
            'location' => 'required|integer',
            'blood_group' => 'required|integer',
            'type' => 'required|integer',
        ]);
        $data = $request->all();
        $data['location'] = (int) $data['location'];
        $data['blood_group'] = (int) $data['blood_group'];
        $data['type'] = (int) $data['type'];
        Register::create($data);

        return redirect()->route('home')->with('success', 'Registration successful.');
    }
}
