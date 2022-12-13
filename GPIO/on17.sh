#!/bin/bash
echo 17 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio17/direction
echo 1 > /sys/class/gpio/gpio17/value
echo FOCO-ENCENDIDO 17 | sudo mail -s Test gamezelvis38@gmail.com
