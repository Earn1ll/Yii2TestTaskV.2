<?php

use yii\db\Migration;

/**
 * Class m220805_173346_users_table
 */
class m220805_173346_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users_table', [
            'id' => $this->primaryKey(),
            'username' =>$this->char(50)->notNull()->unique(),
            `autch_key` =>$this-> varchar(32)->CHARACTER_SET_utf8->NULL,
            'info' =>$this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users_table');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220805_173346_users_table cannot be reverted.\n";

        return false;
    }
    */
}
