#!/bin/bash
clear
echo "Enviado Correo";uuencode /home/elvis/proyecto/image1.jpg  image1.jpg > /tmp/out.mail #accedemos al archivo que se va a enviar con su respectivo nombre
   uuencode /home/elvis/proyecto/image2.jpg  image2.jpg >> /tmp/out.mail
   uuencode /home/elvis/proyecto/image3.jpg  image3.jpg >> /tmp/out.mail
   uuencode /home/elvis/proyecto/image4.jpg  image4.jpg >> /tmp/out.mail
   uuencode /home/elvis/proyecto/image5.jpg  image5.jpg >> /tmp/out.mail
sudo mail -s "ALARMA ACTIVADA PELIGRO" gamezelvis38@gmail.com  < /tmp/out.mail #le damos permiso para el envio de archivos y direccionamiento del correo 
rm -f /tmp/out.mail #borra el archivo temporal
echo "<<<<< Proceso Finalizado >>>>>" #mensaje
