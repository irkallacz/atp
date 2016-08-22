<?php

namespace App;

use Nette,
	Nette\Application\Routers\RouteList,
	Nette\Application\Routers\Route,
	Nette\Application\Routers\SimpleRouter;


/**
 * Router factory.
 */
class RouterFactory
{

	/**
	 * @return \Nette\Application\IRouter
	 */
	public function createRouter()
	{
		$router = new RouteList();
		//$router[] = new Route(null, 'ZeroSevenZero:default');
		$router[] = new Route('disqus.php', 'Disqus:default');
		$router[] = new Route('0.7.0/map/[<map>.html]','ZeroSevenZero:map');
		$router[] = new Route('0.7.0/<action>.php', 'ZeroSevenZero:default');
		//$router[] = new Route('0.7.2/<action>.php', 'ZeroSevenTwo:default');
		$router[] = new Route('<presenter>/<action>[/<id>].php', 'ZeroSevenZero:default');
		return $router;
	}

}
