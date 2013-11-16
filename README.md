MAKEPLAYLIST
============

With this tool you're able to add an entry to your Windows context menu to create m3u-playlists out of music files stored in a folder.

Here's how it works:

1) Put the 3 files makeplaylist.bat, makeplaylist.reg & playlist.php into the same folder somewhere on your PC.
2) Adjust the path in line 7 of makeplaylist.reg to point to your makeplaylist.bat.
3) Double click makeplaylist.reg to add the necessary keys to your registry (needs administrator rights).
4) Right click on any folder containing music and select "Make playlist". This will generate a m3u playlist named after the folder and put it inside the folder. All music files in the folder and any subfolders will be added to the playlist.

Requirements:
* You need to have PHP installed on your system and php.exe added to your PATH.