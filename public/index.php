<?php

require_once __DIR__.'/../vendor/autoload.php';

require_once __DIR__.'/../routes/web.php';

require_once __DIR__.'/../src/Support/helper.php';

use Project\Application;


Application::run();
