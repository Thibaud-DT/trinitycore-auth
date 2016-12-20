<?php

namespace ThibaudDT\LaravelTrinityCoreAuth\Models\Auth;

use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class Account
 *
 * @category Eloquent Model
 * @package  ThibaudDT\LaravelTrinityCoreAuth\Models\Auth
 * @author   Thibaud DELOBELLE TOUSSAINT <thibaud@d-t.fr>
 * @license  GNU
 * @link     https://github.com/Thibaud-DT/laravel-trinitycore
 */

class Account extends Authenticatable
{
    use Notifiable;

    protected $connection = "auth";
    protected $table = "account";

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'sha_pass_hash', 'email', 'reg_mail', 'expansion'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token', 'sha_pass_hash',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'joindate',
        'last_login'
    ];

    /**
     * Resolved a User instance by Username
     * @param  Builder $query
     * @param  string $username
     * @return ModelContract
     */
    public function scopeFindByUsername(Builder $query, $username)
    {
        return $query->where('username', '=', $username)->FirstOrFail();
    }

    /**
     * Eloquent Username Attribute Mutator
     * Sets username field
     *
     * @param string $username
     * @return void
     */
    public function setUsernameAttribute($username)
    {
        $this->attributes['username'] = strtoupper(str_replace(' ', '', $username));
    }

    /**
     * Eloquent Username Attribute Accessor.
     * Output a Human formatted Username.
     *
     * @param  string $username
     * @return string
     */
    public function getUsernameAttribute($username)
    {
        return ucfirst(strtolower($username));
    }

    public function getAuthPassword(){
        return $this->sha_pass_hash;
    }
}