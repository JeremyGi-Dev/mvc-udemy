<?php
// SESSIONS
ini_set('session.cookie_lifetime', false);
session_start();

// CONSTANTS
// paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // pour les inclusions php
define("PATH", substr($_SERVER['PHP_SELF'], 0 , -9)); // pour les images fichiers html

// website
define("WEBSITE_TITLE", "Mon site");
define("WEBSITE_NAME", "Mon site");
define("WEBSITE_URL", "https://monsite.com");
define("WEBSITE_DESCRIPTION", "Training in progress");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "");
define("WEBSITE_AUTHOR", "JeremyGI");
define("WEBSITE_AUTHOR_MAIL", "j.gimonet@gmail.com");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

// Database informations
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "test");
define("DATABASE_USER", "ROOT");
define("DATABASE_PASSWORD", "");
