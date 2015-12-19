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
 * Class Voertuigklasse.
 *
 * @author Nico Borghuis <nico@nicoborghuis.nl>
 *
 * @link https://www.rdw.nl/SiteCollectionDocuments/Over%20RDW/Naslagwerk/Beschrijving%20dataset%20Voertuigen.pdf
 */
class Voertuigklasse
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
     * Carrosserie klasse volgnummer
     *
     * @var string
     */
    protected $carrosserie_klasse_volgnummer;

    /**
     *
     * Voertuigklasse
     *
     * @var string
     */
    protected $voertuigklasse;

    /**
     *
     * Voertuigklasse omschrijving
     *
     * @var string
     */
    protected $voertuigklasse_omschrijving;

    public function __construct($result)
    {
        foreach ($result as $key => $value) {
            if (property_exists('\Nettob\Component\Rdw\Model\Voertuigklasse', $key)) {
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
     * @return Voertuigklasse
     */
    public function setKenteken($kenteken)
    {
        $this->kenteken = $kenteken;
        return $this;
    }

    /**
     * @return string
     */
    public function getVoertuigklasseOmschrijving()
    {
        return $this->voertuigklasse_omschrijving;
    }

    /**
     * @param string $voertuigklasse_omschrijving
     * @return Voertuigklasse
     */
    public function setVoertuigklasseOmschrijving($voertuigklasse_omschrijving)
    {
        $this->voertuigklasse_omschrijving = $voertuigklasse_omschrijving;
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
     * @return Voertuigklasse
     */
    public function setCarrosserieVolgnummer($carrosserie_volgnummer)
    {
        $this->carrosserie_volgnummer = $carrosserie_volgnummer;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrosserieKlasseVolgnummer()
    {
        return $this->carrosserie_klasse_volgnummer;
    }

    /**
     * @param string $carrosserie_klasse_volgnummer
     * @return Voertuigklasse
     */
    public function setCarrosserieKlasseVolgnummer($carrosserie_klasse_volgnummer)
    {
        $this->carrosserie_klasse_volgnummer = $carrosserie_klasse_volgnummer;
        return $this;
    }

    /**
     * @return string
     */
    public function getVoertuigklasse()
    {
        return $this->voertuigklasse;
    }

    /**
     * @param string $voertuigklasse
     * @return Voertuigklasse
     */
    public function setVoertuigklasse($voertuigklasse)
    {
        $this->voertuigklasse = $voertuigklasse;
        return $this;
    }
}
