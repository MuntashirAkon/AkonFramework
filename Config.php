<?php
/**
 * Created by PhpStorm.
 * User: muntashir
 * Date: 4/10/17
 * Time: 10:23 PM
 */

interface Config{
  /**
  * DB Config
  */
  const MYSQL_HOST = '127.0.0.1';
  const MYSQL_USER = 'root';
  const MYSQL_PASS = 'root';
  const MYSQL_PORT = '3306';
  const MYSQL_DB   = 'a_db';
  
  /**
   * Site Related Configs
   */
  const SITE_TITLE    = 'Some Title';
  const USE_ONLY_SSL  = false;
  const WEB_DIRECTORY = '/';
}
