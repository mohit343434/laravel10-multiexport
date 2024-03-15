<?php

namespace App\Imports;

use App\Models\Course;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CourseImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Course([
            //
            'course_uniqueID' => $row['course_uniqueid'],
            'corecategory_uniqueID' => $row['corecategory_uniqueid'],
            'trainer_uniqueID' => $row['trainer_uniqueid'],
            'name' => $row['name'],
            'thumbnail' => $row['thumbnail'],
            'previewVideo' => $row['previewVideo'],
            'description' => $row['description'],
            'duration' => $row['duration'],
            'price' => $row['price'],
            'currency' => $row['currency'],
        ]);
    }
}
