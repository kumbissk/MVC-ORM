<?php

use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="roles")
*/

class Roles{
     /** @Id @column(type="integer" @GeneratedValue) */
    private $id;
     /** @column(type="string") */
    private $nom;
    private $users;


    public function __construct()
    {
        
    }

    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function getnom() 
    {
        return $this->nom;
    }

    public function setnom($nom) 
    {
        $this->nom = $nom;
    }

    public function getUsers() 
    {
        return $this->users;
    }

    public function setUsers($users) 
    {
        $this->users = $users;
    }

}

?>