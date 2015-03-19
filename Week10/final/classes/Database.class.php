<?php

class Database {

    public function insertAccount($email, $phone, $heard, $contact, $comments) {

        $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3306;", "root", "");
        $dbs = $db->prepare('insert into account set email = :email, phone =:phone, heard = :heard, contact = :contact, comments = :comments');

        // you must bind the data before you execute
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);
        $dbs->bindParam(':phone', $phone, PDO::PARAM_STR);
        $dbs->bindParam(':heard', $heard, PDO::PARAM_STR);
        $dbs->bindParam(':contact', $contact, PDO::PARAM_STR);
        $dbs->bindParam(':comments', $comments, PDO::PARAM_STR);

        // When you execute remember that a rowcount means a change was made
        if ($dbs->execute() && $dbs->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
