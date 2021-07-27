<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function getHeadline(){
        if(!$this->headline_img){
            return asset('assets/images/team/doctor-woman.jpg');
        }

        return asset('assets/images/team/'.$this->headline_img);
    }

    public function getFirstparagraph(){
        return asset('assets/images/team/'.$this->firstparagraph_img);
    }
    public function getSecondparagraph(){
        return asset('assets/images/team/'.$this->secondparagraph_img);
    }
    public function getThirdparagraph(){
        return asset('assets/images/team/'.$this->thirdparagraph_img);
    }
    public function getFourthparagraph(){
        return asset('assets/images/team/'.$this->fourthparagraph_img);
    }
    
}