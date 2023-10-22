<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // declare table
    public $table = 'transaction';

    //this is must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'fee_total',
        'vat',
        'total',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many relationship
    public function appointment()
    {
        // 3 parameter (path model , field foreign key, primary key from table hasMany relationship/hasOne relationship) 
        return $this->belongsTo('App\Models\Operational\Appointment', 'appointment_id', 'id');
    }
}
