<?

	if ( $_GET['cmd']=='save' ) {
		

		if (is_numeric($_POST['id'])) { // its a article ...
				
			$this->Content->save_article_content( $_POST['id'] , $_POST['content'] ) ; 
			
		} else { // its a content block
		
			if ( $_POST['content'] ) $this->Content->save_content( $_POST['id'] , $_POST['content'] ) ;
			
		}
		
		exit;  

		
	
	}


?>