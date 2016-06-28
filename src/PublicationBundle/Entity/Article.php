<?php

namespace PublicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="PublicationBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\ManyToOne(targetEntity="PublicationBundle\Entity\Categorie")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="datePublication", type="string", length=255)
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @ORM\Column(type="string")
     * 
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $pdfFile;

    /**
     * @ORM\OneToMany(targetEntity="PublicationBundle\Entity\ArticleChercheur", mappedBy="article")
     */
    private $article_chercheur;



    public function __construct()
    {
        $this->auteurs = new ArrayCollection();
    }

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Article
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set datePublication
     *
     * @param string $datePublication
     *
     * @return Article
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return string
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Article
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Article
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Add auteur
     *
     * @param \PublicationBundle\Entity\Chercheur $auteur
     *
     * @return Article
     */
    public function addAuteur(\PublicationBundle\Entity\Chercheur $auteur)
    {
        $this->auteurs[] = $auteur;

        return $this;
    }

    /**
     * Remove auteur
     *
     * @param \PublicationBundle\Entity\Chercheur $auteur
     */
    public function removeAuteur(\PublicationBundle\Entity\Chercheur $auteur)
    {
        $this->auteurs->removeElement($auteur);
    }

    /**
     * Get auteurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuteurs()
    {
        return $this->auteurs;
    }

    /**
     * Add articleChercheur
     *
     * @param \PublicationBundle\Entity\ArticleChercheur $articleChercheur
     *
     * @return Article
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

    /**
     * Set pdfFile
     *
     * @param string $pdfFile
     *
     * @return Article
     */
    public function setPdfFile($pdfFile)
    {
        $this->pdfFile = $pdfFile;

        return $this;
    }

    /**
     * Get pdfFile
     *
     * @return string
     */
    public function getPdfFile()
    {
        return $this->pdfFile;
    }
}
