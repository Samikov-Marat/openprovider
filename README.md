nginx-1.14

PHP-7.2-x64

Создал виртуальный сервер openprovider.local

Типичные запросы(через браузер)

http://openprovider.local/generate

http://openprovider.local/retrieve/123

Обработка запроса начинается с файла index.php

Из файла `routes.php` загружается список маршрутов: шаблон path-части uri-запроса и пара класс и метод, который должен быть вызван. 

Класс `Router` перебирает все маршруты и проверяет с помощью класса `RouteCheck` на соответствие текущему запросу. 

Если найдено соответствие, вызывается соответствующий обработчик. Сейчас это один из методов класса `Controller`, который наследуется от `BaseController`.

Контроллер с помощью класса `RandomGenerator` генерирует случайное число.

Для вывода данных используется класс `ViewNumber` (который наследуется от `BaseView`).
  
Тип вывода данных определяется ещё в файле `index.php`, так как может зависить от заголовков запроса (сейчас не реализована)
	
Альтернативный вывод с помощью класса `ViewHtml` с шаблоном template.php 
