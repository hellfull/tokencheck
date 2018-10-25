<?php
namespace hellfull\TokenChecker;


class TokenChecker
{
    private $bearer;

    public function __construct($bearer)
    {
        $this->bearer = $bearer;
        return $this->bearer;
    }
}