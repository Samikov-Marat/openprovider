<?php

/**
 * Class Controller Контроллер обработки запроса случайных чисел
 */
class Controller extends BaseController
{
    public function generate()
    {
        // Получение случайного число
        $random = RandomGenerator::getValue();
        // Добавляем данные к вьюхе и начинаем вывод
        $this->view->prepare('random', $random)->flush();
    }

    public function retrieve(int $id)
    {
        $random = RandomGenerator::getValue($id);
        $this->view->prepare('random', $random)->flush();
    }

}