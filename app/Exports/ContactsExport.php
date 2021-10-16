<?php

namespace App\Exports;

use App\Models\Contacts;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactsExport implements FromCollection,WithHeadings
{
    public function headings():array{
        return[
            'id',
            'name',
            'number'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Contacts::all();
        return collect(Contacts::getPerson());
    }
}
