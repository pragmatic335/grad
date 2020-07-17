<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%manuals}}`.
 */
class m200717_033145_create_manuals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%manuals}}', [
            'id' => $this->primaryKey(),
            'name' =>  $this->char(40)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%manuals}}');
    }
}
