<?php
// @version    $Id$
if (!defined("XOOPS_ROOT_PATH")) {
    die("Root path not defined");
}
define("_MB_GWREPORTS_BLOCK_TOPIC_ID", "Topic Id");

define("_MB_GWREPORTS_BLOCK_QUICK_REPORT_ID", "Report Id");
define('_MB_GWREPORTS_REPORT_RUN_BUTTON', 'Run');
define('_MB_GWREPORTS_SECTION_EMPTY', '(No data)');
if (!defined('_MD_GWREPORTS_TITLE')) { // if main isn't loaded, do it
    require_once dirname(__FILE__).'/main.php';
}
