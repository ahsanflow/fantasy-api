<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RoutesController extends Controller
{
    public function index()
    {
        $routes = Route::getRoutes();

        $apiRoutes = collect([]);
        $webRoutes = collect([]);

        foreach ($routes as $route) {
            $routeData = [
                'methods' => $route->methods(),
                'uri' => $route->uri(),
                'name' => $route->getName(),
                'action' => $route->getActionName(),
            ];

            if (Str::startsWith($route->uri(), 'api/')) {
                $apiRoutes->push($routeData);
            } else {
                $webRoutes->push($routeData);
            }
        }
        return view('allroutes', compact('apiRoutes', 'webRoutes'));
    }
}
