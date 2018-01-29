
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<div>Having done very little web development in the past, 
    I hope to learn more in depth web development techniques that will 
    allow me to contribute on a professional level
</div>
<?php
    $images = array("https://media.npr.org/assets/img/2012/11/28/barrybonds282way_wide-e35f59a9632362743b3c2d9ed97db72399f99feb-s400-c85.jpg",
                    "http://media.tmz.com/2017/01/17/betty-white-300x250.jpg",
                    "https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_80%2Cw_300/MTE5NDg0MDU1MzY3ODEyNjIz/hydraulic-fracturing-prevention-press-conference.jpg",
                    "http://www.hindustantimes.com/rf/image_size_960x540/HT/p2/2017/03/20/Pictures/_1852557a-0d66-11e7-9152-693fb265b0f1.jpg");
    $links = array ("https://en.wikipedia.org/wiki/Barry_Bonds",
                    "https://en.wikipedia.org/wiki/Betty_White",
                    "https://en.wikipedia.org/wiki/Mark_Ruffalo",
                    "https://en.wikipedia.org/wiki/Michael_Caine");                 
    $index = rand(0, sizeof($images)-1);
    $image = $images[$index];
    $link = $links[$index];

    echo "<img src=$image></img>";
    echo "<br>";
    echo "<a href=$link>More</a>";
    echo "<br>";
    
    echo "<br>";
    echo "<a href=page2.php>page 2</a>";
?>

</body>
</html>
