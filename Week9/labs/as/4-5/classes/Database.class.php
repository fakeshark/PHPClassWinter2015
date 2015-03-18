<?php

class Database {

    public function checkUserLogin($email, $pass) {

        // Encrypt the password before adding to database.
        $pass = sha1($pass);

        $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3306;", "root", "");
        $dbs = $db->prepare('SELECT * FROM signup WHERE email = :email and password = :password');

        // you must bind the data before you execute
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);
        $dbs->bindParam(':password', $pass, PDO::PARAM_STR);

        // When you execute remember that a rowcount means a change was made
        if ($dbs->execute() && $dbs->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insertUser($email, $pass) {

        // Encrypt the password before adding to database.
        $pass = sha1($pass);

        $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3306;", "root", "");
        $dbs = $db->prepare('insert into signup set email = :email, password =:password');

        // you must bind the data before you execute
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);
        $dbs->bindParam(':password', $pass, PDO::PARAM_STR);

        // When you execute remember that a rowcount means a change was made
        if ($dbs->execute() && $dbs->rowCount() > 0) {
            return 'Data was added<br />';
        } else {
            return 'Data was NOT added<br />';
        }
    }

}
