<?php
// Разрешает доступ к странице редактирования/удаления записи, если запись принадлежит пользователю
namespace App\Http\Middleware;
use DB;
use Closure;

class MiddlewareRecordAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

	public function handle($request, Closure $next, $db_name)
    {	
		$user_id= $request->user()->id;
		$record = $request->route()->parameters();
		$record_user_id = DB::table($db_name)->where('id', $record)->value('user_id');
        if ($user_id == $record_user_id) {
			return $next($request);
        }
		return redirect('/');
	}
}
