<?php
namespace Core;

/**
 * Generate tokens
 * Z-frame
 * version 1.0
 */
// require_once './core/int.php ';

class token{

    /**
     * generate token
     */
    
    public static function generate()
    {
        return session::put(config::get('session/token_name'),  md5(uniqid()));

    } 

    /**
     *check if token exists
     *param $string  
     */

    public static function check($token)
    {
        $token_name = config::get('session/token_name');

        if (session::exists($token_name) && $token === session::get($token_name)){
            session::delete($token_name);
            return true;
        }
        return false;
    }



}








?>