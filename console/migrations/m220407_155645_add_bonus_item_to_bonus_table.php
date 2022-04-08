<?php

use yii\db\Migration;

/**
 * Class m220407_155645_add_bonus_item_to_bonus_table
 */
class m220407_155645_add_bonus_item_to_bonus_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Yii::$app->db->createCommand()->batchInsert(
            'bonus',
            ['name', 'count', 'isUnlimited'],
            [
                ['Бесплатное обследование', 1, false],
                ['Скидка на поездку в санаторий', null, true],
                ['Кружку с логотипом “БиоДата”', 10, false],
            ]
        )->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220407_155645_add_bonus_item_to_bonus_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220407_155645_add_bonus_item_to_bonus_table cannot be reverted.\n";

        return false;
    }
    */
}
