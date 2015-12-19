<?php
/*
 * This file is part of the nettob component rdw package.
 *
 * (c) Nico Borghuis <nico@nicoborghuis.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nettob\Component\Rdw\Model;

/**
 * Class CarrosserieSpecifiek.
 *
 * @author Nico Borghuis <nico@nicoborghuis.nl>
 *
 * @link https://www.rdw.nl/SiteCollectionDocuments/Over%20RDW/Naslagwerk/Beschrijving%20dataset%20Voertuigen.pdf
 */
class CarrosserieSpecifiek
{

    /**
     *
     * Kenteken
     *
     * @var string
     */
    protected $kenteken;

    /**
     *
     * Carrosserie volgnummer
     *
     * @var string
     */
    protected $carrosserie_volgnummer;

    /**
     *
     * Carrosserie voertuig nummer code volgnummer
     *
     * @var string
     */
    protected $carrosserie_voertuig_nummer_code_volgnummer;

    /**
     *
     * Carrosseriecode
     *
     * @var string
     */
    protected $carrosseriecode;

    /**
     *
     * Carrosserie voertuig nummer Europese omschrijving
     *
     * @var string
     */
    protected $carrosserie_voertuig_nummer_europese_omschrijving;

    public function __construct($result)
    {
        foreach ($result as $key => $value) {
            if (property_exists('\Nettob\Component\Rdw\Model\CarroserieSpecifiek', $key)) {
                $this->$key = $value;
            }
        }
    }

    /**
     * @return string
     */
    public function getKenteken()
    {
        return $this->kenteken;
    }

    /**
     * @param string $kenteken
     * @return CarroserieSpecifiek
     */
    public function setKenteken($kenteken)
    {
        $this->kenteken = $kenteken;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrosserieVolgnummer()
    {
        return $this->carrosserie_volgnummer;
    }

    /**
     * @param string $carrosserie_volgnummer
     * @return CarroserieSpecifiek
     */
    public function setCarrosserieVolgnummer($carrosserie_volgnummer)
    {
        $this->carrosserie_volgnummer = $carrosserie_volgnummer;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrosserieVoertuigNummerCodeVolgnummer()
    {
        return $this->carrosserie_voertuig_nummer_code_volgnummer;
    }

    /**
     * @param string $carrosserie_voertuig_nummer_code_volgnummer
     * @return CarroserieSpecifiek
     */
    public function setCarrosserieVoertuigNummerCodeVolgnummer($carrosserie_voertuig_nummer_code_volgnummer)
    {
        $this->carrosserie_voertuig_nummer_code_volgnummer = $carrosserie_voertuig_nummer_code_volgnummer;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrosseriecode()
    {
        return $this->carrosseriecode;
    }

    /**
     * @param string $carrosseriecode
     * @return CarroserieSpecifiek
     */
    public function setCarrosseriecode($carrosseriecode)
    {
        $this->carrosseriecode = $carrosseriecode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrosserieVoertuigNummerEuropeseOmschrijving()
    {
        return $this->carrosserie_voertuig_nummer_europese_omschrijving;
    }

    /**
     * @param string $carrosserie_voertuig_nummer_europese_omschrijving
     * @return CarroserieSpecifiek
     */
    public function setCarrosserieVoertuigNummerEuropeseOmschrijving($carrosserie_voertuig_nummer_europese_omschrijving)
    {
        $this->carrosserie_voertuig_nummer_europese_omschrijving = $carrosserie_voertuig_nummer_europese_omschrijving;
        return $this;
    }
}
