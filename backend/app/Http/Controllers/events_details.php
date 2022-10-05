<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Events;
use Carbon\Carbon;
class events_details extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Events $events):JsonResponse
    {
        $date=Carbon::now();
        return response()->json(
            $events
            -> where("EvEventdate",'>=',$date)
            ->get()
        );
    }
    public function getLatestEvents(Events $events):JsonResponse
    {
        $date=Carbon::now();
        return response()->json(
           
            $events
            ->where("EvEventdate",'>=',$date)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get()
        );
    }
    public function GetAllEvents(Events $events):JsonResponse{
        return response()->json(
            $events
            ->orderBy('EvEventDate','desc')
            ->get()
        );
    }
    public function searchEvents(Request $request,Events $task)
    {
        $title = $request['EvTitle'];
        $Desc = $request['EvDesc'];
        if ($title||$Desc) {
           $tasks= $task->where('EvTitle', 'Like','%'.$title.'%')->orWhere('EvDescription', 'Like','%'.$Desc.'%')->get();
            return $tasks;
        }
    }
    public function searchActiveEvents(Request $request,Events $task)
    {
        $date=Carbon::now();
        $title = $request['EvTitle'];
        $Desc = $request['EvDesc'];
        if ($title||$Desc) {
           $tasks= $task->Where('EvTitle', 'Like','%'.$title.'%')->Where('EvEventdate','>=',$date)->orWhere('EvDescription', 'Like','%'.$Desc.'%')->Where('EvEventdate','>=',$date)->get();
            return $tasks;
        }
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
    public function storeEvents(Request $request)
    {

        $task = new Events;
       
        if ($request->image) {
            $getImage = $request->image;
            $imageName = $getImage->getClientOriginalName();
            $imagePath = public_path() . '/images';
            $getImage->move($imagePath, $imageName);
            $task->EvImage = $imageName;
        }
        
        $task->EvTitle = $request["EvTitle"];
        
        $task->EvDescription = $request["EvDescription"];
        $task->EvLocation = $request["EvLocation"];
        $task->EvLink = $request["EvLink"];
        $task->EvAddress = $request["EvAddress"];
        $task->EvEventdate = $request["EvEventdate"];
        $task->save();

   
       

        return $task;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Events $event,$EvId)
    {
        
        return response()->json(
           $event->where('EvId',$EvId)->get()
           
        );
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
    public function update(Request $request,$EvId)
    {
       $event= Events::findorFail($EvId);
        if($request->image){
            $path = public_path() . '/images/';

            //code for remove old file
            if($event->EvImage=null && $event->EvImage=""){
                 $file_old = $path.$event->EvImage;
                 unlink($file_old);
            }

            //upload new file
            $file = $request->image;
            $filename =$file->getClientOriginalName();
            $file->move($path, $filename);
            $event->EvImage= $filename;
        }  
        
        $event->EvTitle = $request["EvTitle"];
        $event->EvDescription = $request["EvDescription"];
        $event->EvLocation = $request["EvLocation"];
        $event->EvLink = $request["EvLink"];
        $event->EvAddress = $request["EvAddress"];
        $event->EvEventdate = $request["EvEventdate"];
        $event->update();


      
        
        return $event;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Events::destroy($id);
    }
}
