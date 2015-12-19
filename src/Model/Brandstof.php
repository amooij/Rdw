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
 * Class Brandstof.
 *
 * @author Nico Borghuis <nico@nicoborghuis.nl>
 *
 * @link https://www.rdw.nl/SiteCollectionDocuments/Over%20RDW/Naslagwerk/Beschrijving%20dataset%20Voertuigen.pdf
 */
class Brandstof
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
     * Brandstof volgnummer
     *
     * @var string
     */
    protected $brandstof_volgnummer;

    /**
     *
     * Brandstof omschrijving
     *
     * @var string
     */
    protected $brandstof_omschrijving;

    /**
     *
     * Brandstofverbruik buiten de stad
     *
     * @var string
     */
    protected $brandstofverbruik_buiten;

    /**
     *
     * Brandstofverbruik gecombineerd
     *
     * @var string
     */
    protected $brandstofverbruik_gecombineerd;

    /**
     *
     * Brandstofverbruik stad
     *
     * @var string
     */
    protected $brandstofverbruik_stad;

    /**
     *
     * CO2 uitstoot gecombineerd
     *
     * @var string
     */
    protected $co2_uitstoot_gecombineerd;

    /**
     *
     * CO2 uitstoot gewogen
     *
     * @var string
     */
    protected $co2_uitstoot_gewogen;

    /**
     *
     * Geluidsniveau rijdend
     *
     * @var string
     */
    protected $geluidsniveau_rijdend;

    /**
     *
     * Geluidsniveau stationair
     *
     * @var string
     */
    protected $geluidsniveau_stationair;

    /**
     *
     * Emissiecode omschrijving
     *
     * @var string
     */
    protected $emissiecode_omschrijving;

    /**
     *
     * Milieuklasse EG Goedkeuring (licht)
     *
     * @var string
     */
    protected $milieuklasse_eg_goedkeuring_licht;

    /**
     *
     * Milieuklasse EG Goedkeuring (zwaar)
     *
     * @var string
     */
    protected $milieuklasse_eg_goedkeuring_zwaar;

    /**
     *
     * Uitstoot deeltjes (licht)
     *
     * @var string
     */
    protected $uitstoot_deeltjes_licht;

    /**
     *
     * Uitstoot deeltjes (zwaar)
     *
     * @var string
     */
    protected $uitstoot_deeltjes_zwaar;

    /**
     *
     * Nettomaximumvermogen
     *
     * @var string
     */
    protected $nettomaximumvermogen;

    /**
     *
     * Nominaal continu maximumvermogen
     *
     * @var string
     */
    protected $nominaal_continu_maximumvermogen;

    /**
     *
     * Roetuitstoot
     *
     * @var string
     */
    protected $roetuitstoot;

    /**
     *
     * Toerental geluidsniveau
     *
     * @var string
     */
    protected $toerental_geluidsniveau;

    public function __construct($result)
    {
        foreach ($result as $key => $value) {
            if (property_exists('\Nettob\Component\Rdw\Model\Brandstof', $key)) {
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
     * @return Brandstof
     */
    public function setKenteken($kenteken)
    {
        $this->kenteken = $kenteken;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandstofVolgnummer()
    {
        return $this->brandstof_volgnummer;
    }

    /**
     * @param string $brandstof_volgnummer
     * @return Brandstof
     */
    public function setBrandstofVolgnummer($brandstof_volgnummer)
    {
        $this->brandstof_volgnummer = $brandstof_volgnummer;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandstofOmschrijving()
    {
        return $this->brandstof_omschrijving;
    }

    /**
     * @param string $brandstof_omschrijving
     * @return Brandstof
     */
    public function setBrandstofOmschrijving($brandstof_omschrijving)
    {
        $this->brandstof_omschrijving = $brandstof_omschrijving;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandstofverbruikBuiten()
    {
        return $this->brandstofverbruik_buiten;
    }

    /**
     * @param string $brandstofverbruik_buiten
     * @return Brandstof
     */
    public function setBrandstofverbruikBuiten($brandstofverbruik_buiten)
    {
        $this->brandstofverbruik_buiten = $brandstofverbruik_buiten;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandstofverbruikGecombineerd()
    {
        return $this->brandstofverbruik_gecombineerd;
    }

    /**
     * @param string $brandstofverbruik_gecombineerd
     * @return Brandstof
     */
    public function setBrandstofverbruikGecombineerd($brandstofverbruik_gecombineerd)
    {
        $this->brandstofverbruik_gecombineerd = $brandstofverbruik_gecombineerd;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandstofverbruikStad()
    {
        return $this->brandstofverbruik_stad;
    }

    /**
     * @param string $brandstofverbruik_stad
     * @return Brandstof
     */
    public function setBrandstofverbruikStad($brandstofverbruik_stad)
    {
        $this->brandstofverbruik_stad = $brandstofverbruik_stad;
        return $this;
    }

    /**
     * @return string
     */
    public function getCo2UitstootGecombineerd()
    {
        return $this->co2_uitstoot_gecombineerd;
    }

    /**
     * @param string $co2_uitstoot_gecombineerd
     * @return Brandstof
     */
    public function setCo2UitstootGecombineerd($co2_uitstoot_gecombineerd)
    {
        $this->co2_uitstoot_gecombineerd = $co2_uitstoot_gecombineerd;
        return $this;
    }

    /**
     * @return string
     */
    public function getCo2UitstootGewogen()
    {
        return $this->co2_uitstoot_gewogen;
    }

    /**
     * @param string $co2_uitstoot_gewogen
     * @return Brandstof
     */
    public function setCo2UitstootGewogen($co2_uitstoot_gewogen)
    {
        $this->co2_uitstoot_gewogen = $co2_uitstoot_gewogen;
        return $this;
    }

    /**
     * @return string
     */
    public function getGeluidsniveauRijdend()
    {
        return $this->geluidsniveau_rijdend;
    }

    /**
     * @param string $geluidsniveau_rijdend
     * @return Brandstof
     */
    public function setGeluidsniveauRijdend($geluidsniveau_rijdend)
    {
        $this->geluidsniveau_rijdend = $geluidsniveau_rijdend;
        return $this;
    }

    /**
     * @return string
     */
    public function getGeluidsniveauStationair()
    {
        return $this->geluidsniveau_stationair;
    }

    /**
     * @param string $geluidsniveau_stationair
     * @return Brandstof
     */
    public function setGeluidsniveauStationair($geluidsniveau_stationair)
    {
        $this->geluidsniveau_stationair = $geluidsniveau_stationair;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmissiecodeOmschrijving()
    {
        return $this->emissiecode_omschrijving;
    }

    /**
     * @param string $emissiecode_omschrijving
     * @return Brandstof
     */
    public function setEmissiecodeOmschrijving($emissiecode_omschrijving)
    {
        $this->emissiecode_omschrijving = $emissiecode_omschrijving;
        return $this;
    }

    /**
     * @return string
     */
    public function getMilieuklasseEgGoedkeuringLicht()
    {
        return $this->milieuklasse_eg_goedkeuring_licht;
    }

    /**
     * @param string $milieuklasse_eg_goedkeuring_licht
     * @return Brandstof
     */
    public function setMilieuklasseEgGoedkeuringLicht($milieuklasse_eg_goedkeuring_licht)
    {
        $this->milieuklasse_eg_goedkeuring_licht = $milieuklasse_eg_goedkeuring_licht;
        return $this;
    }

    /**
     * @return string
     */
    public function getMilieuklasseEgGoedkeuringZwaar()
    {
        return $this->milieuklasse_eg_goedkeuring_zwaar;
    }

    /**
     * @param string $milieuklasse_eg_goedkeuring_zwaar
     * @return Brandstof
     */
    public function setMilieuklasseEgGoedkeuringZwaar($milieuklasse_eg_goedkeuring_zwaar)
    {
        $this->milieuklasse_eg_goedkeuring_zwaar = $milieuklasse_eg_goedkeuring_zwaar;
        return $this;
    }

    /**
     * @return string
     */
    public function getUitstootDeeltjesLicht()
    {
        return $this->uitstoot_deeltjes_licht;
    }

    /**
     * @param string $uitstoot_deeltjes_licht
     * @return Brandstof
     */
    public function setUitstootDeeltjesLicht($uitstoot_deeltjes_licht)
    {
        $this->uitstoot_deeltjes_licht = $uitstoot_deeltjes_licht;
        return $this;
    }

    /**
     * @return string
     */
    public function getUitstootDeeltjesZwaar()
    {
        return $this->uitstoot_deeltjes_zwaar;
    }

    /**
     * @param string $uitstoot_deeltjes_zwaar
     * @return Brandstof
     */
    public function setUitstootDeeltjesZwaar($uitstoot_deeltjes_zwaar)
    {
        $this->uitstoot_deeltjes_zwaar = $uitstoot_deeltjes_zwaar;
        return $this;
    }

    /**
     * @return string
     */
    public function getNettomaximumvermogen()
    {
        return $this->nettomaximumvermogen;
    }

    /**
     * @param string $nettomaximumvermogen
     * @return Brandstof
     */
    public function setNettomaximumvermogen($nettomaximumvermogen)
    {
        $this->nettomaximumvermogen = $nettomaximumvermogen;
        return $this;
    }

    /**
     * @return string
     */
    public function getNominaalContinuMaximumvermogen()
    {
        return $this->nominaal_continu_maximumvermogen;
    }

    /**
     * @param string $nominaal_continu_maximumvermogen
     * @return Brandstof
     */
    public function setNominaalContinuMaximumvermogen($nominaal_continu_maximumvermogen)
    {
        $this->nominaal_continu_maximumvermogen = $nominaal_continu_maximumvermogen;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoetuitstoot()
    {
        return $this->roetuitstoot;
    }

    /**
     * @param string $roetuitstoot
     * @return Brandstof
     */
    public function setRoetuitstoot($roetuitstoot)
    {
        $this->roetuitstoot = $roetuitstoot;
        return $this;
    }

    /**
     * @return string
     */
    public function getToerentalGeluidsniveau()
    {
        return $this->toerental_geluidsniveau;
    }

    /**
     * @param string $toerental_geluidsniveau
     * @return Brandstof
     */
    public function setToerentalGeluidsniveau($toerental_geluidsniveau)
    {
        $this->toerental_geluidsniveau = $toerental_geluidsniveau;
        return $this;
    }
}
