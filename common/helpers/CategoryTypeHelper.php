<?php

namespace common\helpers;
/*
 *@author Sushil Ale
 *@email np.msushil@gmail.com/magar.sushilale@gmail.com
 *@url www.msushil.com.np, www.linkedin.com/np/msushil
 */

/** 
 * Category Type Helper
 * Consist of system constants for category type,
 *
 * @author minamrosh
 */
class CategoryTypeHelper {
    
    //cateogory that has multiple entry of content
    const POST = 0;
    //category that has single entry of content
    const PAGE = 1;
    //category for portfolio
    const PORTFOLIO = 2;
    //category for gallery
    const GALLERY = 3;
    
    private static $type;
    
    /*
     * initiate array of category type array
     * used on creating category
     * 
     */
    private static function init(){
        self::$type = [
            self::POST => "Post",
            self::PAGE => "Page",
            self::PORTFOLIO => "Portfolio",
            self::GALLERY => "Gallery",
        ];
    }
    
    /*
     * return array of category type
     * @return array $type;
     */
    public static function getTypes(){
        if(!isset(self::$typepe))
            self::init ();
        
        return self::$type;
    }
    
    /*
     * return name of category type
     * @param int $code
     * @return string category type name
     */
    public static function getTypeName($code){
        
        if(!isset(self::$type))
            self::init ();
        
        return isset(self::$type[$code]) ? self::$type[$code] : FALSE;
            
    }
}
