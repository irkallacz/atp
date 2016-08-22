<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="initial-scale=1, width=device-width">
  <title>Andor's Trail Item List</title>
  <link rel="shortcut icon" href="http://andorstrail.irkalla.cz/favicon.ico" type="image/x-icon">
  <meta name="description" content="Andor's Trail Item List">
  <link rel="image_src" href="http://andorstrail.irkalla.cz/image/icon.png">
  <link rel="stylesheet" type="text/css" href="http://andorstrail.irkalla.cz/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="http://andorstrail.irkalla.cz/css/main.css">
  <script type="text/javascript" src="http://andorstrail.irkalla.cz/js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="http://andorstrail.irkalla.cz/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="http://andorstrail.irkalla.cz/js/function.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      oTableweapon = $('#weapons').dataTable({ 
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
        "aoColumnDefs": [
{ "aTargets": [2], "mRender": function (data,type) { return formatAP(data,type) } } , { "aTargets": [3], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [7], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [8], "mRender": function (data,type) { return formatAP(data,type) } } ,
        ]
      } );      
      oTableshield = $('#shields').dataTable({ 
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
        "aoColumnDefs": [
{ "aTargets": [2], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [4], "mRender": function (data,type) { return formatP(data,type) } } ,
        ]
      } );      
      oTablearmor = $('#armors').dataTable({ 
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
        "aoColumnDefs": [
{ "aTargets": [2], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [4], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [6], "mRender": function (data,type) { return formatHP(data,type) } } , { "aTargets": [8], "mRender": function (data,type) { return formatAP(data,type) } } , { "aTargets": [9], "mRender": function (data,type) { return formatAP(data,type) } } ,
        ]
      } );      
      oTablehelm = $('#helms').dataTable({ 
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
        "aoColumnDefs": [
{ "aTargets": [2], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [4], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [6], "mRender": function (data,type) { return formatHP(data,type) } } , { "aTargets": [8], "mRender": function (data,type) { return formatAP(data,type) } } ,
        ]
      } );      
      oTableglove = $('#gloves').dataTable({ 
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
        "aoColumnDefs": [
{ "aTargets": [2], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [4], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [6], "mRender": function (data,type) { return formatHP(data,type) } } ,
        ]
      } );      
      oTableboot = $('#boots').dataTable({ 
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
        "aoColumnDefs": [
{ "aTargets": [2], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [4], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [6], "mRender": function (data,type) { return formatHP(data,type) } } , { "aTargets": [8], "mRender": function (data,type) { return formatAP(data,type) } } ,
        ]
      } );      
      oTablenecklace = $('#necklaces').dataTable({ 
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
        "aoColumnDefs": [
{ "aTargets": [2], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [3], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [5], "mRender": function (data,type) { return formatHP(data,type) } } , { "aTargets": [7], "mRender": function (data,type) { return formatAP(data,type) } } ,
        ]
      } );      
      oTablering = $('#rings').dataTable({ 
        "bPaginate": false,
        "bFilter": false,
        "bInfo": false,
        "aoColumnDefs": [
{ "aTargets": [2], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [3], "mRender": function (data,type) { return formatP(data,type) } } , { "aTargets": [6], "mRender": function (data,type) { return formatHP(data,type) } } ,
        ]
      } );      

    $('#weapons td.drop').live('click', function () {        
      tr = this.parentNode;
      if (oTableweapon.fnIsOpen(tr)) closeTable(oTableweapon,tr); else openTable(oTableweapon,tr);
    } );
    $('#shields td.drop').live('click', function () {        
      tr = this.parentNode;
      if (oTableshield.fnIsOpen(tr)) closeTable(oTableshield,tr); else openTable(oTableshield,tr);
    } );
    $('#armors td.drop').live('click', function () {        
      tr = this.parentNode;
      if (oTablearmor.fnIsOpen(tr)) closeTable(oTablearmor,tr); else openTable(oTablearmor,tr);
    } );
    $('#helms td.drop').live('click', function () {        
      tr = this.parentNode;
      if (oTablehelm.fnIsOpen(tr)) closeTable(oTablehelm,tr); else openTable(oTablehelm,tr);
    } );
    $('#gloves td.drop').live('click', function () {        
      tr = this.parentNode;
      if (oTableglove.fnIsOpen(tr)) closeTable(oTableglove,tr); else openTable(oTableglove,tr);
    } );
    $('#boots td.drop').live('click', function () {        
      tr = this.parentNode;
      if (oTableboot.fnIsOpen(tr)) closeTable(oTableboot,tr); else openTable(oTableboot,tr);
    } );
    $('#necklaces td.drop').live('click', function () {        
      tr = this.parentNode;
      if (oTablenecklace.fnIsOpen(tr)) closeTable(oTablenecklace,tr); else openTable(oTablenecklace,tr);
    } );
    $('#rings td.drop').live('click', function () {        
      tr = this.parentNode;
      if (oTablering.fnIsOpen(tr)) closeTable(oTablering,tr); else openTable(oTablering,tr);
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
          <a class="current" href="http://andorstrail.irkalla.cz/0.7.0/itemlist.php">EQUIPMENT</a>
      </li>
      <li>
          <a  href="http://andorstrail.irkalla.cz/0.7.0/consumablelist.php">CONSUMABLE</a>
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
     <h1><a href="http://andorstrail.irkalla.cz/0.7.0/"><img alt="" src="http://andorstrail.irkalla.cz/image/icon.png"></a>Andor's Trail Item List</h1>
     <ul id="toc">
      <li><a href="#weapons">Weapon</a></li>
      <li><a href="#shields">Shield</a></li>
      <li><a href="#armors">Armor</a></li>
      <li><a href="#helms">Helm</a></li>
      <li><a href="#gloves">Glove</a></li>
      <li><a href="#boots">Boot</a></li>
      <li><a href="#necklaces">Necklace</a></li>
      <li><a href="#rings">Ring</a></li>
     </ul>
    
     <h2>Weapon</h2>
     <table id="weapons" width="80%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>Attack cost</th> <th>AC%</th> <th>Dmg</th> <th>Crit</th> <th>Crit*</th> <th>BC%</th> <th>Max AP</th> <th>Category</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="clmr_bers" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_smith%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard smith</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#clmr_bers" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_2.png" alt="items_weapons_2.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Claymore of the berserker
          </td>
          <td>7</td>
          <td>12</td>
          <td>
              5-8
          </td>
          <td>1</td>
          <td>1.5</td>
          <td>-5</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="clmr_def1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#siola%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -320px%22></a></td> <td class=%22left%22>Siola</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#clmr_def1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_2.png" alt="items_weapons_2.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Defender's claymore
          </td>
          <td>6</td>
          <td>13</td>
          <td>
              2-5
          </td>
          <td>1</td>
          <td>1.5</td>
          <td>11</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="clmr_def2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lleglaris%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -64px 0px 0px -32px%22></a></td> <td class=%22left%22>Lleglaris</td> <td>1-5</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#clmr_def2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -64px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Superior defender's claymore
          </td>
          <td>6</td>
          <td>10</td>
          <td>
              1-6
          </td>
          <td>2</td>
          <td>1.5</td>
          <td>15</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="clmr_dl" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -32px%22></a></td> <td class=%22left%22>Morkin lookout</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -0px%22></a></td> <td class=%22left%22>Morkin scout</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -96px%22></a></td> <td class=%22left%22>Morkin fighter</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -128px%22></a></td> <td class=%22left%22>Morkin guard</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -128px%22></a></td> <td class=%22left%22>Morkin berserker</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -64px%22></a></td> <td class=%22left%22>Morkin leader</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#agthor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Agthor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#clmr_dl" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -64px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Dull two-handed sword
          </td>
          <td>6</td>
          <td>8</td>
          <td>
              1-4
          </td>
          <td>1</td>
          <td>1.5</td>
          <td>-2</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="clmr_gnt" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lleglaris%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -64px 0px 0px -32px%22></a></td> <td class=%22left%22>Lleglaris</td> <td>1-5</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#clmr_gnt" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Giant's claymore
          </td>
          <td>7</td>
          <td>28</td>
          <td>
              4-7
          </td>
          <td>7</td>
          <td>1.5</td>
          <td>-6</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="clmr_irn1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#clmr_irn1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png" alt="items_misc_5.png" style="margin: -128px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Two-handed iron sword
          </td>
          <td>5</td>
          <td>9</td>
          <td>
              1-6
          </td>
          <td>1</td>
          <td>1.5</td>
          <td>-5</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="clmr_irn2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#clmr_irn2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png" alt="items_misc_5.png" style="margin: -128px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Two-handed iron claymore
          </td>
          <td>5</td>
          <td>12</td>
          <td>
              3-4
          </td>
          <td>6</td>
          <td>2</td>
          <td>-5</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="clmr_msv" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_smith%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard smith</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#clmr_msv" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Massive two-handed sword
          </td>
          <td>6</td>
          <td>21</td>
          <td>
              1-6
          </td>
          <td>1</td>
          <td>1.5</td>
          <td>-4</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="clmr_rst" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#clmr_rst" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -64px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Rusty claymore
          </td>
          <td>7</td>
          <td>23</td>
          <td>
              1-6
          </td>
          <td>4</td>
          <td>1.2</td>
          <td></td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
            <a title="On equip
  On source
    Dazed" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#dazed">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -288px">
  </a>

          
          
          </td>
      </tr>
      <tr id="clmr_ruin" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#aulowenn%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Aulowenn</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#clmr_ruin" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Gleaming claymore of ruin
          </td>
          <td>5</td>
          <td>35</td>
          <td>
              3-7
          </td>
          <td>5</td>
          <td>2.5</td>
          <td>-7</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
            <a title="On hit
  On target
    30% chance of Dazed (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#dazed">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -288px">
  </a>
  <a title="On hit
  On source
    15% chance of Strength (2 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#str">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -0px">
  </a>

          
          
          </td>
      </tr>
      <tr id="clmr_serp" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lleglaris%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -64px 0px 0px -32px%22></a></td> <td class=%22left%22>Lleglaris</td> <td>1-5</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#clmr_serp" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_2.png" alt="items_weapons_2.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Serpent's fang
          </td>
          <td>5</td>
          <td>12</td>
          <td>
              3-4
          </td>
          <td>13</td>
          <td>2</td>
          <td>-4</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
            <a title="On hit
  On target
    25% chance of Weak Poison (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          
          </td>
      </tr>
      <tr id="clmr_stl" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#agthor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Agthor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#clmr_stl" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_2.png" alt="items_weapons_2.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Two-handed steel sword
          </td>
          <td>5</td>
          <td>12</td>
          <td>
              1-6
          </td>
          <td>1</td>
          <td>1.5</td>
          <td>3</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="clmr_wrld" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -96px%22></a></td> <td class=%22left%22>Zortak scout</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -96px%22></a></td> <td class=%22left%22>Zortak fighter</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -224px%22></a></td> <td class=%22left%22>Zortak guard</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -224px%22></a></td> <td class=%22left%22>Zortak barbarian</td> <td>1</td> <td>1%</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#clmr_wrld" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -64px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Claymore of the warlord
          </td>
          <td>6</td>
          <td>19</td>
          <td>
              5-9
          </td>
          <td>2</td>
          <td>1.5</td>
          <td>5</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="clmr_wrmas" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#brtender1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -224px 0px 0px -416px%22></a></td> <td class=%22left%22>Branchtender</td> <td>1</td> <td>0.1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#brtender2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -224px 0px 0px -416px%22></a></td> <td class=%22left%22>Frantic branchtender</td> <td>1</td> <td>0.1%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#clmr_wrmas" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png" alt="items_misc_5.png" style="margin: -128px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Wraith's massive claymore
          </td>
          <td>7</td>
          <td>23</td>
          <td>
              1-19
          </td>
          <td>10</td>
          <td>2</td>
          <td>-4</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
            <a title="On kill
  On source
    55% chance of Strength 2x (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#str">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -0px">
  </a>

          
          
          </td>
      </tr>
      <tr id="elytharan_redeemer" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#wyrm_apprentice%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Wyrm apprentice</td> <td>1</td> <td>0.01%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#wyrm_trainer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Wyrm trainer</td> <td>1</td> <td>0.01%</td> </tr>">
          <td class="icon">
              <span class="hidden">4</span>
              <a title="legendary" href="#elytharan_redeemer" class="at-icon legendary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -160px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Elytharan redeemer
          </td>
          <td>5</td>
          <td>25</td>
          <td>
              3-8
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td>2</td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
            <a title="On equip
  On source
    Bless" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#bless">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -416px">
  </a>

          
          
          </td>
      </tr>
      <tr id="xulviir" data-drop="<tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#xulviir%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>A creeping fear</td> <td></td> <td></td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#xulviir" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png" alt="items_misc_5.png" style="margin: -128px 0px 0px -128px"></a>
          </td>
          <td class="left name drop">
              Xul'viir
          </td>
          <td>6</td>
          <td>32</td>
          <td>
              4-15
          </td>
          <td>3</td>
          <td>2</td>
          <td>12</td>
          <td></td>
          <td class="left category">
              Two-handed sword
          </td>
          <td class="cond">
            <a title="On hit
  On target
    15% chance of Bleeding wound 3x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#bleeding_wound">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -0px">
  </a>
  <a title="On hit
  On target
    10% chance of Dazed (2 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#dazed">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -288px">
  </a>

          
          
          </td>
      </tr>
      <tr id="axe1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hadracor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Hadracor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#axe1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -128px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Woodcutter axe
          </td>
          <td>5</td>
          <td>5</td>
          <td>
              1-3
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Axe
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="axe2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#axe2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -128px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Iron axe
          </td>
          <td>6</td>
          <td>5</td>
          <td>
              2-5
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Axe
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="axe_black1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#axe_black1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -64px 0px 0px -256px"></a>
          </td>
          <td class="left name drop">
              Black axe
          </td>
          <td>6</td>
          <td>6</td>
          <td>
              3
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Axe
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="axe_black2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ash1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td> <td class=%22left%22>Young ash gargoyle</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ash2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td> <td class=%22left%22>Ash gargoyle</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ash3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Strong ash gargoyle</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ash4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Hardened ash gargoyle</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ashs1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -352px 0px 0px -128px%22></a></td> <td class=%22left%22>Weeping ash spectre</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ashs2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -352px 0px 0px -128px%22></a></td> <td class=%22left%22>Wailing Ash spectre</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ashs3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -352px 0px 0px -0px%22></a></td> <td class=%22left%22>Ash spectre</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ash5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -32px 0px 0px -64px%22></a></td> <td class=%22left%22>Young ash spawn</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ash6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -32px 0px 0px -64px%22></a></td> <td class=%22left%22>Ash spawn</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ash7%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -32px 0px 0px -96px%22></a></td> <td class=%22left%22>Tough ash spawn</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hadracor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Hadracor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#axe_black2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -64px 0px 0px -320px"></a>
          </td>
          <td class="left name drop">
              Reinforced black axe
          </td>
          <td>6</td>
          <td>12</td>
          <td>
              3-6
          </td>
          <td>6</td>
          <td>1.5</td>
          <td>-5</td>
          <td></td>
          <td class="left category">
              Axe
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="axe_fear" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#cryptmist1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -224px 0px 0px -64px%22></a></td> <td class=%22left%22>Thin mist of the crypt</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#cryptmist2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -224px 0px 0px -64px%22></a></td> <td class=%22left%22>Clear mist of the crypt</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#cryptmist3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -224px 0px 0px -64px%22></a></td> <td class=%22left%22>Mist of the crypt</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#cryptmist4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -224px 0px 0px -64px%22></a></td> <td class=%22left%22>Thick mist of the crypt</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#cryptmist5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Bright mist of the crypt</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lleglaris%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -64px 0px 0px -32px%22></a></td> <td class=%22left%22>Lleglaris</td> <td>1-5</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#axe_fear" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_reterski_1.png" alt="items_reterski_1.png" style="margin: -160px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Axe of fear
          </td>
          <td>6</td>
          <td>7</td>
          <td>
              1-2
          </td>
          <td>10</td>
          <td>2</td>
          <td>-5</td>
          <td></td>
          <td class="left category">
              Axe
          </td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Fear (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fear">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -64px">
  </a>

          
          
          </td>
      </tr>
      <tr id="axe_fine_iron" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arnal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -32px 0px 0px -256px%22></a></td> <td class=%22left%22>Arnal</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_smith%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard smith</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#axe_fine_iron" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -128px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Fine iron axe
          </td>
          <td>6</td>
          <td>9</td>
          <td>
              4-6
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Axe
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="axe_lightblack" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lleglaris%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -64px 0px 0px -32px%22></a></td> <td class=%22left%22>Lleglaris</td> <td>1-5</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#axe_lightblack" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -64px 0px 0px -320px"></a>
          </td>
          <td class="left name drop">
              Light black axe
          </td>
          <td>5</td>
          <td>23</td>
          <td>
              4-5
          </td>
          <td>10</td>
          <td>2</td>
          <td>-4</td>
          <td></td>
          <td class="left category">
              Axe
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="axe_whirl" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lleglaris%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -64px 0px 0px -32px%22></a></td> <td class=%22left%22>Lleglaris</td> <td>1-5</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#axe_whirl" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -128px 0px 0px -160px"></a>
          </td>
          <td class="left name drop">
              Axe of whirlwind
          </td>
          <td>6</td>
          <td>16</td>
          <td>
              2-4
          </td>
          <td>10</td>
          <td>2</td>
          <td>-5</td>
          <td></td>
          <td class="left category">
              Axe
          </td>
          <td class="cond">
            <a title="On hit
  On source
    5% chance of Minor speed (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#speed_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -96px">
  </a>

          
          
          </td>
      </tr>
      <tr id="hatchet_sharp" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lleglaris%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -64px 0px 0px -32px%22></a></td> <td class=%22left%22>Lleglaris</td> <td>1-5</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hatchet_sharp" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -64px 0px 0px -256px"></a>
          </td>
          <td class="left name drop">
              Sharpened hatchet
          </td>
          <td>6</td>
          <td>10</td>
          <td>
              3-5
          </td>
          <td>7</td>
          <td>1.5</td>
          <td>-5</td>
          <td></td>
          <td class="left category">
              Axe
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="woodcutter_hatchet" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hadracor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Hadracor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#woodcutter_hatchet" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -128px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Woodcutter's hatchet
          </td>
          <td>6</td>
          <td>9</td>
          <td>
              6-12
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Axe
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="axe_gutsplitter" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hadracor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Hadracor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#axe_gutsplitter" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -128px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Gutsplitter
          </td>
          <td>6</td>
          <td>21</td>
          <td>
              7-17
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Greataxe
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="graxe_black" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hadracor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Hadracor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#graxe_black" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -64px 0px 0px -352px"></a>
          </td>
          <td class="left name drop">
              Black greataxe
          </td>
          <td>8</td>
          <td>10</td>
          <td>
              2-4
          </td>
          <td></td>
          <td></td>
          <td>8</td>
          <td></td>
          <td class="left category">
              Greataxe
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="graxe_exec" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lleglaris%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -64px 0px 0px -32px%22></a></td> <td class=%22left%22>Lleglaris</td> <td>1-5</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#graxe_exec" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -128px 0px 0px -416px"></a>
          </td>
          <td class="left name drop">
              Executioner's greataxe
          </td>
          <td>8</td>
          <td>24</td>
          <td>
              4-5
          </td>
          <td></td>
          <td></td>
          <td>9</td>
          <td></td>
          <td class="left category">
              Greataxe
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="graxe_fury" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#agthor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Agthor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#graxe_fury" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -128px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Greataxe of fury
          </td>
          <td>8</td>
          <td>12</td>
          <td>
              3-4
          </td>
          <td></td>
          <td></td>
          <td>-3</td>
          <td></td>
          <td class="left category">
              Greataxe
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="graxe_massive" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#agthor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Agthor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#graxe_massive" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png" alt="items_misc_5.png" style="margin: -128px 0px 0px -160px"></a>
          </td>
          <td class="left name drop">
              Massive greataxe
          </td>
          <td>10</td>
          <td>25</td>
          <td>
              6-13
          </td>
          <td></td>
          <td></td>
          <td>-6</td>
          <td></td>
          <td class="left category">
              Greataxe
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="graxe_shatter" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#lbridge%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -96px 0px 0px -160px%22></a></td> <td class=%22left%22>Guardian of the Bridge</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#graxe_shatter" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Greataxe of shattered hope
          </td>
          <td>6</td>
          <td>32</td>
          <td>
              5-8
          </td>
          <td>10</td>
          <td>2</td>
          <td>-5</td>
          <td></td>
          <td class="left category">
              Greataxe
          </td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Minor fatigue (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fatigue_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -0px">
  </a>

          
          
          </td>
      </tr>
      <tr id="shadow_slayer" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#kazaul_guardian%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -64px 0px 0px -64px%22></a></td> <td class=%22left%22>Kazaul guardian</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#shadow_slayer" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -128px 0px 0px -128px"></a>
          </td>
          <td class="left name drop">
              Shadow of the slayer
          </td>
          <td>7</td>
          <td>25</td>
          <td>
              5-9
          </td>
          <td>10</td>
          <td>2</td>
          <td></td>
          <td>2</td>
          <td class="left category">
              Greataxe
          </td>
          <td class="cond">
          
          
          <span class="help" title="On kill
  On source
    +1 HP">+HP</span>

          </td>
      </tr>
      <tr id="broadsword1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#broadsword1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -160px"></a>
          </td>
          <td class="left name drop">
              Iron broadsword
          </td>
          <td>7</td>
          <td>2</td>
          <td>
              1-10
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Broadsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="broadsword2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#siola%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -320px%22></a></td> <td class=%22left%22>Siola</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_smith%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard smith</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#broadsword2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -192px"></a>
          </td>
          <td class="left name drop">
              Steel broadsword
          </td>
          <td>6</td>
          <td>15</td>
          <td>
              3-10
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Broadsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="broadsword_fine_iron" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#siola%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -320px%22></a></td> <td class=%22left%22>Siola</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_smith%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard smith</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#broadsword_fine_iron" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -160px"></a>
          </td>
          <td class="left name drop">
              Fine iron broadsword
          </td>
          <td>7</td>
          <td>5</td>
          <td>
              4-10
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Broadsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="broadsword_fine_steel" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#siola%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -320px%22></a></td> <td class=%22left%22>Siola</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#broadsword_fine_steel" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -192px"></a>
          </td>
          <td class="left name drop">
              Fine steel broadsword
          </td>
          <td>6</td>
          <td>20</td>
          <td>
              4-11
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Broadsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="club1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#larcal%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Larcal</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#club1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -96px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Wooden club
          </td>
          <td>5</td>
          <td>10</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Club
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="club_bld" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#agthor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Agthor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#club_bld" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_reterski_1.png" alt="items_reterski_1.png" style="margin: -192px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Spiked club of bleeding
          </td>
          <td>5</td>
          <td>5</td>
          <td>
              3-5
          </td>
          <td></td>
          <td></td>
          <td>-2</td>
          <td></td>
          <td class="left category">
              Club
          </td>
          <td class="cond">
            <a title="On hit
  On target
    15% chance of Bleeding wound (2 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#bleeding_wound">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -0px">
  </a>

          
          
          </td>
      </tr>
      <tr id="club_fine_wooden" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#rivertroll%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -128px%22></a></td> <td class=%22left%22>River troll</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_smith%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard smith</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#club_fine_wooden" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -96px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Fine wooden club
          </td>
          <td>5</td>
          <td>12</td>
          <td>
              0-7
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Club
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="bjorgur_dagger" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#graverobber%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png%22 alt=%22monsters_karvis2.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Graverobber</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bjorgur_grave%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>Awoken from slumber</td> <td></td> <td></td> </tr>">
          <td class="icon">
              <span class="hidden">1</span>
              <a title="quest" href="#bjorgur_dagger" class="at-icon quest"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Bjorgur's family dagger
          </td>
          <td>5</td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="blade_defiler" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#thukuzun%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -192px 0px 0px -96px%22></a></td> <td class=%22left%22>Thukuzun</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#blade_defiler" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -192px"></a>
          </td>
          <td class="left name drop">
              Blade of the defiler
          </td>
          <td>4</td>
          <td>5</td>
          <td>
              2-4
          </td>
          <td>9</td>
          <td>2</td>
          <td>-8</td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
          
          
          <span class="help" title="On kill
  On source
    +(0–2) HP">+HP</span>

          </td>
      </tr>
      <tr id="bwm_dagger" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#aulaeth%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -576px%22></a></td> <td class=%22left%22>Aulaeth</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#strong_aulaeth%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -576px%22></a></td> <td class=%22left%22>Strong aulaeth</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#young_aulaeth%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -256px 0px 0px -512px%22></a></td> <td class=%22left%22>Young aulaeth</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#waeges%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -256px%22></a></td> <td class=%22left%22>Waeges</td> <td>2</td> <td>sell</td> </tr> <tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#prim_hunt%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>Clouded intent</td> <td></td> <td></td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#bwm_dagger" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -160px"></a>
          </td>
          <td class="left name drop">
              Blackwater dagger
          </td>
          <td>3</td>
          <td>40</td>
          <td>
              1
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
            <a title="On equip
  On source
    Blackwater misery" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blackwater_misery">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          
          </td>
      </tr>
      <tr id="bwm_dagger_venom" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#waeges%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -256px%22></a></td> <td class=%22left%22>Waeges</td> <td>2</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#bwm_dagger_venom" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -160px"></a>
          </td>
          <td class="left name drop">
              Blackwater poisoned dagger
          </td>
          <td>3</td>
          <td>45</td>
          <td>
              1
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
            <a title="On equip
  On source
    Blackwater misery" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blackwater_misery">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>
  <a title="On hit
  On target
    50% chance of Weak Poison (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#poison_weak">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -128px">
  </a>

          
          
          </td>
      </tr>
      <tr id="dagger0" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_4b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -416px%22></a></td> <td class=%22left%22>Iqhan master</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_1a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -480px%22></a></td> <td class=%22left%22>Iqhan chaos evoker</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_1b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -480px%22></a></td> <td class=%22left%22>Iqhan chaos evoker</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_2a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -448px%22></a></td> <td class=%22left%22>Iqhan chaos servant</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_2b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -448px%22></a></td> <td class=%22left%22>Iqhan chaos servant</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_1a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -512px%22></a></td> <td class=%22left%22>Iqhan worker thrall</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_1b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -512px%22></a></td> <td class=%22left%22>Iqhan thrall servant</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_2a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -544px%22></a></td> <td class=%22left%22>Iqhan guard thrall</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_2b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -544px%22></a></td> <td class=%22left%22>Iqhan thrall</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_3a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -256px%22></a></td> <td class=%22left%22>Iqhan warrior thrall</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_3b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -288px%22></a></td> <td class=%22left%22>Iqhan master</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_4a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -288px%22></a></td> <td class=%22left%22>Iqhan master</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_3a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -512px%22></a></td> <td class=%22left%22>Iqhan chaos master</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_3b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -544px%22></a></td> <td class=%22left%22>Iqhan chaos master</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ganos%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ganos</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#gruil%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Gruil</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#dagger0" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Iron dagger
          </td>
          <td>5</td>
          <td>10</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="dagger1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#dunla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Dunla</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ganos%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ganos</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#dagger1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Sharp iron dagger
          </td>
          <td>4</td>
          <td>20</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="dagger2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ailshara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Ailshara</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#dagger2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Superior iron dagger
          </td>
          <td>4</td>
          <td>25</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="dagger_barbed" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#guthbered%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -384px%22></a></td> <td class=%22left%22>Guthbered</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#dagger_barbed" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Barbed dagger
          </td>
          <td>4</td>
          <td>15</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Bleeding wound (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#bleeding_wound">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_2.png" alt="actorconditions_2.png" style="margin: -0px 0px 0px -0px">
  </a>

          
          
          </td>
      </tr>
      <tr id="dagger_shadow_priests" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_boss%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -0px 0px 0px -160px%22></a></td> <td class=%22left%22>Iqhan chaos enslaver</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#dagger_shadow_priests" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Dagger of the Shadow priests
          </td>
          <td>4</td>
          <td>20</td>
          <td>
              1-2
          </td>
          <td>20</td>
          <td>3</td>
          <td></td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="dagger_sharp_steel" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ailshara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Ailshara</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arnal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -32px 0px 0px -256px%22></a></td> <td class=%22left%22>Arnal</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ganos%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ganos</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#dagger_sharp_steel" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Sharp steel dagger
          </td>
          <td>4</td>
          <td>24</td>
          <td>
              2-4
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="dagger_venom" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#snake_master%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td> <td class=%22left%22>Snake master</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#dagger_venom" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Venomous Dagger
          </td>
          <td>4</td>
          <td>10</td>
          <td>
              1-2
          </td>
          <td>5</td>
          <td>2</td>
          <td></td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="daggr_bloodlet" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly6%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Emerald Ooze</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#dunla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Dunla</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#daggr_bloodlet" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -96px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Bloodletter
          </td>
          <td>4</td>
          <td>8</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td>-7</td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="daggr_curv" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#dunla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Dunla</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#daggr_curv" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -64px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Curved dagger
          </td>
          <td>4</td>
          <td>17</td>
          <td>
              2-3
          </td>
          <td>8</td>
          <td>2</td>
          <td>-7</td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="quickdagger1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ailshara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Ailshara</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#quickdagger1" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Quickstrike dagger
          </td>
          <td>3</td>
          <td>20</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td>-20</td>
          <td></td>
          <td class="left category">
              Dagger
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hammer0" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#strong_minotaur%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -160px%22></a></td> <td class=%22left%22>Strong minotaur</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#young_minotaur%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -160px%22></a></td> <td class=%22left%22>Young minotaur</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hammer0" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -96px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Iron hammer
          </td>
          <td>5</td>
          <td>10</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Warhammer
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hmr_iron" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#agthor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Agthor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hmr_iron" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -32px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Iron warhammer
          </td>
          <td>8</td>
          <td>23</td>
          <td>
              6-8
          </td>
          <td>5</td>
          <td>3</td>
          <td>-17</td>
          <td></td>
          <td class="left category">
              Warhammer
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hmr_olwyns" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#tiqui%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -448px 0px 0px -96px%22></a></td> <td class=%22left%22>Tiqui</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#hmr_olwyns" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png" alt="items_misc_5.png" style="margin: -128px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Olwyn's curse
          </td>
          <td>8</td>
          <td>14</td>
          <td>
              10-17
          </td>
          <td></td>
          <td></td>
          <td>-7</td>
          <td></td>
          <td class="left category">
              Warhammer
          </td>
          <td class="cond">
            <a title="On equip
  On source
    Minor weapon feebleness" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#feebleness_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -160px 0px 0px -128px">
  </a>

          
          
          </td>
      </tr>
      <tr id="hammer1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_smith%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard smith</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hammer1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -96px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Giant hammer
          </td>
          <td>10</td>
          <td>5</td>
          <td>
              4-7
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Giant hammer
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hammer_skullcrusher" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hadracor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Hadracor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hammer_skullcrusher" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -96px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Skullcrusher
          </td>
          <td>7</td>
          <td>20</td>
          <td>
              0-26
          </td>
          <td>5</td>
          <td>3</td>
          <td></td>
          <td></td>
          <td class="left category">
              Giant hammer
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="bwm_ironsword" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#aulaeth%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -576px%22></a></td> <td class=%22left%22>Aulaeth</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#strong_aulaeth%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -576px%22></a></td> <td class=%22left%22>Strong aulaeth</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#young_aulaeth%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -256px 0px 0px -512px%22></a></td> <td class=%22left%22>Young aulaeth</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#waeges%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -256px%22></a></td> <td class=%22left%22>Waeges</td> <td>2</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#bwm_ironsword" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Blackwater iron sword
          </td>
          <td>4</td>
          <td>50</td>
          <td>
              3-7
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
            <a title="On equip
  On source
    Blackwater misery" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blackwater_misery">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          
          </td>
      </tr>
      <tr id="fg_ironsword" data-drop="<tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#feygard_shipment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>Feygard errands</td> <td></td> <td></td> </tr> <tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#vilegard%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>Trusting an outsider</td> <td></td> <td></td> </tr>">
          <td class="icon">
              <span class="hidden">1</span>
              <a title="quest" href="#fg_ironsword" class="at-icon quest"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Feygard iron sword
          </td>
          <td>5</td>
          <td>10</td>
          <td>
              1-5
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="fg_ironsword_d" data-drop="<tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#feygard_shipment%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>Feygard errands</td> <td></td> <td></td> </tr>">
          <td class="icon">
              <span class="hidden">1</span>
              <a title="quest" href="#fg_ironsword_d" class="at-icon quest"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Degraded Feygard iron sword
          </td>
          <td>5</td>
          <td>-50</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ironsword0" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ironsword0" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Crude iron sword
          </td>
          <td>5</td>
          <td>10</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ironsword1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#feygard_patrol_watch%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png%22 alt=%22monsters_rltiles3.png%22 style=%22margin: -32px 0px 0px -128px%22></a></td> <td class=%22left%22>Feygard patrol watch</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#cave_guardian%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -0px 0px 0px -512px%22></a></td> <td class=%22left%22>Cave guardian</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#prim_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -256px%22></a></td> <td class=%22left%22>Prim armorer</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#fledgling_gargoyle%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td> <td class=%22left%22>Fledgling Gargoyle</td> <td>1</td> <td>10%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#gargoyle%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Gargoyle</td> <td>1</td> <td>10%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#rotting_corpse%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie1.png%22 alt=%22monsters_zombie1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Rotting corpse</td> <td>1</td> <td>10%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#walking_corpse%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie1.png%22 alt=%22monsters_zombie1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Walking corpse</td> <td>1</td> <td>10%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zombie1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik8.png%22 alt=%22monsters_tometik8.png%22 style=%22margin: -96px 0px 0px -128px%22></a></td> <td class=%22left%22>Rancid zombie</td> <td>1</td> <td>10%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zombie2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik8.png%22 alt=%22monsters_tometik8.png%22 style=%22margin: -96px 0px 0px -128px%22></a></td> <td class=%22left%22>Rotting zombie</td> <td>1</td> <td>10%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zombie3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik8.png%22 alt=%22monsters_tometik8.png%22 style=%22margin: -96px 0px 0px -192px%22></a></td> <td class=%22left%22>Blighted zombie</td> <td>1</td> <td>10%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zombie5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie2.png%22 alt=%22monsters_zombie2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Corrupted zombie</td> <td>1</td> <td>10%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zombie6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie2.png%22 alt=%22monsters_zombie2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Bloodthirsty zombie</td> <td>1</td> <td>10%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zombie7%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_zombie2.png%22 alt=%22monsters_zombie2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tainted zombie</td> <td>1</td> <td>10%</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ironsword1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Iron sword
          </td>
          <td>5</td>
          <td>10</td>
          <td>
              1-3
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ironsword2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ironsword2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Iron longsword
          </td>
          <td>5</td>
          <td>10</td>
          <td>
              1-4
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="longsword_hard_iron" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#rogorn%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -96px 0px 0px -96px%22></a></td> <td class=%22left%22>Rogorn</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arnal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -32px 0px 0px -256px%22></a></td> <td class=%22left%22>Arnal</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_smith%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard smith</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#longsword_hard_iron" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Hardened iron longsword
          </td>
          <td>5</td>
          <td>14</td>
          <td>
              2-6
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="rusted_iron_sword" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#prim_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -256px%22></a></td> <td class=%22left%22>Prim armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#rusted_iron_sword" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Rusted iron sword
          </td>
          <td>5</td>
          <td>10</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="steelsword1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#steelsword1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Steel sword
          </td>
          <td>4</td>
          <td>24</td>
          <td>
              3-7
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="sword_balanced_steel" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#sword_balanced_steel" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Balanced steel sword
          </td>
          <td>4</td>
          <td>32</td>
          <td>
              3-7
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="sword_challengers" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#sword_challengers" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Challenger's iron sword
          </td>
          <td>5</td>
          <td>20</td>
          <td>
              2-6
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="sword_defenders" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#sword_defenders" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Defender's blade
          </td>
          <td>5</td>
          <td>26</td>
          <td>
              3-7
          </td>
          <td></td>
          <td></td>
          <td>3</td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="sword_flagstone" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#winged_demon%22 class=%22at-icon size2x2 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_demon1.png%22 alt=%22monsters_demon1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Winged demon</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#sword_flagstone" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Flagstone's pride
          </td>
          <td>4</td>
          <td>21</td>
          <td>
              1-6
          </td>
          <td>10</td>
          <td>2</td>
          <td></td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="sword_hard_iron" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arnal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -32px 0px 0px -256px%22></a></td> <td class=%22left%22>Arnal</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_smith%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard smith</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#sword_hard_iron" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Hardened iron sword
          </td>
          <td>5</td>
          <td>15</td>
          <td>
              2-4
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Longsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="club3" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ulirfendor%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -128px%22></a></td> <td class=%22left%22>Ulirfendor</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#club3" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -96px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Iron club
          </td>
          <td>6</td>
          <td>5</td>
          <td>
              2-7
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Mace
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="club_brutal" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#siola%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -320px%22></a></td> <td class=%22left%22>Siola</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#club_brutal" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -96px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Brutal club
          </td>
          <td>7</td>
          <td>20</td>
          <td>
              2-21
          </td>
          <td>5</td>
          <td>3</td>
          <td></td>
          <td></td>
          <td class="left category">
              Mace
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="club_wood1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#siola%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -320px%22></a></td> <td class=%22left%22>Siola</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#club_wood1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -96px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Heavy iron club
          </td>
          <td>8</td>
          <td>15</td>
          <td>
              2-11
          </td>
          <td>5</td>
          <td>3</td>
          <td></td>
          <td></td>
          <td class="left category">
              Mace
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="club_wood2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#siola%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -320px%22></a></td> <td class=%22left%22>Siola</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#club_wood2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -96px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Balanced heavy iron club
          </td>
          <td>7</td>
          <td>10</td>
          <td>
              2-11
          </td>
          <td>10</td>
          <td>3</td>
          <td></td>
          <td></td>
          <td class="left category">
              Mace
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="heavy_club" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#siola%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -320px%22></a></td> <td class=%22left%22>Siola</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#heavy_club" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -96px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Heavy club
          </td>
          <td>7</td>
          <td>15</td>
          <td>
              2-15
          </td>
          <td>5</td>
          <td>3</td>
          <td></td>
          <td></td>
          <td class="left category">
              Mace
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="mace_iron" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -160px%22></a></td> <td class=%22left%22>Puny Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -160px%22></a></td> <td class=%22left%22>Charwood goblin scout</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -192px%22></a></td> <td class=%22left%22>Starving Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -192px%22></a></td> <td class=%22left%22>Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -288px%22></a></td> <td class=%22left%22>Charwood goblin fighter</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -288px%22></a></td> <td class=%22left%22>Tough Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg7%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -352px%22></a></td> <td class=%22left%22>Aggressive Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg8%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -352px%22></a></td> <td class=%22left%22>Strong Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdgg%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -320px%22></a></td> <td class=%22left%22>Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#lodar_fg3%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png%22 alt=%22monsters_rltiles3.png%22 style=%22margin: -32px 0px 0px -128px%22></a></td> <td class=%22left%22>Afflicted Feygard guard</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#lodar_fg4%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png%22 alt=%22monsters_rltiles3.png%22 style=%22margin: -32px 0px 0px -128px%22></a></td> <td class=%22left%22>Insane Feygard guard</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mazarth1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -32px 0px 0px -512px%22></a></td> <td class=%22left%22>Mazarth beast</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mazarth2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -32px 0px 0px -544px%22></a></td> <td class=%22left%22>Tough Mazarth beast</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#agthor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Agthor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#mace_iron" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -32px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Iron mace
          </td>
          <td>6</td>
          <td>12</td>
          <td>
              4-5
          </td>
          <td></td>
          <td></td>
          <td>2</td>
          <td></td>
          <td class="left category">
              Mace
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="clouded_rage" data-drop="<tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#bwm_agent%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>The agent and the beast</td> <td></td> <td></td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#clouded_rage" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -160px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Sword of Shadow's rage
          </td>
          <td>5</td>
          <td>21</td>
          <td>
              3-6
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td></td>
          <td class="left category">
              Rapier
          </td>
          <td class="cond">
            <a title="On kill
  On source
    50% chance of Minor berserker rage (1 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#rage_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -192px">
  </a>

          
          
          </td>
      </tr>
      <tr id="rapier_lifesteal" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#kazaul_imp%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -64px 0px 0px -160px%22></a></td> <td class=%22left%22>Kazaul imp</td> <td>1</td> <td>0.01%</td> </tr>">
          <td class="icon">
              <span class="hidden">4</span>
              <a title="legendary" href="#rapier_lifesteal" class="at-icon legendary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -160px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Rapier of lifesteal
          </td>
          <td>5</td>
          <td>21</td>
          <td>
              1-6
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Rapier
          </td>
          <td class="cond">
          
          <span class="help" title="On hit
  On source
    +(0–3) HP">+HP</span>

          <span class="help" title="On kill
  On source
    +3 HP">+HP</span>

          </td>
      </tr>
      <tr id="sword_fencing" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_smith%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard smith</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#sword_fencing" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -0px 0px 0px -416px"></a>
          </td>
          <td class="left name drop">
              Fencing blade
          </td>
          <td>4</td>
          <td>14</td>
          <td>
              2-5
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td></td>
          <td class="left category">
              Rapier
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="chaosreaper" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_chb_1a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -0px 0px 0px -608px%22></a></td> <td class=%22left%22>Iqhan chaos beast</td> <td>1</td> <td>0.1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_chb_1b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -0px 0px 0px -608px%22></a></td> <td class=%22left%22>Iqhan chaos beast</td> <td>1</td> <td>0.1%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#chaosreaper" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -96px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Chaosreaper
          </td>
          <td>4</td>
          <td>-30</td>
          <td>
              0-2
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Scepter
          </td>
          <td class="cond">
            <a title="On hit
  On target
    50% chance of Chaotic grip 5x (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#chaotic_grip">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -192px 0px 0px -384px">
  </a>

          
          
          </td>
      </tr>
      <tr id="scptr_runed" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#hirathil0%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -0px%22></a></td> <td class=%22left%22>Hirathil spawn</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#hirathil1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -0px%22></a></td> <td class=%22left%22>Aggressive Hirathil ghost</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#hirathil2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -32px%22></a></td> <td class=%22left%22>Hirathil ghost</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#hirathil3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -32px%22></a></td> <td class=%22left%22>Ferocious Hirathil ghost</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#hirathil4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -64px%22></a></td> <td class=%22left%22>Restless Hirathil ghost</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#hirathil5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -64px%22></a></td> <td class=%22left%22>Hirathil Servant</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#hirathil6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -96px%22></a></td> <td class=%22left%22>Hirathil Master</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#hirathil7%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -96px%22></a></td> <td class=%22left%22>Ancient Hirathil ghost</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#siola%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -320px%22></a></td> <td class=%22left%22>Siola</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#scptr_runed" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -96px 0px 0px -352px"></a>
          </td>
          <td class="left name drop">
              Runed scepter
          </td>
          <td>7</td>
          <td>21</td>
          <td>
              6-7
          </td>
          <td>5</td>
          <td>1.5</td>
          <td></td>
          <td></td>
          <td class="left category">
              Scepter
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="shadowfang" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#izthiel_4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -384px%22></a></td> <td class=%22left%22>Izthiel Guardian</td> <td>1</td> <td>0.1%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#shadowfang" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -96px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Shadowfang
          </td>
          <td>4</td>
          <td>40</td>
          <td>
              2-5
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Shortsword
          </td>
          <td class="cond">
            <a title="On hit
  On source
    20% chance of Minor fatigue (3 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fatigue_minor">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -32px 0px 0px -0px">
  </a>

          
          
          </td>
      </tr>
      <tr id="shortsword1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shortsword1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Iron shortsword
          </td>
          <td>4</td>
          <td>15</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Shortsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="sword_villains" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#dunla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Dunla</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#sword_villains" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons.png" alt="items_weapons.png" style="margin: -32px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Villain's blade
          </td>
          <td>4</td>
          <td>20</td>
          <td>
              1-2
          </td>
          <td>5</td>
          <td>3</td>
          <td></td>
          <td></td>
          <td class="left category">
              Shortsword
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="qtrstaff" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#qtrstaff" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_weapons_3.png" alt="items_weapons_3.png" style="margin: -32px 0px 0px -160px"></a>
          </td>
          <td class="left name drop">
              Quarterstaff
          </td>
          <td>5</td>
          <td>6</td>
          <td>
              2-3
          </td>
          <td></td>
          <td></td>
          <td>-1</td>
          <td></td>
          <td class="left category">
              Quarterstaff
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
    </tbody>
    </table>
     <h2>Shield</h2>
     <table id="shields" width="50%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>BC%</th> <th>Dmg Resistance</th> <th>AC%</th> <th>Crit</th> <th>Category</th></tr>
      </thead>
      <tbody>
      <tr id="broken_buckler" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -160px%22></a></td> <td class=%22left%22>Puny Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -160px%22></a></td> <td class=%22left%22>Charwood goblin scout</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -192px%22></a></td> <td class=%22left%22>Starving Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -192px%22></a></td> <td class=%22left%22>Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -288px%22></a></td> <td class=%22left%22>Charwood goblin fighter</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -288px%22></a></td> <td class=%22left%22>Tough Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg7%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -352px%22></a></td> <td class=%22left%22>Aggressive Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdg8%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -352px%22></a></td> <td class=%22left%22>Strong Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#charwdgg%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles4.png%22 alt=%22monsters_rltiles4.png%22 style=%22margin: -32px 0px 0px -320px%22></a></td> <td class=%22left%22>Charwood goblin</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#lodar_fg3%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png%22 alt=%22monsters_rltiles3.png%22 style=%22margin: -32px 0px 0px -128px%22></a></td> <td class=%22left%22>Afflicted Feygard guard</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#lodar_fg4%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png%22 alt=%22monsters_rltiles3.png%22 style=%22margin: -32px 0px 0px -128px%22></a></td> <td class=%22left%22>Insane Feygard guard</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#prim_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -256px%22></a></td> <td class=%22left%22>Prim armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#broken_buckler" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Broken wooden buckler
          </td>
          <td>1</td>
          <td></td>
          <td>-5</td>
          <td></td>
          <td class="left category">
              Buckler
          </td>
      </tr>
      <tr id="shield1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#feygard_patrol_watch%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles3.png%22 alt=%22monsters_rltiles3.png%22 style=%22margin: -32px 0px 0px -128px%22></a></td> <td class=%22left%22>Feygard patrol watch</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_4b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -416px%22></a></td> <td class=%22left%22>Iqhan master</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_1a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -480px%22></a></td> <td class=%22left%22>Iqhan chaos evoker</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_1b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -480px%22></a></td> <td class=%22left%22>Iqhan chaos evoker</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_2a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -448px%22></a></td> <td class=%22left%22>Iqhan chaos servant</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_2b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -448px%22></a></td> <td class=%22left%22>Iqhan chaos servant</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shield1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Wooden buckler
          </td>
          <td>5</td>
          <td></td>
          <td>-2</td>
          <td></td>
          <td class="left category">
              Buckler
          </td>
      </tr>
      <tr id="shield3" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shield3" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Reinforced wooden buckler
          </td>
          <td>7</td>
          <td></td>
          <td>-5</td>
          <td></td>
          <td class="left category">
              Buckler
          </td>
      </tr>
      <tr id="shield_cracked_wooden" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shield_cracked_wooden" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Cracked wooden buckler
          </td>
          <td>2</td>
          <td></td>
          <td>-2</td>
          <td></td>
          <td class="left category">
              Buckler
          </td>
      </tr>
      <tr id="shield_crude_wooden" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shield_crude_wooden" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Crude wooden buckler
          </td>
          <td>1</td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Buckler
          </td>
      </tr>
      <tr id="shield_wooden_buckler" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shield_wooden_buckler" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Second-hand wooden buckler
          </td>
          <td>3</td>
          <td></td>
          <td>-2</td>
          <td></td>
          <td class="left category">
              Buckler
          </td>
      </tr>
      <tr id="remgard_shield_1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#rothses%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Rothses</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#remgard_shield_1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -64px 0px 0px -128px"></a>
          </td>
          <td class="left name drop">
              Remgard shield
          </td>
          <td>9</td>
          <td>1</td>
          <td>-3</td>
          <td></td>
          <td class="left category">
              Shield, metal (light)
          </td>
      </tr>
      <tr id="remgard_shield_2" data-drop="">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#remgard_shield_2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -64px 0px 0px -128px"></a>
          </td>
          <td class="left name">
              Remgard combat shield
          </td>
          <td>11</td>
          <td>1</td>
          <td>-3</td>
          <td></td>
          <td class="left category">
              Shield, metal (light)
          </td>
      </tr>
      <tr id="shield6" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#siola%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -320px%22></a></td> <td class=%22left%22>Siola</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shield6" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -0px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Wooden tower shield
          </td>
          <td>12</td>
          <td></td>
          <td>-6</td>
          <td></td>
          <td class="left category">
              Tower shield
          </td>
      </tr>
      <tr id="shield7" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#siola%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -320px%22></a></td> <td class=%22left%22>Siola</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shield7" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -0px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Strong wooden tower shield
          </td>
          <td>14</td>
          <td></td>
          <td>-6</td>
          <td></td>
          <td class="left category">
              Tower shield
          </td>
      </tr>
      <tr id="shield4" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shield4" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Crude wooden shield
          </td>
          <td>8</td>
          <td></td>
          <td>-5</td>
          <td></td>
          <td class="left category">
              Shield, wood (light)
          </td>
      </tr>
      <tr id="shield5" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shield5" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Superior wooden shield
          </td>
          <td>9</td>
          <td></td>
          <td>-4</td>
          <td></td>
          <td class="left category">
              Shield, wood (light)
          </td>
      </tr>
      <tr id="shield_wooden" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shield_wooden" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Wooden shield
          </td>
          <td>8</td>
          <td></td>
          <td>-4</td>
          <td></td>
          <td class="left category">
              Shield, wood (light)
          </td>
      </tr>
      <tr id="shield_wooden_defender" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shield_wooden_defender" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Wooden defender
          </td>
          <td>14</td>
          <td>1</td>
          <td>-8</td>
          <td>-5</td>
          <td class="left category">
              Shield, wood (light)
          </td>
      </tr>
    </tbody>
    </table>
     <h2>Armor</h2>
     <table id="armors" width="80%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>BC%</th> <th>Dmg Resistance</th> <th>AC%</th> <th>Dmg</th> <th>HP</th> <th>Crit</th> <th>Attack cost</th> <th>Move cost</th> <th>Category</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="shirt1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arambold%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Arambold</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shirt1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Cloth shirt
          </td>
          <td>2</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="shirt2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#dunla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Dunla</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ervelyn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -256px%22></a></td> <td class=%22left%22>Ervelyn</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shirt2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Fine shirt
          </td>
          <td>5</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="shirt_patched_cloth" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ervelyn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -256px%22></a></td> <td class=%22left%22>Ervelyn</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ganos%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ganos</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shirt_patched_cloth" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Patched cloth shirt
          </td>
          <td>4</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="shirt_torn" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#highwayman1%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Highwayman</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_1a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -512px%22></a></td> <td class=%22left%22>Iqhan worker thrall</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_1b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -512px%22></a></td> <td class=%22left%22>Iqhan thrall servant</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_2a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -544px%22></a></td> <td class=%22left%22>Iqhan guard thrall</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_2b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -544px%22></a></td> <td class=%22left%22>Iqhan thrall</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_3a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -256px%22></a></td> <td class=%22left%22>Iqhan warrior thrall</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_3b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -288px%22></a></td> <td class=%22left%22>Iqhan master</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_4a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -288px%22></a></td> <td class=%22left%22>Iqhan master</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arambold%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Arambold</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shirt_torn" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Torn shirt
          </td>
          <td>3</td>
          <td></td>
          <td>-2</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="shirt_weathered" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#kaverin%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -160px 0px 0px -0px%22></a></td> <td class=%22left%22>Kaverin</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ervelyn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -256px%22></a></td> <td class=%22left%22>Ervelyn</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ganos%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ganos</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#gruil%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Gruil</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#shirt_weathered" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Weathered shirt
          </td>
          <td>3</td>
          <td></td>
          <td>-1</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="valugha_gown" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#plaguesp_13%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -576px%22></a></td> <td class=%22left%22>Plaguestrider master</td> <td>1</td> <td>0.1%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#valugha_gown" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Silk robe of Valugha
          </td>
          <td>-10</td>
          <td></td>
          <td>30</td>
          <td>
              
          </td>
          <td>5</td>
          <td></td>
          <td></td>
          <td>-1</td>
          <td class="left category">
              Armor, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="packhide" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#pack_leader%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -160px%22></a></td> <td class=%22left%22>Pack Leader</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#packhide" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Wolfpack's animal hide
          </td>
          <td>2</td>
          <td>1</td>
          <td>-15</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Hide armor
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armor_stone" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maelveon%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Maelveon</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#armor_stone" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Stone Cuirass
          </td>
          <td>22</td>
          <td>1</td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td>2</td>
          <td></td>
          <td class="left category">
              Armor (heavy)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hvbdy_rust" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hvbdy_rust" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -32px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Rusty heavy cuirass
          </td>
          <td>17</td>
          <td></td>
          <td>-5</td>
          <td>
              
          </td>
          <td>2</td>
          <td></td>
          <td>1</td>
          <td></td>
          <td class="left category">
              Armor (heavy)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="shdstlk" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#hirazinn%22 class=%22at-icon size2x2 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_demon2.png%22 alt=%22monsters_demon2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Hira'zinn</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#shdstlk" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik2.png" alt="items_tometik2.png" style="margin: -160px 0px 0px -128px"></a>
          </td>
          <td class="left name drop">
              Shadowstalker
          </td>
          <td>21</td>
          <td>1</td>
          <td>-5</td>
          <td>
              1-2
          </td>
          <td>3</td>
          <td></td>
          <td>2</td>
          <td></td>
          <td class="left category">
              Armor (heavy)
          </td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Fear (5 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#fear">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -64px">
  </a>

          
          <span class="help" title="On kill
  On source
    +1 HP">+HP</span>

          </td>
      </tr>
      <tr id="armour_cvest1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ervelyn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -256px%22></a></td> <td class=%22left%22>Ervelyn</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armour_cvest1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -0px 0px 0px -160px"></a>
          </td>
          <td class="left name drop">
              Combat vest
          </td>
          <td>8</td>
          <td></td>
          <td>15</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor (light)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armour_cvest2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ervelyn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -256px%22></a></td> <td class=%22left%22>Ervelyn</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armour_cvest2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -0px 0px 0px -160px"></a>
          </td>
          <td class="left name drop">
              Remgard combat vest
          </td>
          <td>8</td>
          <td></td>
          <td>17</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor (light)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="haub_serp" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortakb%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -160px%22></a></td> <td class=%22left%22>Zortak leader</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#haub_serp" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik2.png" alt="items_tometik2.png" style="margin: -128px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Serpent's hauberk
          </td>
          <td>14</td>
          <td>2</td>
          <td>12</td>
          <td>
              
          </td>
          <td>8</td>
          <td>8</td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor (light)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ltbdy_chmail" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ltbdy_chmail" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik2.png" alt="items_tometik2.png" style="margin: -128px 0px 0px -160px"></a>
          </td>
          <td class="left name drop">
              Lightweight chainmail
          </td>
          <td>13</td>
          <td></td>
          <td>10</td>
          <td>
              1
          </td>
          <td>7</td>
          <td>6</td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor (light)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ltbdy_lthr" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ltbdy_lthr" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_misc_5.png" alt="items_misc_5.png" style="margin: -32px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Sturdy leather cuirass
          </td>
          <td>12</td>
          <td>1</td>
          <td>5</td>
          <td>
              3-5
          </td>
          <td>3</td>
          <td>10</td>
          <td>1</td>
          <td></td>
          <td class="left category">
              Armor (light)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ltbdy_spmail" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#rothses%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Rothses</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ltbdy_spmail" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik2.png" alt="items_tometik2.png" style="margin: -256px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Lightweight splint mail
          </td>
          <td>17</td>
          <td></td>
          <td>11</td>
          <td>
              1
          </td>
          <td>7</td>
          <td>8</td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor (light)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armor1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#troublemaker%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Troublemaker</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armor1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Leather armour
          </td>
          <td>8</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armor2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#dunla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Dunla</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armor2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Superior leather armour
          </td>
          <td>9</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armor3" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ailshara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Ailshara</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armor3" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Hard leather armour
          </td>
          <td>13</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armor4" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#troublemaker%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Troublemaker</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armor4" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Superior hard leather armour
          </td>
          <td>15</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armour_crude_leather" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#alynndir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Alynndir</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hadracor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Hadracor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armour_crude_leather" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Crude leather armour
          </td>
          <td>8</td>
          <td></td>
          <td>-4</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armour_firm_leather" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#dunla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Dunla</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#troublemaker%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Troublemaker</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armour_firm_leather" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Firm leather armour
          </td>
          <td>8</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td>1</td>
          <td class="left category">
              Armor, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armour_leather_villain" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ailshara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Ailshara</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armour_leather_villain" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Villain's leather armour
          </td>
          <td>15</td>
          <td></td>
          <td>-4</td>
          <td>
              
          </td>
          <td></td>
          <td>3</td>
          <td></td>
          <td>-1</td>
          <td class="left category">
              Armor, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armour_misfortune" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ailshara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Ailshara</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armour_misfortune" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Leather shirt of misfortune
          </td>
          <td>15</td>
          <td></td>
          <td>-5</td>
          <td>
              -1
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armour_rigid_leather" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#alynndir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Alynndir</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hadracor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Hadracor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armour_rigid_leather" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Rigid leather armour
          </td>
          <td>9</td>
          <td></td>
          <td>-1</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td>1</td>
          <td class="left category">
              Armor, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="bwm_leather_armour" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#iducus%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -224px%22></a></td> <td class=%22left%22>Iducus</td> <td>2</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#bwm_leather_armour" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Blackwater leather armour
          </td>
          <td>25</td>
          <td>1</td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor, leather
          </td>
          <td class="cond">
            <a title="On equip
  On source
    Blackwater misery" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blackwater_misery">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          
          </td>
      </tr>
      <tr id="shirt_dmgresist" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#dunla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Dunla</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#shirt_dmgresist" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Hardened leather shirt
          </td>
          <td>5</td>
          <td>1</td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Armor, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armor_chain1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armor_chain1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Rusty chain mail
          </td>
          <td>20</td>
          <td></td>
          <td>-9</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Chain mail
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armor_chain2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armor_chain2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Ordinary chain mail
          </td>
          <td>22</td>
          <td></td>
          <td>-10</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Chain mail
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armour_chain_champ" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armour_chain_champ" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Champion's chain mail
          </td>
          <td>24</td>
          <td></td>
          <td>-9</td>
          <td>
              
          </td>
          <td>2</td>
          <td>-5</td>
          <td></td>
          <td></td>
          <td class="left category">
              Chain mail
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armour_chain_remg" data-drop="">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armour_chain_remg" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -32px 0px 0px -96px"></a>
          </td>
          <td class="left name">
              Remgard chain mail
          </td>
          <td>25</td>
          <td></td>
          <td>-7</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Chain mail
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armour_rigid_chain" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armour_rigid_chain" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Rigid chain mail
          </td>
          <td>23</td>
          <td></td>
          <td>-5</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td>1</td>
          <td></td>
          <td class="left category">
              Chain mail
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="armour_superior_chain" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#armour_superior_chain" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Superior chain mail
          </td>
          <td>23</td>
          <td></td>
          <td>-9</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Chain mail
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="chmail2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#chmail2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -0px 0px 0px -288px"></a>
          </td>
          <td class="left name drop">
              Worn chainmail
          </td>
          <td>11</td>
          <td></td>
          <td>-6</td>
          <td>
              -1
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Chain mail
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="spmail2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#rothses%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Rothses</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#spmail2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -32px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Worn splint mail
          </td>
          <td>9</td>
          <td>1</td>
          <td>-4</td>
          <td>
              1-2
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Splint mail
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
    </tbody>
    </table>
     <h2>Helm</h2>
     <table id="helms" width="70%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>BC%</th> <th>Dmg Resistance</th> <th>AC%</th> <th>Dmg</th> <th>HP</th> <th>Crit</th> <th>Move cost</th> <th>Category</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="hat1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arambold%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Arambold</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hat1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Green hat
          </td>
          <td>1</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hat2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arambold%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Arambold</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hat2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Fine green hat
          </td>
          <td>2</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hat_crit" data-drop="<tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#remgard2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>What is that stench?</td> <td></td> <td></td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#hat_crit" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Woodcutter's feathered hat
          </td>
          <td>-5</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td>4</td>
          <td></td>
          <td class="left category">
              Headwear, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="valugha_hat" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#plaguesp_13%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -576px%22></a></td> <td class=%22left%22>Plaguestrider master</td> <td>1</td> <td>0.1%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#valugha_hat" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Valugha's shimmering hat
          </td>
          <td>-5</td>
          <td></td>
          <td>15</td>
          <td>
              -2
          </td>
          <td>3</td>
          <td></td>
          <td>-1</td>
          <td class="left category">
              Headwear, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="bwm_leather_cap" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#iducus%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -224px%22></a></td> <td class=%22left%22>Iducus</td> <td>2</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#bwm_leather_cap" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -320px"></a>
          </td>
          <td class="left name drop">
              Blackwater leather cap
          </td>
          <td>21</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td>5</td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, leather
          </td>
          <td class="cond">
            <a title="On equip
  On source
    Blackwater misery" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blackwater_misery">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          
          </td>
      </tr>
      <tr id="hat3" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hat3" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -320px"></a>
          </td>
          <td class="left name drop">
              Crude leather cap
          </td>
          <td>5</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hat4" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hat4" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -320px"></a>
          </td>
          <td class="left name drop">
              Leather cap
          </td>
          <td>6</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hat_fine_leather" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#alynndir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Alynndir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hat_fine_leather" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -320px"></a>
          </td>
          <td class="left name drop">
              Fine leather cap
          </td>
          <td>9</td>
          <td></td>
          <td>-3</td>
          <td>
              
          </td>
          <td></td>
          <td>-2</td>
          <td></td>
          <td class="left category">
              Headwear, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hat_hard_leather" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hat_hard_leather" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -320px"></a>
          </td>
          <td class="left name drop">
              Hardened leather cap
          </td>
          <td>8</td>
          <td></td>
          <td>-3</td>
          <td>
              
          </td>
          <td></td>
          <td>-1</td>
          <td></td>
          <td class="left category">
              Headwear, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hat_leather1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hat_leather1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -320px"></a>
          </td>
          <td class="left name drop">
              Ordinary leather cap
          </td>
          <td>7</td>
          <td></td>
          <td>-2</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hat_leather_vision" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#alynndir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Alynndir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hat_leather_vision" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -320px"></a>
          </td>
          <td class="left name drop">
              Leather cap of reduced vision
          </td>
          <td>10</td>
          <td></td>
          <td>-3</td>
          <td>
              
          </td>
          <td></td>
          <td>-4</td>
          <td></td>
          <td class="left category">
              Headwear, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="helm_redeye1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arghes%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Arghes</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#helm_redeye1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -320px"></a>
          </td>
          <td class="left name drop">
              Cap of red eyes
          </td>
          <td>8</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td>-5</td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="helm_redeye2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arghes%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Arghes</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#helm_redeye2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -320px"></a>
          </td>
          <td class="left name drop">
              Cap of bloody eyes
          </td>
          <td>8</td>
          <td></td>
          <td></td>
          <td>
              0-1
          </td>
          <td>-5</td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="helm_combat3" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#rothses%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Rothses</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#helm_combat3" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -384px"></a>
          </td>
          <td class="left name drop">
              Remgard combat helmet
          </td>
          <td>12</td>
          <td></td>
          <td>-3</td>
          <td>
              
          </td>
          <td>1</td>
          <td>-5</td>
          <td></td>
          <td class="left category">
              Headwear, metal (heavy)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="helm_crude_iron" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#siola%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -320px%22></a></td> <td class=%22left%22>Siola</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#helm_crude_iron" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -352px"></a>
          </td>
          <td class="left name drop">
              Crude iron helmet
          </td>
          <td>11</td>
          <td></td>
          <td>-3</td>
          <td>
              
          </td>
          <td></td>
          <td>-5</td>
          <td></td>
          <td class="left category">
              Headwear, metal (heavy)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="helm_defend1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#rothses%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Rothses</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#helm_defend1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -96px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Defender's helmet
          </td>
          <td>8</td>
          <td>1</td>
          <td>-3</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, metal (heavy)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hvhead_irn" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -32px%22></a></td> <td class=%22left%22>Morkin lookout</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -0px%22></a></td> <td class=%22left%22>Morkin scout</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -96px%22></a></td> <td class=%22left%22>Morkin fighter</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -128px%22></a></td> <td class=%22left%22>Morkin guard</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -128px%22></a></td> <td class=%22left%22>Morkin berserker</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#morkin6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -352px 0px 0px -64px%22></a></td> <td class=%22left%22>Morkin leader</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#agthor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Agthor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hvhead_irn" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -352px"></a>
          </td>
          <td class="left name drop">
              Heavy iron skullcap
          </td>
          <td>6</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, metal (heavy)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hvhead_stl" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#agthor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Agthor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hvhead_stl" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -352px"></a>
          </td>
          <td class="left name drop">
              Heavy steel skullcap
          </td>
          <td>8</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, metal (heavy)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="helm_combat1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#rothses%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Rothses</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#helm_combat1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -352px"></a>
          </td>
          <td class="left name drop">
              Combat helm
          </td>
          <td>6</td>
          <td></td>
          <td>5</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, metal (light)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="helm_combat2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#rothses%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Rothses</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#helm_combat2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -32px 0px 0px -352px"></a>
          </td>
          <td class="left name drop">
              Enhanced combat helmet
          </td>
          <td>6</td>
          <td></td>
          <td>7</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, metal (light)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="helm_protector" data-drop="<tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#darkprotector%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>The dark protector</td> <td></td> <td></td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#helm_protector" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -96px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Dark protector
          </td>
          <td>13</td>
          <td>1</td>
          <td></td>
          <td>
              0-1
          </td>
          <td>-6</td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, metal (light)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="helm_protector0" data-drop="<tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#darkprotector%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>The dark protector</td> <td></td> <td></td> </tr>">
          <td class="icon">
              <span class="hidden">1</span>
              <a title="quest" href="#helm_protector0" class="at-icon quest"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -96px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Strange looking helmet
          </td>
          <td>5</td>
          <td></td>
          <td></td>
          <td>
              0-1
          </td>
          <td>-9</td>
          <td></td>
          <td></td>
          <td class="left category">
              Headwear, metal (light)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
    </tbody>
    </table>
     <h2>Glove</h2>
     <table id="gloves" width="70%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>BC%</th> <th>Dmg Resistance</th> <th>AC%</th> <th>Dmg</th> <th>HP</th> <th>Crit</th> <th>Category</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="gloves3" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#dunla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Dunla</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscaleb1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -224px 0px 0px -0px%22></a></td> <td class=%22left%22>Breeder of venomscales</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscaleb2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -288px 0px 0px -0px%22></a></td> <td class=%22left%22>Venomscale Master</td> <td>1</td> <td>5%</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves3" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -256px"></a>
          </td>
          <td class="left name drop">
              Snakeskin gloves
          </td>
          <td>5</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves4" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#dunla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Dunla</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscaleb1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -224px 0px 0px -0px%22></a></td> <td class=%22left%22>Breeder of venomscales</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscaleb2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -288px 0px 0px -0px%22></a></td> <td class=%22left%22>Venomscale Master</td> <td>1</td> <td>5%</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves4" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -256px"></a>
          </td>
          <td class="left name drop">
              Fine snakeskin gloves
          </td>
          <td>6</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_crude_cloth" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_3a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -512px%22></a></td> <td class=%22left%22>Iqhan chaos master</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_3b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -544px%22></a></td> <td class=%22left%22>Iqhan chaos master</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arambold%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Arambold</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_crude_cloth" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Crude cloth gloves
          </td>
          <td>1</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_fancy" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arambold%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Arambold</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_fancy" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Fancy gloves
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, cloth
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#graverobber%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png%22 alt=%22monsters_karvis2.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Graverobber</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#apparition%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -160px%22></a></td> <td class=%22left%22>Apparition</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#ghostly_visage%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ghost1.png%22 alt=%22monsters_ghost1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ghostly visage</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#guardian_of_the_catacombs%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -160px%22></a></td> <td class=%22left%22>Guardian of the catacombs</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#shade%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ghost1.png%22 alt=%22monsters_ghost1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Shade</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#spectre%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -160px%22></a></td> <td class=%22left%22>Spectre</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#young_gargoyle%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Young gargoyle</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hadracor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Hadracor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Leather gloves
          </td>
          <td>3</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ailshara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Ailshara</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Fine leather gloves
          </td>
          <td>4</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_arulir" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ervelyn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -256px%22></a></td> <td class=%22left%22>Ervelyn</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_arulir" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_2.png" alt="items_armours_2.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Arulir skin gloves
          </td>
          <td>7</td>
          <td>1</td>
          <td>-3</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_attack1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ganos%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ganos</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_attack1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Gloves of swift attack
          </td>
          <td>-9</td>
          <td></td>
          <td>15</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_attack2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#troublemaker%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Troublemaker</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_attack2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Fine gloves of swift attack
          </td>
          <td>-9</td>
          <td></td>
          <td>17</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_barbrawler" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#troublemaker%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Troublemaker</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_barbrawler" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Bar brawler's gloves
          </td>
          <td>2</td>
          <td></td>
          <td>5</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_combat1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arnal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -32px 0px 0px -256px%22></a></td> <td class=%22left%22>Arnal</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_combat1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -256px"></a>
          </td>
          <td class="left name drop">
              Combat gloves
          </td>
          <td>9</td>
          <td></td>
          <td>-5</td>
          <td>
              
          </td>
          <td>4</td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_combat2" data-drop="">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_combat2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -256px"></a>
          </td>
          <td class="left name">
              Enhanced combat gloves
          </td>
          <td>10</td>
          <td></td>
          <td>-5</td>
          <td>
              
          </td>
          <td>4</td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_crude_leather" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#alynndir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Alynndir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_crude_leather" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Crude leather gloves
          </td>
          <td>6</td>
          <td></td>
          <td>-4</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_fumbling" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arambold%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Arambold</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_fumbling" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Gloves of fumbling
          </td>
          <td>1</td>
          <td></td>
          <td>-5</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_grip" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ganos%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ganos</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_grip" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Gloves of better grip
          </td>
          <td>1</td>
          <td></td>
          <td>9</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_guard1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#rothses%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Rothses</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_guard1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -320px"></a>
          </td>
          <td class="left name drop">
              Gloves of the guardian
          </td>
          <td>14</td>
          <td></td>
          <td>-9</td>
          <td>
              
          </td>
          <td></td>
          <td>-5</td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_leather1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ervelyn%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -352px 0px 0px -256px%22></a></td> <td class=%22left%22>Ervelyn</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_leather1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -320px"></a>
          </td>
          <td class="left name drop">
              Hardened leather gloves
          </td>
          <td>6</td>
          <td></td>
          <td>2</td>
          <td>
              
          </td>
          <td>3</td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_leather_attack" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ailshara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Ailshara</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_leather_attack" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Leather gloves of attack
          </td>
          <td>-2</td>
          <td></td>
          <td>13</td>
          <td>
              
          </td>
          <td>3</td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_life" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#restless_apparition%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -64px 0px 0px -224px%22></a></td> <td class=%22left%22>Restless apparition</td> <td>1</td> <td>0.1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#skeletal_reaper%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -32px 0px 0px -224px%22></a></td> <td class=%22left%22>Skeletal reaper</td> <td>1</td> <td>0.1%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#gloves_life" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_2.png" alt="items_armours_2.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Gloves of life force
          </td>
          <td>3</td>
          <td></td>
          <td>5</td>
          <td>
              
          </td>
          <td>9</td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_troublemaker" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ailshara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Ailshara</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#troublemaker%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Troublemaker</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_troublemaker" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -256px"></a>
          </td>
          <td class="left name drop">
              Troublemaker's gloves
          </td>
          <td>4</td>
          <td></td>
          <td>7</td>
          <td>
              
          </td>
          <td>1</td>
          <td>4</td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_woodcutter" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hadracor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Hadracor</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#hadracor%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>Devastated land</td> <td></td> <td></td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_woodcutter" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Woodcutter's gloves
          </td>
          <td>1</td>
          <td></td>
          <td>8</td>
          <td>
              
          </td>
          <td>3</td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="used_gloves" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#prim_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -256px%22></a></td> <td class=%22left%22>Prim armorer</td> <td>1-2</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#troublemaker%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Troublemaker</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#used_gloves" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Blood-stained gloves
          </td>
          <td>1</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, leather
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hglv_chml" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hglv_chml" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -96px 0px 0px -192px"></a>
          </td>
          <td class="left name drop">
              Chainmail mittens
          </td>
          <td>7</td>
          <td>1</td>
          <td>-3</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, metal (heavy)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hglv_irn" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -96px%22></a></td> <td class=%22left%22>Zortak scout</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -96px%22></a></td> <td class=%22left%22>Zortak fighter</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -224px%22></a></td> <td class=%22left%22>Zortak guard</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -224px%22></a></td> <td class=%22left%22>Zortak barbarian</td> <td>1</td> <td>5%</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hglv_irn" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik3.png" alt="items_tometik3.png" style="margin: -0px 0px 0px -128px"></a>
          </td>
          <td class="left name drop">
              Heavy iron gloves
          </td>
          <td>6</td>
          <td></td>
          <td></td>
          <td>
              1-2
          </td>
          <td>1</td>
          <td></td>
          <td class="left category">
              Gloves, metal (heavy)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hglv_plat1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#lleglaris%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -64px 0px 0px -32px%22></a></td> <td class=%22left%22>Lleglaris</td> <td>1-5</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#hglv_plat1" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -384px"></a>
          </td>
          <td class="left name drop">
              Worn plated gloves
          </td>
          <td>7</td>
          <td></td>
          <td>-4</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, metal (heavy)
          </td>
          <td class="cond">
            <a title="On hit
  On target
    20% chance of Dazed (4 rounds)" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#dazed">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -288px">
  </a>

          
          
          </td>
      </tr>
      <tr id="hglv_plat2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hglv_plat2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik3.png" alt="items_tometik3.png" style="margin: -0px 0px 0px -128px"></a>
          </td>
          <td class="left name drop">
              Heavy plated gloves
          </td>
          <td>9</td>
          <td></td>
          <td>-2</td>
          <td>
              2-4
          </td>
          <td>3</td>
          <td></td>
          <td class="left category">
              Gloves, metal (heavy)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="hglv_stl" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hglv_stl" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -288px"></a>
          </td>
          <td class="left name drop">
              Reinforced steel gloves
          </td>
          <td>11</td>
          <td></td>
          <td>-4</td>
          <td>
              1-3
          </td>
          <td></td>
          <td></td>
          <td class="left category">
              Gloves, metal (heavy)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_guards" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_guards" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -288px"></a>
          </td>
          <td class="left name drop">
              Guard's gloves
          </td>
          <td>5</td>
          <td></td>
          <td>3</td>
          <td>
              
          </td>
          <td>3</td>
          <td></td>
          <td class="left category">
              Gloves, metal (light)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_remgard1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arnal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -32px 0px 0px -256px%22></a></td> <td class=%22left%22>Arnal</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_remgard1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -288px"></a>
          </td>
          <td class="left name drop">
              Remgard fighting gloves
          </td>
          <td>8</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td>4</td>
          <td></td>
          <td class="left category">
              Gloves, metal (light)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="gloves_remgard2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arnal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -32px 0px 0px -256px%22></a></td> <td class=%22left%22>Arnal</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#gloves_remgard2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -288px"></a>
          </td>
          <td class="left name drop">
              Enchanted Remgard gloves
          </td>
          <td>8</td>
          <td></td>
          <td>2</td>
          <td>
              
          </td>
          <td>5</td>
          <td></td>
          <td class="left category">
              Gloves, metal (light)
          </td>
          <td class="cond">
          
          
          
          </td>
      </tr>
    </tbody>
    </table>
     <h2>Boot</h2>
     <table id="boots" width="70%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>BC%</th> <th>Dmg Resistance</th> <th>AC%</th> <th>Dmg</th> <th>HP</th> <th>Crit</th> <th>Move cost</th> <th>Category</th></tr>
      </thead>
      <tbody>
      <tr id="boots_sewn" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots_sewn" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Sewn footwear
          </td>
          <td>2</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, cloth
          </td>
      </tr>
      <tr id="boots1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#rabid_boar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -192px%22></a></td> <td class=%22left%22>Rabid Boar</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vicious_hound%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -320px%22></a></td> <td class=%22left%22>Vicious hound</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#wild_boar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_dogs.png%22 alt=%22monsters_dogs.png%22 style=%22margin: -0px 0px 0px -192px%22></a></td> <td class=%22left%22>Wild Boar</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Leather boots
          </td>
          <td>3</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, leather
          </td>
      </tr>
      <tr id="boots2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ganos%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ganos</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Superior leather boots
          </td>
          <td>4</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, leather
          </td>
      </tr>
      <tr id="boots3" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscaleb1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -224px 0px 0px -0px%22></a></td> <td class=%22left%22>Breeder of venomscales</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscaleb2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -288px 0px 0px -0px%22></a></td> <td class=%22left%22>Venomscale Master</td> <td>1</td> <td>5%</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots3" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Snakeskin boots
          </td>
          <td>6</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, leather
          </td>
      </tr>
      <tr id="boots_brawler" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arghes%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Arghes</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots_brawler" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours_3.png" alt="items_armours_3.png" style="margin: -96px 0px 0px -256px"></a>
          </td>
          <td class="left name drop">
              Bar brawler's boots
          </td>
          <td>7</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td>2</td>
          <td>4</td>
          <td></td>
          <td class="left category">
              Footwear, leather
          </td>
      </tr>
      <tr id="boots_coward" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#troublemaker%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Troublemaker</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots_coward" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Coward's boots
          </td>
          <td>2</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td>-1</td>
          <td class="left category">
              Footwear, leather
          </td>
      </tr>
      <tr id="boots_crude_leather" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#audir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Audir</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots_crude_leather" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Crude leather boots
          </td>
          <td>1</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, leather
          </td>
      </tr>
      <tr id="boots_hard_leather" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#alynndir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Alynndir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots_hard_leather" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Hardened leather boots
          </td>
          <td>10</td>
          <td></td>
          <td>-4</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td>1</td>
          <td class="left category">
              Footwear, leather
          </td>
      </tr>
      <tr id="boots_unzel" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#unzel%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Unzel</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#boots_unzel" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Unzel's defensive boots
          </td>
          <td>8</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, leather
          </td>
      </tr>
      <tr id="boots_vacor" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vacor%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage.png%22 alt=%22monsters_mage.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vacor</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#boots_vacor" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Vacor's boots of attack
          </td>
          <td>2</td>
          <td></td>
          <td>9</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, leather
          </td>
      </tr>
      <tr id="woodcutter_boots" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#hadracor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -64px%22></a></td> <td class=%22left%22>Hadracor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#woodcutter_boots" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Woodcutter's boots
          </td>
          <td>8</td>
          <td></td>
          <td>3</td>
          <td>
              
          </td>
          <td>1</td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, leather
          </td>
      </tr>
      <tr id="boots5" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots5" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Reinforced boots
          </td>
          <td>7</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, metal (heavy)
          </td>
      </tr>
      <tr id="boots_guard1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#rothses%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Rothses</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots_guard1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Boots of the guardian
          </td>
          <td>7</td>
          <td>1</td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, metal (heavy)
          </td>
      </tr>
      <tr id="boots_remgard1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#rothses%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Rothses</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots_remgard1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Remgard boots
          </td>
          <td>12</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td>4</td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, metal (heavy)
          </td>
      </tr>
      <tr id="hboot_irn" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hboot_irn" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik3.png" alt="items_tometik3.png" style="margin: -0px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Heavy iron boots
          </td>
          <td>8</td>
          <td></td>
          <td>-3</td>
          <td>
              -1
          </td>
          <td>1</td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, metal (heavy)
          </td>
      </tr>
      <tr id="hboot_plat" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#rothses%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Rothses</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hboot_plat" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik2.png" alt="items_tometik2.png" style="margin: -64px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Heavy plated boots
          </td>
          <td>12</td>
          <td></td>
          <td>-4</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, metal (heavy)
          </td>
      </tr>
      <tr id="hboot_wirn" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#vilegard_armorer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Vilegard armorer</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>Trial by fire</td> <td></td> <td></td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#hboot_wirn" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_tometik3.png" alt="items_tometik3.png" style="margin: -0px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Worn iron boots
          </td>
          <td>6</td>
          <td></td>
          <td>-3</td>
          <td>
              
          </td>
          <td></td>
          <td>-1</td>
          <td></td>
          <td class="left category">
              Footwear, metal (heavy)
          </td>
      </tr>
      <tr id="boots_combat1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#rothses%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Rothses</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots_combat1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Combat boots
          </td>
          <td>7</td>
          <td></td>
          <td>7</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, metal (light)
          </td>
      </tr>
      <tr id="boots_combat2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#rothses%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Rothses</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots_combat2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Enhanced combat boots
          </td>
          <td>11</td>
          <td></td>
          <td>7</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, metal (light)
          </td>
      </tr>
      <tr id="boots_defender" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#boots_defender" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_armours.png" alt="items_armours.png" style="margin: -64px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Defender's boots
          </td>
          <td>9</td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td>2</td>
          <td></td>
          <td></td>
          <td class="left category">
              Footwear, metal (light)
          </td>
      </tr>
    </tbody>
    </table>
     <h2>Necklace</h2>
     <table id="necklaces" width="60%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>BC%</th> <th>AC%</th> <th>Dmg Resistance</th> <th>HP</th> <th>Crit</th> <th>Attack cost</th></tr>
      </thead>
      <tbody>
      <tr id="iqhan_pendant" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_4b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -416px%22></a></td> <td class=%22left%22>Iqhan master</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_1a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -480px%22></a></td> <td class=%22left%22>Iqhan chaos evoker</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_1b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -480px%22></a></td> <td class=%22left%22>Iqhan chaos evoker</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_2a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -448px%22></a></td> <td class=%22left%22>Iqhan chaos servant</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_2b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -448px%22></a></td> <td class=%22left%22>Iqhan chaos servant</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_boss%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -0px 0px 0px -160px%22></a></td> <td class=%22left%22>Iqhan chaos enslaver</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_1a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -512px%22></a></td> <td class=%22left%22>Iqhan worker thrall</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_1b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -512px%22></a></td> <td class=%22left%22>Iqhan thrall servant</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_2a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -544px%22></a></td> <td class=%22left%22>Iqhan guard thrall</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_2b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -128px 0px 0px -544px%22></a></td> <td class=%22left%22>Iqhan thrall</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_3a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -256px%22></a></td> <td class=%22left%22>Iqhan warrior thrall</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_3b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -288px%22></a></td> <td class=%22left%22>Iqhan master</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_4a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -288px%22></a></td> <td class=%22left%22>Iqhan master</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_3a%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -512px%22></a></td> <td class=%22left%22>Iqhan chaos master</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#iqhan_ch_3b%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -192px 0px 0px -544px%22></a></td> <td class=%22left%22>Iqhan chaos master</td> <td>1</td> <td>5%</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#iqhan_pendant" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png" alt="items_necklaces_1.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Iqhan pendant
          </td>
          <td></td>
          <td>6</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr id="jewel_fallhaven" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#jewel_fallhaven" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -192px"></a>
          </td>
          <td class="left name drop">
              Jewel of Fallhaven
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>-1</td>
      </tr>
      <tr id="junk_necklace0" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Olive Ooze</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Emerald Jelly</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Poisonous Ooze</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ochre Jelly</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td> <td class=%22left%22>Crimson Jelly</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mudfiend1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -192px 0px 0px -416px%22></a></td> <td class=%22left%22>Mudfiend</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mudfiend2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -192px 0px 0px -416px%22></a></td> <td class=%22left%22>Tough mudfiend</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -96px%22></a></td> <td class=%22left%22>Zortak scout</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -96px%22></a></td> <td class=%22left%22>Zortak fighter</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -224px%22></a></td> <td class=%22left%22>Zortak guard</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#zortak4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -320px 0px 0px -224px%22></a></td> <td class=%22left%22>Zortak barbarian</td> <td>1</td> <td>5%</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#junk_necklace0" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Mundane necklace
          </td>
          <td></td>
          <td>3</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr id="junk_necklace1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Olive Ooze</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Emerald Jelly</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Poisonous Ooze</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ochre Jelly</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td> <td class=%22left%22>Crimson Jelly</td> <td>1</td> <td>5%</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#junk_necklace1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Polished necklace
          </td>
          <td></td>
          <td>4</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr id="marrowtaint" data-drop="<tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#fiveidols%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>The five idols</td> <td></td> <td></td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#marrowtaint" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png" alt="items_necklaces_1.png" style="margin: -0px 0px 0px -288px"></a>
          </td>
          <td class="left name drop">
              Marrowtaint
          </td>
          <td>9</td>
          <td>9</td>
          <td></td>
          <td>5</td>
          <td></td>
          <td>-1</td>
      </tr>
      <tr id="neck_irogotu" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#irogotu%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Irogotu</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#neck_irogotu" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Irogotu's necklace
          </td>
          <td>5</td>
          <td></td>
          <td>1</td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr id="necklace_defender_stone" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#jolnor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Jolnor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#necklace_defender_stone" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Defender's stone
          </td>
          <td></td>
          <td></td>
          <td>1</td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr id="necklace_protector" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#talion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Talion</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#necklace_protector" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Necklace of the protector
          </td>
          <td></td>
          <td></td>
          <td>2</td>
          <td>5</td>
          <td></td>
          <td></td>
      </tr>
      <tr id="necklace_shield1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#talion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Talion</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#necklace_shield1" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Necklace of the guardian
          </td>
          <td>9</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr id="necklace_shield2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#jolnor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Jolnor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#necklace_shield2" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Shielding necklace
          </td>
          <td>12</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr id="necklace_shield_0" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#keknazar%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_misc.png%22 alt=%22monsters_misc.png%22 style=%22margin: -0px 0px 0px -288px%22></a></td> <td class=%22left%22>Keknazar</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Tharal</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#necklace_shield_0" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -224px"></a>
          </td>
          <td class="left name drop">
              Lesser shielding necklace
          </td>
          <td>3</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
      <tr id="necklace_strike" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ganos%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ganos</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#necklace_strike" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -192px"></a>
          </td>
          <td class="left name drop">
              Necklace of strike
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td>5</td>
          <td>5</td>
          <td></td>
      </tr>
      <tr id="vscale_amul" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscaleb1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -224px 0px 0px -0px%22></a></td> <td class=%22left%22>Breeder of venomscales</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#vscaleb2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik7.png%22 alt=%22monsters_tometik7.png%22 style=%22margin: -288px 0px 0px -0px%22></a></td> <td class=%22left%22>Venomscale Master</td> <td>1</td> <td>1%</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#vscale_amul" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_necklaces_1.png" alt="items_necklaces_1.png" style="margin: -32px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Venomscale amulet
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>7</td>
          <td></td>
      </tr>
    </tbody>
    </table>
     <h2>Ring</h2>
     <table id="rings" width="60%">
      <thead>
      <tr><th> </th> <th>Name</th> <th>BC%</th> <th>AC%</th> <th>Dmg</th> <th>Dmg Resistance</th> <th>HP</th> <th>Crit</th> <th>Cond</th></tr>
      </thead>
      <tbody>
      <tr id="bwm_combat_ring" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#iducus%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -224px%22></a></td> <td class=%22left%22>Iducus</td> <td>2</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#bwm_combat_ring" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Blackwater ring of combat
          </td>
          <td></td>
          <td>5</td>
          <td>
              0-7
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
            <a title="On equip
  On source
    Blackwater misery" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#blackwater_misery">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -128px 0px 0px -64px">
  </a>

          
          
          </td>
      </tr>
      <tr id="ring1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#grass_snake%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -160px%22></a></td> <td class=%22left%22>Grasslands snake</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#grass_snake2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -160px%22></a></td> <td class=%22left%22>Tough grasslands snake</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#grass_lizard%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -448px%22></a></td> <td class=%22left%22>Grasslands lizard</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#grass_lizard2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -544px%22></a></td> <td class=%22left%22>Black grasslands lizard</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Olive Ooze</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Emerald Jelly</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Poisonous Ooze</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ochre Jelly</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td> <td class=%22left%22>Crimson Jelly</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mbrute_1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -480px%22></a></td> <td class=%22left%22>Young mountain brute</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mbrute_10%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -416px%22></a></td> <td class=%22left%22>Tough mountain brute</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mbrute_2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -480px%22></a></td> <td class=%22left%22>Weak mountain brute</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mbrute_3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -512px%22></a></td> <td class=%22left%22>Whitefur mountain brute</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mbrute_4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -480px%22></a></td> <td class=%22left%22>Mountain brute</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mbrute_5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -512px%22></a></td> <td class=%22left%22>Large mountain brute</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mbrute_6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -448px%22></a></td> <td class=%22left%22>Fast mountain brute</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mbrute_7%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -448px%22></a></td> <td class=%22left%22>Quick mountain brute</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mbrute_8%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -448px%22></a></td> <td class=%22left%22>Aggressive mountain brute</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mbrute_9%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -416px%22></a></td> <td class=%22left%22>Strong mountain brute</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mbrute_11%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -416px%22></a></td> <td class=%22left%22>Fearless mountain brute</td> <td>1</td> <td>10%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mbrute_12%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -32px 0px 0px -416px%22></a></td> <td class=%22left%22>Enraged mountain brute</td> <td>1</td> <td>10%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mudfiend1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -192px 0px 0px -416px%22></a></td> <td class=%22left%22>Mudfiend</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#mudfiend2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld2.png%22 alt=%22monsters_ld2.png%22 style=%22margin: -192px 0px 0px -416px%22></a></td> <td class=%22left%22>Tough mudfiend</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Mundane ring
          </td>
          <td></td>
          <td></td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#aulowenn%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Aulowenn</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#graverobber%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_karvis2.png%22 alt=%22monsters_karvis2.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Graverobber</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#grass_lizard%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -448px%22></a></td> <td class=%22left%22>Grasslands lizard</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#grass_lizard2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -160px 0px 0px -544px%22></a></td> <td class=%22left%22>Black grasslands lizard</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#izthiel_1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -352px%22></a></td> <td class=%22left%22>Young Izthiel</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#izthiel_2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -288px%22></a></td> <td class=%22left%22>Izthiel</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#izthiel_3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -256px%22></a></td> <td class=%22left%22>Strong Izthiel</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#izthiel_4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -384px%22></a></td> <td class=%22left%22>Izthiel Guardian</td> <td>1</td> <td>20%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Olive Ooze</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Emerald Jelly</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Poisonous Ooze</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ochre Jelly</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#jelly5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik2.png%22 alt=%22monsters_tometik2.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td> <td class=%22left%22>Crimson Jelly</td> <td>1</td> <td>5%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#tiqui%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_tometik5.png%22 alt=%22monsters_tometik5.png%22 style=%22margin: -448px 0px 0px -96px%22></a></td> <td class=%22left%22>Tiqui</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Polished ring
          </td>
          <td>1</td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_atkch1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Tharal</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a class=%22at-icon%22 href=%22http://andorstrail.irkalla.cz/0.7.0/questlist.php#charwood2%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/ui_icon_quest.png%22 alt=%22ui_icon_quest.png%22 style=%22margin: -0px 0px 0px -0px%22></td> <td class=%22left%22>Trial by fire</td> <td></td> <td></td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_atkch1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Ring of surehit
          </td>
          <td></td>
          <td>15</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_backstab" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#dunla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Dunla</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_backstab" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Ring of backstabbing
          </td>
          <td>3</td>
          <td>17</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td>7</td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_barbrawler" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arghes%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Arghes</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#gruil%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Gruil</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_barbrawler" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Bar brawler's ring
          </td>
          <td></td>
          <td>12</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_block" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#ring_block" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Ring of block
          </td>
          <td>13</td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_block1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#cave_guardian%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -0px 0px 0px -512px%22></a></td> <td class=%22left%22>Cave guardian</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#talion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Talion</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#ring_block1" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Lesser ring of block
          </td>
          <td>10</td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_block2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#ring_block2" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Polished ring of block
          </td>
          <td>15</td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_challenger" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arambold%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Arambold</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#minarra%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -192px%22></a></td> <td class=%22left%22>Minarra</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_challenger" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Challenger's ring
          </td>
          <td>4</td>
          <td>12</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_crit1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ganos%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ganos</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#ring_crit1" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Ring of strike
          </td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td>5</td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_crit2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#troublemaker%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Troublemaker</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#ring_crit2" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Ring of vicious strike
          </td>
          <td></td>
          <td>-3</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td>7</td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_crude_block" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maonit_1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -128px%22></a></td> <td class=%22left%22>Maonit troll</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maonit_2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -128px%22></a></td> <td class=%22left%22>Giant Maonit troll</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maonit_3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -128px%22></a></td> <td class=%22left%22>Strong Maonit troll</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maonit_4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -224px%22></a></td> <td class=%22left%22>Maonit brute</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maonit_5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -224px%22></a></td> <td class=%22left%22>Tough Maonit brute</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#maonit_6%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -160px 0px 0px -224px%22></a></td> <td class=%22left%22>Strong Maonit brute</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Tharal</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_crude_block" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Crude ring of block
          </td>
          <td>2</td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_crude_combat" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#irdegh_4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -0px 0px 0px -448px%22></a></td> <td class=%22left%22>Ancient piercing Irdegh</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#kaverin%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -160px 0px 0px -0px%22></a></td> <td class=%22left%22>Kaverin</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#gruil%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Gruil</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_crude_combat" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Crude combat ring
          </td>
          <td></td>
          <td>5</td>
          <td>
              0-1
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_crude_surehit" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Tharal</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_crude_surehit" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Crude ring of surehit
          </td>
          <td></td>
          <td>7</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_defender" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#jolnor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Jolnor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_defender" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Defender's ring
          </td>
          <td>11</td>
          <td>-6</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_dmg1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arambold%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Arambold</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Tharal</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#bone_warrior%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_skeleton1.png%22 alt=%22monsters_skeleton1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Bone warrior</td> <td>1</td> <td>1%</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_dmg1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Ring of damage +1
          </td>
          <td></td>
          <td></td>
          <td>
              1
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_dmg2" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arambold%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Arambold</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ganos%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ganos</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#bone_champion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_skeleton1.png%22 alt=%22monsters_skeleton1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Bone champion</td> <td>1</td> <td>1%</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_dmg2" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -32px"></a>
          </td>
          <td class="left name drop">
              Ring of damage +2
          </td>
          <td></td>
          <td></td>
          <td>
              2
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_dmg5" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#talion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Talion</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#ring_dmg5" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Ring of damage +5
          </td>
          <td></td>
          <td></td>
          <td>
              5
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_dmg6" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#jolnor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Jolnor</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#skylenar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Skylenar</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#ring_dmg6" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -96px"></a>
          </td>
          <td class="left name drop">
              Ring of damage +6
          </td>
          <td></td>
          <td></td>
          <td>
              6
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_dmg_3" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#jolnor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Jolnor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_dmg_3" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Ring of damage +3
          </td>
          <td></td>
          <td></td>
          <td>
              3
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_dmg_4" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ganos%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ganos</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_dmg_4" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Ring of damage +4
          </td>
          <td></td>
          <td></td>
          <td>
              4
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_fumbling" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tailor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Tailor</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_fumbling" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Ring of fumbling
          </td>
          <td></td>
          <td>-5</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_guardian" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#talion%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Talion</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#ring_guardian" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Ring of the guardian
          </td>
          <td></td>
          <td>19</td>
          <td>
              3-5
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_jinxed1" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#winged_demon%22 class=%22at-icon size2x2 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_demon1.png%22 alt=%22monsters_demon1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Winged demon</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#izthiel_1%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -352px%22></a></td> <td class=%22left%22>Young Izthiel</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#izthiel_2%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -288px%22></a></td> <td class=%22left%22>Izthiel</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#izthiel_3%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -256px%22></a></td> <td class=%22left%22>Strong Izthiel</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#izthiel_4%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles2.png%22 alt=%22monsters_rltiles2.png%22 style=%22margin: -64px 0px 0px -384px%22></a></td> <td class=%22left%22>Izthiel Guardian</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#alynndir%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_mage2.png%22 alt=%22monsters_mage2.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Alynndir</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_jinxed1" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Jinxed ring of damage resistance
          </td>
          <td>-9</td>
          <td></td>
          <td>
              
          </td>
          <td>1</td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_life" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#buceth%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -224px%22></a></td> <td class=%22left%22>Buceth</td> <td>1</td> <td>100%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Tharal</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_life" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Ring of life force
          </td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td>5</td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_mikhail" data-drop="">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_mikhail" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name">
              Mikhail's ring
          </td>
          <td></td>
          <td>10</td>
          <td>
              
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_polished_backstab" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ailshara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Ailshara</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#ring_polished_backstab" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Polished ring of backstabbing
          </td>
          <td></td>
          <td>21</td>
          <td>
              4
          </td>
          <td></td>
          <td></td>
          <td>7</td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_polished_combat" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#dunla%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Dunla</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#ring_polished_combat" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Polished combat ring
          </td>
          <td></td>
          <td>15</td>
          <td>
              1-5
          </td>
          <td></td>
          <td>5</td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_protector" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#jolnor%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Jolnor</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#skylenar%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_ld1.png%22 alt=%22monsters_ld1.png%22 style=%22margin: -0px 0px 0px -96px%22></a></td> <td class=%22left%22>Skylenar</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#ring_protector" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -128px"></a>
          </td>
          <td class="left name drop">
              Ring of the protector
          </td>
          <td>14</td>
          <td>20</td>
          <td>
              0-3
          </td>
          <td></td>
          <td>3</td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_rough_damage" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Tharal</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_rough_damage" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Rough ring of damage
          </td>
          <td></td>
          <td></td>
          <td>
              0-2
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_rough_life" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#scaradon_5%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rltiles1.png%22 alt=%22monsters_rltiles1.png%22 style=%22margin: -128px 0px 0px -544px%22></a></td> <td class=%22left%22>Hardshell Scaradon</td> <td>1</td> <td>1%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#tharal%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -128px%22></a></td> <td class=%22left%22>Tharal</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_rough_life" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Rough ring of life force
          </td>
          <td></td>
          <td></td>
          <td>
              
          </td>
          <td></td>
          <td>1</td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_shadow0" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#shadow_gargoyle_master%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -32px%22></a></td> <td class=%22left%22>Shadow gargoyle master</td> <td>1</td> <td>0.01%</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#shadow_gargoyle_trainer%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_liches.png%22 alt=%22monsters_liches.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Shadow gargoyle trainer</td> <td>1</td> <td>0.01%</td> </tr>">
          <td class="icon">
              <span class="hidden">4</span>
              <a title="legendary" href="#ring_shadow0" class="at-icon legendary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Ring of lesser Shadow
          </td>
          <td>5</td>
          <td>25</td>
          <td>
              4-7
          </td>
          <td></td>
          <td></td>
          <td>6</td>
          <td class="cond">
            <a title="On equip
  On source
    Shadow Regeneration" class="at-icon" href="http://andorstrail.irkalla.cz/0.7.0/conditionlist.php#regen">
  <img src="http://andorstrail.irkalla.cz/drawable/0.7.0/actorconditions_1.png" alt="actorconditions_1.png" style="margin: -64px 0px 0px -224px">
  </a>

          
          
          </td>
      </tr>
      <tr id="ring_shadow_embrace" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/monsterlist.php#harlenn%22 class=%22at-icon size1x1 unique%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men2.png%22 alt=%22monsters_men2.png%22 style=%22margin: -0px 0px 0px -192px%22></a></td> <td class=%22left%22>Harlenn</td> <td>1</td> <td>100%</td> </tr>">
          <td class="icon">
              <span class="hidden">3</span>
              <a title="extraordinary" href="#ring_shadow_embrace" class="at-icon extraordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Ring of Shadow embrace
          </td>
          <td></td>
          <td>10</td>
          <td>
              2
          </td>
          <td></td>
          <td>20</td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_taverbrawler" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ganos%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Ganos</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_taverbrawler" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -0px"></a>
          </td>
          <td class="left name drop">
              Tavern brawler's ring
          </td>
          <td></td>
          <td>12</td>
          <td>
              0-3
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_troublemaker" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#arghes%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_rogue1.png%22 alt=%22monsters_rogue1.png%22 style=%22margin: -0px 0px 0px -0px%22></a></td> <td class=%22left%22>Arghes</td> <td>1</td> <td>sell</td> </tr> <tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#troublemaker%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Troublemaker</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">0</span>
              <a title="ordinary" href="#ring_troublemaker" class="at-icon ordinary"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Troublemaker's ring
          </td>
          <td></td>
          <td>15</td>
          <td>
              2-4
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
      <tr id="ring_villain" data-drop="<tr> <td><a href=%22http://andorstrail.irkalla.cz/0.7.0/npclist.php#ailshara%22 class=%22at-icon size1x1%22><img src=%22http://andorstrail.irkalla.cz/drawable/0.7.0/monsters_men.png%22 alt=%22monsters_men.png%22 style=%22margin: -0px 0px 0px -256px%22></a></td> <td class=%22left%22>Ailshara</td> <td>1</td> <td>sell</td> </tr>">
          <td class="icon">
              <span class="hidden">2</span>
              <a title="rare" href="#ring_villain" class="at-icon rare"><img src="http://andorstrail.irkalla.cz/drawable/0.7.0/items_jewelry.png" alt="items_jewelry.png" style="margin: -0px 0px 0px -64px"></a>
          </td>
          <td class="left name drop">
              Villain's ring
          </td>
          <td></td>
          <td>25</td>
          <td>
              3-6
          </td>
          <td></td>
          <td>4</td>
          <td></td>
          <td class="cond">
          
          
          
          </td>
      </tr>
    </tbody>
    </table>
  </body>
</html>