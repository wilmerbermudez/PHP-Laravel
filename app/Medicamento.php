<?php

namespace MediCasa;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    public function scopeMedicamento($query, $medicamento){
      if(trim($medicamento) !=""){
        $query->where(\DB::raw('medicamento'), "LIKE","%$medicamento%");
      }
    }
}
