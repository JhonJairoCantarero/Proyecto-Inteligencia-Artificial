#!/bin/bash
cd /etc/cron.d/
chmod -R 755 /etc/cron.d/gpio27on
chmod -R 755 /etc/cron.d/gpio27off
/etc/init.d/cron restart

