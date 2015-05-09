<?php

namespace backend\helpers;

use Yii;


/**
 * Description of FormFileHelper
 * used to get upload path and manipulating file name
 * @author minamrosh
 */
class FormFileHelper {
    
    /*
     * returns upload path of file
     * @return string upload path defined on the common/bootstrap.php file
     */
    public static function getUploadPath(){
        return Yii::getAlias("@upload")."/";
    }
    
    /*
     * generates unique filename and return it.
     * auto generated unique no is attached to the end of the file name
     * @param string $filename
     * @return string unique file name;
     */
    public static function getFileName($filename){
        $name = explode(".", $filename);
        return $name[0].uniqid().".".$name[1];
    }
}
