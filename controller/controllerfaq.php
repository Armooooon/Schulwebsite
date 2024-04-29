<?php
//Von Aron
require_once 'CLASS/class.php'; // Assuming the file containing the db class is named class.php

class ControllerFaq {

    // Method to add an entry to the faq table
    public static function addEntry($question, $answer) {
        $sql = "INSERT INTO faq (question, answer) VALUES (?, ?)";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$question, $answer]);
        return db::$pdo->lastInsertId();
    }

    // Method to update an entry in the faq table
    public static function updateEntry($idfaq, $question, $answer) {
        $sql = "UPDATE faq SET question = ?, answer = ? WHERE idfaq = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$question, $answer, $idfaq]);
    }

    // Method to delete an entry from the faq table
    public static function deleteEntry($idfaq) {
        $sql = "DELETE FROM faq WHERE idfaq = ?";
        $statement = db::$pdo->prepare($sql);
        return $statement->execute([$idfaq]);
    }

    // Method to get an entry from the faq table by its ID
    public static function getEntryById($idfaq) {
        $sql = "SELECT * FROM faq WHERE idfaq = ?";
        $statement = db::$pdo->prepare($sql);
        $statement->execute([$idfaq]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    // Method to get all entries from the faq table
    public static function getAllEntries() {
        $sql = "SELECT * FROM faq";
        $statement = db::$pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
