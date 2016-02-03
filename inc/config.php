<?php

define("LOCALHOST", $_SERVER["SERVER_NAME"] == "localhost");

if (LOCALHOST) {
	define("BASE_URL", "/cs-pools/");
	define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/cs-pools/");
} else {
	define("BASE_URL", "/");
	define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/");
}