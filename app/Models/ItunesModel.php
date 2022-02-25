<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItunesModel extends Model
{
    use HasFactory;
    protected $table = "itunes";
    protected $fillable = [
        "title",
        "poster",
        "description",
        "link",
    ];
}
