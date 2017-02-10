<?php
$files = array();
// check for only 2 args: program-script and image-folder
if (count($argv) == 2) {
	$dir = $argv[1];
	// Open a known directory, and proceed to read its contents
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) !== false) {
				if ($file == "." || $file == "..") continue;
				$fullpath = "$dir/$file";
				$stat = stat($fullpath);
				$files[$file]["size"] = $stat["size"];
				$files[$file]["fullpath"] = $fullpath;
			}
			closedir($dh);
		}
	}
	foreach ($files as $key => $value) {
		echo $key . " ";
		echo $value["size"] . " ";
		echo pathinfo($key, PATHINFO_EXTENSION) . "\n";
	}
	include("../connection.php");
	$valid_formats = array("jpg", "png", "gif", "jpeg");
	$max_file_size = 32768*32000; // 32000 kb
	$count = 0;
	$skippedimages = new SplQueue();
	$imported = new SplQueue();
	foreach ($files as $name => $value) {
		if ($value['size'] > $max_file_size) {
			$message[] = "$name is too large!.";
			echo "$name is too large!.";
			continue; // Skip large files
		} elseif (!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats)) {
			$message[] = "$name is not a valid format";
			echo "$name is not a valid format";
			continue; // Skip invalid file formats
		} else {
			$image = addslashes(file_get_contents($value["fullpath"]));
			$image_name = addslashes($name);
			$ext = pathinfo($image_name, PATHINFO_EXTENSION);
			$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $image_name);
			$Label_UPC = $withoutExt;
			$flag = false;
			$query = "Select PackageID from $dbname.Package where Label_UPC = '$Label_UPC'";
			$result = mysqli_query($conn,$query);
			$rowcount = mysqli_num_rows($result);
			if ($rowcount > 0) {
				while ($row = $result->fetch_assoc()) {
					$ID =  $row['PackageID'];
					$query2 = "Insert into $dbname.Images(Image, ImageName, LabelID, Extension) VALUES ('$image', '$withoutExt', '$ID', '$ext')";
					$result2 = mysqli_query($conn,$query2);
					if (!$result2) {
						continue;
					} else {
						$flag =true;
					}
				}
				if ($flag) {
					++$count;
					$withoutExt .= "-$count";
					$imported->push($withoutExt);
				}
			} else {
				//echo "Label UPC not found $Label_UPC";
				$skippedimages->push($withoutExt);
			}
			//Number of successfully uploaded file
		}
	}
	echo "[01;31m$count files were imported[00;00m\n";
	while (!$imported->isEmpty()) {
		$senditem = $imported->shift();
		if(strlen ($senditem) < 1) continue;
		echo "$senditem\n";
	}
	echo "[01;31mSkipped Images[00;00m\n";
	while (!$skippedimages->isEmpty()) {
		$senditem = $skippedimages->shift();
		if(strlen ($senditem) < 1) continue;
		echo "$senditem\n";
	}
}
?>
