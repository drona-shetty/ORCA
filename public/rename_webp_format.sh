#!/bin/bash

BASE_DIR="/var/www/orcasia-main/public"

echo "Renaming existing .webp files..."

find "$BASE_DIR" -type f -name "*.webp" ! -name "*.jpg.webp" ! -name "*.jpeg.webp" ! -name "*.png.webp" | while read webp
do
    base="${webp%.webp}"

    # Check for matching original image
    for ext in jpg jpeg png
    do
        if [ -f "${base}.${ext}" ]; then
            newname="${base}.${ext}.webp"

            # Skip if already exists
            if [ -f "$newname" ]; then
                echo "Skipping (already exists): $newname"
                continue
            fi

            echo "Renaming: $webp → $newname"
            mv "$webp" "$newname"
            break
        fi
    done

done

echo "Renaming complete."

