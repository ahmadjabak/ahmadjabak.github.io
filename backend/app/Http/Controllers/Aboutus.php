<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use App\Models\Media;

use Illuminate\Http\Request;

class Aboutus extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getQoute(Media $media):JsonResponse
    {

        return response()->json(
            $media
            -> where("TyId",3)
            ->where("PaId",2)
            ->select("Mecontent")
            ->get()
        );
     
    }


    public function getAbout_img(Media $media):JsonResponse
    {

        return response()->json(
            $media
            -> where("TyId",1)
            ->where("PaId",2)
            ->select("Mecontent")
            ->get()
        );
        
    }

    public function getAbout_video(Media $media):JsonResponse
    {

        return response()->json(
            $media
            -> where("TyId",2)
            ->where("PaId",2)
            ->select("Mecontent")
            ->get()
        );
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function updateAbout_Quote(Media $media,Request $request, $id)
    {
        $quote=$request["quote"];
            $media->where('MeId',$id)
                ->update(['Mecontent'=>$quote]);

            return ["success"];
         
    }
    public function updateAbout_img1(Media $media,Request $request, $id)
    {
        $image1=$request["image_1"];
            $media->where('MeId',$id)
                ->update(['Mecontent'=>$image1]);

            return ["success"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
