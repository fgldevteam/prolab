#!/bin/bash
for f in *.mp4
do
  echo "Processing $I file..."
  ffmpeg -i "${f}" -r 1 -vframes 1 -ss 00:00:20 "${f}".jpg

  #extract video length
  ffmpeg -i "${f}" 2>&1 | grep "Duration" | cut -d ' ' -f 4 | sed s/,//

done