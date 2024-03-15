<?php

namespace App\Imports;

use App\Models\CoreCategory;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CoreCategoriesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Corecategory([
            //
            'corecategory_uniqueID' => $row['corecategory_uniqueid'],
            'name' => $row['name'],
            'thumbnail' => $row['thumbnail'],
            'color' => $row['color'],
            'categories_attached' => $row['categories_attached']
        ]);
    }
}
