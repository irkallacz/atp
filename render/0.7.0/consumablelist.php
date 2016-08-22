<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <title>Andor's Trail Consumable List</title>
  <link rel="shortcut icon" href="http://andorstrail.irkalla.cz/favicon.ico" type="image/x-icon">
  <meta name="description" content="Andor's Trail Consumable List">
  <link rel="image_src" href="http://andorstrail.irkalla.cz/image/icon.png">
  <link rel="stylesheet" type="text/css" href="http://andorstrail.irkalla.cz/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="http://andorstrail.irkalla.cz/css/main.css">
  <script type="text/javascript" src="http://andorstrail.irkalla.cz/js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="http://andorstrail.irkalla.cz/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="http://andorstrail.irkalla.cz/js/function.js"></script>
  <style type="text/css">
  .icon {width: 50px}
  table.dataTable td.name {width: 50%}
  .cond {width: 30%}
  </style>
  <script type="text/javascript">
    $(document).ready(function(){
      oTablepotion = $('#potions').dataTable({ 
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
        "aoColumnDefs": [
{ "aTargets": [2], "mRender": function (data,type) { return formatHP(data,type) } } ,
        ]
      } );      
      oTablefood = $('#foods').dataTable({ 
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
        "aoColumnDefs": [

        ]
      } );      
      oTabledrink = $('#drinks').dataTable({ 
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
        "aoColumnDefs": [
{ "aTargets": [2], "mRender": function (data,type) { return formatHP(data,type) } } ,
        ]
      } );      

    $('#potions td.drop').live('click', function () {        
      tr = this.parentNode;
      if (oTablepotion.fnIsOpen(tr)) closeTable(oTablepotion,tr); else openTable(oTablepotion,tr);
    } );
    $('#foods td.drop').live('click', function () {        
      tr = this.parentNode;
      if (oTablefood.fnIsOpen(tr)) closeTable(oTablefood,tr); else openTable(oTablefood,tr);
    } );
    $('#drinks td.drop').live('click', function () {        
      tr = this.parentNode;
      if (oTabledrink.fnIsOpen(tr)) closeTable(oTabledrink,tr); else openTable(oTabledrink,tr);
    } );
    
    openHash();
    });     
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
          <a class="current" href="http://andorstrail.irkalla.cz/0.7.0/consumablelist.php">CONSUMABLE</a>
      </li>
      <li>
          <a  href="http://andorstrail.irkalla.cz/0.7.0/monsterlist.php">MONSTER</a>
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
     <h1><a href="http://andorstrail.irkalla.cz/0.7.0/"><img alt="" src="http://andorstrail.irkalla.cz/image/icon.png"></a>Andor's Trail Consumable List</h1>
     <ul>
      <li><a href="#potions">Potion</a></li>
      <li><a href="#foods">Food</a></li>
      <li><a href="#drinks">Drink</a></li>
     </ul>
    
     <h2>Potion</h2>
     <table id="potions" width="50%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>HP</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="antifoodp" data-drop="          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#antifoodp%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>Taste is everything</td>
              <td></td>
              <td></td>
          </tr>
">
          <td class="icon"><span class="hidden">antifoodp</span><a href="#antifoodp" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -128px 0px 0px -352px"></a></td>
          <td class="left name drop">Antidote</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Food-poisoning remove" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#foodp">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -64px">
  </a>

          </td>
      </tr>
      <tr id="bonemeal_potion" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#thoronir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Thoronir</td>
            <td>50</td>
            <td>sell</td>
        </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#erinith%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>Deep wound</td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#kaori%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>Kaori's errands</td>
              <td></td>
              <td></td>
          </tr>
