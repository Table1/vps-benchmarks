<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerformanceCategory extends Model
{
    /**
     * A performance category belongs to many services.
     *
     * @return     Collection
     */
    public function services()
    {
        return $this->belongsToMany('App\Service')->withTimestamps();
    }

    /**
     * A performance category belongs to many services.
     *
     * @return     Collection
     */
    public function tests()
    {
        return $this->belongsToMany('App\Service')->withTimestamps();
    }
}
