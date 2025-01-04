<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['date', 'position', 'company', 'location', 'contact_email', 'contact_phone',
'calls', 'interviews'];
}
