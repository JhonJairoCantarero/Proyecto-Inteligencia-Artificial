#!/bin/bash
echo 27 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio27/direction
echo 1 > /sys/class/gpio/gpio27/value
echo FOCO-ENCENDIDO 27 | sudo mail -s Test gamezelvis38@gmail.com
