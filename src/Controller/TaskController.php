<?php
namespace App\Controller;

use App\Entity\ToDoItem;
use App\Form\Type\ToDoType;
use App\Repository\TaskRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TaskController extends AbstractController{
    private $entityManager;
    private $taskRepository;

    public function __construct(EntityManagerInterface $entityManager, TaskRepository $taskRepository){
        $this->entityManager = $entityManager;
        $this->taskRepository = $taskRepository;
    }

//    /**
//     * @param MessageGenerator $messageGenerator
//     * @Route("/messageGenerator")
//     */
//    public function newMessage(MessageGenerator $messageGenerator): Response {
//        $message = $messageGenerator->getRandomMessage();
//        $this->addFlash('notice', $message);
//
//        return new Response(
//            '<html lang="en"><body><h4>Er komt een message:</h4></body></html>'
//        );
//    }
//
//    /**
//     * @return Response
//     * @Route("/testLogger")
//     */
//    public function testLogger(): Response {
//
//        return new Response(
//            '<html lang="en"><body><h5>Help me dit is geen grap</h5></body></html>'
//        );
//    }

    /**
     * @param Request $request
     * @return Response
     * @Route ("/testformulier")
     */
    public function new(Request $request): Response
    {
        $task = new ToDoItem();
        $task->setTask('Write a blog');
        $task->setDueDate(new DateTime('tomorrow'));

        $form = $this->createForm(ToDoType:: class, $task);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $task = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();

            return $this->redirectToRoute('lucky-number');
        }

        return $this->render('task/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}