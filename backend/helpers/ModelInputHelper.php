<?php

namespace backend\helpers;
/**
 * Description of ModelInputHelper
 * contains helper functions to generate model attribute while saving model
 * @author minamrosh
 */
class ModelInputHelper {
    
    /*
     * Generate Slug 
     * replace space with '-' 
     * used for seo friedly content url
     */
    public static function getSlug($title){
        return str_replace(" ", "-", $title);
    }
    
    public static function getDateTime(){
        return date_format(date_create(), "Y-m-d h:m:s");
    }
}
