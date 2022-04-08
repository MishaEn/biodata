<?php

use yii\base\InvalidConfigException;
use yii\db\Migration;
use yii\web\User;

/**
 * Class m220407_110459_create_add_admin
 */
class m220407_110459_create_add_admin extends Migration
{
    /**
     * {@inheritdoc}
     * @throws InvalidConfigException
     * @throws \yii\base\Exception
     */
    public function safeUp()
    {
        Yii::$app->db->createCommand()->batchInsert(
            'user',
            ['username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'status', 'created_at', 'updated_at',],
            [['admin', 'auth_secret', Yii::$app->getSecurity()->generatePasswordHash('password'), 'reset_token', 'admin@email.com', '10', '1649330262', '1649330262',],]
        )->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220407_110459_create_add_admin cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220407_110459_create_add_admin cannot be reverted.\n";

        return false;
    }
    */
}
