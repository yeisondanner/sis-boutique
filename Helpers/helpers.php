<?php
require_once "./Config/config.php";
class Helpers
{
    /**
     * Método que devuelve la url base del proyecto
     * @return string
     */
    public function base_url()
    {
        return BASE_URL;
    }
}
