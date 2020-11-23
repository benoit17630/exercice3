<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Book
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column (type="string")
     */
    private $titre;

    /**
     * @ORM\Column(type="string")
     */
    private $auteur;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_page;

    /**
     * @ORM\Column(type="date")
     */
    private $date_publication;

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $disponible =false ;

    /**
     * @ORM\Column(type="text" , nullable=true)
     */
    private $resume;
}