<?php

require_once(dirname(__DIR__).'/IyzipayBootstrap.php');

IyzipayBootstrap::init();

class Config
{
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey('sandbox-OModEnsCXXe0FhMmLGHpHrqRZw8B82Kj');
        $options->setSecretKey('sandbox-FZKIrctMFX9OO1LlAz0Xtl8HS6h4sWVp');
        $options->setBaseUrl('https://sandbox-api.iyzipay.com');

        return $options;
    }
}
