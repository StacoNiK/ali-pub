# fas-st
PHP библиотека для сокращения ссылок через сервис [fas.st](http://fas.st)

**Установка:**

    composer require staconik/fas-st

**Использование:**

    $short_url = \FasSt\FasSt::reduce(URL);
    //URL - ссылка, которую нужно сократить
