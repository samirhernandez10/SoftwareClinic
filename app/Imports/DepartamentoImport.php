<?php

namespace App\Imports;

use App\Models\Departamento;
use Maatwebsite\Excel\Concerns\ToModel;

class DepartamentoImport implements ToModel
{
    public function model(array $row)
    {
        return new Departamento([
            'id' => $row[0],
            'nombre' => $row[1],
            'codigo_pais' => $row[2],
            'estado' => $row[3],
            'usuario_id' => $row[4],
            'created_at' => $row[5],
            'updated_at' => $row[6],


            // Agrega los campos adicionales según corresponda
        ]);
    }
}