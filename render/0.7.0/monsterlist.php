<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <title>Andor's Trail Monster List</title>
  <link rel="shortcut icon" href="http://andorstrail.irkalla.cz/favicon.ico" type="image/x-icon">
  <meta name="description" content="Andor's Trail Monster List">
  <link rel="image_src" href="http://andorstrail.irkalla.cz/image/icon.png">
  <link rel="stylesheet" type="text/css" href="http://andorstrail.irkalla.cz/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="http://andorstrail.irkalla.cz/css/main.css">
  <script type="text/javascript" src="http://andorstrail.irkalla.cz/js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="http://andorstrail.irkalla.cz/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="http://andorstrail.irkalla.cz/js/function.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        var setting = { 
          "bPaginate": false,
          "bFilter": false,
          "bInfo": false,
          "aoColumnDefs": [
{ "aTargets": [2], "mRender": function (data,type) { return formatHP(data,type) } } , { "aTargets": [3], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [7], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [9], "mRender": function (data,type) { return formatAP(data,type) } } , { "aTargets": [10], "mRender": function (data,type) { return formatAP(data,type) } } , { "aTargets": [11], "mRender": function (data,type) { return formatAP(data,type) } } , { "aTargets": [12], "mRender": function (data,type) { return formatXP(data,type) } } ,
          ]
        } 

        $('#animals td.drop').live('click', function () {        
          var tr = this.parentNode;
          if (oTableanimal.fnIsOpen(tr)) closeTable(oTableanimal,tr); else openTable(oTableanimal,tr);
        } );
        oTableanimal = $('#animals').dataTable(setting);
        $('#insects td.drop').live('click', function () {        
          var tr = this.parentNode;
          if (oTableinsect.fnIsOpen(tr)) closeTable(oTableinsect,tr); else openTable(oTableinsect,tr);
        } );
        oTableinsect = $('#insects').dataTable(setting);
        $('#reptiles td.drop').live('click', function () {        
          var tr = this.parentNode;
          if (oTablereptile.fnIsOpen(tr)) closeTable(oTablereptile,tr); else openTable(oTablereptile,tr);
        } );
        oTablereptile = $('#reptiles').dataTable(setting);
        $('#humanoids td.drop').live('click', function () {        
          var tr = this.parentNode;
          if (oTablehumanoid.fnIsOpen(tr)) closeTable(oTablehumanoid,tr); else openTable(oTablehumanoid,tr);
        } );
        oTablehumanoid = $('#humanoids').dataTable(setting);
        $('#giants td.drop').live('click', function () {        
          var tr = this.parentNode;
          if (oTablegiant.fnIsOpen(tr)) closeTable(oTablegiant,tr); else openTable(oTablegiant,tr);
        } );
        oTablegiant = $('#giants').dataTable(setting);
        $('#demons td.drop').live('click', function () {        
          var tr = this.parentNode;
          if (oTabledemon.fnIsOpen(tr)) closeTable(oTabledemon,tr); else openTable(oTabledemon,tr);
        } );
        oTabledemon = $('#demons').dataTable(setting);
        $('#ghosts td.drop').live('click', function () {        
          var tr = this.parentNode;
          if (oTableghost.fnIsOpen(tr)) closeTable(oTableghost,tr); else openTable(oTableghost,tr);
        } );
        oTableghost = $('#ghosts').dataTable(setting);
        $('#undeads td.drop').live('click', function () {        
          var tr = this.parentNode;
          if (oTableundead.fnIsOpen(tr)) closeTable(oTableundead,tr); else openTable(oTableundead,tr);
        } );
        oTableundead = $('#undeads').dataTable(setting);
        $('#constructs td.drop').live('click', function () {        
          var tr = this.parentNode;
          if (oTableconstruct.fnIsOpen(tr)) closeTable(oTableconstruct,tr); else openTable(oTableconstruct,tr);
        } );
        oTableconstruct = $('#constructs').dataTable(setting);
    
    openHash();
    });

  function openTable(table,tr) {
    $('#'+tr.id).toggleClass('border');
    table.fnOpen(tr,'<table>'+unescape(tr.getAttribute('data-drop'))+'</p>','details');
  }  
  </script>
  <script>
  (function(G,o,O,g,l){G.GoogleAnalyticsObject=O;G[O]||(G[O]=function(){(G[O].q=G[O].q||[]).push(arguments)});G[O].l=+new Date;g=o.createElement('script'),l=o.scripts[0];g.src='//www.google-analytics.com/analytics.js';l.parentNode.insertBefore(g,l)}(this,document,'ga'));ga('create','UA-56930109-1');ga('send','pageview')
  </script>
  </head>
  <body>
  <ul id="menu">
      <li>
          <a  href="http://andorstrail.irkalla.cz/0.7.0/">HOME</a>
      </li>
      <li>
          <a  href="http://andorstrail.irkalla.cz/0.7.0/itemlist.php">EQUIPMENT</a>
      </li>
      <li>
          <a  href="http://andorstrail.irkalla.cz/0.7.0/consumablelist.php">CONSUMABLE</a>
      </li>
      <li>
          <a class="current" href="http://andorstrail.irkalla.cz/0.7.0/monsterlist.php">MONSTER</a>
      </li>
      <li>
          <a  href="http://andorstrail.irkalla.cz/0.7.0/npclist.php">NPC &amp; MERCHANT</a>
      </li>
      <li>
          <a  href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php">CONDITION</a>
      </li>
      <li>
          <a  href="http://andorstrail.irkalla.cz/0.7.0/questlist.php">QUEST</a>
      </li>
      <li>
          <a  href="http://andorstrail.irkalla.cz/0.7.0/map/">MAP</a>
      </li>
      <li>
          <a  href="http://andorstrail.irkalla.cz/disqus.php">DISQUS</a>
      </li>
  </ul>
  <small id="version" class="float-right"><a href="http://andorstrail.irkalla.cz/0.7.0/version.php">game version 0.7.0</a></small>
     <h1><a href="http://andorstrail.irkalla.cz/0.7.0/"><img alt="" src="http://andorstrail.irkalla.cz/image/icon.png"></a>Andor's Trail Monster List</h1>
     <ul id="toc">
      <li><a href="#animals">Animal</a></li>
      <li><a href="#insects">Insect</a></li>
      <li><a href="#reptiles">Reptile</a></li>
      <li><a href="#humanoids">Humanoid</a></li>
      <li><a href="#giants">Giant</a></li>
      <li><a href="#demons">Demon</a></li>
      <li><a href="#ghosts">Ghost</a></li>
      <li><a href="#undeads">Undead</a></li>
      <li><a href="#constructs">Construct</a></li>
     </ul>
     
     <h2>Animal</h2>
     <table class="monster" id="animals" width="80%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>HP</th> <th>AC%</th> <th>Dmg</th> <th>Crit</th> <th>Crit*</th> <th>BC%</th> <th>Dmg resis</th> <th>AP</th> <th>Attack cost</th> <th>Move cost</th> <th>XP</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="catacomb_rat" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs1.html#catacomb_rat%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs2.html#catacomb_rat%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs3.html#catacomb_rat%22>Fallhaven catacombs </a> </p>">
          <td class="icon">
              <span class="hidden">catacombrat1</span>
              <a href="#catacomb_rat"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rats.png" alt="monsters_rats.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Catacomb rat
          </td>
          <td>15</td>
          <td>60</td>
          <td>
              1
          </td>
          <td></td>
          <td></td>
          <td>40</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>  19
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="large_catacomb_rat" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs1.html#large_catacomb_rat%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs2.html#large_catacomb_rat%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs3.html#large_catacomb_rat%22>Fallhaven catacombs </a> </p>">
          <td class="icon">
              <span class="hidden">catacombrat1</span>
              <a href="#large_catacomb_rat"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rats.png" alt="monsters_rats.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Large catacomb rat
          </td>
          <td>21</td>
          <td>60</td>
          <td>
              1-2
          </td>
          <td>10</td>
          <td>2</td>
          <td>40</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>  28
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cavebat1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -128px%22></div> </td> <td class=%22left%22>Bat wing</td> <td>1</td> <td>20%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave0.html#cavebat1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave1.html#cavebat1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar1cave0.html#cavebat1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave0.html#cavebat1%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave1.html#cavebat1%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave2.html#cavebat1%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8cave0.html#cavebat1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave0.html#cavebat1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave1.html#cavebat1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave2.html#cavebat1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave3.html#cavebat1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4.html#cavebat1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave5.html#cavebat1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave6.html#cavebat1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave7.html#cavebat1%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">cavebat1</span>
              <a href="#cavebat1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Gray cave bat
          </td>
          <td>28</td>
          <td>56</td>
          <td>
              3-5
          </td>
          <td>75</td>
          <td>3</td>
          <td>32</td>
          <td></td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  103
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cavebat2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -128px%22></div> </td> <td class=%22left%22>Bat wing</td> <td>1</td> <td>20%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave0.html#cavebat2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave1.html#cavebat2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar1cave0.html#cavebat2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave0.html#cavebat2%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave1.html#cavebat2%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave2.html#cavebat2%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8cave0.html#cavebat2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave0.html#cavebat2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave1.html#cavebat2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave2.html#cavebat2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave3.html#cavebat2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4.html#cavebat2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave5.html#cavebat2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave6.html#cavebat2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave7.html#cavebat2%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">cavebat1</span>
              <a href="#cavebat2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Black cave bat
          </td>
          <td>32</td>
          <td>59</td>
          <td>
              2-6
          </td>
          <td>75</td>
          <td>3</td>
          <td>35</td>
          <td></td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  111
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cavebat3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -128px%22></div> </td> <td class=%22left%22>Bat wing</td> <td>1</td> <td>20%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave0.html#cavebat3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave1.html#cavebat3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar1cave0.html#cavebat3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave0.html#cavebat3%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave1.html#cavebat3%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave2.html#cavebat3%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8cave0.html#cavebat3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave0.html#cavebat3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave1.html#cavebat3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave2.html#cavebat3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave3.html#cavebat3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4.html#cavebat3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave5.html#cavebat3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave6.html#cavebat3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave7.html#cavebat3%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">cavebat1</span>
              <a href="#cavebat3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Brown cave bat
          </td>
          <td>36</td>
          <td>62</td>
          <td>
              1-7
          </td>
          <td>80</td>
          <td>3</td>
          <td>25</td>
          <td></td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  121
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cavebat4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -128px%22></div> </td> <td class=%22left%22>Bat wing</td> <td>1</td> <td>20%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave1.html#cavebat4%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave2.html#cavebat4%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4a.html#cavebat4%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">cavebat2</span>
              <a href="#cavebat4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Cave bat
          </td>
          <td>39</td>
          <td>64</td>
          <td>
              1-7
          </td>
          <td>80</td>
          <td>3</td>
          <td>27</td>
          <td></td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  127
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cavebat5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -128px%22></div> </td> <td class=%22left%22>Bat wing</td> <td>1</td> <td>20%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave1.html#cavebat5%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave2.html#cavebat5%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4a.html#cavebat5%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">cavebat2</span>
              <a href="#cavebat5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Aggressive cave bat
          </td>
          <td>41</td>
          <td>69</td>
          <td>
              1-7
          </td>
          <td>80</td>
          <td>3</td>
          <td>32</td>
          <td></td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  137
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cave_dwelling_boar" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-25</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild14.html#cave_dwelling_boar%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild14_cave.html#cave_dwelling_boar%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild15.html#cave_dwelling_boar%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">caveboar1</span>
              <a href="#cave_dwelling_boar"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -192px">
              </a>
          </td>
          <td class="left name drop">
              Cave dwelling boar
          </td>
          <td>35</td>
          <td>70</td>
          <td>
              3-8
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  75
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="strong_cave_rat" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>10</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tail_caverat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Cave rat tail</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/crossglen_cave.html#strong_cave_rat%22>Crossglen cave </a> </p>">
          <td class="icon">
              <span class="hidden">crossglen_caveboss</span>
              <a href="#strong_cave_rat" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rats.png" alt="monsters_rats.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Strong cave rat
          </td>
          <td>20</td>
          <td>100</td>
          <td>
              2-4
          </td>
          <td></td>
          <td></td>
          <td>10</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  28
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cave_rat" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -320px%22></div> </td> <td class=%22left%22>Rat tail</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/crossglen_cave.html#cave_rat%22>Crossglen cave </a> </p>">
          <td class="icon">
              <span class="hidden">crossglen_caverat</span>
              <a href="#cave_rat"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rats.png" alt="monsters_rats.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Cave rat
          </td>
          <td>5</td>
          <td>90</td>
          <td>
              2
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  8
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="tough_cave_rat" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -320px%22></div> </td> <td class=%22left%22>Rat tail</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/crossglen_cave.html#tough_cave_rat%22>Crossglen cave </a> </p>">
          <td class="icon">
              <span class="hidden">crossglen_caverat2</span>
              <a href="#tough_cave_rat"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rats.png" alt="monsters_rats.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Tough cave rat
          </td>
          <td>5</td>
          <td>90</td>
          <td>
              3
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  15
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="crossroads_rat" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -320px%22></div> </td> <td class=%22left%22>Rat tail</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/houseatcrossroads1.html#crossroads_rat%22>House at crossroads </a> </p>">
          <td class="icon">
              <span class="hidden">crossroads_rat</span>
              <a href="#crossroads_rat"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rats.png" alt="monsters_rats.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Rat
          </td>
          <td>5</td>
          <td>50</td>
          <td>
              1
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  7
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="rabid_boar" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Leather boots</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild0.html#rabid_boar%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild1.html#rabid_boar%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestboar</span>
              <a href="#rabid_boar"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -192px">
              </a>
          </td>
          <td class="left name drop">
              Rabid Boar
          </td>
          <td>20</td>
          <td>110</td>
          <td>
              3
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  33
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="wild_boar" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Leather boots</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain0.html#wild_boar%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone0.html#wild_boar%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads5.html#wild_boar%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild10.html#wild_boar%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild12.html#wild_boar%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild13.html#wild_boar%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild16.html#wild_boar%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild5.html#wild_boar%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild6.html#wild_boar%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestboar2</span>
              <a href="#wild_boar"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -192px">
              </a>
          </td>
          <td class="left name drop">
              Wild Boar
          </td>
          <td>20</td>
          <td>110</td>
          <td>
              3
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  33
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="anklebiter" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-25</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/crossroads.html#anklebiter%22>Crossroads Guardhouse </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone0.html#anklebiter%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road3.html#anklebiter%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road4.html#anklebiter%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road5.html#anklebiter%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads2.html#anklebiter%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads3.html#anklebiter%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads4.html#anklebiter%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads5.html#anklebiter%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads6.html#anklebiter%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads7.html#anklebiter%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild14_cave.html#anklebiter%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild14_clearing.html#anklebiter%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild16.html#anklebiter%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestboar3</span>
              <a href="#anklebiter"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -192px">
              </a>
          </td>
          <td class="left name drop">
              Anklebiter
          </td>
          <td>31</td>
          <td>150</td>
          <td>
              3-9
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  92
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="vicious_hound" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Leather boots</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain1.html#vicious_hound%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain10.html#vicious_hound%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain12.html#vicious_hound%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain14.html#vicious_hound%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild17.html#vicious_hound%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestboar4</span>
              <a href="#vicious_hound"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -320px">
              </a>
          </td>
          <td class="left name drop">
              Vicious hound
          </td>
          <td>31</td>
          <td>150</td>
          <td>
              3-9
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  92
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="small_rabid_dog" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-6</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gapfiller4.html#small_rabid_dog%22>Gapfiller </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven3.html#small_rabid_dog%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild0.html#small_rabid_dog%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild1.html#small_rabid_dog%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild3.html#small_rabid_dog%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestdog</span>
              <a href="#small_rabid_dog"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Small rabid dog
          </td>
          <td>6</td>
          <td>90</td>
          <td>
              2
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  8
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="forestfox2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads2.html#forestfox2%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads6.html#forestfox2%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads8.html#forestfox2%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown0.html#forestfox2%22>Way to mining town </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown2.html#forestfox2%22>Way to mining town </a> </p>">
          <td class="icon">
              <span class="hidden">forestfox2</span>
              <a href="#forestfox2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Young forest fox
          </td>
          <td>31</td>
          <td>72</td>
          <td>
              0-5
          </td>
          <td>45</td>
          <td>3</td>
          <td>46</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  84
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="forestfox3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads2.html#forestfox3%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads6.html#forestfox3%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads8.html#forestfox3%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown0.html#forestfox3%22>Way to mining town </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown2.html#forestfox3%22>Way to mining town </a> </p>">
          <td class="icon">
              <span class="hidden">forestfox2</span>
              <a href="#forestfox3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Forest fox
          </td>
          <td>35</td>
          <td>75</td>
          <td>
              0-5
          </td>
          <td>45</td>
          <td>3</td>
          <td>49</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  90
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="wolf" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-6</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain0.html#wolf%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone0.html#wolf%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road2.html#wolf%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads2.html#wolf%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild11.html#wolf%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild14.html#wolf%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild17.html#wolf%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild6.html#wolf%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild7.html#wolf%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild9.html#wolf%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestwolf1</span>
              <a href="#wolf"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Wolf
          </td>
          <td>30</td>
          <td>110</td>
          <td>
              3-6
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>3</td>
          <td>  49
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="rabid_hound" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-6</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain1.html#rabid_hound%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads1.html#rabid_hound%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven1.html#rabid_hound%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven3.html#rabid_hound%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild17.html#rabid_hound%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestwolf2</span>
              <a href="#rabid_hound"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Rabid hound
          </td>
          <td>40</td>
          <td>110</td>
          <td>
              3-9
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  65
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="rabid_fox" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-6</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads.html#rabid_fox%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower0.html#rabid_fox%22>Road to Carn tower </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower1.html#rabid_fox%22>Road to Carn tower </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild0.html#rabid_fox%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild1.html#rabid_fox%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild4.html#rabid_fox%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild8.html#rabid_fox%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodcave0.html#rabid_fox%22>Wood cave </a> </p>">
          <td class="icon">
              <span class="hidden">fox1</span>
              <a href="#rabid_fox"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Rabid Fox
          </td>
          <td>25</td>
          <td>100</td>
          <td>
              3
          </td>
          <td></td>
          <td></td>
          <td>50</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  39
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="wild_fox" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-6</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads.html#wild_fox%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads1.html#wild_fox%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads2.html#wild_fox%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads3.html#wild_fox%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads6.html#wild_fox%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild5.html#wild_fox%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild6.html#wild_fox%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">fox2</span>
              <a href="#wild_fox"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Wild Fox
          </td>
          <td>25</td>
          <td>100</td>
          <td>
              4-5
          </td>
          <td></td>
          <td></td>
          <td>40</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  44
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="anklebiter2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar0.html#anklebiter2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#anklebiter2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#anklebiter2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar17.html#anklebiter2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar19.html#anklebiter2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar2.html#anklebiter2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar4.html#anklebiter2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5.html#anklebiter2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#anklebiter2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#anklebiter2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar9.html#anklebiter2%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hanklbit1</span>
              <a href="#anklebiter2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -288px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Small horned anklebiter
          </td>
          <td>38</td>
          <td>96</td>
          <td>
              3-7
          </td>
          <td></td>
          <td></td>
          <td>53</td>
          <td>1</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  78
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="anklebiter3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar0.html#anklebiter3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#anklebiter3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#anklebiter3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar17.html#anklebiter3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar19.html#anklebiter3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar2.html#anklebiter3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar4.html#anklebiter3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5.html#anklebiter3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#anklebiter3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#anklebiter3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar9.html#anklebiter3%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hanklbit1</span>
              <a href="#anklebiter3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -288px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Young horned anklebiter
          </td>
          <td>46</td>
          <td>112</td>
          <td>
              5-7
          </td>
          <td>5</td>
          <td>2</td>
          <td>61</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  112
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="anklebiter4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar15.html#anklebiter4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar17.html#anklebiter4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar19.html#anklebiter4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#anklebiter4%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hanklbit2</span>
              <a href="#anklebiter4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -288px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Fast horned anklebiter
          </td>
          <td>52</td>
          <td>129</td>
          <td>
              1-9
          </td>
          <td>10</td>
          <td>2</td>
          <td>68</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  129
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="anklebiter5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar15.html#anklebiter5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar17.html#anklebiter5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar19.html#anklebiter5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#anklebiter5%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hanklbit2</span>
              <a href="#anklebiter5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -256px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Tough horned anklebiter
          </td>
          <td>64</td>
          <td>137</td>
          <td>
              3-9
          </td>
          <td>10</td>
          <td>2</td>
          <td>76</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  160
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="anklebiter6" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar15.html#anklebiter6%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar17.html#anklebiter6%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar19.html#anklebiter6%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar21.html#anklebiter6%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hanklbit3</span>
              <a href="#anklebiter6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -256px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Strong horned anklebiter
          </td>
          <td>76</td>
          <td>151</td>
          <td>
              1-13
          </td>
          <td>10</td>
          <td>2</td>
          <td>85</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  198
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="anklebiter7" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar15.html#anklebiter7%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar17.html#anklebiter7%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar21.html#anklebiter7%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hanklbit4</span>
              <a href="#anklebiter7"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -256px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Steelhide horned anklebiter
          </td>
          <td>124</td>
          <td>162</td>
          <td>
              4-11
          </td>
          <td>10</td>
          <td>2</td>
          <td>92</td>
          <td>7</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  303
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="lonelyhouse_sp" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#algangror_rat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Strange looking rat tail</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lonelyhouse1.html#lonelyhouse_sp%22>Lonely house </a> </p>">
          <td class="icon">
              <span class="hidden">lonelyhouse_sp</span>
              <a href="#lonelyhouse_sp" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rats.png" alt="monsters_rats.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Basement rat
          </td>
          <td>79</td>
          <td>125</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>180</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  224
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mwolf_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake1.html#mwolf_1%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10a.html#mwolf_1%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake11.html#mwolf_1%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake12.html#mwolf_1%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake13.html#mwolf_1%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake13a.html#mwolf_1%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mwolf_1</span>
              <a href="#mwolf_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Mountain wolf pup
          </td>
          <td>45</td>
          <td>80</td>
          <td>
              2-7
          </td>
          <td>10</td>
          <td>2</td>
          <td>40</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  82
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mwolf_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake1.html#mwolf_2%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10a.html#mwolf_2%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake11.html#mwolf_2%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake12.html#mwolf_2%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake13.html#mwolf_2%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake13a.html#mwolf_2%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mwolf_1</span>
              <a href="#mwolf_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Young mountain wolf
          </td>
          <td>52</td>
          <td>80</td>
          <td>
              3-7
          </td>
          <td>10</td>
          <td>2</td>
          <td>44</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  92
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mwolf_3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake1.html#mwolf_3%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10a.html#mwolf_3%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake11.html#mwolf_3%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake12.html#mwolf_3%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake13.html#mwolf_3%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake13a.html#mwolf_3%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mwolf_1</span>
              <a href="#mwolf_3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Young mountain fox
          </td>
          <td>56</td>
          <td>80</td>
          <td>
              3-7
          </td>
          <td>10</td>
          <td>2</td>
          <td>48</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  104
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mwolf_4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10.html#mwolf_4%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10a.html#mwolf_4%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake11.html#mwolf_4%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake12.html#mwolf_4%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mwolf_2</span>
              <a href="#mwolf_4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Mountain fox
          </td>
          <td>60</td>
          <td>85</td>
          <td>
              3-8
          </td>
          <td>10</td>
          <td>2</td>
          <td>52</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  113
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mwolf_5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10.html#mwolf_5%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10a.html#mwolf_5%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake11.html#mwolf_5%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake12.html#mwolf_5%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mwolf_2</span>
              <a href="#mwolf_5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Ferocious mountain fox
          </td>
          <td>64</td>
          <td>85</td>
          <td>
              3-8
          </td>
          <td>10</td>
          <td>2</td>
          <td>54</td>
          <td>5</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  136
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mwolf_6" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10.html#mwolf_6%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10a.html#mwolf_6%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake11.html#mwolf_6%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake12.html#mwolf_6%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mwolf_2</span>
              <a href="#mwolf_6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Rabid mountain wolf
          </td>
          <td>67</td>
          <td>90</td>
          <td>
              3-9
          </td>
          <td>10</td>
          <td>2</td>
          <td>56</td>
          <td>5</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  146
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mwolf_7" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10.html#mwolf_7%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake11.html#mwolf_7%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mwolf_3</span>
              <a href="#mwolf_7"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Strong mountain wolf
          </td>
          <td>73</td>
          <td>90</td>
          <td>
              3-9
          </td>
          <td>10</td>
          <td>2</td>
          <td>57</td>
          <td>6</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  159
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mwolf_8" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -96px%22></div> </td> <td class=%22left%22>Sharpened gem</td> <td>1</td> <td>20%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-12</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10.html#mwolf_8%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake11.html#mwolf_8%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mwolf_3</span>
              <a href="#mwolf_8"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Ferocious mountain wolf
          </td>
          <td>78</td>
          <td>90</td>
          <td>
              3-10
          </td>
          <td>10</td>
          <td>2</td>
          <td>59</td>
          <td>6</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  169
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="hunting_dog" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-15</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/clearing_level1.html#hunting_dog%22>Clearing </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild11.html#hunting_dog%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild11_clearing.html#hunting_dog%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">pack1</span>
              <a href="#hunting_dog"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Hunting dog
          </td>
          <td>25</td>
          <td>60</td>
          <td>
              2-5
          </td>
          <td></td>
          <td></td>
          <td>50</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  36
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="young_wolf" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-15</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/clearing_level1.html#young_wolf%22>Clearing </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild11.html#young_wolf%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild11_clearing.html#young_wolf%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">pack1</span>
              <a href="#young_wolf"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Young wolf
          </td>
          <td>35</td>
          <td>60</td>
          <td>
              2-5
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>  58
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="fledgling_wolf" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></div> </td> <td class=%22left%22>Polished gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-25</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/clearing_level1.html#fledgling_wolf%22>Clearing </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/clearing_level2.html#fledgling_wolf%22>Clearing </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild11_clearing.html#fledgling_wolf%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">pack2</span>
              <a href="#fledgling_wolf"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Fledgling wolf
          </td>
          <td>42</td>
          <td>70</td>
          <td>
              2-5
          </td>
          <td></td>
          <td></td>
          <td>50</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>  79
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="rabid_wolf" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></div> </td> <td class=%22left%22>Polished gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-25</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/clearing_level1.html#rabid_wolf%22>Clearing </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/clearing_level2.html#rabid_wolf%22>Clearing </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild11_clearing.html#rabid_wolf%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">pack2</span>
              <a href="#rabid_wolf"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Rabid Wolf
          </td>
          <td>42</td>
          <td>90</td>
          <td>
              2-6
          </td>
          <td></td>
          <td></td>
          <td>50</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  79
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="pack_hunter" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -96px%22></div> </td> <td class=%22left%22>Sharpened gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-35</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/clearing_level2.html#pack_hunter%22>Clearing </a> </p>">
          <td class="icon">
              <span class="hidden">pack3</span>
              <a href="#pack_hunter"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Pack hunter
          </td>
          <td>45</td>
          <td>90</td>
          <td>
              2-7
          </td>
          <td>10</td>
          <td>2</td>
          <td>40</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  84
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="pack_leader" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -96px%22></div> </td> <td class=%22left%22>Sharpened gem</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-35</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#packhide%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Wolfpack's animal hide</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/clearing_level2.html#pack_leader%22>Clearing </a> </p>">
          <td class="icon">
              <span class="hidden">pack_boss</span>
              <a href="#pack_leader" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Pack Leader
          </td>
          <td>65</td>
          <td>90</td>
          <td>
              2-10
          </td>
          <td>20</td>
          <td>2</td>
          <td>40</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  121
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mountain_wolf" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-6</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain10.html#mountain_wolf%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain12.html#mountain_wolf%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain14.html#mountain_wolf%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">primwolf1</span>
              <a href="#mountain_wolf"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Mountain wolf
          </td>
          <td>49</td>
          <td>150</td>
          <td>
              3-9
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  112
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="puny_caverat" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -320px%22></div> </td> <td class=%22left%22>Rat tail</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain6.html#puny_caverat%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">puny_caverat</span>
              <a href="#puny_caverat"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rats.png" alt="monsters_rats.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Cave rat
          </td>
          <td>5</td>
          <td>50</td>
          <td>
              1
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  7
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="puny_warehouserat" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -320px%22></div> </td> <td class=%22left%22>Rat tail</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/loneford9.html#puny_warehouserat%22>Loneford </a> </p>">
          <td class="icon">
              <span class="hidden">puny_warehouserat</span>
              <a href="#puny_warehouserat"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rats.png" alt="monsters_rats.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Warehouse rat
          </td>
          <td>5</td>
          <td>50</td>
          <td>
              1
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  7
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="redft0" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1-3</td> <td>20%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>20%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Redfoot beast hair</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads8.html#redft0%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown0.html#redft0%22>Way to mining town </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown1.html#redft0%22>Way to mining town </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown1a.html#redft0%22>Way to mining town </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown3.html#redft0%22>Way to mining town </a> </p>">
          <td class="icon">
              <span class="hidden">redft1</span>
              <a href="#redft0"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -0px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Tough redfoot beast
          </td>
          <td>39</td>
          <td>78</td>
          <td>
              0-5
          </td>
          <td>50</td>
          <td>3</td>
          <td>52</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  98
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="redft1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1-3</td> <td>20%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>20%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Redfoot beast hair</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads9.html#redft1%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown0.html#redft1%22>Way to mining town </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown1.html#redft1%22>Way to mining town </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown3.html#redft1%22>Way to mining town </a> </p>">
          <td class="icon">
              <span class="hidden">redft2</span>
              <a href="#redft1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -0px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Strong redfoot beast
          </td>
          <td>43</td>
          <td>81</td>
          <td>
              0-5
          </td>
          <td>50</td>
          <td>3</td>
          <td>56</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  105
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="redft2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1-3</td> <td>20%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>20%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Redfoot beast hair</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads9.html#redft2%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown0.html#redft2%22>Way to mining town </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown1.html#redft2%22>Way to mining town </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown3.html#redft2%22>Way to mining town </a> </p>">
          <td class="icon">
              <span class="hidden">redft2</span>
              <a href="#redft2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -0px 0px 0px -320px">
              </a>
          </td>
          <td class="left name drop">
              Bloodthirsty redfoot beast
          </td>
          <td>47</td>
          <td>84</td>
          <td>
              0-5
          </td>
          <td>65</td>
          <td>3</td>
          <td>75</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  122
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="redft_cr" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#oegyth%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Oegyth crystal</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown3.html#redft_cr%22>Way to mining town </a> </p>">
          <td class="icon">
              <span class="hidden">redft_cr</span>
              <a href="#redft_cr" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -0px 0px 0px -320px">
              </a>
          </td>
          <td class="left name drop">
              Vicious redfoot beast
          </td>
          <td>347</td>
          <td>84</td>
          <td>
              0-9
          </td>
          <td>65</td>
          <td>3</td>
          <td>75</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  521
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="lostsheep1" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tinlyn_sheep_meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat from Tinlyn's sheep</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#benbyr%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Cheap cuts</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tinlyn%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Lost sheep</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields1.html#lostsheep1%22>Fields </a> </p>">
          <td class="icon">
              <span class="hidden">tinlyn_lostsheep1</span>
              <a href="#lostsheep1" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Sheep
          </td>
          <td>5</td>
          <td>10</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  4
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="lostsheep2" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tinlyn_sheep_meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat from Tinlyn's sheep</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#benbyr%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Cheap cuts</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tinlyn%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Lost sheep</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields2.html#lostsheep2%22>Fields </a> </p>">
          <td class="icon">
              <span class="hidden">tinlyn_lostsheep2</span>
              <a href="#lostsheep2" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Sheep
          </td>
          <td>5</td>
          <td>10</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  4
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="lostsheep3" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tinlyn_sheep_meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat from Tinlyn's sheep</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#benbyr%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Cheap cuts</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tinlyn%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Lost sheep</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields3.html#lostsheep3%22>Fields </a> </p>">
          <td class="icon">
              <span class="hidden">tinlyn_lostsheep3</span>
              <a href="#lostsheep3" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Sheep
          </td>
          <td>5</td>
          <td>10</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  4
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="lostsheep4" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tinlyn_sheep_meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat from Tinlyn's sheep</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#benbyr%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Cheap cuts</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tinlyn%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Lost sheep</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/loneford1.html#lostsheep4%22>Loneford </a> </p>">
          <td class="icon">
              <span class="hidden">tinlyn_lostsheep4</span>
              <a href="#lostsheep4" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Sheep
          </td>
          <td>5</td>
          <td>10</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  4
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="sheep1" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tinlyn_sheep_meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat from Tinlyn's sheep</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#benbyr%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Cheap cuts</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tinlyn%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Lost sheep</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields6.html#sheep1%22>Fields </a> </p>">
          <td class="icon">
              <span class="hidden">tinlyn_sheep</span>
              <a href="#sheep1" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Sheep
          </td>
          <td>5</td>
          <td>10</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  4
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="tiny_rat" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-2</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tail_trainingrat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Small rat tail</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/crossglen.html#tiny_rat%22>Crossglen </a> </p>">
          <td class="icon">
              <span class="hidden">trainingrat</span>
              <a href="#tiny_rat" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rats.png" alt="monsters_rats.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Tiny rat
          </td>
          <td>2</td>
          <td>50</td>
          <td>
              1
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  3
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="large_cave_rat" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone1.html#large_cave_rat%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave0.html#large_cave_rat%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave1.html#large_cave_rat%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave2.html#large_cave_rat%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave4.html#large_cave_rat%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">undeadrat1</span>
              <a href="#large_cave_rat"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rats.png" alt="monsters_rats.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Large cave rat
          </td>
          <td>21</td>
          <td>60</td>
          <td>
              3-4
          </td>
          <td>10</td>
          <td>2</td>
          <td>40</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>  37
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="vermin0" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-1</td> <td>20%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarhouse1.html#vermin0%22>Lodar house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodhouse2.html#vermin0%22>Wood house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodhouse3.html#vermin0%22>Wood house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodsettlement0.html#vermin0%22>Wood settlement </a> </p>">
          <td class="icon">
              <span class="hidden">vermin</span>
              <a href="#vermin0"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rats.png" alt="monsters_rats.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Rat
          </td>
          <td>1</td>
          <td>10</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td></td>
          <td>10</td>
          <td>4</td>
          <td>10</td>
          <td>  1
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="vermin1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-1</td> <td>20%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarhouse1.html#vermin1%22>Lodar house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodhouse2.html#vermin1%22>Wood house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodhouse3.html#vermin1%22>Wood house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodsettlement0.html#vermin1%22>Wood settlement </a> </p>">
          <td class="icon">
              <span class="hidden">vermin</span>
              <a href="#vermin1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Rat
          </td>
          <td>1</td>
          <td>10</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td></td>
          <td>10</td>
          <td>4</td>
          <td>10</td>
          <td>  1
