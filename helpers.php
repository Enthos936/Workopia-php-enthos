<?php

/**
 * Get the base path
 * 
 * @params string $path
 * @return string
 */
function basePath($path = "") {
    return __DIR__ . "/" . $path;
};

/**
 * load a view
 * 
 * @param string $name
 * @return void
 */

function loadView($name, $data = []) {


    $viewPath =  basePath("views/{$name}.view.php");

    if (file_exists($viewPath)){
        extract($data);
        require $viewPath;
    } else {
        echo "view {$name} not found!"; 
    }
};

function loadPartial($name) {
    $partialPath =  basePath("views/partials/{$name}.php");
    if (file_exists($partialPath)){
        require $partialPath;
    } else {
        echo "Partial {$name} not found!";
    }

};

/**
 * insepct a value/s 
 * 
 * @param mixed
 * @return void
 * 
 */

function inspect($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}


/**
 * insepct a value/s and murder it 
 * 
 * @param mixed
 * @return void
 * 
 */

 function inspectAndDie($value) {
    echo "<pre>";
    die(var_dump($value));
    echo "</pre>";
}

function formatSalary($salary) {
    return "$" . number_format(floatval($salary));
}


?>