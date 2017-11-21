<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m171121_061832_pages_table
 */
class m171121_061832_pages_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable("page",
            [
                "id"=> Schema::TYPE_PK,
                "title"=>Schema::TYPE_STRING,
                "content_text"=>Schema::TYPE_TEXT
            ]);
        // $this->batchInsert("page",[
        //     [1,"Home","This is home page"],
        //     [2,"About us","This is about us page"]
        // ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171121_061832_pages_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171121_061832_pages_table cannot be reverted.\n";

        return false;
    }
    */
}
