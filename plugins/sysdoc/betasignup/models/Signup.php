<?php namespace Sysdoc\BetaSignup\Models;

use Model;

/**
 * Signup Model
 */
class Signup extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'sysdoc_betasignup_signups';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}