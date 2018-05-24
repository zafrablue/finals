<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tshirt".
 *
 * @property int $id
 * @property int $size_id
 * @property int $color_id
 * @property string $description
 * @property string $price
 * @property int $quantity
 *
 * @property Color $color
 * @property Size $size
 */
class Tshirt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tshirt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['size_id', 'color_id', 'description', 'price', 'quantity'], 'required'],
            [['size_id', 'color_id', 'quantity'], 'integer'],
            [['price'], 'number'],
            [['description'], 'string', 'max' => 200],
            [['color_id'], 'exist', 'skipOnError' => true, 'targetClass' => Color::className(), 'targetAttribute' => ['color_id' => 'id']],
            [['size_id'], 'exist', 'skipOnError' => true, 'targetClass' => Size::className(), 'targetAttribute' => ['size_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'size_id' => 'Size ID',
            'color_id' => 'Color ID',
            'description' => 'Description',
            'price' => 'Price',
            'quantity' => 'Quantity',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(Color::className(), ['id' => 'color_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSize()
    {
        return $this->hasOne(Size::className(), ['id' => 'size_id']);
    }
}
