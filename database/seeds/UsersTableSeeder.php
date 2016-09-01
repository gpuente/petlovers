<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedUsers();
        $this->command->info('Usuario admin inicializado');
    }

    function seedUsers(){
      $u = new User;
      $u->name = 'Guillermo Puente';
      $u->email = 'guillermo.ps09@gmail.com';
      $u->password = bcrypt('123456');
      $u->save();
    }
}
