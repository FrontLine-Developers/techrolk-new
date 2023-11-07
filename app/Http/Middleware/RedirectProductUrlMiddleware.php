<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectProductUrlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Get the current URL.
        $url = $request->url();

        // Check if the URL contains the string "product/".
        if (strpos($url, 'product/') !== false) {

            // Replace the string "product/" with "shop/product/" in the URL.
            $newUrl = str_replace('product/', 'shop/product/', $url);

            // Redirect the user to the new URL.
            return redirect($newUrl);
        }

        // If the URL does not contain the string "product/", then continue loading the page.
        return $next($request);
    }
}
