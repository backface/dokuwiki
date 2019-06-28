#!/bin/sh

rsync -avz \
	--exclude=data \
	./ stwst.servus.at:/var/www/html/projects.stwst.at/lib/tpl/stwst/
	
#rsync -avz  ./farm/ stwst.servus.at:/var/www/html/farm
