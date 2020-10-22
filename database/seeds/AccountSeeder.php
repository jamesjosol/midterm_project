<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id'       =>  1,
                'acct_name'     =>  'Moreno B. Regular Account',
                'init_invest'   =>  80000,
                'start_date'    =>  '2020-05-25',
                'remarks'       =>  'Done with normal transaction'
            ],
            [
                'user_id'       =>  2,
                'acct_name'     =>  'Solidad Fund',
                'init_invest'   =>  960000,
                'start_date'    =>  '2020-06-11',
                'remarks'       =>  'Done with normal transaction'
            ],
            [
                'user_id'       =>  3,
                'acct_name'     =>  'Guerra B. Regular Account',
                'init_invest'   =>  130000,
                'start_date'    =>  '2020-06-24',
                'remarks'       =>  'Done with normal transaction'
            ],
            [
                'user_id'       =>  4,
                'acct_name'     =>  'Salazar B. Regular Account',
                'init_invest'   =>  95000,
                'start_date'    =>  '2020-07-02',
                'remarks'       =>  'Done with normal transaction'
            ],
        ];

        foreach($data as $acct) {
            \App\Account::create($acct);
        }
    }
}
