<?php
/**
 * Created by PhpStorm.
 * User: Muntashir
 * Date: 4/19/2017
 * Time: 9:24 PM
 */
namespace App\Models;

require_once __DIR__ . '/../../autoload.php';

use Config;

class Model implements Config{
    public $mysqli;

    function __construct(){
        $this->mysqli = new \Mysqli(self::MYSQL_HOST, self::MYSQL_USER, self::MYSQL_PASS, self::MYSQL_DB, self::MYSQL_PORT);
        if($this->mysqli->connect_error) die("Unable to connect to mysql.");
        $this->mysqli->set_charset("utf8");
    }
        
    static function mysqli(){
        $mysqli = new \Mysqli(self::MYSQL_HOST, self::MYSQL_USER, self::MYSQL_PASS, self::MYSQL_DB, self::MYSQL_PORT);
        if($mysqli->connect_error) die("Unable to connect to mysql.");
        $mysqli->set_charset("utf8");
        return $mysqli;
    }    
}