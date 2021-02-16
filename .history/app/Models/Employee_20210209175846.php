<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;


    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function employee()
    // {
    //     return $this->belongsTo(Employee::class);
    // }

    public function user(){
        return $this->hasOne(User::Class);
   }

}
