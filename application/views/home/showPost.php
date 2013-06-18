<?php

if ($errors)
{
    foreach ($errors as $error)
    {
        echo $error . '<br />';
    }
}
echo '<h2 class="postDate">' . date('d M', $post->post_date_created) . '</h2>';
echo '<article class="postContainer">';
echo '<header>';
echo '<h2 class="postTitle">' . $post->post_title . '</h2>';
echo '</header>';
echo '<div class="postDesc">';
echo $post->post_desc;
echo '</div>';
echo '<footer class="postFooter">';
echo date('d.m.y H:i', $post->post_date_created);
echo '</footer>';
echo '</article>';
if ($post->post_comments_on == 1)
{
    echo '<section class="commentsContainer">';
    if ($comments)
    {
        foreach ($comments as $comment)
        {
            echo '<header>' . $comment->comment_author . ':</header>';
            echo '<div class="commentContainer">';
            echo $comment->comment_desc;
            echo '</div>';
            if (SeSSION::instance()->get('is_logged') === TRUE)
            {
                echo HTML::anchor('admin/deleteComment/' . $comment->comment_id,'Delete');
            }
            echo '<br />';
        }
    }
    echo '</section>';
    echo '<br /><br />';
    echo 'Напиши коментар:';
    echo Form::open();
    echo 'Име';
    echo Form::input('author') . '<br />';
    echo 'Email';
    echo Form::input('email') . '<br />';
    echo 'Коментар<br />';
    echo Form::textarea('desc') . '<br />';
    echo Form::submit('createComment', 'Напиши');
    echo Form::close();
}