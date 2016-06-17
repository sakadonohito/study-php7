# Study PHP7

PHP7を学習するついでにPHPの基礎復習  
というかPHPの基礎

## Step1: composer

composerをインストール

```
curl -sS https://getcomposer.org/installer | php
```

vendorディレクトリが作成される。

## Step2: namespaceを試す

PHP5.3以降namespaceを定義して使える。
studyディレクトリを作成し、その中にstep2.phpを作成し
namespaceはStudy、class名はStep2中身は適当につくる。

出力用のstudy/zatsuyou.phpを作成。  
step2.phpをrequire_onceしてuse句でStudy\Step2を指定。
そうしないとnamespace外から参照できない。

## Step3: autoload.phpを試す

昨今では、最初にautoload.phpのみをrequire_onceして、以後のクラスの読み込みはautoloaderに任せる。

### step3.phpの作成

study/step3.phpを作成し、autoloadを読み込み、Step2クラスを扱う処理を作成する。

composer.jsonにautoloadの項目を追加

```
{
	"require-dev": {
		"phpunit/phpunit": "5.4.*"
	},
	"autoload": {
		"psr-4": {
			"Study\\": "study/"
		}
	}
}
```

composer更新する
```
php ./composer.phar dump-autoload
```

autoload.phpをそのまま使うにあたり注意点は、クラス名とファイル名を合わせること。
大文字小文字も合っていないと読み込まない。

Step3.php内部ではrequireしていないのにStep2を扱えているのが分かる。

## Step4: phpunitを試す。

testディレクトリを作成

composer.jsonを編集。PHP7に対応しているバージョンのPHPUnitを入れる。
開発環境でのみ必要なのでrequire-devで記述する。

```
#composer.json
{
	"require-dev": {
		"phpunit/phpunit": "5.4.*"
	}
}
```

インストール
```
./composer.phar install --dev
```

- testディレクトリを作成
- test/bootstrap.phpを作成。autoload.phpをrequireする。
- test/Step4Test.phpを作成。
- test/phpunit.xmlを作成する。

```
<?xml version="1.0"?>
<phpunit
        bootstrap=".bootstrap.php"
        colors="true"
        convertErrorsToExceptions="true"
        convertNoticesToExceptions="true"
        convertWarningsToExceptions="true"
        verbose="true"
        stopOnFailure="true"
        processIsolation="false"
        backupGlobals="false"
        syntaxCheck="true"
        >
    <testsuite name="tests">
        <directory>./</directory>
    </testsuite>
</phpunit>
```

testディレクトリに移動し
```
../vendor/bin/phpunit
```

これでカレントにあるphpunit.xmlを読み込んでphunit実行になる。

## StepX: MVCっぽい感じを試す

### ディレクトリを作成

- public
- app
  - controllers
  - models
  - views
  
 ### index.phpの作成
 
autoload.phpをrequire_onceして適当にechoするindex.phpをpublic配下に作成。
