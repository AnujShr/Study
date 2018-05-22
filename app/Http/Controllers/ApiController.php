<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

/**
 * Class ApiController
 * @package App\Http\Controllers
 */
class ApiController extends Controller
{
    const HTTP_NOT_FOUND = 404;
    const HTTP_CREATED = 201;
    const HTTP_UNPROCESSABLE_ENTITY = 422;
    /**
     * @var int
     */
    protected $statusCode = 200;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondNotFound($message = 'Not Found')
    {
        return $this->setStatusCode(self::HTTP_NOT_FOUND)->respondWithError($message);
    }

    /**
     * @param $data
     * @param array $headers
     * @return \Illuminate\Http\JsonResponse
     */
    public function respond($data, $headers = [])
    {
        return response()->json(
            $data, $this->getStatusCode(), $headers
        );
    }

    /**
     * @param $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondWithError($message)
    {
        return $this->respond([
            'error' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }

    /**
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondCreated($message = 'Update Successfull' )
    {
        return $this->setStatusCode(self::HTTP_CREATED)->respond([
            'data' => $message
        ]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondValidationFail($message ='Paramereters Failed Validation')
    {
        return $this->setStatusCode(self::HTTP_UNPROCESSABLE_ENTITY)->respondWithError($message);
    }

}
