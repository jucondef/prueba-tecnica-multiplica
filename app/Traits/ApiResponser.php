<?php

namespace App\Traits;


trait ApiResponser
{

	protected function successResponse($data = null, $message = null, $code = 200)
	{
		return response()->json([
			'status' => 'Success',
			'message' => $message,
			'data' => $data
		], $code);
	}

	protected function errorResponse($message = null, $code = 400, $data =null)
	{
		return response()->json([
			'status' => 'Error',
			'message' => $message,
			'data' => $data
		], $code);
	}
}
