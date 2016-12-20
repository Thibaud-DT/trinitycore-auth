<?php

namespace ThibaudDT\LaravelTrinityCoreAuth\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Contracts\Hashing\Hasher as IlluminateHasher;


use ThibaudDT\LaravelTrinityCoreAuth\Models\Auth\Account as TrinityCoreAccount;

/**
 * Class RegisterController
 *
 * @category Controller
 * @package  ThibaudDT\LaravelTrinityCoreAuth\Http\Controllers\Auth
 * @author   Thibaud DELOBELLE TOUSSAINT <thibaud@d-t.fr>
 * @license  GNU
 * @link     https://github.com/Thibaud-DT/laravel-trinitycore
 */
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Instance of the TrinityCore password hasher
     *
     *
     * @var SHA1Hasher
     */
    protected $hasher;

    /**
     * Create a new authentication controller instance.
     *
     *
     * @param TrinityCoreHasher $hasher
     * @return void
     */
    public function __construct(IlluminateHasher $hasher)
    {
        $this->hasher = $hasher;
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username'  => 'required|max:255|unique:auth.account',
            'email'     => 'required|email|max:255|unique:auth.account',
            'password'  => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return TrinityCoreAccount
     */
    protected function create(array $data)
    {
        return TrinityCoreAccount::create([
            'username'  => $data['username'],
            'email'     => $data['email'],
            'password' => md5($data['password']),
            'sha_pass_hash'  => $this->hasher->make($data),
            'reg_mail' => $data['email'],
            'expansion' => 2
        ]);
    }
}
