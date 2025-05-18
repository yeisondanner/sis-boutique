<?php
require_once "config/config.php";
class Helpers
{
    /**
     * Metodo que devuelve la url base del proyecto
     * @return string
     */
    public function base_url()
    {
        return BASE_URL;
    }
}