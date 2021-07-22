<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $author
 * @property string|null $co-author
 * @property string $name
 * @property string|null $short_description
 * @property string|null $date
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author', 'name'], 'required'],
            [['co_author', 'short_description'], 'string'],
            [['date'], 'safe'],
            [['author', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'co_author' => 'Co Author',
            'name' => 'Name',
            'short_description' => 'Short Description',
            'date' => 'Date',
        ];
    }
}
