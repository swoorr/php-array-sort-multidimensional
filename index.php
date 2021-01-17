<?php

require __DIR__ . "/arraySort.php";

/**
 * example usage
 * you can run on terminal as : php arraySort.php
 * or web browser as : php -S localhost:8000
 */
header("Content-type:application/json");
new stringWizard([]);
new stringWizard();
new stringWizard("");
new stringWizard("Mehmet bugün bir yazılım yapacak");
new stringWizard("Yazılım geliştirmek ve algoritma üretmek çok zevkli bir iş");
