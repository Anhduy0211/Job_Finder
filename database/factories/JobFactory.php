<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'position'=>$this->faker->text(),
            'application_email'=>$this->faker->words(3, true),
            'image'=>$this->faker->realText(50),
            'details'=>$this->faker->realText(200),
            'amount'=>$this->faker->randomFloat(2,10,100),
            'experience'=>$this->faker->randomFloat(2,10),
            'salary_max'=>3000,
            'salary_min'=>2500,
            'salary_unit'=>'$',
            'work_time'=>8.00,
            'address'=>$this->faker->words(3,true),
            'deadline_for_submission'=>now(),
            'province_id'=>'48',
            'update_on' =>now(),
            'created_on'=>now(),
            'created_by'=>$this->faker->randomFloat(27,28,30),
            'is_active'=>true
            //
        ];
    }
}
