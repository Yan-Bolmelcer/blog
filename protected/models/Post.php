<?php

/**
 * This is the model class for table "posts".
 *
 * The followings are the available columns in table 'posts':
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $author_id
 * @property string $created_at
 * @property string $updated_at
 */
class Post extends CActiveRecord
{
	public function isAuthor($userId)
	{
		return $this->author_id == $userId;
	}
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'posts';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('title, content', 'required'),
            array('author_id', 'numerical', 'integerOnly'=>true),
            array('title', 'length', 'max'=>255),
            array('created_at, updated_at', 'safe'),
            array('id, title, content, author_id, created_at, updated_at', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'author_id' => 'Author ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        );
    }

    /**
     * Before saving a record, set the author_id automatically
     */
    protected function beforeSave()
    {
        if ($this->isNewRecord) {
			$this->author_id = Yii::app()->user->id;
            $this->created_at = date('Y-m-d H:i:s');
            $this->updated_at = date('Y-m-d H:i:s');
        } else {
            $this->updated_at = date('Y-m-d H:i:s');
        }

        return parent::beforeSave();
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     */
    public function search()
    {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('author_id', $this->author_id);
        $criteria->compare('created_at', $this->created_at, true);
        $criteria->compare('updated_at', $this->updated_at, true);

        return new CActiveDataProvider('Post', array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
