for num in {0..22} 

do
echo ${num}

/sbin/ifconfig eth0:${num} 127.0.0.${num} up

done
