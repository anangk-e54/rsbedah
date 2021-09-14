<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function getService_img(){
        if(!$this->service_img){
            return asset('assets/images/team/doctor-woman.jpg');
        }

        return asset('assets/images/team/'.$this->service_img);
    }
    

}