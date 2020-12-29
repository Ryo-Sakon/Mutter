<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'あくたの龍ちゃん',
                'email' => 'akuta' . '@gmail.com',
                'password' => 'akutagawa',
            ],
            ['name' => 'そうしのまくら',
                'email' => 'seisyounagon' . '@gmail.com',
                'password' => 'seisyounagon',
            ], ['name' => 'たきじい',
                'email' => 'takiiji' . '@gmail.com',
                'password' => 'kobayashi',
            ],
        ]);
    }
}
