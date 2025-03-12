<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\master_sklh;
use Hash;
use Auth;
use File;

class SchoolOwnershipCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $schoolId=$request->route('id');
        $schoolData=master_sklh::find($schoolId);
        if($schoolData && $schoolData->id_user!=Auth::user()->id){
            return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk mengedit data ini.');
        }
        return $next($request);
    }
}
