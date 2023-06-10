<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $fullName = $firstName . ' ' . $lastName;
            $email = $faker->email;
            $phone = $faker->phoneNumber;

            DB::table('users')->insert([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'full_name' => $fullName,
                'email' => $email,
                'phone' => $phone,
            ]);
        }
    }
}
