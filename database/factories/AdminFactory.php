<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name'=>'ahmad',
           'email'=>'a0592240626@gmeil.com',
           'password'=> Hash::make('123456')
        ];
    }
}
