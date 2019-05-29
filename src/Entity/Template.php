<?php
/**
 * class Template
 */
class Template
{
    /**
     * @var int $id
     */
    protected $id;

    /**
     * @var string $subject
     */
    protected $subject;

    /**
     * @var string $content 
     */
    protected $content;

    /**
     * Constructor
     */
    public function __construct($id, $subject, $content)
    {
        $this->id = $id;
        $this->subject = $subject;
        $this->content = $content;
    }

    public function getId() {
        return $this->id;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getContent() {
        return $this->content;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function displayTemplate($subject) {
        return $this->subject . "\n" . $this->content;
    }
}