<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180426_080450_slide
 */
class m180519_010622_noteTable extends Migration
{
    public function up()
    {
        $this->createTable('noteTable', [
            'id' => $this->primaryKey(),
            'noteId' => $this->integer()->notNull(),
            'note' => $this->text(),
        ]);

        $this->addforeignKey('fk_note_noteTableId','noteTable','noteId','note','id'); 
    }

    public function down()
    {
        $this->dropForeignKey('fk_note_noteTableId','noteTable');
        $this->dropTable('noteTable');
    }
}
