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
 * Class Carrosserie.
 *
 * @author Nico Borghuis <nico@nicoborghuis.nl>
 *
 * @link https://www.rdw.nl/SiteCollectionDocuments/Over%20RDW/Naslagwerk/Beschrijving%20dataset%20Voertuigen.pdf
 */
class Carrosserie
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
     * Carrosserietype
     *
     * @var string
     */
    protected $carrosserietype;

    /**
     *
     * Type Carrosserie Europese omschrijving
     *
     * @var string
     */
    protected $type_carrosserie_europese_omschrijving;

    public function __construct($result)
    {
        foreach ($result as $key => $value) {
            if (property_exists('\Nettob\Component\Rdw\Model\Carroserie', $key)) {
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
     * @return Carroserie
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
     * @return Carroserie
     */
    public function setCarrosserieVolgnummer($carrosserie_volgnummer)
    {
        $this->carrosserie_volgnummer = $carrosserie_volgnummer;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrosserietype()
    {
        return $this->carrosserietype;
    }

    /**
     * @param string $carrosserietype
     * @return Carroserie
     */
    public function setCarrosserietype($carrosserietype)
    {
        $this->carrosserietype = $carrosserietype;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeCarrosserieEuropeseOmschrijving()
    {
        return $this->type_carrosserie_europese_omschrijving;
    }

    /**
     * @param string $type_carrosserie_europese_omschrijving
     * @return Carroserie
     */
    public function setTypeCarrosserieEuropeseOmschrijving($type_carrosserie_europese_omschrijving)
    {
        $this->type_carrosserie_europese_omschrijving = $type_carrosserie_europese_omschrijving;
        return $this;
    }
}
