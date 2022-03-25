<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="formation")
 */

class Formation{
    /** @Id @column(type="integer" @generatedValue) */
    private $id;
    /** @column(type="string") */
    private $nom;
    /** @column(type="string") */
    private $date;
    /** @column(type="date") */
    private $duree;
    /**
     * Many formation have one lieu. This is the owning side.
     * @ManyToOne(targetEntity="Lieu", inversedBy="formations")
     * @JoinColumn(name="lieu_id", referencedColumnName="id")
    */
    private $lieu;
    


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

    public function getdate() 
    {
        return $this->date;
    }

    public function setdate($date) 
    {
        $this->date = $date;
    }

    public function getduree() 
    {
        return $this->duree;
    }

    public function setduree($duree) 
    {
        $this->duree = $duree;
    }

    public function getlieu() 
    {
        return $this->lieu;
    }

    public function setlieu($lieu) 
    {
        $this->lieu = $lieu;
    }
}

?>