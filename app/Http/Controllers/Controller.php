<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendApiResponse($data = '', $message = 'success', $errorType = '', $extra = [], $code = null): \Illuminate\Http\JsonResponse
    {
        $response = [
                'message' => $message,
                'success' => $errorType == '' ? true : false,
                'error_type' => $errorType,
                'execution_time' => (double) number_format(microtime(true) - LARAVEL_START, 3),
            ] + $extra;
        if($data instanceof LengthAwarePaginator){
            $response += $data->toArray();
        }else{
            $response['data'] = $data;
        }
        $code = $code ?: 200;
        return response()->json($response, $code);
    }
}
