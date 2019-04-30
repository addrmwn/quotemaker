<?php  
// Title Declaration
switch (@$_GET['content']) {
	case 'autoquotemaker':
	$title = "IMG Quote Maker";
	break;

	default:
	$title = $settings['title'];
	break;
}
?>
<title><?= $title ?></title>   