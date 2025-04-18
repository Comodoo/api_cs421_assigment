
#!/bin/bash

LOG_FILE="/var/log/server_health.log"
TIMESTAMP=$(date "+%Y-%m-%d %H:%M:%S")

# Check CPU usage
CPU_USAGE=$(top -bn1 | grep "Cpu(s)" | awk '{print $2 + $4}')
echo "[$TIMESTAMP] CPU Usage: $CPU_USAGE%" >> $LOG_FILE

# Check memory usage
MEM_USAGE=$(free -m | awk 'NR==2{printf "%.2f%%", $3*100/$2 }')
echo "[$TIMESTAMP] Memory Usage: $MEM_USAGE" >> $LOG_FILE

# Check disk space
DISK_SPACE=$(df -h / | awk 'NR==2{print $5}')
echo "[$TIMESTAMP] Disk Space Used: $DISK_SPACE" >> $LOG_FILE

# Check Apache status
if systemctl is-active --quiet apache2; then
    echo "[$TIMESTAMP] Apache is running" >> $LOG_FILE
else
    echo "[$TIMESTAMP] WARNING: Apache is not running!" >> $LOG_FILE
fi

# Test API endpoints
BASE_URL="http://13.60.31.41"
ENDPOINTS=("/students" "/subjects")
for endpoint in "${ENDPOINTS[@]}"; do
    STATUS=$(curl -s -o /dev/null -w "%{http_code}" $BASE_URL$endpoint)
    if [ "$STATUS" -eq 200 ]; then
        echo "[$TIMESTAMP] $endpoint: OK (200)" >> $LOG_FILE
    else
        echo "[$TIMESTAMP] WARNING: $endpoint returned $STATUS" >> $LOG_FILE
    fi
done

