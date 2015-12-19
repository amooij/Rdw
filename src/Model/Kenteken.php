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
 * Class Kenteken.
 *
 * @author Nico Borghuis <nico@nicoborghuis.nl>
 *
 * @link https://www.rdw.nl/SiteCollectionDocuments/Over%20RDW/Naslagwerk/Beschrijving%20dataset%20Voertuigen.pdf
 */
class Kenteken
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
     * Voertuigsoort
     *
     * @var string
     */
    protected $voertuigsoort;

    /**
     *
     * Merk
     *
     * @var string
     */
    protected $merk;

    /**
     *
     * Handelsbenaming
     *
     * @var string
     */
    protected $handelsbenaming;

    /**
     *
     * Vervaldatum APK
     *
     * @var string
     */
    protected $vervaldatum_apk;

    /**
     *
     * Datum tenaamstelling
     *
     * @var string
     */
    protected $datum_tenaamstelling;

    /**
     *
     * Bruto BPM
     *
     * @var number
     */
    protected $bruto_bpm;

    /**
     *
     * Inrichting
     *
     * @var string
     */
    protected $inrichting;

    /**
     *
     * Aantal zitplaatsen
     *
     * @var number
     */
    protected $aantal_zitplaatsen;

    /**
     *
     * Eerste kleur
     *
     * @var string
     */
    protected $eerste_kleur;

    /**
     *
     * Tweede kleur
     *
     * @var string
     */
    protected $tweede_kleur;

    /**
     *
     * Aantal cilinders
     *
     * @var number
     */
    protected $aantal_cilinders;

    /**
     *
     * Cilinderinhoud
     *
     * @var number
     */
    protected $cilinderinhoud;

    /**
     *
     * Massa ledig voertuig
     *
     * @var number
     */
    protected $massa_ledig_voertuig;

    /**
     *
     * Toegestane maximum massa voertuig
     *
     * @var number
     */
    protected $toegestane_maximum_massa_voertuig;

    /**
     *
     * Massa rijklaar
     *
     * @var number
     */
    protected $massa_rijklaar;

    /**
     *
     * Maximum massa trekken ongeremd
     *
     * @var number
     */
    protected $maximum_massa_trekken_ongeremd;

    /**
     *
     * Maximum trekken massa geremd
     *
     * @var number
     */
    protected $maximum_trekken_massa_geremd;

    /**
     *
     * Retrofit roetfilter
     *
     * @var string
     */
    protected $retrofit_roetfilter;

    /**
     *
     * Zuinigheidslabel
     *
     * @var string
     */
    protected $zuinigheidslabel;

    /**
     *
     * Datum eerste toelating
     *
     * @var string
     */
    protected $datum_eerste_toelating;

    /**
     *
     * Datum eerste afgifte Nederland
     *
     * @var string
     */
    protected $datum_eerste_afgifte_nederland;

    /**
     *
     * Wacht op keuren
     *
     * @var string
     */
    protected $wacht_op_keuren;

    /**
     *
     * Catalogusprijs
     *
     * @var number
     */
    protected $catalogusprijs;

    /**
     *
     * WAM verzekerd
     *
     * @var string
     */
    protected $wam_verzekerd;

    /**
     *
     * Maximale constructiesnelheid (brom/snorfiets)
     *
     * @var number
     */
    protected $maximale_constructiesnelheid_brom_snorfiets;

    /**
     *
     * Laadvermogen
     *
     * @var number
     */
    protected $laadvermogen;

    /**
     *
     * Oplegger geremd
     *
     * @var number
     */
    protected $oplegger_geremd;

    /**
     *
     * Aanhangwagen autonoom geremd
     *
     * @var number
     */
    protected $aanhangwagen_autonoom_geremd;

    /**
     *
     * Aanhangwagen middenas geremd
     *
     * @var number
     */
    protected $aanhangwagen_middenas_geremd;

    /**
     *
     * Vermogen (brom/snorfiets)
     *
     * @var number
     */
    protected $vermogen_brom_snorfiets;

    /**
     *
     * Aantal staanplaatsen
     *
     * @var number
     */
    protected $aantal_staanplaatsen;

    /**
     *
     * Aantal deuren
     *
     * @var number
     */
    protected $aantal_deuren;

    /**
     *
     * Aantal wielen
     *
     * @var number
     */
    protected $aantal_wielen;

    /**
     *
     * Afstand hart koppeling tot achterzijde voertuig
     *
     * @var number
     */
    protected $afstand_hart_koppeling_tot_achterzijde_voertuig;

    /**
     *
     * Afstand voorzijde voertuig tot hart koppeling
     *
     * @var number
     */
    protected $afstand_voorzijde_voertuig_tot_hart_koppeling;

    /**
     *
     * Afwijkende maximum snelheid
     *
     * @var number
     */
    protected $afwijkende_maximum_snelheid;

    /**
     *
     * Lengte
     *
     * @var number
     */
    protected $lengte;

    /**
     *
     * Breedte
     *
     * @var number
     */
    protected $breedte;

    /**
     *
     * Europese voertuigcategorie
     *
     * @var string
     */
    protected $europese_voertuigcategorie;

    /**
     *
     * Europese voertuigcategorie toevoeging
     *
     * @var string
     */
    protected $europese_voertuigcategorie_toevoeging;

    /**
     *
     * Europese uitvoeringcategorie toevoeging
     *
     * @var string
     */
    protected $europese_uitvoeringcategorie_toevoeging;

    /**
     *
     * Plaats chassisnummer
     *
     * @var string
     */
    protected $plaats_chassisnummer;

    /**
     *
     * Technische max. massa voertuig
     *
     * @var number
     */
    protected $technische_max_massa_voertuig;

    /**
     *
     * Type
     *
     * @var string
     */
    protected $type;

    /**
     *
     * Type gasinstallatie
     *
     * @var string
     */
    protected $type_gasinstallatie;

    /**
     *
     * Typegoedkeuringsnummer
     *
     * @var string
     */
    protected $typegoedkeuringsnummer;

    /**
     *
     * Variant
     *
     * @var string
     */
    protected $variant;

    /**
     *
     * Uitvoering
     *
     * @var string
     */
    protected $uitvoering;

    /**
     *
     * Volgnummer wijziging EU typegoedkeuring
     *
     * @var number
     */
    protected $volgnummer_wijziging_eu_typegoedkeuring;

    /**
     *
     * Vermogen massarijklaar
     *
     * @var number
     */
    protected $vermogen_massarijklaar;

    /**
     *
     * Wielbasis
     *
     * @var number
     */
    protected $wielbasis;

    /**
     *
     * Export indicator
     *
     * @var string
     */
    protected $export_indicator;

    /**
     *
     * Openstaande terugroepactie indicator
     *
     * @var string
     */
    protected $openstaande_terugroepactie_indicator;

    /**
     *
     * Vervaldatum tachograaf
     *
     * @var string
     */
    protected $vervaldatum_tachograaf;

    /**
     *
     * API Gekentekende_voertuigen_assen
     *
     * @var string
     */
    protected $api_gekentekende_voertuigen_assen;

    /**
     *
     * API Gekentekende_voertuigen_brandstof
     *
     * @var string
     */
    protected $api_gekentekende_voertuigen_brandstof;

    /**
     *
     * API Gekentekende_voertuigen_carrosserie
     *
     * @var string
     */
    protected $api_gekentekende_voertuigen_carrosserie;

    /**
     *
     * API Gekentekende_voertuigen_carrosserie_specifiek
     *
     * @var string
     */
    protected $api_gekentekende_voertuigen_carrosserie_specifiek;

    /**
     *
     * API Gekentekende_voertuigen_voertuigklasse
     *
     * @var string
     */
    protected $api_gekentekende_voertuigen_voertuigklasse;

    public function __construct($result)
    {
        foreach ($result as $key => $value) {
            if (property_exists('\Nettob\Component\Rdw\Model\Kenteken', $key)) {
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
     * @return Kenteken
     */
    public function setKenteken($kenteken)
    {
        $this->kenteken = $kenteken;
        return $this;
    }

    /**
     * @return string
     */
    public function getVoertuigsoort()
    {
        return $this->voertuigsoort;
    }

    /**
     * @param string $voertuigsoort
     * @return Kenteken
     */
    public function setVoertuigsoort($voertuigsoort)
    {
        $this->voertuigsoort = $voertuigsoort;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerk()
    {
        return $this->merk;
    }

    /**
     * @param string $merk
     * @return Kenteken
     */
    public function setMerk($merk)
    {
        $this->merk = $merk;
        return $this;
    }

    /**
     * @return string
     */
    public function getHandelsbenaming()
    {
        return $this->handelsbenaming;
    }

    /**
     * @param string $handelsbenaming
     * @return Kenteken
     */
    public function setHandelsbenaming($handelsbenaming)
    {
        $this->handelsbenaming = $handelsbenaming;
        return $this;
    }

    /**
     * @return string
     */
    public function getVervaldatumApk()
    {
        return $this->vervaldatum_apk;
    }

    /**
     * @param string $vervaldatum_apk
     * @return Kenteken
     */
    public function setVervaldatumApk($vervaldatum_apk)
    {
        $this->vervaldatum_apk = $vervaldatum_apk;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatumTenaamstelling()
    {
        return $this->datum_tenaamstelling;
    }

    /**
     * @param string $datum_tenaamstelling
     * @return Kenteken
     */
    public function setDatumTenaamstelling($datum_tenaamstelling)
    {
        $this->datum_tenaamstelling = $datum_tenaamstelling;
        return $this;
    }

    /**
     * @return number
     */
    public function getBrutoBpm()
    {
        return $this->bruto_bpm;
    }

    /**
     * @param number $bruto_bpm
     * @return Kenteken
     */
    public function setBrutoBpm($bruto_bpm)
    {
        $this->bruto_bpm = $bruto_bpm;
        return $this;
    }

    /**
     * @return string
     */
    public function getInrichting()
    {
        return $this->inrichting;
    }

    /**
     * @param string $inrichting
     * @return Kenteken
     */
    public function setInrichting($inrichting)
    {
        $this->inrichting = $inrichting;
        return $this;
    }

    /**
     * @return number
     */
    public function getAantalZitplaatsen()
    {
        return $this->aantal_zitplaatsen;
    }

    /**
     * @param number $aantal_zitplaatsen
     * @return Kenteken
     */
    public function setAantalZitplaatsen($aantal_zitplaatsen)
    {
        $this->aantal_zitplaatsen = $aantal_zitplaatsen;
        return $this;
    }

    /**
     * @return string
     */
    public function getEersteKleur()
    {
        return $this->eerste_kleur;
    }

    /**
     * @param string $eerste_kleur
     * @return Kenteken
     */
    public function setEersteKleur($eerste_kleur)
    {
        $this->eerste_kleur = $eerste_kleur;
        return $this;
    }

    /**
     * @return string
     */
    public function getTweedeKleur()
    {
        return $this->tweede_kleur;
    }

    /**
     * @param string $tweede_kleur
     * @return Kenteken
     */
    public function setTweedeKleur($tweede_kleur)
    {
        $this->tweede_kleur = $tweede_kleur;
        return $this;
    }

    /**
     * @return number
     */
    public function getAantalCilinders()
    {
        return $this->aantal_cilinders;
    }

    /**
     * @param number $aantal_cilinders
     * @return Kenteken
     */
    public function setAantalCilinders($aantal_cilinders)
    {
        $this->aantal_cilinders = $aantal_cilinders;
        return $this;
    }

    /**
     * @return number
     */
    public function getCilinderinhoud()
    {
        return $this->cilinderinhoud;
    }

    /**
     * @param number $cilinderinhoud
     * @return Kenteken
     */
    public function setCilinderinhoud($cilinderinhoud)
    {
        $this->cilinderinhoud = $cilinderinhoud;
        return $this;
    }

    /**
     * @return number
     */
    public function getMassaLedigVoertuig()
    {
        return $this->massa_ledig_voertuig;
    }

    /**
     * @param number $massa_ledig_voertuig
     * @return Kenteken
     */
    public function setMassaLedigVoertuig($massa_ledig_voertuig)
    {
        $this->massa_ledig_voertuig = $massa_ledig_voertuig;
        return $this;
    }

    /**
     * @return number
     */
    public function getToegestaneMaximumMassaVoertuig()
    {
        return $this->toegestane_maximum_massa_voertuig;
    }

    /**
     * @param number $toegestane_maximum_massa_voertuig
     * @return Kenteken
     */
    public function setToegestaneMaximumMassaVoertuig($toegestane_maximum_massa_voertuig)
    {
        $this->toegestane_maximum_massa_voertuig = $toegestane_maximum_massa_voertuig;
        return $this;
    }

    /**
     * @return number
     */
    public function getMassaRijklaar()
    {
        return $this->massa_rijklaar;
    }

    /**
     * @param number $massa_rijklaar
     * @return Kenteken
     */
    public function setMassaRijklaar($massa_rijklaar)
    {
        $this->massa_rijklaar = $massa_rijklaar;
        return $this;
    }

    /**
     * @return number
     */
    public function getMaximumMassaTrekkenOngeremd()
    {
        return $this->maximum_massa_trekken_ongeremd;
    }

    /**
     * @param number $maximum_massa_trekken_ongeremd
     * @return Kenteken
     */
    public function setMaximumMassaTrekkenOngeremd($maximum_massa_trekken_ongeremd)
    {
        $this->maximum_massa_trekken_ongeremd = $maximum_massa_trekken_ongeremd;
        return $this;
    }

    /**
     * @return number
     */
    public function getMaximumTrekkenMassaGeremd()
    {
        return $this->maximum_trekken_massa_geremd;
    }

    /**
     * @param number $maximum_trekken_massa_geremd
     * @return Kenteken
     */
    public function setMaximumTrekkenMassaGeremd($maximum_trekken_massa_geremd)
    {
        $this->maximum_trekken_massa_geremd = $maximum_trekken_massa_geremd;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetrofitRoetfilter()
    {
        return $this->retrofit_roetfilter;
    }

    /**
     * @param string $retrofit_roetfilter
     * @return Kenteken
     */
    public function setRetrofitRoetfilter($retrofit_roetfilter)
    {
        $this->retrofit_roetfilter = $retrofit_roetfilter;
        return $this;
    }

    /**
     * @return string
     */
    public function getZuinigheidslabel()
    {
        return $this->zuinigheidslabel;
    }

    /**
     * @param string $zuinigheidslabel
     * @return Kenteken
     */
    public function setZuinigheidslabel($zuinigheidslabel)
    {
        $this->zuinigheidslabel = $zuinigheidslabel;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatumEersteToelating()
    {
        return $this->datum_eerste_toelating;
    }

    /**
     * @param string $datum_eerste_toelating
     * @return Kenteken
     */
    public function setDatumEersteToelating($datum_eerste_toelating)
    {
        $this->datum_eerste_toelating = $datum_eerste_toelating;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatumEersteAfgifteNederland()
    {
        return $this->datum_eerste_afgifte_nederland;
    }

    /**
     * @param string $datum_eerste_afgifte_nederland
     * @return Kenteken
     */
    public function setDatumEersteAfgifteNederland($datum_eerste_afgifte_nederland)
    {
        $this->datum_eerste_afgifte_nederland = $datum_eerste_afgifte_nederland;
        return $this;
    }

    /**
     * @return string
     */
    public function getWachtOpKeuren()
    {
        return $this->wacht_op_keuren;
    }

    /**
     * @param string $wacht_op_keuren
     * @return Kenteken
     */
    public function setWachtOpKeuren($wacht_op_keuren)
    {
        $this->wacht_op_keuren = $wacht_op_keuren;
        return $this;
    }

    /**
     * @return number
     */
    public function getCatalogusprijs()
    {
        return $this->catalogusprijs;
    }

    /**
     * @param number $catalogusprijs
     * @return Kenteken
     */
    public function setCatalogusprijs($catalogusprijs)
    {
        $this->catalogusprijs = $catalogusprijs;
        return $this;
    }

    /**
     * @return string
     */
    public function getWamVerzekerd()
    {
        return $this->wam_verzekerd;
    }

    /**
     * @param string $wam_verzekerd
     * @return Kenteken
     */
    public function setWamVerzekerd($wam_verzekerd)
    {
        $this->wam_verzekerd = $wam_verzekerd;
        return $this;
    }

    /**
     * @return number
     */
    public function getMaximaleConstructiesnelheidBromSnorfiets()
    {
        return $this->maximale_constructiesnelheid_brom_snorfiets;
    }

    /**
     * @param number $maximale_constructiesnelheid_brom_snorfiets
     * @return Kenteken
     */
    public function setMaximaleConstructiesnelheidBromSnorfiets($maximale_constructiesnelheid_brom_snorfiets)
    {
        $this->maximale_constructiesnelheid_brom_snorfiets = $maximale_constructiesnelheid_brom_snorfiets;
        return $this;
    }

    /**
     * @return number
     */
    public function getLaadvermogen()
    {
        return $this->laadvermogen;
    }

    /**
     * @param number $laadvermogen
     * @return Kenteken
     */
    public function setLaadvermogen($laadvermogen)
    {
        $this->laadvermogen = $laadvermogen;
        return $this;
    }

    /**
     * @return number
     */
    public function getOpleggerGeremd()
    {
        return $this->oplegger_geremd;
    }

    /**
     * @param number $oplegger_geremd
     * @return Kenteken
     */
    public function setOpleggerGeremd($oplegger_geremd)
    {
        $this->oplegger_geremd = $oplegger_geremd;
        return $this;
    }

    /**
     * @return number
     */
    public function getAanhangwagenAutonoomGeremd()
    {
        return $this->aanhangwagen_autonoom_geremd;
    }

    /**
     * @param number $aanhangwagen_autonoom_geremd
     * @return Kenteken
     */
    public function setAanhangwagenAutonoomGeremd($aanhangwagen_autonoom_geremd)
    {
        $this->aanhangwagen_autonoom_geremd = $aanhangwagen_autonoom_geremd;
        return $this;
    }

    /**
     * @return number
     */
    public function getAanhangwagenMiddenasGeremd()
    {
        return $this->aanhangwagen_middenas_geremd;
    }

    /**
     * @param number $aanhangwagen_middenas_geremd
     * @return Kenteken
     */
    public function setAanhangwagenMiddenasGeremd($aanhangwagen_middenas_geremd)
    {
        $this->aanhangwagen_middenas_geremd = $aanhangwagen_middenas_geremd;
        return $this;
    }

    /**
     * @return number
     */
    public function getVermogenBromSnorfiets()
    {
        return $this->vermogen_brom_snorfiets;
    }

    /**
     * @param number $vermogen_brom_snorfiets
     * @return Kenteken
     */
    public function setVermogenBromSnorfiets($vermogen_brom_snorfiets)
    {
        $this->vermogen_brom_snorfiets = $vermogen_brom_snorfiets;
        return $this;
    }

    /**
     * @return number
     */
    public function getAantalStaanplaatsen()
    {
        return $this->aantal_staanplaatsen;
    }

    /**
     * @param number $aantal_staanplaatsen
     * @return Kenteken
     */
    public function setAantalStaanplaatsen($aantal_staanplaatsen)
    {
        $this->aantal_staanplaatsen = $aantal_staanplaatsen;
        return $this;
    }

    /**
     * @return number
     */
    public function getAantalDeuren()
    {
        return $this->aantal_deuren;
    }

    /**
     * @param number $aantal_deuren
     * @return Kenteken
     */
    public function setAantalDeuren($aantal_deuren)
    {
        $this->aantal_deuren = $aantal_deuren;
        return $this;
    }

    /**
     * @return number
     */
    public function getAantalWielen()
    {
        return $this->aantal_wielen;
    }

    /**
     * @param number $aantal_wielen
     * @return Kenteken
     */
    public function setAantalWielen($aantal_wielen)
    {
        $this->aantal_wielen = $aantal_wielen;
        return $this;
    }

    /**
     * @return number
     */
    public function getAfstandHartKoppelingTotAchterzijdeVoertuig()
    {
        return $this->afstand_hart_koppeling_tot_achterzijde_voertuig;
    }

    /**
     * @param number $afstand_hart_koppeling_tot_achterzijde_voertuig
     * @return Kenteken
     */
    public function setAfstandHartKoppelingTotAchterzijdeVoertuig($afstand_hart_koppeling_tot_achterzijde_voertuig)
    {
        $this->afstand_hart_koppeling_tot_achterzijde_voertuig = $afstand_hart_koppeling_tot_achterzijde_voertuig;
        return $this;
    }

    /**
     * @return number
     */
    public function getAfstandVoorzijdeVoertuigTotHartKoppeling()
    {
        return $this->afstand_voorzijde_voertuig_tot_hart_koppeling;
    }

    /**
     * @param number $afstand_voorzijde_voertuig_tot_hart_koppeling
     * @return Kenteken
     */
    public function setAfstandVoorzijdeVoertuigTotHartKoppeling($afstand_voorzijde_voertuig_tot_hart_koppeling)
    {
        $this->afstand_voorzijde_voertuig_tot_hart_koppeling = $afstand_voorzijde_voertuig_tot_hart_koppeling;
        return $this;
    }

    /**
     * @return number
     */
    public function getAfwijkendeMaximumSnelheid()
    {
        return $this->afwijkende_maximum_snelheid;
    }

    /**
     * @param number $afwijkende_maximum_snelheid
     * @return Kenteken
     */
    public function setAfwijkendeMaximumSnelheid($afwijkende_maximum_snelheid)
    {
        $this->afwijkende_maximum_snelheid = $afwijkende_maximum_snelheid;
        return $this;
    }

    /**
     * @return number
     */
    public function getLengte()
    {
        return $this->lengte;
    }

    /**
     * @param number $lengte
     * @return Kenteken
     */
    public function setLengte($lengte)
    {
        $this->lengte = $lengte;
        return $this;
    }

    /**
     * @return number
     */
    public function getBreedte()
    {
        return $this->breedte;
    }

    /**
     * @param number $breedte
     * @return Kenteken
     */
    public function setBreedte($breedte)
    {
        $this->breedte = $breedte;
        return $this;
    }

    /**
     * @return string
     */
    public function getEuropeseVoertuigcategorie()
    {
        return $this->europese_voertuigcategorie;
    }

    /**
     * @param string $europese_voertuigcategorie
     * @return Kenteken
     */
    public function setEuropeseVoertuigcategorie($europese_voertuigcategorie)
    {
        $this->europese_voertuigcategorie = $europese_voertuigcategorie;
        return $this;
    }

    /**
     * @return string
     */
    public function getEuropeseVoertuigcategorieToevoeging()
    {
        return $this->europese_voertuigcategorie_toevoeging;
    }

    /**
     * @param string $europese_voertuigcategorie_toevoeging
     * @return Kenteken
     */
    public function setEuropeseVoertuigcategorieToevoeging($europese_voertuigcategorie_toevoeging)
    {
        $this->europese_voertuigcategorie_toevoeging = $europese_voertuigcategorie_toevoeging;
        return $this;
    }

    /**
     * @return string
     */
    public function getEuropeseUitvoeringcategorieToevoeging()
    {
        return $this->europese_uitvoeringcategorie_toevoeging;
    }

    /**
     * @param string $europese_uitvoeringcategorie_toevoeging
     * @return Kenteken
     */
    public function setEuropeseUitvoeringcategorieToevoeging($europese_uitvoeringcategorie_toevoeging)
    {
        $this->europese_uitvoeringcategorie_toevoeging = $europese_uitvoeringcategorie_toevoeging;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlaatsChassisnummer()
    {
        return $this->plaats_chassisnummer;
    }

    /**
     * @param string $plaats_chassisnummer
     * @return Kenteken
     */
    public function setPlaatsChassisnummer($plaats_chassisnummer)
    {
        $this->plaats_chassisnummer = $plaats_chassisnummer;
        return $this;
    }

    /**
     * @return number
     */
    public function getTechnischeMaxMassaVoertuig()
    {
        return $this->technische_max_massa_voertuig;
    }

    /**
     * @param number $technische_max_massa_voertuig
     * @return Kenteken
     */
    public function setTechnischeMaxMassaVoertuig($technische_max_massa_voertuig)
    {
        $this->technische_max_massa_voertuig = $technische_max_massa_voertuig;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Kenteken
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeGasinstallatie()
    {
        return $this->type_gasinstallatie;
    }

    /**
     * @param string $type_gasinstallatie
     * @return Kenteken
     */
    public function setTypeGasinstallatie($type_gasinstallatie)
    {
        $this->type_gasinstallatie = $type_gasinstallatie;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypegoedkeuringsnummer()
    {
        return $this->typegoedkeuringsnummer;
    }

    /**
     * @param string $typegoedkeuringsnummer
     * @return Kenteken
     */
    public function setTypegoedkeuringsnummer($typegoedkeuringsnummer)
    {
        $this->typegoedkeuringsnummer = $typegoedkeuringsnummer;
        return $this;
    }

    /**
     * @return string
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * @param string $variant
     * @return Kenteken
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
        return $this;
    }

    /**
     * @return string
     */
    public function getUitvoering()
    {
        return $this->uitvoering;
    }

    /**
     * @param string $uitvoering
     * @return Kenteken
     */
    public function setUitvoering($uitvoering)
    {
        $this->uitvoering = $uitvoering;
        return $this;
    }

    /**
     * @return number
     */
    public function getVolgnummerWijzigingEuTypegoedkeuring()
    {
        return $this->volgnummer_wijziging_eu_typegoedkeuring;
    }

    /**
     * @param number $volgnummer_wijziging_eu_typegoedkeuring
     * @return Kenteken
     */
    public function setVolgnummerWijzigingEuTypegoedkeuring($volgnummer_wijziging_eu_typegoedkeuring)
    {
        $this->volgnummer_wijziging_eu_typegoedkeuring = $volgnummer_wijziging_eu_typegoedkeuring;
        return $this;
    }

    /**
     * @return number
     */
    public function getVermogenMassarijklaar()
    {
        return $this->vermogen_massarijklaar;
    }

    /**
     * @param number $vermogen_massarijklaar
     * @return Kenteken
     */
    public function setVermogenMassarijklaar($vermogen_massarijklaar)
    {
        $this->vermogen_massarijklaar = $vermogen_massarijklaar;
        return $this;
    }

    /**
     * @return number
     */
    public function getWielbasis()
    {
        return $this->wielbasis;
    }

    /**
     * @param number $wielbasis
     * @return Kenteken
     */
    public function setWielbasis($wielbasis)
    {
        $this->wielbasis = $wielbasis;
        return $this;
    }

    /**
     * @return string
     */
    public function getExportIndicator()
    {
        return $this->export_indicator;
    }

    /**
     * @param string $export_indicator
     * @return Kenteken
     */
    public function setExportIndicator($export_indicator)
    {
        $this->export_indicator = $export_indicator;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenstaandeTerugroepactieIndicator()
    {
        return $this->openstaande_terugroepactie_indicator;
    }

    /**
     * @param string $openstaande_terugroepactie_indicator
     * @return Kenteken
     */
    public function setOpenstaandeTerugroepactieIndicator($openstaande_terugroepactie_indicator)
    {
        $this->openstaande_terugroepactie_indicator = $openstaande_terugroepactie_indicator;
        return $this;
    }

    /**
     * @return string
     */
    public function getVervaldatumTachograaf()
    {
        return $this->vervaldatum_tachograaf;
    }

    /**
     * @param string $vervaldatum_tachograaf
     * @return Kenteken
     */
    public function setVervaldatumTachograaf($vervaldatum_tachograaf)
    {
        $this->vervaldatum_tachograaf = $vervaldatum_tachograaf;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiGekentekendeVoertuigenAssen()
    {
        return $this->api_gekentekende_voertuigen_assen;
    }

    /**
     * @param string $api_gekentekende_voertuigen_assen
     * @return Kenteken
     */
    public function setApiGekentekendeVoertuigenAssen($api_gekentekende_voertuigen_assen)
    {
        $this->api_gekentekende_voertuigen_assen = $api_gekentekende_voertuigen_assen;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiGekentekendeVoertuigenBrandstof()
    {
        return $this->api_gekentekende_voertuigen_brandstof;
    }

    /**
     * @param string $api_gekentekende_voertuigen_brandstof
     * @return Kenteken
     */
    public function setApiGekentekendeVoertuigenBrandstof($api_gekentekende_voertuigen_brandstof)
    {
        $this->api_gekentekende_voertuigen_brandstof = $api_gekentekende_voertuigen_brandstof;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiGekentekendeVoertuigenCarrosserie()
    {
        return $this->api_gekentekende_voertuigen_carrosserie;
    }

    /**
     * @param string $api_gekentekende_voertuigen_carrosserie
     * @return Kenteken
     */
    public function setApiGekentekendeVoertuigenCarrosserie($api_gekentekende_voertuigen_carrosserie)
    {
        $this->api_gekentekende_voertuigen_carrosserie = $api_gekentekende_voertuigen_carrosserie;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiGekentekendeVoertuigenCarrosserieSpecifiek()
    {
        return $this->api_gekentekende_voertuigen_carrosserie_specifiek;
    }

    /**
     * @param string $api_gekentekende_voertuigen_carrosserie_specifiek
     * @return Kenteken
     */
    public function setApiGekentekendeVoertuigenCarrosserieSpecifiek($api_gekentekende_voertuigen_carrosserie_specifiek)
    {
        $this->api_gekentekende_voertuigen_carrosserie_specifiek = $api_gekentekende_voertuigen_carrosserie_specifiek;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiGekentekendeVoertuigenVoertuigklasse()
    {
        return $this->api_gekentekende_voertuigen_voertuigklasse;
    }

    /**
     * @param string $api_gekentekende_voertuigen_voertuigklasse
     * @return Kenteken
     */
    public function setApiGekentekendeVoertuigenVoertuigklasse($api_gekentekende_voertuigen_voertuigklasse)
    {
        $this->api_gekentekende_voertuigen_voertuigklasse = $api_gekentekende_voertuigen_voertuigklasse;
        return $this;
    }
}
