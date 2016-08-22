<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <title>Andor's Trail NPC &amp; Merchant List</title>
  <link rel="shortcut icon" href="http://andorstrail.irkalla.cz/favicon.ico" type="image/x-icon">
  <meta name="description" content="Andor's Trail NPC &amp; Merchant List">
  <link rel="image_src" href="http://andorstrail.irkalla.cz/image/icon.png">
  <link rel="stylesheet" type="text/css" href="http://andorstrail.irkalla.cz/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="http://andorstrail.irkalla.cz/css/main.css">
  <script type="text/javascript" src="http://andorstrail.irkalla.cz/js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="http://andorstrail.irkalla.cz/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="http://andorstrail.irkalla.cz/js/function.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      oTablemerchant = $('#merchants').dataTable({ 
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
        "aoColumnDefs": [

        ]
      } );      
      oTablenpc = $('#npcs').dataTable({ 
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
        "aoColumnDefs": [

        ]
      } );      

    $('#merchants td.drop').live('click', function () {        
      tr = this.parentNode;
      if (oTablemerchant.fnIsOpen(tr)) closeTable(oTablemerchant,tr); else openTable(oTablemerchant,tr);
    } );
    $('#npcs td.drop').live('click', function () {        
      tr = this.parentNode;
      if (oTablenpc.fnIsOpen(tr)) closeTable(oTablenpc,tr); else openTable(oTablenpc,tr);
    } );
    openHash();
    });     
  </script>
  <style type="text/css">
    table.dataTable tr td.name {width: 50%;}
    table.dataTable tr td.category {width: 50%;}
  </style>
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
          <a  href="http://andorstrail.irkalla.cz/0.7.0/monsterlist.php">MONSTER</a>
      </li>
      <li>
          <a class="current" href="http://andorstrail.irkalla.cz/0.7.0/npclist.php">NPC &amp; MERCHANT</a>
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
     <h1><a href="http://andorstrail.irkalla.cz/0.7.0/"><img alt="" src="http://andorstrail.irkalla.cz/image/icon.png"></a>
     Andor's Trail NPC &amp; Merchant List</h1>
     <ul>
      <li><a href="#merchants">Merchant</a></li>
      <li><a href="#npcs">Npc</a></li>
     </ul>

     <h2>Merchant</h2>
     <table id="merchants" width="40%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>Location</th></tr>
      </thead>
      <tbody>
      <tr id="agthor" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_dl%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Dull two-handed sword</td> <td>1</td> <td>44&nbsp;gold</td> <td>32&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_stl%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_2.png%22 alt=%22items_weapons_2.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Two-handed steel sword</td> <td>1</td> <td>536&nbsp;gold</td> <td>396&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#club_bld%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_reterski_1.png%22 alt=%22items_reterski_1.png%22 style=%22margin: -192px 0px 0px -0px%22></a> </td> <td class=%22left%22>Spiked club of bleeding</td> <td>1</td> <td>123&nbsp;gold</td> <td>91&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#graxe_fury%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -128px 0px 0px -64px%22></a> </td> <td class=%22left%22>Greataxe of fury</td> <td>1</td> <td>127&nbsp;gold</td> <td>94&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#graxe_massive%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png%22 alt=%22items_misc_5.png%22 style=%22margin: -128px 0px 0px -160px%22></a> </td> <td class=%22left%22>Massive greataxe</td> <td>1</td> <td>1,780&nbsp;gold</td> <td>1,316&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hmr_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -96px%22></a> </td> <td class=%22left%22>Iron warhammer</td> <td>1</td> <td>1&nbsp;gold</td> <td>1&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hvhead_irn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Heavy iron skullcap</td> <td>1</td> <td>498&nbsp;gold</td> <td>368&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hvhead_stl%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Heavy steel skullcap</td> <td>1</td> <td>882&nbsp;gold</td> <td>652&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#mace_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Iron mace</td> <td>1</td> <td>706&nbsp;gold</td> <td>522&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">agthor</span><a href="#agthor"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name drop">Agthor</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads6.html#agthor">Road before crossroads
</a>
          </td>                    
      </tr>
      <tr id="ailshara" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armor3%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -64px%22></a> </td> <td class=%22left%22>Hard leather armour</td> <td>1</td> <td>2,768&nbsp;gold</td> <td>2,046&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armour_leather_villain%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -64px%22></a> </td> <td class=%22left%22>Villain's leather armour</td> <td>1</td> <td>4,255&nbsp;gold</td> <td>3,145&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armour_misfortune%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Leather shirt of misfortune</td> <td>1</td> <td>2,828&nbsp;gold</td> <td>2,090&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Superior iron dagger</td> <td>1</td> <td>81&nbsp;gold</td> <td>60&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger_sharp_steel%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Sharp steel dagger</td> <td>1</td> <td>1,642&nbsp;gold</td> <td>1,214&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Fine leather gloves</td> <td>1</td> <td>44&nbsp;gold</td> <td>32&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_leather_attack%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Leather gloves of attack</td> <td>1</td> <td>587&nbsp;gold</td> <td>434&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_troublemaker%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -256px%22></a> </td> <td class=%22left%22>Troublemaker's gloves</td> <td>1</td> <td>576&nbsp;gold</td> <td>426&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#quickdagger1%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Quickstrike dagger</td> <td>1</td> <td>589&nbsp;gold</td> <td>435&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_polished_backstab%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Polished ring of backstabbing</td> <td>1</td> <td>3,141&nbsp;gold</td> <td>2,321&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_villain%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Villain's ring</td> <td>1</td> <td>3,163&nbsp;gold</td> <td>2,338&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#feygard_shipment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Feygard errands</td> </tr>">
          <td class="icon"><span class="hidden">ailshara</span><a href="#ailshara"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -256px"></a></td>
          <td class="left name drop">Ailshara</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/houseatcrossroads0.html#ailshara">House at crossroads
</a>
          </td>                    
      </tr>
      <tr id="alynndir" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armour_crude_leather%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -64px%22></a> </td> <td class=%22left%22>Crude leather armour</td> <td>1</td> <td>591&nbsp;gold</td> <td>437&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armour_rigid_leather%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -64px%22></a> </td> <td class=%22left%22>Rigid leather armour</td> <td>1</td> <td>719&nbsp;gold</td> <td>531&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots_hard_leather%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -64px%22></a> </td> <td class=%22left%22>Hardened leather boots</td> <td>1</td> <td>720&nbsp;gold</td> <td>532&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>3</td> <td>7&nbsp;gold</td> <td>5&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_crude_leather%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Crude leather gloves</td> <td>1</td> <td>207&nbsp;gold</td> <td>153&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -96px 0px 0px -192px%22></div> </td> <td class=%22left%22>Animal hair</td> <td>5</td> <td>2&nbsp;gold</td> <td>2&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hat_fine_leather%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Fine leather cap</td> <td>1</td> <td>973&nbsp;gold</td> <td>719&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hat_leather_vision%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Leather cap of reduced vision</td> <td>1</td> <td>1,117&nbsp;gold</td> <td>825&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>10</td> <td>46&nbsp;gold</td> <td>34&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>20</td> <td>33&nbsp;gold</td> <td>25&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -320px%22></div> </td> <td class=%22left%22>Rat tail</td> <td>5</td> <td>2&nbsp;gold</td> <td>2&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_jinxed1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Jinxed ring of damage resistance</td> <td>1</td> <td>263&nbsp;gold</td> <td>195&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>10</td> <td>2&nbsp;gold</td> <td>2&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">alynndir</span><a href="#alynndir"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png" alt="monsters_mage2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Alynndir</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/road5_house.html#alynndir">Road house
</a>
          </td>                    
      </tr>
      <tr id="arambold" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_crude_cloth%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Crude cloth gloves</td> <td>1</td> <td>36&nbsp;gold</td> <td>26&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_fancy%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Fancy gloves</td> <td>1</td> <td>90&nbsp;gold</td> <td>66&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_fumbling%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Gloves of fumbling</td> <td>1</td> <td>-497&nbsp;gold</td> <td>-367&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hat1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Green hat</td> <td>1</td> <td>15&nbsp;gold</td> <td>11&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hat2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Fine green hat</td> <td>1</td> <td>29&nbsp;gold</td> <td>21&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_challenger%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Challenger's ring</td> <td>1</td> <td>469&nbsp;gold</td> <td>347&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_dmg1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Ring of damage +1</td> <td>1</td> <td>247&nbsp;gold</td> <td>183&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_dmg2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Ring of damage +2</td> <td>1</td> <td>458&nbsp;gold</td> <td>338&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Cloth shirt</td> <td>1</td> <td>18&nbsp;gold</td> <td>14&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_torn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Torn shirt</td> <td>1</td> <td>106&nbsp;gold</td> <td>78&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">arambold</span><a href="#arambold"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name drop">Arambold</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossglen_hall.html#arambold">Crossglen hall
</a>
          </td>                    
      </tr>
      <tr id="arghes" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots_brawler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png%22 alt=%22items_armours_3.png%22 style=%22margin: -96px 0px 0px -256px%22></a> </td> <td class=%22left%22>Bar brawler's boots</td> <td>1</td> <td>0&nbsp;gold</td> <td>0&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#helm_redeye1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Cap of red eyes</td> <td>1</td> <td>1&nbsp;gold</td> <td>1&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#helm_redeye2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Cap of bloody eyes</td> <td>1</td> <td>1&nbsp;gold</td> <td>1&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_barbrawler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Bar brawler's ring</td> <td>1</td> <td>255&nbsp;gold</td> <td>189&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_troublemaker%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Troublemaker's ring</td> <td>1</td> <td>917&nbsp;gold</td> <td>677&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">arghes</span><a href="#arghes"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png" alt="monsters_rogue1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Arghes</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern0.html#arghes">Remgard tavern
</a>
          </td>                    
      </tr>
      <tr id="arnal" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_fine_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -128px 0px 0px -0px%22></a> </td> <td class=%22left%22>Fine iron axe</td> <td>1</td> <td>420&nbsp;gold</td> <td>310&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger_sharp_steel%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Sharp steel dagger</td> <td>1</td> <td>1,642&nbsp;gold</td> <td>1,214&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_combat1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -256px%22></a> </td> <td class=%22left%22>Combat gloves</td> <td>1</td> <td>1,099&nbsp;gold</td> <td>813&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_remgard1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -288px%22></a> </td> <td class=%22left%22>Remgard fighting gloves</td> <td>1</td> <td>1,386&nbsp;gold</td> <td>1,024&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_remgard2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -288px%22></a> </td> <td class=%22left%22>Enchanted Remgard gloves</td> <td>1</td> <td>1,525&nbsp;gold</td> <td>1,127&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#longsword_hard_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Hardened iron longsword</td> <td>1</td> <td>416&nbsp;gold</td> <td>308&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#sword_hard_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Hardened iron sword</td> <td>1</td> <td>424&nbsp;gold</td> <td>314&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">arnal</span><a href="#arnal"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -32px 0px 0px -256px"></a></td>
          <td class="left name drop">Arnal</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_weapon.html#arnal">Remgard weapon
</a>
          </td>                    
      </tr>
      <tr id="audir" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -128px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron axe</td> <td>1</td> <td>359&nbsp;gold</td> <td>265&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_black1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -256px%22></a> </td> <td class=%22left%22>Black axe</td> <td>1</td> <td>84&nbsp;gold</td> <td>62&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots_crude_leather%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude leather boots</td> <td>1</td> <td>36&nbsp;gold</td> <td>26&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broadsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -160px%22></a> </td> <td class=%22left%22>Iron broadsword</td> <td>1</td> <td>289&nbsp;gold</td> <td>213&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broken_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Broken wooden buckler</td> <td>1</td> <td>138&nbsp;gold</td> <td>102&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_irn1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png%22 alt=%22items_misc_5.png%22 style=%22margin: -128px 0px 0px -64px%22></a> </td> <td class=%22left%22>Two-handed iron sword</td> <td>1</td> <td>106&nbsp;gold</td> <td>78&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_rst%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Rusty claymore</td> <td>1</td> <td>41&nbsp;gold</td> <td>31&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#club1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -0px%22></a> </td> <td class=%22left%22>Wooden club</td> <td>1</td> <td>8&nbsp;gold</td> <td>6&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#club3%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -64px%22></a> </td> <td class=%22left%22>Iron club</td> <td>1</td> <td>291&nbsp;gold</td> <td>215&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hammer0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -96px%22></a> </td> <td class=%22left%22>Iron hammer</td> <td>1</td> <td>14&nbsp;gold</td> <td>10&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude iron sword</td> <td>1</td> <td>14&nbsp;gold</td> <td>10&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>90&nbsp;gold</td> <td>66&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Iron longsword</td> <td>1</td> <td>139&nbsp;gold</td> <td>103&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#longsword_hard_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Hardened iron longsword</td> <td>1</td> <td>416&nbsp;gold</td> <td>308&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#qtrstaff%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -32px 0px 0px -160px%22></a> </td> <td class=%22left%22>Quarterstaff</td> <td>1</td> <td>12&nbsp;gold</td> <td>9&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#rusted_iron_sword%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Rusted iron sword</td> <td>1</td> <td>60&nbsp;gold</td> <td>44&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield3%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Reinforced wooden buckler</td> <td>1</td> <td>260&nbsp;gold</td> <td>192&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield_cracked_wooden%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Cracked wooden buckler</td> <td>1</td> <td>39&nbsp;gold</td> <td>29&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield_crude_wooden%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude wooden buckler</td> <td>1</td> <td>36&nbsp;gold</td> <td>26&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield_wooden_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Second-hand wooden buckler</td> <td>1</td> <td>106&nbsp;gold</td> <td>78&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shortsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Iron shortsword</td> <td>1</td> <td>90&nbsp;gold</td> <td>66&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">audir</span><a href="#audir"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Audir</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossglen_smith.html#audir">Crossglen smith
</a>
          </td>                    
      </tr>
      <tr id="bela" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#apple_green%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Green apple</td> <td>5</td> <td>16&nbsp;gold</td> <td>12&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#apple_red%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -0px 0px 0px -96px%22></a> </td> <td class=%22left%22>Red apple</td> <td>5</td> <td>25&nbsp;gold</td> <td>19&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#carrot%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Carrot</td> <td>5</td> <td>16&nbsp;gold</td> <td>12&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mead%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Mead</td> <td>5</td> <td>17&nbsp;gold</td> <td>13&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>5</td> <td>33&nbsp;gold</td> <td>25&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat_cooked%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -416px%22></a> </td> <td class=%22left%22>Cooked meat</td> <td>5</td> <td>90&nbsp;gold</td> <td>66&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#milk%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -416px%22></a> </td> <td class=%22left%22>Milk</td> <td>5</td> <td>24&nbsp;gold</td> <td>18&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mushroom%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -160px%22></a> </td> <td class=%22left%22>Mushroom</td> <td>5</td> <td>3&nbsp;gold</td> <td>3&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">bela</span><a href="#bela"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -224px"></a></td>
          <td class="left name drop">Bela</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_tavern.html#bela">Fallhaven tavern
</a>
          </td>                    
      </tr>
      <tr id="birgil" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>10</td> <td>46&nbsp;gold</td> <td>34&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor potion of health</td> <td>10</td> <td>21&nbsp;gold</td> <td>15&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mead%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Mead</td> <td>10</td> <td>17&nbsp;gold</td> <td>13&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#radish%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Radish</td> <td>5</td> <td>7&nbsp;gold</td> <td>5&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">birgil</span><a href="#birgil"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -128px 0px 0px -32px"></a></td>
          <td class="left name drop">Birgil</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain22.html#birgil">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="dunla" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armor2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Superior leather armour</td> <td>1</td> <td>718&nbsp;gold</td> <td>530&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armour_firm_leather%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -64px%22></a> </td> <td class=%22left%22>Firm leather armour</td> <td>1</td> <td>480&nbsp;gold</td> <td>354&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Sharp iron dagger</td> <td>1</td> <td>61&nbsp;gold</td> <td>45&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#daggr_bloodlet%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Bloodletter</td> <td>1</td> <td>115&nbsp;gold</td> <td>85&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#daggr_curv%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -96px%22></a> </td> <td class=%22left%22>Curved dagger</td> <td>1</td> <td>649&nbsp;gold</td> <td>479&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></div> </td> <td class=%22left%22>Polished gem</td> <td>5</td> <td>9&nbsp;gold</td> <td>7&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves3%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -256px%22></a> </td> <td class=%22left%22>Snakeskin gloves</td> <td>1</td> <td>83&nbsp;gold</td> <td>61&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves4%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -256px%22></a> </td> <td class=%22left%22>Fine snakeskin gloves</td> <td>1</td> <td>168&nbsp;gold</td> <td>124&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_backstab%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Ring of backstabbing</td> <td>1</td> <td>1,567&nbsp;gold</td> <td>1,159&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_polished_combat%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Polished combat ring</td> <td>1</td> <td>1,548&nbsp;gold</td> <td>1,144&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Fine shirt</td> <td>1</td> <td>83&nbsp;gold</td> <td>61&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_dmgresist%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Hardened leather shirt</td> <td>1</td> <td>1,878&nbsp;gold</td> <td>1,388&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#sword_villains%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -64px%22></a> </td> <td class=%22left%22>Villain's blade</td> <td>1</td> <td>1,915&nbsp;gold</td> <td>1,415&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">dunla</span><a href="#dunla"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png" alt="monsters_rogue1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Dunla</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_tavern.html#dunla">Vilegard tavern
