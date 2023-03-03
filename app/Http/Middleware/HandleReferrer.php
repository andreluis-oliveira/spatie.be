<?php

namespace App\Http\Middleware;

use App\Domain\Shop\Models\Referrer;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HandleReferrer
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($referrer = $request->referrer) {
            /** @var Referrer $referrer */
            if ($referrer = Referrer::firstWhere(['slug' => $referrer])) {
                $referrer
                    ->registerClick()
                    ->makeActive();
            }
        }

        return $next($request);
    }
}
