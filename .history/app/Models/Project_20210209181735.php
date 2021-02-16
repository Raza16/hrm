<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'title', 'start_date', 'end_date'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
