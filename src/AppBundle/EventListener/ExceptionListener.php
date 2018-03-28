<?php
/**
 * Created by PhpStorm.
 * User: cmanavar
 * Date: 28/03/18
 * Time: 3:27 AM
 */

namespace AppBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class ExceptionListener
{
    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        // You get the exception object from the received event
        $exception = $event->getException();
        //print_r($exception); exit;
        if($exception->getMessage() == 'Access Denied.'){
            $message = sprintf('You seems to have access UnAuthorized page. Kindly go back and login with proper credentials');

        }else{
            $message = sprintf(
                'There is a error : %s with code: %s ',
                $exception->getMessage(),
                $exception->getCode()
            );

        }

        // Customize your response object to display the exception details
        $response = new Response();
        $response->setContent($message);

        // HttpExceptionInterface is a special type of exception that
        // holds status code and header details
        if ($exception instanceof HttpExceptionInterface) {
            $response->setStatusCode($exception->getStatusCode());
            $response->headers->replace($exception->getHeaders());
        } else {
            $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        // sends the modified response object to the event
        $event->setResponse($response);
    }
}