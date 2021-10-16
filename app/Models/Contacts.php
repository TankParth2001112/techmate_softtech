<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
    ];

    public static function getPerson(){
        $records = Contacts::all()->toArray();
        // dd($records);
        return $records;
    }
}