</a>
          </td>                    
      </tr>
      <tr id="ervelyn" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armour_cvest1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png%22 alt=%22items_armours_3.png%22 style=%22margin: -0px 0px 0px -160px%22></a> </td> <td class=%22left%22>Combat vest</td> <td>1</td> <td>1,283&nbsp;gold</td> <td>949&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armour_cvest2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png%22 alt=%22items_armours_3.png%22 style=%22margin: -0px 0px 0px -160px%22></a> </td> <td class=%22left%22>Remgard combat vest</td> <td>1</td> <td>1,431&nbsp;gold</td> <td>1,057&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_arulir%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_2.png%22 alt=%22items_armours_2.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Arulir skin gloves</td> <td>1</td> <td>2,062&nbsp;gold</td> <td>1,524&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_leather1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Hardened leather gloves</td> <td>1</td> <td>871&nbsp;gold</td> <td>643&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Fine shirt</td> <td>1</td> <td>83&nbsp;gold</td> <td>61&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_patched_cloth%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Patched cloth shirt</td> <td>1</td> <td>239&nbsp;gold</td> <td>177&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_weathered%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Weathered shirt</td> <td>1</td> <td>144&nbsp;gold</td> <td>106&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#remgard2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>What is that stench?</td> </tr>">
          <td class="icon"><span class="hidden">ervelyn</span><a href="#ervelyn"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -352px 0px 0px -256px"></a></td>
          <td class="left name drop">Ervelyn</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_clothes.html#ervelyn">Remgard clothes
</a>
          </td>                    
      </tr>
      <tr id="gallain" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#bread%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Bread</td> <td>5</td> <td>7&nbsp;gold</td> <td>5&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mead%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Mead</td> <td>5</td> <td>17&nbsp;gold</td> <td>13&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat_cooked%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -416px%22></a> </td> <td class=%22left%22>Cooked meat</td> <td>5</td> <td>90&nbsp;gold</td> <td>66&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">gallain</span><a href="#gallain"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png" alt="monsters_man1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Gallain</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/houseatcrossroads0.html#gallain">House at crossroads
</a>
          </td>                    
      </tr>
      <tr id="ganos" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Superior leather boots</td> <td>1</td> <td>44&nbsp;gold</td> <td>32&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>14&nbsp;gold</td> <td>10&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Sharp iron dagger</td> <td>1</td> <td>61&nbsp;gold</td> <td>45&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger_sharp_steel%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Sharp steel dagger</td> <td>1</td> <td>1,642&nbsp;gold</td> <td>1,214&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></div> </td> <td class=%22left%22>Polished gem</td> <td>5</td> <td>9&nbsp;gold</td> <td>7&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_attack1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Gloves of swift attack</td> <td>1</td> <td>173&nbsp;gold</td> <td>128&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_grip%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Gloves of better grip</td> <td>1</td> <td>542&nbsp;gold</td> <td>400&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#necklace_strike%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -192px%22></a> </td> <td class=%22left%22>Necklace of strike</td> <td>1</td> <td>957&nbsp;gold</td> <td>707&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_crit1%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Ring of strike</td> <td>1</td> <td>3,359&nbsp;gold</td> <td>2,483&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_dmg2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Ring of damage +2</td> <td>1</td> <td>458&nbsp;gold</td> <td>338&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_dmg_4%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Ring of damage +4</td> <td>1</td> <td>1,343&nbsp;gold</td> <td>993&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_taverbrawler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Tavern brawler's ring</td> <td>1</td> <td>361&nbsp;gold</td> <td>267&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_patched_cloth%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Patched cloth shirt</td> <td>1</td> <td>239&nbsp;gold</td> <td>177&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_weathered%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Weathered shirt</td> <td>1</td> <td>144&nbsp;gold</td> <td>106&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">ganos</span><a href="#ganos"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png" alt="monsters_rogue1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Ganos</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_tavern.html#ganos">Fallhaven tavern
</a>
          </td>                    
      </tr>
      <tr id="grimion" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#carrot%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Carrot</td> <td>5</td> <td>16&nbsp;gold</td> <td>12&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mead%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Mead</td> <td>5</td> <td>17&nbsp;gold</td> <td>13&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat_cooked%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -416px%22></a> </td> <td class=%22left%22>Cooked meat</td> <td>5</td> <td>90&nbsp;gold</td> <td>66&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mushroom%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -160px%22></a> </td> <td class=%22left%22>Mushroom</td> <td>5</td> <td>3&nbsp;gold</td> <td>3&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">grimion</span><a href="#grimion"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name drop">Grimion</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford3.html#grimion">Loneford
</a>
          </td>                    
      </tr>
      <tr id="gruil" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#dagger0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron dagger</td> <td>1</td> <td>14&nbsp;gold</td> <td>10&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>5</td> <td>2&nbsp;gold</td> <td>2&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></div> </td> <td class=%22left%22>Ruby gem</td> <td>5</td> <td>7&nbsp;gold</td> <td>5&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></div> </td> <td class=%22left%22>Polished gem</td> <td>5</td> <td>9&nbsp;gold</td> <td>7&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_barbrawler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Bar brawler's ring</td> <td>1</td> <td>255&nbsp;gold</td> <td>189&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_crude_combat%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude combat ring</td> <td>1</td> <td>51&nbsp;gold</td> <td>37&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_weathered%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Weathered shirt</td> <td>1</td> <td>144&nbsp;gold</td> <td>106&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#andor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Search for Andor</td> </tr>">
          <td class="icon"><span class="hidden">gruil</span><a href="#gruil"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png" alt="monsters_rogue1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Gruil</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossglen_hall.html#gruil">Crossglen hall
</a>
          </td>                    
      </tr>
      <tr id="hadracor" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armour_crude_leather%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -64px%22></a> </td> <td class=%22left%22>Crude leather armour</td> <td>1</td> <td>591&nbsp;gold</td> <td>437&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armour_rigid_leather%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -64px%22></a> </td> <td class=%22left%22>Rigid leather armour</td> <td>1</td> <td>719&nbsp;gold</td> <td>531&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -128px 0px 0px -0px%22></a> </td> <td class=%22left%22>Woodcutter axe</td> <td>1</td> <td>28&nbsp;gold</td> <td>20&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_black2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Reinforced black axe</td> <td>1</td> <td>865&nbsp;gold</td> <td>639&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_gutsplitter%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -128px 0px 0px -64px%22></a> </td> <td class=%22left%22>Gutsplitter</td> <td>1</td> <td>3,143&nbsp;gold</td> <td>2,323&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Leather gloves</td> <td>1</td> <td>26&nbsp;gold</td> <td>20&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_woodcutter%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Woodcutter's gloves</td> <td>1</td> <td>490&nbsp;gold</td> <td>362&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#graxe_black%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -352px%22></a> </td> <td class=%22left%22>Black greataxe</td> <td>1</td> <td>1&nbsp;gold</td> <td>1&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hammer_skullcrusher%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -96px%22></a> </td> <td class=%22left%22>Skullcrusher</td> <td>1</td> <td>3,613&nbsp;gold</td> <td>2,671&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#woodcutter_boots%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -64px%22></a> </td> <td class=%22left%22>Woodcutter's boots</td> <td>1</td> <td>1,004&nbsp;gold</td> <td>742&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#woodcutter_hatchet%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -128px 0px 0px -32px%22></a> </td> <td class=%22left%22>Woodcutter's hatchet</td> <td>1</td> <td>0&nbsp;gold</td> <td>0&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#hadracor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Devastated land</td> </tr>">
          <td class="icon"><span class="hidden">hadracor</span><a href="#hadracor"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name drop">Hadracor</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower1.html#hadracor">Road to Carn tower
</a>
          </td>                    
      </tr>
      <tr id="herec" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_fatigue_restore%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -416px%22></a> </td> <td class=%22left%22>Restore fatigue</td> <td>10</td> <td>242&nbsp;gold</td> <td>179&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bwm_wyrms%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>No weakness</td> </tr>">
          <td class="icon"><span class="hidden">herec</span><a href="#herec"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -288px"></a></td>
          <td class="left name drop">Herec</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain44.html#herec">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="hjaldar" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_focus_ac%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -288px%22></a> </td> <td class=%22left%22>Potion of accuracy focus</td> <td>8</td> <td>242&nbsp;gold</td> <td>179&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_focus_ac2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -288px%22></a> </td> <td class=%22left%22>Strong potion of accuracy focus</td> <td>5</td> <td>711&nbsp;gold</td> <td>525&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_focus_dmg%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -352px%22></a> </td> <td class=%22left%22>Potion of damage focus</td> <td>8</td> <td>313&nbsp;gold</td> <td>231&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_focus_dmg2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -352px%22></a> </td> <td class=%22left%22>Strong potion of damage focus</td> <td>5</td> <td>725&nbsp;gold</td> <td>536&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#sisterfight%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A difference in opinion</td> </tr>">
          <td class="icon"><span class="hidden">hjaldar</span><a href="#hjaldar"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -320px"></a></td>
          <td class="left name drop">Hjaldar</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_villager1.html#hjaldar">Remgard villager
</a>
          </td>                    
      </tr>
      <tr id="iducus" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#bwm_combat_ring%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Blackwater ring of combat</td> <td>2</td> <td>684&nbsp;gold</td> <td>506&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#bwm_leather_armour%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Blackwater leather armour</td> <td>2</td> <td>2,934&nbsp;gold</td> <td>2,168&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#bwm_leather_cap%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Blackwater leather cap</td> <td>2</td> <td>830&nbsp;gold</td> <td>614&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">iducus</span><a href="#iducus"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -224px"></a></td>
          <td class="left name drop">Iducus</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain44.html#iducus">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="jolnor" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>10</td> <td>46&nbsp;gold</td> <td>34&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_major2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Major potion of health</td> <td>10</td> <td>322&nbsp;gold</td> <td>238&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor potion of health</td> <td>10</td> <td>21&nbsp;gold</td> <td>15&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#necklace_defender_stone%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Defender's stone</td> <td>1</td> <td>1,524&nbsp;gold</td> <td>1,126&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#necklace_shield2%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Shielding necklace</td> <td>1</td> <td>1,443&nbsp;gold</td> <td>1,067&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_defender%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Defender's ring</td> <td>1</td> <td>868&nbsp;gold</td> <td>642&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_dmg6%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -96px%22></a> </td> <td class=%22left%22>Ring of damage +6</td> <td>1</td> <td>3,664&nbsp;gold</td> <td>2,708&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_dmg_3%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Ring of damage +3</td> <td>1</td> <td>718&nbsp;gold</td> <td>530&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_protector%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -128px%22></a> </td> <td class=%22left%22>Ring of the protector</td> <td>1</td> <td>4,306&nbsp;gold</td> <td>3,182&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#jolnor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Spies in the foam</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#kaori%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Kaori's errands</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#vilegard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Trusting an outsider</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#wrye%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Uncertain cause</td> </tr>">
          <td class="icon"><span class="hidden">jolnor</span><a href="#jolnor"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -256px"></a></td>
          <td class="left name drop">Jolnor</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_chapel.html#jolnor">Vilegard chapel
</a>
          </td>                    
      </tr>
      <tr id="kendelow" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#carrot%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Carrot</td> <td>5</td> <td>16&nbsp;gold</td> <td>12&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mead%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Mead</td> <td>5</td> <td>17&nbsp;gold</td> <td>13&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat_cooked%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -416px%22></a> </td> <td class=%22left%22>Cooked meat</td> <td>5</td> <td>90&nbsp;gold</td> <td>66&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mushroom%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -160px%22></a> </td> <td class=%22left%22>Mushroom</td> <td>5</td> <td>3&nbsp;gold</td> <td>3&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">kendelow</span><a href="#kendelow"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png" alt="monsters_man1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Kendelow</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern0.html#kendelow">Remgard tavern
</a>
          </td>                    
      </tr>
      <tr id="khorailla" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#carrots%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -0px 0px 0px -448px%22></a> </td> <td class=%22left%22>Carrots</td> <td>5-12</td> <td>29&nbsp;gold</td> <td>21&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#cheese%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -288px%22></a> </td> <td class=%22left%22>Cheese</td> <td>5-12</td> <td>44&nbsp;gold</td> <td>32&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#chkn_leg%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png%22 alt=%22items_misc_2.png%22 style=%22margin: -0px 0px 0px -416px%22></a> </td> <td class=%22left%22>Cooked chicken leg</td> <td>5-12</td> <td>145&nbsp;gold</td> <td>107&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#cookperch%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -384px%22></a> </td> <td class=%22left%22>Cooked perch</td> <td>5-12</td> <td>173&nbsp;gold</td> <td>128&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#drink_charwood1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Sap of the charwood tree</td> <td>5-12</td> <td>110&nbsp;gold</td> <td>82&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#drink_charwood2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Concentrated charwood sap</td> <td>5-12</td> <td>293&nbsp;gold</td> <td>217&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#rawperch%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Raw perch</td> <td>5-12</td> <td>26&nbsp;gold</td> <td>20&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Destined for great things</td> </tr>">
          <td class="icon"><span class="hidden">khorailla</span><a href="#khorailla"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -352px 0px 0px -32px"></a></td>
          <td class="left name drop">Khorailla</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/tradehouse0.html#khorailla">Trade house
</a>
          </td>                    
      </tr>
      <tr id="lleglaris" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_fear%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_reterski_1.png%22 alt=%22items_reterski_1.png%22 style=%22margin: -160px 0px 0px -32px%22></a> </td> <td class=%22left%22>Axe of fear</td> <td>1-5</td> <td>2,148&nbsp;gold</td> <td>1,588&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_lightblack%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Light black axe</td> <td>1-5</td> <td>3,061&nbsp;gold</td> <td>2,263&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_whirl%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -128px 0px 0px -160px%22></a> </td> <td class=%22left%22>Axe of whirlwind</td> <td>1-5</td> <td>3,595&nbsp;gold</td> <td>2,657&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_def2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Superior defender's claymore</td> <td>1-5</td> <td>1,172&nbsp;gold</td> <td>866&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_gnt%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Giant's claymore</td> <td>1-5</td> <td>3,020&nbsp;gold</td> <td>2,232&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_serp%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_2.png%22 alt=%22items_weapons_2.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Serpent's fang</td> <td>1-5</td> <td>4,129&nbsp;gold</td> <td>3,052&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#graxe_exec%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -128px 0px 0px -416px%22></a> </td> <td class=%22left%22>Executioner's greataxe</td> <td>1-5</td> <td>2,634&nbsp;gold</td> <td>1,947&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hatchet_sharp%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png%22 alt=%22items_weapons_3.png%22 style=%22margin: -64px 0px 0px -256px%22></a> </td> <td class=%22left%22>Sharpened hatchet</td> <td>1-5</td> <td>0&nbsp;gold</td> <td>0&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hglv_plat1%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -384px%22></a> </td> <td class=%22left%22>Worn plated gloves</td> <td>1-5</td> <td>612&nbsp;gold</td> <td>452&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lleglaris%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Long lost memories</td> </tr>">
          <td class="icon"><span class="hidden">lleglaris</span><a href="#lleglaris"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -64px 0px 0px -32px"></a></td>
          <td class="left name drop">Lleglaris</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/tradehouse1.html#lleglaris">Trade house
