<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 24.07.2017
 * Time: 21:18
 */

namespace app\models;


use yii\base\Model;

class Login  extends Model
{

    public $email;
    public $password;

    public function rules()
    {
        return [
            [['email','password'], 'required'], 
            [['email'], 'email'],
            [['password'], 'validatePassword'],
            [['password'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'password' => 'Пароль',
        ];
    }

    public function validatePassword($attribute, $params)
    {
        $user = $this->getUser();
        if(!$user || ($user->password != sha1($this->password)))
        {
             $this->addError($attribute, 'Пароль или пользователь введены не верно');
        }
    }

    public function getUser()
    {
        return User::findOne(['email' => $this->email]);
    }


}