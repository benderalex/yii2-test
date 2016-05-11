<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $title
 * @property string $post_url
 * @property string $content
 * @property integer $is_active
 */
class tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['is_active'], 'integer'],
            [['title', 'post_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'post_url' => 'Post Url',
            'content' => 'Content',
            'is_active' => 'Is Active',
        ];
    }
}
