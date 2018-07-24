<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add = new User;
        $add->name     = 'hager';
        $add->password = bcrypt(12345);
        $add->email    = 'user@user.com';
        $add->level='user';
        $add->status=1;
        $add->save();

    }
}
