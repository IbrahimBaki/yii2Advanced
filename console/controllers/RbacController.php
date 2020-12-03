<?php
namespace console\controllers;
use Yii;
use yii\console\controller;

class RbacController extends Controller{

    public function actionInit()
    {
        $auth = Yii::$app->authManager;
    // add "accessBackend" permission
        $accessBackend = $auth->createPermission('accessBackend');
        $accessBackend->description = 'access to backend';
        $auth->add($accessBackend);

    // add "accessFrontend" permission
        $accessFrontend = $auth->createPermission('accessFrontend');
        $accessFrontend->description = 'access to frontend';
        $auth->add($accessFrontend);

    // add "user" role and give this role the "createPost" permission
        $user = $auth->createRole('user');
//        $user->ruleName = 'user';
        $auth->add($user);
        $auth->addChild($user,$accessFrontend);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('admin');
//        $user->ruleName = 'admin';
        $auth->add($admin);
        $auth->addChild($admin,$accessBackend);
        $auth->addChild($admin,$user);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($user, 5);
        $auth->assign($admin, 2);

    }
}
