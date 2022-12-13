#!/usr/bin/python3
import subprocess  #estas son las librerias de python para ejecutar un subproceso 
import time #Libreria de Tiempo 
import pygame #para reproducir audio, video
import RPi.GPIO as GPIO  #referencia a librerias propias para controlar el GPIO y se le coloca un alias 
#pygame.mixer.music.load("/home/pi/Desktop/prueba/beep.mp3")

GPIO.setmode(GPIO.BCM)  #BCM es una base de control
GPIO.setwarnings(False)  #cuando halle un error de warnings que no lo muestre

GPIO_PIR = 17  #variable que almacena el valor logico del PIN
GPIO.setup(GPIO_PIR,GPIO.IN)  #le mandamos la variable y que lo configure como IN (osea como entrada)

num=0
status0 = 0
status1 = 0
try: # : significa entonces
       while True:
               status0 = 0  #variable
               print ("Listo para comenzar!") #mensaje
               while True: 
                       status0 = GPIO.input(GPIO_PIR)  #tomamos el valor del sensor en una variable 
                       if status0==1 and status1==0:  # : significa entonces ---- si hay movimiento el status0 toma el valor de 1
                               num=num+1  
                               print ("Atencion, se ha detectado movimiento ",num,"")
                               #pygame.mixer.music.play()
                               status1=1 #asignamos el valor de 1 al status1
                               subprocess.call("/./home/elvis/foto.sh")
                               subprocess.call("/./home/elvis/correo.sh"); #llamamos un el archivo para enviar un correo
                       elif status0==0 and status1==1:
                               print ("Listo para comenzar!")#mensaje
                               status1=0 #inicializamos la variable de nuevo
                               time.sleep(0.01) #tiempo de espera
except KeyboardInterrupt:  #excepcion con interrupcion de teclado
       GPIO.cleanup()   #limpiamos los pines para que tengan el valor por default 
