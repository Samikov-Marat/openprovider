<?php


class RouteCheck
{
    private $isMatched;
    private $params;

    public function __construct(string $pattern, string $uriPath)
    {
        $this->isMatched = preg_match($pattern, $uriPath, $matches);
        $this->params = array_slice($matches, 1);
    }

    public function isMatched()
    {
        return $this->isMatched;
    }

    public function getParams(): array
    {
        return $this->params;
    }
}