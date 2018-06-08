<?php
// Разрешает доступ к странице редактирования/удаления записи, если запись принадлежит пользователю
namespace App\Http\Middleware;
use DB;
use Closure;

class MiddlewareUserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

	public function handle($request, Closure $next)
    {	
		$user_id= $request->user()->id;
		$record = $request->route()->parameters();
		$record_user_id = DB::table('users')->where('id', $record)->value('id');
        if ($user_id == $record_user_id) {
			return $next($request);
        }
		return redirect('/');
	}
}
