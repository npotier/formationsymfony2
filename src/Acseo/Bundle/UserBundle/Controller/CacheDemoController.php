<?php

namespace Acseo\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;

/**
 *
 * Enter description here ...
 * @author Nicolas
 */
class CacheDemoController extends Controller
{
    /**
     *
     * Enter description here ...
     * @Route("/testcache/{name}", name="cache_test")
     * @Method({"GET"})
     * @Template()
     * @Cache(maxage=60)
     */
    public function testcacheAction($name)
    {
        return array("name" => $name);
    }

   /**
     *
     * Enter description here ...
     * @Route("/testcacheproxy/{name}", name="cache_test_proxy")
     * @Method({"GET"})
     * @Template()
     * @Cache(smaxage=60)
     */
    public function testcacheproxyAction($name)
    {
        return array("name" => $name);
    }

   /**
     *
     * Enter description here ...
     * @Route("/testcacheheure", name="cache_test_heure")
     * @Method({"GET"})
     * @Template()
     */
    public function heureAction()
    {
        return array("date" => date("Y-m-d H:i:s"));
    }

}
