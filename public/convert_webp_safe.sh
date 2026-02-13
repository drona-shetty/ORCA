#!/bin/bash

BASE_DIR="/var/www/orcasia-main/public"
QUALITY=80
MAX_WIDTH=1200
LOG_FILE="/var/log/webp_conversion.log"
TEMP_FILE="/tmp/webp_temp_image.jpg"

echo "----------------------------------------" >> $LOG_FILE
echo "Starting WebP conversion: $(date)" >> $LOG_FILE
echo "----------------------------------------" >> $LOG_FILE

find "$BASE_DIR" -type f \( \
-name "*.jpg" -o \
-name "*.jpeg" -o \
-name "*.png" \
\) | while read img
do
    webp_file="${img}.webp"

    # Skip if already converted
    if [ -f "$webp_file" ]; then
        echo "Skipping (exists): $webp_file" >> $LOG_FILE
        continue
    fi

    echo "Processing: $img" >> $LOG_FILE

    # Resize and auto-orient safely
    if convert "$img" -auto-orient -resize ${MAX_WIDTH}x\> "$TEMP_FILE" 2>>$LOG_FILE; then
        
        # Convert to WebP using cwebp
        if cwebp -q $QUALITY "$TEMP_FILE" -o "$webp_file" >> $LOG_FILE 2>&1; then
            echo "Created: $webp_file" >> $LOG_FILE
        else
            echo "FAILED cwebp: $img" >> $LOG_FILE
        fi

    else
        echo "FAILED convert (possibly corrupted): $img" >> $LOG_FILE
    fi

    # Cleanup temp file
    rm -f "$TEMP_FILE"

done

echo "----------------------------------------" >> $LOG_FILE
echo "Conversion completed: $(date)" >> $LOG_FILE
echo "----------------------------------------" >> $LOG_FILE

