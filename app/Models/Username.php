<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Username extends Model
{
    use HasFactory;
 public function store(AddData $addData)
    {
        // Validate the request...
 $Username = new Username;

        $Username->name = $addData->name;

        $Username->save();
    }
}
