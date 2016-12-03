<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * A company supports many operating systems.
     *
     * @return     Collection  
     */
    public function operatingSystems()
    {
        return $this->belongsToMany('App\OperatingSystem')->withTimestamps();
    }    
}
