<?php

namespace PublicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleChercheur
 *
 * @ORM\Table(name="article_chercheur")
 * @ORM\Entity(repositoryClass="PublicationBundle\Repository\ArticleChercheurRepository")
 */
class ArticleChercheur
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
     * @ORM\ManyToOne(targetEntity="PublicationBundle\Entity\Chercheur", inversedBy="article_chercheur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $chercheur;

    /**
     * @ORM\ManyToOne(targetEntity="PublicationBundle\Entity\Article", inversedBy="article_chercheur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;

    /**
     * @var int
     *
     * @ORM\Column(name="ordre", type="integer")
     */
    private $ordre;


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
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return ArticleChercheur
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;

        return $this;
    }

    /**
     * Get ordre
     *
     * @return int
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set chercheur
     *
     * @param \PublicationBundle\Entity\Chercheur $chercheur
     *
     * @return ArticleChercheur
     */
    public function setChercheur(\PublicationBundle\Entity\Chercheur $chercheur)
    {
        $this->chercheur = $chercheur;

        return $this;
    }

    /**
     * Get chercheur
     *
     * @return \PublicationBundle\Entity\Chercheur
     */
    public function getChercheur()
    {
        return $this->chercheur;
    }

    /**
     * Set article
     *
     * @param \PublicationBundle\Entity\Article $article
     *
     * @return ArticleChercheur
     */
    public function setArticle(\PublicationBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \PublicationBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }
}
