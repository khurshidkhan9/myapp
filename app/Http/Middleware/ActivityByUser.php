<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Auth;
use Cache;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ActivityByUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $expiresAt = Carbon::now()->addMinutes(1); // keep online for 1 min
            $current_date_time = Carbon::now()->toDateTimeString(); 
            Cache::put('user-is-online-' . Auth::user()->id, true, $expiresAt);
            // last seen
            User::where('id', Auth::user()->id)->update(['last_seen' => $current_date_time]);
        }
        return $next($request);
    }
}
