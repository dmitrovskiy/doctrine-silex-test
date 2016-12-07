<?php

namespace App\Entities;

/**
 * Class Entity
 *
 * @package App\Entities
 */
abstract class Entity
{
    protected $id = null;

    public function __construct(array $data = [])
    {
        if(isset($data['id'])) {
            $this->setId($data['id']);
        }
    }

    public function toArray()
    {
        return [
            'id' => $this->id
        ];
    }

    public function toJSON()
    {
        return json_encode($this->toArray());
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}