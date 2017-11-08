#! /bin/bash
mysql -uwordpress -pwordpress -h db -e "CREATE DATABASE wordpress"
mysql -uwordpress -pwordpress -h db wordpress < dump.sql
