<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function employee()
    // {
    //     return $this->belongsTo(Employee::class);
    // }

    // public function user(){
    //     return $this->hasOne(User::Class);
    // }

    /**
     * The documents that belong to the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    // public function documents()
    // {
    //     return $this->belongsToMany(EmployeeDocuments::class)->withPivot('file');
    // }
    // , 'role_user_table', 'user_id', 'role_id'

    /**
     * Get all of the documents for the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documents()
    {
        return $this->hasMany(EmployeeDocuments::class);
    }


}