</a>
          </td>                    
      </tr>
      <tr id="lodar" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_aware%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -96px 0px 0px -32px%22></a> </td> <td class=%22left%22>Potion of vulnerabilities</td> <td>5-12</td> <td>518&nbsp;gold</td> <td>383&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_bm_lodar%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -224px 0px 0px -64px%22></a> </td> <td class=%22left%22>Lodar's bonemeal potion</td> <td>15-70</td> <td>91&nbsp;gold</td> <td>67&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_courage%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -160px 0px 0px -128px%22></a> </td> <td class=%22left%22>Liquid courage</td> <td>5-12</td> <td>196&nbsp;gold</td> <td>145&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_haste%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -64px 0px 0px -32px%22></a> </td> <td class=%22left%22>Potion of haste</td> <td>3</td> <td>2,358&nbsp;gold</td> <td>1,743&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_healthlodar%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -192px 0px 0px -0px%22></a> </td> <td class=%22left%22>Lodar's potion of health</td> <td>5-12</td> <td>104&nbsp;gold</td> <td>77&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_regen1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -192px 0px 0px -128px%22></a> </td> <td class=%22left%22>Potion of minor regeneration</td> <td>5-12</td> <td>92&nbsp;gold</td> <td>68&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_rnd%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -160px%22></a> </td> <td class=%22left%22>Lodar's perilous concoction</td> <td>2-6</td> <td>110&nbsp;gold</td> <td>82&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_senses%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -288px 0px 0px -64px%22></a> </td> <td class=%22left%22>Potion of heightened senses</td> <td>5-12</td> <td>1,806&nbsp;gold</td> <td>1,335&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_shadowtear%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -256px 0px 0px -0px%22></a> </td> <td class=%22left%22>Tears of the Shadow</td> <td>1-2</td> <td>3,105&nbsp;gold</td> <td>2,295&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#andor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Search for Andor</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A lost potion</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Searching for madness</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar_pots%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Lodar's potions</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#xulviir%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A creeping fear</td> </tr>">
          <td class="icon"><span class="hidden">lodar</span><a href="#lodar"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -544px"></a></td>
          <td class="left name drop">Lodar</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/lodarhouse1.html#lodar">Lodar house
</a>
          </td>                    
      </tr>
      <tr id="lowyna" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#drink_applej%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -32px 0px 0px -64px%22></a> </td> <td class=%22left%22>Apple juice</td> <td>5-20</td> <td>39&nbsp;gold</td> <td>29&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#drink_lowyn1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -0px 0px 0px -96px%22></a> </td> <td class=%22left%22>Lowyna's foul brew</td> <td>5-20</td> <td>495&nbsp;gold</td> <td>366&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#drink_lowyn2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -0px 0px 0px -96px%22></a> </td> <td class=%22left%22>Lowyna's special brew</td> <td>5-20</td> <td>667&nbsp;gold</td> <td>493&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#drink_lowyn3%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Lowyna's rat poison</td> <td>5-20</td> <td>196&nbsp;gold</td> <td>145&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#drink_prunej%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png%22 alt=%22items_tometik1.png%22 style=%22margin: -32px 0px 0px -96px%22></a> </td> <td class=%22left%22>Prune juice</td> <td>5-20</td> <td>129&nbsp;gold</td> <td>95&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lowyna%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Sweet sweet rat poison</td> </tr>">
          <td class="icon"><span class="hidden">lowyna</span><a href="#lowyna"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -448px"></a></td>
          <td class="left name drop">Lowyna</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/woodhouse2.html#lowyna">Wood house
</a>
          </td>                    
      </tr>
      <tr id="mara" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#apple_green%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Green apple</td> <td>5</td> <td>16&nbsp;gold</td> <td>12&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#bread%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Bread</td> <td>5</td> <td>7&nbsp;gold</td> <td>5&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#carrot%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Carrot</td> <td>5</td> <td>16&nbsp;gold</td> <td>12&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mead%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Mead</td> <td>5</td> <td>17&nbsp;gold</td> <td>13&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>5</td> <td>33&nbsp;gold</td> <td>25&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat_cooked%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -416px%22></a> </td> <td class=%22left%22>Cooked meat</td> <td>5</td> <td>90&nbsp;gold</td> <td>66&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">mara</span><a href="#mara"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -224px"></a></td>
          <td class="left name drop">Mara</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossglen_hall.html#mara">Crossglen hall
</a>
          </td>                    
      </tr>
      <tr id="mazeg" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#bwm_brew%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Blackwater brew</td> <td>10</td> <td>66&nbsp;gold</td> <td>48&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>10</td> <td>46&nbsp;gold</td> <td>34&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_major2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Major potion of health</td> <td>10</td> <td>322&nbsp;gold</td> <td>238&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_blind_rage%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -224px%22></a> </td> <td class=%22left%22>Potion of blind rage</td> <td>10</td> <td>569&nbsp;gold</td> <td>421&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_poison_weak%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -384px%22></a> </td> <td class=%22left%22>Weak poison</td> <td>10</td> <td>144&nbsp;gold</td> <td>106&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#sisterfight%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A difference in opinion</td> </tr>">
          <td class="icon"><span class="hidden">mazeg</span><a href="#mazeg"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -160px"></a></td>
          <td class="left name drop">Mazeg</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain43.html#mazeg">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="minarra" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armour_chain_champ%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -96px%22></a> </td> <td class=%22left%22>Champion's chain mail</td> <td>1</td> <td>7,829&nbsp;gold</td> <td>5,787&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armour_superior_chain%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -96px%22></a> </td> <td class=%22left%22>Superior chain mail</td> <td>1</td> <td>6,891&nbsp;gold</td> <td>5,093&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots_defender%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -64px%22></a> </td> <td class=%22left%22>Defender's boots</td> <td>1</td> <td>1,369&nbsp;gold</td> <td>1,012&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_irn2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png%22 alt=%22items_misc_5.png%22 style=%22margin: -128px 0px 0px -64px%22></a> </td> <td class=%22left%22>Two-handed iron claymore</td> <td>1</td> <td>982&nbsp;gold</td> <td>726&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_guards%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -288px%22></a> </td> <td class=%22left%22>Guard's gloves</td> <td>1</td> <td>731&nbsp;gold</td> <td>541&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hglv_plat2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik3.png%22 alt=%22items_tometik3.png%22 style=%22margin: -0px 0px 0px -128px%22></a> </td> <td class=%22left%22>Heavy plated gloves</td> <td>1</td> <td>1,969&nbsp;gold</td> <td>1,455&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hglv_stl%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -288px%22></a> </td> <td class=%22left%22>Reinforced steel gloves</td> <td>1</td> <td>1,682&nbsp;gold</td> <td>1,244&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ltbdy_chmail%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik2.png%22 alt=%22items_tometik2.png%22 style=%22margin: -128px 0px 0px -160px%22></a> </td> <td class=%22left%22>Lightweight chainmail</td> <td>1</td> <td>5,250&nbsp;gold</td> <td>3,880&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ltbdy_lthr%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png%22 alt=%22items_misc_5.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Sturdy leather cuirass</td> <td>1</td> <td>3,951&nbsp;gold</td> <td>2,921&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_block%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Ring of block</td> <td>1</td> <td>2,521&nbsp;gold</td> <td>1,863&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_block2%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring of block</td> <td>1</td> <td>4,446&nbsp;gold</td> <td>3,286&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_challenger%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Challenger's ring</td> <td>1</td> <td>469&nbsp;gold</td> <td>347&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield5%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Superior wooden shield</td> <td>1</td> <td>718&nbsp;gold</td> <td>530&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield_wooden_defender%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Wooden defender</td> <td>1</td> <td>2,295&nbsp;gold</td> <td>1,697&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#steelsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Steel sword</td> <td>1</td> <td>1,005&nbsp;gold</td> <td>743&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#sword_balanced_steel%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Balanced steel sword</td> <td>1</td> <td>3,217&nbsp;gold</td> <td>2,377&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#sword_challengers%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Challenger's iron sword</td> <td>1</td> <td>903&nbsp;gold</td> <td>667&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#sword_defenders%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Defender's blade</td> <td>1</td> <td>1,968&nbsp;gold</td> <td>1,454&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#loneford%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Flows through the veins</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#rogorn%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>The path is clear to me</td> </tr>">
          <td class="icon"><span class="hidden">minarra</span><a href="#minarra"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -192px"></a></td>
          <td class="left name drop">Minarra</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/houseatcrossroads4.html#minarra">House at crossroads
</a>
          </td>                    
      </tr>
      <tr id="nocmar" data-drop="<tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -0px%22></div> </td> <td class=%22left%22>Glass gem</td> <td>1</td> <td>2&nbsp;gold</td> <td>2&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#nocmar%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Lost treasures</td> </tr>">
          <td class="icon"><span class="hidden">nocmar</span><a href="#nocmar"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -256px"></a></td>
          <td class="left name drop">Nocmar</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_nocmar.html#nocmar">Fallhaven nocmar
</a>
          </td>                    
      </tr>
      <tr id="potion_merchant" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>10</td> <td>46&nbsp;gold</td> <td>34&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_major2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Major potion of health</td> <td>10</td> <td>322&nbsp;gold</td> <td>238&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor potion of health</td> <td>10</td> <td>21&nbsp;gold</td> <td>15&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#milk%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -416px%22></a> </td> <td class=%22left%22>Milk</td> <td>10</td> <td>24&nbsp;gold</td> <td>18&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#radish%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Radish</td> <td>5</td> <td>7&nbsp;gold</td> <td>5&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -64px 0px 0px -320px%22></div> </td> <td class=%22left%22>Rat tail</td> <td>5</td> <td>2&nbsp;gold</td> <td>2&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#strawberry%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -0px 0px 0px -256px%22></a> </td> <td class=%22left%22>Strawberry</td> <td>5</td> <td>3&nbsp;gold</td> <td>3&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -0px%22></div> </td> <td class=%22left%22>Small empty vial</td> <td>10</td> <td>2&nbsp;gold</td> <td>2&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -32px%22></div> </td> <td class=%22left%22>Empty vial</td> <td>10</td> <td>5&nbsp;gold</td> <td>3&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -96px%22></div> </td> <td class=%22left%22>Empty flask</td> <td>10</td> <td>7&nbsp;gold</td> <td>5&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -128px 0px 0px -64px%22></div> </td> <td class=%22left%22>Empty potion bottle</td> <td>10</td> <td>13&nbsp;gold</td> <td>9&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#antifoodp%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Taste is everything</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar_pots%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Lodar's potions</td> </tr>">
          <td class="icon"><span class="hidden">potion_merchant</span><a href="#potion_merchant"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png" alt="monsters_mage2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Potion merchant</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_potions.html#potion_merchant">Fallhaven potions
</a>
          </td>                    
      </tr>
      <tr id="prim_armorer" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broken_buckler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Broken wooden buckler</td> <td>1</td> <td>138&nbsp;gold</td> <td>102&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ironsword1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Iron sword</td> <td>1</td> <td>90&nbsp;gold</td> <td>66&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#rusted_iron_sword%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Rusted iron sword</td> <td>1</td> <td>60&nbsp;gold</td> <td>44&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#used_gloves%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Blood-stained gloves</td> <td>1-2</td> <td>64&nbsp;gold</td> <td>48&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">prim_armorer</span><a href="#prim_armorer"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -256px"></a></td>
          <td class="left name drop">Prim armorer</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain23.html#prim_armorer">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="rothses" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots_combat1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -64px%22></a> </td> <td class=%22left%22>Combat boots</td> <td>1</td> <td>0&nbsp;gold</td> <td>0&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots_combat2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -64px%22></a> </td> <td class=%22left%22>Enhanced combat boots</td> <td>1</td> <td>0&nbsp;gold</td> <td>0&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots_guard1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -96px%22></a> </td> <td class=%22left%22>Boots of the guardian</td> <td>1</td> <td>0&nbsp;gold</td> <td>0&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots_remgard1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -96px%22></a> </td> <td class=%22left%22>Remgard boots</td> <td>1</td> <td>0&nbsp;gold</td> <td>0&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_guard1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -320px%22></a> </td> <td class=%22left%22>Gloves of the guardian</td> <td>1</td> <td>691&nbsp;gold</td> <td>511&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hboot_plat%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik2.png%22 alt=%22items_tometik2.png%22 style=%22margin: -64px 0px 0px -64px%22></a> </td> <td class=%22left%22>Heavy plated boots</td> <td>1</td> <td>1,816&nbsp;gold</td> <td>1,342&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#helm_combat1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Combat helm</td> <td>1</td> <td>523&nbsp;gold</td> <td>387&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#helm_combat2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Enhanced combat helmet</td> <td>1</td> <td>558&nbsp;gold</td> <td>412&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#helm_combat3%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -384px%22></a> </td> <td class=%22left%22>Remgard combat helmet</td> <td>1</td> <td>1,771&nbsp;gold</td> <td>1,309&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#helm_defend1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png%22 alt=%22items_armours_3.png%22 style=%22margin: -96px 0px 0px -32px%22></a> </td> <td class=%22left%22>Defender's helmet</td> <td>1</td> <td>2,271&nbsp;gold</td> <td>1,679&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ltbdy_spmail%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik2.png%22 alt=%22items_tometik2.png%22 style=%22margin: -256px 0px 0px -32px%22></a> </td> <td class=%22left%22>Lightweight splint mail</td> <td>1</td> <td>8,177&nbsp;gold</td> <td>6,044&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#remgard_shield_1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png%22 alt=%22items_armours_3.png%22 style=%22margin: -64px 0px 0px -128px%22></a> </td> <td class=%22left%22>Remgard shield</td> <td>1</td> <td>2,517&nbsp;gold</td> <td>1,861&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#spmail2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png%22 alt=%22items_armours_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Worn splint mail</td> <td>1</td> <td>2,529&nbsp;gold</td> <td>1,869&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#remgard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Everything in order</td> </tr>">
          <td class="icon"><span class="hidden">rothses</span><a href="#rothses"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -0px 0px 0px -448px"></a></td>
          <td class="left name drop">Rothses</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_armour.html#rothses">Remgard armour
</a>
          </td>                    
      </tr>
      <tr id="samar" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>10</td> <td>46&nbsp;gold</td> <td>34&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_major2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Major potion of health</td> <td>10</td> <td>322&nbsp;gold</td> <td>238&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_bleeding_ointment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Ointment of bleeding wounds</td> <td>10</td> <td>357&nbsp;gold</td> <td>264&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_poison_weak_antidote%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -384px%22></a> </td> <td class=%22left%22>Weak poison antidote</td> <td>10</td> <td>388&nbsp;gold</td> <td>286&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_speed_1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -416px%22></a> </td> <td class=%22left%22>Minor potion of speed</td> <td>10</td> <td>300&nbsp;gold</td> <td>222&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">samar</span><a href="#samar"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -128px 0px 0px -416px"></a></td>
          <td class="left name drop">Samar</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain25.html#samar">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="siola" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broadsword2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -192px%22></a> </td> <td class=%22left%22>Steel broadsword</td> <td>1</td> <td>669&nbsp;gold</td> <td>495&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broadsword_fine_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -160px%22></a> </td> <td class=%22left%22>Fine iron broadsword</td> <td>1</td> <td>485&nbsp;gold</td> <td>359&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broadsword_fine_steel%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -192px%22></a> </td> <td class=%22left%22>Fine steel broadsword</td> <td>1</td> <td>1,387&nbsp;gold</td> <td>1,025&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_def1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_2.png%22 alt=%22items_weapons_2.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Defender's claymore</td> <td>1</td> <td>600&nbsp;gold</td> <td>444&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#club_brutal%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -64px%22></a> </td> <td class=%22left%22>Brutal club</td> <td>1</td> <td>2,900&nbsp;gold</td> <td>2,144&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#club_wood1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -64px%22></a> </td> <td class=%22left%22>Heavy iron club</td> <td>1</td> <td>1,093&nbsp;gold</td> <td>808&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#club_wood2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -64px%22></a> </td> <td class=%22left%22>Balanced heavy iron club</td> <td>1</td> <td>2,523&nbsp;gold</td> <td>1,865&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#heavy_club%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -64px%22></a> </td> <td class=%22left%22>Heavy club</td> <td>1</td> <td>1,413&nbsp;gold</td> <td>1,045&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#helm_crude_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Crude iron helmet</td> <td>1</td> <td>1,288&nbsp;gold</td> <td>952&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#scptr_runed%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -352px%22></a> </td> <td class=%22left%22>Runed scepter</td> <td>1</td> <td>2,569&nbsp;gold</td> <td>1,899&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield6%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -96px%22></a> </td> <td class=%22left%22>Wooden tower shield</td> <td>1</td> <td>1,095&nbsp;gold</td> <td>809&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield7%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -96px%22></a> </td> <td class=%22left%22>Strong wooden tower shield</td> <td>1</td> <td>1,769&nbsp;gold</td> <td>1,307&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">siola</span><a href="#siola"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -320px"></a></td>
          <td class="left name drop">Siola</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford9.html#siola">Loneford