</td>
          <td class="cond">
          
          
          </td>
      </tr>
    </tbody>
    </table>
     <h2>Insect</h2>
     <table class="monster" id="insects" width="80%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>HP</th> <th>AC%</th> <th>Dmg</th> <th>Crit</th> <th>Crit*</th> <th>BC%</th> <th>Dmg resis</th> <th>AP</th> <th>Attack cost</th> <th>Move cost</th> <th>XP</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="hardshell_beetle" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-12</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarhouse0.html#hardshell_beetle%22>Lodar house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road1.html#hardshell_beetle%22>Foaming Flask Tavern </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road3.html#hardshell_beetle%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road4.html#hardshell_beetle%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road5.html#hardshell_beetle%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads7.html#hardshell_beetle%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads8.html#hardshell_beetle%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild13.html#hardshell_beetle%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild14_cave.html#hardshell_beetle%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild15.html#hardshell_beetle%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">beetle2</span>
              <a href="#hardshell_beetle"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Hardshell beetle
          </td>
          <td>25</td>
          <td>50</td>
          <td>
              0-5
          </td>
          <td></td>
          <td></td>
          <td>40</td>
          <td>9</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  87
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="burrower_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway14.html#burrower_1%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway15.html#burrower_1%22>Waterway </a> </p>">
          <td class="icon">
              <span class="hidden">burrower_1</span>
              <a href="#burrower_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Larval cave burrower
          </td>
          <td>30</td>
          <td>95</td>
          <td>
              1-25
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>2</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  103
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="burrower_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway14.html#burrower_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway15.html#burrower_2%22>Waterway </a> </p>">
          <td class="icon">
              <span class="hidden">burrower_1</span>
              <a href="#burrower_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Cave burrower
          </td>
          <td>37</td>
          <td>95</td>
          <td>
              1-25
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>2</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  112
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="burrower_3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway14.html#burrower_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway15.html#burrower_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway6.html#burrower_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterwaycave.html#burrower_3%22>Cave on water way </a> </p>">
          <td class="icon">
              <span class="hidden">burrower_2</span>
              <a href="#burrower_3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Strong larval burrower
          </td>
          <td>44</td>
          <td>95</td>
          <td>
              1-25
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>2</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  120
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="burrower_4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterwaycave.html#burrower_4%22>Cave on water way </a> </p>">
          <td class="icon">
              <span class="hidden">burrower_3</span>
              <a href="#burrower_4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Giant larval burrower
          </td>
          <td>75</td>
          <td>95</td>
          <td>
              1-25
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>2</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  159
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="burrower_cr" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#oegyth%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Oegyth crystal</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterwaycave.html#burrower_cr%22>Cave on water way </a> </p>">
          <td class="icon">
              <span class="hidden">burrower_cr</span>
              <a href="#burrower_cr" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Giant larval burrower
          </td>
          <td>175</td>
          <td>95</td>
          <td>
              1-25
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>2</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  285
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="caveburr1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5.html#caveburr1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave0.html#caveburr1%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave1.html#caveburr1%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave2.html#caveburr1%22>Green maze cave </a> </p>">
          <td class="icon">
              <span class="hidden">caveburr1</span>
              <a href="#caveburr1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Young posionous cave burrower
          </td>
          <td>57</td>
          <td>54</td>
          <td>
              0-5
          </td>
          <td></td>
          <td></td>
          <td>126</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  99
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="caveburr2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5.html#caveburr2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave0.html#caveburr2%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave1.html#caveburr2%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave2.html#caveburr2%22>Green maze cave </a> </p>">
          <td class="icon">
              <span class="hidden">caveburr1</span>
              <a href="#caveburr2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Infected larval cave burrower
          </td>
          <td>62</td>
          <td>57</td>
          <td>
              0-6
          </td>
          <td></td>
          <td></td>
          <td>129</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  111
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="caveburr3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5.html#caveburr3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave0.html#caveburr3%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave1.html#caveburr3%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave2.html#caveburr3%22>Green maze cave </a> </p>">
          <td class="icon">
              <span class="hidden">caveburr1</span>
              <a href="#caveburr3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Poisonous cave burrower
          </td>
          <td>65</td>
          <td>60</td>
          <td>
              0-6
          </td>
          <td></td>
          <td></td>
          <td>131</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  167
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Weak Poison (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="caveburr4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave0.html#caveburr4%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave1.html#caveburr4%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave2.html#caveburr4%22>Green maze cave </a> </p>">
          <td class="icon">
              <span class="hidden">caveburr2</span>
              <a href="#caveburr4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Strong poisonous cave burrower
          </td>
          <td>67</td>
          <td>64</td>
          <td>
              0-6
          </td>
          <td></td>
          <td></td>
          <td>134</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  172
</td>
          <td class="cond">
            <a title="On hit
  On target
    10% chance of Weak Poison (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="caveburr5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave0.html#caveburr5%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave1.html#caveburr5%22>Green maze cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5cave2.html#caveburr5%22>Green maze cave </a> </p>">
          <td class="icon">
              <span class="hidden">caveburr2</span>
              <a href="#caveburr5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Giant poisonous cave burrower
          </td>
          <td>69</td>
          <td>67</td>
          <td>
              0-6
          </td>
          <td></td>
          <td></td>
          <td>136</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  177
</td>
          <td class="cond">
            <a title="On hit
  On target
    10% chance of Weak Poison 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="ccentip0" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse4.html#ccentip0%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse5.html#ccentip0%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads9.html#ccentip0%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine0.html#ccentip0%22>Way to lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine2.html#ccentip0%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown3.html#ccentip0%22>Way to mining town </a> </p>">
          <td class="icon">
              <span class="hidden">ccentip</span>
              <a href="#ccentip0"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Carrion centipede
          </td>
          <td>54</td>
          <td>48</td>
          <td>
              6-14
          </td>
          <td></td>
          <td></td>
          <td>132</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  158
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Weak Poison (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="ccentip1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse4.html#ccentip1%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse5.html#ccentip1%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads9.html#ccentip1%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine0.html#ccentip1%22>Way to lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine2.html#ccentip1%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown3.html#ccentip1%22>Way to mining town </a> </p>">
          <td class="icon">
              <span class="hidden">ccentip</span>
              <a href="#ccentip1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Ravenous carrion centipede
          </td>
          <td>56</td>
          <td>53</td>
          <td>
              7-14
          </td>
          <td></td>
          <td></td>
          <td>132</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  165
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Weak Poison (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="ccentip2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse4.html#ccentip2%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse5.html#ccentip2%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads9.html#ccentip2%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine0.html#ccentip2%22>Way to lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine2.html#ccentip2%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown3.html#ccentip2%22>Way to mining town </a> </p>">
          <td class="icon">
              <span class="hidden">ccentip</span>
              <a href="#ccentip2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -320px">
              </a>
          </td>
          <td class="left name drop">
              Bloated carrion centipede
          </td>
          <td>59</td>
          <td>55</td>
          <td>
              8-14
          </td>
          <td></td>
          <td></td>
          <td>132</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  172
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Weak Poison 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="black_ant" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/crossglen.html#black_ant%22>Crossglen </a> </p>">
          <td class="icon">
              <span class="hidden">crossglen_ant</span>
              <a href="#black_ant"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Black ant
          </td>
          <td>3</td>
          <td>70</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  5
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="beetle" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/crossglen.html#beetle%22>Crossglen </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/crossglen_farmhouse_basement.html#beetle%22>Crossglen farmhouse basement </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse2.html#beetle%22>Haunted house </a> </p>">
          <td class="icon">
              <span class="hidden">crossglen_beetle</span>
              <a href="#beetle"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Beetle
          </td>
          <td>4</td>
          <td>70</td>
          <td>
              3
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  8
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="small_wasp" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/crossglen.html#small_wasp%22>Crossglen </a> </p>">
          <td class="icon">
              <span class="hidden">crossglen_wasp</span>
              <a href="#small_wasp"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Small wasp
          </td>
          <td>4</td>
          <td>70</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  6
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="grass_ant" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields1.html#grass_ant%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields5.html#grass_ant%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields6.html#grass_ant%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven0.html#grass_ant%22>Way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">fieldcritter_0</span>
              <a href="#grass_ant"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Grasslands ant
          </td>
          <td>29</td>
          <td>120</td>
          <td>
              0-4
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  52
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="grass_ant2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields1.html#grass_ant2%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields5.html#grass_ant2%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields6.html#grass_ant2%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven0.html#grass_ant2%22>Way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">fieldcritter_0</span>
              <a href="#grass_ant2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Tough grasslands ant
          </td>
          <td>29</td>
          <td>125</td>
          <td>
              1-5
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  61
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="grass_beetle" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-9</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields1.html#grass_beetle%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields2.html#grass_beetle%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields4.html#grass_beetle%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields5.html#grass_beetle%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields7.html#grass_beetle%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven0.html#grass_beetle%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven1.html#grass_beetle%22>Way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">fieldcritter_1</span>
              <a href="#grass_beetle"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Grasslands beetle
          </td>
          <td>34</td>
          <td>120</td>
          <td>
              0-5
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  75
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="grass_beetle2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-9</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields1.html#grass_beetle2%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields2.html#grass_beetle2%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields4.html#grass_beetle2%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields5.html#grass_beetle2%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields7.html#grass_beetle2%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven0.html#grass_beetle2%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven1.html#grass_beetle2%22>Way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">fieldcritter_1</span>
              <a href="#grass_beetle2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Tough grasslands beetle
          </td>
          <td>35</td>
          <td>125</td>
          <td>
              1-6
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  88
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="fieldwasp_0" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-10</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/crossroads.html#fieldwasp_0%22>Crossroads Guardhouse </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields0.html#fieldwasp_0%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower1.html#fieldwasp_0%22>Road to Carn tower </a> </p>">
          <td class="icon">
              <span class="hidden">fieldwasp_0</span>
              <a href="#fieldwasp_0"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Frantic forest wasp
          </td>
          <td>29</td>
          <td>70</td>
          <td>
              2-6
          </td>
          <td>60</td>
          <td>3</td>
          <td>95</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  89
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="fieldwasp_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-10</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields8.html#fieldwasp_1%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower0.html#fieldwasp_1%22>Road to Carn tower </a> </p>">
          <td class="icon">
              <span class="hidden">fieldwasp_1</span>
              <a href="#fieldwasp_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Frantic forest wasp
          </td>
          <td>32</td>
          <td>70</td>
          <td>
              2-6
          </td>
          <td>70</td>
          <td>3</td>
          <td>125</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  106
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="fieldwasp_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-10</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields9.html#fieldwasp_2%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower2.html#fieldwasp_2%22>Road to Carn tower </a> </p>">
          <td class="icon">
              <span class="hidden">fieldwasp_2</span>
              <a href="#fieldwasp_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Frantic forest wasp
          </td>
          <td>35</td>
          <td>70</td>
          <td>
              2-6
          </td>
          <td>75</td>
          <td>3</td>
          <td>130</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  114
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="fieldwasp_unique" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-10</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#hadracor_waspwing%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></a> </td> <td class=%22left%22>Giant wasp wing</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/crossroads.html#fieldwasp_unique%22>Crossroads Guardhouse </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields8.html#fieldwasp_unique%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields9.html#fieldwasp_unique%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower0.html#fieldwasp_unique%22>Road to Carn tower </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower2.html#fieldwasp_unique%22>Road to Carn tower </a> </p>">
          <td class="icon">
              <span class="hidden">fieldwasp_unique</span>
              <a href="#fieldwasp_unique" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Frantic forest wasp
          </td>
          <td>70</td>
          <td>70</td>
          <td>
              2-6
          </td>
          <td>200</td>
          <td>3</td>
          <td>150</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  246
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="forest_ant" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_se.html#forest_ant%22>Fallhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_sw.html#forest_ant%22>Fallhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gapfiller2.html#forest_ant%22>Gapfiller </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gapfiller3.html#forest_ant%22>Gapfiller </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild2.html#forest_ant%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild3.html#forest_ant%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild9.html#forest_ant%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestant</span>
              <a href="#forest_ant"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Forest ant
          </td>
          <td>4</td>
          <td>90</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td>10</td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  6
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="yellow_forest_ant" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_se.html#yellow_forest_ant%22>Fallhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_sw.html#yellow_forest_ant%22>Fallhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gapfiller2.html#yellow_forest_ant%22>Gapfiller </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gapfiller3.html#yellow_forest_ant%22>Gapfiller </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild2.html#yellow_forest_ant%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild3.html#yellow_forest_ant%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild9.html#yellow_forest_ant%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestant</span>
              <a href="#yellow_forest_ant"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Yellow forest ant
          </td>
          <td>5</td>
          <td>100</td>
          <td>
              2
          </td>
          <td></td>
          <td></td>
          <td>15</td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  9
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="forest_beetle" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone0.html#forest_beetle%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gapfiller1.html#forest_beetle%22>Gapfiller </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gapfiller2.html#forest_beetle%22>Gapfiller </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild11.html#forest_beetle%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild16.html#forest_beetle%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild17.html#forest_beetle%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild6.html#forest_beetle%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild7.html#forest_beetle%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestbeetle</span>
              <a href="#forest_beetle"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Forest Beetle
          </td>
          <td>14</td>
          <td>150</td>
          <td>
              2-4
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>2</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  38
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="dungfly1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar0.html#dungfly1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar1.html#dungfly1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#dungfly1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#dungfly1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar2.html#dungfly1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar3.html#dungfly1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar4.html#dungfly1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5.html#dungfly1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar9.html#dungfly1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads1.html#dungfly1%22>Road before crossroads </a> </p>">
          <td class="icon">
              <span class="hidden">forestfly1</span>
              <a href="#dungfly1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Giant dungfly
          </td>
          <td>16</td>
          <td>55</td>
          <td>
              4-5
          </td>
          <td>25</td>
          <td>2</td>
          <td>20</td>
          <td>1</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  44
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="dungfly2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar0.html#dungfly2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar1.html#dungfly2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#dungfly2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#dungfly2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar2.html#dungfly2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar3.html#dungfly2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar4.html#dungfly2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar5.html#dungfly2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar9.html#dungfly2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads1.html#dungfly2%22>Road before crossroads </a> </p>">
          <td class="icon">
              <span class="hidden">forestfly1</span>
              <a href="#dungfly2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Aggressive dungfly
          </td>
          <td>23</td>
          <td>60</td>
          <td>
              5-7
          </td>
          <td>10</td>
          <td>2</td>
          <td>35</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  68
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="dungfly3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#dungfly3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar2.html#dungfly3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar3.html#dungfly3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar4.html#dungfly3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar9.html#dungfly3%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">forestfly2</span>
              <a href="#dungfly3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Vicious dungfly
          </td>
          <td>34</td>
          <td>75</td>
          <td>
              7-8
          </td>
          <td>10</td>
          <td>2</td>
          <td>45</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  96
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="forest_wasp" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild0.html#forest_wasp%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild1.html#forest_wasp%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild10.html#forest_wasp%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild12.html#forest_wasp%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild3.html#forest_wasp%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild4.html#forest_wasp%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild6.html#forest_wasp%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestwasp</span>
              <a href="#forest_wasp"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Forest wasp
          </td>
          <td>6</td>
          <td>70</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  7
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="stinging_wasp" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild11.html#stinging_wasp%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild5.html#stinging_wasp%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild8.html#stinging_wasp%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild9.html#stinging_wasp%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestwasp2</span>
              <a href="#stinging_wasp"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Stinging wasp
          </td>
          <td>15</td>
          <td>150</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  22
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="young_larval_burrower" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild0.html#young_larval_burrower%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodcave0.html#young_larval_burrower%22>Wood cave </a> </p>">
          <td class="icon">
              <span class="hidden">larva_1</span>
              <a href="#young_larval_burrower"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Young larval burrower
          </td>
          <td>30</td>
          <td>120</td>
          <td>
              1-6
          </td>
          <td>35</td>
          <td>3</td>
          <td>25</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  63
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="larval_burrower" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-9</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodcave0.html#larval_burrower%22>Wood cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodcave1.html#larval_burrower%22>Wood cave </a> </p>">
          <td class="icon">
              <span class="hidden">larva_2</span>
              <a href="#larval_burrower"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Larval burrower
          </td>
          <td>35</td>
          <td>120</td>
          <td>
              1-6
          </td>
          <td>35</td>
          <td>3</td>
          <td>25</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  67
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="larval_boss" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#erinith_book%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_books.png%22 alt=%22items_books.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Erinith's book</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-9</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodcave1.html#larval_boss%22>Wood cave </a> </p>">
          <td class="icon">
              <span class="hidden">larva_boss</span>
              <a href="#larval_boss" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Strong larval burrower
          </td>
          <td>35</td>
          <td>120</td>
          <td>
              1-6
          </td>
          <td>35</td>
          <td>3</td>
          <td>25</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  67
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="yellow_cave_ant" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/jan_pitcave1.html#yellow_cave_ant%22>Jan pitcave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/jan_pitcave2.html#yellow_cave_ant%22>Jan pitcave </a> </p>">
          <td class="icon">
              <span class="hidden">pitcave1</span>
              <a href="#yellow_cave_ant"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Yellow cave ant
          </td>
          <td>20</td>
          <td>30</td>
          <td>
              1
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>  28
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="plaguesp_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -384px%22></div> </td> <td class=%22left%22>Dead spider</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake0.html#plaguesp_1%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake1.html#plaguesp_1%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake2.html#plaguesp_1%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake4.html#plaguesp_1%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_1</span>
              <a href="#plaguesp_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -96px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Puny Plaguecrawler
          </td>
          <td>55</td>
          <td>80</td>
          <td>
              1-6
          </td>
          <td>60</td>
          <td>3</td>
          <td>140</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  192
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Blistering skin (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="plaguesp_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -384px%22></div> </td> <td class=%22left%22>Dead spider</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake0.html#plaguesp_2%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake1.html#plaguesp_2%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake2.html#plaguesp_2%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake4.html#plaguesp_2%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_1</span>
              <a href="#plaguesp_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -96px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Plaguecrawler
          </td>
          <td>57</td>
          <td>80</td>
          <td>
              1-6
          </td>
          <td>60</td>
          <td>3</td>
          <td>140</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  196
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Blistering skin 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="plaguesp_3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -384px%22></div> </td> <td class=%22left%22>Dead spider</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake0.html#plaguesp_3%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake1.html#plaguesp_3%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake2.html#plaguesp_3%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake4.html#plaguesp_3%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_1</span>
              <a href="#plaguesp_3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -96px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Tough Plaguecrawler
          </td>
          <td>59</td>
          <td>80</td>
          <td>
              1-6
          </td>
          <td>60</td>
          <td>3</td>
          <td>140</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  199
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Blistering skin 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="plaguesp_4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -384px%22></div> </td> <td class=%22left%22>Dead spider</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake0.html#plaguesp_4%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake0.html#plaguesp_4%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake1.html#plaguesp_4%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake2.html#plaguesp_4%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake3.html#plaguesp_4%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_2</span>
              <a href="#plaguesp_4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -96px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Black Plaguecrawler
          </td>
          <td>61</td>
          <td>80</td>
          <td>
              1-6
          </td>
          <td>60</td>
          <td>3</td>
          <td>150</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  207
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Blistering skin 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion 4x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="plaguesp_5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -384px%22></div> </td> <td class=%22left%22>Dead spider</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake0.html#plaguesp_5%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake0.html#plaguesp_5%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake1.html#plaguesp_5%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake2.html#plaguesp_5%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake3.html#plaguesp_5%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_2</span>
              <a href="#plaguesp_5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -352px">
              </a>
          </td>
          <td class="left name drop">
              Plaguestrider
          </td>
          <td>62</td>
          <td>80</td>
          <td>
              2-6
          </td>
          <td>60</td>
          <td>3</td>
          <td>150</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  215
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Blistering skin 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion 4x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="plaguesp_6" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -384px%22></div> </td> <td class=%22left%22>Dead spider</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake0.html#plaguesp_6%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake0.html#plaguesp_6%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake1.html#plaguesp_6%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake2.html#plaguesp_6%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake3.html#plaguesp_6%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_2</span>
              <a href="#plaguesp_6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -352px">
              </a>
          </td>
          <td class="left name drop">
              Hardshell Plaguestrider
          </td>
          <td>63</td>
          <td>80</td>
          <td>
              2-6
          </td>
          <td>60</td>
          <td>3</td>
          <td>150</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  217
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Blistering skin 4x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion 5x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="plaguesp_7" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -384px%22></div> </td> <td class=%22left%22>Dead spider</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake0.html#plaguesp_7%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake2.html#plaguesp_7%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake3.html#plaguesp_7%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake4.html#plaguesp_7%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_3</span>
              <a href="#plaguesp_7"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -352px">
              </a>
          </td>
          <td class="left name drop">
              Tough Plaguestrider
          </td>
          <td>64</td>
          <td>80</td>
          <td>
              2-6
          </td>
          <td>70</td>
          <td>3</td>
          <td>155</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  227
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Blistering skin 4x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion 5x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="plaguesp_8" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -384px%22></div> </td> <td class=%22left%22>Dead spider</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake0.html#plaguesp_8%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake2.html#plaguesp_8%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake3.html#plaguesp_8%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake4.html#plaguesp_8%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_3</span>
              <a href="#plaguesp_8"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Wooly Plaguestrider
          </td>
          <td>65</td>
          <td>80</td>
          <td>
              2-6
          </td>
          <td>70</td>
          <td>3</td>
          <td>155</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  229
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Blistering skin 5x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion 6x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="plaguesp_9" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -384px%22></div> </td> <td class=%22left%22>Dead spider</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake0.html#plaguesp_9%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake2.html#plaguesp_9%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake3.html#plaguesp_9%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake4.html#plaguesp_9%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_3</span>
              <a href="#plaguesp_9"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Tough wooly Plaguestrider
          </td>
          <td>66</td>
          <td>80</td>
          <td>
              2-7
          </td>
          <td>70</td>
          <td>3</td>
          <td>160</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  241
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Blistering skin 5x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion 6x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="plaguesp_10" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -384px%22></div> </td> <td class=%22left%22>Dead spider</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake4.html#plaguesp_10%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake5.html#plaguesp_10%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_4</span>
              <a href="#plaguesp_10"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -352px">
              </a>
          </td>
          <td class="left name drop">
              Vile Plaguestrider
          </td>
          <td>67</td>
          <td>85</td>
          <td>
              2-7
          </td>
          <td>70</td>
          <td>3</td>
          <td>160</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  247
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Blistering skin 5x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion 6x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="plaguesp_11" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -384px%22></div> </td> <td class=%22left%22>Dead spider</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake4.html#plaguesp_11%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake5.html#plaguesp_11%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_4</span>
              <a href="#plaguesp_11"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Nesting Plaguestrider
          </td>
          <td>68</td>
          <td>85</td>
          <td>
              2-7
          </td>
          <td>70</td>
          <td>3</td>
          <td>165</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  251
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Blistering skin 5x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion 6x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="cbeetle_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave0.html#cbeetle_1%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave1.html#cbeetle_1%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave2.html#cbeetle_1%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave3.html#cbeetle_1%22>Mountain cave </a> </p>">
          <td class="icon">
              <span class="hidden">scaradon_1</span>
              <a href="#cbeetle_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -96px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Young carrion beetle
          </td>
          <td>45</td>
          <td>65</td>
          <td>
              0-5
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td>9</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  105
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cbeetle_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave0.html#cbeetle_2%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave1.html#cbeetle_2%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave2.html#cbeetle_2%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave3.html#cbeetle_2%22>Mountain cave </a> </p>">
          <td class="icon">
              <span class="hidden">scaradon_1</span>
              <a href="#cbeetle_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -96px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Carrion beetle
          </td>
          <td>51</td>
          <td>75</td>
          <td>
              0-5
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td>9</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  111
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="scaradon_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave0.html#scaradon_1%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave1.html#scaradon_1%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave2.html#scaradon_1%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave3.html#scaradon_1%22>Mountain cave </a> </p>">
          <td class="icon">
              <span class="hidden">scaradon_1</span>
              <a href="#scaradon_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -576px">
              </a>
          </td>
          <td class="left name drop">
              Young Scaradon
          </td>
          <td>32</td>
          <td>50</td>
          <td>
              0-4
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td>15</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  130
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="scaradon_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave1.html#scaradon_2%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave2.html#scaradon_2%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake0.html#scaradon_2%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">scaradon_2</span>
              <a href="#scaradon_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -576px">
              </a>
          </td>
          <td class="left name drop">
              Small Scaradon
          </td>
          <td>35</td>
          <td>50</td>
          <td>
              1-4
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td>15</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  135
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="scaradon_3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave1.html#scaradon_3%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave2.html#scaradon_3%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake0.html#scaradon_3%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">scaradon_2</span>
              <a href="#scaradon_3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -544px">
              </a>
          </td>
          <td class="left name drop">
              Scaradon
          </td>
          <td>35</td>
          <td>50</td>
          <td>
              0-4
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td>17</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  146
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="scaradon_4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave1.html#scaradon_4%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave2.html#scaradon_4%22>Mountain cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake0.html#scaradon_4%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">scaradon_2</span>
              <a href="#scaradon_4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -544px">
              </a>
          </td>
          <td class="left name drop">
              Tough Scaradon
          </td>
          <td>37</td>
          <td>50</td>
          <td>
              1-4
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td>17</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  149
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="scaradon_5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-12</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_rough_life%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Rough ring of life force</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -384px%22></div> </td> <td class=%22left%22>Insect shell</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountaincave2.html#scaradon_5%22>Mountain cave </a> </p>">
          <td class="icon">
              <span class="hidden">scaradon_3</span>
              <a href="#scaradon_5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -544px">
              </a>
          </td>
          <td class="left name drop">
              Hardshell Scaradon
          </td>
          <td>38</td>
          <td>50</td>
          <td>
              1-5
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td>18</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  158
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="vermin2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-1</td> <td>20%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarhouse1.html#vermin2%22>Lodar house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodhouse2.html#vermin2%22>Wood house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodhouse3.html#vermin2%22>Wood house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/woodsettlement0.html#vermin2%22>Wood settlement </a> </p>">
          <td class="icon">
              <span class="hidden">vermin</span>
              <a href="#vermin2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik10.png" alt="monsters_tometik10.png" style="margin: -224px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Roach
          </td>
          <td>1</td>
          <td>10</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td></td>
          <td>10</td>
          <td>4</td>
          <td>10</td>
          <td>  1
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="yjacket1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#yjacket1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#yjacket1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar4.html#yjacket1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#yjacket1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#yjacket1%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">yjacket1</span>
              <a href="#yjacket1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Puny yellowjacket
          </td>
          <td>31</td>
          <td>74</td>
          <td>
              3-4
          </td>
          <td>20</td>
          <td>3</td>
          <td>53</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  110
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Minor sting (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#sting_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -224px">
  </a>

          
          </td>
      </tr>
      <tr id="yjacket2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#yjacket2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#yjacket2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar4.html#yjacket2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#yjacket2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#yjacket2%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">yjacket1</span>
              <a href="#yjacket2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Small yellowjacket
          </td>
          <td>37</td>
          <td>79</td>
          <td>
              3-4
          </td>
          <td>20</td>
          <td>3</td>
          <td>57</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  119
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Minor sting (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#sting_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -224px">
  </a>

          
          </td>
      </tr>
      <tr id="yjacket3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#yjacket3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#yjacket3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar4.html#yjacket3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#yjacket3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#yjacket3%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">yjacket1</span>
              <a href="#yjacket3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -384px">
              </a>
          </td>
          <td class="left name drop">
              Swarming yellowjacket
          </td>
          <td>42</td>
          <td>85</td>
          <td>
              3-4
          </td>
          <td>20</td>
          <td>3</td>
          <td>63</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  128
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Minor sting 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#sting_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -224px">
  </a>

          
          </td>
      </tr>
      <tr id="yjacket4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#yjacket4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#yjacket4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar15.html#yjacket4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar16.html#yjacket4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#yjacket4%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">yjacket2</span>
              <a href="#yjacket4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -384px">
              </a>
          </td>
          <td class="left name drop">
              Stinging yellowjacket
          </td>
          <td>48</td>
          <td>92</td>
          <td>
              3-4
          </td>
          <td>20</td>
          <td>3</td>
          <td>69</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  140
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Minor sting 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#sting_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -224px">
  </a>

          
          </td>
      </tr>
      <tr id="yjacket5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#yjacket5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#yjacket5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar15.html#yjacket5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar16.html#yjacket5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#yjacket5%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">yjacket2</span>
              <a href="#yjacket5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -384px">
              </a>
          </td>
          <td class="left name drop">
              Quick yellowjacket
          </td>
          <td>53</td>
          <td>101</td>
          <td>
              3-4
          </td>
          <td>20</td>
          <td>3</td>
          <td>74</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  151
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Minor sting 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#sting_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -224px">
  </a>

          
          </td>
      </tr>
      <tr id="yjacket6" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#yjacket6%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar15.html#yjacket6%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">yjacket3</span>
              <a href="#yjacket6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -384px">
              </a>
          </td>
          <td class="left name drop">
              Aggressive yellowjacket
          </td>
          <td>58</td>
          <td>112</td>
          <td>
              3-4
          </td>
          <td>20</td>
          <td>3</td>
          <td>81</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  163
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Minor sting 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#sting_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -224px">
  </a>

          
          </td>
      </tr>
      <tr id="yjacket7" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#yjacket7%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar15.html#yjacket7%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">yjacket3</span>
              <a href="#yjacket7"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -352px">
              </a>
          </td>
          <td class="left name drop">
              Enraged yellowjacket
          </td>
          <td>66</td>
          <td>118</td>
          <td>
              3-4
          </td>
          <td>20</td>
          <td>3</td>
          <td>87</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  179
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Minor sting 3x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#sting_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -224px">
  </a>

          
          </td>
      </tr>
      <tr id="yjacket8" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#yjacket8%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar15.html#yjacket8%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar16.html#yjacket8%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">yjacket4</span>
              <a href="#yjacket8"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_insects.png" alt="monsters_insects.png" style="margin: -0px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Giant yellowjacket
          </td>
          <td>74</td>
          <td>126</td>
          <td>
              3-4
          </td>
          <td>20</td>
          <td>3</td>
          <td>93</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  180
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Minor sting 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#sting_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -224px">
  </a>

          
          </td>
      </tr>
      <tr id="yjacket9" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>2-4</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -320px%22></div> </td> <td class=%22left%22>Insect wing</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar15.html#yjacket9%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">yjacket5</span>
              <a href="#yjacket9"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -0px 0px 0px -544px">
              </a>
          </td>
          <td class="left name drop">
              Yellowjacket queen
          </td>
          <td>87</td>
          <td>147</td>
          <td>
              5-7
          </td>
          <td>35</td>
          <td>3</td>
          <td>125</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  277
</td>
          <td class="cond">
          
          
          </td>
      </tr>
    </tbody>
    </table>
     <h2>Reptile</h2>
     <table class="monster" id="reptiles" width="80%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>HP</th> <th>AC%</th> <th>Dmg</th> <th>Crit</th> <th>Crit*</th> <th>BC%</th> <th>Dmg resis</th> <th>AP</th> <th>Attack cost</th> <th>Move cost</th> <th>XP</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="cave_snake" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-6</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/snakecave1.html#cave_snake%22>Snake cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/snakecave2.html#cave_snake%22>Snake cave </a> </p>">
          <td class="icon">
              <span class="hidden">cavesnake1</span>
              <a href="#cave_snake"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png" alt="monsters_snakes.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Cave Snake
          </td>
          <td>12</td>
          <td>110</td>
          <td>
              2
          </td>
          <td>20</td>
          <td>2</td>
          <td>15</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  23
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="young_cave_snake" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-6</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/snakecave1.html#young_cave_snake%22>Snake cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/snakecave2.html#young_cave_snake%22>Snake cave </a> </p>">
          <td class="icon">
              <span class="hidden">cavesnake1</span>
              <a href="#young_cave_snake"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png" alt="monsters_snakes.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Young Cave Snake
          </td>
          <td>8</td>
          <td>110</td>
          <td>
              2
          </td>
          <td>10</td>
          <td>2</td>
          <td>10</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  18
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="tough_cave_snake" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-6</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/snakecave2.html#tough_cave_snake%22>Snake cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/snakecave3.html#tough_cave_snake%22>Snake cave </a> </p>">
          <td class="icon">
              <span class="hidden">cavesnake2</span>
              <a href="#tough_cave_snake"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png" alt="monsters_snakes.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Tough Cave Snake
          </td>
          <td>21</td>
          <td>110</td>
          <td>
              2
          </td>
          <td>20</td>
          <td>2</td>
          <td>15</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  30
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="venomous_cave_snake" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-6</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/snakecave2.html#venomous_cave_snake%22>Snake cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/snakecave3.html#venomous_cave_snake%22>Snake cave </a> </p>">
          <td class="icon">
              <span class="hidden">cavesnake2</span>
              <a href="#venomous_cave_snake"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png" alt="monsters_snakes.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Venomous Cave Snake
          </td>
          <td>15</td>
          <td>110</td>
          <td>
              2
          </td>
          <td>40</td>
          <td>2</td>
          <td>10</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  79
</td>
          <td class="cond">
            <a title="On hit
  On target
    10% chance of Weak Poison (1 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="basilisk" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -160px%22></div> </td> <td class=%22left%22>Claws</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-8</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone0.html#basilisk%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone2.html#basilisk%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone3.html#basilisk%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road4.html#basilisk%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road4_gargoylecave.html#basilisk%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/snakecave2.html#basilisk%22>Snake cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/snakecave3.html#basilisk%22>Snake cave </a> </p>">
          <td class="icon">
              <span class="hidden">cavesnake2_boss</span>
              <a href="#basilisk"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rats.png" alt="monsters_rats.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Basilisk
          </td>
          <td>40</td>
          <td>40</td>
          <td>
              3-9
          </td>
          <td></td>
          <td></td>
          <td>50</td>
          <td>2</td>
          <td>10</td>
          <td>7</td>
          <td>10</td>
          <td>  60
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="erumen_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway11.html#erumen_1%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway11_east.html#erumen_1%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway12.html#erumen_1%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway13.html#erumen_1%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway6.html#erumen_1%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway7.html#erumen_1%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven1.html#erumen_1%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven2.html#erumen_1%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven3.html#erumen_1%22>Way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">erumen_1</span>
              <a href="#erumen_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Young Erumem Lizard
          </td>
          <td>45</td>
          <td>125</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  126
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="erumen_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway11.html#erumen_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway11_east.html#erumen_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway12.html#erumen_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway13.html#erumen_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway6.html#erumen_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway7.html#erumen_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven1.html#erumen_2%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven2.html#erumen_2%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven3.html#erumen_2%22>Way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">erumen_1</span>
              <a href="#erumen_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Spotted Erumem Lizard
          </td>
          <td>45</td>
          <td>125</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  126
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="erumen_3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway11.html#erumen_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway12.html#erumen_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway13.html#erumen_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway8.html#erumen_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway9.html#erumen_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven2.html#erumen_3%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven3.html#erumen_3%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave0.html#erumen_3%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave4.html#erumen_3%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">erumen_2</span>
              <a href="#erumen_3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Erumem Lizard
          </td>
          <td>45</td>
          <td>125</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  126
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="erumen_4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway11.html#erumen_4%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway12.html#erumen_4%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway13.html#erumen_4%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway8.html#erumen_4%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway9.html#erumen_4%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven2.html#erumen_4%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven3.html#erumen_4%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave0.html#erumen_4%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave4.html#erumen_4%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">erumen_2</span>
              <a href="#erumen_4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -480px">
              </a>
          </td>
          <td class="left name drop">
              Strong Erumen Lizard
          </td>
          <td>79</td>
          <td>125</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  169
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="erumen_5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway10.html#erumen_5%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway8.html#erumen_5%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway9.html#erumen_5%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven2.html#erumen_5%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave0.html#erumen_5%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave1.html#erumen_5%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave1a.html#erumen_5%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave4.html#erumen_5%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">erumen_3</span>
              <a href="#erumen_5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -480px">
              </a>
          </td>
          <td class="left name drop">
              Vile Erumen Lizard
          </td>
          <td>89</td>
          <td>150</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  190
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="erumen_6" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway10.html#erumen_6%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway8.html#erumen_6%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway9.html#erumen_6%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven2.html#erumen_6%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave0.html#erumen_6%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave1.html#erumen_6%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave1a.html#erumen_6%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave4.html#erumen_6%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">erumen_3</span>
              <a href="#erumen_6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -544px">
              </a>
          </td>
          <td class="left name drop">
              Tough Erumen Lizard
          </td>
          <td>91</td>
          <td>125</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>90</td>
          <td>8</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  215
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="erumen_7" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-9</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway11.html#erumen_7%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway11_east.html#erumen_7%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway9.html#erumen_7%22>Waterway </a> </p>">
          <td class="icon">
              <span class="hidden">erumen_4</span>
              <a href="#erumen_7"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -544px">
              </a>
          </td>
          <td class="left name drop">
              Hardened Erumen Lizard
          </td>
          <td>93</td>
          <td>125</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>90</td>
          <td>12</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  243
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="erumen_8" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar13.html#erumen_8%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#erumen_8%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar6.html#erumen_8%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#erumen_8%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">erumen_f1</span>
              <a href="#erumen_8"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png" alt="monsters_tometik2.png" style="margin: -32px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Young erumem forest lizard
          </td>
          <td>92</td>
          <td>124</td>
          <td>
              4-7
          </td>
          <td>10</td>
          <td>3</td>
          <td>59</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  140
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="erumen_9" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar13.html#erumen_9%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#erumen_9%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar6.html#erumen_9%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#erumen_9%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">erumen_f1</span>
              <a href="#erumen_9"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png" alt="monsters_tometik2.png" style="margin: -32px 0px 0px -224px">
              </a>
          </td>
          <td class="left name drop">
              Erumem forest lizard
          </td>
          <td>107</td>
          <td>146</td>
          <td>
              6-7
          </td>
          <td>10</td>
          <td>3</td>
          <td>65</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  176
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="erumen_10" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar6.html#erumen_10%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">erumen_f2</span>
              <a href="#erumen_10"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik1.png" alt="monsters_tometik1.png" style="margin: -224px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Erumem forest lizard matriarch
          </td>
          <td>114</td>
          <td>166</td>
          <td>
              7-8
          </td>
          <td>15</td>
          <td>3</td>
          <td>73</td>
          <td>9</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  309
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="grass_snake" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-15</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields3.html#grass_snake%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields4.html#grass_snake%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/loneford1.html#grass_snake%22>Loneford </a> </p>">
          <td class="icon">
              <span class="hidden">fieldcritter_2</span>
              <a href="#grass_snake"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Grasslands snake
          </td>
          <td>36</td>
          <td>120</td>
          <td>
              0-6
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  69
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="grass_snake2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-15</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields3.html#grass_snake2%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields4.html#grass_snake2%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/loneford1.html#grass_snake2%22>Loneford </a> </p>">
          <td class="icon">
              <span class="hidden">fieldcritter_2</span>
              <a href="#grass_snake2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Tough grasslands snake
          </td>
          <td>38</td>
          <td>125</td>
          <td>
              1-7
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  80
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="grass_lizard" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-17</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields2.html#grass_lizard%22>Fields </a> </p>">
          <td class="icon">
              <span class="hidden">fieldcritter_3</span>
              <a href="#grass_lizard"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Grasslands lizard
          </td>
          <td>45</td>
          <td>120</td>
          <td>
              0-8
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  106
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="grass_lizard2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-17</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields2.html#grass_lizard2%22>Fields </a> </p>">
          <td class="icon">
              <span class="hidden">fieldcritter_3</span>
              <a href="#grass_lizard2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -544px">
              </a>
          </td>
          <td class="left name drop">
              Black grasslands lizard
          </td>
          <td>45</td>
          <td>125</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  126
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="forest_serpent" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>7-12</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone0.html#forest_serpent%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads.html#forest_serpent%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads1.html#forest_serpent%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads2.html#forest_serpent%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild10.html#forest_serpent%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild12.html#forest_serpent%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild13.html#forest_serpent%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild7.html#forest_serpent%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestserpent1</span>
              <a href="#forest_serpent"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png" alt="monsters_snakes.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Forest serpent
          </td>
          <td>20</td>
          <td>150</td>
          <td>
              2-3
          </td>
          <td>30</td>
          <td>2</td>
          <td>60</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  61
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="vicious_forest_serpent" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>7-12</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road1.html#vicious_forest_serpent%22>Foaming Flask Tavern </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road2.html#vicious_forest_serpent%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road3.html#vicious_forest_serpent%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road4.html#vicious_forest_serpent%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads4.html#vicious_forest_serpent%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads5.html#vicious_forest_serpent%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads6.html#vicious_forest_serpent%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads8.html#vicious_forest_serpent%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads9.html#vicious_forest_serpent%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild14.html#vicious_forest_serpent%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild8.html#vicious_forest_serpent%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestserpent2</span>
              <a href="#vicious_forest_serpent"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png" alt="monsters_snakes.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Vicious forest serpent
          </td>
          <td>27</td>
          <td>150</td>
          <td>
              3-4
          </td>
          <td>30</td>
          <td>2</td>
          <td>50</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  82
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="forest_snake" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-6</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild2.html#forest_snake%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild5.html#forest_snake%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">forestsnake</span>
              <a href="#forest_snake"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png" alt="monsters_snakes.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Forest Snake
          </td>
          <td>7</td>
          <td>110</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td>10</td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  9
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="frog_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields11.html#frog_1%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields7.html#frog_1%22>Fields </a> </p>">
          <td class="icon">
              <span class="hidden">frog_1</span>
              <a href="#frog_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -192px 0px 0px -352px">
              </a>
          </td>
          <td class="left name drop">
              River frog
          </td>
          <td>15</td>
          <td>150</td>
          <td>
              0-5
          </td>
          <td></td>
          <td></td>
          <td>45</td>
          <td></td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  55
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="frog_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields11.html#frog_2%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields12.html#frog_2%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway2.html#frog_2%22>Waterway </a> </p>">
          <td class="icon">
              <span class="hidden">frog_2</span>
              <a href="#frog_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -192px 0px 0px -352px">
              </a>
          </td>
          <td class="left name drop">
              Tough river frog
          </td>
          <td>17</td>
          <td>160</td>
          <td>
              0-5
          </td>
          <td></td>
          <td></td>
          <td>49</td>
          <td></td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  60
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="frog_3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fields12.html#frog_3%22>Fields </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway0.html#frog_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway1.html#frog_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway14.html#frog_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway15.html#frog_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway2.html#frog_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway3.html#frog_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway4.html#frog_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway5.html#frog_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterwayextention.html#frog_3%22>Waterway </a> </p>">
          <td class="icon">
              <span class="hidden">frog_3</span>
              <a href="#frog_3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -192px 0px 0px -320px">
              </a>
          </td>
          <td class="left name drop">
              Poisonous river frog
          </td>
          <td>21</td>
          <td>165</td>
          <td>
              0-5
          </td>
          <td></td>
          <td></td>
          <td>55</td>
          <td></td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  117
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Weak Poison 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="slithering_venomfang" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-10</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain1.html#slithering_venomfang%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain15.html#slithering_venomfang%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain16.html#slithering_venomfang%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain2.html#slithering_venomfang%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain3.html#slithering_venomfang%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain7.html#slithering_venomfang%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain9.html#slithering_venomfang%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">gornaud_1</span>
              <a href="#slithering_venomfang"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png" alt="monsters_snakes.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Slithering venomfang
          </td>
          <td>35</td>
          <td>120</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td>90</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  121
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Weak Poison (2 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="scaled_venomfang" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-10</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain15.html#scaled_venomfang%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain16.html#scaled_venomfang%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain17.html#scaled_venomfang%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain18.html#scaled_venomfang%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain3.html#scaled_venomfang%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain4.html#scaled_venomfang%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">gornaud_2</span>
              <a href="#scaled_venomfang"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png" alt="monsters_snakes.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Scaled venomfang
          </td>
          <td>35</td>
          <td>150</td>
          <td>
              2-4
          </td>
          <td></td>
          <td></td>
          <td>90</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  138
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Weak Poison (2 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="tough_venomfang" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-10</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain17.html#tough_venomfang%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain18.html#tough_venomfang%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain19.html#tough_venomfang%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">gornaud_3</span>
              <a href="#tough_venomfang"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png" alt="monsters_snakes.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Tough venomfang
          </td>
          <td>41</td>
          <td>150</td>
          <td>
              2-5
          </td>
          <td></td>
          <td></td>
          <td>90</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  151
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Weak Poison (2 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="irdegh_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -224px%22></div> </td> <td class=%22left%22>Irdegh poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway11_east.html#irdegh_1%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytomountaincave0.html#irdegh_1%22>Cave on way to mountain </a> </p>">
          <td class="icon">
              <span class="hidden">irdegh_1</span>
              <a href="#irdegh_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -0px 0px 0px -480px">
              </a>
          </td>
          <td class="left name drop">
              Irdegh
          </td>
          <td>115</td>
          <td>120</td>
          <td>
              3-7
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>10</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  280
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Irdegh poison 3x (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_irdegh">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="irdegh_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -224px%22></div> </td> <td class=%22left%22>Irdegh poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytomountaincave0.html#irdegh_2%22>Cave on way to mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytomountaincave1.html#irdegh_2%22>Cave on way to mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytomountaincave2.html#irdegh_2%22>Cave on way to mountain </a> </p>">
          <td class="icon">
              <span class="hidden">irdegh_2</span>
              <a href="#irdegh_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -0px 0px 0px -480px">
              </a>
          </td>
          <td class="left name drop">
              Venomous Irdegh
          </td>
          <td>120</td>
          <td>120</td>
          <td>
              3-7
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>11</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  292
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Irdegh poison 3x (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_irdegh">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="irdegh_3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -224px%22></div> </td> <td class=%22left%22>Irdegh poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytomountaincave1.html#irdegh_3%22>Cave on way to mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytomountaincave2.html#irdegh_3%22>Cave on way to mountain </a> </p>">
          <td class="icon">
              <span class="hidden">irdegh_3</span>
              <a href="#irdegh_3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -0px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Piercing Irdegh
          </td>
          <td>125</td>
          <td>120</td>
          <td>
              3-7
          </td>
          <td>10</td>
          <td>2</td>
          <td>60</td>
          <td>11</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  305
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Irdegh poison 3x (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_irdegh">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="irdegh_4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -224px%22></div> </td> <td class=%22left%22>Irdegh poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_crude_combat%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude combat ring</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytomountaincave2.html#irdegh_4%22>Cave on way to mountain </a> </p>">
          <td class="icon">
              <span class="hidden">irdegh_4</span>
              <a href="#irdegh_4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -0px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Ancient piercing Irdegh
          </td>
          <td>130</td>
          <td>120</td>
          <td>
              3-7
          </td>
          <td>30</td>
          <td>2</td>
          <td>60</td>
          <td>14</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  345
</td>
          <td class="cond">
            <a title="On hit
  On target
    70% chance of Irdegh poison 3x (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_irdegh">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="irdegh_sp_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway11_east.html#irdegh_sp_1%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytomountaincave0.html#irdegh_sp_1%22>Cave on way to mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytomountaincave1.html#irdegh_sp_1%22>Cave on way to mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytomountaincave2.html#irdegh_sp_1%22>Cave on way to mountain </a> </p>">
          <td class="icon">
              <span class="hidden">irdegh_spawn</span>
              <a href="#irdegh_sp_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -192px">
              </a>
          </td>
          <td class="left name drop">
              Irdegh spawn
          </td>
          <td>57</td>
          <td>120</td>
          <td>
              0-6
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td></td>
          <td>12</td>
          <td>3</td>
          <td>5</td>
          <td>  153
</td>
          <td class="cond">
            <a title="On hit
  On target
    10% chance of Irdegh poison 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_irdegh">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="irdegh_sp_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway11_east.html#irdegh_sp_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytomountaincave0.html#irdegh_sp_2%22>Cave on way to mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytomountaincave1.html#irdegh_sp_2%22>Cave on way to mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytomountaincave2.html#irdegh_sp_2%22>Cave on way to mountain </a> </p>">
          <td class="icon">
              <span class="hidden">irdegh_spawn</span>
              <a href="#irdegh_sp_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -192px">
              </a>
          </td>
          <td class="left name drop">
              Irdegh spawn
          </td>
          <td>68</td>
          <td>120</td>
          <td>
              0-6
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td></td>
          <td>12</td>
          <td>3</td>
          <td>5</td>
          <td>  166
</td>
          <td class="cond">
            <a title="On hit
  On target
    10% chance of Irdegh poison 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_irdegh">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="izthiel_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-15</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#izthiel_claw%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -160px%22></a> </td> <td class=%22left%22>Izthiel claw</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_jinxed1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Jinxed ring of damage resistance</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway0.html#izthiel_1%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway1.html#izthiel_1%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway10.html#izthiel_1%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway11.html#izthiel_1%22>Waterway </a> </p>">
          <td class="icon">
              <span class="hidden">izthiel_1</span>
              <a href="#izthiel_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -352px">
              </a>
          </td>
          <td class="left name drop">
              Young Izthiel
          </td>
          <td>40</td>
          <td>70</td>
          <td>
              2-7
          </td>
          <td></td>
          <td></td>
          <td>57</td>
          <td>5</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  96
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="izthiel_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-15</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#izthiel_claw%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -160px%22></a> </td> <td class=%22left%22>Izthiel claw</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_jinxed1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Jinxed ring of damage resistance</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway0.html#izthiel_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway1.html#izthiel_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway10.html#izthiel_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway11.html#izthiel_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway12.html#izthiel_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway6.html#izthiel_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway7.html#izthiel_2%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway9.html#izthiel_2%22>Waterway </a> </p>">
          <td class="icon">
              <span class="hidden">izthiel_2</span>
              <a href="#izthiel_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Izthiel
          </td>
          <td>45</td>
          <td>90</td>
          <td>
              2-7
          </td>
          <td></td>
          <td></td>
          <td>58</td>
          <td>6</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  114
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="izthiel_3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-15</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#izthiel_claw%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -160px%22></a> </td> <td class=%22left%22>Izthiel claw</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_jinxed1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Jinxed ring of damage resistance</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway1.html#izthiel_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway12.html#izthiel_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway13.html#izthiel_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway2.html#izthiel_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway3.html#izthiel_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway4.html#izthiel_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway5.html#izthiel_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway6.html#izthiel_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway7.html#izthiel_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway8.html#izthiel_3%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway9.html#izthiel_3%22>Waterway </a> </p>">
          <td class="icon">
              <span class="hidden">izthiel_3</span>
              <a href="#izthiel_3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Strong Izthiel
          </td>
          <td>52</td>
          <td>80</td>
          <td>
              2-7
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>8</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  182
</td>
          <td class="cond">
            <a title="On hit
  On target
    40% chance of Bleeding wound 2x (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#bleeding_wound">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="izthiel_4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-40</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#izthiel_claw%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -160px%22></a> </td> <td class=%22left%22>Izthiel claw</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_jinxed1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Jinxed ring of damage resistance</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shadowfang%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -96px 0px 0px -64px%22></a> </td> <td class=%22left%22>Shadowfang</td> <td>1</td> <td>0.1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway1.html#izthiel_4%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway4.html#izthiel_4%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway5.html#izthiel_4%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway6.html#izthiel_4%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway8.html#izthiel_4%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway9.html#izthiel_4%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterwayextention.html#izthiel_4%22>Waterway </a> </p>">
          <td class="icon">
              <span class="hidden">izthiel_4</span>
              <a href="#izthiel_4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -384px">
              </a>
          </td>
          <td class="left name drop">
              Izthiel Guardian
          </td>
          <td>54</td>
          <td>120</td>
          <td>
              3-7
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>11</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  218
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Bleeding wound 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#bleeding_wound">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="izthiel_cr" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#oegyth%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Oegyth crystal</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway10.html#izthiel_cr%22>Waterway </a> </p>">
          <td class="icon">
              <span class="hidden">izthiel_cr</span>
              <a href="#izthiel_cr" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -384px">
              </a>
          </td>
          <td class="left name drop">
              Izthiel Guardian
          </td>
          <td>354</td>
          <td>120</td>
          <td>
              3-7
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>11</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  554
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Bleeding wound 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#bleeding_wound">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="keknazar" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1-3</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-45</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1-2</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#necklace_shield_0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Lesser shielding necklace</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/houseatcrossroads5.html#keknazar%22>House at crossroads </a> </p>">
          <td class="icon">
              <span class="hidden">keknazar</span>
              <a href="#keknazar" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Keknazar
          </td>
          <td>90</td>
          <td>50</td>
          <td>
              3-9
          </td>
          <td>20</td>
          <td>3</td>
          <td>70</td>
          <td>8</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  178
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="khakin1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>20%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -96px%22></div> </td> <td class=%22left%22>Khakin eye</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar10.html#khakin1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar3.html#khakin1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar9.html#khakin1%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">khakin1</span>
              <a href="#khakin1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -352px">
              </a>
          </td>
          <td class="left name drop">
              Khakin spawn
          </td>
          <td>47</td>
          <td>204</td>
          <td>
              7-9
          </td>
          <td>15</td>
          <td>3</td>
          <td>69</td>
          <td>6</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  243
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="khakin2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>20%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -96px%22></div> </td> <td class=%22left%22>Khakin eye</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar10.html#khakin2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar3.html#khakin2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar9.html#khakin2%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">khakin1</span>
              <a href="#khakin2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -384px">
              </a>
          </td>
          <td class="left name drop">
              Aggressive Khakin beast
          </td>
          <td>48</td>
          <td>207</td>
          <td>
              7-9
          </td>
          <td>15</td>
          <td>3</td>
          <td>73</td>
          <td>6</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  248
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="khakin3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>20%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -96px%22></div> </td> <td class=%22left%22>Khakin eye</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar3.html#khakin3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar9.html#khakin3%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">khakin2</span>
              <a href="#khakin3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Tough Khakin beast
          </td>
          <td>49</td>
          <td>211</td>
          <td>
              7-9
          </td>
          <td>15</td>
          <td>3</td>
          <td>77</td>
          <td>6</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  253
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="khakin4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>20%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -96px%22></div> </td> <td class=%22left%22>Khakin eye</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar2.html#khakin4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar3.html#khakin4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar9.html#khakin4%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">khakin3</span>
              <a href="#khakin4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Strong Khakin beast
          </td>
          <td>50</td>
          <td>215</td>
          <td>
              7-9
          </td>
          <td>15</td>
          <td>3</td>
          <td>81</td>
          <td>6</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  259
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="teeth_critter" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -160px%22></div> </td> <td class=%22left%22>Claws</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-8</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/jan_pitcave2.html#teeth_critter%22>Jan pitcave </a> </p>">
          <td class="icon">
              <span class="hidden">pitcave2</span>
              <a href="#teeth_critter"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Teeth critter
          </td>
          <td>25</td>
          <td>60</td>
          <td>
              1
          </td>
          <td>10</td>
          <td>3</td>
          <td>70</td>
          <td></td>
          <td>10</td>
          <td>2</td>
          <td>10</td>
          <td>  38
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="young_teeth_critter" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -160px%22></div> </td> <td class=%22left%22>Claws</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-8</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/jan_pitcave2.html#young_teeth_critter%22>Jan pitcave </a> </p>">
          <td class="icon">
              <span class="hidden">pitcave2</span>
              <a href="#young_teeth_critter"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Young teeth critter
          </td>
          <td>15</td>
          <td>50</td>
          <td>
              1
          </td>
          <td></td>
          <td></td>
          <td>70</td>
          <td></td>
          <td>10</td>
          <td>2</td>
          <td>10</td>
          <td>  24
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="vscale1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -160px 0px 0px -480px%22></div> </td> <td class=%22left%22>Venomscale scales</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar16.html#vscale1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar20.html#vscale1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar21.html#vscale1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#vscale1%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">vscale1</span>
              <a href="#vscale1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -96px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Puny venomscales
          </td>
          <td>42</td>
          <td>83</td>
          <td>
              2-4
          </td>
          <td>100</td>
          <td>4</td>
          <td>103</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  201
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Weak Poison 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="vscale2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -160px 0px 0px -480px%22></div> </td> <td class=%22left%22>Venomscale scales</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar16.html#vscale2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar20.html#vscale2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar21.html#vscale2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#vscale2%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">vscale1</span>
              <a href="#vscale2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -96px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Young venomscales
          </td>
          <td>46</td>
          <td>88</td>
          <td>
              3-5
          </td>
          <td>100</td>
          <td>3</td>
          <td>109</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  219
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Weak Poison 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="vscale3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -160px 0px 0px -480px%22></div> </td> <td class=%22left%22>Venomscale scales</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar16.html#vscale3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar20.html#vscale3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar21.html#vscale3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#vscale3%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">vscale1</span>
              <a href="#vscale3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -64px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Gray venomscales
          </td>
          <td>48</td>
          <td>95</td>
          <td>
              3-6
          </td>
          <td>100</td>
          <td>3</td>
          <td>115</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  243
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Weak Poison 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="vscale4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -160px 0px 0px -480px%22></div> </td> <td class=%22left%22>Venomscale scales</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar16.html#vscale4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar17.html#vscale4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar18.html#vscale4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar19.html#vscale4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar20.html#vscale4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar21.html#vscale4%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">vscale2</span>
              <a href="#vscale4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -64px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Aggressive venomscales
          </td>
          <td>52</td>
          <td>99</td>
          <td>
              4-6
          </td>
          <td>100</td>
          <td>3</td>
          <td>119</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  268
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Weak Poison 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="vscale5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -160px 0px 0px -480px%22></div> </td> <td class=%22left%22>Venomscale scales</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar16.html#vscale5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar17.html#vscale5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar18.html#vscale5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar19.html#vscale5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar20.html#vscale5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar21.html#vscale5%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">vscale2</span>
              <a href="#vscale5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -96px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Quick venomscales
          </td>
          <td>56</td>
          <td>104</td>
          <td>
              5-6
          </td>
          <td>100</td>
          <td>3</td>
          <td>121</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  294
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Weak Poison 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="vscale6" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -160px 0px 0px -480px%22></div> </td> <td class=%22left%22>Venomscale scales</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar18.html#vscale6%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar19.html#vscale6%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar21.html#vscale6%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">vscale3</span>
              <a href="#vscale6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -96px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Vicious venomscales
          </td>
          <td>59</td>
          <td>108</td>
          <td>
              6
          </td>
          <td>100</td>
          <td>3</td>
          <td>124</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  319
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Weak Poison 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="vscale7" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -160px 0px 0px -480px%22></div> </td> <td class=%22left%22>Venomscale scales</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar18.html#vscale7%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar19.html#vscale7%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar21.html#vscale7%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">vscale3</span>
              <a href="#vscale7"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -160px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Strong venomscales
          </td>
          <td>63</td>
          <td>112</td>
          <td>
              6
          </td>
          <td>100</td>
          <td>3</td>
          <td>128</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  333
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Weak Poison 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="vscale8" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-5</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -160px 0px 0px -480px%22></div> </td> <td class=%22left%22>Venomscale scales</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar19.html#vscale8%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">vscale4</span>
              <a href="#vscale8"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png" alt="monsters_tometik4.png" style="margin: -160px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Tough venomscales
          </td>
          <td>67</td>
          <td>116</td>
          <td>
              6
          </td>
          <td>100</td>
          <td>3</td>
          <td>132</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  347
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Weak Poison 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="hatchling_white_wyrm" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-30</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain20.html#hatchling_white_wyrm%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain30.html#hatchling_white_wyrm%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">wyrm_1</span>
              <a href="#hatchling_white_wyrm"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -576px">
              </a>
          </td>
          <td class="left name drop">
              Hatchling white wyrm
          </td>
          <td>41</td>
          <td>75</td>
          <td>
              4-10
          </td>
          <td></td>
          <td></td>
          <td>130</td>
          <td>5</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  170
</td>
          <td class="cond">
            <a title="On hit
  On target
    10% chance of Minor fatigue (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fatigue_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="young_white_wyrm" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-40</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1-2</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain30.html#young_white_wyrm%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain32.html#young_white_wyrm%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain39.html#young_white_wyrm%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">wyrm_2</span>
              <a href="#young_white_wyrm"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -576px">
              </a>
          </td>
          <td class="left name drop">
              Young white wyrm
          </td>
          <td>47</td>
          <td>75</td>
          <td>
              4-10
          </td>
          <td></td>
          <td></td>
          <td>130</td>
          <td>5</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  180
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Minor fatigue (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fatigue_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="white_wyrm" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1-2</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -160px%22></div> </td> <td class=%22left%22>White wyrm claw</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-60</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1-2</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain30.html#white_wyrm%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain32.html#white_wyrm%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain37.html#white_wyrm%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">wyrm_3</span>
              <a href="#white_wyrm"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -608px">
              </a>
          </td>
          <td class="left name drop">
              White wyrm
          </td>
          <td>55</td>
          <td>75</td>
          <td>
              4-10
          </td>
          <td></td>
          <td></td>
          <td>130</td>
          <td>5</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  204
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Minor fatigue (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fatigue_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
    </tbody>
    </table>
     <h2>Humanoid</h2>
     <table class="monster" id="humanoids" width="80%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>HP</th> <th>AC%</th> <th>Dmg</th> <th>Crit</th> <th>Crit*</th> <th>BC%</th> <th>Dmg resis</th> <th>AP</th> <th>Attack cost</th> <th>Move cost</th> <th>XP</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="algangror" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#algangror_ring%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_rings_1.png%22 alt=%22items_rings_1.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Algangror's ring</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -96px%22></div> </td> <td class=%22left%22>Sharpened gem</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-20</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1-2</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>3-5</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#algangror%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Of mice and men</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#fiveidols%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>The five idols</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#remgard2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>What is that stench?</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lonelyhouse0.html#algangror%22>Lonely house </a> </p>">
          <td class="icon">
              <span class="hidden">algangror</span>
              <a href="#algangror" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Algangror
          </td>
          <td>241</td>
          <td>80</td>
          <td>
              3-9
          </td>
          <td>200</td>
          <td>2</td>
          <td>120</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  548
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="aulowenn" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#aulowenn%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Aulowenn's signet ring</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_ruin%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Gleaming claymore of ruin</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>50-150</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar13_rest%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>No rest for the guilty</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar13.html#aulowenn%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">aulowenn</span>
              <a href="#aulowenn" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -192px">
              </a>
          </td>
          <td class="left name drop">
              Aulowenn
          </td>
          <td>194</td>
          <td>120</td>
          <td>
              0-9
          </td>
          <td></td>
          <td></td>
          <td>90</td>
          <td>5</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  324
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="highwayman" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-41</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild9.html#highwayman%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">bandit1</span>
              <a href="#highwayman"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Highwayman
          </td>
          <td>54</td>
          <td>90</td>
          <td>
              2-4
          </td>
          <td>50</td>
          <td>2</td>
          <td>30</td>
          <td>2</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  85
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="graverobber" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bjorgur_dagger%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Bjorgur's family dagger</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Leather gloves</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>10-50</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bjorgur_grave%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Awoken from slumber</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain35.html#graverobber%22>Blackwater crypt </a> </p>">
          <td class="icon">
              <span class="hidden">bjorgur_bandit</span>
              <a href="#graverobber" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Graverobber
          </td>
          <td>62</td>
          <td>120</td>
          <td>
              2-6
          </td>
          <td></td>
          <td></td>
          <td>72</td>
          <td>1</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  102
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="brtender1" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_wrmas%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png%22 alt=%22items_misc_5.png%22 style=%22margin: -128px 0px 0px -64px%22></a> </td> <td class=%22left%22>Wraith's massive claymore</td> <td>1</td> <td>0.1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar15.html#brtender1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar17.html#brtender1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar2.html#brtender1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar21.html#brtender1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar4.html#brtender1%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">brtender1</span>
              <a href="#brtender1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png" alt="monsters_ld2.png" style="margin: -224px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Branchtender
          </td>
          <td>57</td>
          <td>135</td>
          <td>
              5-8
          </td>
          <td></td>
          <td></td>
          <td>75</td>
          <td>5</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  139
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="brtender2" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_wrmas%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png%22 alt=%22items_misc_5.png%22 style=%22margin: -128px 0px 0px -64px%22></a> </td> <td class=%22left%22>Wraith's massive claymore</td> <td>1</td> <td>0.1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar19.html#brtender2%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">brtender2</span>
              <a href="#brtender2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png" alt="monsters_ld2.png" style="margin: -224px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Frantic branchtender
          </td>
          <td>72</td>
          <td>155</td>
          <td>
              7-11
          </td>
          <td></td>
          <td></td>
          <td>90</td>
          <td>7</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  249
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Bleeding wound (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#bleeding_wound">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="brtender_cr" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#oegyth%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Oegyth crystal</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar15.html#brtender_cr%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">brtender_cr</span>
              <a href="#brtender_cr" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png" alt="monsters_ld2.png" style="margin: -224px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Ancient branchtender
          </td>
          <td>253</td>
          <td>155</td>
          <td>
              7-11
          </td>
          <td></td>
          <td></td>
          <td>90</td>
          <td>7</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  490
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Bleeding wound (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#bleeding_wound">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="buceth" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#buceth_vial%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -160px%22></a> </td> <td class=%22left%22>Buceth's vial of green liquid</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-20</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1-4</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_life%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Ring of life force</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1-3</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#andor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Search for Andor</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#loneford%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Flows through the veins</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/loneford4.html#buceth%22>Loneford </a> </p>">
          <td class="icon">
              <span class="hidden">buceth</span>
              <a href="#buceth" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -224px">
              </a>
          </td>
          <td class="left name drop">
              Buceth
          </td>
          <td>75</td>
          <td>80</td>
          <td>
              3-9
          </td>
          <td>200</td>
          <td>2</td>
          <td>120</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  292
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="charwdg1" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broken_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Broken wooden buckler</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_bleeding_ointment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Ointment of bleeding wounds</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#rawperch%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Raw perch</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1.html#charwdg1%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#charwdg1%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse1.html#charwdg1%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse2.html#charwdg1%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse3.html#charwdg1%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse8.html#charwdg1%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse9.html#charwdg1%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine0.html#charwdg1%22>Way to lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine1.html#charwdg1%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine2.html#charwdg1%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine3.html#charwdg1%22>Charwoodh </a> </p>">
          <td class="icon">
              <span class="hidden">charwdg1</span>
              <a href="#charwdg1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -32px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Puny Charwood goblin
          </td>
          <td>53</td>
          <td>95</td>
          <td>
              5-7
          </td>
          <td>15</td>
          <td>2</td>
          <td>75</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  122
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="charwdg2" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broken_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Broken wooden buckler</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_bleeding_ointment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Ointment of bleeding wounds</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#rawperch%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Raw perch</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1.html#charwdg2%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#charwdg2%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse1.html#charwdg2%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse2.html#charwdg2%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse3.html#charwdg2%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse8.html#charwdg2%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse9.html#charwdg2%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine0.html#charwdg2%22>Way to lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine1.html#charwdg2%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine2.html#charwdg2%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine3.html#charwdg2%22>Charwoodh </a> </p>">
          <td class="icon">
              <span class="hidden">charwdg1</span>
              <a href="#charwdg2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -32px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Charwood goblin scout
          </td>
          <td>56</td>
          <td>139</td>
          <td>
              6-9
          </td>
          <td>20</td>
          <td>3</td>
          <td>77</td>
          <td>4</td>
          <td>10</td>
          <td>6</td>
          <td>5</td>
          <td>  130
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="charwdg3" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broken_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Broken wooden buckler</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_bleeding_ointment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Ointment of bleeding wounds</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#rawperch%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Raw perch</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1.html#charwdg3%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#charwdg3%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse1.html#charwdg3%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse2.html#charwdg3%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse3.html#charwdg3%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse8.html#charwdg3%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse9.html#charwdg3%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine0.html#charwdg3%22>Way to lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine1.html#charwdg3%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine2.html#charwdg3%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine3.html#charwdg3%22>Charwoodh </a> </p>">
          <td class="icon">
              <span class="hidden">charwdg1</span>
              <a href="#charwdg3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -32px 0px 0px -192px">
              </a>
          </td>
          <td class="left name drop">
              Starving Charwood goblin
          </td>
          <td>64</td>
          <td>142</td>
          <td>
              6-9
          </td>
          <td>20</td>
          <td>3</td>
          <td>79</td>
          <td>4</td>
          <td>10</td>
          <td>6</td>
          <td>5</td>
          <td>  142
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="charwdg4" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broken_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Broken wooden buckler</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_bleeding_ointment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Ointment of bleeding wounds</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#rawperch%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Raw perch</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine0.html#charwdg4%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1.html#charwdg4%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1a.html#charwdg4%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#charwdg4%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2a.html#charwdg4%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse0.html#charwdg4%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse1.html#charwdg4%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse2.html#charwdg4%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse3.html#charwdg4%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse7.html#charwdg4%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse8.html#charwdg4%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse9.html#charwdg4%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine1.html#charwdg4%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine2.html#charwdg4%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine3.html#charwdg4%22>Charwoodh </a> </p>">
          <td class="icon">
              <span class="hidden">charwdg2</span>
              <a href="#charwdg4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -32px 0px 0px -192px">
              </a>
          </td>
          <td class="left name drop">
              Charwood goblin
          </td>
          <td>73</td>
          <td>144</td>
          <td>
              7-9
          </td>
          <td>25</td>
          <td>3</td>
          <td>63</td>
          <td>4</td>
          <td>10</td>
          <td>6</td>
          <td>5</td>
          <td>  151
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="charwdg5" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broken_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Broken wooden buckler</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_bleeding_ointment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Ointment of bleeding wounds</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#rawperch%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Raw perch</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine0.html#charwdg5%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1.html#charwdg5%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1a.html#charwdg5%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#charwdg5%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2a.html#charwdg5%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse0.html#charwdg5%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse1.html#charwdg5%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse2.html#charwdg5%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse3.html#charwdg5%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse7.html#charwdg5%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse8.html#charwdg5%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse9.html#charwdg5%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine1.html#charwdg5%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine2.html#charwdg5%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine3.html#charwdg5%22>Charwoodh </a> </p>">
          <td class="icon">
              <span class="hidden">charwdg2</span>
              <a href="#charwdg5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -32px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Charwood goblin fighter
          </td>
          <td>81</td>
          <td>147</td>
          <td>
              7-9
          </td>
          <td>25</td>
          <td>3</td>
          <td>65</td>
          <td>4</td>
          <td>10</td>
          <td>6</td>
          <td>5</td>
          <td>  162
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="charwdg6" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broken_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Broken wooden buckler</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_bleeding_ointment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Ointment of bleeding wounds</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#rawperch%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Raw perch</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine0.html#charwdg6%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1.html#charwdg6%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1a.html#charwdg6%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#charwdg6%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2a.html#charwdg6%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse0.html#charwdg6%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse1.html#charwdg6%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse2.html#charwdg6%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse3.html#charwdg6%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse7.html#charwdg6%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse8.html#charwdg6%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse9.html#charwdg6%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine1.html#charwdg6%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine2.html#charwdg6%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine3.html#charwdg6%22>Charwoodh </a> </p>">
          <td class="icon">
              <span class="hidden">charwdg2</span>
              <a href="#charwdg6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -32px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Tough Charwood goblin
          </td>
          <td>92</td>
          <td>143</td>
          <td>
              8-9
          </td>
          <td>25</td>
          <td>3</td>
          <td>67</td>
          <td>4</td>
          <td>10</td>
          <td>6</td>
          <td>5</td>
          <td>  178
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="charwdg7" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broken_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Broken wooden buckler</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_bleeding_ointment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Ointment of bleeding wounds</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#rawperch%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Raw perch</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine0.html#charwdg7%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1.html#charwdg7%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#charwdg7%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2a.html#charwdg7%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse0.html#charwdg7%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse1.html#charwdg7%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse6.html#charwdg7%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse8.html#charwdg7%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine2.html#charwdg7%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine3.html#charwdg7%22>Charwoodh </a> </p>">
          <td class="icon">
              <span class="hidden">charwdg3</span>
              <a href="#charwdg7"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -32px 0px 0px -352px">
              </a>
          </td>
          <td class="left name drop">
              Aggressive Charwood goblin
          </td>
          <td>103</td>
          <td>146</td>
          <td>
              8-9
          </td>
          <td>30</td>
          <td>3</td>
          <td>64</td>
          <td>4</td>
          <td>10</td>
          <td>6</td>
          <td>5</td>
          <td>  193
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="charwdg8" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broken_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Broken wooden buckler</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_bleeding_ointment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Ointment of bleeding wounds</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#rawperch%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Raw perch</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine0.html#charwdg8%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1.html#charwdg8%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#charwdg8%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2a.html#charwdg8%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse0.html#charwdg8%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse1.html#charwdg8%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse6.html#charwdg8%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/minerhouse8.html#charwdg8%22>Miner house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine2.html#charwdg8%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine3.html#charwdg8%22>Charwoodh </a> </p>">
          <td class="icon">
              <span class="hidden">charwdg3</span>
              <a href="#charwdg8"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -32px 0px 0px -352px">
              </a>
          </td>
          <td class="left name drop">
              Strong Charwood goblin
          </td>
          <td>112</td>
          <td>147</td>
          <td>
              9-11
          </td>
          <td>35</td>
          <td>2</td>
          <td>73</td>
          <td>4</td>
          <td>10</td>
          <td>6</td>
          <td>5</td>
          <td>  214
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="charwdgg" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broken_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Broken wooden buckler</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_bleeding_ointment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Ointment of bleeding wounds</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#rawperch%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Raw perch</td> <td>1</td> <td>10%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Destined for great things</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine0.html#charwdgg%22>Way to lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">charwdgg</span>
              <a href="#charwdgg" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png" alt="monsters_rltiles4.png" style="margin: -32px 0px 0px -320px">
              </a>
          </td>
          <td class="left name drop">
              Charwood goblin
          </td>
          <td>81</td>
          <td>147</td>
          <td>
              7-9
          </td>
          <td>25</td>
          <td>3</td>
          <td>65</td>
          <td>4</td>
          <td>10</td>
          <td>6</td>
          <td>5</td>
          <td>  162
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="shady_bandit" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-41</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#vacor_spell%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_books.png%22 alt=%22items_books.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Piece of Vacor's spell</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_se.html#shady_bandit%22>Fallhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild10.html#shady_bandit%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild12.html#shady_bandit%22>Wild </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild9.html#shady_bandit%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">fallhaven_bandit</span>
              <a href="#shady_bandit" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Shady Bandit
          </td>
          <td>45</td>
          <td>70</td>
          <td>
              3-9
          </td>
          <td>30</td>
          <td>3</td>
          <td>50</td>
          <td>2</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  94
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="feygard_patrol_watch" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#ffguard_qitem%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Feygard patrol ring</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Wooden buckler</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#jolnor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Spies in the foam</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road1.html#feygard_patrol_watch%22>Foaming Flask Tavern </a> </p>">
          <td class="icon">
              <span class="hidden">ff_outsideguard</span>
              <a href="#feygard_patrol_watch" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Feygard patrol watch
          </td>
          <td>80</td>
          <td>70</td>
          <td>
              2-7
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  133
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="guthbered" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger_barbed%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -96px%22></a> </td> <td class=%22left%22>Barbed dagger</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>20-50</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#guthbered_id%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Guthbered's ring</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bwm_agent%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>The agent and the beast</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#prim_hunt%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Clouded intent</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain29.html#guthbered%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">guthbered</span>
              <a href="#guthbered" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -384px">
              </a>
          </td>
          <td class="left name drop">
              Guthbered
          </td>
          <td>80</td>
          <td>70</td>
          <td>
              4-9
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  146
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="harlenn" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>20-50</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#harlenn_id%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Harlenn's ring</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_shadow_embrace%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Ring of Shadow embrace</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bwm_agent%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>The agent and the beast</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#prim_hunt%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Clouded intent</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain45.html#harlenn%22>Blackwater settlement </a> </p>">
          <td class="icon">
              <span class="hidden">harlenn</span>
              <a href="#harlenn" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -192px">
              </a>
          </td>
          <td class="left name drop">
              Harlenn
          </td>
          <td>80</td>
          <td>70</td>
          <td>
              4-9
          </td>
          <td></td>
          <td></td>
          <td>80</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  146
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="highwayman1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mead%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Mead</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_torn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Torn shirt</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads3.html#highwayman1%22>Road before crossroads </a> </p>">
          <td class="icon">
              <span class="hidden">highwayman1</span>
              <a href="#highwayman1" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Highwayman
          </td>
          <td>154</td>
          <td>160</td>
          <td>
              2-7
          </td>
          <td></td>
          <td></td>
          <td>70</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  239
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="iqhan_1a" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_torn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Torn shirt</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave0.html#iqhan_1a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave1.html#iqhan_1a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave4.html#iqhan_1a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway2.html#iqhan_1a%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway3.html#iqhan_1a%22>Waterway </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_1</span>
              <a href="#iqhan_1a"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -128px 0px 0px -512px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan worker thrall
          </td>
          <td>55</td>
          <td>110</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>70</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  104
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="iqhan_1b" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_torn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Torn shirt</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave0.html#iqhan_1b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave1.html#iqhan_1b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave4.html#iqhan_1b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway2.html#iqhan_1b%22>Waterway </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waterway3.html#iqhan_1b%22>Waterway </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_1</span>
              <a href="#iqhan_1b"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -128px 0px 0px -512px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan thrall servant
          </td>
          <td>57</td>
          <td>120</td>
          <td>
              2-9
          </td>
          <td>15</td>
          <td>2</td>
          <td>70</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  122
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="iqhan_2a" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_torn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Torn shirt</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave0.html#iqhan_2a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave1.html#iqhan_2a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2.html#iqhan_2a%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_2</span>
              <a href="#iqhan_2a"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -128px 0px 0px -544px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan guard thrall
          </td>
          <td>59</td>
          <td>130</td>
          <td>
              2-9
          </td>
          <td>15</td>
          <td>2</td>
          <td>70</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  129
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="iqhan_2b" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_torn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Torn shirt</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave0.html#iqhan_2b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave1.html#iqhan_2b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2.html#iqhan_2b%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_2</span>
              <a href="#iqhan_2b"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -128px 0px 0px -544px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan thrall
          </td>
          <td>62</td>
          <td>130</td>
          <td>
              2-10
          </td>
          <td>15</td>
          <td>2</td>
          <td>70</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  138
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="iqhan_3a" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_torn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Torn shirt</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave1.html#iqhan_3a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2.html#iqhan_3a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave3.html#iqhan_3a%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_3</span>
              <a href="#iqhan_3a"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -192px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan warrior thrall
          </td>
          <td>65</td>
          <td>140</td>
          <td>
              2-11
          </td>
          <td>15</td>
          <td>2</td>
          <td>70</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  152
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="iqhan_3b" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_torn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Torn shirt</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave1.html#iqhan_3b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2.html#iqhan_3b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave3.html#iqhan_3b%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_3</span>
              <a href="#iqhan_3b"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -192px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan master
          </td>
          <td>67</td>
          <td>140</td>
          <td>
              2-12
          </td>
          <td>20</td>
          <td>2</td>
          <td>60</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  162
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="iqhan_4a" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_torn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Torn shirt</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2.html#iqhan_4a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2a.html#iqhan_4a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave3.html#iqhan_4a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave4.html#iqhan_4a%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_4</span>
              <a href="#iqhan_4a"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -192px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan master
          </td>
          <td>69</td>
          <td>140</td>
          <td>
              2-13
          </td>
          <td>20</td>
          <td>2</td>
          <td>60</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  170
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="iqhan_4b" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-9</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Wooden buckler</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2.html#iqhan_4b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2a.html#iqhan_4b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave3.html#iqhan_4b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave4.html#iqhan_4b%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_4</span>
              <a href="#iqhan_4b"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -192px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan master
          </td>
          <td>71</td>
          <td>140</td>
          <td>
              2-15
          </td>
          <td>20</td>
          <td>2</td>
          <td>60</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  185
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="iqhan_ch_1a" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-9</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Wooden buckler</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2.html#iqhan_ch_1a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2a.html#iqhan_ch_1a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave3.html#iqhan_ch_1a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave4.html#iqhan_ch_1a%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_ch_1</span>
              <a href="#iqhan_ch_1a"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -192px 0px 0px -480px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan chaos evoker
          </td>
          <td>73</td>
          <td>140</td>
          <td>
              2-15
          </td>
          <td>20</td>
          <td>2</td>
          <td>60</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  237
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Chaotic grip 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#chaotic_grip">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -384px">
  </a>

          
          </td>
      </tr>
      <tr id="iqhan_ch_1b" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-9</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Wooden buckler</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2.html#iqhan_ch_1b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2a.html#iqhan_ch_1b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave3.html#iqhan_ch_1b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave4.html#iqhan_ch_1b%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_ch_1</span>
              <a href="#iqhan_ch_1b"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -192px 0px 0px -480px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan chaos evoker
          </td>
          <td>75</td>
          <td>150</td>
          <td>
              2-14
          </td>
          <td>20</td>
          <td>2</td>
          <td>60</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  240
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Chaotic grip 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#chaotic_grip">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -384px">
  </a>

          
          </td>
      </tr>
      <tr id="iqhan_ch_2a" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-9</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Wooden buckler</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave3.html#iqhan_ch_2a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave4.html#iqhan_ch_2a%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_ch_2</span>
              <a href="#iqhan_ch_2a"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -192px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan chaos servant
          </td>
          <td>78</td>
          <td>150</td>
          <td>
              2-14
          </td>
          <td>20</td>
          <td>2</td>
          <td>60</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  244
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Chaotic grip 4x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#chaotic_grip">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -384px">
  </a>

          
          </td>
      </tr>
      <tr id="iqhan_ch_2b" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-9</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Wooden buckler</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave3.html#iqhan_ch_2b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave4.html#iqhan_ch_2b%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_ch_2</span>
              <a href="#iqhan_ch_2b"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -192px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan chaos servant
          </td>
          <td>79</td>
          <td>150</td>
          <td>
              2-13
          </td>
          <td>25</td>
          <td>2</td>
          <td>75</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  254
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Chaotic grip 4x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#chaotic_grip">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -384px">
  </a>

          
          </td>
      </tr>
      <tr id="iqhan_ch_3a" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_crude_cloth%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Crude cloth gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-9</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1-3</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2a.html#iqhan_ch_3a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave3.html#iqhan_ch_3a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave4.html#iqhan_ch_3a%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_ch_3</span>
              <a href="#iqhan_ch_3a"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -192px 0px 0px -512px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan chaos master
          </td>
          <td>83</td>
          <td>170</td>
          <td>
              2-13
          </td>
          <td>25</td>
          <td>2</td>
          <td>75</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  273
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Chaotic grip 4x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#chaotic_grip">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -384px">
  </a>

          
          </td>
      </tr>
      <tr id="iqhan_ch_3b" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_crude_cloth%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Crude cloth gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-9</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1-3</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2a.html#iqhan_ch_3b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave3.html#iqhan_ch_3b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave4.html#iqhan_ch_3b%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_ch_3</span>
              <a href="#iqhan_ch_3b"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -192px 0px 0px -544px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan chaos master
          </td>
          <td>85</td>
          <td>170</td>
          <td>
              2-13
          </td>
          <td>25</td>
          <td>2</td>
          <td>75</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  275
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Chaotic grip 4x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#chaotic_grip">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -384px">
  </a>

          
          </td>
      </tr>
      <tr id="larcal" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#calomyran_secrets%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_books.png%22 alt=%22items_books.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Calomyran secrets</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#club1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -0px%22></a> </td> <td class=%22left%22>Wooden club</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-12</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#milk%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -416px%22></a> </td> <td class=%22left%22>Milk</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_barn.html#larcal%22>Fallhaven barn </a> </p>">
          <td class="icon">
              <span class="hidden">larcal</span>
              <a href="#larcal" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Larcal
          </td>
          <td>51</td>
          <td>25</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td>50</td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  55
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="lodar_fg3" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broken_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Broken wooden buckler</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mead%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Mead</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A lost potion</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#lodar_fg3%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">lodar_fg3</span>
              <a href="#lodar_fg3" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Afflicted Feygard guard
          </td>
          <td>212</td>
          <td>75</td>
          <td>
              1-11
          </td>
          <td>20</td>
          <td>3</td>
          <td>90</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>  347
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="lodar_fg4" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broken_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Broken wooden buckler</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mead%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Mead</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A lost potion</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#lodar_fg4%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">lodar_fg4</span>
              <a href="#lodar_fg4" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Insane Feygard guard
          </td>
          <td>212</td>
          <td>75</td>
          <td>
              1-11
          </td>
          <td>20</td>
          <td>3</td>
          <td>90</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>  347
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="morkin2" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_dl%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Dull two-handed sword</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-10</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hvhead_irn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Heavy iron skullcap</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_courage%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -160px 0px 0px -128px%22></a> </td> <td class=%22left%22>Liquid courage</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#morkin2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12.html#morkin2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar18.html#morkin2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar20.html#morkin2%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">morkin1</span>
              <a href="#morkin2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png" alt="monsters_tometik5.png" style="margin: -352px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Morkin scout
          </td>
          <td>152</td>
          <td>59</td>
          <td>
              0-3
          </td>
          <td></td>
          <td></td>
          <td>139</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  259
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="morkin3" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_dl%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Dull two-handed sword</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-10</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hvhead_irn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Heavy iron skullcap</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_courage%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -160px 0px 0px -128px%22></a> </td> <td class=%22left%22>Liquid courage</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#morkin3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12.html#morkin3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar18.html#morkin3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar20.html#morkin3%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">morkin1</span>
              <a href="#morkin3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png" alt="monsters_tometik5.png" style="margin: -352px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Morkin fighter
          </td>
          <td>159</td>
          <td>65</td>
          <td>
              0-3
          </td>
          <td></td>
          <td></td>
          <td>145</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  277
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="morkin4" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_dl%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Dull two-handed sword</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-10</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hvhead_irn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Heavy iron skullcap</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_courage%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -160px 0px 0px -128px%22></a> </td> <td class=%22left%22>Liquid courage</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#morkin4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12.html#morkin4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar18.html#morkin4%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">morkin2</span>
              <a href="#morkin4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png" alt="monsters_tometik5.png" style="margin: -352px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Morkin guard
          </td>
          <td>165</td>
          <td>69</td>
          <td>
              0-3
          </td>
          <td></td>
          <td></td>
          <td>150</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  294
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="morkin5" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_dl%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Dull two-handed sword</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-10</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hvhead_irn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Heavy iron skullcap</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_courage%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -160px 0px 0px -128px%22></a> </td> <td class=%22left%22>Liquid courage</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#morkin5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12.html#morkin5%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">morkin3</span>
              <a href="#morkin5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png" alt="monsters_tometik5.png" style="margin: -352px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Morkin berserker
          </td>
          <td>171</td>
          <td>74</td>
          <td>
              0-3
          </td>
          <td></td>
          <td></td>
          <td>155</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  310
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="morkin6" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_dl%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Dull two-handed sword</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-10</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hvhead_irn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Heavy iron skullcap</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_courage%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -160px 0px 0px -128px%22></a> </td> <td class=%22left%22>Liquid courage</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12.html#morkin6%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">morkin4</span>
              <a href="#morkin6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png" alt="monsters_tometik5.png" style="margin: -352px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Morkin leader
          </td>
          <td>175</td>
          <td>79</td>
          <td>
              0-3
          </td>
          <td></td>
          <td></td>
          <td>163</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  328
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="morkin_cr" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#oegyth%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Oegyth crystal</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12.html#morkin_cr%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">morkin_cr</span>
              <a href="#morkin_cr" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik1.png" alt="monsters_tometik1.png" style="margin: -64px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Morkin elder
          </td>
          <td>375</td>
          <td>139</td>
          <td>
              0-5
          </td>
          <td></td>
          <td></td>
          <td>163</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  755
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Minor fatigue (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fatigue_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="morkin1" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_dl%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Dull two-handed sword</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-10</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hvhead_irn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Heavy iron skullcap</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_courage%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -160px 0px 0px -128px%22></a> </td> <td class=%22left%22>Liquid courage</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar10.html#morkin1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar11.html#morkin1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12.html#morkin1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar18.html#morkin1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar20.html#morkin1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar21.html#morkin1%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">morkins</span>
              <a href="#morkin1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png" alt="monsters_tometik5.png" style="margin: -352px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Morkin lookout
          </td>
          <td>145</td>
          <td>53</td>
          <td>
              0-3
          </td>
          <td></td>
          <td></td>
          <td>134</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  241
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="escaped_prisoner" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small rock</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone0.html#escaped_prisoner%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone_inner.html#escaped_prisoner%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone_upper.html#escaped_prisoner%22>Flagstone prison </a> </p>">
          <td class="icon">
              <span class="hidden">prisoner1</span>
              <a href="#escaped_prisoner" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Escaped prisoner
          </td>
          <td>15</td>
          <td>50</td>
          <td>
              3-7
          </td>
          <td></td>
          <td></td>
          <td>20</td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  18
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="starving_prisoner" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small rock</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone1.html#starving_prisoner%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone2.html#starving_prisoner%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone_inner.html#starving_prisoner%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone_upper.html#starving_prisoner%22>Flagstone prison </a> </p>">
          <td class="icon">
              <span class="hidden">prisoner2</span>
              <a href="#starving_prisoner" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -352px">
              </a>
          </td>
          <td class="left name drop">
              Starving prisoner
          </td>
          <td>10</td>
          <td>60</td>
          <td>
              3-5
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>  27
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="rogorn" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-50</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1-2</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#longsword_hard_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Hardened iron longsword</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#rogorn_qitem%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_books.png%22 alt=%22items_books.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Piece of painting</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#rogorn%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>The path is clear to me</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower2.html#rogorn%22>Road to Carn tower </a> </p>">
          <td class="icon">
              <span class="hidden">rogorn</span>
              <a href="#rogorn" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Rogorn
          </td>
          <td>145</td>
          <td>90</td>
          <td>
              5-9
          </td>
          <td></td>
          <td></td>
          <td>120</td>
          <td>5</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  295
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="rogorn_henchman" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-20</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1-2</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#rogorn_qitem%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_books.png%22 alt=%22items_books.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Piece of painting</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower2.html#rogorn_henchman%22>Road to Carn tower </a> </p>">
          <td class="icon">
              <span class="hidden">rogorn_henchman</span>
              <a href="#rogorn_henchman" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png" alt="monsters_rogue1.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Rogorn's henchman
          </td>
          <td>130</td>
          <td>80</td>
          <td>
              5-8
          </td>
          <td></td>
          <td></td>
          <td>120</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  259
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="tiqui" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>50-150</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hmr_olwyns%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png%22 alt=%22items_misc_5.png%22 style=%22margin: -128px 0px 0px -0px%22></a> </td> <td class=%22left%22>Olwyn's curse</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tiqui%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -352px 0px 0px -384px%22></a> </td> <td class=%22left%22>Tiqui's shield</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar13_rest%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>No rest for the guilty</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#tiqui%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">tiqui</span>
              <a href="#tiqui" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png" alt="monsters_tometik5.png" style="margin: -448px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Tiqui
          </td>
          <td>145</td>
          <td>90</td>
          <td>
              0-9
          </td>
          <td></td>
          <td></td>
          <td>120</td>
          <td>9</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  306
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="ulirfendor" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#club3%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iron club</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-50</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1-2</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>3-5</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#darkprotector%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>The dark protector</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#maggots%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>I have it in me</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#toszylae%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>An involuntary carrier</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave4.html#ulirfendor%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">ulirfendor</span>
              <a href="#ulirfendor" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Ulirfendor
          </td>
          <td>288</td>
          <td>70</td>
          <td>
              1-16
          </td>
          <td>30</td>
          <td>2</td>
          <td>60</td>
          <td>6</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  421
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="unzel" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots_unzel%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -32px%22></a> </td> <td class=%22left%22>Unzel's defensive boots</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>16-30</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#ring_unzel%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Unzel's ring</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#kaverin%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Old friends?</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#vacor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Missing pieces</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild6.html#unzel%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">unzel</span>
              <a href="#unzel" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Unzel
          </td>
          <td>59</td>
          <td>80</td>
          <td>
              5-9
          </td>
          <td>30</td>
          <td>3</td>
          <td>40</td>
          <td>2</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  93
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="vacor" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots_vacor%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -32px%22></a> </td> <td class=%22left%22>Vacor's boots of attack</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>16-30</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#ring_vacor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Vacor's ring</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#kaverin%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Old friends?</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#vacor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Missing pieces</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_sw.html#vacor%22>Fallhaven </a> </p>">
          <td class="icon">
              <span class="hidden">vacor</span>
              <a href="#vacor" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage.png" alt="monsters_mage.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Vacor
          </td>
          <td>72</td>
          <td>110</td>
          <td>
              4-8
          </td>
          <td></td>
          <td></td>
          <td>40</td>
          <td>2</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  111
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="vscaleb1" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots3%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -32px%22></a> </td> <td class=%22left%22>Snakeskin boots</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1-3</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves3%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -256px%22></a> </td> <td class=%22left%22>Snakeskin gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves4%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -256px%22></a> </td> <td class=%22left%22>Fine snakeskin gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-20</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -160px 0px 0px -480px%22></div> </td> <td class=%22left%22>Venomscale scales</td> <td>1-3</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#vscale_amul%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -32px 0px 0px -96px%22></a> </td> <td class=%22left%22>Venomscale amulet</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar16.html#vscaleb1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar19.html#vscaleb1%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">vscaleb1</span>
              <a href="#vscaleb1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png" alt="monsters_tometik7.png" style="margin: -224px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Breeder of venomscales
          </td>
          <td>197</td>
          <td>156</td>
          <td>
              0-17
          </td>
          <td></td>
          <td></td>
          <td>57</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  376
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Weak Poison 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
      <tr id="vscaleb2" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots3%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -32px%22></a> </td> <td class=%22left%22>Snakeskin boots</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1-3</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves3%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -256px%22></a> </td> <td class=%22left%22>Snakeskin gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves4%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -256px%22></a> </td> <td class=%22left%22>Fine snakeskin gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-20</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -160px 0px 0px -480px%22></div> </td> <td class=%22left%22>Venomscale scales</td> <td>1-3</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#vscale_amul%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -32px 0px 0px -96px%22></a> </td> <td class=%22left%22>Venomscale amulet</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar17.html#vscaleb2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar19.html#vscaleb2%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">vscaleb2</span>
              <a href="#vscaleb2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png" alt="monsters_tometik7.png" style="margin: -288px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Venomscale Master
          </td>
          <td>205</td>
          <td>160</td>
          <td>
              0-17
          </td>
          <td></td>
          <td></td>
          <td>61</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  392
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Weak Poison 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          </td>
      </tr>
    </tbody>
    </table>
     <h2>Giant</h2>
     <table class="monster" id="giants" width="80%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>HP</th> <th>AC%</th> <th>Dmg</th> <th>Crit</th> <th>Crit*</th> <th>BC%</th> <th>Dmg resis</th> <th>AP</th> <th>Attack cost</th> <th>Move cost</th> <th>XP</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="arulir_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -352px%22></div> </td> <td class=%22left%22>Arulir skin</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-12</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake5.html#arulir_1%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">arulir_1</span>
              <a href="#arulir_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -0px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Arulir
          </td>
          <td>325</td>
          <td>70</td>
          <td>
              1-20
          </td>
          <td>30</td>
          <td>3</td>
          <td>20</td>
          <td>8</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
          <td>  403
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Stunned (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#stunned">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -352px">
  </a>

          
          </td>
      </tr>
      <tr id="arulir_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -352px%22></div> </td> <td class=%22left%22>Arulir skin</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-12</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake5.html#arulir_2%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">arulir_1</span>
              <a href="#arulir_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -0px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Giant Arulir
          </td>
          <td>330</td>
          <td>70</td>
          <td>
              1-20
          </td>
          <td>30</td>
          <td>3</td>
          <td>20</td>
          <td>8</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
          <td>  407
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Stunned (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#stunned">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -352px">
  </a>

          
          </td>
      </tr>
      <tr id="young_gornaud" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-30</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain1.html#young_gornaud%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain15.html#young_gornaud%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain16.html#young_gornaud%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain2.html#young_gornaud%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain3.html#young_gornaud%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain7.html#young_gornaud%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain9.html#young_gornaud%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">gornaud_1</span>
              <a href="#young_gornaud"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Young gornaud
          </td>
          <td>70</td>
          <td>70</td>
          <td>
              0-15
          </td>
          <td></td>
          <td></td>
          <td>50</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  146
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Dazed (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#dazed">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -288px">
  </a>

          
          </td>
      </tr>
      <tr id="gornaud" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-40</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1-2</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain15.html#gornaud%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain16.html#gornaud%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain17.html#gornaud%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain18.html#gornaud%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain3.html#gornaud%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain4.html#gornaud%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">gornaud_2</span>
              <a href="#gornaud"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Gornaud
          </td>
          <td>95</td>
          <td>70</td>
          <td>
              0-15
          </td>
          <td></td>
          <td></td>
          <td>50</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  197
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Dazed (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#dazed">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -288px">
  </a>

          
          </td>
      </tr>
      <tr id="strong_gornaud" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#bwm_brew%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Blackwater brew</td> <td>10</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-45</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1-3</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain17.html#strong_gornaud%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain18.html#strong_gornaud%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain19.html#strong_gornaud%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">gornaud_3</span>
              <a href="#strong_gornaud"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -320px">
              </a>
          </td>
          <td class="left name drop">
              Strong Gornaud
          </td>
          <td>95</td>
          <td>70</td>
          <td>
              0-15
          </td>
          <td></td>
          <td></td>
          <td>50</td>
          <td>5</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  204
</td>
          <td class="cond">
            <a title="On hit
  On target
    70% chance of Dazed (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#dazed">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -288px">
  </a>

          
          </td>
      </tr>
      <tr id="kaverin" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>100</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1-2</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#kaverin_message%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_books.png%22 alt=%22items_books.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Kaverin's sealed message</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_crude_combat%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude combat ring</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_weathered%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Weathered shirt</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#kaverin%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Old friends?</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern1.html#kaverin%22>Remgard tavern </a> </p>">
          <td class="icon">
              <span class="hidden">kaverin</span>
              <a href="#kaverin" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -160px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Kaverin
          </td>
          <td>320</td>
          <td>65</td>
          <td>
              1-20
          </td>
          <td>30</td>
          <td>3</td>
          <td>90</td>
          <td>6</td>
          <td>5</td>
          <td>3</td>
          <td>5</td>
          <td>  491
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="lbridge" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>20-40</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#graxe_shatter%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Greataxe of shattered hope</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>3</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_courage%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -160px 0px 0px -128px%22></a> </td> <td class=%22left%22>Liquid courage</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#lbridge%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">lbridge</span>
              <a href="#lbridge" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png" alt="monsters_tometik5.png" style="margin: -96px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Guardian of the Bridge
          </td>
          <td>213</td>
          <td>127</td>
          <td>
              5-15
          </td>
          <td>35</td>
          <td>2</td>
          <td>153</td>
          <td>9</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  575
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Minor fatigue (7 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fatigue_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -0px">
  </a>

          <span class="help" title="On hit
  On source
    +1 HP">+HP</span>

          </td>
      </tr>
      <tr id="maonit_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-7</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_crude_block%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude ring of block</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake0.html#maonit_1%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake1.html#maonit_1%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake2.html#maonit_1%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake4.html#maonit_1%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">maonit_1</span>
              <a href="#maonit_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Maonit troll
          </td>
          <td>255</td>
          <td>65</td>
          <td>
              1-20
          </td>
          <td>10</td>
          <td>3</td>
          <td>20</td>
          <td>4</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
          <td>  259
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="maonit_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-7</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_crude_block%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude ring of block</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake0.html#maonit_2%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake1.html#maonit_2%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake2.html#maonit_2%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake4.html#maonit_2%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">maonit_1</span>
              <a href="#maonit_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Giant Maonit troll
          </td>
          <td>270</td>
          <td>65</td>
          <td>
              1-20
          </td>
          <td>10</td>
          <td>3</td>
          <td>20</td>
          <td>4</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
          <td>  271
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="maonit_3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-7</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_crude_block%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude ring of block</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake2.html#maonit_3%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake3.html#maonit_3%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake4.html#maonit_3%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake5.html#maonit_3%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake6.html#maonit_3%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">maonit_2</span>
              <a href="#maonit_3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Strong Maonit troll
          </td>
          <td>285</td>
          <td>65</td>
          <td>
              1-20
          </td>
          <td>20</td>
          <td>3</td>
          <td>20</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
          <td>  294
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="maonit_4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-7</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_crude_block%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude ring of block</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake2.html#maonit_4%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake3.html#maonit_4%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake4.html#maonit_4%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake5.html#maonit_4%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake6.html#maonit_4%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">maonit_2</span>
              <a href="#maonit_4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -224px">
              </a>
          </td>
          <td class="left name drop">
              Maonit brute
          </td>
          <td>290</td>
          <td>65</td>
          <td>
              1-20
          </td>
          <td>20</td>
          <td>3</td>
          <td>20</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
          <td>  299
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="maonit_5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-7</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_crude_block%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude ring of block</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake3.html#maonit_5%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake4.html#maonit_5%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake5.html#maonit_5%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">maonit_3</span>
              <a href="#maonit_5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -224px">
              </a>
          </td>
          <td class="left name drop">
              Tough Maonit brute
          </td>
          <td>310</td>
          <td>65</td>
          <td>
              1-20
          </td>
          <td>30</td>
          <td>3</td>
          <td>20</td>
          <td>6</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
          <td>  376
</td>
          <td class="cond">
            <a title="On hit
  On target
    10% chance of Stunned (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#stunned">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -352px">
  </a>

          
          </td>
      </tr>
      <tr id="maonit_6" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-7</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_crude_block%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude ring of block</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake3.html#maonit_6%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake4.html#maonit_6%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake5.html#maonit_6%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">maonit_3</span>
              <a href="#maonit_6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -224px">
              </a>
          </td>
          <td class="left name drop">
              Strong Maonit brute
          </td>
          <td>320</td>
          <td>65</td>
          <td>
              1-20
          </td>
          <td>30</td>
          <td>3</td>
          <td>20</td>
          <td>6</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
          <td>  384
</td>
          <td class="cond">
            <a title="On hit
  On target
    10% chance of Stunned (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#stunned">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -352px">
  </a>

          
          </td>
      </tr>
      <tr id="maonit_cr" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#oegyth%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Oegyth crystal</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake1.html#maonit_cr%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">maonit_cr</span>
              <a href="#maonit_cr" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -224px">
              </a>
          </td>
          <td class="left name drop">
              Strong Maonit brute
          </td>
          <td>620</td>
          <td>65</td>
          <td>
              1-20
          </td>
          <td>30</td>
          <td>3</td>
          <td>20</td>
          <td>6</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
          <td>  636
</td>
          <td class="cond">
            <a title="On hit
  On target
    10% chance of Stunned (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#stunned">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -352px">
  </a>

          
          </td>
      </tr>
      <tr id="mazarth1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>0-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-30</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>0-5</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine0.html#mazarth1%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1.html#mazarth1%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2a.html#mazarth1%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine2.html#mazarth1%22>Charwoodh </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine3.html#mazarth1%22>Charwoodh </a> </p>">
          <td class="icon">
              <span class="hidden">mazarth1</span>
              <a href="#mazarth1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png" alt="monsters_ld2.png" style="margin: -32px 0px 0px -512px">
              </a>
          </td>
          <td class="left name drop">
              Mazarth beast
          </td>
          <td>129</td>
          <td>75</td>
          <td>
              0-17
          </td>
          <td>20</td>
          <td>3</td>
          <td>60</td>
          <td>12</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  263
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mazarth2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>0-5</td> <td>50%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-30</td> <td>30%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>0-5</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine0.html#mazarth2%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1a.html#mazarth2%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#mazarth2%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2a.html#mazarth2%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolostmine3.html#mazarth2%22>Charwoodh </a> </p>">
          <td class="icon">
              <span class="hidden">mazarth2</span>
              <a href="#mazarth2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png" alt="monsters_ld2.png" style="margin: -32px 0px 0px -544px">
              </a>
          </td>
          <td class="left name drop">
              Tough Mazarth beast
          </td>
          <td>148</td>
          <td>79</td>
          <td>
              0-20
          </td>
          <td>20</td>
          <td>3</td>
          <td>67</td>
          <td>12</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  302
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mbrute_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10.html#mbrute_1%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake6.html#mbrute_1%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake7.html#mbrute_1%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake9.html#mbrute_1%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mbrute_1</span>
              <a href="#mbrute_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -480px">
              </a>
          </td>
          <td class="left name drop">
              Young mountain brute
          </td>
          <td>148</td>
          <td>70</td>
          <td>
              0-14
          </td>
          <td>20</td>
          <td>2.5</td>
          <td>60</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  222
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mbrute_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10.html#mbrute_2%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake6.html#mbrute_2%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake7.html#mbrute_2%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake9.html#mbrute_2%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mbrute_1</span>
              <a href="#mbrute_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -480px">
              </a>
          </td>
          <td class="left name drop">
              Weak mountain brute
          </td>
          <td>157</td>
          <td>70</td>
          <td>
              0-14
          </td>
          <td>20</td>
          <td>2.5</td>
          <td>60</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  232
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mbrute_3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10.html#mbrute_3%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake6.html#mbrute_3%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake7.html#mbrute_3%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake9.html#mbrute_3%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mbrute_1</span>
              <a href="#mbrute_3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -512px">
              </a>
          </td>
          <td class="left name drop">
              Whitefur mountain brute
          </td>
          <td>166</td>
          <td>70</td>
          <td>
              0-14
          </td>
          <td>20</td>
          <td>2.5</td>
          <td>60</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  242
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mbrute_4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10.html#mbrute_4%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake6.html#mbrute_4%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake7.html#mbrute_4%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake8.html#mbrute_4%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake9.html#mbrute_4%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mbrute_2</span>
              <a href="#mbrute_4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -480px">
              </a>
          </td>
          <td class="left name drop">
              Mountain brute
          </td>
          <td>175</td>
          <td>70</td>
          <td>
              0-14
          </td>
          <td>20</td>
          <td>2.5</td>
          <td>60</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  253
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mbrute_5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10.html#mbrute_5%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake6.html#mbrute_5%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake7.html#mbrute_5%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake8.html#mbrute_5%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake9.html#mbrute_5%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mbrute_2</span>
              <a href="#mbrute_5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -512px">
              </a>
          </td>
          <td class="left name drop">
              Large mountain brute
          </td>
          <td>184</td>
          <td>70</td>
          <td>
              0-14
          </td>
          <td>20</td>
          <td>2.5</td>
          <td>60</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  263
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mbrute_6" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake10.html#mbrute_6%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake6.html#mbrute_6%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake7.html#mbrute_6%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake8.html#mbrute_6%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake9.html#mbrute_6%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mbrute_2</span>
              <a href="#mbrute_6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Fast mountain brute
          </td>
          <td>82</td>
          <td>80</td>
          <td>
              0-14
          </td>
          <td>20</td>
          <td>2.5</td>
          <td>60</td>
          <td>4</td>
          <td>12</td>
          <td>3</td>
          <td>5</td>
          <td>  188
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mbrute_7" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake8.html#mbrute_7%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake9.html#mbrute_7%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mbrute_3</span>
              <a href="#mbrute_7"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Quick mountain brute
          </td>
          <td>93</td>
          <td>80</td>
          <td>
              0-15
          </td>
          <td>20</td>
          <td>2.5</td>
          <td>60</td>
          <td>4</td>
          <td>12</td>
          <td>3</td>
          <td>5</td>
          <td>  205
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mbrute_8" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake8.html#mbrute_8%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake9.html#mbrute_8%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mbrute_3</span>
              <a href="#mbrute_8"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Aggressive mountain brute
          </td>
          <td>104</td>
          <td>80</td>
          <td>
              1-15
          </td>
          <td>20</td>
          <td>2.5</td>
          <td>60</td>
          <td>4</td>
          <td>12</td>
          <td>3</td>
          <td>5</td>
          <td>  223
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mbrute_9" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake8.html#mbrute_9%22>Mountain lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake9.html#mbrute_9%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mbrute_3</span>
              <a href="#mbrute_9"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Strong mountain brute
          </td>
          <td>115</td>
          <td>80</td>
          <td>
              1-15
          </td>
          <td>20</td>
          <td>2.5</td>
          <td>60</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  215
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mbrute_10" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake8.html#mbrute_10%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mbrute_4</span>
              <a href="#mbrute_10"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Tough mountain brute
          </td>
          <td>126</td>
          <td>80</td>
          <td>
              2-15
          </td>
          <td>30</td>
          <td>3</td>
          <td>60</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  248
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mbrute_11" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake8.html#mbrute_11%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mbrute_4</span>
              <a href="#mbrute_11"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Fearless mountain brute
          </td>
          <td>137</td>
          <td>80</td>
          <td>
              2-15
          </td>
          <td>30</td>
          <td>3</td>
          <td>60</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  261
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mbrute_12" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/mountainlake8.html#mbrute_12%22>Mountain lake </a> </p>">
          <td class="icon">
              <span class="hidden">mbrute_4</span>
              <a href="#mbrute_12"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Enraged mountain brute
          </td>
          <td>148</td>
          <td>80</td>
          <td>
              2-16
          </td>
          <td>40</td>
          <td>3</td>
          <td>60</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  291
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="young_minotaur" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-12</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hammer0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -96px%22></a> </td> <td class=%22left%22>Iron hammer</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/jan_pitcave2.html#young_minotaur%22>Jan pitcave </a> </p>">
          <td class="icon">
              <span class="hidden">pitcave2</span>
              <a href="#young_minotaur"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Young minotaur
          </td>
          <td>45</td>
          <td>20</td>
          <td>
              4
          </td>
          <td>40</td>
          <td>3</td>
          <td>50</td>
          <td>2</td>
          <td>10</td>
          <td>6</td>
          <td>10</td>
          <td>  64
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="strong_minotaur" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-12</td> <td>70%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hammer0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -96px%22></a> </td> <td class=%22left%22>Iron hammer</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/jan_pitcave2.html#strong_minotaur%22>Jan pitcave </a> </p>">
          <td class="icon">
              <span class="hidden">pitcave2_boss</span>
              <a href="#strong_minotaur"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Strong minotaur
          </td>
          <td>53</td>
          <td>40</td>
          <td>
              5
          </td>
          <td>50</td>
          <td>3</td>
          <td>50</td>
          <td>2</td>
          <td>10</td>
          <td>6</td>
          <td>10</td>
          <td>  79
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="rivertroll" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>3-5</td> <td>50%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#club_fine_wooden%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -0px%22></a> </td> <td class=%22left%22>Fine wooden club</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-70</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>3-5</td> <td>30%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower2.html#rivertroll%22>Road to Carn tower </a> </p>">
          <td class="icon">
              <span class="hidden">rivertroll</span>
              <a href="#rivertroll" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              River troll
          </td>
          <td>210</td>
          <td>120</td>
          <td>
              2-9
          </td>
          <td>30</td>
          <td>4</td>
          <td>65</td>
          <td>7</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  348
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="young_aulaeth" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1-3</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#bwm_dagger%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -160px%22></a> </td> <td class=%22left%22>Blackwater dagger</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#bwm_ironsword%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Blackwater iron sword</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1-2</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_speed_1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -416px%22></a> </td> <td class=%22left%22>Minor potion of speed</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain20.html#young_aulaeth%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain30.html#young_aulaeth%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">wyrm_1</span>
              <a href="#young_aulaeth"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -256px 0px 0px -512px">
              </a>
          </td>
          <td class="left name drop">
              Young aulaeth
          </td>
          <td>105</td>
          <td>40</td>
          <td>
              0-4
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td>5</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  131
</td>
          <td class="cond">
          
          <span class="help" title="On hit
  On source
    +1 HP">+HP</span>

          </td>
      </tr>
      <tr id="aulaeth" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1-3</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#bwm_dagger%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -160px%22></a> </td> <td class=%22left%22>Blackwater dagger</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#bwm_ironsword%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Blackwater iron sword</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1-2</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_speed_1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -416px%22></a> </td> <td class=%22left%22>Minor potion of speed</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain30.html#aulaeth%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain32.html#aulaeth%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain39.html#aulaeth%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">wyrm_2</span>
              <a href="#aulaeth"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -576px">
              </a>
          </td>
          <td class="left name drop">
              Aulaeth
          </td>
          <td>120</td>
          <td>40</td>
          <td>
              0-5
          </td>
          <td></td>
          <td></td>
          <td>40</td>
          <td>6</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  160
</td>
          <td class="cond">
          
          <span class="help" title="On hit
  On source
    +1 HP">+HP</span>

          </td>
      </tr>
      <tr id="strong_aulaeth" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1-3</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#bwm_dagger%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -160px%22></a> </td> <td class=%22left%22>Blackwater dagger</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#bwm_ironsword%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Blackwater iron sword</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1-2</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_speed_1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -416px%22></a> </td> <td class=%22left%22>Minor potion of speed</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain30.html#strong_aulaeth%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain32.html#strong_aulaeth%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain37.html#strong_aulaeth%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">wyrm_3</span>
              <a href="#strong_aulaeth"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -576px">
              </a>
          </td>
          <td class="left name drop">
              Strong aulaeth
          </td>
          <td>135</td>
          <td>40</td>
          <td>
              0-5
          </td>
          <td></td>
          <td></td>
          <td>35</td>
          <td>6</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  170
</td>
          <td class="cond">
          
          <span class="help" title="On hit
  On source
    +1 HP">+HP</span>

          </td>
      </tr>
      <tr id="zortak2" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_wrld%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Claymore of the warlord</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hglv_irn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik3.png%22 alt=%22items_tometik3.png%22 style=%22margin: -0px 0px 0px -128px%22></a> </td> <td class=%22left%22>Heavy iron gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Mundane necklace</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar18.html#zortak2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#zortak2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#zortak2%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">zortak1</span>
              <a href="#zortak2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png" alt="monsters_tometik7.png" style="margin: -320px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Zortak fighter
          </td>
          <td>189</td>
          <td>144</td>
          <td>
              4-9
          </td>
          <td>20</td>
          <td>3</td>
          <td>63</td>
          <td>4</td>
          <td>10</td>
          <td>6</td>
          <td>5</td>
          <td>  273
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="zortak3" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_wrld%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Claymore of the warlord</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hglv_irn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik3.png%22 alt=%22items_tometik3.png%22 style=%22margin: -0px 0px 0px -128px%22></a> </td> <td class=%22left%22>Heavy iron gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Mundane necklace</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar18.html#zortak3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#zortak3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#zortak3%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">zortak1</span>
              <a href="#zortak3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png" alt="monsters_tometik7.png" style="margin: -320px 0px 0px -224px">
              </a>
          </td>
          <td class="left name drop">
              Zortak guard
          </td>
          <td>195</td>
          <td>165</td>
          <td>
              2-10
          </td>
          <td>20</td>
          <td>3</td>
          <td>73</td>
          <td>5</td>
          <td>10</td>
          <td>6</td>
          <td>5</td>
          <td>  301
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="zortak4" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_wrld%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Claymore of the warlord</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hglv_irn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik3.png%22 alt=%22items_tometik3.png%22 style=%22margin: -0px 0px 0px -128px%22></a> </td> <td class=%22left%22>Heavy iron gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Mundane necklace</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar18.html#zortak4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#zortak4%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">zortak2</span>
              <a href="#zortak4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png" alt="monsters_tometik7.png" style="margin: -320px 0px 0px -224px">
              </a>
          </td>
          <td class="left name drop">
              Zortak barbarian
          </td>
          <td>207</td>
          <td>178</td>
          <td>
              3-11
          </td>
          <td>25</td>
          <td>3</td>
          <td>79</td>
          <td>5</td>
          <td>10</td>
          <td>6</td>
          <td>5</td>
          <td>  337
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="zortakb" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>50-100</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#haub_serp%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik2.png%22 alt=%22items_tometik2.png%22 style=%22margin: -128px 0px 0px -64px%22></a> </td> <td class=%22left%22>Serpent's hauberk</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>2</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8.html#zortakb%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">zortakb</span>
              <a href="#zortakb" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png" alt="monsters_tometik7.png" style="margin: -320px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Zortak leader
          </td>
          <td>279</td>
          <td>185</td>
          <td>
              9
          </td>
          <td>30</td>
          <td>3</td>
          <td>125</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  623
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Dazed 2x (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#dazed">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -288px">
  </a>

          
          </td>
      </tr>
      <tr id="zortak1" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_wrld%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Claymore of the warlord</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hglv_irn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik3.png%22 alt=%22items_tometik3.png%22 style=%22margin: -0px 0px 0px -128px%22></a> </td> <td class=%22left%22>Heavy iron gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Mundane necklace</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar14.html#zortak1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar18.html#zortak1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar7.html#zortak1%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">zortaks</span>
              <a href="#zortak1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png" alt="monsters_tometik7.png" style="margin: -320px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Zortak scout
          </td>
          <td>173</td>
          <td>134</td>
          <td>
              4-12
          </td>
          <td>20</td>
          <td>3</td>
          <td>51</td>
          <td>4</td>
          <td>10</td>
          <td>6</td>
          <td>5</td>
          <td>  245
</td>
          <td class="cond">
          
          
          </td>
      </tr>
    </tbody>
    </table>
     <h2>Demon</h2>
     <p>Immune to critical hits</p>
     <table class="monster" id="demons" width="80%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>HP</th> <th>AC%</th> <th>Dmg</th> <th>Crit</th> <th>Crit*</th> <th>BC%</th> <th>Dmg resis</th> <th>AP</th> <th>Attack cost</th> <th>Move cost</th> <th>XP</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="allaceph_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave1.html#allaceph_1%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave2.html#allaceph_1%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">allaceph_1</span>
              <a href="#allaceph_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Young Allaceph
          </td>
          <td>90</td>
          <td>80</td>
          <td>
              3-7
          </td>
          <td>40</td>
          <td>2</td>
          <td>105</td>
          <td>1</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  231
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Minor weapon feebleness 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#feebleness_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -128px">
  </a>

          <span class="help" title="On hit
  On source
    +4 HP">+HP</span>

          </td>
      </tr>
      <tr id="allaceph_2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave1.html#allaceph_2%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave2.html#allaceph_2%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">allaceph_1</span>
              <a href="#allaceph_2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Allaceph
          </td>
          <td>94</td>
          <td>80</td>
          <td>
              3-7
          </td>
          <td>40</td>
          <td>2</td>
          <td>105</td>
          <td>1</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  237
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Minor weapon feebleness 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#feebleness_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -128px">
  </a>

          <span class="help" title="On hit
  On source
    +4 HP">+HP</span>

          </td>
      </tr>
      <tr id="allaceph_3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave2.html#allaceph_3%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3.html#allaceph_3%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">allaceph_2</span>
              <a href="#allaceph_3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Strong Allaceph
          </td>
          <td>101</td>
          <td>80</td>
          <td>
              3-7
          </td>
          <td>40</td>
          <td>2</td>
          <td>105</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  253
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Minor weapon feebleness 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#feebleness_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -128px">
  </a>

          <span class="help" title="On hit
  On source
    +4 HP">+HP</span>

          </td>
      </tr>
      <tr id="allaceph_4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave2.html#allaceph_4%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3.html#allaceph_4%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">allaceph_2</span>
              <a href="#allaceph_4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Tough Allaceph
          </td>
          <td>111</td>
          <td>80</td>
          <td>
              3-7
          </td>
          <td>40</td>
          <td>2</td>
          <td>110</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  272
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Minor weapon feebleness 3x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#feebleness_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -128px">
  </a>

          <span class="help" title="On hit
  On source
    +4 HP">+HP</span>

          </td>
      </tr>
      <tr id="allaceph_5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -96px%22></div> </td> <td class=%22left%22>Sharpened gem</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1-2</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3.html#allaceph_5%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3a.html#allaceph_5%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3b.html#allaceph_5%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">allaceph_3</span>
              <a href="#allaceph_5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Radiant Allaceph
          </td>
          <td>124</td>
          <td>80</td>
          <td>
              3-7
          </td>
          <td>40</td>
          <td>2</td>
          <td>110</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  297
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Minor weapon feebleness 3x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#feebleness_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -128px">
  </a>

          <span class="help" title="On hit
  On source
    +6 HP">+HP</span>

          </td>
      </tr>
      <tr id="allaceph_6" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -96px%22></div> </td> <td class=%22left%22>Sharpened gem</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1-2</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3.html#allaceph_6%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3a.html#allaceph_6%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3b.html#allaceph_6%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">allaceph_3</span>
              <a href="#allaceph_6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Ancient Allaceph
          </td>
          <td>133</td>
          <td>80</td>
          <td>
              3-7
          </td>
          <td>40</td>
          <td>2</td>
          <td>115</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  315
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Minor weapon feebleness 3x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#feebleness_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -128px">
  </a>

          <span class="help" title="On hit
  On source
    +7 HP">+HP</span>

          </td>
      </tr>
      <tr id="vaeregh_1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-20</td> <td>30%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3a.html#vaeregh_1%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3b.html#vaeregh_1%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">allaceph_4</span>
              <a href="#vaeregh_1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -64px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Vaeregh
          </td>
          <td>149</td>
          <td>80</td>
          <td>
              2-7
          </td>
          <td>40</td>
          <td>2</td>
          <td>120</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  346
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Minor weapon feebleness 4x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#feebleness_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -128px">
  </a>

          <span class="help" title="On hit
  On source
    +10 HP">+HP</span>

          </td>
      </tr>
      <tr id="allaceph_cr" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#oegyth%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Oegyth crystal</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3.html#allaceph_cr%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">allaceph_cr</span>
              <a href="#allaceph_cr" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Ancient Allaceph
          </td>
          <td>333</td>
          <td>80</td>
          <td>
              3-7
          </td>
          <td>40</td>
          <td>2</td>
          <td>115</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  616
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Minor weapon feebleness 3x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#feebleness_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -128px">
  </a>

          <span class="help" title="On hit
  On source
    +7 HP">+HP</span>

          </td>
      </tr>
      <tr id="ash5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-2</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_black2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Reinforced black axe</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png%22 alt=%22items_misc_5.png%22 style=%22margin: -64px 0px 0px -256px%22></div> </td> <td class=%22left%22>Gem of warmth</td> <td>1</td> <td>0.1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#ash5%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine3.html#ash5%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine5.html#ash5%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine6.html#ash5%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">ash3</span>
              <a href="#ash5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png" alt="monsters_tometik2.png" style="margin: -32px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Young ash spawn
          </td>
          <td>80</td>
          <td>138</td>
          <td>
              0-5
          </td>
          <td>15</td>
          <td>4</td>
          <td>81</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  137
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="ash6" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-2</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_black2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Reinforced black axe</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png%22 alt=%22items_misc_5.png%22 style=%22margin: -64px 0px 0px -256px%22></div> </td> <td class=%22left%22>Gem of warmth</td> <td>1</td> <td>0.1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#ash6%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine3.html#ash6%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine5.html#ash6%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine6.html#ash6%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">ash3</span>
              <a href="#ash6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png" alt="monsters_tometik2.png" style="margin: -32px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Ash spawn
          </td>
          <td>83</td>
          <td>141</td>
          <td>
              0-5
          </td>
          <td>15</td>
          <td>4</td>
          <td>86</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  144
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="ash7" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-2</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_black2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Reinforced black axe</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png%22 alt=%22items_misc_5.png%22 style=%22margin: -64px 0px 0px -256px%22></div> </td> <td class=%22left%22>Gem of warmth</td> <td>1</td> <td>0.1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine5.html#ash7%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine6.html#ash7%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine7.html#ash7%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine9.html#ash7%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">ash4</span>
              <a href="#ash7"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png" alt="monsters_tometik2.png" style="margin: -32px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Tough ash spawn
          </td>
          <td>87</td>
          <td>146</td>
          <td>
              0-5
          </td>
          <td>15</td>
          <td>4</td>
          <td>89</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  152
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cave_guardian" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -96px%22></div> </td> <td class=%22left%22>Sharpened gem</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>20-52</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>2</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_block1%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Lesser ring of block</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone2.html#cave_guardian%22>Flagstone prison </a> </p>">
          <td class="icon">
              <span class="hidden">flagstone_guard1</span>
              <a href="#cave_guardian" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -0px 0px 0px -512px">
              </a>
          </td>
          <td class="left name drop">
              Cave guardian
          </td>
          <td>61</td>
          <td>150</td>
          <td>
              4-10
          </td>
          <td>10</td>
          <td>3</td>
          <td>90</td>
          <td>2</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  152
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="winged_demon" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -96px%22></div> </td> <td class=%22left%22>Sharpened gem</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>62</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>3</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_jinxed1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Jinxed ring of damage resistance</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#sword_flagstone%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Flagstone's pride</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#flagstone%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Ancient secrets</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone4.html#winged_demon%22>Flagstone prison </a> </p>">
          <td class="icon">
              <span class="hidden">flagstone_guard2</span>
              <a href="#winged_demon" title="unique" class="at-icon unique size2x2">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_demon1.png" alt="monsters_demon1.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Winged demon
          </td>
          <td>82</td>
          <td>90</td>
          <td>
              4-12
          </td>
          <td>10</td>
          <td>2</td>
          <td>70</td>
          <td>5</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  166
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="hirazinn" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>0-4</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1-3</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>200-500</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#hirazinn%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -96px 0px 0px -160px%22></a> </td> <td class=%22left%22>Heart of the Hira'zinn</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shdstlk%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik2.png%22 alt=%22items_tometik2.png%22 style=%22margin: -160px 0px 0px -128px%22></a> </td> <td class=%22left%22>Shadowstalker</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#xulviir0%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png%22 alt=%22items_misc_5.png%22 style=%22margin: -128px 0px 0px -96px%22></a> </td> <td class=%22left%22>Broken sword</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Searching for madness</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4a.html#hirazinn%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hirazinn</span>
              <a href="#hirazinn" title="unique" class="at-icon unique size2x2">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_demon2.png" alt="monsters_demon2.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Hira'zinn
          </td>
          <td>263</td>
          <td>129</td>
          <td>
              3-6
          </td>
          <td>10</td>
          <td>2</td>
          <td>132</td>
          <td>21</td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  683
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Bleeding wound 3x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#bleeding_wound">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -0px">
  </a>
  <a title="On hit
  On target
    30% chance of Fear 4x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fear">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -64px">
  </a>

          <span class="help" title="On hit
  On source
    +(1–6) HP">+HP</span>

          </td>
      </tr>
      <tr id="kazaul_spawn" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -96px%22></div> </td> <td class=%22left%22>Sharpened gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-19</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small rock</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain40.html#kazaul_spawn%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain41.html#kazaul_spawn%22>Kazaul cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain42.html#kazaul_spawn%22>Kazaul cave </a> </p>">
          <td class="icon">
              <span class="hidden">kazaul_1</span>
              <a href="#kazaul_spawn"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -64px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Kazaul spawn
          </td>
          <td>45</td>
          <td>70</td>
          <td>
              3-5
          </td>
          <td>50</td>
          <td>2</td>
          <td>90</td>
          <td>1</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  102
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="kazaul_imp" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -160px%22></div> </td> <td class=%22left%22>Polished sparkling gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>6-25</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#rapier_lifesteal%22 class=%22at-icon legendary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -160px 0px 0px -32px%22></a> </td> <td class=%22left%22>Rapier of lifesteal</td> <td>1</td> <td>0.01%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small rock</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain42.html#kazaul_imp%22>Kazaul cave </a> </p>">
          <td class="icon">
              <span class="hidden">kazaul_2</span>
              <a href="#kazaul_imp"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -64px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Kazaul imp
          </td>
          <td>45</td>
          <td>70</td>
          <td>
              3-7
          </td>
          <td>40</td>
          <td>2</td>
          <td>105</td>
          <td>1</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  111
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="kazaul_guardian" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></div> </td> <td class=%22left%22>Polished gem</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>52</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>2</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shadow_slayer%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -128px 0px 0px -128px%22></a> </td> <td class=%22left%22>Shadow of the slayer</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#kazaul%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Lights in the dark</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain42.html#kazaul_guardian%22>Kazaul cave </a> </p>">
          <td class="icon">
              <span class="hidden">kazaul_guardian</span>
              <a href="#kazaul_guardian" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -64px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Kazaul guardian
          </td>
          <td>95</td>
          <td>70</td>
          <td>
              3-8
          </td>
          <td>40</td>
          <td>2</td>
          <td>90</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  175
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="grave_spawn" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></div> </td> <td class=%22left%22>Polished gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>20-29</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain12.html#grave_spawn%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain33.html#grave_spawn%22>Blackwater crypt </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain34.html#grave_spawn%22>Blackwater crypt </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain51.html#grave_spawn%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain52.html#grave_spawn%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">restless_dead_1</span>
              <a href="#grave_spawn"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -64px 0px 0px -288px">
              </a>
          </td>
          <td class="left name drop">
              Grave spawn
          </td>
          <td>45</td>
          <td>110</td>
          <td>
              2-5
          </td>
          <td>40</td>
          <td>2</td>
          <td>35</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  91
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="toszylae_guard" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -96px%22></div> </td> <td class=%22left%22>Sharpened gem</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-20</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1-2</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small rock</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#toszylae%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>An involuntary carrier</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3a.html#toszylae_guard%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">toszylae_guard</span>
              <a href="#toszylae_guard" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -32px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Radiant guardian
          </td>
          <td>320</td>
          <td>80</td>
          <td>
              2-7
          </td>
          <td>40</td>
          <td>2</td>
          <td>120</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  609
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Minor weapon feebleness 2x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#feebleness_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -128px">
  </a>

          <span class="help" title="On hit
  On source
    +5 HP">+HP</span>

          </td>
      </tr>
    </tbody>
    </table>
     <h2>Ghost</h2>
     <p>Immune to critical hits</p>
     <table class="monster" id="ghosts" width="80%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>HP</th> <th>AC%</th> <th>Dmg</th> <th>Crit</th> <th>Crit*</th> <th>BC%</th> <th>Dmg resis</th> <th>AP</th> <th>Attack cost</th> <th>Move cost</th> <th>XP</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="ashs1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-3</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_black2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Reinforced black axe</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1a.html#ashs1%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#ashs1%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">ashs1</span>
              <a href="#ashs1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png" alt="monsters_ld2.png" style="margin: -352px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Weeping ash spectre
          </td>
          <td>75</td>
          <td>175</td>
          <td>
              5-15
          </td>
          <td></td>
          <td></td>
          <td>138</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  199
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="ashs2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-3</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_black2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Reinforced black axe</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1a.html#ashs2%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#ashs2%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">ashs1</span>
              <a href="#ashs2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png" alt="monsters_ld2.png" style="margin: -352px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Wailing Ash spectre
          </td>
          <td>87</td>
          <td>181</td>
          <td>
              5-15
          </td>
          <td></td>
          <td></td>
          <td>146</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  226
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="ashs3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-3</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_black2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Reinforced black axe</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine1a.html#ashs3%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#ashs3%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine3.html#ashs3%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">ashs2</span>
              <a href="#ashs3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png" alt="monsters_ld2.png" style="margin: -352px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Ash spectre
          </td>
          <td>97</td>
          <td>187</td>
          <td>
              5-15
          </td>
          <td></td>
          <td></td>
          <td>151</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  249
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="guardian_of_the_catacombs" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Leather gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-12</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs1.html#guardian_of_the_catacombs%22>Fallhaven catacombs </a> </p>">
          <td class="icon">
              <span class="hidden">catacombguard1</span>
              <a href="#guardian_of_the_catacombs" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Guardian of the catacombs
          </td>
          <td>6</td>
          <td>10</td>
          <td>
              1-6
          </td>
          <td></td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  25
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="ghostly_visage" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Leather gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-12</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs2.html#ghostly_visage%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs3.html#ghostly_visage%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse3.html#ghostly_visage%22>Haunted house </a> </p>">
          <td class="icon">
              <span class="hidden">catacombguard2</span>
              <a href="#ghostly_visage"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ghost1.png" alt="monsters_ghost1.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Ghostly visage
          </td>
          <td>16</td>
          <td>20</td>
          <td>
              1-4
          </td>
          <td></td>
          <td></td>
          <td>20</td>
          <td>2</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  29
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="spectre" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Leather gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-12</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs2.html#spectre%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs3.html#spectre%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse3.html#spectre%22>Haunted house </a> </p>">
          <td class="icon">
              <span class="hidden">catacombguard2</span>
              <a href="#spectre"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Spectre
          </td>
          <td>15</td>
          <td>50</td>
          <td>
              1-5
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>  39
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="apparition" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Leather gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-12</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs3.html#apparition%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs4.html#apparition%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse3.html#apparition%22>Haunted house </a> </p>">
          <td class="icon">
              <span class="hidden">catacombguard3</span>
              <a href="#apparition"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Apparition
          </td>
          <td>17</td>
          <td></td>
          <td>
              1-5
          </td>
          <td></td>
          <td></td>
          <td>70</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>  33
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="shade" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Leather gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-12</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs3.html#shade%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs4.html#shade%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse3.html#shade%22>Haunted house </a> </p>">
          <td class="icon">
              <span class="hidden">catacombguard3</span>
              <a href="#shade"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ghost1.png" alt="monsters_ghost1.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Shade
          </td>
          <td>16</td>
          <td>20</td>
          <td>
              1-4
          </td>
          <td></td>
          <td></td>
          <td>20</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  35
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cryptmist1" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_fear%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_reterski_1.png%22 alt=%22items_reterski_1.png%22 style=%22margin: -160px 0px 0px -32px%22></a> </td> <td class=%22left%22>Axe of fear</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave0.html#cryptmist1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave1.html#cryptmist1%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">cryptmist1</span>
              <a href="#cryptmist1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Thin mist of the crypt
          </td>
          <td>162</td>
          <td>64</td>
          <td>
              1-7
          </td>
          <td></td>
          <td></td>
          <td>87</td>
          <td>10</td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  302
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cryptmist2" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_fear%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_reterski_1.png%22 alt=%22items_reterski_1.png%22 style=%22margin: -160px 0px 0px -32px%22></a> </td> <td class=%22left%22>Axe of fear</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave0.html#cryptmist2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave1.html#cryptmist2%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">cryptmist1</span>
              <a href="#cryptmist2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Clear mist of the crypt
          </td>
          <td>166</td>
          <td>68</td>
          <td>
              1-7
          </td>
          <td></td>
          <td></td>
          <td>91</td>
          <td>10</td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  314
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cryptmist3" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_fear%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_reterski_1.png%22 alt=%22items_reterski_1.png%22 style=%22margin: -160px 0px 0px -32px%22></a> </td> <td class=%22left%22>Axe of fear</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave0.html#cryptmist3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave1.html#cryptmist3%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">cryptmist2</span>
              <a href="#cryptmist3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Mist of the crypt
          </td>
          <td>170</td>
          <td>72</td>
          <td>
              1-7
          </td>
          <td></td>
          <td></td>
          <td>95</td>
          <td>10</td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  326
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cryptmist4" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_fear%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_reterski_1.png%22 alt=%22items_reterski_1.png%22 style=%22margin: -160px 0px 0px -32px%22></a> </td> <td class=%22left%22>Axe of fear</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave0.html#cryptmist4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave1.html#cryptmist4%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">cryptmist2</span>
              <a href="#cryptmist4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Thick mist of the crypt
          </td>
          <td>174</td>
          <td>76</td>
          <td>
              1-7
          </td>
          <td></td>
          <td></td>
          <td>99</td>
          <td>10</td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  338
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="cryptmist5" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_fear%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_reterski_1.png%22 alt=%22items_reterski_1.png%22 style=%22margin: -160px 0px 0px -32px%22></a> </td> <td class=%22left%22>Axe of fear</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar12cave1.html#cryptmist5%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">cryptmist3</span>
              <a href="#cryptmist5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -0px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Bright mist of the crypt
          </td>
          <td>176</td>
          <td>80</td>
          <td>
              1-7
          </td>
          <td></td>
          <td></td>
          <td>103</td>
          <td>10</td>
          <td>10</td>
          <td>2</td>
          <td>5</td>
          <td>  347
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="haunting" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse3.html#haunting%22>Haunted house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild15_house.html#haunting%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">haunt3</span>
              <a href="#haunting"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ghost1.png" alt="monsters_ghost1.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Haunting
          </td>
          <td>31</td>
          <td>120</td>
          <td>
              1-5
          </td>
          <td>20</td>
          <td>2</td>
          <td>30</td>
          <td>1</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  56
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="hirathil0" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#scptr_runed%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -352px%22></a> </td> <td class=%22left%22>Runed scepter</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave0.html#hirathil0%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave1.html#hirathil0%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave2.html#hirathil0%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave3.html#hirathil0%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4.html#hirathil0%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave5.html#hirathil0%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave7.html#hirathil0%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hirathil0</span>
              <a href="#hirathil0"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Hirathil spawn
          </td>
          <td>73</td>
          <td>193</td>
          <td>
              6-7
          </td>
          <td>25</td>
          <td>3</td>
          <td>74</td>
          <td>14</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  316
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="hirathil1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#scptr_runed%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -352px%22></a> </td> <td class=%22left%22>Runed scepter</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave0.html#hirathil1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave1.html#hirathil1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave2.html#hirathil1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave3.html#hirathil1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4.html#hirathil1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave5.html#hirathil1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave7.html#hirathil1%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hirathil0</span>
              <a href="#hirathil1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Aggressive Hirathil ghost
          </td>
          <td>75</td>
          <td>199</td>
          <td>
              6-7
          </td>
          <td>25</td>
          <td>3</td>
          <td>75</td>
          <td>14</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  323
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="hirathil2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#scptr_runed%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -352px%22></a> </td> <td class=%22left%22>Runed scepter</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave0.html#hirathil2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave1.html#hirathil2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave2.html#hirathil2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave3.html#hirathil2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4.html#hirathil2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave5.html#hirathil2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave7.html#hirathil2%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hirathil0</span>
              <a href="#hirathil2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Hirathil ghost
          </td>
          <td>77</td>
          <td>202</td>
          <td>
              6-7
          </td>
          <td>25</td>
          <td>3</td>
          <td>78</td>
          <td>14</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  329
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="hirathil3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#scptr_runed%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -352px%22></a> </td> <td class=%22left%22>Runed scepter</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave1.html#hirathil3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave2.html#hirathil3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave3.html#hirathil3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4.html#hirathil3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave5.html#hirathil3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave6.html#hirathil3%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave7.html#hirathil3%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hirathil1</span>
              <a href="#hirathil3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Ferocious Hirathil ghost
          </td>
          <td>79</td>
          <td>205</td>
          <td>
              6-7
          </td>
          <td>25</td>
          <td>3</td>
          <td>80</td>
          <td>14</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  335
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="hirathil4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#scptr_runed%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -352px%22></a> </td> <td class=%22left%22>Runed scepter</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave1.html#hirathil4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave2.html#hirathil4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave3.html#hirathil4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4.html#hirathil4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave5.html#hirathil4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave6.html#hirathil4%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave7.html#hirathil4%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hirathil1</span>
              <a href="#hirathil4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Restless Hirathil ghost
          </td>
          <td>83</td>
          <td>136</td>
          <td>
              7-16
          </td>
          <td>35</td>
          <td>3</td>
          <td>152</td>
          <td>10</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  345
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="hirathil5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#scptr_runed%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -352px%22></a> </td> <td class=%22left%22>Runed scepter</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave1.html#hirathil5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave2.html#hirathil5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave3.html#hirathil5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4.html#hirathil5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave5.html#hirathil5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave6.html#hirathil5%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave7.html#hirathil5%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hirathil1</span>
              <a href="#hirathil5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Hirathil Servant
          </td>
          <td>87</td>
          <td>139</td>
          <td>
              7-16
          </td>
          <td>35</td>
          <td>3</td>
          <td>154</td>
          <td>10</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  356
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="hirathil6" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#scptr_runed%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -352px%22></a> </td> <td class=%22left%22>Runed scepter</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4a.html#hirathil6%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave5.html#hirathil6%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave6.html#hirathil6%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave7.html#hirathil6%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hirathil2</span>
              <a href="#hirathil6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Hirathil Master
          </td>
          <td>89</td>
          <td>142</td>
          <td>
              7-16
          </td>
          <td>35</td>
          <td>3</td>
          <td>156</td>
          <td>10</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  364
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="hirathil7" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#scptr_runed%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -352px%22></a> </td> <td class=%22left%22>Runed scepter</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave4a.html#hirathil7%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave5.html#hirathil7%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave6.html#hirathil7%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodarcave7.html#hirathil7%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">hirathil2</span>
              <a href="#hirathil7"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Ancient Hirathil ghost
          </td>
          <td>92</td>
          <td>145</td>
          <td>
              7-16
          </td>
          <td>35</td>
          <td>3</td>
          <td>157</td>
          <td>10</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  373
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="ghost_of_luthor" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-5</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_major%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Major flask of health</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#key_luthor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Key of Luthor</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs4.html#ghost_of_luthor%22>Fallhaven catacombs </a> </p>">
          <td class="icon">
              <span class="hidden">luthor</span>
              <a href="#ghost_of_luthor" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png" alt="monsters_liches.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Ghost of Luthor
          </td>
          <td>86</td>
          <td>120</td>
          <td>
              2-5
          </td>
          <td>15</td>
          <td>2</td>
          <td>50</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  133
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="lost_spirit" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse1.html#lost_spirit%22>Haunted house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse2.html#lost_spirit%22>Haunted house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/wild4.html#lost_spirit%22>Wild </a> </p>">
          <td class="icon">
              <span class="hidden">minorhaunt1</span>
              <a href="#lost_spirit"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Lost spirit
          </td>
          <td>15</td>
          <td>50</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  33
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="lost_soul" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse2.html#lost_soul%22>Haunted house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse3.html#lost_soul%22>Haunted house </a> </p>">
          <td class="icon">
              <span class="hidden">minorhaunt2</span>
              <a href="#lost_soul"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -64px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Lost soul
          </td>
          <td>15</td>
          <td>50</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td>10</td>
          <td>4</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  39
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="restless_dead" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></div> </td> <td class=%22left%22>Polished gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>20-29</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain12.html#restless_dead%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain33.html#restless_dead%22>Blackwater crypt </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain34.html#restless_dead%22>Blackwater crypt </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain51.html#restless_dead%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain52.html#restless_dead%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">restless_dead_1</span>
              <a href="#restless_dead"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -64px 0px 0px -224px">
              </a>
          </td>
          <td class="left name drop">
              Restless dead
          </td>
          <td>25</td>
          <td>50</td>
          <td>
              0-3
          </td>
          <td>80</td>
          <td>2</td>
          <td>140</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  70
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="restless_apparition" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -96px%22></div> </td> <td class=%22left%22>Sharpened gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_life%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_2.png%22 alt=%22items_armours_2.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Gloves of life force</td> <td>1</td> <td>0.1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>20-29</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain33.html#restless_apparition%22>Blackwater crypt </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain34.html#restless_apparition%22>Blackwater crypt </a> </p>">
          <td class="icon">
              <span class="hidden">restless_dead_2</span>
              <a href="#restless_apparition"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -64px 0px 0px -224px">
              </a>
          </td>
          <td class="left name drop">
              Restless apparition
          </td>
          <td>29</td>
          <td>90</td>
          <td>
              2-6
          </td>
          <td>60</td>
          <td>3</td>
          <td>10</td>
          <td>1</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  93
</td>
          <td class="cond">
          
          
          </td>
      </tr>
    </tbody>
    </table>
     <h2>Undead</h2>
     <table class="monster" id="undeads" width="80%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>HP</th> <th>AC%</th> <th>Dmg</th> <th>Crit</th> <th>Crit*</th> <th>BC%</th> <th>Dmg resis</th> <th>AP</th> <th>Attack cost</th> <th>Move cost</th> <th>XP</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="snake_servant" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-15</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/snakecave3.html#snake_servant%22>Snake cave </a> </p>">
          <td class="icon">
              <span class="hidden">cavesnake3</span>
              <a href="#snake_servant"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png" alt="monsters_liches.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Snake servant
          </td>
          <td>35</td>
          <td>80</td>
          <td>
              2-3
          </td>
          <td>40</td>
          <td>3</td>
          <td>10</td>
          <td>1</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  52
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="snake_master" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger_venom%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -96px%22></a> </td> <td class=%22left%22>Venomous Dagger</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></div> </td> <td class=%22left%22>Polished gem</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>9</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/snakecave3.html#snake_master%22>Snake cave </a> </p>">
          <td class="icon">
              <span class="hidden">cavesnake3_boss</span>
              <a href="#snake_master" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png" alt="monsters_liches.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Snake master
          </td>
          <td>55</td>
          <td>60</td>
          <td>
              1-4
          </td>
          <td>200</td>
          <td>3</td>
          <td>10</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  112
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="undead_warden" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -96px%22></div> </td> <td class=%22left%22>Sharpened gem</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>20-29</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#necklace_flagstone%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -192px%22></a> </td> <td class=%22left%22>Flagstone Warden's necklace</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#flagstone%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Ancient secrets</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone_upper.html#undead_warden%22>Flagstone prison </a> </p>">
          <td class="icon">
              <span class="hidden">flagstone_guard0</span>
              <a href="#undead_warden" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png" alt="monsters_liches.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Undead warden
          </td>
          <td>57</td>
          <td>120</td>
          <td>
              4-8
          </td>
          <td>20</td>
          <td>2</td>
          <td>60</td>
          <td>1</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  113
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="iqhan_boss" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger_shadow_priests%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -96px%22></a> </td> <td class=%22left%22>Dagger of the Shadow priests</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>50-100</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>5-7</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#iqhan_pendant%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iqhan pendant</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave4.html#iqhan_boss%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_boss</span>
              <a href="#iqhan_boss" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -0px 0px 0px -160px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan chaos enslaver
          </td>
          <td>120</td>
          <td>170</td>
          <td>
              2-13
          </td>
          <td>30</td>
          <td>2</td>
          <td>75</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  339
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Chaotic curse 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#chaotic_curse">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -160px">
  </a>
  <a title="On hit
  On target
    50% chance of Chaotic grip 7x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#chaotic_grip">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -384px">
  </a>

          
          </td>
      </tr>
      <tr id="maelveon" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armor_stone%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -96px%22></a> </td> <td class=%22left%22>Stone Cuirass</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></div> </td> <td class=%22left%22>Polished gem</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>52</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>2</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave3.html#maelveon%22>Gargoyle cave </a> </p>">
          <td class="icon">
              <span class="hidden">maelveon</span>
              <a href="#maelveon" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png" alt="monsters_liches.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Maelveon
          </td>
          <td>55</td>
          <td>80</td>
          <td>
              0-12
          </td>
          <td>15</td>
          <td>3</td>
          <td>90</td>
          <td>5</td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>  149
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="oldcaveboss" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-30</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lleglaris%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png%22 alt=%22items_necklaces_1.png%22 style=%22margin: -0px 0px 0px -256px%22></a> </td> <td class=%22left%22>Lleglaris' amulet</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/oldcave1.html#oldcaveboss%22>Old cave </a> </p>">
          <td class="icon">
              <span class="hidden">oldcaveboss</span>
              <a href="#oldcaveboss" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik1.png" alt="monsters_tometik1.png" style="margin: -224px 0px 0px -256px">
              </a>
          </td>
          <td class="left name drop">
              Dread zombie
          </td>
          <td>95</td>
          <td>184</td>
          <td>
              2-5
          </td>
          <td>20</td>
          <td>3</td>
          <td>102</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  228
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Bleeding wound 5x (7 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#bleeding_wound">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -0px">
  </a>

          <span class="help" title="On hit
  On source
    +(2–3) HP">+HP</span>

          </td>
      </tr>
      <tr id="irogotu" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#neck_irogotu%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Irogotu's necklace</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#ring_gandir%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Gandir's ring</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/jan_pitcave3.html#irogotu%22>Jan pitcave </a> </p>">
          <td class="icon">
              <span class="hidden">pitcave_boss</span>
              <a href="#irogotu" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png" alt="monsters_liches.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Irogotu
          </td>
          <td>61</td>
          <td>50</td>
          <td>
              2-5
          </td>
          <td>40</td>
          <td>3</td>
          <td>70</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>10</td>
          <td>  123
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="plaguesp_12" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png%22 alt=%22actorconditions_1.png%22 style=%22margin: -128px 0px 0px -128px%22></div> </td> <td class=%22left%22>Poison gland</td> <td>1</td> <td>1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-3</td> <td>70%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -384px%22></div> </td> <td class=%22left%22>Dead spider</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake4.html#plaguesp_12%22>Way to lake </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake5.html#plaguesp_12%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_5</span>
              <a href="#plaguesp_12"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -576px">
              </a>
          </td>
          <td class="left name drop">
              Plaguestrider servant
          </td>
          <td>65</td>
          <td>85</td>
          <td>
              2-7
          </td>
          <td>120</td>
          <td>3</td>
          <td>165</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  282
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Blistering skin 6x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion 7x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="plaguesp_13" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>0-1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#valugha_gown%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png%22 alt=%22items_armours_3.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Silk robe of Valugha</td> <td>1</td> <td>0.1%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#valugha_hat%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png%22 alt=%22items_armours_3.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Valugha's shimmering hat</td> <td>1</td> <td>0.1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake5.html#plaguesp_13%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_6</span>
              <a href="#plaguesp_13"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -576px">
              </a>
          </td>
          <td class="left name drop">
              Plaguestrider master
          </td>
          <td>65</td>
          <td>85</td>
          <td>
              2-8
          </td>
          <td>120</td>
          <td>3</td>
          <td>175</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  311
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Blistering skin 6x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion 7x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="plaguesp_cr" data-drop="<tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#oegyth%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Oegyth crystal</td> <td>1</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytolake5.html#plaguesp_cr%22>Way to lake </a> </p>">
          <td class="icon">
              <span class="hidden">plaguespider_cr</span>
              <a href="#plaguesp_cr" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -576px">
              </a>
          </td>
          <td class="left name drop">
              Plaguestrider master
          </td>
          <td>365</td>
          <td>85</td>
          <td>
              2-8
          </td>
          <td>160</td>
          <td>3</td>
          <td>175</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  921
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Blistering skin 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blister">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -32px">
  </a>
  <a title="On hit
  On target
    70% chance of Insect contagion 4x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#contagion">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          </td>
      </tr>
      <tr id="shadow_gargoyle_trainer" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></div> </td> <td class=%22left%22>Polished gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>16-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_shadow0%22 class=%22at-icon legendary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Ring of lesser Shadow</td> <td>1</td> <td>0.01%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small rock</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave2.html#shadow_gargoyle_trainer%22>Gargoyle cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave3.html#shadow_gargoyle_trainer%22>Gargoyle cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave4.html#shadow_gargoyle_trainer%22>Gargoyle cave </a> </p>">
          <td class="icon">
              <span class="hidden">shadowgarg3</span>
              <a href="#shadow_gargoyle_trainer"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png" alt="monsters_liches.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Shadow gargoyle trainer
          </td>
          <td>35</td>
          <td>90</td>
          <td>
              3-6
          </td>
          <td>12</td>
          <td>3</td>
          <td>90</td>
          <td>5</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  102
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="shadow_gargoyle_master" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></div> </td> <td class=%22left%22>Polished gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>16-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_shadow0%22 class=%22at-icon legendary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Ring of lesser Shadow</td> <td>1</td> <td>0.01%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small rock</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave2.html#shadow_gargoyle_master%22>Gargoyle cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave3.html#shadow_gargoyle_master%22>Gargoyle cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave4.html#shadow_gargoyle_master%22>Gargoyle cave </a> </p>">
          <td class="icon">
              <span class="hidden">shadowgarg4</span>
              <a href="#shadow_gargoyle_master"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png" alt="monsters_liches.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Shadow gargoyle master
          </td>
          <td>35</td>
          <td>125</td>
          <td>
              3-6
          </td>
          <td>12</td>
          <td>3</td>
          <td>90</td>
          <td>5</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  111
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="thukuzun" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#blade_defiler%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -192px%22></a> </td> <td class=%22left%22>Blade of the defiler</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>2-8</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1-3</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>200-500</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#thukuzun%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></a> </td> <td class=%22left%22>Thukuzun bone</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Trial by fire</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine11.html#thukuzun%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">thukuzun</span>
              <a href="#thukuzun" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -192px 0px 0px -96px">
              </a>
          </td>
          <td class="left name drop">
              Thukuzun
          </td>
          <td>193</td>
          <td>136</td>
          <td>
              6-25
          </td>
          <td></td>
          <td></td>
          <td>140</td>
          <td>9</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  564
</td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Ablaze 3x (7 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fire">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -0px 0px 0px -32px">
  </a>

          
          </td>
      </tr>
      <tr id="toszylae" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -160px%22></div> </td> <td class=%22left%22>Polished sparkling gem</td> <td>2</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-20</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>5-7</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small rock</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <a class=%22at-icon quest%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#toszylae_heart%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -192px%22></a> </td> <td class=%22left%22>Demon heart</td> <td>1</td> <td>100%</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#maggots%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>I have it in me</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#toszylae%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>An involuntary carrier</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3a.html#toszylae%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">toszylae</span>
              <a href="#toszylae" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png" alt="monsters_liches.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Toszylae
          </td>
          <td>207</td>
          <td>80</td>
          <td>
              2-7
          </td>
          <td>40</td>
          <td>2</td>
          <td>120</td>
          <td>4</td>
          <td>8</td>
          <td>2</td>
          <td>5</td>
          <td>  449
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Minor weapon feebleness 3x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#feebleness_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -128px">
  </a>

          <span class="help" title="On hit
  On source
    +6 HP">+HP</span>

          </td>
      </tr>
      <tr id="rotting_corpse" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone1.html#rotting_corpse%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone2.html#rotting_corpse%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone3.html#rotting_corpse%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone_inner.html#rotting_corpse%22>Flagstone prison </a> </p>">
          <td class="icon">
              <span class="hidden">undead1</span>
              <a href="#rotting_corpse"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie1.png" alt="monsters_zombie1.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Rotting corpse
          </td>
          <td>71</td>
          <td>30</td>
          <td>
              2-5
          </td>
          <td>50</td>
          <td>2</td>
          <td>30</td>
          <td>2</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  82
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="walking_corpse" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone1.html#walking_corpse%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone2.html#walking_corpse%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone3.html#walking_corpse%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone_inner.html#walking_corpse%22>Flagstone prison </a> </p>">
          <td class="icon">
              <span class="hidden">undead1</span>
              <a href="#walking_corpse"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie1.png" alt="monsters_zombie1.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Walking corpse
          </td>
          <td>90</td>
          <td>30</td>
          <td>
              2-4
          </td>
          <td>40</td>
          <td>2</td>
          <td>30</td>
          <td>2</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  98
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="wyrm_apprentice" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1-2</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#elytharan_redeemer%22 class=%22at-icon legendary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -160px 0px 0px -0px%22></a> </td> <td class=%22left%22>Elytharan redeemer</td> <td>1</td> <td>0.01%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-60</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1-2</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_poison_weak%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -384px%22></a> </td> <td class=%22left%22>Weak poison</td> <td>1-3</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain36.html#wyrm_apprentice%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain37.html#wyrm_apprentice%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain38.html#wyrm_apprentice%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">wyrm_4</span>
              <a href="#wyrm_apprentice"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Wyrm apprentice
          </td>
          <td>69</td>
          <td>140</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>90</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  200
</td>
          <td class="cond">
            <a title="On hit
  On target
    70% chance of Minor fatigue (10 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fatigue_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -0px">
  </a>

          <span class="help" title="On hit
  On source
    +1 HP">+HP</span>

          </td>
      </tr>
      <tr id="wyrm_trainer" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1-2</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#elytharan_redeemer%22 class=%22at-icon legendary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -160px 0px 0px -0px%22></a> </td> <td class=%22left%22>Elytharan redeemer</td> <td>1</td> <td>0.01%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>1-60</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor vial of health</td> <td>1-2</td> <td>10%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_poison_weak%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -384px%22></a> </td> <td class=%22left%22>Weak poison</td> <td>1-3</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain36.html#wyrm_trainer%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain37.html#wyrm_trainer%22>Blackwater mountain </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain38.html#wyrm_trainer%22>Blackwater mountain </a> </p>">
          <td class="icon">
              <span class="hidden">wyrm_4</span>
              <a href="#wyrm_trainer"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Wyrm trainer
          </td>
          <td>69</td>
          <td>90</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>90</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  199
</td>
          <td class="cond">
            <a title="On hit
  On target
    70% chance of Minor fatigue (10 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fatigue_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -0px">
  </a>

          <span class="help" title="On hit
  On source
    +1 HP">+HP</span>

          </td>
      </tr>
      <tr id="zombie1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/oldcave0.html#zombie1%22>Old cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/oldcave1.html#zombie1%22>Old cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads9.html#zombie1%22>Road before crossroads </a> </p>">
          <td class="icon">
              <span class="hidden">zombie2</span>
              <a href="#zombie1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik8.png" alt="monsters_tometik8.png" style="margin: -96px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Rancid zombie
          </td>
          <td>26</td>
          <td>83</td>
          <td>
              4-7
          </td>
          <td>20</td>
          <td>3</td>
          <td>47</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  92
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="zombie2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/oldcave0.html#zombie2%22>Old cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/oldcave1.html#zombie2%22>Old cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads9.html#zombie2%22>Road before crossroads </a> </p>">
          <td class="icon">
              <span class="hidden">zombie2</span>
              <a href="#zombie2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik8.png" alt="monsters_tometik8.png" style="margin: -96px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Rotting zombie
          </td>
          <td>32</td>
          <td>90</td>
          <td>
              5-8
          </td>
          <td>20</td>
          <td>3</td>
          <td>54</td>
          <td>3</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  113
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="zombie3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/oldcave0.html#zombie3%22>Old cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/oldcave1.html#zombie3%22>Old cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads9.html#zombie3%22>Road before crossroads </a> </p>">
          <td class="icon">
              <span class="hidden">zombie2</span>
              <a href="#zombie3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik8.png" alt="monsters_tometik8.png" style="margin: -96px 0px 0px -192px">
              </a>
          </td>
          <td class="left name drop">
              Blighted zombie
          </td>
          <td>49</td>
          <td>98</td>
          <td>
              7-10
          </td>
          <td>20</td>
          <td>2</td>
          <td>57</td>
          <td>2</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  140
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="zombie5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/oldcave0.html#zombie5%22>Old cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/oldcave1.html#zombie5%22>Old cave </a> </p>">
          <td class="icon">
              <span class="hidden">zombie3</span>
              <a href="#zombie5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie2.png" alt="monsters_zombie2.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Corrupted zombie
          </td>
          <td>42</td>
          <td>127</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>56</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  101
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="zombie6" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/oldcave0.html#zombie6%22>Old cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/oldcave1.html#zombie6%22>Old cave </a> </p>">
          <td class="icon">
              <span class="hidden">zombie3</span>
              <a href="#zombie6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie2.png" alt="monsters_zombie2.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Bloodthirsty zombie
          </td>
          <td>54</td>
          <td>134</td>
          <td>
              2-9
          </td>
          <td></td>
          <td></td>
          <td>70</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  121
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="zombie7" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/oldcave1.html#zombie7%22>Old cave </a> </p>">
          <td class="icon">
              <span class="hidden">zombie4</span>
              <a href="#zombie7"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie2.png" alt="monsters_zombie2.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Tainted zombie
          </td>
          <td>87</td>
          <td>137</td>
          <td>
              3-9
          </td>
          <td></td>
          <td></td>
          <td>77</td>
          <td>5</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  174
</td>
          <td class="cond">
          
          
          </td>
      </tr>
    </tbody>
    </table>
     <h2>Construct</h2>
     <p>Immune to critical hits</p>
     <table class="monster" id="constructs" width="80%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>HP</th> <th>AC%</th> <th>Dmg</th> <th>Crit</th> <th>Crit*</th> <th>BC%</th> <th>Dmg resis</th> <th>AP</th> <th>Attack cost</th> <th>Move cost</th> <th>XP</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="ash1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-3</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_black2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Reinforced black axe</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#ash1%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine3.html#ash1%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">ash1</span>
              <a href="#ash1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Young ash gargoyle
          </td>
          <td>109</td>
          <td>90</td>
          <td>
              3-10
          </td>
          <td></td>
          <td></td>
          <td>99</td>
          <td>5</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  208
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="ash2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-3</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_black2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Reinforced black axe</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#ash2%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine3.html#ash2%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">ash1</span>
              <a href="#ash2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Ash gargoyle
          </td>
          <td>116</td>
          <td>94</td>
          <td>
              3-10
          </td>
          <td></td>
          <td></td>
          <td>103</td>
          <td>5</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  222
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="ash3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-3</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_black2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Reinforced black axe</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#ash3%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine3.html#ash3%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine4.html#ash3%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine5.html#ash3%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine7.html#ash3%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">ash2</span>
              <a href="#ash3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Strong ash gargoyle
          </td>
          <td>131</td>
          <td>134</td>
          <td>
              3-13
          </td>
          <td></td>
          <td></td>
          <td>109</td>
          <td>6</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  297
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="ash4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-3</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_black2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Reinforced black axe</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine2.html#ash4%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine3.html#ash4%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine4.html#ash4%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine5.html#ash4%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine7.html#ash4%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">ash2</span>
              <a href="#ash4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Hardened ash gargoyle
          </td>
          <td>131</td>
          <td>134</td>
          <td>
              3-13
          </td>
          <td></td>
          <td></td>
          <td>115</td>
          <td>9</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  322
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="young_gargoyle" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Leather gloves</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>4-12</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs3.html#young_gargoyle%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/catacombs4.html#young_gargoyle%22>Fallhaven catacombs </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse3.html#young_gargoyle%22>Haunted house </a> </p>">
          <td class="icon">
              <span class="hidden">catacombguard3</span>
              <a href="#young_gargoyle"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Young gargoyle
          </td>
          <td>35</td>
          <td>110</td>
          <td>
              2-5
          </td>
          <td>10</td>
          <td>2</td>
          <td>70</td>
          <td>1</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  58
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="fire1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1-3</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine6.html#fire1%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine7.html#fire1%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine8.html#fire1%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">fire1</span>
              <a href="#fire1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Glowing abcess
          </td>
          <td>91</td>
          <td>149</td>
          <td>
              0-8
          </td>
          <td>15</td>
          <td>4</td>
          <td>92</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  258
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Ablaze 5x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fire">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -0px 0px 0px -32px">
  </a>

          
          </td>
      </tr>
      <tr id="fire2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1-3</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine6.html#fire2%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine7.html#fire2%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine8.html#fire2%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">fire1</span>
              <a href="#fire2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -224px 0px 0px -448px">
              </a>
          </td>
          <td class="left name drop">
              Blazing abcess
          </td>
          <td>95</td>
          <td>152</td>
          <td>
              0-8
          </td>
          <td>15</td>
          <td>2</td>
          <td>96</td>
          <td>4</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  256
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Ablaze 5x (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fire">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -0px 0px 0px -32px">
  </a>

          
          </td>
      </tr>
      <tr id="fire3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1-3</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine7.html#fire3%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine8.html#fire3%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine9.html#fire3%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">fire2</span>
              <a href="#fire3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Lava Spawn
          </td>
          <td>102</td>
          <td>145</td>
          <td>
              0-9
          </td>
          <td>20</td>
          <td>2</td>
          <td>86</td>
          <td>6</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  279
</td>
          <td class="cond">
            <a title="On hit
  On target
    10% chance of Ablaze (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fire">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -0px 0px 0px -32px">
  </a>

          
          </td>
      </tr>
      <tr id="fire4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1-3</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine7.html#fire4%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine8.html#fire4%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine9.html#fire4%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">fire2</span>
              <a href="#fire4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -32px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Tough lava Spawn
          </td>
          <td>107</td>
          <td>149</td>
          <td>
              0-9
          </td>
          <td>25</td>
          <td>2</td>
          <td>89</td>
          <td>6</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  293
</td>
          <td class="cond">
            <a title="On hit
  On target
    10% chance of Ablaze (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fire">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -0px 0px 0px -32px">
  </a>

          
          </td>
      </tr>
      <tr id="fire5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1-3</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine10.html#fire5%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine9.html#fire5%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">fire3</span>
              <a href="#fire5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Glowing flame
          </td>
          <td>112</td>
          <td>153</td>
          <td>
              0-9
          </td>
          <td>15</td>
          <td>2.5</td>
          <td>94</td>
          <td>6</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  300
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Ablaze (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fire">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -0px 0px 0px -32px">
  </a>

          
          </td>
      </tr>
      <tr id="fire6" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1-3</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine10.html#fire6%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine9.html#fire6%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">fire3</span>
              <a href="#fire6"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Flame spawn
          </td>
          <td>127</td>
          <td>152</td>
          <td>
              0-10
          </td>
          <td>20</td>
          <td>2.5</td>
          <td>72</td>
          <td>7</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  319
</td>
          <td class="cond">
            <a title="On hit
  On target
    10% chance of Ablaze 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fire">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -0px 0px 0px -32px">
  </a>

          
          </td>
      </tr>
      <tr id="fire7" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1-3</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine10.html#fire7%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine11.html#fire7%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">fire4</span>
              <a href="#fire7"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Walking flame
          </td>
          <td>131</td>
          <td>157</td>
          <td>
              0-10
          </td>
          <td>20</td>
          <td>2.5</td>
          <td>75</td>
          <td>7</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  329
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Ablaze 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fire">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -0px 0px 0px -32px">
  </a>

          
          </td>
      </tr>
      <tr id="fire8" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1-3</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine10.html#fire8%22>Lost mine </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine11.html#fire8%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">fire4</span>
              <a href="#fire8"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik1.png" alt="monsters_tometik1.png" style="margin: -96px 0px 0px -192px">
              </a>
          </td>
          <td class="left name drop">
              Walking inferno
          </td>
          <td>135</td>
          <td>161</td>
          <td>
              0-10
          </td>
          <td>20</td>
          <td>2.5</td>
          <td>78</td>
          <td>7</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  339
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Ablaze 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fire">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -0px 0px 0px -32px">
  </a>

          
          </td>
      </tr>
      <tr id="fire9" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -192px 0px 0px -128px%22></div> </td> <td class=%22left%22>Burnt ash</td> <td>0-1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1-3</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lostmine11.html#fire9%22>Lost mine </a> </p>">
          <td class="icon">
              <span class="hidden">fire5</span>
              <a href="#fire9"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik1.png" alt="monsters_tometik1.png" style="margin: -96px 0px 0px -192px">
              </a>
          </td>
          <td class="left name drop">
              Ancient walking inferno
          </td>
          <td>135</td>
          <td>160</td>
          <td>
              0-10
          </td>
          <td>20</td>
          <td>2.5</td>
          <td>77</td>
          <td>7</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  337
</td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Ablaze 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fire">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -0px 0px 0px -32px">
  </a>

          
          </td>
      </tr>
      <tr id="iqhan_chb_1a" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#chaosreaper%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Chaosreaper</td> <td>1</td> <td>0.1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-1</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2a.html#iqhan_chb_1a%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave4.html#iqhan_chb_1a%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_chb_1</span>
              <a href="#iqhan_chb_1a"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -0px 0px 0px -608px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan chaos beast
          </td>
          <td>122</td>
          <td>150</td>
          <td>
              0-15
          </td>
          <td>10</td>
          <td>3</td>
          <td>45</td>
          <td>9</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  262
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Chaotic grip 5x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#chaotic_grip">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -384px">
  </a>

          
          </td>
      </tr>
      <tr id="iqhan_chb_1b" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#chaosreaper%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Chaosreaper</td> <td>1</td> <td>0.1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-1</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave2a.html#iqhan_chb_1b%22>Pw cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/pwcave4.html#iqhan_chb_1b%22>Pw cave </a> </p>">
          <td class="icon">
              <span class="hidden">iqhan_chb_1</span>
              <a href="#iqhan_chb_1b"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -0px 0px 0px -608px">
              </a>
          </td>
          <td class="left name drop">
              Iqhan chaos beast
          </td>
          <td>140</td>
          <td>150</td>
          <td>
              0-15
          </td>
          <td>10</td>
          <td>3</td>
          <td>45</td>
          <td>9</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  280
</td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Chaotic grip 5x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#chaotic_grip">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -384px">
  </a>

          
          </td>
      </tr>
      <tr id="jelly1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-2</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Mundane necklace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Polished necklace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads1.html#jelly1%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadcave0.html#jelly1%22>Road cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadcave1.html#jelly1%22>Road cave </a> </p>">
          <td class="icon">
              <span class="hidden">jelly1</span>
              <a href="#jelly1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png" alt="monsters_tometik2.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Olive Ooze
          </td>
          <td>20</td>
          <td>120</td>
          <td>
              5-9
          </td>
          <td>10</td>
          <td>2</td>
          <td>35</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  137
</td>
          <td class="cond">
            <a title="On hit
  On target
    40% chance of Corrosive Slime (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#slime">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="jelly2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-2</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Mundane necklace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Polished necklace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads1.html#jelly2%22>Road before crossroads </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadcave0.html#jelly2%22>Road cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadcave1.html#jelly2%22>Road cave </a> </p>">
          <td class="icon">
              <span class="hidden">jelly1</span>
              <a href="#jelly2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png" alt="monsters_tometik2.png" style="margin: -0px 0px 0px -128px">
              </a>
          </td>
          <td class="left name drop">
              Emerald Jelly
          </td>
          <td>35</td>
          <td>95</td>
          <td>
              7-8
          </td>
          <td>15</td>
          <td>2</td>
          <td>45</td>
          <td></td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  144
</td>
          <td class="cond">
            <a title="On hit
  On target
    40% chance of Corrosive Slime (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#slime">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="jelly3" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-2</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Mundane necklace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Polished necklace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadcave0.html#jelly3%22>Road cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadcave1.html#jelly3%22>Road cave </a> </p>">
          <td class="icon">
              <span class="hidden">jelly2</span>
              <a href="#jelly3"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png" alt="monsters_tometik2.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Poisonous Ooze
          </td>
          <td>45</td>
          <td>140</td>
          <td>
              5-9
          </td>
          <td>15</td>
          <td>3</td>
          <td>20</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  167
</td>
          <td class="cond">
            <a title="On hit
  On target
    40% chance of Corrosive Slime (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#slime">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="jelly4" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-2</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Mundane necklace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Polished necklace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadcave0.html#jelly4%22>Road cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadcave1.html#jelly4%22>Road cave </a> </p>">
          <td class="icon">
              <span class="hidden">jelly2</span>
              <a href="#jelly4"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png" alt="monsters_tometik2.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Ochre Jelly
          </td>
          <td>50</td>
          <td>85</td>
          <td>
              10-14
          </td>
          <td></td>
          <td></td>
          <td>45</td>
          <td>5</td>
          <td>10</td>
          <td>3</td>
          <td>5</td>
          <td>  197
</td>
          <td class="cond">
            <a title="On hit
  On target
    40% chance of Corrosive Slime 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#slime">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="jelly5" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-2</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Mundane necklace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Polished necklace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadcave1.html#jelly5%22>Road cave </a> </p>">
          <td class="icon">
              <span class="hidden">jelly3</span>
              <a href="#jelly5"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png" alt="monsters_tometik2.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Crimson Jelly
          </td>
          <td>65</td>
          <td>115</td>
          <td>
              8-12
          </td>
          <td>10</td>
          <td>2</td>
          <td>70</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  211
</td>
          <td class="cond">
            <a title="On hit
  On target
    40% chance of Corrosive Slime 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#slime">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="jelly6" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#daggr_bloodlet%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Bloodletter</td> <td>1</td> <td>100%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-30</td> <td>100%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/roadcave1.html#jelly6%22>Road cave </a> </p>">
          <td class="icon">
              <span class="hidden">jelly_b</span>
              <a href="#jelly6" title="unique" class="at-icon unique size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png" alt="monsters_tometik2.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Emerald Ooze
          </td>
          <td>131</td>
          <td>115</td>
          <td>
              8-12
          </td>
          <td>10</td>
          <td>2</td>
          <td>70</td>
          <td>7</td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  308
</td>
          <td class="cond">
            <a title="On hit
  On target
    40% chance of Corrosive Slime 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#slime">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -0px">
  </a>

          
          </td>
      </tr>
      <tr id="mudfiend1" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-2</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Mundane necklace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -192px 0px 0px -192px%22></div> </td> <td class=%22left%22>Mudfiend goo</td> <td>1</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar1.html#mudfiend1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar1cave0.html#mudfiend1%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8cave0.html#mudfiend1%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">mudfiend</span>
              <a href="#mudfiend1"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png" alt="monsters_ld2.png" style="margin: -192px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Mudfiend
          </td>
          <td>37</td>
          <td>75</td>
          <td>
              4-6
          </td>
          <td>45</td>
          <td>4</td>
          <td>42</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  81
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="mudfiend2" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>0-2</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#junk_necklace0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Mundane necklace</td> <td>1</td> <td>5%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_3.png%22 alt=%22items_misc_3.png%22 style=%22margin: -192px 0px 0px -192px%22></div> </td> <td class=%22left%22>Mudfiend goo</td> <td>1</td> <td>20%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>5%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar1.html#mudfiend2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar1cave0.html#mudfiend2%22>Green maze </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/lodar8cave0.html#mudfiend2%22>Green maze </a> </p>">
          <td class="icon">
              <span class="hidden">mudfiend</span>
              <a href="#mudfiend2"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png" alt="monsters_ld2.png" style="margin: -192px 0px 0px -416px">
              </a>
          </td>
          <td class="left name drop">
              Tough mudfiend
          </td>
          <td>41</td>
          <td>78</td>
          <td>
              5-6
          </td>
          <td>45</td>
          <td>4</td>
          <td>45</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  93
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="skeletal_reaper" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -96px%22></div> </td> <td class=%22left%22>Sharpened gem</td> <td>1</td> <td>10%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_life%22 class=%22at-icon extraordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_2.png%22 alt=%22items_armours_2.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Gloves of life force</td> <td>1</td> <td>0.1%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>20-29</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain33.html#skeletal_reaper%22>Blackwater crypt </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain34.html#skeletal_reaper%22>Blackwater crypt </a> </p>">
          <td class="icon">
              <span class="hidden">restless_dead_2</span>
              <a href="#skeletal_reaper"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -32px 0px 0px -224px">
              </a>
          </td>
          <td class="left name drop">
              Skeletal reaper
          </td>
          <td>15</td>
          <td>150</td>
          <td>
              0-9
          </td>
          <td>20</td>
          <td>2</td>
          <td>110</td>
          <td></td>
          <td>10</td>
          <td>5</td>
          <td>5</td>
          <td>  62
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="fledgling_shadow_gargoyle" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-12</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave1.html#fledgling_shadow_gargoyle%22>Gargoyle cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave2.html#fledgling_shadow_gargoyle%22>Gargoyle cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road4.html#fledgling_shadow_gargoyle%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road4_gargoylecave.html#fledgling_shadow_gargoyle%22>Road </a> </p>">
          <td class="icon">
              <span class="hidden">shadowgarg1</span>
              <a href="#fledgling_shadow_gargoyle"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Fledgling shadow gargoyle
          </td>
          <td>36</td>
          <td>65</td>
          <td>
              3-9
          </td>
          <td>8</td>
          <td>3</td>
          <td>75</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  84
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="young_shadow_gargoyle" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-12</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave1.html#young_shadow_gargoyle%22>Gargoyle cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave2.html#young_shadow_gargoyle%22>Gargoyle cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road4.html#young_shadow_gargoyle%22>Road </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/road4_gargoylecave.html#young_shadow_gargoyle%22>Road </a> </p>">
          <td class="icon">
              <span class="hidden">shadowgarg1</span>
              <a href="#young_shadow_gargoyle"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Young shadow gargoyle
          </td>
          <td>35</td>
          <td>65</td>
          <td>
              3-9
          </td>
          <td>8</td>
          <td>3</td>
          <td>75</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  83
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="shadow_gargoyle" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-12</td> <td>70%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave1.html#shadow_gargoyle%22>Gargoyle cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave2.html#shadow_gargoyle%22>Gargoyle cave </a> </p>">
          <td class="icon">
              <span class="hidden">shadowgarg2</span>
              <a href="#shadow_gargoyle"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Shadow gargoyle
          </td>
          <td>37</td>
          <td>70</td>
          <td>
              4-10
          </td>
          <td>8</td>
          <td>3</td>
          <td>85</td>
          <td>3</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  93
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="tough_shadow_gargoyle" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>3-19</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small rock</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave1.html#tough_shadow_gargoyle%22>Gargoyle cave </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/gargoylecave2.html#tough_shadow_gargoyle%22>Gargoyle cave </a> </p>">
          <td class="icon">
              <span class="hidden">shadowgarg2</span>
              <a href="#tough_shadow_gargoyle"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Tough shadow gargoyle
          </td>
          <td>37</td>
          <td>70</td>
          <td>
              4-10
          </td>
          <td>8</td>
          <td>3</td>
          <td>85</td>
          <td>4</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  99
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="skeletal_warrior" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>16-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone2.html#skeletal_warrior%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse3.html#skeletal_warrior%22>Haunted house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse4.html#skeletal_warrior%22>Haunted house </a> </p>">
          <td class="icon">
              <span class="hidden">skeleton1</span>
              <a href="#skeletal_warrior"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_skeleton1.png" alt="monsters_skeleton1.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Skeletal warrior
          </td>
          <td>52</td>
          <td>60</td>
          <td>
              1-3
          </td>
          <td></td>
          <td></td>
          <td>40</td>
          <td>1</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  63
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="skeleton" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>16-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone2.html#skeleton%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse3.html#skeleton%22>Haunted house </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse4.html#skeleton%22>Haunted house </a> </p>">
          <td class="icon">
              <span class="hidden">skeleton1</span>
              <a href="#skeleton"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_skeleton1.png" alt="monsters_skeleton1.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Skeleton
          </td>
          <td>35</td>
          <td>60</td>
          <td>
              1-4
          </td>
          <td></td>
          <td></td>
          <td>40</td>
          <td></td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  38
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="bone_warrior" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>16-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_dmg1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Ring of damage +1</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone1.html#bone_warrior%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone2.html#bone_warrior%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone3.html#bone_warrior%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone_inner.html#bone_warrior%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone_upper.html#bone_warrior%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave2.html#bone_warrior%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave4.html#bone_warrior%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">skeleton2</span>
              <a href="#bone_warrior"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_skeleton1.png" alt="monsters_skeleton1.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Bone warrior
          </td>
          <td>32</td>
          <td>120</td>
          <td>
              3-9
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>2</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  79
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="bone_champion" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>20-29</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_dmg2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Ring of damage +2</td> <td>1</td> <td>1%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone3.html#bone_champion%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone_upper.html#bone_champion%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhaven2.html#bone_champion%22>Way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave0.html#bone_champion%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave1.html#bone_champion%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave2.html#bone_champion%22>Cave on way to Brimhaven </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/waytobrimhavencave3.html#bone_champion%22>Cave on way to Brimhaven </a> </p>">
          <td class="icon">
              <span class="hidden">skeleton3</span>
              <a href="#bone_champion"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_skeleton1.png" alt="monsters_skeleton1.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Bone champion
          </td>
          <td>49</td>
          <td>130</td>
          <td>
              4-9
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>2</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  103
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="skeletal_master" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -64px%22></div> </td> <td class=%22left%22>Bone</td> <td>1</td> <td>30%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>16-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone2.html#skeletal_master%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/hauntedhouse4.html#skeletal_master%22>Haunted house </a> </p>">
          <td class="icon">
              <span class="hidden">skeletonmaster</span>
              <a href="#skeletal_master"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_skeleton2.png" alt="monsters_skeleton2.png" style="margin: -0px 0px 0px -0px">
              </a>
          </td>
          <td class="left name drop">
              Skeletal master
          </td>
          <td>52</td>
          <td>70</td>
          <td>
              1-3
          </td>
          <td></td>
          <td></td>
          <td>30</td>
          <td>2</td>
          <td>10</td>
          <td>5</td>
          <td>10</td>
          <td>  66
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="fledgling_gargoyle" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone1.html#fledgling_gargoyle%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone2.html#fledgling_gargoyle%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone3.html#fledgling_gargoyle%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone_inner.html#fledgling_gargoyle%22>Flagstone prison </a> </p>">
          <td class="icon">
              <span class="hidden">undead1</span>
              <a href="#fledgling_gargoyle"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -32px">
              </a>
          </td>
          <td class="left name drop">
              Fledgling Gargoyle
          </td>
          <td>35</td>
          <td>110</td>
          <td>
              3-6
          </td>
          <td></td>
          <td></td>
          <td>60</td>
          <td>2</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  63
</td>
          <td class="cond">
          
          
          </td>
      </tr>
      <tr id="gargoyle" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -320px%22></div> </td> <td class=%22left%22>Gold coins</td> <td>5-23</td> <td>70%</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>1</td> <td>25%</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>10%</td> </tr> </table> <p class=%22left location%22> <img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_map.png%22 alt=%22ui_icon_map.png%22 style=%22margin: -0px 0px 0px -0px%22> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone1.html#gargoyle%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone2.html#gargoyle%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone3.html#gargoyle%22>Flagstone prison </a> <a target=%22_blank%22 href=%22http://andorstrail.irkalla.cz/0.7.0/map/flagstone_inner.html#gargoyle%22>Flagstone prison </a> </p>">
          <td class="icon">
              <span class="hidden">undead1</span>
              <a href="#gargoyle"  class="at-icon size1x1">
                  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -64px">
              </a>
          </td>
          <td class="left name drop">
              Gargoyle
          </td>
          <td>47</td>
          <td>110</td>
          <td>
              3-7
          </td>
          <td>10</td>
          <td>2</td>
          <td>70</td>
          <td>2</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>  83
</td>
          <td class="cond">
          
          
          </td>
      </tr>
    </tbody>
    </table>
  </body>
</html>