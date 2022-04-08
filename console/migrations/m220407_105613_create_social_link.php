<?php

use yii\db\Migration;

/**
 * Class m220407_105613_create_social_link
 */
class m220407_105613_create_social_link extends Migration
{
    public $table = '{{%social_link}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOption = null;
        if ($this->db->driverName === 'mysql')
        {
            $tableOption = 'CHARTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable($this->table, [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'source' => $this->string(255)->notNull(),
            'source_id' => $this->string(255)->notNull(),
        ], $tableOption);
        $this->addForeignKey ('FK_social_link_user',
            $this->table, 'user_id', '{{%user}}', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->table);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220407_105613_create_social_link cannot be reverted.\n";

        return false;
    }
    */
}
