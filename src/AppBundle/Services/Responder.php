<?php


namespace AppBundle\Services;


use Symfony\Component\HttpFoundation\JsonResponse;

class Responder
{
    public static function generateResponse($data = array(), $statusCode = 200): JsonResponse
    {
        return new JsonResponse(array_merge(array('result' => 'OK'), $data), $statusCode);
    }

    public static function generateError($message, $statusCode = 500): JsonResponse
    {
        return new JsonResponse(array('result' => 'KO', 'error' => $message), $statusCode);
    }
}