<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultipleSheetImport implements WithMultipleSheets
{
    /**
    * @param Collection $collection
    */
    public function sheets(): array
    {
        return [
            new CoreCategoriesImport,
            new CourseImport(),
            new CourseLessonImport(),
            new TaskImport(),
            new TrainerImport()
        ];
    }
}
