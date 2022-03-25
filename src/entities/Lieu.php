<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="lieu")
*/

class Lieu{
    /** @Id @column(type="integer" @GeneratedValue) */
    private $id;
    /** @column(type="string") */
    private $nom;
    /** @column(type="double") */
    private $longitude;
    /** @column(type="double") */
    private $latitude;
    /**
     * One lieu has many formations. This is the inverse side.
     * @OneToMany(targetEntity="Formation", mappedBy="lieu")
     */
    private $formations;
    private $user;


    public function __construct()
    {
        $this->formations = new ArrayCollection();
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

    public function getlongitude() 
    {
        return $this->longitude;
    }

    public function setdate($longitude) 
    {
        $this->longitude = $longitude;
    }

    public function getlatitude() 
    {
        return $this->latitude;
    }

    public function setlatitude($latitude) 
    {
        $this->latitude = $latitude;
    }

    public function getformations() 
    {
        return $this->formations;
    }

    public function setformations($formations) 
    {
        $this->formations = $formations;
    }

    public function getuser() 
    {
        return $this->user;
    }

    public function setuser($user) 
    {
        $this->user = $user;
    }
}

?>