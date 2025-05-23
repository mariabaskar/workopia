<?php

/**
 * Get the base path
 * 
 * @param  string $path
 * @return string
 */

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @return void
 */

function loadView($name)
{
    $viewPath = basePath("views/{$name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "View '${name} not found!'";
    }
}


/**
 * Load a partial
 * 
 * @param string $name
 * @return void
 */

function loadPartials($name)
{
    $partialPath =  basePath("views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial '${name} not found!'";
    }
}

/**
 * inspect value(s)
 * 
 * @param mixed $name
 * @return void
 */
function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}


/**
 * inspect value(s)
 * 
 * @param mixed $name
 * @return void
 */
function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}
