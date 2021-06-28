<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class MyFormRequest extends FormRequest
{
    public function failedValidation(Validator $validator)
    {
      $errors = $validator->errors();

      $response = response()->json([
          'message' => 'Invalid data send',
          'details' => $errors->messages(),
          'errors' => $errors
      ], 422);

      throw new HttpResponseException($response);
    }
}
