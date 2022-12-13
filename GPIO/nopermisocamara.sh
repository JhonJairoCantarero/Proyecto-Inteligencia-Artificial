#!/bin/bash
cd /etc/cron.d/
chmod -R 755 /etc/cron.d/camara
/etc/init.d/cron restart
