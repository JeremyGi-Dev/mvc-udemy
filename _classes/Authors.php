<?php

class Authors {

    public $id;
    public $firstname;
    public $lastname;

    /**
     * Authors constructor
     * @param $id
     */
    function __construct($id){
        global $db;

        $id = str_secur($id);

        $sql = $db->prepare('SELECT * FROM `authors` WHERE `id` = ?');
        $sql->execute([$id]);
        $res = $sql->fetch();

        $this->id = $id;
        $this->firstname = $res['firstname'];
        $this->lastname = $res['lastname'];
    }

    /**
     * Envoie de tous les auteurs
     * @return array
     */
    static function getAllAuthors(){
        global $db;

        $sql = $db-prepare('SELECT * FROM `authors`');
        $sql->execute([]);
        return $sql->fetchAll();
    }
}