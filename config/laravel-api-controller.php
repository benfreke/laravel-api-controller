<?php
return [
    /*
     * Relative path from the app directory to api controllers directory.
     */
	'controllers_dir'  => 'Http/Controllers/Api',
	/*
     * Relative path from the app directory to api repositories directory.
     */
    'repositorys_dir'  => 'Repositories/Api',
    /*
     * Relative path from the app directory to the api routes file.
     */
    'routes_file'      => '../routes/api.php',
    /*
     * Relative path from the app directory to the models directory. Typically it's either 'Models' or ''.
     */
    'models_base_dir'  => '',
    /*
     * Relative path from the base directory to the api controller stub.
     */
	'controller_stub'  => 'vendor/phpsa/laravel-api-controller/src/Generator/stubs/controller.stub',
	/*
     * Relative path from the base directory to the api controller stub.
     */
    'repository_stub'  => 'vendor/phpsa/laravel-api-controller/src/Generator/stubs/repository.stub',
    /*
     * Relative path from the base directory to the route stub.
     */
    'route_stub'       => 'vendor/phpsa/laravel-api-controller/src/Generator/stubs/route.stub',

];