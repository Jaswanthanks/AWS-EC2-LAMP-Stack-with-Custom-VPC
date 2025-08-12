#!/bin/bash
set -e
cd /var/www/myapp
npm install --production
# Set environment variables
echo "DB_HOST=your-rds-endpoint" >> /etc/environment
echo "DB_USER=admin" >> /etc/environment
echo "DB_PASS=yourpassword" >> /etc/environment
echo "DB_NAME=mydb" >> /etc/environment
