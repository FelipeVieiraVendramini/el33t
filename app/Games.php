<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $table = "content_games";

    protected $fillable = [
        'name', 'order', 'updated_at'
    ];


}
