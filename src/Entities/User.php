<?php

namespace App\Entities;

/**
 * Class User
 *
 * @package App\Entities
 */
class User extends Entity
{
    protected $firstName = '';
    protected $lastName = '';
    protected $email = '';
    protected $password = '';

    public function __construct(array $data = [])
    {
        parent::__construct($data);

        if (isset($data['firstName'])) {
            $this->setFirstName($data['firstName']);
        }
        if (isset($data['lastName'])) {
            $this->setLastName($data['lastName']);
        }
        if (isset($data['email'])) {
            $this->setEmail($data['email']);
        }
        if (isset($data['password'])) {
            $this->setPassword($data['password']);
        }
    }

    public function toArray()
    {
        return array_merge(
            parent::toArray(),
            [
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'email' => $this->email,
                'password' => $this->password
            ]
        );
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