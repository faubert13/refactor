<?php
/**
 * class Site
 */
class Site
{
    /**
     * @var int $id
     */
    protected $id;
    /**
     * @var string $url
     */
    protected $url;

    /**
     * constructor
     */
    public function __construct($id, $url)
    {
        $this->id = $id;
        $this->url = $url;
    }

    public function getId() {
        return $this->id;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }
}
