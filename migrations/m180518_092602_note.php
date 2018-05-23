<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180428_123406_slider
 */
class m180518_092602_note extends Migration
{
    public function up()
    {
        $this->createTable('note', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'description' => $this->text(),
            'updated_at' => $this->timestamp()->null()->defaultExpression('CURRENT_TIMESTAMP')->append('on update current_timestamp'),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            //'updated_at' => 'timestamp on update current_timestamp',
            //'created_at' => $this->dateTime()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('note');
    }
}
