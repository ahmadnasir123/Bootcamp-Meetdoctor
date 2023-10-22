<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    // use HasFactory;
    use SoftDeletes;
    // declare table
    public $table = 'doctor';

    //this is must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'specialist_id',
        'user_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many relationship
    public function specialist()
    {
        // 3 parameter (path model , field foreign key, primary key from table hasMany relationship/hasOne relationship) 
        return $this->belongsTo('App\Models\MasterData\Specialist', 'specialist_id', 'id');
    }

    // one to many relationship
    public function appointment()
    {
        // 2 parameter (path model , field foreign key) 
        return $this->hasMany('App\Models\Operational\Appointment', 'doctor_id');
    }
}
