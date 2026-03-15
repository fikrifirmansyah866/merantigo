Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/drivers/nearby', [DriverController::class, 'nearby']);

Route::post('/order/create', [OrderController::class, 'create']);
Route::get('/order/{id}', [OrderController::class, 'detail']);
Route::post('/order/accept', [OrderController::class, 'accept']);

Route::get('/restaurants', [RestaurantController::class, 'list']);
Route::get('/menus/{restaurant_id}', [RestaurantController::class, 'menus']);
