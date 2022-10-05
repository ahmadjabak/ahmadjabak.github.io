<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Admins;

use App\Models\Roles;
class admins_details extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Admins $admin):JsonResponse
    {

        return response()->json(
         $admin->with("roles")->where('AdEnabled','active')->get()
        );
    }
    public function GetAllAdmins(Admins $admins):JsonResponse{
        return response()->json(
            $admins->with('roles')
            ->orderBy('AdEnabled','asc')
            ->get()
        );
    }
  
    public function update_status(Admins $user): JsonResponse
    {
            if ($user->AdEnabled === 'active') {
                $user->AdEnabled = 'not active';
                $user->save();
                return response()->json([
                    "message" => "Employee Deactivated",
                ]);
            }else if($user->AdEnabled === 'not active')
            $user->AdEnabled = 'active';
            $user->save();
            return response()->json([
                "message" => "Employee activated",
            ]);
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
        $task = new Admins();
       
        if ($request->image) {
            $getImage = $request->image;
            $imageName = $getImage->getClientOriginalName();
            $imagePath = public_path() . '/images';
            $getImage->move($imagePath, $imageName);
            $task->AdImage = $imageName;
        }
        $task->RoId = $request["roleid"];
        $task->AdFname = $request["fname"];
        $task->AdMname = $request["mname"];
        $task->AdLname = $request["lname"];
        $task->AdEmail = $request["email"];
        $task->AdPhone=$request["phone"];
        $task->AdPassword=$request["pass"];
        $task->AdEnabled=$request["status"];
        $task->save();

       
       

        return $task;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($AdId,Admins $admin):JsonResponse
    {
         
          return response()->json(
            $admin->with('roles')->where('AdId',$AdId)->get()
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
    public function update_profile(Request $request, $AdId)
    {
        $admin= Admins::findorFail($AdId);
        if($request->image){
            $path = public_path() . '/images/';

            //code for remove old file
            if($admin->AdImage=null && $AdId->AdImage=""){
                $file_old = $path.$admin->AdImage;
                unlink($file_old);
            }

            //upload new file
            $file = $request->image;
            $filename =$file->getClientOriginalName();
            $file->move($path, $filename);
            $admin->AdImage= $filename;
        }

        $admin->AdFname = $request["AdFname"];
        $admin->AdMname = $request["AdMname"];
        $admin->AdLname = $request["AdLname"];
        $admin->AdPhone = $request["AdPhone"];
        $admin->AdEmail = $request["AdEmail"];
       
       
        $admin->AdEnabled = $request["AdEnabled"];
        $admin->update();




        return $admin;
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