</a>
          </td>                    
      </tr>
      <tr id="skylenar" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>10</td> <td>46&nbsp;gold</td> <td>34&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_major2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Major potion of health</td> <td>10</td> <td>322&nbsp;gold</td> <td>238&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor potion of health</td> <td>10</td> <td>21&nbsp;gold</td> <td>15&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_dmg6%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -96px%22></a> </td> <td class=%22left%22>Ring of damage +6</td> <td>1</td> <td>3,664&nbsp;gold</td> <td>2,708&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_protector%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -128px%22></a> </td> <td class=%22left%22>Ring of the protector</td> <td>1</td> <td>4,306&nbsp;gold</td> <td>3,182&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">skylenar</span><a href="#skylenar"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name drop">Skylenar</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_church.html#skylenar">Remgard church
</a>
          </td>                    
      </tr>
      <tr id="tailor" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Leather boots</td> <td>1</td> <td>26&nbsp;gold</td> <td>20&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots3%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -32px%22></a> </td> <td class=%22left%22>Snakeskin boots</td> <td>1</td> <td>168&nbsp;gold</td> <td>124&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots_crude_leather%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude leather boots</td> <td>1</td> <td>36&nbsp;gold</td> <td>26&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots_sewn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Sewn footwear</td> <td>1</td> <td>84&nbsp;gold</td> <td>62&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_attack1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Gloves of swift attack</td> <td>1</td> <td>173&nbsp;gold</td> <td>128&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_barbrawler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Bar brawler's gloves</td> <td>1</td> <td>109&nbsp;gold</td> <td>81&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_crude_cloth%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Crude cloth gloves</td> <td>1</td> <td>36&nbsp;gold</td> <td>26&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_fancy%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Fancy gloves</td> <td>1</td> <td>90&nbsp;gold</td> <td>66&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_fumbling%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Gloves of fumbling</td> <td>1</td> <td>-497&nbsp;gold</td> <td>-367&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hat1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Green hat</td> <td>1</td> <td>15&nbsp;gold</td> <td>11&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hat2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Fine green hat</td> <td>1</td> <td>29&nbsp;gold</td> <td>21&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#jewel_fallhaven%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -192px%22></a> </td> <td class=%22left%22>Jewel of Fallhaven</td> <td>1</td> <td>3,594&nbsp;gold</td> <td>2,656&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Mundane ring</td> <td>1</td> <td>15&nbsp;gold</td> <td>11&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Polished ring</td> <td>1</td> <td>24&nbsp;gold</td> <td>18&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_fumbling%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Ring of fumbling</td> <td>1</td> <td>-532&nbsp;gold</td> <td>-394&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Cloth shirt</td> <td>1</td> <td>18&nbsp;gold</td> <td>14&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Fine shirt</td> <td>1</td> <td>83&nbsp;gold</td> <td>61&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_dmgresist%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Hardened leather shirt</td> <td>1</td> <td>1,878&nbsp;gold</td> <td>1,388&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_patched_cloth%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Patched cloth shirt</td> <td>1</td> <td>239&nbsp;gold</td> <td>177&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_torn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Torn shirt</td> <td>1</td> <td>106&nbsp;gold</td> <td>78&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shirt_weathered%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -0px%22></a> </td> <td class=%22left%22>Weathered shirt</td> <td>1</td> <td>144&nbsp;gold</td> <td>106&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#used_gloves%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Blood-stained gloves</td> <td>1</td> <td>64&nbsp;gold</td> <td>48&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">tailor</span><a href="#tailor"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Tailor</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_clothes.html#tailor">Fallhaven clothes
</a>
          </td>                    
      </tr>
      <tr id="talion" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>10</td> <td>46&nbsp;gold</td> <td>34&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_major2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Major potion of health</td> <td>10</td> <td>322&nbsp;gold</td> <td>238&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor potion of health</td> <td>10</td> <td>21&nbsp;gold</td> <td>15&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#necklace_protector%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Necklace of the protector</td> <td>1</td> <td>3,688&nbsp;gold</td> <td>2,726&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#necklace_shield1%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Necklace of the guardian</td> <td>1</td> <td>1,075&nbsp;gold</td> <td>795&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_block1%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Lesser ring of block</td> <td>1</td> <td>1,425&nbsp;gold</td> <td>1,053&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_dmg5%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Ring of damage +5</td> <td>1</td> <td>2,316&nbsp;gold</td> <td>1,712&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_guardian%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Ring of the guardian</td> <td>1</td> <td>1,712&nbsp;gold</td> <td>1,266&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#loneford%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Flows through the veins</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#maggots%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>I have it in me</td> </tr>">
          <td class="icon"><span class="hidden">talion</span><a href="#talion"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -256px"></a></td>
          <td class="left name drop">Talion</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford4.html#talion">Loneford
</a>
          </td>                    
      </tr>
      <tr id="tharal" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -224px%22></a> </td> <td class=%22left%22>Regular potion of health</td> <td>10</td> <td>46&nbsp;gold</td> <td>34&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_major2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Major potion of health</td> <td>10</td> <td>322&nbsp;gold</td> <td>238&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#health_minor2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Minor potion of health</td> <td>10</td> <td>21&nbsp;gold</td> <td>15&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#necklace_shield_0%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -224px%22></a> </td> <td class=%22left%22>Lesser shielding necklace</td> <td>1</td> <td>151&nbsp;gold</td> <td>111&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_atkch1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Ring of surehit</td> <td>1</td> <td>247&nbsp;gold</td> <td>183&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_crude_block%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude ring of block</td> <td>1</td> <td>84&nbsp;gold</td> <td>62&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_crude_surehit%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Crude ring of surehit</td> <td>1</td> <td>60&nbsp;gold</td> <td>44&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_dmg1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Ring of damage +1</td> <td>1</td> <td>247&nbsp;gold</td> <td>183&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_life%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Ring of life force</td> <td>1</td> <td>641&nbsp;gold</td> <td>473&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_rough_damage%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Rough ring of damage</td> <td>1</td> <td>64&nbsp;gold</td> <td>48&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_rough_life%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Rough ring of life force</td> <td>1</td> <td>115&nbsp;gold</td> <td>85&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#antifoodp%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Taste is everything</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bonemeal%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Disallowed substance</td> </tr>">
          <td class="icon"><span class="hidden">tharal</span><a href="#tharal"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name drop">Tharal</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossglen_hall.html#tharal">Crossglen hall
</a>
          </td>                    
      </tr>
      <tr id="tharwyn" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#carrot%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Carrot</td> <td>5</td> <td>16&nbsp;gold</td> <td>12&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mead%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Mead</td> <td>5</td> <td>17&nbsp;gold</td> <td>13&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>5</td> <td>33&nbsp;gold</td> <td>25&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat_cooked%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -416px%22></a> </td> <td class=%22left%22>Cooked meat</td> <td>5</td> <td>90&nbsp;gold</td> <td>66&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mushroom%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -160px%22></a> </td> <td class=%22left%22>Mushroom</td> <td>5</td> <td>3&nbsp;gold</td> <td>3&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#vilegard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Trusting an outsider</td> </tr>">
          <td class="icon"><span class="hidden">tharwyn</span><a href="#tharwyn"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -224px"></a></td>
          <td class="left name drop">Tharwyn</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_tavern.html#tharwyn">Vilegard tavern
</a>
          </td>                    
      </tr>
      <tr id="thieves_guild_cook" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#bread%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Bread</td> <td>5</td> <td>7&nbsp;gold</td> <td>5&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#eggs%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -192px%22></a> </td> <td class=%22left%22>Eggs</td> <td>5</td> <td>12&nbsp;gold</td> <td>9&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mead%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Mead</td> <td>5</td> <td>17&nbsp;gold</td> <td>13&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -352px%22></a> </td> <td class=%22left%22>Meat</td> <td>5</td> <td>33&nbsp;gold</td> <td>25&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat_cooked%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -416px%22></a> </td> <td class=%22left%22>Cooked meat</td> <td>5</td> <td>90&nbsp;gold</td> <td>66&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mushroom%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -160px%22></a> </td> <td class=%22left%22>Mushroom</td> <td>5</td> <td>3&nbsp;gold</td> <td>3&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#farrik%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Night visit</td> </tr>">
          <td class="icon"><span class="hidden">thieves_guild_cook</span><a href="#thieves_guild_cook"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Thieves guild cook</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_derelict2.html#thieves_guild_cook">Fallhaven derelict
</a>
          </td>                    
      </tr>
      <tr id="thorin" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pot_scaradon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -192px%22></a> </td> <td class=%22left%22>Scaradon extract</td> <td>30</td> <td>32&nbsp;gold</td> <td>24&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#thorin%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Bits and pieces</td> </tr>">
          <td class="icon"><span class="hidden">thorin</span><a href="#thorin"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -192px"></a></td>
          <td class="left name drop">Thorin</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/mountaincave3.html#thorin">Mountain cave
</a>
          </td>                    
      </tr>
      <tr id="thoronir" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#bonemeal_potion%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -64px 0px 0px -192px%22></a> </td> <td class=%22left%22>Bonemeal potion</td> <td>50</td> <td>52&nbsp;gold</td> <td>38&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bonemeal%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Disallowed substance</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bucus%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Key of Luthor</td> </tr>">
          <td class="icon"><span class="hidden">thoronir</span><a href="#thoronir"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -256px"></a></td>
          <td class="left name drop">Thoronir</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_church.html#thoronir">Fallhaven church
</a>
          </td>                    
      </tr>
      <tr id="torilo" data-drop="<tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#bread%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Bread</td> <td>5</td> <td>7&nbsp;gold</td> <td>5&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#eggs%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -192px%22></a> </td> <td class=%22left%22>Eggs</td> <td>5</td> <td>12&nbsp;gold</td> <td>9&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mead%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -96px 0px 0px -288px%22></a> </td> <td class=%22left%22>Mead</td> <td>5</td> <td>17&nbsp;gold</td> <td>13&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#meat_cooked%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -416px%22></a> </td> <td class=%22left%22>Cooked meat</td> <td>5</td> <td>90&nbsp;gold</td> <td>66&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#mushroom%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -32px 0px 0px -160px%22></a> </td> <td class=%22left%22>Mushroom</td> <td>5</td> <td>3&nbsp;gold</td> <td>3&nbsp;gold</td> </tr> <tr> <td> <a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/consumablelist.php#pear%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png%22 alt=%22items_consumables.png%22 style=%22margin: -0px 0px 0px -288px%22></a> </td> <td class=%22left%22>Pear</td> <td>5</td> <td>16&nbsp;gold</td> <td>12&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">torilo</span><a href="#torilo"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -288px"></a></td>
          <td class="left name drop">Torilo</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/foaming_flask.html#torilo">Foaming flask
</a>
          </td>                    
      </tr>
      <tr id="troublemaker" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armor1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -32px%22></a> </td> <td class=%22left%22>Leather armour</td> <td>1</td> <td>534&nbsp;gold</td> <td>394&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armor4%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -64px%22></a> </td> <td class=%22left%22>Superior hard leather armour</td> <td>1</td> <td>4,446&nbsp;gold</td> <td>3,286&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armour_firm_leather%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -64px%22></a> </td> <td class=%22left%22>Firm leather armour</td> <td>1</td> <td>480&nbsp;gold</td> <td>354&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots_coward%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -0px%22></a> </td> <td class=%22left%22>Coward's boots</td> <td>1</td> <td>1,073&nbsp;gold</td> <td>793&nbsp;gold</td> </tr> <tr> <td> <div class=%22at-icon%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png%22 alt=%22items_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></div> </td> <td class=%22left%22>Polished gem</td> <td>5</td> <td>9&nbsp;gold</td> <td>7&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_attack2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Fine gloves of swift attack</td> <td>1</td> <td>254&nbsp;gold</td> <td>188&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_barbrawler%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Bar brawler's gloves</td> <td>1</td> <td>109&nbsp;gold</td> <td>81&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#gloves_troublemaker%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -256px%22></a> </td> <td class=%22left%22>Troublemaker's gloves</td> <td>1</td> <td>576&nbsp;gold</td> <td>426&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_crit2%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Ring of vicious strike</td> <td>1</td> <td>3,973&nbsp;gold</td> <td>2,937&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#ring_troublemaker%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png%22 alt=%22items_jewelry.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Troublemaker's ring</td> <td>1</td> <td>917&nbsp;gold</td> <td>677&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#used_gloves%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -224px%22></a> </td> <td class=%22left%22>Blood-stained gloves</td> <td>1</td> <td>64&nbsp;gold</td> <td>48&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">troublemaker</span><a href="#troublemaker"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -256px"></a></td>
          <td class="left name drop">Troublemaker</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_derelict2.html#troublemaker">Fallhaven derelict
</a>
          </td>                    
      </tr>
      <tr id="vilegard_armorer" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armor_chain1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -96px%22></a> </td> <td class=%22left%22>Rusty chain mail</td> <td>1</td> <td>4,173&nbsp;gold</td> <td>3,085&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armor_chain2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -96px%22></a> </td> <td class=%22left%22>Ordinary chain mail</td> <td>1</td> <td>4,820&nbsp;gold</td> <td>3,562&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#armour_rigid_chain%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -96px%22></a> </td> <td class=%22left%22>Rigid chain mail</td> <td>1</td> <td>5,367&nbsp;gold</td> <td>3,967&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#boots5%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -64px 0px 0px -64px%22></a> </td> <td class=%22left%22>Reinforced boots</td> <td>1</td> <td>260&nbsp;gold</td> <td>192&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#chmail2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png%22 alt=%22items_armours_3.png%22 style=%22margin: -0px 0px 0px -288px%22></a> </td> <td class=%22left%22>Worn chainmail</td> <td>1</td> <td>739&nbsp;gold</td> <td>547&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hat3%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Crude leather cap</td> <td>1</td> <td>83&nbsp;gold</td> <td>61&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hat4%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Leather cap</td> <td>1</td> <td>168&nbsp;gold</td> <td>124&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hat_hard_leather%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Hardened leather cap</td> <td>1</td> <td>745&nbsp;gold</td> <td>551&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hat_leather1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -32px 0px 0px -320px%22></a> </td> <td class=%22left%22>Ordinary leather cap</td> <td>1</td> <td>300&nbsp;gold</td> <td>222&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hboot_irn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik3.png%22 alt=%22items_tometik3.png%22 style=%22margin: -0px 0px 0px -96px%22></a> </td> <td class=%22left%22>Heavy iron boots</td> <td>1</td> <td>734&nbsp;gold</td> <td>542&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hboot_wirn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik3.png%22 alt=%22items_tometik3.png%22 style=%22margin: -0px 0px 0px -96px%22></a> </td> <td class=%22left%22>Worn iron boots</td> <td>1</td> <td>361&nbsp;gold</td> <td>267&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hglv_chml%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png%22 alt=%22items_armours_3.png%22 style=%22margin: -96px 0px 0px -192px%22></a> </td> <td class=%22left%22>Chainmail mittens</td> <td>1</td> <td>2,062&nbsp;gold</td> <td>1,524&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hglv_irn%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik3.png%22 alt=%22items_tometik3.png%22 style=%22margin: -0px 0px 0px -128px%22></a> </td> <td class=%22left%22>Heavy iron gloves</td> <td>1</td> <td>781&nbsp;gold</td> <td>577&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hvbdy_rust%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png%22 alt=%22items_armours_3.png%22 style=%22margin: -32px 0px 0px -224px%22></a> </td> <td class=%22left%22>Rusty heavy cuirass</td> <td>1</td> <td>773&nbsp;gold</td> <td>571&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Wooden buckler</td> <td>1</td> <td>83&nbsp;gold</td> <td>61&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield4%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Crude wooden shield</td> <td>1</td> <td>534&nbsp;gold</td> <td>394&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#shield_wooden%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png%22 alt=%22items_armours.png%22 style=%22margin: -0px 0px 0px -64px%22></a> </td> <td class=%22left%22>Wooden shield</td> <td>1</td> <td>591&nbsp;gold</td> <td>437&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#vilegard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Trusting an outsider</td> </tr>">
          <td class="icon"><span class="hidden">vilegard_armorer</span><a href="#vilegard_armorer"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png" alt="monsters_mage2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Vilegard armorer</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_armorer.html#vilegard_armorer">Vilegard armorer
