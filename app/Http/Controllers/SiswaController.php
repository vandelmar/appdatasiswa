<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Illuminate\Support\Facades\Redirect;

class SiswaController extends Controller
{
    public function index()
    {
        //klo ada isinya.
        if(request('search') !='')
        {
            $siswa = Siswa::where('name', 'like', '%'.request('search').'%')->get();
        }
        else
        {   
            $siswa = Siswa::all();
        }
            return view('siswa.index', compact('siswa'));
        // else
        // {
        //     $siswa = Siswa::all();
        // }
            // return view('Data not found');
    }
    
    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        // Siswa::create([
        //     'name' => request('name')
        // ]);

        $siswa = new siswa();
        $siswa->name = $request->name;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->save();

        return redirect::to('siswa');
        // return redirect('/siswa');
    }

    public function show($id)
    {
            $siswa = Siswa::find($id);
            return view('siswa.detail', ['siswa' => $siswa]);
    }
    
    public function edit($id)
    {
            $siswa = Siswa::where('id', $id)->first();
            return view('siswa.edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id)
    {
           $siswa = Siswa::find($id);
            
           $siswa->name=$request->name;
           $siswa->alamat=$request->alamat;
           $siswa->no_hp=$request->no_hp;
           $siswa->save();

           return Redirect::to('siswa');
           
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa');
    }
    
}
