<?php

/**
 * Класс для вывода одной переменной-числа
 * Class ViewNumber
 */
class ViewNumber extends BaseView
{
    public function flush()
    {
        echo $this->data['random'];
        return $this;
    }
}