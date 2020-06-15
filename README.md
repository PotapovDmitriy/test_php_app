<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

Приложение на базовом каркасе yii2

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Build Status](https://travis-ci.com/yiisoft/yii2-app-basic.svg?branch=master)](https://travis-ci.com/yiisoft/yii2-app-basic)

СТРУКТУРА КАТАЛОГОВ
-------------------

      assets/               содержит ассеты
      commands/             содержит консольные контроллеры
      config/               содержит конфигурационные файлы приложения
      controllers/          содержит общие веб контроллеры
      models/               содержит общие модели
      runtime/              содержит файлы генерируемые runtime
      tests/                содержит тесты
      views/                содержит общие файлы отображения
      web/                  содержит веб ресурсы
      modules/              содержит модули
            -/api           содержит модуль api для rest
            -/telemetry     содержит модуль телеметрии
            -/users         содержит модуль для пользователя
            -/webSocket     содержит модуль для веб-сокета



ТРЕБОВАНИЯ
------------

PHP 7.2.0.


УСТАНОВКА
------------
### Установка с докером
    
Запуск контейнера

    docker-compose up -d
    
Запуск веб-сокета

    docker-compose exec php bash
    
    ./yii /webSocket/ws/run
    
Доступ к приложению по ссылке

    http://localhost:8500/
    
ФУНКЦИОНАЛ
-------

Авторизация пользователей через веб интерфейс

Добавление телеметрии через веб интерфейс(http://localhost:8500/webSocket/add/show)   
Добавление телеметрии через rest запросы (http://localhost:8500/api/telemetry/create, передаётся JSON с параметром: текстом телеметрии)

JSON параметры для отправления запроса ка добавление(пользователь должен быть авторизирован):
    
    {"telemetry_string":"second"}

Просмотр телеметрии через веб интерфейс(http://localhost:8500/telemetry/show/list)  
Просмотр телеметрии через rest запросы (http://localhost:8500/api/telemetry)

Добавление нового пользователя через веб интерйфес при помощи страницы Admin
Просмотр всех пользователей системы и блокирование пользователоей через веб интерфейс под пользоватеелм Admin с ролью админа(http://localhost:8500/admin/add-user/show)
Поддержка ролей
Проверка авторизации через access token rest api
