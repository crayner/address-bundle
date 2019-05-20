<?php
/**
 * Created by PhpStorm.
 *
 * test
 * (c) 2019 Craig Rayner <craig@craigrayner.com>
 *
 * User: craig
 * Date: 20/05/2019
 * Time: 13:29
 */

namespace App\Controller;

use App\Entity\Address;
use App\Form\Type\AddressType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * index
     * @Route("/address/{address}/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Address $address = null)
    {
        $form = $this->createForm(AddressType::class, $address);
        return $this->render('base.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }
}