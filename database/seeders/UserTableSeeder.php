<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersData=[
            [
                'name'=>'sophia',
                'email'=>'sophia@gmail.com',
                'password'=>bcrypt('sophia002'),
                'gender'=>'female',
                'role'=>'admin',
                'image'=>''
            ],

            [
                'name' => 'pasang',
                'email' => 'pasang@gmail.com',
                'password' => bcrypt('pasang002'),
                'gender' => 'male',
                'role' => 'user',
                'image' => ''
            ],

        ];

        foreach ($usersData as $user){
            $totalUser = User::where('email', $user['email'])->count();
            if($totalUser==0){
                User::create($user);
            }
        }
    }
}
