#!/bin/bash

BASE_DIR="/var/www/orcasia-main/public"

echo "Verifying WebP pairs..."
echo "---------------------------------"

missing=0
total=0

find "$BASE_DIR" -type f \( \
-name "*.jpg" -o \
-name "*.jpeg" -o \
-name "*.png" \
\) | while read img
do
    total=$((total+1))
    webp_file="${img}.webp"

    if [ ! -f "$webp_file" ]; then
        echo "Missing WebP: $img"
        missing=$((missing+1))
    fi
done

echo "---------------------------------"
echo "Verification completed."

