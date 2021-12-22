デザインカンプ(Figma)
https://www.figma.com/file/rldThrJS4bw9P6H9rpfBqE/%E6%8C%AF%E3%82%8A%E8%BF%94%E3%82%8A?node-id=0%3A1

ER図(droeIo)
https://drive.google.com/file/d/1M0Kx2b2zNTPlXSRWHPvxKcmiYCtXYRHM/view


# posse_event_develop
POSSEアプリをテック局で作る

■注意
新規、ユーザーはパスワードがpassword0になっているので、すぐにパスワードを変えるようにしてください


■POSSEアプリを修正したい人へ

いつも通りgit cloneをしたらevent.posse-ap.comディレクトリで以下のコマンドを実行してください。１行１行実行してね。

docker-compose build --no-cache

docker-compose up -d

docker exec -it eventposse-apcom_phpfpm_1 bash

composer install

php artisan migrate
php artisan db:seed

終わったらexitと打てば普通のターミナルに戻ります。

これらを全てした上でlocalhostにいく
chromeのリンク書くところにlocalhostって入れてもらえれば大丈夫です！

ログインしたい場合は
email：test@com
password:password1

以上。みんなでいいアプリケーションにしましょう！
