<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "color".
 *
 * @property int $id
 * @property string $color
 *
 * @property Tshirt[] $tshirts
 */
class Color extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'color';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['color'], 'required'],
            [['color'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'color' => 'Color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTshirts()
    {
        return $this->hasMany(Tshirt::className(), ['color_id' => 'id']);
    }
}
