<?php

return array
    (
    'username' => array
        (
        'not_empty' => 'Въведете потребителско име',
        'min_length' => 'Потребителското име трябва да е по-голямо от 3 символа',
        'max_length' => 'Потребителското име трябва да е по-малко от 90 символа',
        'username_available' => 'Съществува такова потребителско име',
    ),
    'email' => array(
        'not_empty' => 'Въведете email',
        'email' => 'Въведете валиден email',
        'email_available' => 'Съществува такъв email',
    ),
);
