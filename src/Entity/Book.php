<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

// J'ai créé une base de données en modifiant la variable DATABASE_URL
// du fichier .env.local (que j'ai créé en copiant le fichier .env)
// puis en utilisant la ligne de commande doctrine:database:create

// J'ai créé une classe Product qui est une entité car elle possède l'annotation
// @ORM\Entity

/**
 * @ORM\Entity()
 */
class Book
{
    // J'ai créé autant de propriétés que de colonnes voulues dans la table
    // et j'ai mappé les propriétés avec des annotations et la classe ORM (attention
    // de ne pas oublier le use correspondant)

    //creation du champ id en disant qu il genere un integer automatiquement
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    //creation du champ titre de type varchar avec 255 caratere de base
    /**
     * @ORM\Column (type="string")
     */
    private $titre;

    //creation du champ auteur
    /**
     * @ORM\Column(type="string")
     */
    private $auteur;

    //creation du champ nombre de page en chiffre entier
    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_de_page;

    //creation du champ date de publication du type datetime pour afficher la date et l heure
    /**
     * @ORM\Column(type="datetime")
     */
    private $date_publication;

    //creation du champ disponible en boolean en lui disant qu il est vrai au depart
    /**
     * @ORM\Column(type="boolean", options={"default": true})
     */
    private $disponible =true ;


    //creation du champ resume de type text et qui n est pas obligatoire
    /**
     * @ORM\Column(type="text" , nullable=true)
     */
    private $resume;
}