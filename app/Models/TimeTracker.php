<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeTracker extends Model
{
    use HasFactory;

    protected $table = 'time_tracker';

    protected $fillable = [
        'employee_id',
        'checkin',
        'checkout',
        'total_hours',
        'created_at',
        'updated_at',
    ];


    /**
     * Get the employee that owns the TimeTracker
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
