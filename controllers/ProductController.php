<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 21.07.2017
 * Time: 17:45
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController
{

    public function actionView($id){

//        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if(empty($product)){
            throw new \yii\web\HttpException(404, 'Такого товара не существует');
        }
        $this->setMeta('Магазин Мтекс | ' . $product->name, $product->keywords, $product->description);
//      $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one(); //Жадная загрузка
         return $this->render('view',[
             'product' => $product,
         ]);
    }

}