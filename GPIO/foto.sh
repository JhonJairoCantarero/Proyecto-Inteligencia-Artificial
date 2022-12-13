#!/bin/bash

variable=`date`  #declaramos una variable que nos almacenara la fecha del sistema

cd /home/elvis/proyecto #Ingresamos al directorio en el cual se alamcenaran las imagenes
 for i in {1..5} #iniciamos el ciclo For, lo cual sera de 1 a 5
  do
  raspistill -ex auto -o image"$i".jpg -q 20 -th  #tomamos la foto, concatenando la fecha del sistema
variable=`date` #se actualiza la fecha que se almacenara en la variable
  sleep 1
done
