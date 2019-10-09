<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new \App\User;
        $user1->name = "Saiful Habib";
        $user1->email = "saiful@smkitihsanulfikri.sch.id";
        $user1->password = Hash::make('password');
        $user1->save();
    }
}
