<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

    public function run()
    {

        User::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'name' => 'Steve',
            'email' => 'crockett95@gmail.com'
        ]);

        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            User::create([
                'username' => $faker->userName,
                'password' => Hash::make('password'),
                'name' => $faker->name,
                'email' => $faker->email
            ]);
        }
    }

}
