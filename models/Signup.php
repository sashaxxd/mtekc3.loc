<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property integer $isAdmin
 * @property integer $phone
 * @property string $address
 */
class Signup extends Model
{
    /**
     * @inheritdoc
     */
    public $name;
    public $email;
    public $password;
    public $phone;
    public $address;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone'], 'integer'],
            [['phone', 'name', 'address', 'email','password'], 'required'],
            [['address'], 'string'],
            [['email'], 'email'],
            [['name', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Ваше Ф.И.О',
            'email' => 'Email',
            'password' => 'Пароль',
            'phone' => 'Телефон',
            'address' => 'Адрес',
        ];
    }

    public function signup()
    {
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password ;
        $user->address = $this->address;
        $user->phone = $this->phone;
        $user->save();
    }
}
