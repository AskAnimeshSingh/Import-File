<?php
namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow; // Add this line

class StudentsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Student([
            'name'     => $row['name'],  // Use associative array keys
            'age'      => (int) $row['age'],  // Ensure age is an integer
            'class'    => $row['class'],
            'subjects' => $row['subjects'],
        ]);
    }
}


