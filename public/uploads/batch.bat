for %%a in ("*.*") do "d:\xampp\htdocs\voices\public\uploads\ffmpeg.exe" -i "%%a" ".\audio\%%~na.mp3"
pause