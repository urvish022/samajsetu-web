<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyDetail extends Model
{
    use HasFactory;

    protected $table = 'family_details';

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
