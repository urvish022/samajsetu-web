<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatrimonyDetail extends Model
{
    use HasFactory;

    protected $table = 'matrimony_details';
    protected $primaryKey = 'matrimony_id';
    public $timestamps = false; 

    protected $fillable = [
        'full_name_eng',
        'full_name_guj',
        'village_id',
        'sakh',
        'birth_date',
        'gender',
        'member_id',
        'education',
        'height',
        'weight',
        'mosad',
        'occupation',
        'address',
        'country_id',
        'photo',
        'maritual_status',
        'extra_details',
        'mobile_no',
        'approval_flag',
        'met_active_flag',
        'land',
        'mother_name',
        'mosad_sakh',
        'father_occupation',
        'mother_occupation',
        'brother',
        'sister',
        'income',
        'father_mobile',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'approval_flag' => 'boolean',
        'met_active_flag' => 'boolean',
    ];

    public function getAgeAttribute()
    {
        $today = Carbon::now();
        $birthDate = Carbon::parse($this->birth_date);

        return $birthDate->diffInYears($today);
    }

    public function getBirthDateAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function village()
    {
        return $this->belongsTo(VillageSetting::class,'village_id','village_id');
    }

    public function country()
    {
        return $this->belongsTo(CountryDetail::class,'country_id','country_id');
        
    }
}
