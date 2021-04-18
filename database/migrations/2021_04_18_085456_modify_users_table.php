<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
            //drop unnecessary columns
            $table->dropColumn('email');
            $table->dropColumn('name');
            $table->dropColumn('email_verified_at');

            //add needed columns
            $table->string('firstname');
            $table->string('surname');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table)
        {
            //reverse drop unnecessary columns
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
    
            //reverse add needed columns
            $table->dropColumn('firstname');
            $table->dropColumn('surname');
        });
    
    }
}
