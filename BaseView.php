<?php

/**
 * Class BaseView Базовый класс вывода
 */
abstract class BaseView
{
    protected $data = [];

    /**
     * Прикрепляет данные с указанием имени-ключа в массиве данных.
     * @param $key
     * @param $data
     * @return $this
     */
    public function prepare(string $key, $data)
    {
        $this->data[$key] = $data;
        // Для java-подобного последовательного вызова функций
        return $this;
    }

    abstract public function flush();
}