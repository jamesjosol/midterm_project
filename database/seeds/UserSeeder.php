<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname'     =>  'Moreno',
                'fname'     =>  'Alexander Jay',
                'address'   =>  'Cebu City, Cebu',
                'phone'     =>  '0942.172.2662',
                'email'     =>  'alexjay@email.com',
                'password'  =>  bcrypt('password123')
            ],
            [
                'lname'     =>  'Solidad',
                'fname'     =>  'Johnny',
                'address'   =>  'Tagbilaran City, Bohol',
                'phone'     =>  '0962.966.3159',
                'email'     =>  'johnny@email.com',
                'password'  =>  bcrypt('password123')
            ],
            [
                'lname'     =>  'Guerra',
                'fname'     =>  'Mark Joseph',
                'address'   =>  'Tubigon, Bohol',
                'phone'     =>  '0946.724.1662',
                'email'     =>  'josephmarky@email.com',
                'password'  =>  bcrypt('password123')
            ],
            [
                'lname'     =>  'Salazar',
                'fname'     =>  'Rodel Jose',
                'address'   =>  'Mandaue City, Cebu',
                'phone'     =>  '0917.612.3321',
                'email'     =>  'rodeljose124@email.com',
                'password'  =>  bcrypt('password123')
            ],
        ];

        foreach($data as $user) {
            \App\User::create($user);
        }
    }
}
