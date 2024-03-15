<?php

namespace App\Imports;

use App\Models\Trainer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TrainerImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Trainer([
            //
            'trainer_uniqueID' => $row['trainer_uniqueid'],
            'name' => $row['name'],
            'email' => $row['email'],
            'mobile' => $row['mobile'],
            'avatar' => $row['avatar'],
            'designation' => $row['designation'],
            'description' => $row['description'],
        ]);
    }
}
