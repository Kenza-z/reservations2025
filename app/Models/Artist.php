<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['firstname', 'lastname'];
    protected $table = 'artists';
    public $timestamps = false;

}
