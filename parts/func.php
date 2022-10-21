<?php
function webp($falder, $imgname)
{
    $images = get_template_directory_uri() . "/assets/images";
    $images = "<img src='" . $images . "/" . $falder . "/" . $imgname . ".webp'>";
    return $images;
}
function webp2($falder, $imgname)
{
    $images = get_template_directory_uri() . "/assets/images/".$falder."/".$imgname;
    $images = "<source media='(max-width:767px)' srcset='".$images."__sp.webp'><source srcset='".$images.".webp'><img src='".$images.".webp' alt=''>";
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
    $images = get_template_directory_uri() . "/assets/images/".$falder."/".$imgname;
    $images = "<source media='(max-width:767px)' srcset='".$images."__sp.svg'><source srcset='".$images.".svg'><img src='".$images.".svg' alt=''>";
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