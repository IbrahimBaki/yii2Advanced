<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $category_id
 * @property string|null $description
 * @property string|null $image
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Category $category
 * @property ProductOptions[] $productOptions
 */
class Product extends \yii\db\ActiveRecord
{
    public $options;

    public function behaviors()
    {
        return [
            TimestampBehavior::className()

        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['options'], 'safe'],
            [['title'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'jpg,jpeg,png'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category_id' => 'Parent Category',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }
    public function upload()
    {
        if($this->validate()){
            $this->image->saveAs('@staticPath/images/'. $this->image->baseName . '.' . $this->image->extension);
            return true;
        }else{
            return false;
        }
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[ProductOptions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductOptions()
    {
        return $this->hasMany(ProductOptions::className(), ['product_id' => 'id']);
    }
}
