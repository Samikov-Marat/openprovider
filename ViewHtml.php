<?php

/**
 * Класс для вывода данных в html-формате
 * Class ViewHtml
 */
class ViewHtml extends BaseView
{
    const TEMPLATE = 'template.php';

    /**
     * Выводит данные
     * @return $this
     */
    public function flush()
    {
        // Загружаем элементы массива как переменные
        extract($this->data);
        include self::TEMPLATE;
        return $this;
    }
}