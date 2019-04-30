<?php
// https://stackoverflow.com/questions/6225351/how-to-minify-php-page-html-output/6225382
function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}


// https://stackoverflow.com/questions/2820723/how-to-get-base-url-with-php
function home_base_url(){   
	$base_url = (isset($_SERVER['HTTPS']) &&
		$_SERVER['HTTPS']!='off') ? 'https://' : 'http://';
	$tmpURL = dirname(__FILE__);
	$tmpURL = str_replace(chr(92),'/',$tmpURL);
	$tmpURL = str_replace($_SERVER['DOCUMENT_ROOT'],'',$tmpURL);
	$tmpURL = ltrim($tmpURL,'/');
	$tmpURL = rtrim($tmpURL, '/');
	if (strpos($tmpURL,'/')){
		$tmpURL = explode('/',$tmpURL);
		$tmpURL = $tmpURL[0];
	}
	if ($tmpURL !== $_SERVER['HTTP_HOST'])
		$base_url .= $_SERVER['HTTP_HOST'].'/'.$tmpURL.'/';
	else
		$base_url .= $tmpURL.'/';
	return $base_url; 
}
?>