<?php
/**
 * Created by PhpStorm.
 * User: muntashir
 * Date: 8/3/17
 * Time: 10:00 PM
 *
 * @package AkonFramework
 */


/**
 * Supplied Variables
 *
 * @var string $class_name
 * @var string $class_type Model or Controller
 */

$filename = __DIR__ . "/../App/{$class_type}s/{$class_name}.php";
$contents = <<< EOF
<?php
/**
 * File: {$class_name}.php
 */

namespace App\{$class_type}s;


/**
 * Class Controller
 * @package App\{$class_type}s
 */

class $class_name extends {$class_type} {
    // your code goes here
}
EOF;

file_put_contents($filename, $contents);

// create view for Controller
if($class_type == "Controller") mkdir(__DIR__ . "/../App/Views/{$class_name}");
