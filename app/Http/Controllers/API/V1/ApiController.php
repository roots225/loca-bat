<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
  public function construct() {

  }

  public function successResponse($data = []) {
    return response()->json([
      'success' => true,
      'data' => $data,
      'message' => 'Request successfull'
    ]);
  }

  public function errorResponse()
  {
    throw new Exception("Error Processing Request", 1);
  }

  public function deleteSuccess($data = [])
  {
    return $this->successResponse([
      'success' => true,
      'data' => $data,
      'message' => 'Entity supprimé avec succès'
    ]);
  }

  public function deleteEntity($entity)
  {
    if ($entity->delete()) {
      return $this->deleteSuccess($entity);
    } else {
      return $this->errorResponse();
    }
  }
}
