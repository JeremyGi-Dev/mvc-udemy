<?php

class Categories {

    public $id;
    public $name;

    /**
     * Categories constructor
     * @param $id
     */
    function __construct($id){
        global $db;

        $id = str_secur($id);

        $sql = $db->prepare('SELECT * FROM `categories` WHERE `id` = ?');
        $sql->execute([$id]);
        $res = $sql->fetch();

        $this->id = $id;
        $this->name = $res['name'];
    }

    /**
     * Envoie de tous les catégories
     * @return array
     */
    static function getAllCategories(){
        global $db;

        $sql = $db-prepare('SELECT * FROM `categories`');
        $sql->execute([]);
        return $sql->fetchAll();
    }
}