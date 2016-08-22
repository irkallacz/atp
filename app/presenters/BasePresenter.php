<?php

namespace App\Presenters;

use Nette;
use App\Model;
use Tracy\Debugger;


/**
 * Base presenter
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter{
	/** @var \App\Model\Options @inject */
	public $options;

	protected function beforeRender(){
		parent::beforeRender();

		$this->absoluteUrls = TRUE;

		$this->template->menu = $this->options->getMenu();

		$this->template->addFilter('range', function ($s, $t = null) {
			$range = $s < 0 ? '-' : '+';
			if ($s==$t) $range.= abs($s); else $range.= '('.abs($s).'–'.abs($t).')';
			return $range;
		});

		$this->template->addFilter('pure', function ($s) {
			return str_ireplace('"', '%22',$s);
		});

		$this->template->addFilter('ATIcon', function ($s) {
			$ICON_SIZE = 32;
			$iconID = explode(':', $s);
			$file = '/drawable/'.$this->VERSION.'/'.$iconID[0].'.png';

			$render = $this->getSession('render');
			if ($render->imageList) $render[$this->VERSION][$iconID[0]] = null;

			//file_put_contents($this->options->wwwDir.'/drawable/'.$this->VERSION.'/required.txt',$iconID[0]."\n",FILE_APPEND);
			$info = getimagesize($this->options->wwwDir.'/'.$file);
			$w = $info[0] / $ICON_SIZE;
			$t = floor($iconID[1]/$w);
			$l = $iconID[1] % $w;

			$img = \Nette\Utils\Html::el('img');
			$img->src = $this->template->baseUri.$file;
			$img->alt = basename($file);
			$img->style = 'margin: -'.$t*$ICON_SIZE.'px 0px 0px -'.$l*$ICON_SIZE.'px';

			return $img;
		});

		$this->template->version = $this->VERSION;
	}

//	public function sendResponse(\Nette\Application\IResponse $response){
//
//		if($this->getParameter('render') === 'true'){
//			if($response instanceof \Nette\Application\Responses\TextResponse && $response->getSource() instanceof \Nette\Bridges\ApplicationLatte\Template) {
//				ob_start();
//				$response->source->render();
//				$content = ob_get_clean();
//
//				$file = dirname($this->context->parameters['wwwDir']).'/render/'.$this->getHttpRequest()->getUrl()->getPathInfo();
//				if (is_dir($file)) $file.= 'index.php';
//				file_put_contents($file,$content);
//
//				$response = new \Nette\Application\Responses\TextResponse($content);
//			}
//		}
//
//		parent::sendResponse($response);
//	}
}
