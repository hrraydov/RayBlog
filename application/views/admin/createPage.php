<?php

echo '<div class="pageContainer">';
if (isset($errors))
{
    foreach ($errors as $error)
    {
        echo $error;
    }
}
echo Form::open();
echo Form::label('title', 'Title');
echo Form::input('title') . '<br />';
echo Form::label('desc', 'Desc');
echo Form::textarea('desc', '', array('class' => 'editor')) . '<br />';
echo Form::submit('submit', 'Create');
echo Form::close();
echo '</div>';