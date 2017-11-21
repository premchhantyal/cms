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
                "url"=>Schema::TYPE_STRING,
                "content_text"=>Schema::TYPE_TEXT,
                "summary"=>Schema::TYPE_TEXT,
                "image"=>Schema::TYPE_STRING
            ]);
        $this->batchInsert("page",["title","url","content_text","summary"],[
            ["Home","home","This is home page",""],
            ["About us","about","This is about us page",""],
            ["contact us","contact","This is contact us page",""]
        ]);
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
