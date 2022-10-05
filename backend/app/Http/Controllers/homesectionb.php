<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Media;
class homesectionb extends Controller
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
            -> where("TyId",5)
            ->where("PaId",1)
            ->where("FoId",2)
            ->select("Mecontent")
            ->get(),

           

    );   
    }
    public function links(Media $media):JsonResponse
    {
        return response()->json(
         

           $media
            -> where("TyId",2)
            ->where("PaId",1)
            ->where("FoId",2)
            ->select("Mecontent")
            ->get(),

           

    );   
    }
    public function desc(Media $media):JsonResponse
    {
        return response()->json(
           

           $media
            -> where("TyId",3)
            ->where("PaId",1)
            ->where("FoId",2)
            ->select("Mecontent")
            ->get(),

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
