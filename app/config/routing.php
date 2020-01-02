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
            '/register',
            [
                'controller' => 'index',
                'action' => 'create'
            ]
        );

        $router->addPost(
            '/register',
            [
                'controller' => 'index',
                'action' => 'store'
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
        $router->addGet(
            '/halamanadmin',
            [
                'controller' => 'index',
                'action' => 'halamanadmin'
            ]
        );


        // $router->addGet(
        //     '/register',
        //     [
        //         'controller' => 'index',
        //         'action' => 'register'
        //     ]
        // );

        $router->addPost(
            '/storelogin',
            [
                'controller'=>'index',
                'action'=>'storelogin'
            ]

        );

        $router->addPost(
            '/storesurat',
            [
                'controller' => 'index',
                'action' => 'storesurat'
            ]
        );

        $router->addGet(
            '/logout',
            [
                'controller' => 'index',
                'action' => 'logout'
            ]
        );
        $router->notFound([
            'controller' => 'index',
            'action' => 'show404'
        ]);
        
        return $router;
    }
);