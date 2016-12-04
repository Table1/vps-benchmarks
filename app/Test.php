<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /**
     * A test belongs to many performance cateogries.
     *
     * @return     Collection
     */
    public function performanceCategories()
    {
        return $this->belongsToMany('App\PerformanceCategory')->withTimestamps();
    }

    /**
     * A test belongs to many services.
     *
     * @return     Collection
     */
    public function services()
    {
        return $this->belongsToMany('App\Service')->withTimestamps();
    }


}
