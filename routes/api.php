<?php

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function (Request $request) {
    return [
        "hello" => "world",
        "language" => $request->getLocale()
    ];
});


Route::post('/hack', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'amount' => 'required|integer',
    ]);

    if ($validator->fails()) {
        return [
            "status" => "error",
            "message" => $validator->errors()
        ];
    }

    // Retrieve the validated input...
    $validated = $validator->validated();

    // Retrieve a portion of the validated input...
    $validated = $validator->safe()->only(['name', 'amount']);

    $article = new Article([
        "name" => $validated['name'],
        "amount" => $validated['amount']
    ]);

    return $article->saveOrFail();
});

Route::get('/give-me-hack', function (Request $request) {
    $articles = Article::all();

    return [
        "success" => true,
        "data" => $articles
    ];
});
