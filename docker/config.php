<?php

define("BASE", (!empty(getenv('OPENTASK_BASE'))) ? getenv("OPENTASK_BASE") : "/opentask/");//Path to project
//URI CONTROLLER
define("URI_UNLINK_COUNT", (!empty(getenv('OPENTASK_URI_UNLINK_COUNT'))) ? getenv("OPENTASK_URI_UNLINK_COUNT") : 2);//Remove '/'
define("URI_DEBUG", (getenv('OPENTASK_URI_DEBUG') === 'true'));//Debug URI

//DATABASE
define("DB_HOST", (!empty(getenv('OPENTASK_DB_HOST'))) ? getenv("OPENTASK_DB_HOST") : "localhost");//Host database
define("DB_USER", (!empty(getenv('OPENTASK_DB_USER'))) ? getenv("OPENTASK_DB_USER") : "root"); //User database
define("DB_PASS", (!empty(getenv('OPENTASK_DB_PASS'))) ? getenv("OPENTASK_DB_PASS") : "");//Password database
define("DB_NAME", (!empty(getenv('OPENTASK_DB_NAME'))) ? getenv("OPENTASK_DB_NAME") : "opentask"); //Database name

//DEFAULT PASSWORD ON RESET
define("DEFAULT_USER_PASS", "A123456Z");

//DATETIME
define("DATE_FORMAT", "d/m/Y");
define("DATETIME_FORMAT", "d/m/Y H:i:s");
define("TIMEZONE", "America/Sao_Paulo");

//Do not change the code below
//MODEL DEFAULT VALUES
define("CONTROLLER", "HomeController");
define("METHOD", "index");
define("METHOD_HEADER", "Headerindex");//call inner <head></head>
define("METHOD_HTTP", "Httpindex");//call befrore <!doctype>

//UPLOAD
define("FILE_PATH", "resources/files");
define("IMAGE_PATH", "resources/images");
define("MAX_FILE_SIZE", (!empty(getenv('OPENTASK_MAX_FILE_SIZE'))) ? getenv("OPENTASK_MAX_FILE_SIZE") : 50); //MB
define("MAX_IMAGE_SIZE", (!empty(getenv('OPENTASK_MAX_IMAGE_SIZE'))) ? getenv("OPENTASK_MAX_IMAGE_SIZE") : 1);//MB
define("ACCEPT_FORMAT", [
  "image/gif",
  "image/jpeg",
  "image/png",
  "application",
  "application",
  "application/zip",
  "application/x-7z-compressed",
  "application/x-zip-compressed"
]);
define("RENAME_FILE", true);
