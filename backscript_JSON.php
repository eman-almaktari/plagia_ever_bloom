<?php
    include 'Includes/include.php';
	$string = $_POST['input'];
	//$string = ArabicUTF8Decode($string);
	if($string == ''){
        header("location:result.php?result=null");
        die();
    }
	
	$string = preg_replace('/\r\s+/', '', $string);
	$string = explode('.', $string);
	$string = array_filter($string, function($s) { return !empty($s) && $s !== ' '; });
	
	require('autoload.php');
	new \Core\Autoload();
	
	$apiClient = new \Google\Api\CustomSearch();
	$apiClient->setApiKey('AIzaSyADkQ09uaORDqtsSb-iBwCy2nA3n9YxfLI');
	$apiClient->setCustomSearchEngineId('013954789496062453760:oouml__lda0');
	
	$plag_count = 0;
	foreach ($string as $s) {
		$s = '"'.$s.'"';
		$apiClient->setQuery($s);
		$response = $apiClient->executeRequest();
		
		$items_arr = $response->getData()->getItems();
		
		if(!empty($items_arr))
			$plag_count++;
		
		foreach ($items_arr as $item){
			echo "<br/><strong>".$item->getHtmlTitle()."</strong>";
			echo "<br/> <a href='".$item->getLink()."'>".$item->getDisplayLink()."</a>";
			echo "<br/>".$item->getSnippet();
			echo "<hr/>";
		}
	}
	if ($plag_count == 0)
			echo "Research is Clean";
	
	/*function ArabicUTF8Decode($s){
		
		$string = $s;
		
		//when we pay for the web service
		//demo from: https://azure.microsoft.com/en-us/services/cognitive-services/bing-web-search-api/
		
		if (!empty($string)){
			$url = 'BING_SERVICE_URL'.$string;
			$url_json = file_get_contents($url);
		}
		
		return $url_json;
	}*/
	
?>