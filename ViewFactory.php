<?php


class ViewFactory
{
    public static function getView($accept)
    {
        switch ($accept) {
            case HeaderParser::HTML_ONLY_ACCEPT:
                $view = new ViewHtml();
                break;
            default:
                $view = new ViewNumber();
                break;
        }
        return $view;
    }
}