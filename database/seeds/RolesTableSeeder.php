<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{

    public function run()
    {
        $admin = new Role();
        $admin->name = "Admin";
        $admin->save();

        $author = new Role();
        $author->name = "Author";
        $author->save();

        $subscriber = new Role();
        $subscriber->name = "Subscriber";
        $subscriber->save();

    }
}
