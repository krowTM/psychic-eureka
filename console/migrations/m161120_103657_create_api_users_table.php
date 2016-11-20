<?php

use yii\db\Migration;

/**
 * Handles the creation of table `api_users`.
 */
class m161120_103657_create_api_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('api_users', [
            'id' => $this->primaryKey(),
        	'username' => $this->string(50),
        	'access_token' => $this->char(32)
        ]);
        
        $this->insert('api_users', [
        	'username' => 'test',
        	'access_token' => '235fgb3g324SDFE5Ger'
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('api_users');
    }
}
