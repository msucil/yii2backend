<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * used for status of the post/page
 *
 * @author minamrosh
 * @name Sushil Ale
 */
class StatusHelper {
    const DRAFT = 0;
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
