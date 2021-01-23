<?php

use yii\db\Migration;

class m130522_652354_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{publication}}', [
            'id' => $this->integer()->notNull(),
            'namepublic' => $this->string()->notNull()->unique(),
            'subject' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'namefile' => $this->string()->notNull()->unique(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{publication}}');
    }
}
