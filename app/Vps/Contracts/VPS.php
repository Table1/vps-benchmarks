<?php

namespace App\Vps\Contracts;

interface Vps
{

    /**
     * Create a VPS
     * 
     * @return string
     */
    public function sendCreateRequest();

    /**
     * Destroy a VPS
     * 
     * @return string
     */
    public function sendDestroyRequest();

}
