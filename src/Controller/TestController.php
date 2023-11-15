<?php

namespace Feuertelegraph\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller used for UI Testing sites of the application
 */
class TestController extends AbstractController
{
    #[Route('/dev/leaflet', name: 'leaflet')]
    public function leaflet(): Response
    {
        return $this->render('dev/leaflet.html.twig', [
            'controller_name' => 'TailwindController',
        ]);
    }
    #[Route('/dev/ui', name: 'leaflet')]
    public function ui(): Response
    {
        return $this->render('dev/ui.html.twig', [
            'controller_name' => 'TailwindController',
        ]);
    }

    #[Route('/dev/form', name: 'form')]
    public function form(): Response
    {
        $form = $this->createFormBuilder()
            ->add('text', TextType::class, ['help' => 'Short Help Text'])
            ->add('textarea', TextareaType::class)
            ->add('number', NumberType::class)
            ->add('date', DateType::class)
            ->add('range', RangeType::class)
            ->add('choice', ChoiceType::class, [
                'choices'  => [
                    '1' => "1",
                    '2' => "2",
                    '3' => "3",
                ],
            ])
            ->add('save', SubmitType::class, ['label' => 'Submit'])
            ->getForm();

        return $this->render('dev/form.html.twig', [
            'form' => $form,
        ]);
    }
}