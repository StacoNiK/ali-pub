# ali-pub
PHP библиотека для сокращения ссылок через сервис [ali.pub](http://ali.pub)

**Установка:**

    composer require staconik/ali-pub

**Использование:**

    $short_url = \AliPub\AliPub::reduce(URL);
    //URL - ссылка, которую нужно сократить
