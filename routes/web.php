<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'getIndex']);

$controllerPath = app_path('Http/Controllers');
$controllers = array_map(function ($file) {
    return basename($file, '.php');
}, glob($controllerPath . '/*.php'));
foreach ($controllers as $controller) {
    if (!Str::endsWith($controller, 'Controller')) {
        continue;
    }
    $controllerClass = "App\\Http\\Controllers\\{$controller}";
    if (!class_exists($controllerClass)) {
        continue;
    }
    $baseUri = Str::kebab(Str::replaceLast('Controller', '', $controller));
    $methods = get_class_methods($controllerClass);
    foreach ($methods as $method) {
        if (Str::startsWith($method, '__')) {
            continue;
        }
        if (Str::startsWith($method, 'get')) {
            $uriSuffix = Str::kebab(Str::replaceFirst('get', '', $method));
            $uri = $uriSuffix === 'index' ? $baseUri : "{$baseUri}/{$uriSuffix}";
            $reflection = new ReflectionMethod($controllerClass, $method);
            $parameters = $reflection->getParameters();
            foreach ($parameters as $parameter) {
                $uri .= '/{' . $parameter->getName() . '}';
            }
            $action = "{$controllerClass}@{$method}";
            Route::get($uri, $action);
        }
    }
}

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
