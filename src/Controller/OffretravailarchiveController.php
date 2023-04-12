<?php

namespace App\Controller;

use App\Entity\Offretravailarchive;
use App\Form\OffretravailarchiveType;
use App\Repository\OffretravailarchiveRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OffretravailRepository;
use App\Entity\Offretravail;
use DateTime;
#[Route('/offretravailarchive')]
class OffretravailarchiveController extends AbstractController
{
    #[Route('/', name: 'app_offretravailarchive_index', methods: ['GET'])]
    public function index(OffretravailarchiveRepository $offretravailarchiveRepository): Response
    { $offretravails = $offretravailarchiveRepository->findAll();
       
        $offretravailbyid =  $offretravailarchiveRepository->findBy(['id_user' => 1]);
        return $this->render('offretravailarchive/index.html.twig', [
            'offretravails' => $offretravails,
            'offretravailbyid' => $offretravailbyid,
        ]);
    }
    #[Route('/{idoffre}', name: 'app_offretravailarchive_delete', methods: ['POST'])]
    public function delete(Request $request, Offretravailarchive $offretravailarchive, OffretravailarchiveRepository $offretravailarchiveRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offretravailarchive->getIdoffre(), $request->request->get('_token'))) {


            
            $offretravailarchiveRepository->remove($offretravailarchive, true);
        }

        return $this->redirectToRoute('app_offretravailarchive_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/new', name: 'app_offretravailarchive_new', methods: ['GET', 'POST'])]
    public function new(Request $request, OffretravailarchiveRepository $offretravailarchiveRepository): Response
    {
        $offretravailarchive = new Offretravailarchive();
        $form = $this->createForm(OffretravailarchiveType::class, $offretravailarchive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $offretravailarchiveRepository->save($offretravailarchive, true);

            return $this->redirectToRoute('app_offretravailarchive_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('offretravailarchive/new.html.twig', [
            'offretravailarchive' => $offretravailarchive,
            'form' => $form,
        ]);
    }

    #[Route('/{idoffre}', name: 'app_offretravailarchive_show', methods: ['GET'])]
    public function show(Offretravailarchive $offretravailarchive): Response
    {
        return $this->render('offretravailarchive/show.html.twig', [
            'offretravailarchive' => $offretravailarchive,
        ]);
    }


    #[Route('/{idoffre}', name: 'app_offretravail_deletefromarchive', methods: ['POST'])]
    public function deletefromarchive($idoffre,Request $request, Offretravailarchive $offretravailarchive, Offretravail $offretravail, OffretravailRepository $offretravailRepository,OffretravailarchiveRepository $offretravailarchiveRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offretravailarchive->getIdoffre(), $request->request->get('_token'))) {        
            $offre=$offretravailarchiveRepository->find($idoffre);
            $offretravail = new offretravail();
            $offretravail->setDescriptionoffre(  $offre->getDescriptionoffre());
            $offretravail->setTitreoffre($offre->getTitreoffre());
            $offretravail->setIdcategorie($offre->getIdcategorie());
            $offretravail->setCategorieoffre($offre->getCategorieoffre());
            $offretravail->setIdUser($offre->getIdUser());
            $offretravail->setTypeoffre($offre->getTypeoffre());
            $offretravail->setLocalisationoffre($offre->getLocalisationoffre());
            $now = new DateTime();
            $offretravail->setDateajoutoofre($now);
            $offretravail->setNickname($offre->getNickname());
           
          
            $offretravailRepository->save( $offretravail);
            $offretravailarchiveRepository->remove($offretravailarchive, true);
        }

        return $this->redirectToRoute('app_offretravailarchive_index', [], Response::HTTP_SEE_OTHER);
    }

    
}
