<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Register
 * @package App\Models\Admin
 */
class Register extends Model
{
    use SoftDeletes;

    public $table = 'registers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'studentID',
        'name',
        'province',
        'gender',
        'politics',
        'stature',
        'academy',
        'profession',
        'middleschool',
        'telphone',
        'postcode',
        'address',
        'family',
        'hobby',
        'reward',
        'personal',
        'certificate',
        'video',
        'state'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'studentID' => 'string',
        'name' => 'string',
        /*'province' => 'string',
        'gender' => 'string',
        'politics' => 'string',
        'stature' => 'string',
        'academy' => 'string',
        'profession' => 'string',
        'middleschool' => 'string',
        'telphone' => 'string',
        'postcode' => 'string',
        'address' => 'string',
        'family' => 'string',
        'hobby' => 'string',
        'reward' => 'string',
        'personal' => 'string',
        'certificate' => 'string',
        'video' => 'string',
        'state' => 'string'*/
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'studentID' => 'required',
        'name' => 'required',
        'province' => 'required',
        'gender' => 'required',
        'politics' => 'required',
        'stature' => 'required',
        'academy' => 'required',
        'profession' => 'required',
        'middleschool' => 'required',
        'telphone' => 'required',
        'postcode' => 'required',
        'address' => 'required',
        'family' => 'required',
        'hobby' => 'required',
        'reward' => 'required',
        'personal' => 'required',
        'certificate' => 'required',
        'video' => 'required',
        'state' => 'required'
    ];
}
