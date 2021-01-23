<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%publication}}`.
 */
class m210120_064527_drop_publication_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%publication}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%publication}}', [
            'id' => $this->primaryKey(),
        ]);
    }
}
