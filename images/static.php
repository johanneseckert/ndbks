<?php
//
// compose script for easier view on the indiebike
//
// Johannes Henseler
// v0.1
//

	$bike = $_GET;
//	print_r($_GET);

	$hash = hash("md5",serialize($_GET));
//	echo $hash;

	function add_to_composing($nameshort,$value,$im,$src_base,$w,$h) {
		$src_base = imagecreatefrompng("builder/".$nameshort."-".$value.".png");
		imagecopy($im,$src_base,0,0,0,0,$w,$h);		
	}

	$filefromcache = "cached/".$hash.".jpg";

	if (!file_exists($filefromcache)) {
		// generate file

		// Create a blank image
		$w = 780;
		$h = 480;
		$im = imagecreatetruecolor($w, $h);

		// make it white
		$white = imagecolorallocate($im,255,0,255);
		imagefill($im,0,0,$white);

		// compose bike instances
		// BASE
		$src_base = imagecreatefrompng("builder/base.png");
		imagecopy($im,$src_base,0,0,0,0,$w,$h);

		// FRONT RIM
		add_to_composing("rmf",$bike["frontrim"],$im,$src_base,$w,$h);
		// REAR RIM
		add_to_composing("rmr",$bike["rearrim"],$im,$src_base,$w,$h);
		// FRONT TIRE
		add_to_composing("trf",$bike["fronttire"],$im,$src_base,$w,$h);
		// REAR TIRE
		add_to_composing("trr",$bike["reartire"],$im,$src_base,$w,$h);
		// FRAME
		add_to_composing("fr",$bike["frame"],$im,$src_base,$w,$h);
		// CRANKS
		add_to_composing("cr",$bike["cranks"],$im,$src_base,$w,$h);
		// CHAIN
		add_to_composing("ch",$bike["chain"],$im,$src_base,$w,$h);
		// HANDLEBARS
		switch ($bike["handlebar"]) {
			case 'riserbar':
				// RISER BAR
				add_to_composing("hb-riserbar",$bike["handlebarcolor"],$im,$src_base,$w,$h);
				// GRIPS
				add_to_composing("gr",$bike["grips"],$im,$src_base,$w,$h);
				break;
			case 'bullhornbar':
				// BULLHORN BAR
				add_to_composing("hb-bullhornbar",$bike["handlebarcolor"],$im,$src_base,$w,$h);
				break;
		}
		// SADDLE
		add_to_composing("sd",$bike["saddle"],$im,$src_base,$w,$h);
		// BRANDING
		add_to_composing("brand",$bike["branding"],$im,$src_base,$w,$h);

		if ($_GET["output"] == "small") {
			// RESIZING for small output
			$newwidth = 300;
			$newheight = 185;
			$im_small = imagecreatetruecolor(300,185);
			imagecopyresampled($im_small,$im,0,0,0,0,$newwidth,$newheight,$w,$h);

			// Output the image
			imagejpeg($im_small,$filefromcache, 75);

			// Free up memory
			imagedestroy($im);
			imagedestroy($im_small);
		} else {

			// add logo
			$src_base = imagecreatefrompng("builder/logo.png");
			imagecopy($im,$src_base,0,0,0,0,$w,$h);

			// add vignette
			$src_base = imagecreatefrompng("builder/top.png");
			imagecopy($im,$src_base,0,0,0,0,$w,$h);

			// output
			imagejpeg($im, $filefromcache, 100);
	
			// Free up memory
			imagedestroy($im);
		}

	}


	//
	// read file (wether from cache or fresh)
	//

	if ($bike["filename"]) {
		header('Content-Type: text/html');
		echo $filefromcache;
	} else {
		// Set the content type header - in this case image/jpeg
		header('Content-Type: image/jpeg');
	    header('Content-Description: File Transfer');
	    header('Content-Disposition: attachment; filename=indiebikes.jpg');
	    header('Content-Transfer-Encoding: binary');
	    header('Expires: 0');
	    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	    header('Pragma: public');
	    header('Content-Length: ' . filesize($filefromcache));
	    ob_clean();
	    flush();

		readfile($filefromcache);
	}




?>