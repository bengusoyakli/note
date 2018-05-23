<?php

namespace kouosl\note\models;

use Yii;

/**
 * This is the model class for table "noteTable".
 *
 * @property int $id
 * @property int $noteId
 * @property string $note
 */
class NoteTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noteTable';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noteId'], 'required'],
            [['noteId'], 'integer'],
            [['note'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'noteId' => 'Note ID',
            'note' => 'Note',
        ];
    }
}
