<?php

use yii\db\Migration;

class m160511_145958_tag_in_post extends Migration
{
    public function up()
    {
        $this->createTable('tags_in_post', [
            'post_id' => "MEDIUMINT(8)",
            'tag_id' => "MEDIUMINT(8)",
        ]);
        $this->createIndex('index_post_id_tag_id', 'tags_in_post', ['post_id', 'tag_id']);

    }

    public function down()
    {
        echo "m160511_145958_tag_in_post cannot be reverted.\n";

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
