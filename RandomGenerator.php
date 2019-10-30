<?php

/**
 * Генератор случайных чисел
 * Class RandomGenerator
 */
class RandomGenerator
{
    /**
     * Возвращает случайное число
     * @param null $seed Зерно для инициализации генератора случайных чисел
     * @return int
     */
    public static function getValue($seed = null)
    {
        if (isset($seed)) {
            mt_srand($seed);
        } else {
            // Если зерно не задано, то выбирается встроенными средствами
            mt_srand();
        }
        return mt_rand();
    }
}