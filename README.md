# bike-share
A concept for a bike sharing application
自転車シェアリングのコンセプトプロジェクトです。

### Installation　インストール方法

[ English ]
1. Clone the repository.  
2. In the terminal, open the folder.
3. Run composer install.  
4. Run npm install.
5. Migrate the tables using php artisan migrate.
6. Run php artisan tinker.
7. Inside tinker, run create('App\Bike', [], 15).  Note:  This won't work if MySQL is not installed.

[ 日本語 ]
1. レポシトリーをクローンする。
2. ターミナルからフォルダーを開く。
3. composer installを実行する。
4. npm installを実行する。
5. php artisan migrateを使ってテーブルをマイグレーションする。
6. php artisan tinkerを実行する
7. Tinkerの中で create('App\Bike, [], 15)を実行する。注意：MySQLがインストールされてないと実行できません。
