<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\CreateRequest;
use App\Models\Client;
use App\Notifications\Clients\WelcomeNotification;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class CreateNewClientController extends Controller
{
    public function __invoke(CreateRequest $request, Client $model): JsonResponse
    {
        $client = $model->create($request->only([
            'first_name', 'last_name', 'email', 'date_profiled',
            'primary_legal_counsel', 'date_of_birth', 'case_details'
        ]));

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $file->storePublicly('public');
            $client->update(['profile_image' => 'storage/' . $file->hashName()]);
        }

        $client->notify(new WelcomeNotification());

        return response()->json([
            'success' => true
        ], Response::HTTP_CREATED);
    }
}
