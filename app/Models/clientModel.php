<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientModel extends Model
{
    use HasFactory;

    protected $table = "clients_tabel";

    protected $fillables = ["fname", "mname", "lname", "gender",  "address"];
}
