<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Models\Media;
class homesectiona extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Media $media):JsonResponse
    {
        return response()->json(
            $media
            -> where("TyId",3)
            ->where("FoId",1)
            ->where("PaId",1)
            ->select("Mecontent")
            ->get()
        );
     
    }
    public function images(Media $media):JsonResponse
    {
        return response()->json(
            $media
            -> where("TyId",1)
            ->where("FoId",1)
            ->where("PaId",1)
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
    public function update_images(Request $request,Media $media,$id)
    { 
        
        if($request->quote){
            $path = public_path() . '/images/';

            //code for remove old file
            if($media->Mecontent=null && $media->Mecontent=""){
                 $file_old = $path.$media->Mecontent;
                 unlink($file_old);
            }

            //upload new file
            $file = $request->quote;
            $filename =$file->getClientOriginalName();
            $file->move($path, $filename);

           
            $media->where('MeId',$id)
            ->update(['Mecontent'=>$filename]);
    
        return ["success"];
     
        }
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
