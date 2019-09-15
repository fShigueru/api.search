#!/usr/bin/env bash

touch .env
echo "PROJECT_NAME=api.restaurant.search" >> .env

docker network create hackathon

make up

cd src

export fileid=119yBzn27GMA7KhXnXKu2ez-EF4vj3ZOP
export filename=.env

wget -O $filename 'https://docs.google.com/uc?export=download&id='$fileid

cd ..

make composer_install

make down

cd .data/

chown -R 1000:root elasticsearch

chmod 777 -R elasticsearch

make up