<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','desc','is_new','creater_id'
    ];

    protected $casts = [
        'is_new' => 'boolean'
    ];

    public function users()
        {
        return $this->hasMany(Uses::class);
        }
}
