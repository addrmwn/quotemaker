<?php
if(isset($_POST['create'])) {

	echo "<label>Result :</label><br>";

	$folder = "files/autoquotemaker/";
	$overlay = $folder."overlay.png";
	$font_quote = "files/_font/"."Chicle-Regular.ttf";
	$font_copyright = "files/_font/"."KrinkesRegularPERSONAL.ttf";
	$filename = $folder.md5(rand(000,999)).".png";
	$quote = @$_POST['quote'] ? $_POST['quote'] : 'YOUR QUOTE';
	$copyright = @$_POST['copyright'] ? $_POST['copyright'] : 'bacotangw9';
	$backgrond = @$_POST['background'];
	
    
	if (!filter_var($backgrond, FILTER_VALIDATE_URL) === false) {
		$bg = $backgrond;
	}else {		
		$bg = get_redirect_target('https://source.unsplash.com/640x640/?'.urlencode($backgrond));
	}

	$image = new PHPImage();
	$image->setQuality(10);
	$image->setDimensionsFromImage($overlay);
	$image->draw($bg);
	$image->draw($overlay, '50%', '75%');
	$image->setFont($font_quote);
	$image->setTextColor(array(255, 255, 255));
	$image->setAlignVertical('center');
	$image->setAlignHorizontal('center');
	$image->textBox($quote, array(
		'fontSize' => 28, 
		'x' => 60,
		'y' => 215,
		'width' => 520,
		'height' => 110,
		'debug' => false
		));
	$image->setFont($font_copyright);
	$image->setTextColor(array(255, 255, 255));
	$image->text('' .$copyright, array(
		'fontSize' => 30, 
		'x' => 0,
		'y' => 400,
		'width' => 640,
		'height' => 20,
		'debug' => false
		));
	$image->save($filename);


	$imagebase64 = "data:image/png;base64,".base64_encode(file_get_contents($filename));
	echo "<a href='".$imagebase64."' target='_blank' download='$filename'><img src='".$imagebase64."' class='img-fluid'/></a>";
	unlink($filename);
}

?>