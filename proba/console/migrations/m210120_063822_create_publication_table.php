<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%publication}}`.
 */
class m210120_063822_create_publication_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%publication}}', [
            'id' => $this->primaryKey(),
            'iduser' => $this->integer()->notNull(),
            'namepublic' => $this->string(),
            'subject' => $this->string(128),
            'namefile' => $this->string(),
            'create_at' => $this->integer(),
            'update_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%publication}}');
    }
}
