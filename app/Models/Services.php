<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'service_name',
        'service_discription',
        'service_logo',
    ];

}
