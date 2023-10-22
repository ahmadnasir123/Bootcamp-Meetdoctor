<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // declare table
    public $table = 'appointment';

    //this is must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many relationship
    public function doctor()
    {
        // 3 parameter (path model , field foreign key, primary key from table hasMany relationship/hasOne relationship) 
        return $this->belongsTo('App\Models\Operational\Doctor', 'doctor_id', 'id');
    }

    // one to many relationship
    public function consultation()
    {
        // 3 parameter (path model , field foreign key, primary key from table hasMany relationship/hasOne relationship) 
        return $this->belongsTo('App\Models\MasterData\Consultation', 'consultation_id', 'id');
    }

    // one to many relationship
    public function user()
    {
        // 3 parameter (path model , field foreign key, primary key from table hasMany relationship/hasOne relationship) 
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    // one to many relationship
    public function transaction()
    {
        // 3 parameter (path model , field foreign key, primary key from table hasMany relationship/hasOne relationship) 
        return $this->hasOne('App\Models\Operational\Transaction', 'appointment_id');
    }


}
