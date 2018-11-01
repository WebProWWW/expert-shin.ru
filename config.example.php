<?php

return [
   'smtp.host'   => 'smtp.host.ru',
   'smtp.user'   => 'mail@email.ru',
   'smtp.pass'   => 'PassWord',
   'smtp.secure' => 'ssl',
   'smtp.port'   => 465,
   'mailer.from' => ['from@email.ru', 'Site Name'],
   'mailer.to'   => [
      'mail.a@email.ru' => 'Администратор 1',
      'mail.b@email.ru' => 'Администратор 2',
      'mail.c@email.ru' => 'Администратор 3',
      // . . .
   ],
];
