<?php

use yii\db\Migration;

/**
 * Class m220408_052248_add_user_bonus_to_user
 */
class m220408_052248_add_user_bonus_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey ('FK_user_bonus',
        '{{%user}}', 'bonus_id', '{{%bonus}}', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220408_052248_add_user_bonus_to_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220408_052248_add_user_bonus_to_user cannot be reverted.\n";

        return false;
    }
    */
}
