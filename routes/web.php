    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\RoleController;
    use App\Http\Controllers\PermissionController;
    use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\App;
    use Illuminate\Support\Facades\Session;

    Route::get('/layouts/index', function () {
        return view('layouts.index');
    })->name('layouts.index');

    Route::get('/login', [LoginController::class, 'loginForm'])->name('login.submit');
    Route::post('/login', [LoginController::class, 'loginSubmit'])->name('admin.handle.login');

    Route::group(['middleware' => 'CheckLogout'], function () {
        Route::get('/logout', [LoginController::class, 'loginForm'])->name('loginForm');
        Route::post('/logout', [LoginController::class, 'logoutSubmit'])->name('logoutSubmit');
    });

    Route::middleware(['CheckLogin'])->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('products', ProductController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
    });

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    Route::get('/lang/{locale}', function (string $locale) {
        if (!in_array($locale, ['en', 'vi'])) {
            abort(400);
        }
        App::setLocale($locale);
        Session::put('locale', $locale);
        return redirect()->back();
    });
    