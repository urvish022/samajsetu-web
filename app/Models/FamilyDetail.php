<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyDetail extends Model
{
    use HasFactory;

    protected $table = 'family_details';
    public $timestamps = false; 
    protected $primaryKey = 'family_id';

    protected $fillable = [
        "member_id",
        "ffull_name_eng",
        "ffull_name_guj",
        "relation_id",
        "village_id",
        "fcity_name",
        "fbirth_date",
        "fblood_grp",
        "fmosad",
        "fpiyar",
        "fmarried_status",
        "feducation",
        "foccupation",
        "fmobile_no",
        "femail_id",
        "fphoto",
        "country_id",
        "fbussiness_address",
        "approval_flag",
        "fd_active_flag"
    ];

    public function member()
    {
        return $this->hasOne(MemberDetail::class,'member_id','member_id');
    }

    public function relation()
    {
        return $this->hasOne(RelationDetail::class,'relation_id','relation_id');
    }

    public function village()
    {
        return $this->hasOne(VillageSetting::class,'village_id','village_id');
    }

    public function getFbirthDateAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}
