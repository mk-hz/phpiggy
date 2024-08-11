<?php
// code responsible for loading other file and configuring the project 

declare (strict_types=1);

include __DIR__."/../Framework/App.php";

use Framework\App; 

$app= new App();
return $app;