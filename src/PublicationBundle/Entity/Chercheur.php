<?php

namespace PublicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Chercheur
 *
 * @ORM\Table(name="chercheur")
 * @ORM\Entity(repositoryClass="PublicationBundle\Repository\ChercheurRepository")
 */
class Chercheur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\ManyToOne(targetEntity="PublicationBundle\Entity\Organisation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $organisation;

    /**
     * @ORM\ManyToOne(targetEntity="PublicationBundle\Entity\Laboratoire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $laboratoire;

    /**
     * @ORM\Column(type="string")
     * 
     * @Assert\File(mimeTypes={ "image/jpeg", "image/png", "image/gif" })
     */
    private $picture;

    /**
     * @ORM\OneToMany(targetEntity="PublicationBundle\Entity\ArticleChercheur", mappedBy="chercheur")
     */
    private $article_chercheur;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Chercheur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Chercheur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set organisation
     *
     * @param string $organisation
     *
     * @return Chercheur
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     * Get organisation
     *
     * @return string
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Set equipe
     *
     * @param string $equipe
     *
     * @return Chercheur
     */
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get equipe
     *
     * @return string
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set laboratoire
     *
     * @param \PublicationBundle\Entity\Laboratoire $laboratoire
     *
     * @return Chercheur
     */
    public function setLaboratoire(\PublicationBundle\Entity\Laboratoire $laboratoire)
    {
        $this->laboratoire = $laboratoire;

        return $this;
    }

    /**
     * Get laboratoire
     *
     * @return \PublicationBundle\Entity\Laboratoire
     */
    public function getLaboratoire()
    {
        return $this->laboratoire;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Chercheur
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->article_chercheur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add articleChercheur
     *
     * @param \PublicationBundle\Entity\ArticleChercheur $articleChercheur
     *
     * @return Chercheur
     */
    public function addArticleChercheur(\PublicationBundle\Entity\ArticleChercheur $articleChercheur)
    {
        $this->article_chercheur[] = $articleChercheur;

        return $this;
    }

    /**
     * Remove articleChercheur
     *
     * @param \PublicationBundle\Entity\ArticleChercheur $articleChercheur
     */
    public function removeArticleChercheur(\PublicationBundle\Entity\ArticleChercheur $articleChercheur)
    {
        $this->article_chercheur->removeElement($articleChercheur);
    }

    /**
     * Get articleChercheur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticleChercheur()
    {
        return $this->article_chercheur;
    }
}
