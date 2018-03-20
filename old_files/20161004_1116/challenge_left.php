<?php 

// $leftActiveYear = 2558; 
// $leftActiveProject = 'seed'; 


function activeYearOrNot($year) { 
  global $leftActiveYear; 
  return $year == $leftActiveYear ? 'active' : 0; 
}

function activeProjectOrNot($project) { 
  global $leftActiveProject; 
  return $project == $leftActiveProject ? 'active' : 0; 
}


?>

<aside class="col-lg-3 col-md-3 col-sm-4">
  <nav role="navigation">
    <ul class="sidebar-nav list-group no-margin" id="sidebar-nav">
      <!-- <li class="list-group-item text-center"><a href="challenge.php"><img src="img_geo/logoKMUTTCHALLENGE-01.jpg"></a></li> -->
      <li class="list-group-item" style='padding: 0px; text-align: center;'><a style='padding: 0px' href="challenge.php"><img src="img_geo/logoKMUTTCHALLENGE-01.jpg"></a></li>

      <li class="list-group-item list-toggle <?=activeYearOrNot(2558)?>">
        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1">2558</a>
        <!-- <ul id="collapse-1" class="collapse"> -->
        <ul id="collapse-1" class="collapse in">
          <li class="<?=activeProjectOrNot('ant')?>"><a href="challenge_2015_ant_man.php"><i class="fa fa-angle-right"></i> Finding ANT-MAN</a></li>
          <li class="<?=activeProjectOrNot('seed')?>"><a href="challenge_2015_seedbomb.php"><i class="fa fa-angle-right"></i> Seed Bomb</a></li>
          <li class="<?=activeProjectOrNot('film')?>"><a href="challenge_2015_film.php"><i class="fa fa-angle-right"></i> Science Behind the Film</a></li>
        </ul>
      </li>

      <li class="list-group-item list-toggle <?=activeYearOrNot(2557)?>">
        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-2">2557</a>
        <ul id="collapse-2" class="collapse in">
          <li class="<?=activeProjectOrNot('lt')?>"><a href="challenge_2014_learning_tool.php"><i class="fa fa-angle-right"></i> Learning Tool</a></li>
        </ul>
      </li>

    </ul>
  </nav>
</aside>

