Порядок действий:

Клонируем проект

  git clone https://github.com/MishaEn/biodata.git

Переходим в папку проекта

  cd biodata

Обновляем зависимости

  composer update

Иницилизируем приложение 

  php init

Поднимаем контейнеры

  docker-compose up

Переходим в контейнер backend

  docker exec -it backend bash

Запускаем миграцию

  php yii migrate

Учтека админа

  Логин - admin
  Пароль - password
