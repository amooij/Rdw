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

use DateTime;

/**
 * Class Kenteken.
 *
 * @author Nico Borghuis <nico@nicoborghuis.nl>
 *
 * @link https://www.rdw.nl/SiteCollectionDocuments/Over%20RDW/Naslagwerk/Beschrijving%20dataset%20Voertuigen.pdf
 */
class Kenteken
{
    /**
     * @var string
     */
    private $Aantalcilinders;

    /**
     * @var string
     */
    private $Aantalstaanplaatsen;

    /**
     * @var string
     */
    private $Aantalzitplaatsen;

    /**
     * @var string
     */
    private $BPM;

    /**
     * @var string
     */
    private $Brandstofverbruikbuitenweg;

    /**
     * @var string
     */
    private $Brandstofverbruikgecombineerd;

    /**
     * @var string
     */
    private $Brandstofverbruikstad;

    /**
     * @var string
     */
    private $Catalogusprijs;

    /**
     * @var string
     */
    private $Cilinderinhoud;

    /**
     * @var string
     */
    private $CO2uitstootgecombineerd;

    /**
     * @var string
     */
    private $Datumaanvangtenaamstelling;

    /**
     * @var string
     */
    private $DatumeersteafgifteNederland;

    /**
     * @var string
     */
    private $Datumeerstetoelating;

    /**
     * @var string
     */
    private $Eerstekleur;

    /**
     * @var string
     */
    private $G3installatie;

    /**
     * @var string
     */
    private $Handelsbenaming;

    /**
     * @var string
     */
    private $Hoofdbrandstof;

    /**
     * @var string
     */
    private $Inrichting;

    /**
     * @var string
     */
    private $Kenteken;

    /**
     * @var string
     */
    private $Laadvermogen;

    /**
     * @var string
     */
    private $Massaleegvoertuig;

    /**
     * @var string
     */
    private $Massarijklaar;

    /**
     * @var string
     */
    private $Maximaleconstructiesnelheid;

    /**
     * @var string
     */
    private $Maximumtetrekkenmassaautonoomgeremd;

    /**
     * @var string
     */
    private $Maximumtetrekkenmassageremd;

    /**
     * @var string
     */
    private $Maximumtetrekkenmassamiddenasgeremd;

    /**
     * @var string
     */
    private $Maximumtetrekkenmassaongeremd;

    /**
     * @var string
     */
    private $Maximumtetrekkenmassaopleggergeremd;

    /**
     * @var string
     */
    private $Merk;

    /**
     * @var string
     */
    private $Milieuclassificatie;

    /**
     * @var string
     */
    private $Nevenbrandstof;

    /**
     * @var string
     */
    private $Retrofitroetfilter;

    /**
     * @var string
     */
    private $Toegestanemaximummassavoertuig;

    /**
     * @var string
     */
    private $Tweedekleur;

    /**
     * @var string
     */
    private $Vermogen;

    /**
     * @var string
     */
    private $Vermogenbromsnorfiets;

    /**
     * @var string
     */
    private $VervaldatumAPK;

    /**
     * @var string
     */
    private $Voertuigsoort;

    /**
     * @var string
     */
    private $Wachtopkeuren;

    /**
     * @var string
     */
    private $WAMverzekerdgeregistreerd;

    /**
     * @var string
     */
    private $Zuinigheidslabel;

    /**
     * @param $date
     *
     * @return string|null
     */
    private function formatSetDate($date)
    {
        if (is_null($date) || empty($date)) {
            return;
        }
        if (substr($date, 0, 6) == '/Date(') {
            $timestamp = preg_replace("/[^0-9]/", "", $date)/1000;

            return new DateTime(date('c', $timestamp));
        } elseif ($date == '0000-00-00' || $date == '') {
            return;
        } else {
            $timestamp = strtotime($date);

            return new DateTime(date('c', $timestamp));
        }
    }

    /**
     * @return string
     */
    public function getAantalcilinders()
    {
        return $this->Aantalcilinders;
    }

    /**
     * @param string $Aantalcilinders
     */
    public function setAantalcilinders($Aantalcilinders)
    {
        if (!is_null($Aantalcilinders) || !empty($Aantalcilinders)) {
            $this->Aantalcilinders = intval($Aantalcilinders);
        }
    }

