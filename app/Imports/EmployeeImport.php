<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'nip' => $row[1],
            'nama' => $row[2],
            'jabatan' => $row[3],
            'golongan' => $row[4],
            'bidang' => $row[5],
            'jeniskelamin' => $row[6],
            'notelpon' => $row[7]

        ]);
    }
}
