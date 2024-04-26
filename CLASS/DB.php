<?php
require_once ('_config.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
 *
 * @author Aron Halaoui
 */
class db {
	/**
	 *
	 * @var PDO
	 */
    public static $pdo;
    
    static function connect($host, $user, $pw, $db) {
		try {
            db::$pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $pw, array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			));
        }
        catch (Exception $ex) {
            db::error($ex);
        }
    }
    
    /**
     * 
     * @param Exception $exception
     */
    static function error($exception) {
        echo $exception->getMessage();
    }
    
    static function init() {
        db::connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }
	
	static function DateFormat($dbDate) {
		$date = new DateTime($dbDate);
		return $date->format('d.m.Y');
	}
}
