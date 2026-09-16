<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Report;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}