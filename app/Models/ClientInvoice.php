<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientInvoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'invoice_no',
        'client_id',
        'from_date',
        'to_date',
        'discount',
        'grand_total',
        'notes',
        'task_module_id',
        'created_at',
        'updated_at'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function task_module()
    {
        return $this->belongsTo(TaskModule::class);
    }

    public function clientInvoiceDetail()
    {
        return $this->hasMany(clientInvoiceDetail::class);
    }

}
