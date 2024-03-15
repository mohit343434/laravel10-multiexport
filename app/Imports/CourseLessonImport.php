<?php

namespace App\Imports;

use App\Models\CourseLesson;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CourseLessonImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CourseLesson([
            //
            'lesson_uniqueID' => $row['lesson_uniqueid'],
            'course_uniqueID' => $row['course_uniqueid'],
            'category_name' => $row['category_name'],
            'name' => $row['name'],
            'type' => $row['type'],
            'task_uniqueID' => $row['task_uniqueid'],
            'media' => $row['media'],
            'duration' => $row['duration'],
            'priority' => $row['priority'],
            'description' => $row['description'],
        ]);
    }
}
