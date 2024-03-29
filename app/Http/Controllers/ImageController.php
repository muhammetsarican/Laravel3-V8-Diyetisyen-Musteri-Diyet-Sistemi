<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($treatment_id)
    {
        $data=Treatment::find($treatment_id);
        $images=DB::table('images')->where('treatment_id','=',$treatment_id)->get();
//        print_r($images);
//        exit();
        return view('home.image_add',['data'=>$data,'images'=>$images]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$treatment_id)
    {
        $data=new Image;
        $data->title=$request->input('title');
        $data->treatment_id=$treatment_id;
        $data->image=Storage::putFile('image',$request->file('image'));
        $data->save();
        return redirect()->route('user_image_add',['treatment_id'=>$treatment_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image,$id,$treatment_id)
    {
        Image::destroy($id);
        return redirect()->route('user_image_add',['treatment_id'=>$treatment_id]);
    }
}
