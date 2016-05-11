<?php

use yii\db\Migration;

class m160511_145942_blog extends Migration
{
    public function up()
    {

        $this->createTable('blog', [
            'id' => "MEDIUMINT(8)  NOT NULL AUTO_INCREMENT PRIMARY KEY",
            'title' => "VARCHAR(255)  NOT NULL",
            'post_url' => "VARCHAR(255)  NOT NULL",
            'content' => "TEXT(255)  NOT NULL",
            'is_active' => "TINYINT(1)  DEFAULT NULL",
        ]);



    }

    public function down()
    {
        echo "m160511_145942_blog cannot be reverted.\n";

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
