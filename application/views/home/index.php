<?php

foreach ($posts as $post)
{
    echo '<h2 class="postDate">'.  date('d M', $post->post_date_created).'</h2>';
    echo '<article class="postContainer">';
    echo '<header>';
    echo '<h2 class="postTitle">' . $post->post_title . '</h2>';
    echo '</header>';
    echo '<div class="postDesc">';
    echo substr($post->post_desc, 0, 500) . ' ' . HTML::anchor('home/showPost/' . $post->post_id, 'Read more');
    echo '</div>';
    echo '</article>';
    echo '';
}
