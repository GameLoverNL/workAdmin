<?php

namespace App\Exports;

use App\Models\Hour;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class HourExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Hour::all();
    }
}
