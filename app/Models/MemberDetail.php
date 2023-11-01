<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberDetail extends Model
{
    use HasFactory;

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

}
