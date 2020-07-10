<?php

class Search extends Controller {
	
	function index()
	{
        $template = $this->loadView('search');
        $template->render();

	}
    
}

?>
