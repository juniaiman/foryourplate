<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorit extends Model
{
    use HasFactory;

    protected $table = 'favorits';
    protected $primaryKey = 'slug';
    public $incrementing = false;
}
