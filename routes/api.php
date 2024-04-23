use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

Route::get('/user', [EstudianteController::class, 'index']);
Route::post('/user', [EstudianteController::class, 'store']);
Route::delete('/user{id}', [EstudianteController::class, 'destroy']);