</a>
          </td>                    
      </tr>
      <tr id="vilegard_smith" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#axe_fine_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -128px 0px 0px -0px%22></a> </td> <td class=%22left%22>Fine iron axe</td> <td>1</td> <td>420&nbsp;gold</td> <td>310&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broadsword2%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -192px%22></a> </td> <td class=%22left%22>Steel broadsword</td> <td>1</td> <td>669&nbsp;gold</td> <td>495&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#broadsword_fine_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -160px%22></a> </td> <td class=%22left%22>Fine iron broadsword</td> <td>1</td> <td>485&nbsp;gold</td> <td>359&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_bers%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_2.png%22 alt=%22items_weapons_2.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Claymore of the berserker</td> <td>1</td> <td>826&nbsp;gold</td> <td>610&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#clmr_msv%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Massive two-handed sword</td> <td>1</td> <td>882&nbsp;gold</td> <td>652&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#club_fine_wooden%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -0px%22></a> </td> <td class=%22left%22>Fine wooden club</td> <td>1</td> <td>282&nbsp;gold</td> <td>208&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#hammer1%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -96px 0px 0px -96px%22></a> </td> <td class=%22left%22>Giant hammer</td> <td>1</td> <td>139&nbsp;gold</td> <td>103&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#longsword_hard_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -32px%22></a> </td> <td class=%22left%22>Hardened iron longsword</td> <td>1</td> <td>416&nbsp;gold</td> <td>308&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#sword_fencing%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -416px%22></a> </td> <td class=%22left%22>Fencing blade</td> <td>1</td> <td>1,060&nbsp;gold</td> <td>784&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#sword_hard_iron%22 class=%22at-icon ordinary%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Hardened iron sword</td> <td>1</td> <td>424&nbsp;gold</td> <td>314&nbsp;gold</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#feygard_shipment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Feygard errands</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#vilegard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Trusting an outsider</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#xulviir%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A creeping fear</td> </tr>">
          <td class="icon"><span class="hidden">vilegard_smith</span><a href="#vilegard_smith"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png" alt="monsters_mage2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Vilegard smith</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_smith.html#vilegard_smith">Vilegard smith
</a>
          </td>                    
      </tr>
      <tr id="waeges" data-drop="<tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#bwm_dagger%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -160px%22></a> </td> <td class=%22left%22>Blackwater dagger</td> <td>2</td> <td>620&nbsp;gold</td> <td>458&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#bwm_dagger_venom%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -32px 0px 0px -160px%22></a> </td> <td class=%22left%22>Blackwater poisoned dagger</td> <td>2</td> <td>1,785&nbsp;gold</td> <td>1,319&nbsp;gold</td> </tr> <tr> <td> <a href=%22http://andorstrail.irkalla.cz/0.7.0/itemlist.php#bwm_ironsword%22 class=%22at-icon rare%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png%22 alt=%22items_weapons.png%22 style=%22margin: -0px 0px 0px -0px%22></a> </td> <td class=%22left%22>Blackwater iron sword</td> <td>2</td> <td>1,408&nbsp;gold</td> <td>1,040&nbsp;gold</td> </tr>">
          <td class="icon"><span class="hidden">waeges</span><a href="#waeges"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -256px"></a></td>
          <td class="left name drop">Waeges</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain43.html#waeges">Blackwater settlement
</a>
          </td>                    
      </tr>
    </tbody>
    </table>
     <h2>Npc</h2>
     <table id="npcs" width="40%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>Location</th></tr>
      </thead>
      <tbody>
      <tr id="acolyte" data-drop="">
          <td class="icon"><span class="hidden">acolyte</span><a href="#acolyte"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name">Acolyte</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_ne.html#acolyte">Fallhaven
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_nw.html#acolyte">Fallhaven
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_s.html#acolyte">Vilegard
</a>
          </td>                    
      </tr>
      <tr id="agent1" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bwm_agent%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>The agent and the beast</td> </tr>">
          <td class="icon"><span class="hidden">agent1</span><a href="#agent1"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name drop">Agent</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain5.html#agent1">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="agent2" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bwm_agent%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>The agent and the beast</td> </tr>">
          <td class="icon"><span class="hidden">agent2</span><a href="#agent2"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name drop">Agent</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain9.html#agent2">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="agent3" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bwm_agent%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>The agent and the beast</td> </tr>">
          <td class="icon"><span class="hidden">agent3</span><a href="#agent3"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name drop">Agent</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain14.html#agent3">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="agent4" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bwm_agent%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>The agent and the beast</td> </tr>">
          <td class="icon"><span class="hidden">agent4</span><a href="#agent4"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name drop">Agent</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain17.html#agent4">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="agent5" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bwm_agent%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>The agent and the beast</td> </tr>">
          <td class="icon"><span class="hidden">agent5</span><a href="#agent5"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name drop">Agent</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain30.html#agent5">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="agent6" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bwm_agent%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>The agent and the beast</td> </tr>">
          <td class="icon"><span class="hidden">agent6</span><a href="#agent6"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name drop">Agent</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain38.html#agent6">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="agthor_guard" data-drop="">
          <td class="icon"><span class="hidden">agthor_guard</span><a href="#agthor_guard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -512px"></a></td>
          <td class="left name">Agthor's guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/roadbeforecrossroads6.html#agthor_guard">Road before crossroads
</a>
          </td>                    
      </tr>
      <tr id="alaun" data-drop="">
          <td class="icon"><span class="hidden">alaun</span><a href="#alaun"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png" alt="monsters_mage2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Alaun</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_alaun.html#alaun">Fallhaven Alaun
</a>
          </td>                    
      </tr>
      <tr id="almars" data-drop="">
          <td class="icon"><span class="hidden">almars</span><a href="#almars"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png" alt="monsters_rogue1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Almars</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard4.html#almars">Remgard
</a>
          </td>                    
      </tr>
      <tr id="ambelie" data-drop="">
          <td class="icon"><span class="hidden">ambelie</span><a href="#ambelie"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -192px"></a></td>
          <td class="left name">Ambelie</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/foaming_flask.html#ambelie">Foaming flask
</a>
          </td>                    
      </tr>
      <tr id="arcir" data-drop="">
          <td class="icon"><span class="hidden">arcir</span><a href="#arcir"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png" alt="monsters_mage2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Arcir</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_arcir.html#arcir">Fallhaven Arcir
</a>
          </td>                    
      </tr>
      <tr id="arghest" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#prim_innquest%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Well rested</td> </tr>">
          <td class="icon"><span class="hidden">arghest</span><a href="#arghest"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -128px 0px 0px -32px"></a></td>
          <td class="left name drop">Arghest</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain13.html#arghest">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="arngyr" data-drop="">
          <td class="icon"><span class="hidden">arngyr</span><a href="#arngyr"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -160px"></a></td>
          <td class="left name">Arngyr</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford10.html#arngyr">Loneford
</a>
          </td>                    
      </tr>
      <tr id="askyl" data-drop="">
          <td class="icon"><span class="hidden">askyl</span><a href="#askyl"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -32px 0px 0px -192px"></a></td>
          <td class="left name">Askyl</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown1a.html#askyl">Way to mining town
</a>
          </td>                    
      </tr>
      <tr id="atash" data-drop="">
          <td class="icon"><span class="hidden">atash</span><a href="#atash"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -32px 0px 0px -576px"></a></td>
          <td class="left name">Aatash</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_church.html#atash">Remgard church
</a>
          </td>                    
      </tr>
      <tr id="athamyr" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bucus%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Key of Luthor</td> </tr>">
          <td class="icon"><span class="hidden">athamyr</span><a href="#athamyr"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name drop">Athamyr</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_athamyr.html#athamyr">Fallhaven Athamyr
</a>
          </td>                    
      </tr>
      <tr id="bearded_citizen" data-drop="">
          <td class="icon"><span class="hidden">bearded_citizen</span><a href="#bearded_citizen"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png" alt="monsters_man1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Bearded Citizen</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_nw.html#bearded_citizen">Fallhaven
</a>
          </td>                    
      </tr>
      <tr id="benbyr" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#benbyr%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Cheap cuts</td> </tr>">
          <td class="icon"><span class="hidden">benbyr</span><a href="#benbyr"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -448px"></a></td>
          <td class="left name drop">Benbyr</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossroads.html#benbyr">Crossroads Guardhouse
</a>
          </td>                    
      </tr>
      <tr id="bjorgur" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bjorgur_grave%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Awoken from slumber</td> </tr>">
          <td class="icon"><span class="hidden">bjorgur</span><a href="#bjorgur"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -224px"></a></td>
          <td class="left name drop">Bjorgur</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain26.html#bjorgur">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="blackwater_border_patrol" data-drop="">
          <td class="icon"><span class="hidden">blackwater_border_patrol</span><a href="#blackwater_border_patrol"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -512px"></a></td>
          <td class="left name">Blackwater border patrol</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain52.html#blackwater_border_patrol">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="blackwater_chamber_guard" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#prim_hunt%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Clouded intent</td> </tr>">
          <td class="icon"><span class="hidden">blackwater_chamber_guard</span><a href="#blackwater_chamber_guard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name drop">Blackwater chamber guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain45.html#blackwater_chamber_guard">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="blackwater_cook" data-drop="">
          <td class="icon"><span class="hidden">blackwater_cook</span><a href="#blackwater_cook"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Blackwater cook</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain43.html#blackwater_cook">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="blackwater_dinner_guest" data-drop="">
          <td class="icon"><span class="hidden">blackwater_dinner_guest</span><a href="#blackwater_dinner_guest"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name">Blackwater dinner guest</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain43.html#blackwater_dinner_guest">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="blackwater_entrance_guard" data-drop="">
          <td class="icon"><span class="hidden">blackwater_entrance_guard</span><a href="#blackwater_entrance_guard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -128px"></a></td>
          <td class="left name">Blackwater entrance guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain43.html#blackwater_entrance_guard">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="blackwater_fighter" data-drop="">
          <td class="icon"><span class="hidden">blackwater_fighter</span><a href="#blackwater_fighter"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -192px"></a></td>
          <td class="left name">Blackwater fighter</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain43.html#blackwater_fighter">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="blackwater_guard" data-drop="">
          <td class="icon"><span class="hidden">blackwater_guard</span><a href="#blackwater_guard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -512px"></a></td>
          <td class="left name">Blackwater guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain44.html#blackwater_guard">Blackwater settlement
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain45.html#blackwater_guard">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="blackwater_inhabitant" data-drop="">
          <td class="icon"><span class="hidden">blackwater_inhabitant</span><a href="#blackwater_inhabitant"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png" alt="monsters_man1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Blackwater inhabitant</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain43.html#blackwater_inhabitant">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="blackwater_mage" data-drop="">
          <td class="icon"><span class="hidden">blackwater_mage</span><a href="#blackwater_mage"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -0px"></a></td>
          <td class="left name">Blackwater mage</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain50.html#blackwater_mage">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="blackwater_priest" data-drop="">
          <td class="icon"><span class="hidden">blackwater_priest</span><a href="#blackwater_priest"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -0px"></a></td>
          <td class="left name">Blackwater priest</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain44.html#blackwater_priest">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="blackwater_pupil" data-drop="">
          <td class="icon"><span class="hidden">blackwater_pupil</span><a href="#blackwater_pupil"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -448px"></a></td>
          <td class="left name">Blackwater pupil</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain43.html#blackwater_pupil">Blackwater settlement
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain44.html#blackwater_pupil">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="blond_citizen" data-drop="">
          <td class="icon"><span class="hidden">blond_citizen</span><a href="#blond_citizen"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -224px"></a></td>
          <td class="left name">Blond Citizen</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_ne.html#blond_citizen">Fallhaven
</a>
          </td>                    
      </tr>
      <tr id="bucus" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#andor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Search for Andor</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bucus%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Key of Luthor</td> </tr>">
          <td class="icon"><span class="hidden">bucus</span><a href="#bucus"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png" alt="monsters_rogue1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Bucus</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_derelict.html#bucus">Fallhaven derelict
</a>
          </td>                    
      </tr>
      <tr id="busy_farmer" data-drop="">
          <td class="icon"><span class="hidden">busy_farmer</span><a href="#busy_farmer"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png" alt="monsters_man1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Busy Farmer</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_farmer.html#busy_farmer">Fallhaven farmer
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_se.html#busy_farmer">Fallhaven
</a>
          </td>                    
      </tr>
      <tr id="caeda" data-drop="">
          <td class="icon"><span class="hidden">caeda</span><a href="#caeda"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -224px 0px 0px -160px"></a></td>
          <td class="left name">Caeda</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard0.html#caeda">Remgard
</a>
          </td>                    
      </tr>
      <tr id="carthe" data-drop="">
          <td class="icon"><span class="hidden">carthe</span><a href="#carthe"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png" alt="monsters_man1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Carthe</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_farmer2.html#carthe">Remgard farmer
</a>
          </td>                    
      </tr>
      <tr id="celdar" data-drop="">
          <td class="icon"><span class="hidden">celdar</span><a href="#celdar"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -448px"></a></td>
          <td class="left name">Celdar</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/houseatcrossroads0.html#celdar">House at crossroads
</a>
          </td>                    
      </tr>
      <tr id="chael" data-drop="">
          <td class="icon"><span class="hidden">chael</span><a href="#chael"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Chael</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard1.html#chael">Remgard
</a>
          </td>                    
      </tr>
      <tr id="chapelgoer" data-drop="">
          <td class="icon"><span class="hidden">chapelgoer</span><a href="#chapelgoer"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -192px"></a></td>
          <td class="left name">Mourning woman</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_church.html#chapelgoer">Fallhaven church
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_church.html#chapelgoer">Remgard church
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_chapel.html#chapelgoer">Vilegard chapel
</a>
          </td>                    
      </tr>
      <tr id="charwd_guard" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Destined for great things</td> </tr>">
          <td class="icon"><span class="hidden">charwd_guard</span><a href="#charwd_guard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -160px 0px 0px -448px"></a></td>
          <td class="left name drop">Guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown2.html#charwd_guard">Way to mining town
</a>
          </td>                    
      </tr>
      <tr id="citizen" data-drop="">
          <td class="icon"><span class="hidden">citizen</span><a href="#citizen"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png" alt="monsters_man1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Citizen</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_ne.html#citizen">Fallhaven
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_sw.html#citizen">Fallhaven
</a>
          </td>                    
      </tr>
      <tr id="conren" data-drop="">
          <td class="icon"><span class="hidden">conren</span><a href="#conren"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -160px"></a></td>
          <td class="left name">Conren</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford2.html#conren">Loneford
</a>
          </td>                    
      </tr>
      <tr id="crossroads_backguard" data-drop="">
          <td class="icon"><span class="hidden">crossroads_backguard</span><a href="#crossroads_backguard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -512px"></a></td>
          <td class="left name">Guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/houseatcrossroads1.html#crossroads_backguard">House at crossroads
</a>
          </td>                    
      </tr>
      <tr id="crossroads_guard" data-drop="">
          <td class="icon"><span class="hidden">crossroads_guard</span><a href="#crossroads_guard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -512px"></a></td>
          <td class="left name">Guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossroads.html#crossroads_guard">Crossroads Guardhouse
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/houseatcrossroads2.html#crossroads_guard">House at crossroads
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/houseatcrossroads3.html#crossroads_guard">House at crossroads
</a>
          </td>                    
      </tr>
      <tr id="crossroads_guest" data-drop="">
          <td class="icon"><span class="hidden">crossroads_guest</span><a href="#crossroads_guest"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -96px"></a></td>
          <td class="left name">Visitor</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/houseatcrossroads0.html#crossroads_guest">House at crossroads
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/houseatcrossroads1.html#crossroads_guest">House at crossroads
</a>
          </td>                    
      </tr>
      <tr id="crossroads_sleepguard" data-drop="">
          <td class="icon"><span class="hidden">crossroads_sleepguard</span><a href="#crossroads_sleepguard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -512px"></a></td>
          <td class="left name">Guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/houseatcrossroads1.html#crossroads_sleepguard">House at crossroads
</a>
          </td>                    
      </tr>
      <tr id="drashad" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Destined for great things</td> </tr>">
          <td class="icon"><span class="hidden">drashad</span><a href="#drashad"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -96px 0px 0px -96px"></a></td>
          <td class="left name drop">Drashad</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/tradehouse0.html#drashad">Trade house
