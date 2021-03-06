<?php

namespace Sante\SpecialisteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * adresseCabinet
 *
 * @ORM\Table(name="adresse_cabinet")
 * @ORM\Entity(repositoryClass="Sante\SpecialisteBundle\Repository\adresseCabinetRepository")
 */
class adresseCabinet
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
     * @ORM\Column(name="coderue", type="string", length=255)
     */
    private $coderue;

    /**
     * @var string
     *
     * @ORM\Column(name="nomrue", type="string", length=255)
     */
    private $nomrue;

    /**
     * @var string
     *
     * @ORM\Column(name="municipalite", type="string", length=255)
     */
    private $municipalite;

    /**
     * @var string
     *
     * @ORM\Column(name="gouvernorat", type="string", length=255)
     */
    private $gouvernorat;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="specialiste")
     * @ORM\JoinColumn(name="cin",referencedColumnName="cin",onDelete="CASCADE")
     */
    private $cin;


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
     * Set coderue
     *
     * @param string $coderue
     *
     * @return adresseCabinet
     */
    public function setCoderue($coderue)
    {
        $this->coderue = $coderue;

        return $this;
    }

    /**
     * Get coderue
     *
     * @return string
     */
    public function getCoderue()
    {
        return $this->coderue;
    }

    /**
     * Set nomrue
     *
     * @param string $nomrue
     *
     * @return adresseCabinet
     */
    public function setNomrue($nomrue)
    {
        $this->nomrue = $nomrue;

        return $this;
    }

    /**
     * Get nomrue
     *
     * @return string
     */
    public function getNomrue()
    {
        return $this->nomrue;
    }

    /**
     * Set municipalite
     *
     * @param string $municipalite
     *
     * @return adresseCabinet
     */
    public function setMunicipalite($municipalite)
    {
        $this->municipalite = $municipalite;

        return $this;
    }

    /**
     * Get municipalite
     *
     * @return string
     */
    public function getMunicipalite()
    {
        return $this->municipalite;
    }

    /**
     * Set gouvernorat
     *
     * @param string $gouvernorat
     *
     * @return adresseCabinet
     */
    public function setGouvernorat($gouvernorat)
    {
        $this->gouvernorat = $gouvernorat;

        return $this;
    }

    /**
     * Get gouvernorat
     *
     * @return string
     */
    public function getGouvernorat()
    {
        return $this->gouvernorat;
    }

    /**
     * Set cin
     *
     * @param integer $cin
     *
     * @return adresseCabinet
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return int
     */
    public function getCin()
    {
        return $this->cin;
    }
}

