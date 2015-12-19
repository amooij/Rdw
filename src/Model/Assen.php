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
 * Class As.
 *
 * @author Nico Borghuis <nico@nicoborghuis.nl>
 *
 * @link https://www.rdw.nl/SiteCollectionDocuments/Over%20RDW/Naslagwerk/Beschrijving%20dataset%20Voertuigen.pdf
 */
class Assen
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
      * As nummer
      *
      * @var string
      */
    protected $as_nummer;

    /**
      *
      * Aantal assen
      *
      * @var string
      */
    protected $aantal_assen;

    /**
      *
      * Aangedreven as
      *
      * @var string
      */
    protected $aangedreven_as;

    /**
      *
      * Hefas
      *
      * @var string
      */
    protected $hefas;

    /**
      *
      * Plaatscode as
      *
      * @var string
      */
    protected $plaatscode_as;

    /**
      *
      * Spoorbreedte
      *
      * @var string
      */
    protected $spoorbreedte;

    /**
      *
      * Weggedrag code
      *
      * @var string
      */
    protected $weggedrag_code;

    /**
      *
      * Wettelijk toegestane maximum aslast
      *
      * @var string
      */
    protected $wettelijk_toegestane_maximum_aslast;

    /**
      *
      * Technisch toegestane maximum aslast
      *
      * @var string
      */
    protected $technisch_toegestane_maximum_aslast;

    public function __construct($result)
    {
        foreach ($result as $key => $value) {
            if (property_exists('\Nettob\Component\Rdw\Model\Assen', $key)) {
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
     * @return Assen
     */
    public function setKenteken($kenteken)
    {
        $this->kenteken = $kenteken;
        return $this;
    }

    /**
     * @return string
     */
    public function getAsNummer()
    {
        return $this->as_nummer;
    }

    /**
     * @param string $as_nummer
     * @return Assen
     */
    public function setAsNummer($as_nummer)
    {
        $this->as_nummer = $as_nummer;
        return $this;
    }

    /**
     * @return string
     */
    public function getAantalAssen()
    {
        return $this->aantal_assen;
    }

    /**
     * @param string $aantal_assen
     * @return Assen
     */
    public function setAantalAssen($aantal_assen)
    {
        $this->aantal_assen = $aantal_assen;
        return $this;
    }

    /**
     * @return string
     */
    public function getAangedrevenAs()
    {
        return $this->aangedreven_as;
    }

    /**
     * @param string $aangedreven_as
     * @return Assen
     */
    public function setAangedrevenAs($aangedreven_as)
    {
        $this->aangedreven_as = $aangedreven_as;
        return $this;
    }

    /**
     * @return string
     */
    public function getHefas()
    {
        return $this->hefas;
    }

    /**
     * @param string $hefas
     * @return Assen
     */
    public function setHefas($hefas)
    {
        $this->hefas = $hefas;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlaatscodeAs()
    {
        return $this->plaatscode_as;
    }

    /**
     * @param string $plaatscode_as
     * @return Assen
     */
    public function setPlaatscodeAs($plaatscode_as)
    {
        $this->plaatscode_as = $plaatscode_as;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpoorbreedte()
    {
        return $this->spoorbreedte;
    }

    /**
     * @param string $spoorbreedte
     * @return Assen
     */
    public function setSpoorbreedte($spoorbreedte)
    {
        $this->spoorbreedte = $spoorbreedte;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeggedragCode()
    {
        return $this->weggedrag_code;
    }

    /**
     * @param string $weggedrag_code
     * @return Assen
     */
    public function setWeggedragCode($weggedrag_code)
    {
        $this->weggedrag_code = $weggedrag_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getWettelijkToegestaneMaximumAslast()
    {
        return $this->wettelijk_toegestane_maximum_aslast;
    }

    /**
     * @param string $wettelijk_toegestane_maximum_aslast
     * @return Assen
     */
    public function setWettelijkToegestaneMaximumAslast($wettelijk_toegestane_maximum_aslast)
    {
        $this->wettelijk_toegestane_maximum_aslast = $wettelijk_toegestane_maximum_aslast;
        return $this;
    }

    /**
     * @return string
     */
    public function getTechnischToegestaneMaximumAslast()
    {
        return $this->technisch_toegestane_maximum_aslast;
    }

    /**
     * @param string $technisch_toegestane_maximum_aslast
     * @return Assen
     */
    public function setTechnischToegestaneMaximumAslast($technisch_toegestane_maximum_aslast)
    {
        $this->technisch_toegestane_maximum_aslast = $technisch_toegestane_maximum_aslast;
        return $this;
    }
}
