<?php

namespace Database\Factories;

use App\Models\UserCompany;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserCompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserCompany::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>'Fpt Shop',
            'detail'=>$this->faker->realText(100),
            'image_logo'=>'fpt.jpg',
            'image_cover'=>'',
            'address'=>'125 Phan Đăng Lưu',
            'website'=>'',
            'size'=>10,
            'province_id'=>$this->faker->randomFloat(1,100),
            'contact_name'=>'Bao Duy',
            'is_active'=>true,
            'user_id'=>$this->faker->randomFloat(1,100),
            //
        ];
    }
}
