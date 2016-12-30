<?php

namespace App\Entities;

/**
 * Class User
 *
 * @package App\Entities
 *
 * @Entity
 */
class User
{
    /**
     * @var int
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @var string
     * @Column(type="string")
     */
    protected $firstName;

    /**
     * @var string
     * @Column(type="string")
     */
    protected $lastName;

    /**
     * @var string
     * @Column(type="string")
     */
    protected $email;

    /**
     * @var string
     * @Column(type="string")
     */
    protected $password;

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}
