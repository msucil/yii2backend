<?php

namespace common\helpers;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryTypeHelper
 *
 * @author minamrosh
 */
class CategoryTypeHelper {
    const POST = 0;
    const PAGE = 1;
    const PORTFOLIO = 2;
    const GALLERY = 3;
    
    private static $type;
    
    private static function init(){
        self::$type = [
            self::POST => "Post",
            self::PAGE => "Page",
            self::PORTFOLIO => "Portfolio",
            self::GALLERY => "Gallery",
        ];
    }
    
    public static function getTypes(){
        if(!isset(self::$typepe))
            self::init ();
        
        return self::$type;
    }
    
    public static function getTypeName($code){
        
        if(!isset(self::$type))
            self::init ();
        
        return isset(self::$type[$code]) ? self::$type[$code] : FALSE;
            
    }
}
