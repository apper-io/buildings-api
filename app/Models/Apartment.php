<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'apartment_code',
        'flat_code',
        'tower_code',
        'status_id',
        'type_id',
    ];

    /**
     * The attributes that should be shown in lists.
     *
     * @var array<int, string>
     */
    protected $listable = [
        'id',
        'apartment_code',
        'flat_code',
        'tower_code',
        'status_id',
        'type_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function type()
    {
        //return $this->belongsTo(Type::class, 'type_id');
    }

}
