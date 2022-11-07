<?php

require_once('Person.php');


$bg = new Person('Nico', 'Lefevre', 'Maison', 2000, 2022);

echo $bg->infos();
echo $bg->getAge();
