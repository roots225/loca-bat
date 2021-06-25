<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
  public function construct() {

  }

  public function successResponse() {
    return resonse()->json([
      'success' => true,
      'data' => $data,
      'message' => 'Request successfull'
    ]);
  }

  public function errorResponse() {
    return throw new Exception("Error Processing Request", 1);
  }
}
