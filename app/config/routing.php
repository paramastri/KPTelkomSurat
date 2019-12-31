<?php

$di->set(
    'router',
    function () {
        $router = new \Phalcon\Mvc\Router(false);

        // $router->mount(
        //     new UserRoutes()
        // );

        $router->addGet(
            '/',
            [
                'controller' => 'index',
                'action' => 'index'
            ]
        );
        $router->addGet(
            '/carinomor',
            [
                'controller' => 'index',
                'action' => 'carinomor'
            ]
        );
        $router->addGet(
            '/detailnomor',
            [
                'controller' => 'index',
                'action' => 'detailnomor'
            ]
        );
        $router->addGet(
            '/loginadmin',
            [
                'controller' => 'index',
                'action' => 'loginadmin'
            ]
        );
        $router->addGet(
            '/nomor',
            [
                'controller' => 'index',
                'action' => 'nomor'
            ]
        );
        $router->addGet(
            '/upload',
            [
                'controller' => 'index',
                'action' => 'upload'
            ]
        );

        $router->notFound([
            'controller' => 'index',
            'action' => 'show404'
        ]);

        return $router;
    }
);