<?php

namespace App\Core;

class Route
{
    protected array $routes;

    public function register(string $requesMethod, string $route, callable|array $action): self
    {
        // echo 'Hiên thị ra màn hình';
        $this->routes[$requesMethod][$route] = $action;
        return $this;
    }
    public function resolve(string $requestUrl, string $requesMethod)
    {
        $route = explode('?', $requestUrl)[0];
        $action = $this->routes[$requesMethod][$route] ?? null;
        if (!$action) {
            // throw new RouteNotFoundException();
            echo 'Trang này không hiển thị';
        }
        if (is_callable($action)) {
            return call_user_func($action);
        }
        if (is_array($action)) {
            [$class, $method] = $action;
            if (class_exists($class)) {
                $class = new $class();
                if (method_exists($class, $method)) {
                    return call_user_func_array([$class, $method], []);
                }
            }
        }
    }
    public function get(string $route, callable|array $action): self
    {
        return $this->register('get', $route, $action);
    }
    public function post(string $route, callable|array $action): self
    {
        return $this->register('post', $route, $action);
    }
}
