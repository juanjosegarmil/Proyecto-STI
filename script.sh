#!/bin/bash
exec 5< /home/juanjo/lampstack-8.0.19-0/apache2/htdocs/proyecto/comandos.txt
read -u 5 linea1
while [ "$linea1" ]
do
ssh 192.168.46.203 "$linea1"
read -u 5 linea1
done
exec 5<&-
