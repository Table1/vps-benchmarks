<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperatingSystem extends Model
{
    /**
     * An operating system belongs to many companies.
     *
     * @return     Collection
     */
    public function companies()
    {
        return $this->belongsToMany('App\Company')->withTimestamps();
    }
}
