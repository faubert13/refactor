<?php
/**
 * class Destination
 */
class Destination
{
    /**
     * @var int $id
     */
    public $id;

    /**
     * @var string $countryName
     */
    public $countryName;

    /**
     * @var string $conjuction
     */
    public $conjunction;

    /**
     * @var string $name
     */
    public $name;

    /**
     * @var string $computerName
     */
    public $computerName;

    /**
     * constructor
     */
    public function __construct($id, $countryName, $conjunction, $computerName)
    {
        $this->id = $id;
        $this->countryName = $countryName;
        $this->conjunction = $conjunction;
        $this->computerName = $computerName;
    }

    public function getId() {
        return $this->id;
    }

    public function getCountryName() {
        return $this->countryName;
    }

    public function getConjuction() {
        return $this->conjuction;
    }

    public function getComputerName() {
        return $this->computerName;
    }

    public function setCountryName($countryName) {
        $this->countryName = $countryName;
        return $this;
    }

    public function setConjuction($conjuction) {
        $this->conjuction = $conjuction;
        return $this;
    }

    public function setComputerName($computerName) {
        $this->computerName = $computerName;
        return $this;
    }

    public function findDestinationByQuote($quoteDestinationId) {
        return DestinationRepository::getInstance()->getById($quoteDestinationId);
    }

    public function getById($id) {
        return DestinationRepository::getInstance()->getById($id);
    }
}
