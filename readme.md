# OD Base : The base of developing WordPress theme.

## OD Base (Olein Design Base)について
WordPressのテーマを趣味・クライアントワークを問わず作る際に、巷でよく利用されているスターターテーマでは「ちょっと規模が大きすぎる」と感じることありませんか？

僕もよく[underscores](http://underscores.me/)を用いて、制作のベースにしたりしていたのですが、素晴らしいスターターテーマなのですが、案件によっては使わなくても良いテンプレートがあったり、結局毎回独自の書き方に変えているようなテンプレートも少なくなく、**削除して書く手間が多いのか、それとも新しく作る手間が多いのか**どっこいどっこいな面も否めませんでした。

であれば、自分の使いやすいスターターテーマを作ってみようということで、じわじわと制作しております。

## ご利用になる際に
scssフォルダ内の_settings.scssファイルに下記の変数が設定されています。使いやすいように変更してご利用ください。

|変数名|用途|
|$page-width|ページ幅（メインコンテンツとサイドバーを合わせた幅）|
|$sidebar-width|サイドバーの幅|
|$bitween-sidebar-content-margin|サイドバー・メインコンテンツ間のマージン|
|$content-width|ページ幅からサイドバーとマージンを差し引いたメインコンテンツ幅|
|$mq-pc|PC表示用のブレイクポイント|
|$mq-tb|タブレット表示用のブレイクポイント|

## 制作で気をつけていること
あくまでも**WordPressテーマ制作のベースに使いやすいもの**という点を大切にしています。

どういう点かというと、

* プラグインに依存しない
* プラグイン導入を前提とした記述をしない
* 初期状態は最低限のスタイリングのみ
* コメントアウトにてよく利用するコードをあらかじめ記載しておく
* よく利用するレイアウトに関してはテンプレートファイルの切り替えで対応できるようにしておく

といった点です。

便利に改良していきたいですが、どうしても万人に便利なものにするには難しいと考えています。ですので、コードを実際にご覧になってご自身に便利そうだと思ったら使って見てください。

## 利用できる機能
* カスタムヘッダー
* カスタム背景
* カスタムメニュー（global navi)

## 最新のスクリーンショット
### ブログトップページ
![最新のスクリーンショット](https://github.com/KojiKuno/od-base/blob/master/screenshot/index.png)

### 記事ページ
![最新のスクリーンショット](https://github.com/KojiKuno/od-base/blob/master/screenshot/single.png)

