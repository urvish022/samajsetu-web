<?php

namespace App\Http\Controllers;

use App\Models\BusinessDirectory;
use App\Models\FamilyDetail;
use App\Models\MatrimonyDetail;
use App\Models\MemberDetail;
use App\Models\MemorialDetail;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = __('dashboard.title');
        $member_id = auth()->user()->member_id;
        
        $member = MemberDetail::find($member_id);
        $details = FamilyDetail::with(['relation','village'])->where('approval_flag',1)->where('fd_active_flag',1)->where('member_id',$member_id)->orderBy('fbirth_date','ASC')->get();

        $matrimony = MatrimonyDetail::where('member_id',$member_id)->where('met_active_flag',1)->get();
        $memorial = MemorialDetail::where('member_id',$member_id)->where('mem_active_flag',1)->get();
        $business = BusinessDirectory::where('member_id',$member_id)->where('bd_active_flag',1)->get();

        return view('pages.profile.index',compact('title','details','member','matrimony','memorial','business'));
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
