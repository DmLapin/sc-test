УСТАНОВКА

1. Скопировать на сервер в папку домена
2. Папку public назначить как Document root
3. Создать БД (mysql) sc-test, пользователь и пароль - sc-test. Либо отредактировать настройки в common/config/main.php
4. Запустить миграцию из консоли, предварительно назначив файлу console/yiic права на выполнение:
	$ console/yiic migrate
5. Пользователю apache (www-data) проставить права на запись в backend/runtime, console/runtime, frontend/runtime

РАБОТА ПРИЛОЖЕНИЯ

http://sc-test/ - фронт-приложение для добавления подписки
http://sc-test/admin/ - админка для просмотра подписок, логин и пароль - admin