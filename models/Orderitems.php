<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_items".
 *
 * @property string $id
 * @property string $order_id
 * @property string $product_id
 * @property string $name
 * @property string $article
 * @property double $price
 * @property double $qty_item
 * @property double $sum_item
 */
class Orderitems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_items';
    }

    public function getOrderItems()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'name', 'price', 'qty_item', 'sum_item'], 'required'],
            [['order_id', 'product_id'], 'integer'],
            [['price', 'qty_item', 'sum_item'], 'number'],
            [['name', 'article'], 'string', 'max' => 255],
        ];
    }



}
