@echo off
echo nazwa pliku
set /p plik=">>"
echo komentarz
set/p kom=">>"
git add %plik%
git commit -m "%kom% %date%"
git push