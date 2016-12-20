<?php

namespace ThibaudDT\LaravelTrinityCoreAuth\Providers;

use Illuminate\Auth\EloquentUserProvider;
use \Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Foundation\Auth\User;

/**
 * Class AccountProvider
 *
 * @category Provider
 * @package  ThibaudDT\LaravelTrinityCoreAuth\Providers
 * @author   Thibaud DELOBELLE TOUSSAINT <thibaud@d-t.fr>
 * @license  GNU
 * @link     https://github.com/Thibaud-DT/laravel-trinitycore
 */
class AccountProvider extends EloquentUserProvider
{
    public function __construct(Hasher $hasher, Authenticatable $model)
    {
        parent::__construct($hasher, $model);
    }
    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(UserContract $user, array $credentials)
    {

        $password = $credentials['password'];
        $username = array_key_exists('username', $credentials) ? $credentials['username'] : $this->model->whereEmail($credentials['email'])->FirstOrFail()->username;

        return $this->hasher->check(compact('username', 'password'), $user->getAuthPassword());
    }


    /**
     * Create a new instance of the model.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function createModel()
    {
        $model = $this->model;
        return $model instanceof User ? $model : app($model);
    }

}