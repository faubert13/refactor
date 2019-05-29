<?php
/**
 * class Quote
 */
class Quote
{
    /**
     * @var int $id
     */
    public $id;

    /**
     * @var int $siteId
     */
    public $siteId;

    /**
     * @var int $destinationId
     */
    public $destinationId;

    /**
     * @var \Date $dateQuoted
     */
    public $dateQuoted;

    /**
     * Constructor
     */
    public function __construct($id, $siteId, $destinationId, $dateQuoted)
    {
        $this->id = $id;
        $this->siteId = $siteId;
        $this->destinationId = $destinationId;
        $this->dateQuoted = $dateQuoted;
    }

    public function getId(){
        return $this->id;
    }

    public function getSiteId() {
        return $this->siteId;
    }

    public function getDestinationId() {
        return $this->destinationId;
    }

    public function getDateQuoted() {
        return $this->dateQuoted;
    }

    public function setSiteId($siteId) {
        $this->siteId = $siteId;
        return $this;
    }

    public function setDestinationId($destinationId) {
        $this->destinationId = $destinationId;
        return $this;
    }

    public function setDateQuoted($dateQuoted) {
        $this->dateQuoted = $dateQuoted;
        return $this;
    }

    public static function renderHtml(Quote $quote)
    {
        return '<p>' . $quote->id . '</p>';
    }

    public static function renderText(Quote $quote)
    {
        return (string) $quote->id;
    }

    public function findQuoteById($id) {
        return QuoteRepository::getInstance()->getById($id);
    }
}