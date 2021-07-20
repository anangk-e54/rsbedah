<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function getDoctorphoto(){
        if(!$this->doctorphoto){
            return asset('assets/images/team/doctor-woman.jpg');
        }

        return asset('assets/images/team/'.$this->doctorphoto);
    }
}