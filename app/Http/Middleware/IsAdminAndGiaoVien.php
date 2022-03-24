<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class IsAdminAndGiaoVien
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->phan_quyen_id == 2 || Auth::user()->phan_quyen_id == 3) {
            return $next($request);
        }
        return redirect()->route('dang-nhap')->with('error','Hãy đăng nhập bằng tài khoản khác để xử dụng quyền này');
    }
}
