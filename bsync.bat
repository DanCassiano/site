@echo off
title APP SYNC

browser-sync start --proxy "localhost/site" --files "assets/**/*, view/**" "c:/wamp/www/site/"