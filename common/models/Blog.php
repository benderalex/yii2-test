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
class Blog extends \yii\db\ActiveRecord
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
            [['title'], 'required'],
            [['is_active'], 'integer'],
            [['tag_list'], 'safe'],
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


    public function getTags()
    {
        return $this->hasMany(Tag::className(),['id' => 'tag_id'])
            ->viaTable('tags_in_post',['post_id' => 'id']);
    }

    


    public function behaviors()
    {
        return [
            'caty' => [
                'class' => \common\behaviors\ManyHasManyBehavior::className(),
                'relations' => [
                    'tags' => 'tag_list',
                ],
            ],
        ];
    }

    
    
    
    
    
}
