<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ConfigPayment extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // declare table
    public $table = 'config_payment';

    //this is must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'fee',
        'vat',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
