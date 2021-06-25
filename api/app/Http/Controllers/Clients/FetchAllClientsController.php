<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FetchAllClientsController extends Controller
{
    public function __invoke(Request $request, Client $model): JsonResponse
    {
        return response()->json(
          $model->all()
        );
    }
}
