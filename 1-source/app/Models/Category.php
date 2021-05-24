<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $primaryKey = "category_id";
    protected $table = 'category';

    function companies()
    {
        return $this->hasMany("App\Models\Company", "category_id");
    }
}
