<?php

class Room
{
    public int $id;
    public string $name;

    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    function prettyPrint(): string
    {
        return $this->id . ': ' . strtoupper($this->name);
    }

}