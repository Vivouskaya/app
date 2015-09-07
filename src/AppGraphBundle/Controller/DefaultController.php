<?php

namespace AppGraphBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use AppGraphBundle\Entity\Gold;
use AppGraphBundle\Form\GoldType;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    public function chartAction()
	{
		$em = $this->getDoctrine()->getEntityManager();

	    $form = $this->createForm(new GoldType(), new Gold());

	    $form->handleRequest($this->getRequest());

	    if ($form->isValid()) {
	    	
	        $goldForm = $form->getData();
	        $em->persist($goldForm);
	        $goldForm->setDate(new \DateTime('now'));
	        $em->flush();
	    }            
        $repository = $this->getDoctrine()->getRepository('AppGraphBundle:Gold');
		$goldEntity = $repository->findAll();
		

		$arrayGoldValue = array();
		$arrayGoldDate = array();
		$arrayGoldPrice = array();
		$basePriceGold = 10;
		foreach ($goldEntity as $g) {
			array_push($arrayGoldValue, $g->getValue());
			array_push($arrayGoldDate, $g->getDate()->format('H:i:s'));
			$moyenneGold = $g->getValue() * $basePriceGold;
			array_push($arrayGoldPrice, $moyenneGold);
			//echo($moyenneGold) . '<br/>';
		}
		
	    // Chart
	    $series = array(array("name" => "Gold Price", "data" => $arrayGoldPrice));

	    $ob = new Highchart();
	    $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
	    $ob->title->text('Chart Title');
	    $ob->xAxis->type('datetime');
        $ob->xAxis->categories($arrayGoldDate);
	    $ob->yAxis->title(array('text'  => "Vertical axis title"));
	    $ob->yAxis(array(
                    'labels' => array(
                        'style'     => array('color' => '#FAA945'),
                    ),
                    'title' => array(
                        'text'  => 'Buy/Sale Gold',
                        'style' => array('color' => '#FAA945')
                    ),
                    'opposite' => true,
                ));
	    $ob->series($series);

	    return $this->render('AppGraphBundle:Default:index.html.twig', array(
	        'chart' => $ob,
	        'form' => $form->createView(),
	    ));
	}

}
