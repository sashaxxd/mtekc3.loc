<?php

namespace app\controllers;

use app\models\Login;
use app\models\Signup;
use app\models\User;
use Yii;
use app\models\LoginForm;

class AuthController extends AppController
{


    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
//    public function actionTest(){
//        $user = User::findOne(1);
//        Yii::$app->user->logout($user);
//        if(Yii::$app->user->isGuest){
//              echo 'Гость';
//        }
//        else{
//            echo 'Авторизирован';
//        }
//        return $this->render('test');
//    }

     public function actionSignup(){
         if(!Yii::$app->user->isGuest)
         {
              return $this->goHome();
         }
         $model = new Signup();
         if(isset($_POST['Signup'])) {
             $model->attributes = Yii::$app->request->post('Signup');

             if ($model->validate()) {

                 $model->signup();
                 Yii::$app->session->setFlash('success', 'Успешная регистрация');
                 return $this->redirect(['/auth/login', 'param1'=>'val1' ]);
////                 Yii::app()->user->setFlash('tipDay','Данные сохранены');
//                 $this->redirect(array('index','param1'=>'val1'));
             }
         }


          return $this->render('signup',[
              'model' => $model,
          ]);
     }

    public function actionLogin()
    {

        $login_model = new Login();
        if(Yii::$app->request->post('Login')){
            $login_model->attributes = Yii::$app->request->post('Login');
            if ($login_model->validate()) {
              Yii::$app->user->login($login_model->getUser());
                return $this->goBack();
            }
        }
        return $this->render('login', [
            'model' => $login_model,
        ]);
    }

}