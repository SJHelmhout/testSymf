<?php
namespace App\Controller;

//use App\Entity\Task;
//use App\Repository\TaskRepository;
//use Doctrine\ORM\EntityManagerInterface;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//class LuckyController extends AbstractController
class LuckyController extends AbstractController
{

//    /**
//     * @var EntityManagerInterface
//     */
//    private $entityManager;
//    /**
//     * @var TaskRepository
//     */
//    private $taskRepository;
//
//    public function __construct(EntityManagerInterface $entityManager, TaskRepository $taskRepository)
//    {
//        $this->entityManager = $entityManager;
//        $this->taskRepository = $taskRepository;
//    }

    /**
     * @Route("/lucky/number/{max}", name="lucky-number")
     */
    public function number(int $max = 100): Response{
        $number = random_int(0, $max);

        return new Response(
            '<html><body><lang>Lucky number: '.$number.'</body></html>'
        );
    }


//        $tasks = $this->taskRepository->findAll();
//
//
//        dump($tasks);
//
//        $number = random_int(0, 100);
//
////        return [
////            'number' => $number,
////            'tasks' => $tasks
////        ];
//        return $this->render('lucky/number.html.twig', [
//            'number' => $number
//        ]);
//    }
}