<?php
namespace App\Console;

use App\Model\Options;
use Nette\Utils\Finder;
use Nette\Utils\Image;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Tracy\Debugger;

class RenderPagesCommand extends Command{

	/** @var \Nette\Application\Application @inject */
	public $app;
	/** @var \App\Model\Options @inject*/
	public $options;

	protected function configure(){
        $this->setName('page:render')
	        ->setDescription('Render pages into html files')
	        ->addArgument('version',InputArgument::OPTIONAL, 'Specify version of game')
	        ->addArgument('pages',InputArgument::IS_ARRAY, 'Names of pages to render (separate multiple names with a space)');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
	    Debugger::enable(Debugger::DEVELOPMENT);

	    $version = $input->getArgument('version');
	    if (!$version) $version = $this->options->getDefaultVersion();

	    $pages = $input->getArgument('pages');
	    if (!$pages) $pages = $this->options->getPages();

	    $outDir = $this->options->renderDir.'/'.$version.'/';

	    $count = count($pages);

	    $bar = new ProgressBar($output, $count);
	    $bar->setFormat(' %current%/%max% [%bar%] %percent:3s%% %message%');
	    $bar->start();

	    foreach($pages as $title => $page){
		    if ($page =='map') continue;

		    if ($page == 'Disqus:'){
			    $presenterName = 'Disqus';
			    $page = 'default';
		    }else $presenterName = $this->options->getVersionName($version);

		    $bar->setMessage($page);
		    $bar->advance();

		    $presenter = $this->app->presenterFactory->createPresenter($presenterName);
		    $presenter->autoCanonicalize = FALSE;
		    $request = new \Nette\Application\Request($presenterName, 'GET', array('action' => $page));
		    $response = $presenter->run($request);

		    if ($page == 'default') $page = 'index';
		    if ($presenterName == 'Disqus') $page = 'disqus';

		    $html = (string) $response->getSource();
		    file_put_contents($outDir.$page.'.php',$html);
        }

	    $bar->finish();

	    $output->writeln('');
	    $output->writeln('<info>Finished rendering '.$count.' html page files</info>');

        return 0; // zero return code means everything is ok
    }
}
