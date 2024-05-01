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
    //variable erstellen pdo
    public static $pdo;
    //erstellen der funktion connect
    static function connect($host, $user, $pw, $db) {
        //try catch
		try {
            //pdo erstellen
            db::$pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $pw, array(
                //fehlermeldungen anzeigen
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			));
        }
        //catch
        catch (Exception $ex) {
            //fehlermeldung ausgeben
            db::error($ex);
        }
    }
    
    /**
     * 
     * @param Exception $exception
     */
    //fehlermeldung ausgeben (Funktion)
    static function error($exception) {
        echo $exception->getMessage();
    }
    //Funktion init erstellen
    static function init() {
        //db::connect("localhost", "root", "", "test"); Also Verbindung aufbauen
        db::connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }
	//Funktion DateFormat erstellen
	static function DateFormat($dbDate) {
        //date erstellen
		$date = new DateTime($dbDate);
        //date formatiert zurückgeben
		return $date->format('d.m.Y');
	}
}
