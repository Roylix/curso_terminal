<?php
echo "Escribe un NUmero: ";
$d = trim(fread(STDIN,100));
$i = 0;

while (true){
	if (++$i % $d == 0){
		fwrite(STDOUT, sprintf("El %d es multiplo de %d\n",$i,$d));
	} else{
		fwrite(STDERR, sprintf("NO ALARMA!!: el %d No es multiplo de %d!!!\n",$i,$d));
	}
	sleep(1);
}
