#!/bin/bash

BASE_DIR="/var/www/orcasia-main/public"

echo "Deleting old standalone .webp files..."

find "$BASE_DIR" -type f -name "*.webp" \
! -name "*.jpg.webp" \
! -name "*.jpeg.webp" \
! -name "*.png.webp" | while read file
do
    echo "Deleting: $file"
    rm -f "$file"
done

echo "Cleanup completed."

