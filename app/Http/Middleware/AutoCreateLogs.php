<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Jenssegers\Agent\Facades\Agent;

class AutoCreateLogs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $req = [
            'path' => $request->path(),
            'ip' => $request->ip(),
            'device' => Agent::device(),
            'is_desktop' => Agent::isDesktop(),
            'is_mobile' => Agent::isPhone(),
            'is_tablet' => Agent::isTablet(),
        ];

        $data = \App\Models\Logging::create($req);
        return $next($request);
    }
}
