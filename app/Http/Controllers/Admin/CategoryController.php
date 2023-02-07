<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function index()
    {
        $parentCategories=Category::where('parent_id',0)->get();
        $attributes=Attribute::all();
       return view('admin.categories.index',compact('parentCategories','attributes'));
    }

   
    public function create()
    {
        $parentCategories=Category::where('parent_id',0)->get();
        $attributes=Attribute::all();
       return view('admin.categories.create',compact('parentCategories','attributes'));
    }
    
  
    public function store(Request $request)
    {
        dd($request->all());
    }

  
    public function show($id)
    {
      
    }

    public function edit($id)
    {
        
    }

  
    public function update(Request $request, $id)
    {
      
    }

   
    public function destroy($id)
    {
       
    }
}
