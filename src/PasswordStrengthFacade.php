<?php
namespace UzzairWebStudio\PasswordStrength;

use Illuminate\Support\Facades\Facade;

class PasswordStrengthFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'password-strength';
    }
}