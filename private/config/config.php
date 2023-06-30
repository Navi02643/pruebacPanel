<?php

namespace Configuration;

use PDO;

class Configuration
{
    private const BASE_URL = 'http://localhost/buenas_practicas/private/';
    private const STYLES   = 'styles/style.css';
    private const SCRIPTS  = 'scripts/script.js';
    private const NOTIFICACION = 'scripts/notificacines.js';

    public function getURLStyle()
    {
        return  self::BASE_URL .  self::STYLES;
    }

    public function getURLScript()
    {
        return self::BASE_URL .  self::SCRIPTS;
    }

    public function getUTLNotificaciones(){
        return self::BASE_URL .  self::NOTIFICACION;
    }
}

echo "No deberias ver esto.";