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
                 return $this->redirect(['/auth/login' ]);

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
                $message = Yii::$app->user->identity->name . " Вы вошли на сайт, можете оформлять заказы";
                Yii::$app->session->setFlash('success', "$message");
                return $this->goBack();
            }
        }
        return $this->render('login', [
            'model' => $login_model,
        ]);
    }

}