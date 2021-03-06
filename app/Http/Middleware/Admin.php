<?php
/**
 * Created by PhpStorm.
 * User: Nav
 * Date: 21-07-16
 * Time: 14:56
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->route('login');
            }
        } else if (!Auth::guard($guard)->user()->is_admin) {
            return redirect()->to('/')->withError('Permission Denied');
        }

        return $next($request);
    }

}
