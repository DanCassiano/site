@echo off
title APP SYNC

browser-sync start --proxy "localhost/site" --files "assets/**/*, view/dashboard/**" "c:/wamp/www/site/"