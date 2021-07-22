<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210721_092951_books
 */
class m210721_092951_books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('books', [
            'id' => Schema::TYPE_PK,
            'author' => Schema::TYPE_STRING . ' NOT NULL',
            'co-author' => Schema::TYPE_TEXT,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'short_description' => Schema::TYPE_TEXT,
            'date' => Schema::TYPE_DATE,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210721_092951_books cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210721_092951_books cannot be reverted.\n";

        return false;
    }
    */
}
