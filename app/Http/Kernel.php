<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Les middleware HTTP globaux de l'application.
     *
     * Ces middleware sont exécutés pour chaque requête vers votre application.
     *
     * @var array
     */
    protected $middleware = [
        // Middleware pour gérer les erreurs de l'application
    ];

    /**
     * Les groupes de middleware HTTP de l'application.
     *
     * Parfois, vous pouvez vouloir regrouper plusieurs middleware sous un seul
     * nom pour les assigner plus facilement à certaines routes. Vous pouvez
     * créer autant de groupes que vous le souhaitez.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [],

        'api' => [
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * Les middleware de route de l'application.
     *
     * Ces middleware peuvent être assignés à des groupes de middleware ou utilisés
     * individuellement. Ces middleware sont exécutés après les middleware globaux
     * de chaque requête entrante et avant les middleware des groupes de middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [];
}
