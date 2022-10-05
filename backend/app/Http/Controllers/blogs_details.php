<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Blogs;
class blogs_details extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Blogs $blogs):JsonResponse
    {
        return response()->json(
            $blogs
            -> where("BloEnabled",'true')
            ->get()
        );
    }
    public function GetAllBlogs(Blogs $blogs):JsonResponse{
        return response()->json(
            $blogs
            ->orderBy('BloEnabled','desc')
            ->get()
        );
    }
    public function update_status_blogs($BloId): JsonResponse
    {
              $blogs= Blogs::findorFail($BloId);
            if ($blogs->BloEnabled === 'true') {
                $blogs->BloEnabled = 'false';
                $blogs->save();
                return response()->json([
                    "message" => "Blog Deactivated",
                ]);
            }else if($blogs->BloEnabled === 'false')
            $blogs->BloEnabled = 'true';
            $blogs->save();
            return response()->json([
                "message" => "Blog activated",
            ]);
    }
    public function getLatestBlogs(Blogs $blogs):JsonResponse
    {
        return response()->json(
            $blogs
            -> where("BloEnabled",'true')
            ->orderBy('created_at', 'desc')
            ->take(3)
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBlogs(Request $request)
    {

        $task = new Blogs;
       
        if ($request->image) {
            $getImage = $request->image;
            $imageName = $getImage->getClientOriginalName();
            $imagePath = public_path() . '/images';
            $getImage->move($imagePath, $imageName);
            $task->BloImage = $imageName;
        }
        
        $task->BloTitle = $request["BloTitle"];
        $task->BloVideo = $request["BloVideo"];
        $task->BloDescription = $request["BloDescription"];
        $task->BloEnabled = $request["BloEnabled"];
        $task->save();

        log::info($imageName);
       

        return $task;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blogs $blog,$BloId)
    {
        
        return response()->json(
           $blog->where('BloId',$BloId)->get()
           
        );
    }
    public function searchBlogs(Request $request,Blogs $task)
    {
        $title = $request['BloTitle'];
        $Desc = $request['BloDesc'];
        if ($title||$Desc) {
           $tasks= $task->where('BloTitle', 'Like','%'.$title.'%')->orWhere('BloDescription', 'Like','%'.$Desc.'%')->get();
            return $tasks;
        }
    }
    public function searchActiveBlogs(Request $request,Blogs $task)
    {
        $title = $request['BloTitle'];
        $Desc = $request['BloDesc'];
        if ($title||$Desc) {
           
           $tasks= $task->where('BloTitle', 'Like','%'.$title.'%')->Where('BloDescription', 'Like','%'.$Desc.'%')->whereNotIn('BloEnabled',["false"])->get();
            return $tasks;
        }
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
    public function update(Request $request,$BloId)
    {
       $blog= Blogs::findorFail($BloId);
        if($request->image){
            $path = public_path() . '/images/';

            //code for remove old file
            if($blog->BloImage=null && $blog->BloImage=""){
                 $file_old = $path.$blog->BloImage;
                 unlink($file_old);
            }

            //upload new file
            $file = $request->image;
            $filename =$file->getClientOriginalName();
            $file->move($path, $filename);
            $blog->BloImage= $filename;
        }  
        
        $blog->BloTitle = $request["BloTitle"];
        $blog->BloVideo = $request["BloVideo"];
        $blog->BloDescription = $request["BloDescription"];
        $blog->BloEnabled = $request["BloEnabled"];
        $blog->update();


      
        
        return $blog;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($BloId)
    {
        return Blogs::destroy($BloId);
    }
}


