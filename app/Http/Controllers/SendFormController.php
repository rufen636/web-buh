<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendFormRequest;
use App\Services\SendFormService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SendFormController extends Controller
{
    protected SendFormService $sendFormService;

    /**
     * @param SendFormService $sendFormService
     */
    public function __construct(SendFormService $sendFormService)
    {
        $this->sendFormService = $sendFormService;
    }

    public function sendWorm(SendFormRequest $request)
    {
        $data = $request->validated();

        $success = $this->sendFormService->sendWorm($data);
        if ($success) {
            return response()->json(['success' => true],200);
        }else{
            return response()->json(['success' => false],500);
        }
    }
}
