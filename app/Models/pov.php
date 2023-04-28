<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pov extends Model
{
    use HasFactory;
    function client(){
        return $this->belongsTo(client::class);
    }
    function appliance(){
        return $this->belongsTo(appliance::class);
    }

}
