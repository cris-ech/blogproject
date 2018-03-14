<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=50 )
     */
    private $title ;

    /**
     * @var string
     * @ORM\Column(type="string", length=250 )
     */

    private $summary ;

    /**
     * @var string
     * @ORM\Column(type="string" )
     */

    private $content ;

    //change it in the future for the entity user
    /**
     * @var string
     * @ORM\Column(type="string" )
     */

    private $idUser ;

    private $idCategory ;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */

    private $fCreation ;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */

    private $fModification ;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Post
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Post
     */
    public function setTitle(string $title): Post
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     * @return Post
     */
    public function setSummary(string $summary): Post
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Post
     */
    public function setContent(string $content): Post
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdUser(): string
    {
        return $this->idUser;
    }

    /**
     * @param string $idUser
     * @return Post
     */
    public function setIdUser(string $idUser): Post
    {
        $this->idUser = $idUser;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * @param mixed $idCategory
     * @return Post
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFCreation(): \DateTime
    {
        return $this->fCreation;
    }

    /**
     * @param \DateTime $fCreation
     * @return Post
     */
    public function setFCreation(\DateTime $fCreation): Post
    {
        $this->fCreation = $fCreation;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFModification(): \DateTime
    {
        return $this->fModification;
    }

    /**
     * @param \DateTime $fModification
     * @return Post
     */
    public function setFModification(\DateTime $fModification): Post
    {
        $this->fModification = $fModification;
        return $this;
    }




}
