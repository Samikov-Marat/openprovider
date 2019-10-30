<?php

/**
 * Определяет в каком формате ожидает данные пользователь
 * Class HeaderParser
 */
class HeaderParser
{
    const NORMAL_ACCEPT = 0;
    const HTML_ONLY_ACCEPT = 1;

    public static function getAccept($headers)
    {
        if (array_key_exists('Accept', $headers) &&
            ($headers['Accept'] == 'text/html')) {
            $accept = self::HTML_ONLY_ACCEPT;
        } else {
            $accept = self::NORMAL_ACCEPT;
        }
        return $accept;
    }
}