    /**
     * @return string
     */
    public function getAantalstaanplaatsen()
    {
        return $this->Aantalstaanplaatsen;
    }

    /**
     * @param string $Aantalstaanplaatsen
     */
    public function setAantalstaanplaatsen($Aantalstaanplaatsen)
    {
        if (!is_null($Aantalstaanplaatsen) || !empty($Aantalstaanplaatsen)) {
            $this->Aantalstaanplaatsen = intval($Aantalstaanplaatsen);
        }
    }

    /**
     * @return string
     */
    public function getAantalzitplaatsen()
    {
        return $this->Aantalzitplaatsen;
    }

    /**
     * @param string $Aantalzitplaatsen
     */
    public function setAantalzitplaatsen($Aantalzitplaatsen)
    {
        if (!is_null($Aantalzitplaatsen) || !empty($Aantalzitplaatsen)) {
            $this->Aantalzitplaatsen = intval($Aantalzitplaatsen);
        }
    }

    /**
     * @return string
     */
    public function getBPM()
    {
        return $this->BPM;
    }

    /**
     * @param string $BPM
     */
    public function setBPM($BPM)
    {
        if (!is_null($BPM) || !empty($BPM)) {
            $this->BPM = intval($BPM);
        }
    }

    /**
     * @return string
     */
    public function getBrandstofverbruikbuitenweg()
    {
        return $this->Brandstofverbruikbuitenweg;
    }

    /**
     * @param string $Brandstofverbruikbuitenweg
     */
    public function setBrandstofverbruikbuitenweg($Brandstofverbruikbuitenweg)
    {
        if (!is_null($Brandstofverbruikbuitenweg) || !empty($Brandstofverbruikbuitenweg)) {
            $this->Brandstofverbruikbuitenweg = floatval($Brandstofverbruikbuitenweg);
        }
    }

    /**
     * @return string
     */
    public function getBrandstofverbruikgecombineerd()
    {
        return $this->Brandstofverbruikgecombineerd;
    }

    /**
     * @param string $Brandstofverbruikgecombineerd
     */
    public function setBrandstofverbruikgecombineerd($Brandstofverbruikgecombineerd)
    {
        if (!is_null($Brandstofverbruikgecombineerd) || !empty($Brandstofverbruikgecombineerd)) {
            $this->Brandstofverbruikgecombineerd = floatval($Brandstofverbruikgecombineerd);
        }
    }

    /**
     * @return string
     */
    public function getBrandstofverbruikstad()
    {
        return $this->Brandstofverbruikstad;
    }

    /**
     * @param string $Brandstofverbruikstad
     */
    public function setBrandstofverbruikstad($Brandstofverbruikstad)
    {
        if (!is_null($Brandstofverbruikstad) || !empty($Brandstofverbruikstad)) {
            $this->Brandstofverbruikstad = floatval($Brandstofverbruikstad);
        }
    }

    /**
     * @return string
     */
    public function getCatalogusprijs()
    {
        return $this->Catalogusprijs;
    }

    /**
     * @param string $Catalogusprijs
     */
    public function setCatalogusprijs($Catalogusprijs)
    {
        if (!is_null($Catalogusprijs) || !empty($Catalogusprijs)) {
            $this->Catalogusprijs = intval($Catalogusprijs);
        }
    }

    /**
     * @return string
     */
    public function getCilinderinhoud()
    {
        return $this->Cilinderinhoud;
    }

    /**
     * @param string $Cilinderinhoud
     */
    public function setCilinderinhoud($Cilinderinhoud)
    {
        if (!is_null($Cilinderinhoud) || !empty($Cilinderinhoud)) {
            $this->Cilinderinhoud = intval($Cilinderinhoud);
        }
    }

    /**
     * @return string
     */
    public function getCO2uitstootgecombineerd()
    {
        return $this->CO2uitstootgecombineerd;
    }

    /**
     * @param string $CO2uitstootgecombineerd
     */
    public function setCO2uitstootgecombineerd($CO2uitstootgecombineerd)
    {
        if (!is_null($CO2uitstootgecombineerd) || !empty($CO2uitstootgecombineerd)) {
            $this->CO2uitstootgecombineerd = intval($CO2uitstootgecombineerd);
        }
    }

    /**
     * @return string
     */
    public function getDatumaanvangtenaamstelling()
    {
        return $this->Datumaanvangtenaamstelling;
    }

