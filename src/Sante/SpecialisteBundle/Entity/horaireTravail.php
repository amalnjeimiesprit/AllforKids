<?php

namespace Sante\SpecialisteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * horaireTravail
 *
 * @ORM\Table(name="horaire_travail")
 * @ORM\Entity(repositoryClass="Sante\SpecialisteBundle\Repository\horaireTravailRepository")
 */
class horaireTravail
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
     * @var int
     * @ORM\ManyToOne(targetEntity="specialiste")
     * @ORM\JoinColumn(name="cin",referencedColumnName="cin",onDelete="CASCADE")
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="joursemaine", type="string", length=255)
     */
    private $joursemaine;

    /**
     * @var string
     *
     * @ORM\Column(name="horarireDebutMatin", type="string", length=255)
     */
    private $horarireDebutMatin;

    /**
     * @var string
     *
     * @ORM\Column(name="horarireFinMatin", type="string", length=255)
     */
    private $horarireFinMatin;

    /**
     * @var string
     *
     * @ORM\Column(name="horairemidiDebut", type="string", length=255)
     */
    private $horairemidiDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="horairemidiFin", type="string", length=255)
     */
    private $horairemidiFin;


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
     * Set cin
     *
     * @param integer $cin
     *
     * @return horaireTravail
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

    /**
     * Set joursemaine
     *
     * @param string $joursemaine
     *
     * @return horaireTravail
     */
    public function setJoursemaine($joursemaine)
    {
        $this->joursemaine = $joursemaine;

        return $this;
    }

    /**
     * Get joursemaine
     *
     * @return string
     */
    public function getJoursemaine()
    {
        return $this->joursemaine;
    }

    /**
     * Set horarireDebutMatin
     *
     * @param string $horarireDebutMatin
     *
     * @return horaireTravail
     */
    public function setHorarireDebutMatin($horarireDebutMatin)
    {
        $this->horarireDebutMatin = $horarireDebutMatin;

        return $this;
    }

    /**
     * Get horarireDebutMatin
     *
     * @return string
     */
    public function getHorarireDebutMatin()
    {
        return $this->horarireDebutMatin;
    }

    /**
     * Set horarireFinMatin
     *
     * @param string $horarireFinMatin
     *
     * @return horaireTravail
     */
    public function setHorarireFinMatin($horarireFinMatin)
    {
        $this->horarireFinMatin = $horarireFinMatin;

        return $this;
    }

    /**
     * Get horarireFinMatin
     *
     * @return string
     */
    public function getHorarireFinMatin()
    {
        return $this->horarireFinMatin;
    }

    /**
     * Set horairemidiDebut
     *
     * @param string $horairemidiDebut
     *
     * @return horaireTravail
     */
    public function setHorairemidiDebut($horairemidiDebut)
    {
        $this->horairemidiDebut = $horairemidiDebut;

        return $this;
    }

    /**
     * Get horairemidiDebut
     *
     * @return string
     */
    public function getHorairemidiDebut()
    {
        return $this->horairemidiDebut;
    }

    /**
     * Set horairemidiFin
     *
     * @param string $horairemidiFin
     *
     * @return horaireTravail
     */
    public function setHorairemidiFin($horairemidiFin)
    {
        $this->horairemidiFin = $horairemidiFin;

        return $this;
    }

    /**
     * Get horairemidiFin
     *
     * @return string
     */
    public function getHorairemidiFin()
    {
        return $this->horairemidiFin;
    }
}

