<?php
namespace Jankx\Languages\Integration;

class PolylangIntegration
{
    public function bootstrap()
    {
        add_filter('gettext', array($this, 'translate'), 10, 3);
    }

    public function translate($translation, $text, $domain)
    {
        if ($text === $translation) {
            return pll__($text);
        }
        return $translation;
    }
}
