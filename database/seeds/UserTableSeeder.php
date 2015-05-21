<?php

use Faker\Generator;
use teachme\Entities\User;

class UserTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [

            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('admin'),

        ];
    }
    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }

    private function createAdmin()
    {
        $this->create([

            'name' => 'BillyAndrys',
            'email' => 'billyandrys@gmail.com',
            'password' => bcrypt('admin'),

            ]);
    }
}
