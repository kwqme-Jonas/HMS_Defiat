<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;



    protected $fillable = [
        'surname',
        'othername',
        'appNumber',
        'indexnum',
        'dob',
        'contact',
        'region',
        'year',
        'level',
        'programme',
        'department',
        'hall',
        'fName',
        'mName',
        'fNumber',
        'mNumber',
        'pic',
        'sponsorname',
        'sponsor_add',
        'sponsor_contact',
        'sponsor_email',
    ];

}
