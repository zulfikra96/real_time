<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role');
            $table->rememberToken();
            $table->timestamps();
        });


        DB::table('users')->insert([
            'username'  => 'zulfikra96',
            'password'  => bcrypt('Billgates1996'),
            'email'     => 'zulfikra@gmail.com',
            'role'      => 'admin'
        ]);


        DB::table('users')->insert([
            'username'  => 'noval',
            'password'  => bcrypt(123456),
            'email'     => 'noval@gmail.com',
            'role'      => 'owner'
        ]);

        DB::table('users')->insert([
            'username'  => 'lussi',
            'password'  => bcrypt(123456),
            'email'     => 'lussi@gmail.com',
            'role'      => 'hrd'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
