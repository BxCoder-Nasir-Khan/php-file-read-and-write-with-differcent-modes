<?php 

$file_name = "./file/my-file.txt";
// touch($file_name);


// file read

// $file = fopen($file_name, "r");
// $size = filesize($file_name);
// echo fread($file, $size);


// file write 

// $file = fopen($file_name,"w");
// $text = "line 1\nline 2\nline 3";
// fwrite($file, $text);


// Open a file for write only. The existing data in file is preserved


// $file = fopen($file_name,"a");
// $text = "\nline 1\nline 2\nline 3";
// fwrite($file, $text);



	// Creates a new file for write only. Returns FALSE and an error if file already exists

// $file = fopen($file_name,"x");
// $text = "\nline 1\nline 2\nline 3";
// fwrite($file, $text);

// error
// $size = filesize($file_name);
// echo fread($file, $size);




// Open a file for read/write. File pointer starts at the beginning of the file


// $file = fopen($file_name, "r+");
// $size = filesize($file_name);
// echo fread($file, $size);

// $text = "------";
// fwrite($file, $text);


// Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file

// $file = fopen($file_name, "w+");

// $text = "this is new line";
// fwrite($file, $text);


// fseek($file, 0);

// $size = filesize($file_name);
// echo fread($file, $size);



// Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist


// $file = fopen($file_name, "a+");

// $text = "0000000000";
// fwrite($file, $text);

// fseek($file, 0);

// $size = filesize($file_name);
// echo fread($file, $size);



// Creates a new file for read/write. Returns FALSE and an error if file already exists


// $file = fopen($file_name, "x+");

// $text = "0000000000";
// fwrite($file, $text);

// fseek($file, 0);

// $size = filesize($file_name);
// echo fread($file, $size);





// file read line by line

$file = fopen($file_name, "r");
$size = filesize($file_name);
echo '<ol>';
while (!feof($file)) {

	echo '<li>'.fgets($file).'</li>';
}
echo '</ol>'
?>