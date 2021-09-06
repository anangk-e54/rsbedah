<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    public function getFacility_img(){
        if(!$this->facility_img){
            return asset('assets/images/team/doctor-woman.jpg');
        }

        return asset('assets/images/team/'.$this->facility_img);
    }
    
}