<?php

/**
 * Class BaseController Базовый контроллер
 */
abstract class BaseController
{
    protected $view;

    public function __construct(BaseView $view)
    {
        $this->view = $view;
    }
}