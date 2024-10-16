<?php

namespace App\controllers;

use Conexion\Conexion;

class Incomes
{
    //MUESTRA TODOS
    public function index() {}

    //MUESTRA UN FORMULARIO PARA CREAR
    public function create() {}

    //GUARDA UN RECURSO
    public function store($data)
    {
        $connection = Conexion::getInstance()->get_database_connection();
        $connection->query("INSERT INTO incomes (payment_method, type, date, amount, description) 
        VALUES(
            {$data['payment_method']},
            {$data['type']},
            '{$data['date']}',
            {$data['amount']},
            '{$data['description']}'
        );");
    }

    //MUESTR UN SOLO RECURSO
    public function show() {}

    //MUESTRA UN FORMULARIO PARA EDITAR
    public function edit() {}

    //EDITA UN SOLO RECURSO
    public function update() {}

    //ELIMINA UN SOLO RECURSP
    public function destroy() {}
}
