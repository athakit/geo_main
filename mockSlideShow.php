<?php

$WEB_ROOT = "/var/www/geo"; 
$THUMBNAIL_DIRNAME = "mock-auto-thumbnails";
$mockGalleryInit_has_been_called = false; 

function getThumbnailFor($fImage) { 
  global $THUMBNAIL_DIRNAME, $WEB_ROOT; 
  $ext = 'jpg'; 
  $wantedWidth = 256; 
  $dirImage = dirname($fImage); 
  $dirImageRelative = str_replace($WEB_ROOT.'/', '', $dirImage); 
  $fname = basename($fImage); 
  $dirThumbBase = "{$WEB_ROOT}/img_geo/{$THUMBNAIL_DIRNAME}";
  $dirThumb = "{$dirThumbBase}/{$dirImageRelative}";
  if (!file_exists($dirThumb)) mkdir($dirThumb, 0777, true); 
  $fThumb = "{$dirThumb}/{$fname}"; 
  if (!file_exists($fThumb)) {
    // echo '<pre>';
    // echo "processing file [{$fImage}]\n";
    $img = new imagick($fImage);
    // echo "imagick created\n";
    $img->setImageFormat($ext);
    $img->scaleImage($wantedWidth, 0);
    // echo "Writing to [{$fThumb}]\n";
    $img->writeImage($fThumb);
    // echo "Wrote [{$fThumb}]\n";
    // echo '</pre>'; 
  }
  return $fThumb; 
}

function mockGalleryInit() {
  if ($mockGalleryInit_has_been_called) return; 
  $mockGalleryInit_has_been_called = true;
  //<script type="text/javascript" src="js/slimbox-autoload.js"></script>
  //<script type="text/javascript" src="js/slimbox2-autosize.js"></script>
  echo '
  <script type="text/javascript" src="js/slimbox2-autosize_fixed1.js"></script>  
  <style>
  .galTable1 table, th, td {
    padding: 2px;
  }
  </style>
  <link rel="stylesheet" href="css/slimbox2-autosize.css" type="text/css" media="screen" />  
  '; 
}

function mockGallery($pathToImageDirectory, $numCols) { 
  global $WEB_ROOT; 

  mockGalleryInit(); 
  $listOfImageFiles = glob("{$pathToImageDirectory}/*.jpg"); 
  $numImages = count($listOfImageFiles); 
  sort($listOfImageFiles); 
  // shuffle($listOfImageFiles); 
  $t = ''; 
  $iCol = 0; 
  $colSize = intval(floor(12 / $numCols)); 
  if ($colSize < 1) $colSize = 1;
  $colClass = "col-xs-{$colSize}";
  $groupNumber = rand(1, 2147483647); 

  $iImage = 0;
  foreach ($listOfImageFiles as $fImage) { 
    $urlImage = str_replace("/var/www/geo/", "", $fImage);
    $fThumb = getThumbnailFor($fImage); 
    $urlThumb = str_replace($WEB_ROOT, "", $fThumb);
    $iImage ++; 

    $iCol++; 
    if ($iCol === 1) $t .= "<div class='row'>"; 
    $t .= "<div class='{$colClass}' style='padding: 2px; '>"; 
    $t .= "
      <a href='{$urlImage}' rel='lightbox-groug{$groupNumber}' title='Image {$iImage}'>
      <img src='{$urlThumb}' style='max-width: 100%; max-height: 100%; vertical-align: middle;'>
      </a>
      "; 
    $t .= "</div>";
    if ($iCol === $numCols) {
      $t .= "</div>"; 
      $iCol = 0; 
    }
  }

  // $t .= "<div class='row'>"; 
  // $t .= "</div>"; 
  echo $t; 
 }

function mockGallery2($pathToImageDirectory, $numCols) { 
  global $WEB_ROOT; 
  mockGalleryInit(); 
  $listOfImageFiles = glob("{$pathToImageDirectory}/*.jpg"); 
  $numImages = count($listOfImageFiles); 
  sort($listOfImageFiles); 
  $t = ''; 
  $iCol = 0; 
  $colSize = intval(floor(12 / $numCols)); 
  if ($colSize < 1) $colSize = 1;
  $colClass = "col-xs-{$colSize}";
  $groupNumber = rand(1, 2147483647); 

  $iImage = 0;
  $t .= "<table class='galTable1' width='100%'>"; 
  foreach ($listOfImageFiles as $fImage) { 
    $urlImage = str_replace($WEB_ROOT, "", $fImage);
    $fThumb = getThumbnailFor($fImage); 
    $urlThumb = str_replace($WEB_ROOT, "", $fThumb);
    $iImage ++; 

    $iCol++; 
    if ($iCol === 1) $t .= "<tr valign=middle>"; 
    $t .= "<td>"; 
    $t .= "
      <a href='{$urlImage}' rel='lightbox-groug{$groupNumber}' title='Image {$iImage}'>
      <img src='{$urlThumb}' style='max-width: 100%; max-height: 100%; vertical-align: middle;'>
      </a>
      "; 
    $t .= "</td>";
    if ($iCol === $numCols) {
      $t .= "</tr>"; 
      $iCol = 0; 
    }
  }
  $t .= "</table>"; 
  
  // $t .= "<div class='row'>"; 
  // $t .= "</div>"; 
  echo $t; 
 }

function mockSlideShow($pathToImageDirectory){
  $listOfImageFiles = glob("{$pathToImageDirectory}/*.jpg"); 
  // echo "<pre>\n";
  $eleID = 'slider-'.rand(1, 999999); 
  $numImages = count($listOfImageFiles); 
  echo "
                  <!-- Begin Carousel -->
                  <div id='{$eleID}' class='carousel slide' data-ride='carousel'>
                    <!-- Indicators -->
                    <ol class='carousel-indicators'>
    ";
  for ($i = 0; $i < $numImages; $i++) { 
    $actString = $i === 0 ? "class='active'" : ""; 
    echo "
                      <li data-target='#{$eleID}' data-slide-to='{$i}' {$actString}></li>
    ";
  }
  echo "
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class='carousel-inner'>
    ";
  $i = 0;
  foreach ($listOfImageFiles as $fImage) { 
    $actString = $i === 0 ? "active" : ""; 
    $urlImage = str_replace("/var/www/geo/", "", $fImage);
    echo "
                      <div class='item {$actString}'>
                        <img class='img-responsive' src='{$urlImage}'>
                      </div>
    ";
    $i++; 
  }
  echo "
                    </div>

                    <!-- Controls -->
                    <a class='left carousel-control' href='#{$eleID}' role='button' data-slide='prev'>
                      <span class='ion-ios7-arrow-left carousel-arrow-left' aria-hidden='true'></span>
                    </a>
                    <a class='right carousel-control' href='#{$eleID}' role='button' data-slide='next'>
                      <span class='ion-ios7-arrow-right carousel-arrow-right' aria-hidden='true'></span>
                    </a>
                  </div>
                  <!-- End Carousel -->

  ";
} // function mockSlideShow


?>
