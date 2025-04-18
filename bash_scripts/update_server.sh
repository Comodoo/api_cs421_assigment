#!/bin/bash

LOG_FILE="/var/log/update.log"
PROJECT_DIR="/var/www/html/api_cs421_assigment"

echo "[$(date '+%Y-%m-%d %H:%M:%S')] Starting system update" >> $LOG_FILE

# Update packages
apt update && apt upgrade -y >> $LOG_FILE 2>&1
if [ $? -ne 0 ]; then
    echo "[$(date '+%Y-%m-%d %H:%M:%S')] ERROR: Package update failed" >> $LOG_FILE
    exit 1
fi

# Update API from GitHub
cd $PROJECT_DIR
git config --global --add safe.directory $PROJECT_DIR
git pull origin main >> $LOG_FILE 2>&1
if [ $? -ne 0 ]; then
    echo "[$(date '+%Y-%m-%d %H:%M:%S')] ERROR: Git pull failed" >> $LOG_FILE
    exit 1
fi

# Restart Apache
systemctl restart apache2 >> $LOG_FILE 2>&1
echo "[$(date '+%Y-%m-%d %H:%M:%S')] Update completed successfully" >> $LOG_FILE

