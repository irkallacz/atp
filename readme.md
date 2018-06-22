#Andor's Trail Directory

**Andor's Trail Directory** is web encyclopedia located at http://andorstrail.irkalla.cz, with goal to map and fully describe Android game **Andor's Trail**.

I made it, because I couldn't find accurate list of equipment, witch will include item from new 0.7 version of game.

This app generates pages directly from source files, witch are in easy-to-read JSON and XML format. I parset files into my database, so it could be ordered and filtered. However the process is automatic a there are just few user input. But every data came from source files and nothing is added manually, except of name of location, witch i need to rewrite, so it could be readable not only for computer.


## Technology

This app is written in PHP and uses [Nette framework](https://nette.org/) and [Kdyby/Console](https://github.com/Kdyby/Console) addon. I use MySQL database as data storage.   

My idea was use console scprits to import data from game source files to database. Scripts can be found in [app/commnads](/app/commands) directory. Then use framework to generate web pages and save that pages, so nothing is generated, unless there has been change. Generated pages can be found in [render](/render).

## About

**Andor's Trail** is quest-driven Roguelike fantasy dungeon crawler RPG with a powerful story on Android, with open source code (GPL).


## Contact and links

If you want more information about game, please visit the [official game page on Google Play](https://play.google.com/store/apps/details?id=com.gpl.rpg.AndorsTrail) or the [main game forum](http://www.andorstrail.com/). There is also a [Git Hub page](https://github.com/oskarwiksten/andors-trail) if you are interested in game source code.

You can contact me by e-mail: [faila@atlas.cz](mailto:faila@atlas.cz).

