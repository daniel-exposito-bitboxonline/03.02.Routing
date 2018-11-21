<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 21/11/18
 * Time: 19:22
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController{
    public function getMethod(Request $request) {
        $message = 'METHOD_GET used';
        $id = $request->get('id');
        $response = [
            'message'=> $message,
            'id'=>$id
        ];
        return new JsonResponse([
            'result' => $response
        ]);
    }

    public function postMethod(Request $request) {
        $message = 'METHOD_POST used';
        $params = json_decode( $request->getContent(), true);
        $username = $params['username'];
        $id = $request->get('id');
        $response = [
            'message'=> $message,
            'params'=> $params,
            'username' => $username,
            'id'=>$id
        ];
        return new JsonResponse([
            'result' => $response
        ]);
    }
}
