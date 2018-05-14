# AkonFramework
A simple PHP-MVC style framework that can be used for many purposes if utilized properly.

_Note: This project is my own creation and originally intended for my own uses_

## Instructions
##### Run server

```bash
php -S 127.0.0.1:8080 router.php
```
(Also works with Apache2 when `htaccess` and `modrewrite` enabled)

##### About MVC pattern
Use the `index.php` located in the `public` directory to add routes (using `Route::add()`). Models, Views and Controllers can be added in their respective directories located in the `App` folder. For Views, take a look at the readme file in the `App/Views` directory.


