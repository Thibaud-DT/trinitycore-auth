<?php

namespace ThibaudDT\LaravelTrinityCoreAuth\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Contracts\Hashing\Hasher as IlluminateHasher;

/**
 * Class ResetPasswordController
 *
 * @category Controller
 * @package  ThibaudDT\LaravelTrinityCoreAuth\Http\Controllers\Auth
 * @author   Thibaud DELOBELLE TOUSSAINT <thibaud@d-t.fr>
 * @license  GNU
 * @link     https://github.com/Thibaud-DT/laravel-trinitycore
 */
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;


    /**
     * Instance of the TrinityCore password hasher
     *
     *
     * @var SHA1Hasher
     */
    protected $hasher;



    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(IlluminateHasher $hasher)
    {
        $this->hasher = $hasher;
        $this->middleware('guest');
    }

    protected function resetPassword($user, $password){
        $user->forceFill([
            'sha_pass_hash'  => $this->hasher->make($user)
        ])->save();

        $this->guard()->login($user);
    }
}
