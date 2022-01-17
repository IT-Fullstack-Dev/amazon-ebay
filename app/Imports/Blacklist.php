<?php

namespace App\Imports;

use App\Models\Black;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');

class Blacklist implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Black([
            //
            'blackasin' => $row[0]
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }
}
