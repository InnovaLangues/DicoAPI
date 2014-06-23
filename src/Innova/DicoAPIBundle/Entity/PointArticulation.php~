<?php
namespace Innova\DicoAPIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class PointArticulation
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
     * Set pointArticulation
     *
     * @param string $pointArticulation
     * @return PointArticulation
     */
    public function setPointArticulation($pointArticulation)
    {
        $this->pointArticulation = $pointArticulation;

        return $this;
    }

    /**
     * Get pointArticulation
     *
     * @return string 
     */
    public function getPointArticulation()
    {
        return $this->pointArticulation;
    }

    /**
     * Set voyelles
     *
     * @param integer $voyelles
     * @return PointArticulation
     */
    public function setVoyelles($voyelles)
    {
        $this->voyelles = $voyelles;

        return $this;
    }

    /**
     * Get voyelles
     *
     * @return integer 
     */
    public function getVoyelles()
    {
        return $this->voyelles;
    }
}
