#!/bin/bash
echo 21 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio21/direction
echo 1 > /sys/class/gpio/gpio21/value
echo FOCO-ENCENDIDO 21 | sudo mail -s Test gamezelvis38@gmail.com
