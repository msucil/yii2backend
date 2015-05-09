<?php

/*
 *@author Sushil Ale
 *@email np.msushil@gmail.com/magar.sushilale@gmail.com
 *@url www.msushil.com.np, www.linkedin.com/np/msushil
 */

namespace common\helpers;
/**
 *Status Type Helper
 * used on creating content
 */
class StatusHelper {
    
    //content with status DRAFT should not visibel to public
    const DRAFT = 0;
    //content with status PUBLISHED should visibel to public
    const PUBLISHED = 1;
    
    private static $status;
    
    //initializie array of status
    private static function init(){
        self::$status = [
            self::DRAFT => 'Draft',
            self::PUBLISHED => 'Publish',
        ];
    }
    
    /*
     * return array of status for dropdown/select input
     */
    public static function getStatus(){
        
        if(!isset(self::$status)){
            self::init ();
        }
        
        return self::$status;
    }
    
    /*
     * return status name of given status code
     * @param $code integer
     * @return status string;
     */
    
    public static function getCode($code){
        
        if(!isset(self::$status)){
            self::init ();
        }
        
        return isset(self::$status[$code]) ?  self::$status[$code] : FALSE;
    }
}
