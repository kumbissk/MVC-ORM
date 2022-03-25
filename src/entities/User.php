<?php

use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="user")
*/

class User{
    /** @Id @column(type="integer" @GeneratedValue) */
    private $id;
    /** @column(type="string") */
    private $nom;
    /** @column(type="string") */
    private $prenom;
    /** @column(type="string") */
    private $email;
    /** @column(type="string") */
    private $password;
    private $lieux;
    private $roles;


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

    public function getprenom() 
    {
        return $this->prenom;
    }

    public function setprenom($prenom) 
    {
        $this->prenom = $prenom;
    }

    public function getemail() 
    {
        return $this->email;
    }

    public function setemail($email) 
    {
        $this->email = $email;
    }

    public function getpassword() 
    {
        return $this->password;
    }

    public function setpassword($password) 
    {
        $this->password = $password;
    }

    public function getlieux() 
    {
        return $this->lieux;
    }

    public function setlieux($lieux) 
    {
        $this->lieux = $lieux;
    }

    public function getroles() 
    {
        return $this->roles;
    }

    public function setroles($roles) 
    {
        $this->roles = $roles;
    }
}

?>