    /**
     * @param string $Datumaanvangtenaamstelling
     */
    public function setDatumaanvangtenaamstelling($Datumaanvangtenaamstelling)
    {
        $Datumaanvangtenaamstelling = $this->formatSetDate($Datumaanvangtenaamstelling);
        $this->Datumaanvangtenaamstelling = $Datumaanvangtenaamstelling;
    }

    /**
     * @return string
     */
    public function getDatumeersteafgifteNederland()
    {
        return $this->DatumeersteafgifteNederland;
    }

    /**
     * @param string $DatumeersteafgifteNederland
     */
    public function setDatumeersteafgifteNederland($DatumeersteafgifteNederland)
    {
        $DatumeersteafgifteNederland = $this->formatSetDate($DatumeersteafgifteNederland);
        $this->DatumeersteafgifteNederland = $DatumeersteafgifteNederland;
    }

    /**
     * @return string
     */
    public function getDatumeerstetoelating()
    {
        return $this->Datumeerstetoelating;
    }

    /**
     * @param string $Datumeerstetoelating
     */
    public function setDatumeerstetoelating($Datumeerstetoelating)
    {
        $Datumeerstetoelating = $this->formatSetDate($Datumeerstetoelating);
        $this->Datumeerstetoelating = $Datumeerstetoelating;
    }

    /**
     * @return string
     */
    public function getEerstekleur()
    {
        return $this->Eerstekleur;
    }

    /**
     * @param string $Eerstekleur
     */
    public function setEerstekleur($Eerstekleur)
    {
        $this->Eerstekleur = $Eerstekleur;
    }

    /**
     * @return string
     */
    public function getG3installatie()
    {
        return $this->G3installatie;
    }

    /**
     * @param string $G3installatie
     */
    public function setG3installatie($G3installatie)
    {
        $this->G3installatie = $G3installatie;
    }

    /**
     * @return string
     */
    public function getHandelsbenaming()
    {
        return $this->Handelsbenaming;
    }

    /**
     * @param string $Handelsbenaming
     */
    public function setHandelsbenaming($Handelsbenaming)
    {
        $this->Handelsbenaming = $Handelsbenaming;
    }

    /**
     * @return string
     */
    public function getHoofdbrandstof()
    {
        return $this->Hoofdbrandstof;
    }

    /**
     * @param string $Hoofdbrandstof
     */
    public function setHoofdbrandstof($Hoofdbrandstof)
    {
        $this->Hoofdbrandstof = $Hoofdbrandstof;
    }

    /**
     * @return string
     */
    public function getInrichting()
    {
        return $this->Inrichting;
    }

    /**
     * @param string $Inrichting
     */
    public function setInrichting($Inrichting)
    {
        $this->Inrichting = $Inrichting;
    }

    /**
     * @return string
     */
    public function getKenteken()
    {
        return $this->Kenteken;
    }

    /**
     * @param string $Kenteken
     */
    public function setKenteken($Kenteken)
    {
        $this->Kenteken = $Kenteken;
    }

    /**
     * @return string
     */
    public function getLaadvermogen()
    {
        return $this->Laadvermogen;
    }

    /**
     * @param string $Laadvermogen
     */
    public function setLaadvermogen($Laadvermogen)
    {
        if (!is_null($Laadvermogen) || !empty($Laadvermogen)) {
            $this->Laadvermogen = intval($Laadvermogen);
        }
    }

    /**
     * @return string
     */
    public function getMassaleegvoertuig()
    {
        return $this->Massaleegvoertuig;
    }

    /**
     * @param string $Massaleegvoertuig
     */
    public function setMassaleegvoertuig($Massaleegvoertuig)
    {
        if (!is_null($Massaleegvoertuig) || !empty($Massaleegvoertuig)) {
            $this->Massaleegvoertuig = intval($Massaleegvoertuig);
        }
    }

    /**
     * @return string
     */
    public function getMassarijklaar()
    {
        return $this->Massarijklaar;
    }

    /**
     * @param string $Massarijklaar
     */
    public function setMassarijklaar($Massarijklaar)
    {
        if (!is_null($Massarijklaar) || !empty($Massarijklaar)) {
            $this->Massarijklaar = intval($Massarijklaar);
        }
    }

    /**
     * @return string
     */
    public function getMaximaleconstructiesnelheid()
    {
        return $this->Maximaleconstructiesnelheid;
    }

