<?php 
	copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
	echo "File successfully copied to 'testfile2.txt'";
	
	if (!copy('testfile.txt', 'testfile2.txt'))
    echo "Could not copy file";
	else echo "File successfully copied to 'testfile2.txt'";
	
    if (!rename('testfile2.txt', 'testfile2.new'))
    echo "Could not rename file";
	else echo "File successfully renamed to 'testfile2.new'";
	
	if (!unlink('testfile2.new')) echo "Could not delete file";
	else echo "File 'testfile2.new' successfully deleted";
?>
