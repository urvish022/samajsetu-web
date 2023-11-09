<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessDirectory extends Model
{
    use HasFactory;

    protected $table = 'business_directory';
    protected $primaryKey = 'business_id';

    public function category()
    {
        return $this->belongsTo(BusinessCategory::class,'bc_id','bc_id');
    }
}