    /**
     * @param string $Maximaleconstructiesnelheid
     */
    public function setMaximaleconstructiesnelheid($Maximaleconstructiesnelheid)
    {
        if (!is_null($Maximaleconstructiesnelheid) || !empty($Maximaleconstructiesnelheid)) {
            $this->Maximaleconstructiesnelheid = intval($Maximaleconstructiesnelheid);
        }
    }

    /**
     * @return string
     */
    public function getMaximumtetrekkenmassaautonoomgeremd()
    {
        return $this->Maximumtetrekkenmassaautonoomgeremd;
    }

    /**
     * @param string $Maximumtetrekkenmassaautonoomgeremd
     */
    public function setMaximumtetrekkenmassaautonoomgeremd($Maximumtetrekkenmassaautonoomgeremd)
    {
        if (!is_null($Maximumtetrekkenmassaautonoomgeremd) || !empty($Maximumtetrekkenmassaautonoomgeremd)) {
            $this->Maximumtetrekkenmassaautonoomgeremd = intval($Maximumtetrekkenmassaautonoomgeremd);
        }
    }

    /**
     * @return string
     */
    public function getMaximumtetrekkenmassageremd()
    {
        return $this->Maximumtetrekkenmassageremd;
    }

    /**
     * @param string $Maximumtetrekkenmassageremd
     */
    public function setMaximumtetrekkenmassageremd($Maximumtetrekkenmassageremd)
    {
        if (!is_null($Maximumtetrekkenmassageremd) || !empty($Maximumtetrekkenmassageremd)) {
            $this->Maximumtetrekkenmassageremd = intval($Maximumtetrekkenmassageremd);
        }
    }

    /**
     * @return string
     */
    public function getMaximumtetrekkenmassamiddenasgeremd()
    {
        return $this->Maximumtetrekkenmassamiddenasgeremd;
    }

    /**
     * @param string $Maximumtetrekkenmassamiddenasgeremd
     */
    public function setMaximumtetrekkenmassamiddenasgeremd($Maximumtetrekkenmassamiddenasgeremd)
    {
        if (!is_null($Maximumtetrekkenmassamiddenasgeremd) || !empty($Maximumtetrekkenmassamiddenasgeremd)) {
            $this->Maximumtetrekkenmassamiddenasgeremd = intval($Maximumtetrekkenmassamiddenasgeremd);
        }
    }

    /**
     * @return string
     */
    public function getMaximumtetrekkenmassaongeremd()
    {
        return $this->Maximumtetrekkenmassaongeremd;
    }

    /**
     * @param string $Maximumtetrekkenmassaongeremd
     */
    public function setMaximumtetrekkenmassaongeremd($Maximumtetrekkenmassaongeremd)
    {
        if (!is_null($Maximumtetrekkenmassaongeremd) || !empty($Maximumtetrekkenmassaongeremd)) {
            $this->Maximumtetrekkenmassaongeremd = intval($Maximumtetrekkenmassaongeremd);
        }
    }

    /**
     * @return string
     */
    public function getMaximumtetrekkenmassaopleggergeremd()
    {
        return $this->Maximumtetrekkenmassaopleggergeremd;
    }

    /**
     * @param string $Maximumtetrekkenmassaopleggergeremd
     */
    public function setMaximumtetrekkenmassaopleggergeremd($Maximumtetrekkenmassaopleggergeremd)
    {
        if (!is_null($Maximumtetrekkenmassaopleggergeremd) || !empty($Maximumtetrekkenmassaopleggergeremd)) {
            $this->Maximumtetrekkenmassaopleggergeremd = intval($Maximumtetrekkenmassaopleggergeremd);
        }
    }

    /**
     * @return string
     */
    public function getMerk()
    {
        return $this->Merk;
    }

    /**
     * @param string $Merk
     */
    public function setMerk($Merk)
    {
        $this->Merk = $Merk;
    }

    /**
     * @return string
     */
    public function getMilieuclassificatie()
    {
        return $this->Milieuclassificatie;
    }

    /**
     * @param string $Milieuclassificatie
     */
    public function setMilieuclassificatie($Milieuclassificatie)
    {
        $this->Milieuclassificatie = $Milieuclassificatie;
    }

    /**
     * @return string
     */
    public function getNevenbrandstof()
    {
        return $this->Nevenbrandstof;
    }

