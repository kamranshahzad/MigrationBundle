<?php

namespace Cogilent\MigrationBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use Cogilent\BaseBundle\Utils\EmailUtils;



/**
 * Front controller
 *
 */
class MigrationController extends Controller{


    /**
     * @Route("/data-migration", name="migration_index")
     * @Template()
     */
    public function indexAction(Request $request){

        $user = $this->get('security.context')->getToken()->getUser();

        return array('result'=>'');


        /*
        $testEmail = 'm_kamranshahzad@hotmail.com';
        $myemail   = 'kamran@cogilent.com';
        $response = EmailUtils::verifyEmail($testEmail,$myemail, true);
        if(is_array($response)){
            echo('<pre>');
            print_r($response);
            echo('</pre>');
        }
        echo($response);
        */


        //echo 'Email:'.$user->getEmail();
        //echo "index";
        //print_r($user->getRoles());

        /*foreach($user->getRoles() as $role){
            echo $role->getName().'</br>';
        }*/
    }




}//@
