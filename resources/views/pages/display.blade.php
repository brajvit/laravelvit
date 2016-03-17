<?php

$roles = DB::table('posts')->pluck('body', 'title');
$roles = DB::table('posts')->pluck('title', 'body');


foreach ($roles as $body => $title) {
    echo "$title &nbsp";
    echo "$body &nbsp";
    echo "<br>";
}





?>