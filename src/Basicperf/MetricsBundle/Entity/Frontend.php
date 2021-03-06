<?php

namespace Basicperf\MetricsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frontend
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Basicperf\MetricsBundle\Entity\FrontendRepository")
 */
class Frontend
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="string")
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="loadtime", type="float")
     */
    private $loadtime;  

    /**
     * @var string
     *
     * @ORM\Column(name="pagetype", type="string")
     */
    private $pagetype;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Frontend
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set loadtime
     *
     * @param float $loadtime
     * @return Frontend
     */
    public function setLoadtime($loadtime)
    {
        $this->loadtime = $loadtime;

        return $this;
    }

    /**
     * Get loadtime
     *
     * @return float 
     */
    public function getLoadtime()
    {
        return $this->loadtime;
    }

    /**
     * Set pagetype
     *
     * @param string $pagetype
     * @return Frontend
     */
    public function setPagetype($pagetype)
    {
        $this->pagetype = $pagetype;

        return $this;
    }

    /**
     * Get pagetype
     *
     * @return string 
     */
    public function getPagetype()
    {
        return $this->pagetype;
    }
}
