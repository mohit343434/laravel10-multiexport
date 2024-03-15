<?php

namespace App\Imports;

use App\Models\Task;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TaskImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Task([
            //
            'task_uniqueID'=> $row['task_uniqueid'],
            'category_name'=> $row['category_name'],
            'task_name'=> $row['task_name'],
            'task_type'=> $row['task_type'],
            'difficultly_level'=> $row['difficultly_level'],
            'file_attached'=> $row['file_attached'],
            'link_url'=> $row['link_url'],
            'skipped_time'=> $row['skipped_time'],
            'question_type'=> $row['question_type'],
            'point_type'=> $row['point_type'],

        ]);
    }
}
