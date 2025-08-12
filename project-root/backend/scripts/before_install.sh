#!/bin/bash
set -e
echo "Stopping old app if running..."
systemctl stop myapp || true
