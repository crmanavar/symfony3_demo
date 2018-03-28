<?php
/**
 * Created by PhpStorm.
 * User: cmanavar
 * Date: 28/03/18
 * Time: 4:17 PM
 */

namespace AppBundle\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    public function handle(Request $request, AccessDeniedException $accessDeniedException)
    {
        echo "Access Denied, Only Super admin can access this location for <a href='http://127.0.0.1:8000/faculty/'>Return Faculty Page</a>";
        exit;
    }

}