</a>
          </td>                    
      </tr>
      <tr id="drunk" data-drop="">
          <td class="icon"><span class="hidden">drunk</span><a href="#drunk"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -128px"></a></td>
          <td class="left name">Drunk</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossglen_hall.html#drunk">Crossglen hall
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_tavern.html#drunk">Fallhaven tavern
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford3.html#drunk">Loneford
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford6.html#drunk">Loneford
</a>
          </td>                    
      </tr>
      <tr id="drunkard" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#fallhavendrunk%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Drunken tale</td> </tr>">
          <td class="icon"><span class="hidden">drunkard</span><a href="#drunkard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Drunkard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_nw.html#drunkard">Fallhaven
</a>
          </td>                    
      </tr>
      <tr id="duaina" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#remgard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Everything in order</td> </tr>">
          <td class="icon"><span class="hidden">duaina</span><a href="#duaina"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -224px 0px 0px -448px"></a></td>
          <td class="left name drop">Duaina</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard3.html#duaina">Remgard
</a>
          </td>                    
      </tr>
      <tr id="easturlie" data-drop="">
          <td class="icon"><span class="hidden">easturlie</span><a href="#easturlie"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -192px"></a></td>
          <td class="left name">Easturlie</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_villager2.html#easturlie">Remgard villager
</a>
          </td>                    
      </tr>
      <tr id="elwel" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#sisterfight%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A difference in opinion</td> </tr>">
          <td class="icon"><span class="hidden">elwel</span><a href="#elwel"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -224px"></a></td>
          <td class="left name drop">Elwel</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_villager5.html#elwel">Remgard villager
</a>
          </td>                    
      </tr>
      <tr id="elwyl" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#sisterfight%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A difference in opinion</td> </tr>">
          <td class="icon"><span class="hidden">elwyl</span><a href="#elwyl"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -224px"></a></td>
          <td class="left name drop">Elwyl</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_villager5.html#elwyl">Remgard villager
</a>
          </td>                    
      </tr>
      <tr id="elythom_kn1" data-drop="">
          <td class="icon"><span class="hidden">elythom_kn1</span><a href="#elythom_kn1"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name">Knight of Elythom</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern0.html#elythom_kn1">Remgard tavern
</a>
          </td>                    
      </tr>
      <tr id="elythom_kn2" data-drop="">
          <td class="icon"><span class="hidden">elythom_kn2</span><a href="#elythom_kn2"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name">Knight of Elythom</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern0.html#elythom_kn2">Remgard tavern
</a>
          </td>                    
      </tr>
      <tr id="emerei" data-drop="">
          <td class="icon"><span class="hidden">emerei</span><a href="#emerei"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -32px 0px 0px -224px"></a></td>
          <td class="left name">Emerei</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_villager3.html#emerei">Remgard villager
</a>
          </td>                    
      </tr>
      <tr id="erethori" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Destined for great things</td> </tr>">
          <td class="icon"><span class="hidden">erethori</span><a href="#erethori"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -160px 0px 0px -0px"></a></td>
          <td class="left name drop">Erethori</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown1a.html#erethori">Way to mining town
</a>
          </td>                    
      </tr>
      <tr id="erinith" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#erinith%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Deep wound</td> </tr>">
          <td class="icon"><span class="hidden">erinith</span><a href="#erinith"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -64px"></a></td>
          <td class="left name drop">Erinith</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/wild0.html#erinith">Wild
</a>
          </td>                    
      </tr>
      <tr id="erttu" data-drop="">
          <td class="icon"><span class="hidden">erttu</span><a href="#erttu"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png" alt="monsters_mage2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Erttu</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_erttu.html#erttu">Vilegard Erttu
</a>
          </td>                    
      </tr>
      <tr id="esfiume" data-drop="">
          <td class="icon"><span class="hidden">esfiume</span><a href="#esfiume"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -192px 0px 0px -160px"></a></td>
          <td class="left name">Esfiume</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/waytominingtown1a.html#esfiume">Way to mining town
</a>
          </td>                    
      </tr>
      <tr id="falothen0" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Destined for great things</td> </tr>">
          <td class="icon"><span class="hidden">falothen0</span><a href="#falothen0"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png" alt="monsters_tometik5.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Falothen</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/minerhouse0.html#falothen0">Miner house
</a>
          </td>                    
      </tr>
      <tr id="falothen1" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Destined for great things</td> </tr>">
          <td class="icon"><span class="hidden">falothen1</span><a href="#falothen1"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png" alt="monsters_tometik5.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Falothen</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/tradehouse0a.html#falothen1">Trade house
</a>
          </td>                    
      </tr>
      <tr id="fanamor" data-drop="">
          <td class="icon"><span class="hidden">fanamor</span><a href="#fanamor"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -224px"></a></td>
          <td class="left name">Fanamor</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossroads.html#fanamor">Crossroads Guardhouse
</a>
          </td>                    
      </tr>
      <tr id="farmer" data-drop="">
          <td class="icon"><span class="hidden">farmer</span><a href="#farmer"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png" alt="monsters_man1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Farmer</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossglen.html#farmer">Crossglen
</a>
          </td>                    
      </tr>
      <tr id="farrik" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#farrik%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Night visit</td> </tr>">
          <td class="icon"><span class="hidden">farrik</span><a href="#farrik"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png" alt="monsters_rogue1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Farrik</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_derelict2.html#farrik">Fallhaven derelict
</a>
          </td>                    
      </tr>
      <tr id="fayvara0" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Destined for great things</td> </tr>">
          <td class="icon"><span class="hidden">fayvara0</span><a href="#fayvara0"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik6.png" alt="monsters_tometik6.png" style="margin: -32px 0px 0px -96px"></a></td>
          <td class="left name drop">Fayvara</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/minerhouse7.html#fayvara0">Miner house
</a>
          </td>                    
      </tr>
      <tr id="fayvara1" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Destined for great things</td> </tr>">
          <td class="icon"><span class="hidden">fayvara1</span><a href="#fayvara1"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik6.png" alt="monsters_tometik6.png" style="margin: -32px 0px 0px -96px"></a></td>
          <td class="left name drop">Fayvara</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/tradehouse0a.html#fayvara1">Trade house
</a>
          </td>                    
      </tr>
      <tr id="feygard_bridgeguard" data-drop="">
          <td class="icon"><span class="hidden">feygard_bridgeguard</span><a href="#feygard_bridgeguard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name">Feygard bridge guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fields5.html#feygard_bridgeguard">Fields
</a>
          </td>                    
      </tr>
      <tr id="feygard_patrol" data-drop="">
          <td class="icon"><span class="hidden">feygard_patrol</span><a href="#feygard_patrol"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -128px"></a></td>
          <td class="left name">Feygard patrol</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/foaming_flask.html#feygard_patrol">Foaming flask
</a>
          </td>                    
      </tr>
      <tr id="feygard_patrol_captain" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#feygard_shipment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Feygard errands</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#wrye%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Uncertain cause</td> </tr>">
          <td class="icon"><span class="hidden">feygard_patrol_captain</span><a href="#feygard_patrol_captain"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name drop">Feygard patrol captain</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/foaming_flask.html#feygard_patrol_captain">Foaming flask
</a>
          </td>                    
      </tr>
      <tr id="flagstone_sentry" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#flagstone%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Ancient secrets</td> </tr>">
          <td class="icon"><span class="hidden">flagstone_sentry</span><a href="#flagstone_sentry"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name drop">Flagstone Sentry</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/flagstone0.html#flagstone_sentry">Flagstone prison
</a>
          </td>                    
      </tr>
      <tr id="foaming_flask_cook" data-drop="">
          <td class="icon"><span class="hidden">foaming_flask_cook</span><a href="#foaming_flask_cook"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Foaming Flask cook</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/foaming_flask.html#foaming_flask_cook">Foaming flask
</a>
          </td>                    
      </tr>
      <tr id="freen" data-drop="">
          <td class="icon"><span class="hidden">freen</span><a href="#freen"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -544px"></a></td>
          <td class="left name">Freen</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_school.html#freen">Remgard school
</a>
          </td>                    
      </tr>
      <tr id="fulus" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bjorgur_grave%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Awoken from slumber</td> </tr>">
          <td class="icon"><span class="hidden">fulus</span><a href="#fulus"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name drop">Fulus</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain28.html#fulus">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="gaela" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#andor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Search for Andor</td> </tr>">
          <td class="icon"><span class="hidden">gaela</span><a href="#gaela"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -288px"></a></td>
          <td class="left name drop">Gaela</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_barn.html#gaela">Fallhaven barn
</a>
          </td>                    
      </tr>
      <tr id="gandoren" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#feygard_shipment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Feygard errands</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#loneford%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Flows through the veins</td> </tr>">
          <td class="icon"><span class="hidden">gandoren</span><a href="#gandoren"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -288px"></a></td>
          <td class="left name drop">Gandoren</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/houseatcrossroads0.html#gandoren">House at crossroads
</a>
          </td>                    
      </tr>
      <tr id="gauward" data-drop="">
          <td class="icon"><span class="hidden">gauward</span><a href="#gauward"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png" alt="monsters_mage2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Gauward</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/waterwayhouse.html#gauward">Waterway house
</a>
          </td>                    
      </tr>
      <tr id="grumpy_citizen" data-drop="">
          <td class="icon"><span class="hidden">grumpy_citizen</span><a href="#grumpy_citizen"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name">Grumpy Citizen</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_ne.html#grumpy_citizen">Fallhaven
</a>
          </td>                    
      </tr>
      <tr id="grumpy_vilegard_villager" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#vilegard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Trusting an outsider</td> </tr>">
          <td class="icon"><span class="hidden">grumpy_vilegard_villager</span><a href="#grumpy_vilegard_villager"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -160px"></a></td>
          <td class="left name drop">Grumpy Vilegard villager</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_n.html#grumpy_vilegard_villager">Vilegard
</a>
          </td>                    
      </tr>
      <tr id="guard" data-drop="">
          <td class="icon"><span class="hidden">guard</span><a href="#guard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -128px"></a></td>
          <td class="left name">Guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_nw.html#guard">Fallhaven
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_prison.html#guard">Fallhaven prison
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/gapfiller4.html#guard">Gapfiller
</a>
          </td>                    
      </tr>
      <tr id="guthbereds_bodyguard" data-drop="">
          <td class="icon"><span class="hidden">guthbereds_bodyguard</span><a href="#guthbereds_bodyguard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -512px"></a></td>
          <td class="left name">Guthbered's bodyguard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain29.html#guthbereds_bodyguard">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="gylew" data-drop="">
          <td class="icon"><span class="hidden">gylew</span><a href="#gylew"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png" alt="monsters_mage2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Gylew</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/waterway5.html#gylew">Waterway
</a>
          </td>                    
      </tr>
      <tr id="gylew_henchman" data-drop="">
          <td class="icon"><span class="hidden">gylew_henchman</span><a href="#gylew_henchman"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -256px"></a></td>
          <td class="left name">Gylew's henchman</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/waterway5.html#gylew_henchman">Waterway
</a>
          </td>                    
      </tr>
      <tr id="harlenns_bodyguard" data-drop="">
          <td class="icon"><span class="hidden">harlenns_bodyguard</span><a href="#harlenns_bodyguard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -512px"></a></td>
          <td class="left name">Harlenn's bodyguard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain45.html#harlenns_bodyguard">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="ingus" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#sisterfight%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A difference in opinion</td> </tr>">
          <td class="icon"><span class="hidden">ingus</span><a href="#ingus"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -448px"></a></td>
          <td class="left name drop">Ingus</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard0.html#ingus">Remgard
</a>
          </td>                    
      </tr>
      <tr id="iqhan_greeter" data-drop="">
          <td class="icon"><span class="hidden">iqhan_greeter</span><a href="#iqhan_greeter"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -256px"></a></td>
          <td class="left name">Rancent</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/pwcave0.html#iqhan_greeter">Pw cave
</a>
          </td>                    
      </tr>
      <tr id="jakrar" data-drop="">
          <td class="icon"><span class="hidden">jakrar</span><a href="#jakrar"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name">Jakrar</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_sw.html#jakrar">Fallhaven
</a>
          </td>                    
      </tr>
      <tr id="jan" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#jan%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Fallen friends</td> </tr>">
          <td class="icon"><span class="hidden">jan</span><a href="#jan"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -128px"></a></td>
          <td class="left name drop">Jan</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/wild3.html#jan">Wild
</a>
          </td>                    
      </tr>
      <tr id="janach" data-drop="">
          <td class="icon"><span class="hidden">janach</span><a href="#janach"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -0px 0px 0px -256px"></a></td>
          <td class="left name">Janach</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_prison.html#janach">Remgard prison
</a>
          </td>                    
      </tr>
      <tr id="jhaeld" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#remgard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Everything in order</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#remgard2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>What is that stench?</td> </tr>">
          <td class="icon"><span class="hidden">jhaeld</span><a href="#jhaeld"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage.png" alt="monsters_mage.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Jhaeld</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern1.html#jhaeld">Remgard tavern
</a>
          </td>                    
      </tr>
      <tr id="jueth" data-drop="">
          <td class="icon"><span class="hidden">jueth</span><a href="#jueth"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Jueth</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain24.html#jueth">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="kantya" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Destined for great things</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Trial by fire</td> </tr>">
          <td class="icon"><span class="hidden">kantya</span><a href="#kantya"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -0px 0px 0px -448px"></a></td>
          <td class="left name drop">Kantya</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/tradehouse0.html#kantya">Trade house
</a>
          </td>                    
      </tr>
      <tr id="kaori" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#kaori%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Kaori's errands</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#vilegard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Trusting an outsider</td> </tr>">
          <td class="icon"><span class="hidden">kaori</span><a href="#kaori"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -224px"></a></td>
          <td class="left name drop">Kaori</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_kaori.html#kaori">Vilegard Kaori
</a>
          </td>                    
      </tr>
      <tr id="keneg" data-drop="">
          <td class="icon"><span class="hidden">keneg</span><a href="#keneg"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -192px"></a></td>
          <td class="left name">Keneg</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain43.html#keneg">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="khorand" data-drop="">
          <td class="icon"><span class="hidden">khorand</span><a href="#khorand"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name">Khorand</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_storage.html#khorand">Fallhaven storage
</a>
          </td>                    
      </tr>
      <tr id="krell" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#remgard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Everything in order</td> </tr>">
          <td class="icon"><span class="hidden">krell</span><a href="#krell"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -192px"></a></td>
          <td class="left name drop">Krell</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern0.html#krell">Remgard tavern
</a>
          </td>                    
      </tr>
      <tr id="kuldan" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#loneford%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Flows through the veins</td> </tr>">
          <td class="icon"><span class="hidden">kuldan</span><a href="#kuldan"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -160px"></a></td>
          <td class="left name drop">Kuldan</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford3.html#kuldan">Loneford
</a>
          </td>                    
      </tr>
      <tr id="kuldan_guard" data-drop="">
          <td class="icon"><span class="hidden">kuldan_guard</span><a href="#kuldan_guard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -128px"></a></td>
          <td class="left name">Kuldan's Guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford3.html#kuldan_guard">Loneford
</a>
          </td>                    
      </tr>
      <tr id="laecca" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#prim_hunt%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Clouded intent</td> </tr>">
          <td class="icon"><span class="hidden">laecca</span><a href="#laecca"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -384px"></a></td>
          <td class="left name drop">Laecca</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain21.html#laecca">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="laede" data-drop="">
          <td class="icon"><span class="hidden">laede</span><a href="#laede"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -32px"></a></td>
          <td class="left name">Laede</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain44.html#laede">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="landa" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#loneford%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Flows through the veins</td> </tr>">
          <td class="icon"><span class="hidden">landa</span><a href="#landa"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Landa</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford6.html#landa">Loneford
</a>
          </td>                    
      </tr>
      <tr id="larni" data-drop="">
          <td class="icon"><span class="hidden">larni</span><a href="#larni"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -32px 0px 0px -192px"></a></td>
          <td class="left name">Larni</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_farmer1.html#larni">Remgard farmer
</a>
          </td>                    
      </tr>
      <tr id="leonid" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#andor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Search for Andor</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bonemeal%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Disallowed substance</td> </tr>">
          <td class="icon"><span class="hidden">leonid</span><a href="#leonid"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name drop">Leonid</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossglen_hall.html#leonid">Crossglen hall
</a>
          </td>                    
      </tr>
      <tr id="leta" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#leta%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Missing husband</td> </tr>">
          <td class="icon"><span class="hidden">leta</span><a href="#leta"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name drop">Leta</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossglen_farmhouse.html#leta">Crossglen farmhouse
