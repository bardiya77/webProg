<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('ok');
        return view('admin.banners.index');
    }

   
    public function create()
    {
        return view('admin.banners.create');
    }

  
    public function store(Request $request)
    {
    //    $request->validate([
    //     'image' => 'required|mimes:jpg,jpeg,png,svg',
    //     'priority' => 'required|integer',
    //     'type' => 'required'
    //    ]);

$flieNameImage=generateFileName($request->image->getClientOriginalName());
$request->image->move(public_path(env('BANNER_IMAGES_UPLOAD_PATH')),$flieNameImage);

Banner::create([
    'image'=>$flieNameImage,
    'title' => $request->title,
    'text' => $request->text,
    'priority' => $request->priority,
    'is_active' => $request->is_active,
    'type' => $request->type,
    'button_text' => $request->button_text,
    'button_link' => $request->button_link,
    'button_icon' => $request->button_icon,
]);

alert()->success('بنر مورد نظر ایجاد شد', 'باتشکر');
return redirect()->route('admin.banners.index');
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