    /**
     * @param string $Nevenbrandstof
     */
    public function setNevenbrandstof($Nevenbrandstof)
    {
        $this->Nevenbrandstof = $Nevenbrandstof;
    }

    /**
     * @return string
     */
    public function getRetrofitroetfilter()
    {
        return $this->Retrofitroetfilter;
    }

    /**
     * @param string $Retrofitroetfilter
     */
    public function setRetrofitroetfilter($Retrofitroetfilter)
    {
        $this->Retrofitroetfilter = false;
        if ($Retrofitroetfilter == 'Ja') {
            $this->Retrofitroetfilter = true;
        }
    }

    /**
     * @return string
     */
    public function getToegestanemaximummassavoertuig()
    {
        return $this->Toegestanemaximummassavoertuig;
    }

    /**
     * @param string $Toegestanemaximummassavoertuig
     */
    public function setToegestanemaximummassavoertuig($Toegestanemaximummassavoertuig)
    {
        if (!is_null($Toegestanemaximummassavoertuig) || !empty($Toegestanemaximummassavoertuig)) {
            $this->Toegestanemaximummassavoertuig = intval($Toegestanemaximummassavoertuig);
        }
    }

    /**
     * @return string
     */
    public function getTweedekleur()
    {
        return $this->Tweedekleur;
    }

    /**
     * @param string $Tweedekleur
     */
    public function setTweedekleur($Tweedekleur)
    {
        $this->Tweedekleur = $Tweedekleur;
    }

    /**
     * @return string
     */
    public function getVermogen()
    {
        return $this->Vermogen;
    }

    /**
     * @param string $Vermogen
     */
    public function setVermogen($Vermogen)
    {
        if (!is_null($Vermogen) || !empty($Vermogen)) {
            $this->Vermogen = intval($Vermogen);
        }
    }

    /**
     * @return string
     */
    public function getVermogenbromsnorfiets()
    {
        return $this->Vermogenbromsnorfiets;
    }

    /**
     * @param string $Vermogenbromsnorfiets
     */
    public function setVermogenbromsnorfiets($Vermogenbromsnorfiets)
    {
        if (!is_null($Vermogenbromsnorfiets) || !empty($Vermogenbromsnorfiets)) {
            $this->Vermogenbromsnorfiets = floatval($Vermogenbromsnorfiets);
        }
    }

    /**
     * @return string
     */
    public function getVervaldatumAPK()
    {
        return $this->VervaldatumAPK;
    }

    /**
     * @param string $VervaldatumAPK
     */
    public function setVervaldatumAPK($VervaldatumAPK)
    {
        $VervaldatumAPK = $this->formatSetDate($VervaldatumAPK);
        $this->VervaldatumAPK = $VervaldatumAPK;
    }

    /**
     * @return string
     */
    public function getVoertuigsoort()
    {
        return $this->Voertuigsoort;
    }

    /**
     * @param string $Voertuigsoort
     */
    public function setVoertuigsoort($Voertuigsoort)
    {
        $this->Voertuigsoort = $Voertuigsoort;
    }

    /**
     * @return string
     */
    public function getWachtopkeuren()
    {
        return $this->Wachtopkeuren;
    }

    /**
     * @param string $Wachtopkeuren
     */
    public function setWachtopkeuren($Wachtopkeuren)
    {
        $this->Wachtopkeuren = false;
        if ($Wachtopkeuren == 'Ja') {
            $this->Wachtopkeuren = true;
        }
    }

    /**
     * @return string
     */
    public function getWAMverzekerdgeregistreerd()
    {
        return $this->WAMverzekerdgeregistreerd;
    }

    /**
     * @param string $WAMverzekerdgeregistreerd
     */
    public function setWAMverzekerdgeregistreerd($WAMverzekerdgeregistreerd)
    {
        $this->WAMverzekerdgeregistreerd = false;
        if ($WAMverzekerdgeregistreerd == 'Ja') {
            $this->WAMverzekerdgeregistreerd = true;
        }
    }

    /**
     * @return string
     */
    public function getZuinigheidslabel()
    {
        return $this->Zuinigheidslabel;
    }

    /**
     * @param string $Zuinigheidslabel
     */
    public function setZuinigheidslabel($Zuinigheidslabel)
    {
        $this->Zuinigheidslabel = $Zuinigheidslabel;
    }
}
