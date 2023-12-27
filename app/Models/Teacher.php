<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;

    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    protected $fillable = [
        'name'
    ];


}