</a>
          </td>                    
      </tr>
      <tr id="lethenlor" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Destined for great things</td> </tr>">
          <td class="icon"><span class="hidden">lethenlor</span><a href="#lethenlor"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik6.png" alt="monsters_tometik6.png" style="margin: -64px 0px 0px -64px"></a></td>
          <td class="left name drop">Lethenlor</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/tradehouse1.html#lethenlor">Trade house
</a>
          </td>                    
      </tr>
      <tr id="lodar0_g" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A lost potion</td> </tr>">
          <td class="icon"><span class="hidden">lodar0_g</span><a href="#lodar0_g"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png" alt="monsters_tometik5.png" style="margin: -416px 0px 0px -64px"></a></td>
          <td class="left name drop">Forest guardian</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/lodar0.html#lodar0_g">Green maze
</a>
          </td>                    
      </tr>
      <tr id="lodar_fg1" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A lost potion</td> </tr>">
          <td class="icon"><span class="hidden">lodar_fg1</span><a href="#lodar_fg1"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -128px"></a></td>
          <td class="left name drop">Feygard guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/lodar2.html#lodar_fg1">Green maze
</a>
          </td>                    
      </tr>
      <tr id="lodar_fg2" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A lost potion</td> </tr>">
          <td class="icon"><span class="hidden">lodar_fg2</span><a href="#lodar_fg2"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -128px"></a></td>
          <td class="left name drop">Rambling Feygard guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/lodar2.html#lodar_fg2">Green maze
</a>
          </td>                    
      </tr>
      <tr id="loneford_chapelguard" data-drop="">
          <td class="icon"><span class="hidden">loneford_chapelguard</span><a href="#loneford_chapelguard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -576px"></a></td>
          <td class="left name">Chapel guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford4.html#loneford_chapelguard">Loneford
</a>
          </td>                    
      </tr>
      <tr id="loneford_farmer0" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#loneford%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Flows through the veins</td> </tr>">
          <td class="icon"><span class="hidden">loneford_farmer0</span><a href="#loneford_farmer0"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -32px"></a></td>
          <td class="left name drop">Farmer</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford1.html#loneford_farmer0">Loneford
</a>
          </td>                    
      </tr>
      <tr id="loneford_guard0" data-drop="">
          <td class="icon"><span class="hidden">loneford_guard0</span><a href="#loneford_guard0"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -128px"></a></td>
          <td class="left name">Guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford10.html#loneford_guard0">Loneford
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford2.html#loneford_guard0">Loneford
</a>
          </td>                    
      </tr>
      <tr id="loneford_tavern_patron" data-drop="">
          <td class="icon"><span class="hidden">loneford_tavern_patron</span><a href="#loneford_tavern_patron"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name">Tavern owner</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford6.html#loneford_tavern_patron">Loneford
</a>
          </td>                    
      </tr>
      <tr id="loneford_villager0" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#loneford%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Flows through the veins</td> </tr>">
          <td class="icon"><span class="hidden">loneford_villager0</span><a href="#loneford_villager0"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Villager</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford2.html#loneford_villager0">Loneford
</a>
          </td>                    
      </tr>
      <tr id="loneford_villager1" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#loneford%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Flows through the veins</td> </tr>">
          <td class="icon"><span class="hidden">loneford_villager1</span><a href="#loneford_villager1"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -32px"></a></td>
          <td class="left name drop">Villager</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford2.html#loneford_villager1">Loneford
</a>
          </td>                    
      </tr>
      <tr id="loneford_villager2" data-drop="">
          <td class="icon"><span class="hidden">loneford_villager2</span><a href="#loneford_villager2"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name">Villager</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford2.html#loneford_villager2">Loneford
</a>
          </td>                    
      </tr>
      <tr id="loneford_villager3" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#loneford%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Flows through the veins</td> </tr>">
          <td class="icon"><span class="hidden">loneford_villager3</span><a href="#loneford_villager3"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -160px"></a></td>
          <td class="left name drop">Villager</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford2.html#loneford_villager3">Loneford
</a>
          </td>                    
      </tr>
      <tr id="loneford_villager4" data-drop="">
          <td class="icon"><span class="hidden">loneford_villager4</span><a href="#loneford_villager4"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name">Villager</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford2.html#loneford_villager4">Loneford
</a>
          </td>                    
      </tr>
      <tr id="loneford_wellguard" data-drop="">
          <td class="icon"><span class="hidden">loneford_wellguard</span><a href="#loneford_wellguard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -384px"></a></td>
          <td class="left name">Guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford2.html#loneford_wellguard">Loneford
</a>
          </td>                    
      </tr>
      <tr id="maelf" data-drop="">
          <td class="icon"><span class="hidden">maelf</span><a href="#maelf"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -64px 0px 0px -416px"></a></td>
          <td class="left name">Maelf</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern1.html#maelf">Remgard tavern
</a>
          </td>                    
      </tr>
      <tr id="maevalia" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Destined for great things</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Trial by fire</td> </tr>">
          <td class="icon"><span class="hidden">maevalia</span><a href="#maevalia"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -256px"></a></td>
          <td class="left name drop">Maevalia</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/tradehouse0.html#maevalia">Trade house
</a>
          </td>                    
      </tr>
      <tr id="mienn" data-drop="">
          <td class="icon"><span class="hidden">mienn</span><a href="#mienn"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -224px"></a></td>
          <td class="left name">Mienn</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford8.html#mienn">Loneford
</a>
          </td>                    
      </tr>
      <tr id="mikhail" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#andor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Search for Andor</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#mikhail_bread%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Breakfast bread</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#mikhail_rats%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Rats!</td> </tr>">
          <td class="icon"><span class="hidden">mikhail</span><a href="#mikhail"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png" alt="monsters_mage2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Mikhail</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/home.html#mikhail">Home
</a>
          </td>                    
      </tr>
      <tr id="morgisia" data-drop="">
          <td class="icon"><span class="hidden">morgisia</span><a href="#morgisia"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -0px 0px 0px -160px"></a></td>
          <td class="left name">Morgisia</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern1.html#morgisia">Remgard tavern
</a>
          </td>                    
      </tr>
      <tr id="moyra" data-drop="">
          <td class="icon"><span class="hidden">moyra</span><a href="#moyra"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -448px"></a></td>
          <td class="left name">Moyra</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain11.html#moyra">Prim
</a>
          </td>                    
      </tr>
      <tr id="narael" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#flagstone%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Ancient secrets</td> </tr>">
          <td class="icon"><span class="hidden">narael</span><a href="#narael"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png" alt="monsters_man1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Narael</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/flagstone4.html#narael">Flagstone prison
</a>
          </td>                    
      </tr>
      <tr id="norath" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#remgard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Everything in order</td> </tr>">
          <td class="icon"><span class="hidden">norath</span><a href="#norath"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -0px 0px 0px -256px"></a></td>
          <td class="left name drop">Norath</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_farmer3.html#norath">Remgard farmer
</a>
          </td>                    
      </tr>
      <tr id="odair" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#odair%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Rat infestation</td> </tr>">
          <td class="icon"><span class="hidden">odair</span><a href="#odair"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -256px"></a></td>
          <td class="left name drop">Odair</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossglen.html#odair">Crossglen
</a>
          </td>                    
      </tr>
      <tr id="ogam" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A lost potion</td> </tr>">
          <td class="icon"><span class="hidden">ogam</span><a href="#ogam"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Ogam</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_ogam.html#ogam">Vilegard Ogam
</a>
          </td>                    
      </tr>
      <tr id="old_citizen" data-drop="">
          <td class="icon"><span class="hidden">old_citizen</span><a href="#old_citizen"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name">Old Citizen</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_nw.html#old_citizen">Fallhaven
</a>
          </td>                    
      </tr>
      <tr id="old_farmer" data-drop="">
          <td class="icon"><span class="hidden">old_farmer</span><a href="#old_farmer"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png" alt="monsters_mage2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Old Farmer</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard4.html#old_farmer">Remgard
</a>
          </td>                    
      </tr>
      <tr id="old_man" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#calomyran%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Calomyran secrets</td> </tr>">
          <td class="icon"><span class="hidden">old_man</span><a href="#old_man"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -160px"></a></td>
          <td class="left name drop">Old man</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_nw.html#old_man">Fallhaven
</a>
          </td>                    
      </tr>
      <tr id="old_vilegard_villager" data-drop="">
          <td class="icon"><span class="hidden">old_vilegard_villager</span><a href="#old_vilegard_villager"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Old Vilegard villager</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_n.html#old_vilegard_villager">Vilegard
</a>
          </td>                    
      </tr>
      <tr id="oluag" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#wrye%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Uncertain cause</td> </tr>">
          <td class="icon"><span class="hidden">oluag</span><a href="#oluag"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -256px"></a></td>
          <td class="left name drop">Oluag</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/wild14_clearing.html#oluag">Wild
</a>
          </td>                    
      </tr>
      <tr id="oromir" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#leta%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Missing husband</td> </tr>">
          <td class="icon"><span class="hidden">oromir</span><a href="#oromir"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png" alt="monsters_man1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Oromir</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossglen.html#oromir">Crossglen
</a>
          </td>                    
      </tr>
      <tr id="perester" data-drop="">
          <td class="icon"><span class="hidden">perester</span><a href="#perester"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -256px"></a></td>
          <td class="left name">Perester</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_villager4.html#perester">Remgard villager
</a>
          </td>                    
      </tr>
      <tr id="perlynn" data-drop="">
          <td class="icon"><span class="hidden">perlynn</span><a href="#perlynn"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png" alt="monsters_mage2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Perlynn</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_barn.html#perlynn">Remgard barn
</a>
          </td>                    
      </tr>
      <tr id="petdog" data-drop="">
          <td class="icon"><span class="hidden">petdog</span><a href="#petdog"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png" alt="monsters_dogs.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Dog</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_villager4.html#petdog">Remgard villager
</a>
          </td>                    
      </tr>
      <tr id="pickpocket" data-drop="">
          <td class="icon"><span class="hidden">pickpocket</span><a href="#pickpocket"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -224px"></a></td>
          <td class="left name">Pickpocket</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_derelict2.html#pickpocket">Fallhaven derelict
</a>
          </td>                    
      </tr>
      <tr id="pig" data-drop="">
          <td class="icon"><span class="hidden">pig</span><a href="#pig"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -160px 0px 0px -192px"></a></td>
          <td class="left name">Pig</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/woodsettlement0.html#pig">Wood settlement
</a>
          </td>                    
      </tr>
      <tr id="prim_bar_guest" data-drop="">
          <td class="icon"><span class="hidden">prim_bar_guest</span><a href="#prim_bar_guest"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -192px"></a></td>
          <td class="left name">Prim bar guest</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain22.html#prim_bar_guest">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="prim_bar_regular" data-drop="">
          <td class="icon"><span class="hidden">prim_bar_regular</span><a href="#prim_bar_regular"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -192px"></a></td>
          <td class="left name">Prim bar regular</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain22.html#prim_bar_regular">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="prim_citizen" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#prim_hunt%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Clouded intent</td> </tr>">
          <td class="icon"><span class="hidden">prim_citizen</span><a href="#prim_citizen"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -192px"></a></td>
          <td class="left name drop">Prim citizen</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain11.html#prim_citizen">Prim
</a>
          </td>                    
      </tr>
      <tr id="prim_commoner" data-drop="">
          <td class="icon"><span class="hidden">prim_commoner</span><a href="#prim_commoner"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -256px"></a></td>
          <td class="left name">Prim commoner</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain11.html#prim_commoner">Prim
</a>
          </td>                    
      </tr>
      <tr id="prim_cook" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#prim_innquest%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Well rested</td> </tr>">
          <td class="icon"><span class="hidden">prim_cook</span><a href="#prim_cook"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Prim cook</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain21.html#prim_cook">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="prim_evoker" data-drop="">
          <td class="icon"><span class="hidden">prim_evoker</span><a href="#prim_evoker"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -128px"></a></td>
          <td class="left name">Prim evoker</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain11.html#prim_evoker">Prim
</a>
          </td>                    
      </tr>
      <tr id="prim_guard" data-drop="">
          <td class="icon"><span class="hidden">prim_guard</span><a href="#prim_guard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -160px"></a></td>
          <td class="left name">Prim guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain29.html#prim_guard">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="prim_priestly_acolyte" data-drop="">
          <td class="icon"><span class="hidden">prim_priestly_acolyte</span><a href="#prim_priestly_acolyte"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -96px"></a></td>
          <td class="left name">Prim priestly acolyte</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain25.html#prim_priestly_acolyte">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="prim_prisoner" data-drop="">
          <td class="icon"><span class="hidden">prim_prisoner</span><a href="#prim_prisoner"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -128px 0px 0px -32px"></a></td>
          <td class="left name">Prim prisoner</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain27.html#prim_prisoner">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="prim_pupil" data-drop="">
          <td class="icon"><span class="hidden">prim_pupil</span><a href="#prim_pupil"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -448px"></a></td>
          <td class="left name">Prim pupil</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain25.html#prim_pupil">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="prim_resident" data-drop="">
          <td class="icon"><span class="hidden">prim_resident</span><a href="#prim_resident"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name">Prim resident</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain11.html#prim_resident">Prim
</a>
          </td>                    
      </tr>
      <tr id="prim_sentry" data-drop="">
          <td class="icon"><span class="hidden">prim_sentry</span><a href="#prim_sentry"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -128px"></a></td>
          <td class="left name">Prim sentry</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain29.html#prim_sentry">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="prim_tavern_guest" data-drop="">
          <td class="icon"><span class="hidden">prim_tavern_guest</span><a href="#prim_tavern_guest"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -192px"></a></td>
          <td class="left name">Prim tavern guest</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain22.html#prim_tavern_guest">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="prim_tavern_regular" data-drop="">
          <td class="icon"><span class="hidden">prim_tavern_regular</span><a href="#prim_tavern_regular"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -160px 0px 0px -192px"></a></td>
          <td class="left name">Prim tavern regular</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain22.html#prim_tavern_regular">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="prim_treasury_guard" data-drop="">
          <td class="icon"><span class="hidden">prim_treasury_guard</span><a href="#prim_treasury_guard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -288px"></a></td>
          <td class="left name">Prim treasury guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain25.html#prim_treasury_guard">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="prim_visitor" data-drop="">
          <td class="icon"><span class="hidden">prim_visitor</span><a href="#prim_visitor"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -96px"></a></td>
          <td class="left name">Prim visitor</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain21.html#prim_visitor">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="prim_weapon_guard" data-drop="">
          <td class="icon"><span class="hidden">prim_weapon_guard</span><a href="#prim_weapon_guard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -160px"></a></td>
          <td class="left name">Prim weapon guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain29.html#prim_weapon_guard">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="prisoner" data-drop="">
          <td class="icon"><span class="hidden">prisoner</span><a href="#prisoner"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png" alt="monsters_rogue1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Prisoner</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_prison.html#prisoner">Fallhaven prison
</a>
          </td>                    
      </tr>
      <tr id="reading_prim_pupil" data-drop="">
          <td class="icon"><span class="hidden">reading_prim_pupil</span><a href="#reading_prim_pupil"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -448px"></a></td>
          <td class="left name">Reading Prim pupil</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain25.html#reading_prim_pupil">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="reinkarr" data-drop="">
          <td class="icon"><span class="hidden">reinkarr</span><a href="#reinkarr"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -192px"></a></td>
          <td class="left name">Reinkarr</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard3.html#reinkarr">Remgard
</a>
          </td>                    
      </tr>
      <tr id="remgard_bridge" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#remgard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Everything in order</td> </tr>">
          <td class="icon"><span class="hidden">remgard_bridge</span><a href="#remgard_bridge"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name drop">Bridge lookout</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/mountainlake13a.html#remgard_bridge">Mountain lake
</a>
          </td>                    
      </tr>
      <tr id="remgard_d1" data-drop="">
          <td class="icon"><span class="hidden">remgard_d1</span><a href="#remgard_d1"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -0px 0px 0px -576px"></a></td>
          <td class="left name">Tavern guest</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern0.html#remgard_d1">Remgard tavern
</a>
          </td>                    
      </tr>
      <tr id="remgard_d2" data-drop="">
          <td class="icon"><span class="hidden">remgard_d2</span><a href="#remgard_d2"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png" alt="monsters_rltiles2.png" style="margin: -128px 0px 0px -32px"></a></td>
          <td class="left name">Tavern guest</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern0.html#remgard_d2">Remgard tavern
