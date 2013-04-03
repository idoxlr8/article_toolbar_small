<?php
class article_toolbar_small extends Plugin {

	private $link;
	private $host;

	function about() {
		return array(0.4,
			"Small Toolbar for easy access to feed functions",
			"idoxlr8", false);
	}

	function init($host) {
		$this->link = $host->get_link();
		$this->host = $host;

		$host->add_hook($host::HOOK_TOOLBAR_BUTTON, $this);
	}

	function get_js() {
		return file_get_contents(dirname(__FILE__) . "/toolbar.js");
	}

	function HOOK_TOOLBAR_BUTTON() {
		require_once dirname(__FILE__) . "/toolbar_body.php";
	}



}
?>
