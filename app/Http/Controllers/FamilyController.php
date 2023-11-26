<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFamilyMemberRequest;
use App\Jobs\UploadImageQueueJob;
use App\Models\FamilyDetail;
use App\Models\MemberDetail;
use App\Models\RelationDetail;
use App\Models\VillageSetting;
use App\Traits\ImageTrait;
use App\Traits\UtilTrait;
use Exception;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    use UtilTrait, ImageTrait;
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
    public function create()
    {
        $title = __('dashboard.title');
        $villages = VillageSetting::get();
        $relations = RelationDetail::get();

        return view('pages.family.create',compact('title','villages','relations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFamilyMemberRequest $request)
    {
        try{
            $input = $request->all();
            
            $result = $this->translate_text($request->ffull_name_eng);
            $input['ffull_name_guj'] = isset($result['responseData']['translatedText']) ? $result['responseData']['translatedText'] : "";
            unset($input['fphoto']);

            $uploadAPIURL = env('UPLOAD_IMAGE_API_URL');
            $input['fphoto'] = $this->base64ToImage($request->crop_photo,'user');
            $input['member_id'] = auth()->user()->member_id;
            
            //upload image to api server
            UploadImageQueueJob::dispatch($uploadAPIURL,$input['fphoto'],'matrimony');

            $status = FamilyDetail::create($input);
            if($status){
                return response()->json(['status'=>true,'message'=>'Your family member profile saved successfully. Admin will verify your member profile.']);
            } else {
                return response()->json(['status'=>false,'message'=>'Data not saved!']);
            }
        } catch (Exception $e){

            return response()->json(['status'=>false,'message'=>'Something went wrong!','data'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = __('dashboard.title');
        $member = MemberDetail::find($id);
        
        $details = FamilyDetail::with(['relation','village'])->where('approval_flag',1)->where('fd_active_flag',1)->where('member_id',$id)->orderBy('fbirth_date','ASC')->get();


        return view('pages.family.show',compact('details','title','member'));
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
