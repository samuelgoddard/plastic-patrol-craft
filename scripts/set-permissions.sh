#!/bin/bash
echo "Setting permissions"
chown -R deploy:www-data current/craft/storage
chmod -R 774 current/craft/storage
