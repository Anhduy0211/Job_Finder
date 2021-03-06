<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'email' => $this->faker->unique()->safeEmail,
            'password' => 'ABC123', // password
            'user_type'=>$this->faker->randomFloat(1,5),
            'phone' => '0977881898',
            'first_name' => 'Duy',
            'last_name'=>'Nguyen',
            'full_name'=>'Nguyen Bao Anh Duy',
            'date_of_birth' =>now(),
            'gender' => true,
            'address' =>'34 Truong Dang Que',
            'url_avatar' =>'avatar.png',
            'is_active' =>true
           
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
