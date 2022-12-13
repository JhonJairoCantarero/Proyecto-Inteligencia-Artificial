#!/bin/bash
cd /etc/cron.d/
chmod -R 755 /etc/cron.d/gpio21on
chmod -R 755 /etc/cron.d/gpio21off
/etc/init.d/cron restart
