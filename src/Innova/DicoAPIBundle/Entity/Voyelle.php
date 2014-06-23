<?php
namespace Innova\DicoAPIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Voyelle
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $phoneme;

    /**
     * @ORM\Column(type="integer")
     */
    private $numCol;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $mot;

    /**
     * @ORM\Column(type="string", length=100, nullable=TRUE)
     */
    private $sonPhoneme=NULL;

    /**
     * @ORM\Column(type="string", length=100, nullable=TRUE)
     */
    private $sonMot=NULL;

    /**
     * @ORM\ManyToOne(targetEntity="Aperture", inversedBy="voyelles")
     */
    private $aperture;

    /**
     * @ORM\ManyToOne(targetEntity="PointArticulation", inversedBy="voyelles")
     */
    private $pointArticulation;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set phoneme
     *
     * @param string $phoneme
     * @return Voyelle
     */
    public function setPhoneme($phoneme)
    {
        $this->phoneme = $phoneme;

        return $this;
    }

    /**
     * Get phoneme
     *
     * @return string 
     */
    public function getPhoneme()
    {
        return $this->phoneme;
    }

    /**
     * Set numCol
     *
     * @param integer $numCol
     * @return Voyelle
     */
    public function setNumCol($numCol)
    {
        $this->numCol = $numCol;

        return $this;
    }

    /**
     * Get numCol
     *
     * @return integer 
     */
    public function getNumCol()
    {
        return $this->numCol;
    }

    /**
     * Set mot
     *
     * @param string $mot
     * @return Voyelle
     */
    public function setMot($mot)
    {
        $this->mot = $mot;

        return $this;
    }

    /**
     * Get mot
     *
     * @return string 
     */
    public function getMot()
    {
        return $this->mot;
    }

    /**
     * Set sonPhoneme
     *
     * @param string $sonPhoneme
     * @return Voyelle
     */
    public function setSonPhoneme($sonPhoneme)
    {
        $this->sonPhoneme = $sonPhoneme;

        return $this;
    }

    /**
     * Get sonPhoneme
     *
     * @return string 
     */
    public function getSonPhoneme()
    {
        return $this->sonPhoneme;
    }

    /**
     * Set sonMot
     *
     * @param string $sonMot
     * @return Voyelle
     */
    public function setSonMot($sonMot)
    {
        $this->sonMot = $sonMot;

        return $this;
    }

    /**
     * Get sonMot
     *
     * @return string 
     */
    public function getSonMot()
    {
        return $this->sonMot;
    }

    /**
     * Set aperture
     *
     * @param \Innova\DicoAPIBundle\Entity\Aperture $aperture
     * @return Voyelle
     */
    public function setAperture(\Innova\DicoAPIBundle\Entity\Aperture $aperture = null)
    {
        $this->aperture = $aperture;

        return $this;
    }

    /**
     * Get aperture
     *
     * @return \Innova\DicoAPIBundle\Entity\Aperture 
     */
    public function getAperture()
    {
        return $this->aperture;
    }

    /**
     * Set pointArticulation
     *
     * @param \Innova\DicoAPIBundle\Entity\PointArticulation $pointArticulation
     * @return Voyelle
     */
    public function setPointArticulation(\Innova\DicoAPIBundle\Entity\PointArticulation $pointArticulation = null)
    {
        $this->pointArticulation = $pointArticulation;

        return $this;
    }

    /**
     * Get pointArticulation
     *
     * @return \Innova\DicoAPIBundle\Entity\PointArticulation 
     */
    public function getPointArticulation()
    {
        return $this->pointArticulation;
    }
}
