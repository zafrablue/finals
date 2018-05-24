<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "size".
 *
 * @property int $id
 * @property string $size
 *
 * @property Tshirt[] $tshirts
 */
class Size extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'size';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['size'], 'required'],
            [['size'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'size' => 'Size',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTshirts()
    {
        return $this->hasMany(Tshirt::className(), ['size_id' => 'id']);
    }
}
