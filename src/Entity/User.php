<?php

/**
 * class User
 */
class User
{
    /**
     * @var int $id
     */
    protected $id;

    /**
     * var string $firstname
     */
    protected $firstName;

    /**
     * var string $lastname
     */
    protected $lastName;

    /**
     * var string $email
     */
    protected $email;

    public function __construct($id, $firstName, $lastName, $email)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }    

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;

        return $this;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;

        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }
}
