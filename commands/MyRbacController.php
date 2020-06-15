<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
/**
 * Инициализатор RBAC выполняется в консоли php yii my-rbac/init
 */
class MyRbacController extends Controller {

    public function actionInit() {
        $auth = Yii::$app->authManager;

        $auth->removeAll(); //На всякий случай удаляем старые данные из БД...

        // Создадим роли админа и редактора телеметрии и заблокированного пользователя
        $admin = $auth->createRole('admin');
        $editor = $auth->createRole('editor');
        $blocked = $auth->createRole('blocked');

        // запишем их в БД
        $auth->add($admin);
        $auth->add($editor);
        $auth->add($blocked);

        // Создаем разрешения. Например, просмотр админки viewAdminPage и редактирование новости updateNews
        $viewAdminPage = $auth->createPermission('viewAdminPage');
        $viewAdminPage->description = 'View admin';

        $editTelemetry = $auth->createPermission('editTelemetry');
        $editTelemetry->description = 'Edit telemetry';


        // Запишем эти разрешения в БД
        $auth->add($viewAdminPage);
        $auth->add($editTelemetry);

        // Теперь добавим наследования. Для роли editor мы добавим разрешение editTelemetry,
        // а для админа добавим наследование от роли editor и еще добавим собственное разрешение viewAdminPage

        // Роли «Редактор телеметрии» присваиваем разрешение «Добавление телеметрии»
        $auth->addChild($editor,$editTelemetry);

        // админ наследует роль редактора новостей. Он же админ, должен уметь всё! :D
        $auth->addChild($admin, $editor);

        // Еще админ имеет собственное разрешение - «Просмотр админки»
        $auth->addChild($admin, $viewAdminPage);

        // Назначаем роль admin пользователю с ID 1
        $auth->assign($admin, 1);

        // Назначаем роль editor пользователю с ID 2
        $auth->assign($editor, 2);

        // Назначаем роль blocked пользователю с ID 3
        $auth->assign($blocked, 3);
    }
}