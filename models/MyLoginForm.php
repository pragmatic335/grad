<?php


namespace app\models;


use Yii;
use yii\base\Model;

class MyLoginForm extends Model
{
    public $username;
    public $password;
    public $role;

    public function rules()
    {
        return [
            [['username', 'password'], 'required', 'message' => 'Поле обязательно для заполнения'],
            ['password', 'validatePassword']
        ];


    }

    public function validatePassword($attribute, $params)
    {
        if(!$this->hasErrors()) {
            $user = Username::findByUsername($this->username);

            if(!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Неправильное имя пользователя или пароль');
                return false;
            }
        }
        return true;

    }

    public function login() {
       if($this->validate()) {
           return Yii::$app->user->login($this->getUser(), 20);
       }
    }




}