<?php 
require './vendor/autoload.php';
$router = new AltoRouter();
$router->setBasePath('projet_data/');

$router->map("GET", "/", "home");
$router->map("GET", "/contact", "contact");
$router->map("GET", "/[*:slug]", "genre");

$match = $router->match();
if (is_array($match)){
    include "./elements/header.php";
    if (is_callable($match["target"])){
        call_user_func_array($match["target"],$match["params"]);
    }else{
        $params = $match["params"];
        require "./templates/{$match["target"]}.php";
    }
    include "./elements/footer.php";
}
else{
    echo "404";
}
?>