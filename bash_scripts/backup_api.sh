#!/bin/bash

TIMESTAMP=$(date +%F)
BACKUP_DIR="/home/ubuntu/backups"
LOG_FILE="/var/log/backup.log"

mkdir -p $BACKUP_DIR

# Backup API files
# Backup API files
tar -czf $BACKUP_DIR/api_backup_$TIMESTAMP.tar.gz -C /var/www/html api_cs421_assigment
if [ $? -eq 0 ]; then
    echo "[$(date '+%Y-%m-%d %H:%M:%S')] API backup successful" >> $LOG_FILE
else
    echo "[$(date '+%Y-%m-%d %H:%M:%S')] ERROR: API backup failed" >> $LOG_FILE
    exit 1
fi


# Backup MySQL database
mysqldump -u root api > $BACKUP_DIR/db_backup_$TIMESTAMP.sql
if [ $? -eq 0 ]; then
    echo "[$(date '+%Y-%m-%d %H:%M:%S')] Database backup successful" >> $LOG_FILE
else
    echo "[$(date '+%Y-%m-%d %H:%M:%S')] ERROR: Database backup failed" >> $LOG_FILE
fi

# Delete backups older than 7 days
find $BACKUP_DIR -name "*.tar.gz" -type f -mtime +7 -delete
find $BACKUP_DIR -name "*.sql" -type f -mtime +7 -delete
