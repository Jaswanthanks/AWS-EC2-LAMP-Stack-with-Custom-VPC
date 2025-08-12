#!/bin/bash
set -e
systemctl daemon-reload
systemctl enable myapp
systemctl start myapp
