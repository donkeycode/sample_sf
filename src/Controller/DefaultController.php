<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Person;
use App\Repository\PersonRepository;

class DefaultController extends Controller
{
    /**
     * @Route("/test/{id}", name="get_person")
     * @ParamConverter("person", class="App\Entity\Person")
     * @Template
     */
    public function index(Person $person, PersonRepository $personRepository)
    {
        return [
            'persons' => $personRepository->findAll(),
            'person' => $person,
        ];
    }
}
