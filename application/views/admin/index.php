<?php

echo '<div class="pageContainer">';
echo '<table>';
echo '<tr>';



echo '<td>';
echo 'Pages:';
echo Html::anchor('admin/createPost', 'Създай');
echo '<table class="adminTable">';
foreach ($pages as $page)
{
    echo '<tr>';
    echo '<td>' . $page->page_title . '</td>';
    echo '<td>' . HTML::anchor('admin/updatePage/' . $page->page_id, 'Edit') . '</td>';
    echo '<td>' . HTML::anchor('admin/deletePage/' . $page->page_id, 'Delete') . '</td>';
    echo '</tr>';
}
echo '</table>';
echo '</td>';



echo '<td>';
echo 'Posts:';
echo Html::anchor('admin/createPage', 'Създай');
echo '<table class="adminTable">';
foreach ($posts as $post)
{
    echo '<tr>';
    echo '<td>' . $post->post_title . '</td>';
    echo '<td>' . HTML::anchor('admin/updatePost/' . $post->post_id, 'Edit') . '</td>';
    echo '<td>' . HTML::anchor('admin/deletePost/' . $post->post_id, 'Delete') . '</td>';
    echo '</tr>';
}
echo '</table>';
echo '</td>';


echo '<td>';
echo 'Парола:';
echo Form::open('admin/changePassword');
echo Form::password('password');
echo Form::submit('change', 'Смени');
echo Form::close();
echo '</td>';


echo '</tr>';
echo '</table>';
echo '</div>';