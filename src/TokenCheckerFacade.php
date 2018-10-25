<?php
namespace hellfull\TokenChecker;
use Illuminate\Support\Facades\Facade;
class TokenCheckerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tokenchecker';
    }
}