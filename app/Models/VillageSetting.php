<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillageSetting extends Model
{
    use HasFactory;

    protected $table = 'village_setting';

    public function members()
    {
        return $this->hasMany(MemberDetail::class,'village_id','village_id');
    }
}
