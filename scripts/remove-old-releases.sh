#!/bin/bash
echo "Removing old releases"
cd /var/www/henley.ac.uk/releases && ls -t | tail -n +6 | xargs rm -rf
