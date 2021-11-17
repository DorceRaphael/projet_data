<?php
include "./vendor/autoload.php";
$router = new AltoRouter();
$router->setBasePath("/projet_data");

$router->map("GET", "/", "home", "home");
$router->map("GET", "/mentions_legales", "legal", "legal");
$router->map("GET", "/404", "404", "404");
$router->map("GET", "/[a:slug]", "genre", "genre");

$match = $router->match();
if (is_array($match)) {
    if (is_callable($match["target"])) {
        call_user_func_array($match["target"], $match["params"]);
    } else {
        ob_start();
        $params = $match["params"];
        include "./templates/{$match["target"]}.php";
        $pageContent = ob_get_clean();
    }
    include "./elements/layout.php";
} else {
    header("location:../../projet_data/404");
}
