# 環境構築
レポジトリをクローンします。

```shell script
$ git clone https://github.com/KushibikiMashu/at-coder-with-php.git
$ cd at-coder-with-php
```

Dockerのイメージをビルドし、コンテナを立ち上げます。コンテナを実行するタイミングでPHPUnitを実行します。

```shell script
$ docker build -t atcoder/php:latest .
$ docker container run --rm -v $(pwd)/tests:/home/tests atcoder/php
```

サンプルテストケースを3件用意しているため、実行結果は下記のようになります。

```
PHPUnit 6.5.14 by Sebastian Bergmann and contributors.

...                                                                 3 / 3 (100%)

Time: 152 ms, Memory: 4.00MB

OK (3 tests, 3 assertions)
```

特定のテストのみを走らせる場合は、`--group=グループ名`をコマンドに追加してください。

```shell script
[~/at-coder-with-php] docker container run --rm -v (pwd)/tests:/home/tests atcoder/php --group=100A
PHPUnit 6.5.14 by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: 94 ms, Memory: 4.00MB

OK (2 tests, 2 assertions)
```

# 変数の中身をチェックする
コンテナにXdebugをインストールしています。Xdebugを使用する場合は、PhpStormやVSCodeなどの設定をローカルで行ってください。

Xdebugの設定は`config/php.ini`に記載しています。

その他IDEの設定や、PHPUnitの使い方は公式サイトを確認してください。