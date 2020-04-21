<?php
    define('PERCH_LICENSE_KEY', 'P31911-FWA714-UXA299-JEP394-FSS016');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", '2dc8f4e921a50546c9a84ca5776cd52107fddc619c84db80');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "oneabq");
    define("PERCH_DB_PREFIX", "perch3_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', '3bearg3@gmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'Eufracio Bear Ground');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