</a>
          </td>                    
      </tr>
      <tr id="remgard_farmer1" data-drop="">
          <td class="icon"><span class="hidden">remgard_farmer1</span><a href="#remgard_farmer1"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -32px 0px 0px -192px"></a></td>
          <td class="left name">Farmer</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard1.html#remgard_farmer1">Remgard
</a>
          </td>                    
      </tr>
      <tr id="remgard_farmer2" data-drop="">
          <td class="icon"><span class="hidden">remgard_farmer2</span><a href="#remgard_farmer2"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -352px 0px 0px -0px"></a></td>
          <td class="left name">Farmer</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard4.html#remgard_farmer2">Remgard
</a>
          </td>                    
      </tr>
      <tr id="remgard_g1" data-drop="">
          <td class="icon"><span class="hidden">remgard_g1</span><a href="#remgard_g1"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name">Guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_church.html#remgard_g1">Remgard church
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern1.html#remgard_g1">Remgard tavern
</a>
          </td>                    
      </tr>
      <tr id="remgard_g2" data-drop="">
          <td class="icon"><span class="hidden">remgard_g2</span><a href="#remgard_g2"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -0px 0px 0px -160px"></a></td>
          <td class="left name">Guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_church.html#remgard_g2">Remgard church
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern1.html#remgard_g2">Remgard tavern
</a>
          </td>                    
      </tr>
      <tr id="remgard_g3" data-drop="">
          <td class="icon"><span class="hidden">remgard_g3</span><a href="#remgard_g3"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -96px 0px 0px -224px"></a></td>
          <td class="left name">Guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_tavern1.html#remgard_g3">Remgard tavern
</a>
          </td>                    
      </tr>
      <tr id="remgard_pg" data-drop="">
          <td class="icon"><span class="hidden">remgard_pg</span><a href="#remgard_pg"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -0px 0px 0px -352px"></a></td>
          <td class="left name">Prison Guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard_prison.html#remgard_pg">Remgard prison
</a>
          </td>                    
      </tr>
      <tr id="rg_villager1" data-drop="">
          <td class="icon"><span class="hidden">rg_villager1</span><a href="#rg_villager1"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -192px 0px 0px -384px"></a></td>
          <td class="left name">Commoner</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard0.html#rg_villager1">Remgard
</a>
          </td>                    
      </tr>
      <tr id="rg_villager2" data-drop="">
          <td class="icon"><span class="hidden">rg_villager2</span><a href="#rg_villager2"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -32px 0px 0px -0px"></a></td>
          <td class="left name">Commoner</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard1.html#rg_villager2">Remgard
</a>
          </td>                    
      </tr>
      <tr id="rg_villager3" data-drop="">
          <td class="icon"><span class="hidden">rg_villager3</span><a href="#rg_villager3"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -192px 0px 0px -448px"></a></td>
          <td class="left name">Commoner</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard4.html#rg_villager3">Remgard
</a>
          </td>                    
      </tr>
      <tr id="rg_villager4" data-drop="">
          <td class="icon"><span class="hidden">rg_villager4</span><a href="#rg_villager4"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -256px 0px 0px -128px"></a></td>
          <td class="left name">Commoner</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard1.html#rg_villager4">Remgard
</a>
          </td>                    
      </tr>
      <tr id="rg_villager5" data-drop="">
          <td class="icon"><span class="hidden">rg_villager5</span><a href="#rg_villager5"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -224px 0px 0px -256px"></a></td>
          <td class="left name">Commoner</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard2.html#rg_villager5">Remgard
</a>
          </td>                    
      </tr>
      <tr id="rg_villager6" data-drop="">
          <td class="icon"><span class="hidden">rg_villager6</span><a href="#rg_villager6"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -288px 0px 0px -256px"></a></td>
          <td class="left name">Commoner</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard2.html#rg_villager6">Remgard
</a>
          </td>                    
      </tr>
      <tr id="rg_villager7" data-drop="">
          <td class="icon"><span class="hidden">rg_villager7</span><a href="#rg_villager7"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -0px 0px 0px -320px"></a></td>
          <td class="left name">Commoner</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard3.html#rg_villager7">Remgard
</a>
          </td>                    
      </tr>
      <tr id="rg_villager8" data-drop="">
          <td class="icon"><span class="hidden">rg_villager8</span><a href="#rg_villager8"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png" alt="monsters_rltiles3.png" style="margin: -32px 0px 0px -256px"></a></td>
          <td class="left name">Commoner</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard4.html#rg_villager8">Remgard
</a>
          </td>                    
      </tr>
      <tr id="rigmor" data-drop="">
          <td class="icon"><span class="hidden">rigmor</span><a href="#rigmor"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -32px"></a></td>
          <td class="left name">Rigmor</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_rigmor.html#rigmor">Fallhaven rigmor
</a>
          </td>                    
      </tr>
      <tr id="rolwynn" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#loneford%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Flows through the veins</td> </tr>">
          <td class="icon"><span class="hidden">rolwynn</span><a href="#rolwynn"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -544px"></a></td>
          <td class="left name drop">Rolwynn</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fields0.html#rolwynn">Fields
</a>
          </td>                    
      </tr>
      <tr id="sienn" data-drop="">
          <td class="icon"><span class="hidden">sienn</span><a href="#sienn"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -192px"></a></td>
          <td class="left name">Sienn</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford9.html#sienn">Loneford
</a>
          </td>                    
      </tr>
      <tr id="sienn_pet" data-drop="">
          <td class="icon"><span class="hidden">sienn_pet</span><a href="#sienn_pet"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png" alt="monsters_misc.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Sienn's pet</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford9.html#sienn_pet">Loneford
</a>
          </td>                    
      </tr>
      <tr id="smug_looking_thief" data-drop="">
          <td class="icon"><span class="hidden">smug_looking_thief</span><a href="#smug_looking_thief"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -288px"></a></td>
          <td class="left name">Smug looking thief</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_derelict2.html#smug_looking_thief">Fallhaven derelict
</a>
          </td>                    
      </tr>
      <tr id="smuggler1" data-drop="">
          <td class="icon"><span class="hidden">smuggler1</span><a href="#smuggler1"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -32px 0px 0px -192px"></a></td>
          <td class="left name">Outcast</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/woodhouse2.html#smuggler1">Wood house
</a>
          </td>                    
      </tr>
      <tr id="smuggler2" data-drop="">
          <td class="icon"><span class="hidden">smuggler2</span><a href="#smuggler2"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png" alt="monsters_ld1.png" style="margin: -128px 0px 0px -64px"></a></td>
          <td class="left name">Outcast</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/woodhouse2.html#smuggler2">Wood house
</a>
          </td>                    
      </tr>
      <tr id="smuggler4" data-drop="">
          <td class="icon"><span class="hidden">smuggler4</span><a href="#smuggler4"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png" alt="monsters_tometik2.png" style="margin: -224px 0px 0px -224px"></a></td>
          <td class="left name">Outcast</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/woodhouse1.html#smuggler4">Wood house
</a>
          </td>                    
      </tr>
      <tr id="smuggler5" data-drop="">
          <td class="icon"><span class="hidden">smuggler5</span><a href="#smuggler5"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png" alt="monsters_tometik2.png" style="margin: -256px 0px 0px -192px"></a></td>
          <td class="left name">Outcast</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/woodhouse0.html#smuggler5">Wood house
</a>
          </td>                    
      </tr>
      <tr id="smuggler6" data-drop="">
          <td class="icon"><span class="hidden">smuggler6</span><a href="#smuggler6"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png" alt="monsters_tometik5.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Outcast</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/woodsettlement0.html#smuggler6">Wood settlement
</a>
          </td>                    
      </tr>
      <tr id="smuggler7" data-drop="">
          <td class="icon"><span class="hidden">smuggler7</span><a href="#smuggler7"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png" alt="monsters_tometik7.png" style="margin: -160px 0px 0px -0px"></a></td>
          <td class="left name">Outcast</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/woodhouse3.html#smuggler7">Wood house
</a>
          </td>                    
      </tr>
      <tr id="studying_blackwater_priest" data-drop="">
          <td class="icon"><span class="hidden">studying_blackwater_priest</span><a href="#studying_blackwater_priest"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -128px"></a></td>
          <td class="left name">Studying Blackwater priest</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain43.html#studying_blackwater_priest">Blackwater settlement
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain44.html#studying_blackwater_priest">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="studying_prim_pupil" data-drop="">
          <td class="icon"><span class="hidden">studying_prim_pupil</span><a href="#studying_prim_pupil"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -448px"></a></td>
          <td class="left name">Studying Prim pupil</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain25.html#studying_prim_pupil">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="taevinn" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#loneford%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Flows through the veins</td> </tr>">
          <td class="icon"><span class="hidden">taevinn</span><a href="#taevinn"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -160px"></a></td>
          <td class="left name drop">Taevinn</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford7.html#taevinn">Loneford
</a>
          </td>                    
      </tr>
      <tr id="tavern_guest" data-drop="">
          <td class="icon"><span class="hidden">tavern_guest</span><a href="#tavern_guest"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Tavern guest</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_tavern.html#tavern_guest">Vilegard tavern
</a>
          </td>                    
      </tr>
      <tr id="taylin" data-drop="">
          <td class="icon"><span class="hidden">taylin</span><a href="#taylin"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -448px"></a></td>
          <td class="left name">Taylin</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/remgard0.html#taylin">Remgard
</a>
          </td>                    
      </tr>
      <tr id="telund" data-drop="">
          <td class="icon"><span class="hidden">telund</span><a href="#telund"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -448px"></a></td>
          <td class="left name">Telund</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford5.html#telund">Loneford
</a>
          </td>                    
      </tr>
      <tr id="throdna" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#kazaul%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Lights in the dark</td> </tr>">
          <td class="icon"><span class="hidden">throdna</span><a href="#throdna"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -128px"></a></td>
          <td class="left name drop">Throdna</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain50.html#throdna">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="throdnas_guard" data-drop="">
          <td class="icon"><span class="hidden">throdnas_guard</span><a href="#throdnas_guard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -160px"></a></td>
          <td class="left name">Throdna's guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain50.html#throdnas_guard">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="tinlyn" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#tinlyn%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Lost sheep</td> </tr>">
          <td class="icon"><span class="hidden">tinlyn</span><a href="#tinlyn"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png" alt="monsters_karvis2.png" style="margin: -0px 0px 0px -224px"></a></td>
          <td class="left name drop">Tinlyn</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fields6.html#tinlyn">Fields
</a>
          </td>                    
      </tr>
      <tr id="tired_citizen" data-drop="">
          <td class="icon"><span class="hidden">tired_citizen</span><a href="#tired_citizen"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -224px"></a></td>
          <td class="left name">Tired Citizen</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_nw.html#tired_citizen">Fallhaven
</a><br>
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_se.html#tired_citizen">Fallhaven
</a>
          </td>                    
      </tr>
      <tr id="tired_farmer" data-drop="">
          <td class="icon"><span class="hidden">tired_farmer</span><a href="#tired_farmer"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png" alt="monsters_man1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Tired farmer</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/crossglen.html#tired_farmer">Crossglen
</a>
          </td>                    
      </tr>
      <tr id="tired_prim_guard" data-drop="">
          <td class="icon"><span class="hidden">tired_prim_guard</span><a href="#tired_prim_guard"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -512px"></a></td>
          <td class="left name">Tired Prim guard</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain29.html#tired_prim_guard">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="tonis" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#prim_hunt%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Clouded intent</td> </tr>">
          <td class="icon"><span class="hidden">tonis</span><a href="#tonis"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -224px"></a></td>
          <td class="left name drop">Tonis</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain10.html#tonis">Blackwater mountain
</a>
          </td>                    
      </tr>
      <tr id="twoteeth" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lowyna%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Sweet sweet rat poison</td> </tr>">
          <td class="icon"><span class="hidden">twoteeth</span><a href="#twoteeth"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png" alt="monsters_tometik7.png" style="margin: -160px 0px 0px -0px"></a></td>
          <td class="left name drop">Two-teeth</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/woodhouse1.html#twoteeth">Wood house
</a>
          </td>                    
      </tr>
      <tr id="umar" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#andor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Search for Andor</td> </tr> <tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lodar%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>A lost potion</td> </tr>">
          <td class="icon"><span class="hidden">umar</span><a href="#umar"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png" alt="monsters_man1.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Umar</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_derelict2.html#umar">Fallhaven derelict
</a>
          </td>                    
      </tr>
      <tr id="ungorm" data-drop="">
          <td class="icon"><span class="hidden">ungorm</span><a href="#ungorm"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -96px"></a></td>
          <td class="left name">Ungorm</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/blackwater_mountain43.html#ungorm">Blackwater settlement
</a>
          </td>                    
      </tr>
      <tr id="unnmir" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#nocmar%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Lost treasures</td> </tr>">
          <td class="icon"><span class="hidden">unnmir</span><a href="#unnmir"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png" alt="monsters_mage2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name drop">Unnmir</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_barn.html#unnmir">Fallhaven barn
</a>
          </td>                    
      </tr>
      <tr id="vilegard_citizen" data-drop="">
          <td class="icon"><span class="hidden">vilegard_citizen</span><a href="#vilegard_citizen"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -32px"></a></td>
          <td class="left name">Vilegard citizen</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_n.html#vilegard_citizen">Vilegard
</a>
          </td>                    
      </tr>
      <tr id="vilegard_resident" data-drop="">
          <td class="icon"><span class="hidden">vilegard_resident</span><a href="#vilegard_resident"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Vilegard resident</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_s.html#vilegard_resident">Vilegard
</a>
          </td>                    
      </tr>
      <tr id="vilegard_woman" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#vilegard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Trusting an outsider</td> </tr>">
          <td class="icon"><span class="hidden">vilegard_woman</span><a href="#vilegard_woman"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -192px"></a></td>
          <td class="left name drop">Vilegard woman</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_s.html#vilegard_woman">Vilegard
</a>
          </td>                    
      </tr>
      <tr id="wallach" data-drop="">
          <td class="icon"><span class="hidden">wallach</span><a href="#wallach"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -96px 0px 0px -480px"></a></td>
          <td class="left name">Wallach</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/loneford2.html#wallach">Loneford
</a>
          </td>                    
      </tr>
      <tr id="warden" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#farrik%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Night visit</td> </tr>">
          <td class="icon"><span class="hidden">warden</span><a href="#warden"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name drop">Warden</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/fallhaven_prison.html#warden">Fallhaven prison
</a>
          </td>                    
      </tr>
      <tr id="woodcutter_0" data-drop="">
          <td class="icon"><span class="hidden">woodcutter_0</span><a href="#woodcutter_0"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Woodcutter</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower1.html#woodcutter_0">Road to Carn tower
</a>
          </td>                    
      </tr>
      <tr id="woodcutter_2" data-drop="">
          <td class="icon"><span class="hidden">woodcutter_2</span><a href="#woodcutter_2"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -0px"></a></td>
          <td class="left name">Woodcutter</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower1.html#woodcutter_2">Road to Carn tower
</a>
          </td>                    
      </tr>
      <tr id="woodcutter_3" data-drop="">
          <td class="icon"><span class="hidden">woodcutter_3</span><a href="#woodcutter_3"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name">Woodcutter</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower1.html#woodcutter_3">Road to Carn tower
</a>
          </td>                    
      </tr>
      <tr id="woodcutter_4" data-drop="">
          <td class="icon"><span class="hidden">woodcutter_4</span><a href="#woodcutter_4"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png" alt="monsters_rltiles1.png" style="margin: -128px 0px 0px -416px"></a></td>
          <td class="left name">Woodcutter</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower1.html#woodcutter_4">Road to Carn tower
</a>
          </td>                    
      </tr>
      <tr id="woodcutter_5" data-drop="">
          <td class="icon"><span class="hidden">woodcutter_5</span><a href="#woodcutter_5"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png" alt="monsters_men2.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name">Woodcutter</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/roadtocarntower1.html#woodcutter_5">Road to Carn tower
</a>
          </td>                    
      </tr>
      <tr id="wrye" data-drop="<tr><td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#wrye%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td colspan=%223%22 class=%22left%22>Uncertain cause</td> </tr>">
          <td class="icon"><span class="hidden">wrye</span><a href="#wrye"  class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png" alt="monsters_men.png" style="margin: -0px 0px 0px -192px"></a></td>
          <td class="left name drop">Wrye</td>
          <td class="category">
                  <a target="_blank" href="http://andorstrail.irkalla.cz/0.7.0/map/vilegard_wrye.html#wrye">Vilegard Wrye
</a>
          </td>                    
      </tr>
    </tbody>
    </table>
  </body>
</html>