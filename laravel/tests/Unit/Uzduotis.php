<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Uzduotis extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function Unit()
    {
        $response = $this->get('/clients');


        $response = $this->get('/clientform');
    }
}
