<?php

$di->set(
    'router',
    function () {
        $router = new \Phalcon\Mvc\Router(false);

        $router->mount(
            new UserRoutes()
        );

        $router->mount(
            new DokterRoutes()
        );

        $router->mount(
            new ApotekerRoutes()
        );

        $router->mount(
            new AdminRoutes()
        );

        $router->addGet(
            '/',
            [
                'controller' => 'index',
                'action' => 'index'
            ]
        );

        $router->notFound([
            'controller' => 'index',
            'action' => 'show404'
        ]);

        return $router;
    }
);