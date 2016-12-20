<?php

namespace ThibaudDT\LaravelTrinityCoreAuth\Guard;

use Illuminate\Auth\SessionGuard;
use Illuminate\Http\Request;
use Illuminate\Session\SessionInterface;
use Illuminate\Contracts\Auth\Guard as IlluminateGuard;

use ThibaudDT\LaravelTrinityCoreAuth\Providers\AccountProvider;

/**
 * Class TrinityCoreGuard
 *
 * @category Session\Guard
 * @package  ThibaudDT\LaravelTrinityCoreAuth\Guard
 * @author   Thibaud DELOBELLE TOUSSAINT <thibaud@d-t.fr>
 * @license  GNU
 * @link     https://github.com/Thibaud-DT/laravel-trinitycore
 */

class TrinityCoreGuard extends SessionGuard implements IlluminateGuard
{
    /**
     * The AccountProvider instance
     *
     * @var
     */
    protected $provider;

    /**
     * The request instance.
     *
     * @var Request
     */
    protected $request;

    /**
     * The session used by the guard.
     *
     * @var SessionInterface
     */
    protected $session;

    /**
     * Create a new authentication guard.
     *
     * @param  string  $name
     * @param  AccountProvider  $provider
     * @param  SessionInterface  $session
     * @param  Request  $request
     * @return void
     */
    public function __construct($name,
                                AccountProvider $provider,
                                SessionInterface $session,
                                Request $request = null)
    {
        parent::__construct($name, $provider, $session, $request);
    }
}