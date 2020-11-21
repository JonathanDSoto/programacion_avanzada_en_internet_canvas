<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Jonathan Soto";
        $user->email = "jsoto@uabcs.mx";
        $user->password = bcrypt("secret");
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->name = "Jonathan Soto";
        $user->email = "jsoto@gmail.com";
        $user->password = bcrypt("secret");
        $user->role_id = 2;
        $user->save();
    }
}
