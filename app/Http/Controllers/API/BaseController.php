<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @OA\Info(title="My First API", version="0.1"),
 * @OA\Server(url="https://rockettrade.dev/api/v1")
 *
 * @OA\SecurityScheme(
 *   securityScheme="token",
 *   type="apiKey",
 *   name="Authorization",
 *   in="header"
 * )
 */


class BaseController extends Controller
{
    //
}
