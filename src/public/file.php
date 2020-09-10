<?php

$video = file_get_contents("https://www.youtube.com/watch?v=dwhBLzbSir4");
file_put_contents('./videoplayback.mp4', $video);

?>
