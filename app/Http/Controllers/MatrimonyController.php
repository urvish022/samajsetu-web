<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMatrimonyData;
use App\Jobs\UploadImageQueueJob;
use App\Models\MatrimonyDetail;
use App\Models\VillageSetting;
use App\Traits\ImageTrait;
use App\Traits\UtilTrait;
use Exception;
use Illuminate\Http\Request;

class MatrimonyController extends Controller
{
    use ImageTrait, UtilTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $queryParams = $request->query();
        $filter = $request->input('filter');
        $filter['type'] = $queryParams['type'] ?? 'male';

        $matrimonyData = MatrimonyDetail::with('village')->where('gender',$filter['type'])->where('approval_flag',1)->where('met_active_flag',1)->orderBy('matrimony_id','DESC')->paginate(30);

        $title = __('dashboard.title');

        $matrimonyData->appends($filter);
        return view('pages.matrimony.index', compact('title','matrimonyData','filter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villages = VillageSetting::get();
        $title = __('dashboard.title');

        return view('pages.matrimony.create',compact('title','villages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMatrimonyData $request)
    {
        try{
            $input = $request->all();
            
            $result = $this->translate_text($request->full_name_eng);
            $input['full_name_guj'] = isset($result['responseData']['translatedText']) ? $result['responseData']['translatedText'] : "";
            unset($input['photo']);

            $uploadAPIURL = env('UPLOAD_IMAGE_API_URL');
            $input['photo'] = $this->base64ToImage($request->crop_photo,'matrimony');
            $input['member_id'] = auth()->user()->member_id;
            $input['weight'] = $input['weight']. "Kg";
            $input['height'] = $input['height']. "Ft";
            
            //upload image to api server
            UploadImageQueueJob::dispatch($uploadAPIURL,$input['photo'],'matrimony');

            $status = MatrimonyDetail::create($input);
            if($status){
                return response()->json(['status'=>true,'message'=>'Your matrimony profile saved successfully. Admin will verify your matrimony profile.']);
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
        $data = MatrimonyDetail::with(['country','village'])->find($id);
        $title = __('dashboard.title');

        return view('pages.matrimony.show',compact('data','title'));
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
