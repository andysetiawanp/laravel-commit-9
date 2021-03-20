<?php

namespace App\Http\Controllers;

use App\Models\Friends;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        $friends = Friends::orderBy('id', 'desc')->paginate(3);
        return view('friends.index', compact('friends'));
    }

    public function create()
    {
        return view('friends.create');
    }

    public function store(Request $request)
    {
        //validate the request...

        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_telp' => 'required|numeric',
            'alamat' => 'nullable',
        ]);

        $friends = new Friends;
      
        $friends->nama = $request->nama;
        $friends->no_telp = $request->no_telp;
        $friends->alamat = $request->alamat;

        $friends->save();

        return redirect('/');
    
    }
    public function show($id)
    {
        $friend = Friends::where('id', $id)->first();
        return view('friends.show', ['friend' => $friend]);
    }
    
    public function edit($id)
    {
        $friend = Friends::where('id', $id)->first();
        return view('friends.edit', ['friend' => $friend]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_telp' => 'required|numeric',
            'alamat' => 'nullable',
        ]);

        Friends::find($id)->update([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat
        ]);

        return redirect('/');
    }
    public function destory($id)
    {
        Friends::find($id)->delete();
        return redirect('/');
    }
}
