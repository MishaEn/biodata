<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bonus}}`.
 */
class m220407_155526_create_bonus_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bonus}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'isUnlimited' => $this->boolean()->null()->defaultValue(false),
            'count' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bonus}}');
    }
}
