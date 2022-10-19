<?php
function homeurl()
{
  $hm = get_home_url();
  return $hm;
}
function jpg($falder, $imgname)
{
  $images = get_template_directory_uri() . "/assets/images";
  $images = "<img src='" . $images . "/" . $falder . "/" . $imgname . ".jpg'>";
  return $images;
}
function jpg2($falder, $imgname)
{
  $images = get_template_directory_uri() . "/assets/images";
  $images = "<img srcset='" . $images . "/" . $falder . "/" . $imgname . "__sp.jpg 767w," . $images . "/" . $falder . "/" . $imgname . ".jpg' src='" . $images . "/" . $falder . "/" . $imgname . ".jpg'>";
  return $images;
}

function png($falder, $imgname)
{
  $images = get_template_directory_uri() . "/assets/images";
  $images = "<img src='" . $images . "/" . $falder . "/" . $imgname . ".png'>";
  return $images;
}
function png2($falder, $imgname)
{
  $images = get_template_directory_uri() . "/assets/images";
  $images = "<img srcset='" . $images . "/" . $falder . "/" . $imgname . "__sp.png 767w," . $images . "/" . $falder . "/" . $imgname . ".png' src='" . $images . "/" . $falder . "/" . $imgname . ".png'>";
  return $images;
}

function svg($falder, $imgname)
{
  $images = get_template_directory_uri() . "/assets/images";
  $images = "<img src='" . $images . "/" . $falder . "/" . $imgname . ".svg'>";
  return $images;
}
function svg2($falder, $imgname)
{
  $images = get_template_directory_uri() . "/assets/images";
  $images = "<img srcset='" . $images . "/" . $falder . "/" . $imgname . "__sp.svg 767w," . $images . "/" . $falder . "/" . $imgname . ".svg' src='" . $images . "/" . $falder . "/" . $imgname . ".svg'>";
  return $images;
}

function urls($next)
{
  $hm = get_home_url();
  $get_url = $hm . "/" . $next;
  return $get_url;
}
function pagename()
{
  $pageName = get_post(get_the_ID())->post_name;
  return $pageName;
}
function echof($field)
{
  $getfield = get_field($field);
  return $getfield;
}