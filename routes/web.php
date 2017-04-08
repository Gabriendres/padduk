<?php

use app\modelo\empresas;
$app->get('/', function () use ($app) {
    return $app->version();
});
$app->get('empresas', function () use ($app) {
    //return 'Listado de empresas' response()->json("ruta/empresas");
	return response()->json(empresas::all());
	
});
$app->get('empresas/{empresa', function ($empresaId) use ($app) {
    return $empresaId;
	});
$app->post('empresas', function () {
    return 'Listado de de empresas';
});	