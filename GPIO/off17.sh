#!/bin/bash
echo 17 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio17/direction
echo 0 > /sys/class/gpio/gpio17/value
echo FOCO-APAGADO 17 | sudo mail -s Test gamezelvis38@gmail.com
