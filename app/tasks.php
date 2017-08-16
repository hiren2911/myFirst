<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    //
    public function getAllActiveTasks() 
    {
        return $this->where('status', '=', 1)->get();
    }
}
