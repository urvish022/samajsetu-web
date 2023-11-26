<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MemberDetail extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'member_details';
    protected $primaryKey = 'member_id';
    public $timestamps = false;

    protected $fillable = [
        'full_name_eng',
        'full_name_guj',
        'village_id',
        'country_id',
        'city_name',
        'sakh',
        'birth_date',
        'blood_grp',
        'mosad',
        'married_status',
        'education',
        'occupation',
        'mobile_no',
        'wp_mobile_no',
        'email_id',
        'photo',
        'address',
        'bussiness_address',
        'user_name',
        'password',
        'approval_flag',
        'mem_active_flag',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'approval_flag' => 'boolean',
        'mem_active_flag' => 'boolean',
    ];

    public function getDates()
    {
        return ['birth_date'];
    }

    public function village()
    {
        return $this->hasOne(VillageSetting::class,'village_id','village_id');
    }

    public function getBirthDateAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function family()
    {
        return $this->hasMany(FamilyDetail::class,'member_id','member_id');
    }

    public function country()
    {
        return $this->hasOne(CountryDetail::class,'country_id','country_id');
    }

    public function fcm()
    {
        return $this->hasMany(FcmDetail::class,'member_id','member_id');
    }

}
