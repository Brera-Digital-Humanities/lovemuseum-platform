<?php namespace Quivi\Profile\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class UsersAddBirthDate extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('users', 'birth_date')) {
            Schema::table('users', function ($table) {
                $table->date('birth_date')->nullable()->after('email');
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('users', 'birth_date')) {
            Schema::table('users', function ($table) {
                $table->dropColumn('birth_date');
            });
        }
    }
}
