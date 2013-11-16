@echo off
cd %1
php %~dp0playlist.php %1 > "%~nx1.m3u"