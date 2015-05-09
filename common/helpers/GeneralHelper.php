<?php


namespace common\helpers;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Yii;
/**
 * Description of GeneralHelper
 * consist of helper functions that can be used anywhere in the system.
 *
 * @author minamrosh
 */
class GeneralHelper {
   
    /*
     * returns current user id;
     * @return int $id;
     */
    public static function getUserId(){
        return Yii::$app->user->id;
    }
    
    /*
     * return current user attributes
     * @return model $user;
     */
    public static function getUserInfo(){
       return Yii::$app->user;
    }
}
