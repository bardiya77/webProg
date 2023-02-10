<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
   
    public function index()
    {
        $tags =Tag::latest()->paginate(20);
        return view('admin.tags.index' , compact('tags'));
    }

    
    public function create()
    {
        return view('admin.tags.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Tag::create([
            'name' => $request->name
        ]);

        alert()->success('تگ مورد نظر ایجاد شد', 'باتشکر');
        return redirect()->route('admin.tags.index');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
