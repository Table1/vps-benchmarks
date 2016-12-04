<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * A service belongs to many performance cateogries.
     *
     * @return     Collection
     */
    public function performanceCategories()
    {
        return $this->belongsToMany('App\PerformanceCategory')->withTimestamps();
    }

    /**
     * A service belongs to many tests.
     *
     * @return     Collection
     */
    public function tests()
    {
        return $this->belongsToMany('App\Test')->withTimestamps();
    }


}
