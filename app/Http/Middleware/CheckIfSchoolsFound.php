<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\master_sklh;
use Hash;
use Auth;
use File;

class CheckIfSchoolsFound
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $schoolCount = master_sklh::where('id_user',Auth::user()->id)->count();
        if($schoolCount==1){
            return redirect()->back()->with('error', 'Satu akun hanya untuk satu lembaga pendidikan.');
        }
        return $next($request);
        
    }
}
