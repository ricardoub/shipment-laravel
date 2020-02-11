<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Enums\ScopeType;

class AddRecordScopeToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('record_scope')->unsigned()->default(ScopeType::OWN);

            /**
             * from the ScoreType ENUM
             *
             *     const BLOCKED = 1;
             *     const OWN     = 2;
             *     const GROUP   = 3;
             *     const UNIT    = 4;
             *     const LINKED  = 5;
             *     const MANAGER = 6;
             *     const COMPANY = 7;
             *     const AUDITOR = 8;
             *     const SYSTEM  = 9;
             */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('record_scope');
        });
    }
}
