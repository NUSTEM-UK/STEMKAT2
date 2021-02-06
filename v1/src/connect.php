<?php
    function connect(){
        // Modify following to suit
        // I'm developing locally on brew/valet, so the following work with a
        // default mysql install, unsecured but limited to localhost-only connections.
        $hostname="127.0.0.1";
        $username="root";
        $password="";
        $db = "stemkat";
        try {
             return new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
        } catch (\PDOException $e) {
             throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
?>
