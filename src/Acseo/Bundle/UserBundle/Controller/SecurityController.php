<?php

namespace Acseo\Bundle\UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
/**
 * 
 * Enter description here ...
 * @author Nicolas
 */
class SecurityController extends Controller
{
	/**
	 * 
	 * Enter description here ...
	 * @Route("/login", name="admin_login")
	 * @Method({"GET"})
	 * @Template()
	 */
	public function loginAction()
	{
		$request = $this->getRequest();
        $session = $request->getSession();

        $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        return array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        );
	}
	
	/**
	 * Enter description here ...
	 * @Route("/auth", name="admin_auth")
	 * @Method({"POST"})
	 */
	public function authAction()
	{
		//This method will never be executed
	}
	/**
	 * Enter description here ...
	 * @Route("/logout", name="admin_logout")
	 * @Method({"GET"})
	 */
	public function logoutAction()
	{
		
	}
	/**
	 * Enter description here ...
	 * @Route("/", name="admin_dashboard")
	 * @Method({"GET"})
	 * @Template()
	 */
	public function dashboardAction()
	{
		return array();
		//die("Welcome to your dashboard");
	}
}