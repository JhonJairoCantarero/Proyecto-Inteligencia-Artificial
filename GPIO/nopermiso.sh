#!/bin/bash
cd /etc/cron.d/
chmod -R 755 /etc/cron.d/gpio17on
chmod -R 755 /etc/cron.d/gpio17off
/etc/init.d/cron restart


