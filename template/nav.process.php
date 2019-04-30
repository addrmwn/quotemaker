<?php  
	switch (@$_GET['content']) {
		
	    case 'autoquotemaker':
	    include "content/autoquotemaker/index.php";
      	break;
      	
		case 'changelog':
		include "content/changelog/index.php";
		break;
		
		case 'credit':
		include "content/credit/index.php";
		break;
		
		case 'pro':
		include "content/pro/index.php";
		break;
		
		default:
		include "content/autoquotemaker/index.php";
		break;

	}
?>