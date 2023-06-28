## 概要

誰でもすぐ予約受付や、その予約ができるWebアプリです。

## ローカル実行

### 準備

- Dockerをインストールすること。  
- docker-composeをインストールすること。

### コンテナ起動

```bash
$ cd /{任意のディレクトリ}/simple_reservation
$ docker compose -f docker-compose.local.yml up -d
$ docker compose -f docker-compose.local.yml ps # コンテナ一覧が表示されるのを確認
```

### 設定

```bash
$ docker compose -f docker-compose.local.yml exec app bash
$ cd simple_reservation
$ cp .env.example .env
$ php artisan migrate
```
→　http://localhost:8000 でアクセスできます。

## コンテナ内のコマンド実行

PHP
```bash
$ docker compose -f docker-compose.local.yml exec app bash
```

Nginx
```bash
$ docker compose -f docker-compose.local.yml exec nginx bash
```

MySQL
```bash
$ docker compose -f docker-compose.local.yml exec db bash
$ mysql -u root -p
```
