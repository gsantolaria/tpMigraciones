#!/bin/bash

docker compose exec app composer create-project --prefer-dist yiisoft/yii2-app-basic .
docker compose exec app composer --ignore-platform-req=php update
