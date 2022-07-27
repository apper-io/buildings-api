<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'status_code',
        'module',
        'icon',
        'color',
    ];

    /**
     * The attributes that should be shown in lists.
     *
     * @var array<int, string>
     */
    protected $listable = [
        'id',
        'name',
        'description',
        'status_code',
        'module',
        'icon',
        'color',
        'created_at',
        'updated_at',
    ];
}
