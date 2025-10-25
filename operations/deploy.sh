#! /bin/bash
rsync -a --exclude 'logs/' --exclude 'operations/' ./* app@nikc.info:/var/www/nikc.info/
