<?php

use yii\db\Migration;

class m160511_145950_tag extends Migration
{
    public function up()
    {

        $this->createTable('tag', [
            'id' => "MEDIUMINT(8)  NOT NULL AUTO_INCREMENT PRIMARY KEY",
            'title' => "VARCHAR(255)  NOT NULL",
        ]);

    }

    public function down()
    {
        echo "m160511_145950_tag cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
