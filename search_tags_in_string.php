<?php
/**
 * this class searches in the document or in a url 
 * the repeats of the chosen tag and displays it in json format.
 * @author Juan Chaves, juan.cha63@gmail.com
 * Copyright (C) 2017 Juan Chaves
 * This program is free software; distributed under the artistic license.
 */
class searchTagsInString {
   
   public $search_in;
   public $from;
   public $tag;
   
    /**
     * Method public ReturnData.
     * @return Method private _data
    */
    public function ReturnData() {

		return $this->_data();
       
    }
  
    /**
     * Method private _data.
     * @return the result in json format.
     */
    private function _data() {

		$dom = new DOMDocument;
		$dom->loadHTML($this->search_in);
		
		foreach($dom->getElementsByTagName($this->tag) as $node) {
			
			$array[] = $dom->saveHTML($node);
			
		}

		if(count($array) > 0) {
			
			return json_encode($array);
		
		} else {
			
			return '[Tag not found in string]';
			
		}
       
    }
       
}



//Example
$query = new searchTagsInString();
$query->search_in = file_get_contents('https://www.egeon.es');
$query->tag = 'img';

header('Content-type: application/json');
echo $query->ReturnData();



?>