">
          <td class="icon"><span class="hidden">bonemeal_potion</span><a href="#bonemeal_potion" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -192px"></a></td>
          <td class="left name drop">Bonemeal potion</td>
          <td>
                      +40
          </td>
          <td class="cond">
          
          </td>
      </tr>
      <tr id="bwm_brew" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#strong_gornaud%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -320px%22></a></td>
            <td class=%22left%22>Strong Gornaud</td>
            <td>10</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#mazeg%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Mazeg</td>
            <td>10</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">bwm_brew</span><a href="#bwm_brew" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -96px 0px 0px -288px"></a></td>
          <td class="left name drop">Blackwater brew</td>
          <td>
                      +15
          </td>
          <td class="cond">
            <a title="On use
  On source
    Intoxicated (10 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#intoxicated">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -32px">
  </a>

          </td>
      </tr>
      <tr id="health" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#algangror%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Algangror</td>
            <td>1-2</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#allaceph_1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Young Allaceph</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#allaceph_2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Allaceph</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#allaceph_3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Strong Allaceph</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#allaceph_4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Tough Allaceph</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vaeregh_1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -64px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Vaeregh</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#allaceph_5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Radiant Allaceph</td>
            <td>1-2</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#allaceph_6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Ancient Allaceph</td>
            <td>1-2</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#aulaeth%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -576px%22></a></td>
            <td class=%22left%22>Aulaeth</td>
            <td>1-2</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#strong_aulaeth%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -576px%22></a></td>
            <td class=%22left%22>Strong aulaeth</td>
            <td>1-2</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#young_aulaeth%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -256px 0px 0px -512px%22></a></td>
            <td class=%22left%22>Young aulaeth</td>
            <td>1-2</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#brtender1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -224px 0px 0px -416px%22></a></td>
            <td class=%22left%22>Branchtender</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#brtender2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -224px 0px 0px -416px%22></a></td>
            <td class=%22left%22>Frantic branchtender</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#apparition%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Apparition</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ghostly_visage%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ghost1.png%22 alt=%22monsters_ghost1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Ghostly visage</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#guardian_of_the_catacombs%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Guardian of the catacombs</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#shade%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ghost1.png%22 alt=%22monsters_ghost1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Shade</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#spectre%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Spectre</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#young_gargoyle%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Young gargoyle</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#undead_warden%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Undead warden</td>
            <td>1</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#cave_guardian%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -0px 0px 0px -512px%22></a></td>
            <td class=%22left%22>Cave guardian</td>
            <td>2</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#winged_demon%22 class=%22at-icon size2x2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_demon1.png%22 alt=%22monsters_demon1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Winged demon</td>
            <td>3</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_chb_1a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -0px 0px 0px -608px%22></a></td>
            <td class=%22left%22>Iqhan chaos beast</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_chb_1b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -0px 0px 0px -608px%22></a></td>
            <td class=%22left%22>Iqhan chaos beast</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_boss%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -0px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Iqhan chaos enslaver</td>
            <td>5-7</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_3a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -512px%22></a></td>
            <td class=%22left%22>Iqhan chaos master</td>
            <td>1-3</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_3b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -544px%22></a></td>
            <td class=%22left%22>Iqhan chaos master</td>
            <td>1-3</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#irogotu%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Irogotu</td>
            <td>1</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#kaverin%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -160px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Kaverin</td>
            <td>1-2</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#kazaul_imp%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -64px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Kazaul imp</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#kazaul_guardian%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -64px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Kazaul guardian</td>
            <td>2</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#lbridge%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -96px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Guardian of the Bridge</td>
            <td>3</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maelveon%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Maelveon</td>
            <td>2</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Morkin lookout</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Morkin scout</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Morkin fighter</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Morkin guard</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Morkin berserker</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Morkin leader</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#plaguesp_13%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -576px%22></a></td>
            <td class=%22left%22>Plaguestrider master</td>
            <td>0-1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#restless_apparition%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -64px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Restless apparition</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#skeletal_reaper%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -32px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Skeletal reaper</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#tough_shadow_gargoyle%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Tough shadow gargoyle</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#shadow_gargoyle_master%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Shadow gargoyle master</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#shadow_gargoyle_trainer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Shadow gargoyle trainer</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#alynndir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Alynndir</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#birgil%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Birgil</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#potion_merchant%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Potion merchant</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#jolnor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Jolnor</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#mazeg%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Mazeg</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#samar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -416px%22></a></td>
            <td class=%22left%22>Samar</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#skylenar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Skylenar</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#talion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Talion</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Tharal</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#skeletal_master%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_skeleton2.png%22 alt=%22monsters_skeleton2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Skeletal master</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#skeletal_warrior%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_skeleton1.png%22 alt=%22monsters_skeleton1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Skeletal warrior</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#skeleton%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_skeleton1.png%22 alt=%22monsters_skeleton1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Skeleton</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#bone_warrior%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_skeleton1.png%22 alt=%22monsters_skeleton1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Bone warrior</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#bone_champion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_skeleton1.png%22 alt=%22monsters_skeleton1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Bone champion</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#snake_master%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Snake master</td>
            <td>1</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#toszylae%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Toszylae</td>
            <td>5-7</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#toszylae_guard%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -32px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Radiant guardian</td>
            <td>1-2</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#fledgling_gargoyle%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Fledgling Gargoyle</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#gargoyle%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Gargoyle</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#rotting_corpse%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie1.png%22 alt=%22monsters_zombie1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Rotting corpse</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#walking_corpse%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie1.png%22 alt=%22monsters_zombie1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Walking corpse</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zombie1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik8.png%22 alt=%22monsters_tometik8.png%22 style=%22margin: -96px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Rancid zombie</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zombie2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik8.png%22 alt=%22monsters_tometik8.png%22 style=%22margin: -96px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Rotting zombie</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zombie3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik8.png%22 alt=%22monsters_tometik8.png%22 style=%22margin: -96px 0px 0px -192px%22></a></td>
            <td class=%22left%22>Blighted zombie</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zombie5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie2.png%22 alt=%22monsters_zombie2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Corrupted zombie</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zombie6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie2.png%22 alt=%22monsters_zombie2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Bloodthirsty zombie</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zombie7%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie2.png%22 alt=%22monsters_zombie2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Tainted zombie</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#unzel%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Unzel</td>
            <td>1</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vacor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage.png%22 alt=%22monsters_mage.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Vacor</td>
            <td>1</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#white_wyrm%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -608px%22></a></td>
            <td class=%22left%22>White wyrm</td>
            <td>1-2</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Zortak scout</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Zortak fighter</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Zortak guard</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Zortak barbarian</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortakb%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Zortak leader</td>
            <td>2</td>
            <td>100%</td>
        </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#erinith%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>Deep wound</td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bwm_agent%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>The agent and the beast</td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#prim_hunt%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>Clouded intent</td>
              <td></td>
              <td></td>
          </tr>
">
          <td class="icon"><span class="hidden">health</span><a href="#health" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -96px 0px 0px -224px"></a></td>
          <td class="left name drop">Regular potion of health</td>
          <td>
                      +10
          </td>
          <td class="cond">
          
          </td>
      </tr>
      <tr id="health_major" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ghost_of_luthor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Ghost of Luthor</td>
            <td>1</td>
            <td>100%</td>
        </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#erinith%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>Deep wound</td>
              <td></td>
              <td></td>
          </tr>
">
          <td class="icon"><span class="hidden">health_major</span><a href="#health_major" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -0px"></a></td>
          <td class="left name drop">Major flask of health</td>
          <td>
                      +40
          </td>
          <td class="cond">
          
          </td>
      </tr>
      <tr id="health_major2" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#potion_merchant%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Potion merchant</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#jolnor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Jolnor</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#mazeg%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Mazeg</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#samar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -416px%22></a></td>
            <td class=%22left%22>Samar</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#skylenar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Skylenar</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#talion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Talion</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Tharal</td>
            <td>10</td>
            <td>sell</td>
        </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#erinith%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>Deep wound</td>
              <td></td>
              <td></td>
          </tr>
">
          <td class="icon"><span class="hidden">health_major2</span><a href="#health_major2" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -0px"></a></td>
          <td class="left name drop">Major potion of health</td>
          <td>
                      +40
          </td>
          <td class="cond">
          
          </td>
      </tr>
      <tr id="health_minor" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#buceth%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Buceth</td>
            <td>1-4</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#strong_minotaur%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Strong minotaur</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#young_minotaur%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Young minotaur</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#kazaul_spawn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -64px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Kazaul spawn</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#keknazar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Keknazar</td>
            <td>1-2</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#larval_boss%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -256px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Strong larval burrower</td>
            <td>1</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#snake_servant%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Snake servant</td>
            <td>1</td>
            <td>25%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#grave_spawn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -64px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Grave spawn</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#restless_dead%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -64px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Restless dead</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#rogorn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Rogorn</td>
            <td>1-2</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#rogorn_henchman%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Rogorn's henchman</td>
            <td>1-2</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ulirfendor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Ulirfendor</td>
            <td>1-2</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#hatchling_white_wyrm%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -576px%22></a></td>
            <td class=%22left%22>Hatchling white wyrm</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#young_white_wyrm%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -576px%22></a></td>
            <td class=%22left%22>Young white wyrm</td>
            <td>1-2</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#wyrm_apprentice%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Wyrm apprentice</td>
            <td>1-2</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#wyrm_trainer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Wyrm trainer</td>
            <td>1-2</td>
            <td>10%</td>
        </tr>
">
          <td class="icon"><span class="hidden">health_minor</span><a href="#health_minor" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -224px"></a></td>
          <td class="left name drop">Minor vial of health</td>
          <td>
                      +5
          </td>
          <td class="cond">
          
          </td>
      </tr>
      <tr id="health_minor2" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#birgil%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Birgil</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#potion_merchant%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Potion merchant</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#jolnor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Jolnor</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#skylenar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Skylenar</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#talion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Talion</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Tharal</td>
            <td>10</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">health_minor2</span><a href="#health_minor2" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -224px"></a></td>
          <td class="left name drop">Minor potion of health</td>
          <td>
                      +5
          </td>
          <td class="cond">
          
          </td>
      </tr>
      <tr id="pot_aware" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lodar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -544px%22></a></td>
            <td class=%22left%22>Lodar</td>
            <td>5-12</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_aware</span><a href="#pot_aware" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -96px 0px 0px -32px"></a></td>
          <td class="left name drop">Potion of vulnerabilities</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Vulnerability awareness 3x (8 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#crit_aware">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -256px">
  </a>

          </td>
      </tr>
      <tr id="pot_barkskin" data-drop="">
          <td class="icon"><span class="hidden">pot_barkskin</span><a href="#pot_barkskin" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -0px 0px 0px -32px"></a></td>
          <td class="left name">Potion of bark skin</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Bark skin (15 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#barkskin">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -192px">
  </a>

          </td>
      </tr>
      <tr id="pot_bleeding_ointment" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Puny Charwood goblin</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Charwood goblin scout</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -192px%22></a></td>
            <td class=%22left%22>Starving Charwood goblin</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -192px%22></a></td>
            <td class=%22left%22>Charwood goblin</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Charwood goblin fighter</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Tough Charwood goblin</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg7%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -352px%22></a></td>
            <td class=%22left%22>Aggressive Charwood goblin</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg8%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -352px%22></a></td>
            <td class=%22left%22>Strong Charwood goblin</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdgg%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -320px%22></a></td>
            <td class=%22left%22>Charwood goblin</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#samar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -416px%22></a></td>
            <td class=%22left%22>Samar</td>
            <td>10</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_bleeding_ointment</span><a href="#pot_bleeding_ointment" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -224px"></a></td>
          <td class="left name drop">Ointment of bleeding wounds</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Bleeding wound remove" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#bleeding_wound">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -0px">
  </a>

          </td>
      </tr>
      <tr id="pot_blind_rage" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#mazeg%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Mazeg</td>
            <td>10</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_blind_rage</span><a href="#pot_blind_rage" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -128px 0px 0px -224px"></a></td>
          <td class="left name drop">Potion of blind rage</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Minor berserker rage (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#rage_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -192px">
  </a>

          </td>
      </tr>
      <tr id="pot_bm_lodar" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lodar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -544px%22></a></td>
            <td class=%22left%22>Lodar</td>
            <td>15-70</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_bm_lodar</span><a href="#pot_bm_lodar" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -224px 0px 0px -64px"></a></td>
          <td class="left name drop">Lodar's bonemeal potion</td>
          <td>
                      +(20–50)
          </td>
          <td class="cond">
            <a title="On use
  On source
    Regeneration 3x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#regen2">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>
  <a title="On use
  On source
    20% chance of Regeneration 5x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#regen2">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="pot_courage" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#lbridge%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -96px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Guardian of the Bridge</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Morkin lookout</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Morkin scout</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Morkin fighter</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Morkin guard</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Morkin berserker</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Morkin leader</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lodar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -544px%22></a></td>
            <td class=%22left%22>Lodar</td>
            <td>5-12</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_courage</span><a href="#pot_courage" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -160px 0px 0px -128px"></a></td>
          <td class="left name drop">Liquid courage</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Courage 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#courage">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -256px">
  </a>

          </td>
      </tr>
      <tr id="pot_def" data-drop="">
          <td class="icon"><span class="hidden">pot_def</span><a href="#pot_def" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -160px 0px 0px -160px"></a></td>
          <td class="left name">Potion of improved defense</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Fortified defense (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#def">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -96px 0px 0px -160px">
  </a>

          </td>
      </tr>
      <tr id="pot_fatigue_restore" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#herec%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Herec</td>
            <td>10</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_fatigue_restore</span><a href="#pot_fatigue_restore" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -416px"></a></td>
          <td class="left name drop">Restore fatigue</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Minor fatigue remove" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fatigue_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -0px">
  </a>

          </td>
      </tr>
      <tr id="pot_focus_ac" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hjaldar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -320px%22></a></td>
            <td class=%22left%22>Hjaldar</td>
            <td>8</td>
            <td>sell</td>
        </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#sisterfight%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>A difference in opinion</td>
              <td></td>
              <td></td>
          </tr>
">
          <td class="icon"><span class="hidden">pot_focus_ac</span><a href="#pot_focus_ac" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -288px"></a></td>
          <td class="left name drop">Potion of accuracy focus</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Focused accuracy (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#focus_ac">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -224px 0px 0px -0px">
  </a>

          </td>
      </tr>
      <tr id="pot_focus_ac2" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hjaldar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -320px%22></a></td>
            <td class=%22left%22>Hjaldar</td>
            <td>5</td>
            <td>sell</td>
        </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#sisterfight%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>A difference in opinion</td>
              <td></td>
              <td></td>
          </tr>
">
          <td class="icon"><span class="hidden">pot_focus_ac2</span><a href="#pot_focus_ac2" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -288px"></a></td>
          <td class="left name drop">Strong potion of accuracy focus</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Focused accuracy 2x (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#focus_ac">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -224px 0px 0px -0px">
  </a>

          </td>
      </tr>
      <tr id="pot_focus_dmg" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hjaldar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -320px%22></a></td>
            <td class=%22left%22>Hjaldar</td>
            <td>8</td>
            <td>sell</td>
        </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#sisterfight%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>A difference in opinion</td>
              <td></td>
              <td></td>
          </tr>
">
          <td class="icon"><span class="hidden">pot_focus_dmg</span><a href="#pot_focus_dmg" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -352px"></a></td>
          <td class="left name drop">Potion of damage focus</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Focused damage (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#focus_dmg">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -0px">
  </a>

          </td>
      </tr>
      <tr id="pot_focus_dmg2" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hjaldar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -320px%22></a></td>
            <td class=%22left%22>Hjaldar</td>
            <td>5</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_focus_dmg2</span><a href="#pot_focus_dmg2" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -352px"></a></td>
          <td class="left name drop">Strong potion of damage focus</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Focused damage 2x (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#focus_dmg">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -0px">
  </a>

          </td>
      </tr>
      <tr id="pot_haste" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lodar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -544px%22></a></td>
            <td class=%22left%22>Lodar</td>
            <td>3</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_haste</span><a href="#pot_haste" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -64px 0px 0px -32px"></a></td>
          <td class="left name drop">Potion of haste</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Haste (11 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#haste">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -96px">
  </a>

          </td>
      </tr>
      <tr id="pot_healthlodar" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lodar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -544px%22></a></td>
            <td class=%22left%22>Lodar</td>
            <td>5-12</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_healthlodar</span><a href="#pot_healthlodar" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -192px 0px 0px -0px"></a></td>
          <td class="left name drop">Lodar's potion of health</td>
          <td>
                      +(10–20)
          </td>
          <td class="cond">
            <a title="On use
  On source
    Regeneration 3x (8 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#regen2">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="pot_poison_weak" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#mazeg%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Mazeg</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#wyrm_apprentice%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Wyrm apprentice</td>
            <td>1-3</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#wyrm_trainer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Wyrm trainer</td>
            <td>1-3</td>
            <td>5%</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_poison_weak</span><a href="#pot_poison_weak" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -384px"></a></td>
          <td class="left name drop">Weak poison</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Weak Poison (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          </td>
      </tr>
      <tr id="pot_poison_weak_antidote" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#samar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -416px%22></a></td>
            <td class=%22left%22>Samar</td>
            <td>10</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_poison_weak_antidote</span><a href="#pot_poison_weak_antidote" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -96px 0px 0px -384px"></a></td>
          <td class="left name drop">Weak poison antidote</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Weak Poison remove" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          </td>
      </tr>
      <tr id="pot_regen1" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lodar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -544px%22></a></td>
            <td class=%22left%22>Lodar</td>
            <td>5-12</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_regen1</span><a href="#pot_regen1" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -192px 0px 0px -128px"></a></td>
          <td class="left name drop">Potion of minor regeneration</td>
          <td>
                      +5
          </td>
          <td class="cond">
            <a title="On use
  On source
    Regeneration (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#regen2">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="pot_rnd" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lodar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -544px%22></a></td>
            <td class=%22left%22>Lodar</td>
            <td>2-6</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_rnd</span><a href="#pot_rnd" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -160px"></a></td>
          <td class="left name drop">Lodar's perilous concoction</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    15% chance of Fortified defense 3x (9 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#def">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -96px 0px 0px -160px">
  </a>
  <a title="On use
  On source
    15% chance of Minor fatigue (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fatigue_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -0px">
  </a>
  <a title="On use
  On source
    5% chance of Minor weapon feebleness 3x (6 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#feebleness_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -128px">
  </a>
  <a title="On use
  On source
    10% chance of Weak Poison 4x (9 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>
  <a title="On use
  On source
    15% chance of Minor berserker rage 2x (9 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#rage_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -192px">
  </a>
  <a title="On use
  On source
    10% chance of Minor speed 2x (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#speed_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -96px">
  </a>
  <a title="On use
  On source
    10% chance of Strength 2x (9 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#str">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -0px">
  </a>

          </td>
      </tr>
      <tr id="pot_scaradon" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#thorin%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -192px%22></a></td>
            <td class=%22left%22>Thorin</td>
            <td>30</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_scaradon</span><a href="#pot_scaradon" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -96px 0px 0px -192px"></a></td>
          <td class="left name drop">Scaradon extract</td>
          <td>
                      +(5–10)
          </td>
          <td class="cond">
          
          </td>
      </tr>
      <tr id="pot_senses" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lodar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -544px%22></a></td>
            <td class=%22left%22>Lodar</td>
            <td>5-12</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_senses</span><a href="#pot_senses" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -288px 0px 0px -64px"></a></td>
          <td class="left name drop">Potion of heightened senses</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Heightened senses 3x (20 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#sense_1">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -96px 0px 0px -64px">
  </a>

          </td>
      </tr>
      <tr id="pot_shadowtear" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lodar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -544px%22></a></td>
            <td class=%22left%22>Lodar</td>
            <td>1-2</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_shadowtear</span><a href="#pot_shadowtear" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -256px 0px 0px -0px"></a></td>
          <td class="left name drop">Tears of the Shadow</td>
          <td>
                      +(5–15)
          </td>
          <td class="cond">
            <a title="On use
  On source
    Shadow's accuracy 2x (16 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#shadow_acc">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -224px 0px 0px -96px">
  </a>
  <a title="On use
  On source
    Shadow's strength 3x (16 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#shadow_dmg">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -0px">
  </a>
  <a title="On use
  On source
    Shadow's protection 2x (20 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#shadow_prot">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -0px">
  </a>

          </td>
      </tr>
      <tr id="pot_speed_1" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#aulaeth%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -576px%22></a></td>
            <td class=%22left%22>Aulaeth</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#strong_aulaeth%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -576px%22></a></td>
            <td class=%22left%22>Strong aulaeth</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#young_aulaeth%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -256px 0px 0px -512px%22></a></td>
            <td class=%22left%22>Young aulaeth</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#samar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -416px%22></a></td>
            <td class=%22left%22>Samar</td>
            <td>10</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pot_speed_1</span><a href="#pot_speed_1" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -64px 0px 0px -416px"></a></td>
          <td class="left name drop">Minor potion of speed</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Minor speed (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#speed_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -96px">
  </a>

          </td>
      </tr>
      <tr id="pot_str" data-drop="">
          <td class="icon"><span class="hidden">pot_str</span><a href="#pot_str" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -96px 0px 0px -96px"></a></td>
          <td class="left name">Minor potion of strength</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Strength (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#str">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -0px">
  </a>

          </td>
      </tr>
    </tbody>
    </table>
     <h2>Food</h2>
     <table id="foods" width="30%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="izthiel_claw" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#izthiel_1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -352px%22></a></td>
            <td class=%22left%22>Young Izthiel</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#izthiel_2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Izthiel</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#izthiel_3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Strong Izthiel</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#izthiel_4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -384px%22></a></td>
            <td class=%22left%22>Izthiel Guardian</td>
            <td>1</td>
            <td>30%</td>
        </tr>
">
          <td class="icon"><span class="hidden">izthiel_claw</span><a href="#izthiel_claw" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc.png" alt="items_misc.png" style="margin: -96px 0px 0px -160px"></a></td>
          <td class="left name drop">Izthiel claw</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance 3x (6 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>
  <a title="On use
  On source
    20% chance of Food-poisoning 3x (10 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#foodp">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -64px">
  </a>

          </td>
      </tr>
      <tr id="meat" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#anklebiter2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -288px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Small horned anklebiter</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#anklebiter3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -288px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Young horned anklebiter</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#anklebiter4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -288px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Fast horned anklebiter</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#anklebiter5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -256px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Tough horned anklebiter</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#anklebiter6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -256px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Strong horned anklebiter</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#anklebiter7%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -256px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Steelhide horned anklebiter</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#arulir_1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -0px 0px 0px -416px%22></a></td>
            <td class=%22left%22>Arulir</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#arulir_2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -0px 0px 0px -416px%22></a></td>
            <td class=%22left%22>Giant Arulir</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mountain_wolf%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Mountain wolf</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#rabid_fox%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Rabid Fox</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#rabid_hound%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Rabid hound</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#small_rabid_dog%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Small rabid dog</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#wild_fox%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Wild Fox</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#wolf%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Wolf</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#anklebiter%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -192px%22></a></td>
            <td class=%22left%22>Anklebiter</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#cave_dwelling_boar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -192px%22></a></td>
            <td class=%22left%22>Cave dwelling boar</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#rabid_boar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -192px%22></a></td>
            <td class=%22left%22>Rabid Boar</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vicious_hound%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -320px%22></a></td>
            <td class=%22left%22>Vicious hound</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#wild_boar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -192px%22></a></td>
            <td class=%22left%22>Wild Boar</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#scaled_venomfang%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png%22 alt=%22monsters_snakes.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Scaled venomfang</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#slithering_venomfang%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png%22 alt=%22monsters_snakes.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Slithering venomfang</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#tough_venomfang%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png%22 alt=%22monsters_snakes.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Tough venomfang</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#young_gornaud%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Young gornaud</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#gornaud%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Gornaud</td>
            <td>1-2</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#strong_gornaud%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -320px%22></a></td>
            <td class=%22left%22>Strong Gornaud</td>
            <td>1-3</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#irdegh_1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -0px 0px 0px -480px%22></a></td>
            <td class=%22left%22>Irdegh</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#irdegh_2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -0px 0px 0px -480px%22></a></td>
            <td class=%22left%22>Venomous Irdegh</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#irdegh_3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td>
            <td class=%22left%22>Piercing Irdegh</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#irdegh_4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td>
            <td class=%22left%22>Ancient piercing Irdegh</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#irdegh_sp_1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -192px%22></a></td>
            <td class=%22left%22>Irdegh spawn</td>
            <td>1</td>
            <td>1%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#irdegh_sp_2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -192px%22></a></td>
            <td class=%22left%22>Irdegh spawn</td>
            <td>1</td>
            <td>1%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#khakin1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -352px%22></a></td>
            <td class=%22left%22>Khakin spawn</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#khakin2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -384px%22></a></td>
            <td class=%22left%22>Aggressive Khakin beast</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#khakin3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -416px%22></a></td>
            <td class=%22left%22>Tough Khakin beast</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#khakin4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -448px%22></a></td>
            <td class=%22left%22>Strong Khakin beast</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maonit_1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Maonit troll</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maonit_2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Giant Maonit troll</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maonit_3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Strong Maonit troll</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maonit_4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Maonit brute</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maonit_5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Tough Maonit brute</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maonit_6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Strong Maonit brute</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mazarth1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -32px 0px 0px -512px%22></a></td>
            <td class=%22left%22>Mazarth beast</td>
            <td>0-5</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mazarth2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -32px 0px 0px -544px%22></a></td>
            <td class=%22left%22>Tough Mazarth beast</td>
            <td>0-5</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#forestfox2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Young forest fox</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#forestfox3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Forest fox</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mwolf_1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Mountain wolf pup</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mwolf_2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Young mountain wolf</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mwolf_3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Young mountain fox</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mwolf_4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Mountain fox</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mwolf_5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Ferocious mountain fox</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mwolf_6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Rabid mountain wolf</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mwolf_7%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Strong mountain wolf</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mwolf_8%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Ferocious mountain wolf</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#hunting_dog%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Hunting dog</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#young_wolf%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Young wolf</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#fledgling_wolf%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Fledgling wolf</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#rabid_wolf%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Rabid Wolf</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#pack_hunter%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Pack hunter</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#pack_leader%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Pack Leader</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#redft0%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -0px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Tough redfoot beast</td>
            <td>1</td>
            <td>20%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#redft1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -0px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Strong redfoot beast</td>
            <td>1</td>
            <td>20%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#redft2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -0px 0px 0px -320px%22></a></td>
            <td class=%22left%22>Bloodthirsty redfoot beast</td>
            <td>1</td>
            <td>20%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#rivertroll%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -128px%22></a></td>
            <td class=%22left%22>River troll</td>
            <td>3-5</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#alynndir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Alynndir</td>
            <td>20</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#bela%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Bela</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#mara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Mara</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharwyn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Tharwyn</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#thieves_guild_cook%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Thieves guild cook</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#cave_snake%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png%22 alt=%22monsters_snakes.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Cave Snake</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#forest_snake%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png%22 alt=%22monsters_snakes.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Forest Snake</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#tough_cave_snake%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png%22 alt=%22monsters_snakes.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Tough Cave Snake</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#venomous_cave_snake%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png%22 alt=%22monsters_snakes.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Venomous Cave Snake</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#young_cave_snake%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png%22 alt=%22monsters_snakes.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Young Cave Snake</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#forest_serpent%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png%22 alt=%22monsters_snakes.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Forest serpent</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vicious_forest_serpent%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_snakes.png%22 alt=%22monsters_snakes.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Vicious forest serpent</td>
            <td>1</td>
            <td>30%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#lostsheep1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png%22 alt=%22monsters_karvis2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Sheep</td>
            <td>0-3</td>
            <td>70%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#lostsheep2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png%22 alt=%22monsters_karvis2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Sheep</td>
            <td>0-3</td>
            <td>70%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#lostsheep3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png%22 alt=%22monsters_karvis2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Sheep</td>
            <td>0-3</td>
            <td>70%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#lostsheep4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png%22 alt=%22monsters_karvis2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Sheep</td>
            <td>0-3</td>
            <td>70%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#sheep1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png%22 alt=%22monsters_karvis2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Sheep</td>
            <td>0-3</td>
            <td>70%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscale1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -96px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Puny venomscales</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscale2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -96px 0px 0px -96px%22></a></td>
            <td class=%22left%22>Young venomscales</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscale3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -64px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Gray venomscales</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscale4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -64px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Aggressive venomscales</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscale5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -96px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Quick venomscales</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscale6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -96px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Vicious venomscales</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscale7%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -160px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Strong venomscales</td>
            <td>1</td>
            <td>5%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscale8%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik4.png%22 alt=%22monsters_tometik4.png%22 style=%22margin: -160px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Tough venomscales</td>
            <td>1</td>
            <td>5%</td>
        </tr>
">
          <td class="icon"><span class="hidden">meat</span><a href="#meat" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -32px 0px 0px -352px"></a></td>
          <td class="left name drop">Meat</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance 2x (12 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>
  <a title="On use
  On source
    10% chance of Food-poisoning 3x (10 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#foodp">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -64px">
  </a>

          </td>
      </tr>
      <tr id="apple_green" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#bela%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Bela</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#mara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Mara</td>
            <td>5</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">apple_green</span><a href="#apple_green" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name drop">Green apple</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance (8 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="apple_red" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#bela%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Bela</td>
            <td>5</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">apple_red</span><a href="#apple_red" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name drop">Red apple</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance (12 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="bread" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#gallain%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png%22 alt=%22monsters_man1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Gallain</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#mara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Mara</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#thieves_guild_cook%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Thieves guild cook</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#torilo%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Torilo</td>
            <td>5</td>
            <td>sell</td>
        </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#mikhail_bread%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>Breakfast bread</td>
              <td></td>
              <td></td>
          </tr>
">
          <td class="icon"><span class="hidden">bread</span><a href="#bread" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -32px 0px 0px -224px"></a></td>
          <td class="left name drop">Bread</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance (10 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="carrot" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#bela%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Bela</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#grimion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Grimion</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#kendelow%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png%22 alt=%22monsters_man1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Kendelow</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#mara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Mara</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharwyn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Tharwyn</td>
            <td>5</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">carrot</span><a href="#carrot" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -32px 0px 0px -32px"></a></td>
          <td class="left name drop">Carrot</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance (8 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="carrots" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#khorailla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Khorailla</td>
            <td>5-12</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">carrots</span><a href="#carrots" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png" alt="items_misc_2.png" style="margin: -0px 0px 0px -448px"></a></td>
          <td class="left name drop">Carrots</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance (10 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="cheese" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#khorailla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Khorailla</td>
            <td>5-12</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">cheese</span><a href="#cheese" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -32px 0px 0px -288px"></a></td>
          <td class="left name drop">Cheese</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance 2x (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="chkn_leg" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#khorailla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Khorailla</td>
            <td>5-12</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">chkn_leg</span><a href="#chkn_leg" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_2.png" alt="items_misc_2.png" style="margin: -0px 0px 0px -416px"></a></td>
          <td class="left name drop">Cooked chicken leg</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance 4x (6 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="cookperch" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#khorailla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Khorailla</td>
            <td>5-12</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">cookperch</span><a href="#cookperch" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -32px 0px 0px -384px"></a></td>
          <td class="left name drop">Cooked perch</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance 4x (8 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="eggs" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#thieves_guild_cook%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Thieves guild cook</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#torilo%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Torilo</td>
            <td>5</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">eggs</span><a href="#eggs" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -32px 0px 0px -192px"></a></td>
          <td class="left name drop">Eggs</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance (6 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="meat_cooked" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#bela%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Bela</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#gallain%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png%22 alt=%22monsters_man1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Gallain</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#grimion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Grimion</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#kendelow%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png%22 alt=%22monsters_man1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Kendelow</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#mara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Mara</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharwyn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Tharwyn</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#thieves_guild_cook%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Thieves guild cook</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#torilo%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Torilo</td>
            <td>5</td>
            <td>sell</td>
        </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bucus%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>Key of Luthor</td>
              <td></td>
              <td></td>
          </tr>
">
          <td class="icon"><span class="hidden">meat_cooked</span><a href="#meat_cooked" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -32px 0px 0px -416px"></a></td>
          <td class="left name drop">Cooked meat</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance 3x (11 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="mushroom" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#bela%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Bela</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#grimion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Grimion</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#kendelow%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png%22 alt=%22monsters_man1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Kendelow</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharwyn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Tharwyn</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#thieves_guild_cook%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Thieves guild cook</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#torilo%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Torilo</td>
            <td>5</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">mushroom</span><a href="#mushroom" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -32px 0px 0px -160px"></a></td>
          <td class="left name drop">Mushroom</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance (2 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="pear" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#torilo%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Torilo</td>
            <td>5</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">pear</span><a href="#pear" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -0px 0px 0px -288px"></a></td>
          <td class="left name drop">Pear</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance (8 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="radish" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#birgil%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Birgil</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#potion_merchant%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Potion merchant</td>
            <td>5</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">radish</span><a href="#radish" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -32px 0px 0px -0px"></a></td>
          <td class="left name drop">Radish</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="rawperch" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Puny Charwood goblin</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -160px%22></a></td>
            <td class=%22left%22>Charwood goblin scout</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -192px%22></a></td>
            <td class=%22left%22>Starving Charwood goblin</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -192px%22></a></td>
            <td class=%22left%22>Charwood goblin</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Charwood goblin fighter</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Tough Charwood goblin</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg7%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -352px%22></a></td>
            <td class=%22left%22>Aggressive Charwood goblin</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg8%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -352px%22></a></td>
            <td class=%22left%22>Strong Charwood goblin</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdgg%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -320px%22></a></td>
            <td class=%22left%22>Charwood goblin</td>
            <td>1</td>
            <td>10%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#khorailla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Khorailla</td>
            <td>5-12</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">rawperch</span><a href="#rawperch" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -32px 0px 0px -320px"></a></td>
          <td class="left name drop">Raw perch</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance 2x (6 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>
  <a title="On use
  On source
    10% chance of Food-poisoning 3x (8 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#foodp">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -64px">
  </a>

          </td>
      </tr>
      <tr id="strawberry" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#potion_merchant%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Potion merchant</td>
            <td>5</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">strawberry</span><a href="#strawberry" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -0px 0px 0px -256px"></a></td>
          <td class="left name drop">Strawberry</td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance (2 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
    </tbody>
    </table>
     <h2>Drink</h2>
     <table id="drinks" width="50%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>HP</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="drink_applej" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lowyna%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -448px%22></a></td>
            <td class=%22left%22>Lowyna</td>
            <td>5-20</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">drink_applej</span><a href="#drink_applej" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -32px 0px 0px -64px"></a></td>
          <td class="left name drop">Apple juice</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance (15 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="drink_charwood1" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#khorailla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Khorailla</td>
            <td>5-12</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">drink_charwood1</span><a href="#drink_charwood1" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name drop">Sap of the charwood tree</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance 2x (15 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>
  <a title="On use
  On source
    10% chance of Weak Poison 4x (10 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          </td>
      </tr>
      <tr id="drink_charwood2" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#khorailla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Khorailla</td>
            <td>5-12</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">drink_charwood2</span><a href="#drink_charwood2" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -0px 0px 0px -64px"></a></td>
          <td class="left name drop">Concentrated charwood sap</td>
          <td>
          </td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance 3x (15 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>
  <a title="On use
  On source
    15% chance of Weak Poison 4x (10 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          </td>
      </tr>
      <tr id="drink_lowyn1" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lowyna%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -448px%22></a></td>
            <td class=%22left%22>Lowyna</td>
            <td>5-20</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">drink_lowyn1</span><a href="#drink_lowyn1" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name drop">Lowyna's foul brew</td>
          <td>
                      +(1–7)
          </td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>
  <a title="On use
  On source
    Intoxicated (20 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#intoxicated">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -32px">
  </a>
  <a title="On use
  On source
    30% chance of Intoxicated 3x (20 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#intoxicated">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -32px">
  </a>

          </td>
      </tr>
      <tr id="drink_lowyn2" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lowyna%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -448px%22></a></td>
            <td class=%22left%22>Lowyna</td>
            <td>5-20</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">drink_lowyn2</span><a href="#drink_lowyn2" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -0px 0px 0px -96px"></a></td>
          <td class="left name drop">Lowyna's special brew</td>
          <td>
                      +(1–9)
          </td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance 3x (12 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>
  <a title="On use
  On source
    10% chance of Food-poisoning 5x (12 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#foodp">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -64px">
  </a>
  <a title="On use
  On source
    Intoxicated (20 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#intoxicated">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -32px">
  </a>
  <a title="On use
  On source
    30% chance of Intoxicated 3x (20 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#intoxicated">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -32px">
  </a>

          </td>
      </tr>
      <tr id="drink_lowyn3" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lowyna%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -448px%22></a></td>
            <td class=%22left%22>Lowyna</td>
            <td>5-20</td>
            <td>sell</td>
        </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#lowyna%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>Sweet sweet rat poison</td>
              <td></td>
              <td></td>
          </tr>
">
          <td class="icon"><span class="hidden">drink_lowyn3</span><a href="#drink_lowyn3" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -64px 0px 0px -0px"></a></td>
          <td class="left name drop">Lowyna's rat poison</td>
          <td>
                      +(5–10)
          </td>
          <td class="cond">
            <a title="On use
  On source
    Dazed (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#dazed">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -288px">
  </a>
  <a title="On use
  On source
    Minor fatigue (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fatigue_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -0px">
  </a>
  <a title="On use
  On source
    Sustenance 3x (20 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>
  <a title="On use
  On source
    15% chance of Weak Poison 2x (10 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          </td>
      </tr>
      <tr id="drink_prunej" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lowyna%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -448px%22></a></td>
            <td class=%22left%22>Lowyna</td>
            <td>5-20</td>
            <td>sell</td>
        </tr>
">
          <td class="icon"><span class="hidden">drink_prunej</span><a href="#drink_prunej" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik1.png" alt="items_tometik1.png" style="margin: -32px 0px 0px -96px"></a></td>
          <td class="left name drop">Prune juice</td>
          <td>
                      +(0–10)
          </td>
          <td class="cond">
            <a title="On use
  On source
    Sustenance (15 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#food">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          </td>
      </tr>
      <tr id="mead" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#highwayman1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td>
            <td class=%22left%22>Highwayman</td>
            <td>1</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#lodar_fg3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png%22 alt=%22monsters_rltiles3.png%22 style=%22margin: -32px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Afflicted Feygard guard</td>
            <td>1</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#lodar_fg4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png%22 alt=%22monsters_rltiles3.png%22 style=%22margin: -32px 0px 0px -128px%22></a></td>
            <td class=%22left%22>Insane Feygard guard</td>
            <td>1</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#bela%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Bela</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#birgil%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -32px%22></a></td>
            <td class=%22left%22>Birgil</td>
            <td>10</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#gallain%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png%22 alt=%22monsters_man1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Gallain</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#grimion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Grimion</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#kendelow%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_man1.png%22 alt=%22monsters_man1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Kendelow</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#mara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Mara</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharwyn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Tharwyn</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#thieves_guild_cook%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Thieves guild cook</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#torilo%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -288px%22></a></td>
            <td class=%22left%22>Torilo</td>
            <td>5</td>
            <td>sell</td>
        </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#fallhavendrunk%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>Drunken tale</td>
              <td></td>
              <td></td>
          </tr>
">
          <td class="icon"><span class="hidden">mead</span><a href="#mead" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -96px 0px 0px -288px"></a></td>
          <td class="left name drop">Mead</td>
          <td>
                      +1
          </td>
          <td class="cond">
          
          </td>
      </tr>
      <tr id="milk" data-drop="        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#larcal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td>
            <td class=%22left%22>Larcal</td>
            <td>1</td>
            <td>100%</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#bela%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td>
            <td class=%22left%22>Bela</td>
            <td>5</td>
            <td>sell</td>
        </tr>
        <tr>
            <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#potion_merchant%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td>
            <td class=%22left%22>Potion merchant</td>
            <td>10</td>
            <td>sell</td>
        </tr>
          <tr>
              <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#prim_innquest%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td>
              <td class=%22left%22>Well rested</td>
              <td></td>
              <td></td>
          </tr>
">
          <td class="icon"><span class="hidden">milk</span><a href="#milk" class="at-icon"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_consumables.png" alt="items_consumables.png" style="margin: -96px 0px 0px -416px"></a></td>
          <td class="left name drop">Milk</td>
          <td>
                      +2
          </td>
          <td class="cond">
          
          </td>
      </tr>
    </tbody>
    </table>
  </body>
</html>