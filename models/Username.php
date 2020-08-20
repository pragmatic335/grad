<?php


namespace app\models;


use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Username extends ActiveRecord implements IdentityInterface
{
    //определяем название таблицы
    public static function tableName() {
        return '{{%username}}';
    }

    //ищем пользователя в базе
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    //ищем пользователя в базе по имени
    public static function findByUsername($username)
    {
        return Username::findOne(['username' => $username]);
    }


    public static function findIdentityByAccessToken($token, $type = null)
    {
        // TODO: Implement findIdentityByAccessToken() method.
    }

    //получаем id пользователя
    public function getId()
    {
        return $this->getAttribute('id');
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }
    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }

    //сравниваем пароли
    public function validatePassword($password)
    {
        return $this->getAttribute('password') === $password;
    }

}