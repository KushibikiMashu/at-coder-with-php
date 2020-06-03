# 環境構築
AtCoder用にPHPのバージョンは7.4.4に指定しています。

レポジトリをクローンします。

```shell script
$ git clone https://github.com/KushibikiMashu/at-coder-with-php.git
$ cd at-coder-with-php
```

Dockerのイメージをビルドし、コンテナを立ち上げます。コンテナを実行するタイミングでPHPUnitを実行します。

```shell script
$ docker build -t atcoder/php:latest .
$ docker run --rm -v $(pwd):/home atcoder/php
```

サンプルテストケースを2件用意しているため、実行結果は下記のようになります。

PHPUnitのバージョンは9系です。

```
PHPUnit 9.0.0 by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: 00:00.489, Memory: 4.00 MB

OK (2 tests, 2 assertions)
```

特定のテストのみを走らせる場合は、実行するテストに`@group`アノテーションを付与し、--group=グループ名`をオプションに指定してコマンドを実行してください。

```shell script
[~/at-coder-with-php] docker run --rm -v $(pwd):/home atcoder/php --group=100A
PHPUnit 9.0.0 by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: 00:00.489, Memory: 4.00 MB

OK (2 tests, 2 assertions)
```

# 変数の中身をチェックする
コンテナにXdebugをインストールしています。Xdebugを使用する場合は、PhpStormやVSCodeなどの設定をローカルで行ってください。

Xdebugの設定は`config/php.ini`に記載しています。

その他IDEの設定や、PHPUnitの使い方は公式サイトを確認してください。
