<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMatrimonyData;
use App\Models\MatrimonyDetail;
use App\Models\VillageSetting;
use Illuminate\Http\Request;

class MatrimonyController extends Controller
{
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
