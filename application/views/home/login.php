<?php

echo Form::open();
echo 'Потребителско име';
echo Form::input('username') . '<br />';
echo 'Парола';
echo Form::password('password') . '<br />';
echo Form::submit('login', 'Влез');
echo Form::close();
