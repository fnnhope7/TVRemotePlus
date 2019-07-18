<img alt="Logo" src="logo.png" width="50%">

# 

PHP / JavaScript 製のテレビのリモート視聴ソフト（いわゆるロケフリ）です  
YouTube やニコニコなどの動画配信サービスの UI を意識した、モバイルフレンドリーなレスポンシブ Web インターフェイスが特徴です  
Twitter と連携してツイートをキャプチャ付きで投稿する機能や、ニコニコ実況のコメントを表示/投稿する機能、字幕の再生機能、録画番組の検索/再生機能なども実装しています

## [ダウンロードはこちら](https://github.com/TVRemotePlus/TVRemotePlus/releases)

## 概要
![Screenshot](screenshot1.png)

※現在 RC 版テスト中です。不具合報告等ありましたら Issue か Twitter @Mc_204_1003 にて受け付けておきます。

スマホ・PC両方においての利用に最適化した使いやすいUIを求め、開発しました。  
一応、コンセプトは「動画配信サイト風の直感的で使いやすいレスポンシブ Web UI 」です。

機能的には TVRemoteViewer_VB と似ている部分がありますが、下記のように TVRemoteViewer_VB にはない機能、逆にこの TVRemotePlus にはない機能もあります。  
また、TVRemotePlus は複数のオープンソースソフトウェアを利用して動作します。単体では動作しません。  
この他、当然ながら **予め、いわゆる TS 抜き環境が導入されている必要があります。** 

基本的にド素人が作った自己満ソフトのおすそ分けです。出来る範囲で不具合修正はしますが、動かなくても知りません。  
また、動けばいいや、程度でかなり強引に実装してしまっているため、色々不具合があるかもしれません…

### 開発動機
「布団でゴロゴロしながらスマホでようつべみたいにテレビとか録画とか見たい」  
「ニコ生みたいにニコニコ実況のコメントを流したいしコメントもしたい」  
「Twitter 実況するの割と手順が煩雑になりがちだし見ながら Twitter で実況したい」  
「折角 Twitter 実況するなら放送画面もキャプチャしてツイートしたい」  
「録画見るときにもコメント流したいしようつべみたいに簡単に見たい（ファイル漁りたくない）」  
「字幕流して放送画面と一緒にキャプチャしてクソリプ画像を量産したい」  

などなど…（不純が過ぎる）

## 機能
![Screenshot](screenshot2.png)

細かなものまで列挙しています。  
（要設定）とあるものは予め設定が必要な機能です。
（予定）とあるものは現在実装出来ていないものの、今後実装する予定のある機能です。  
環境によっては正常に動かない場合もあるかもしれません…

### 放送中・録画番組の視聴
- 基本
  - HLS 形式による動画配信
  - 番組タイトルの表示
  - EDCB の API を利用した番組情報の表示（要設定）
  - EDCB の API を利用した放送中の他チャンネルの番組情報の表示→視聴（要設定）
  - 番組時間の表示
  - チャンネル名の表示
  - 現在時刻表示（時計）
  - 視聴人数の表示
  - PWA対応（ホーム画面に追加することでネイティブアプリのように利用可能）（要設定）
  - basic認証設定（要設定）
  - ストリーム起動監視（予定）
  - ブラウザからの動作設定（予定）
- 動画再生
  - hls.js を利用したストリームのライブ配信
    - hls.jsの再生に対応していない iOS 端末を除き、諸々の互換性を維持するために  
    ブラウザ側で対応している場合にも全て hls.js を利用して再生させるようにしています
    - そのため、若干再生が重いです
  - フルスクリーンでの再生
  - Web フルスクリーンでの再生
  - 動画のスクリーンショットの保存（PC のみ）
  - b24.js を利用した字幕の表示
    - b24.js は EPGStation にて字幕表示に利用されている js 製ライブラリです
      - 後述の DPlayer に組み込んだ状態でお借りしています
    - hls.js を字幕表示に利用する関係で、hls.js も b24.js 対応のものを利用しています
      - そのため hls.js が使えない iOS 端末では字幕表示機能が利用できません
    - QSVEnc では非対応でしたが、バージョン3.24より対応して頂きました（この場で御礼申し上げます）
  - ニコニコ実況のコメントの再生・投稿（後述）（要設定）
  - 配信休止時の「配信休止中…」動画の再生
  - 配信準備時の「配信準備中…」動画の再生
- 動画配信
  - TSTask を利用したテレビ放送の受信
  - ffmpeg 、または QSVEncC でのエンコード
  - チャンネルの設定
  - 動画の画質の設定
  - 字幕データの設定
  - 使用 BonDriver の設定
- 録画番組の再生
  - YouTube 風の視聴動画選択画面
  - 録画番組の並べ替え(新しい順・古い順・名前昇順・名前降順)
  - 録画番組の検索
  - 録画番組リストの更新
    - 更新する事で最新の録画番組がリストに反映されるようになります
  - ffmpeg を利用した録画番組のサムネイルの表示
  - rplsinfo を利用した録画番組のタイトルの表示
  - rplsinfo を利用した録画番組の番組情報の表示
  - rplsinfo を利用した録画番組の番組時間の表示
  - 再生履歴の表示
  - 画質を選択して再生
  - ffmpeg 、または QSVEncC でのエンコード
  - ニコニコ実況の過去ログの再生（要設定）（後述）
  - エンコード動画のダウンロード（予定）

### Twitter へのツイート投稿
- Twitter へのツイート投稿（ TwitterAPI を利用します）（要設定）
  - テレビを見ながらキャプチャ付きで Twitter 実況が可能です
  - 予め config.php に TwitterAPI のコンシューマーキーなどを記入しておく必要があります
  - Twitter ログイン・ログアウト機能
  - ツイートの投稿
  - ハッシュタグ付きツイートの投稿
  - ハッシュタグを1分以内に TwitterAPI 経由で連投するとほぼ確実に Twitter 側からシャドウバンされるため、  
  ハッシュタグ付きツイートをしてから1分以内にハッシュタグ付きツイートをした場合に、  
  ハッシュタグを除去してシャドウバンを防止する機能
  - クリップボード内の画像の貼り付け
    - Ctrl + V で出来ますがあまり意味のない隠し機能です
  - Tab キーによるツイート入力画面のフォーカス
    - これも隠し機能です、動くか微妙
  - 動画のキャプチャ付きツイートの投稿
    - Alt + 1 キーでキャプチャできます
    - Mac の場合は Option + 1 キーです
  - ニコニコ実況を含めた動画のキャプチャ付きツイートの投稿
    - Alt + 2 キーでキャプチャできます
    - Mac の場合は Option + 2 キーです
  - ハッシュタグ以外のツイート文や画像などの一括リセット
    - Alt + 3 キーでリセットできます
    - Mac の場合は Option + 3 キーです
  - 字幕を含めた動画のキャプチャ付きツイートの投稿
    - 字幕表示時のみキャプチャの中に含めます

### ニコニコ実況の再生・投稿
- ニコニコ実況のコメントの再生
  - ニコニコ生放送のようにコメントが動画上に流れます
  - 本家のコメントの色・位置を再現
  - DPlayer を利用したコメントの表示
    - DPlayer は OSS の JS 製多機能動画プレイヤーです
      - TVRemotePlus 向けに諸々かなり改造を加えた上でお借りしています
      - [こちらのリポジトリ](https://github.com/nambuplace/DPlayer)に置いてあります
  - DPlayer を利用したコメントの表示・非表示の切り替え
  - DPlayer を利用したコメントの透明度の切り替え
  - ニコニコ実況の勢いの表示
  - コメント一覧表示（ PC のみ）
    - ニコニコ生放送のようにコメントが一覧で流れていきます
    - 画面に流れるのはウザいがコメントは見たい、という場合におすすめです
    - コメント時間(ストリーム開始時から換算)の表示
    - コメント内容の表示
- ニコニコ実況の過去ログコメントの再生（要設定）
  - 予め config.php にニコニコ動画のメールアドレスとパスワードを記入しておく必要があります
  - 当然ながら録画番組再生時はコメントは出来ません
  - コメントの再生
  - コメント一覧表示（ PC のみ）
    - 過去ログ再生時は一気にコメント一覧にコメントが表示されます
    - コメント時間(動画の最初から換算)の表示
    - コメント内容の表示
- ニコニコ実況へのコメントの投稿（要設定）
  - ニコニコ動画への API ログイン → Cookie 取得
    - 予め config.php にニコニコ動画のメールアドレスとパスワードを記入しておく必要があります
  - コメントの色・位置の指定
  - XMLSocket によるニコニコ実況への投稿

## セットアップ
アーカイブは 64bit 版のみです。  
技術的に 32bit 版も可能ですが、こちら側でアーカイブを作成するのが面倒なためです。（要望があれば公開するかもしれません）

1. Release から最新の TVRemotePlus をダウンロード・解凍し、**Program Files・Users以下以外**のフォルダに配置します。（例: C:\freesoft\TVRemotePlus など）
2. 中の install.bat を実行し、インストーラー通りに進めます。
3. 中の config.php （設定ファイル）を **UTF-8・LFが読み込めるテキストエディタ（メモ帳は出来るだけ避けて下さい）** で開き、内部の設定を自分の環境に合わせ変更します。
4. 変更出来たら、**文字コード UTF-8・改行コード LF** で変更を保存します（ Shift-JIS 等で保存した場合、多分エラー吐きまくって動きません）。
5. 下の「 TwitterAPI 開発者アカウントの取得について」を参考にし、Twitter API アカウントを取得し、アプリケーションを作成します。（既に Twitter API アカウントを持っている方、ツイート投稿機能を利用しない方は適宜ステップを飛ばして下さい。）  
その後、config.php を上の手順で開き、作成したアプリケーションのコンシューマーキー等を入力して下さい。
6. TVRemotePlusのあるフォルダ/bin/TSTask/BonDriver/ に、いつも TVTest 等で使用している BonDriver を入れてください。
7. 設定を終えたら、デスクトップに追加された赤い羽根のショートカットをダブルクリックし、Web サーバーを起動します（赤い羽根のアイコンの真っ黒なウインドウが立ち上がりますが、利用する際は立ち上げたままにしておいてください（最小化するのは構いません）・起動する際にファイアウォール云々が出た場合、許可しておいてください）。
8. ウインドウがすぐに閉じてしまう場合、何らかの原因で Web サーバーが起動できていません。コマンドプロンプトから　bin/Apache/bin/httpd.exe を起動させ、エラーログを確認してください。
9. ブラウザの URL 欄に http://( TVRemotePlus の動いている PC のローカル IP アドレス):8000/ と入力し、TVRemotePlus の Web アプリへアクセスします。
10. 後は適当に使ってください。（もしかするとエラーが出て画面が乱れるかもしれませんが、恐らくバグか設定ミスによるものだと思います、Issue か Twitter @Mc_204_1003 にて不具合報告などは受け付けておきます）

## PWAについて
PWA（Progressive Web Apps）とは、Webアプリをローカルアプリのように利用できる仕組みのことです。TVRemotePlus は、PWA に対応しています。  
しかし、PWA を利用するためには、HTTPS 通信が必須です。そのため、インストール時に予め HTTPS 通信用の自己署名証明書（いわゆるオレオレ証明書）を作成・有効にしてあります。  
自己署名証明書を信頼させるためには、端末に自己署名証明書自体をインストールさせておく必要があります。
また、PWA は Android は Chrome 、iOS では Safari が対応しています。

### インストール手順
 - まず、PWAを利用したいスマホ等で http://( TVRemotePlus の動いている PC のローカル IP アドレス):8000/server.crt にアクセスし、証明書をダウンロードします。
 - その後、ダウンロードした証明書を開き、インストールします（この時、表示が「CA 証明書」になっているかどうかを確認してください）。
 - インストール後、Android であれば Chrome 、iOS であれば Safari が立ち上がっていれば一旦タスクを切ってから起動させます。
 - https://( TVRemotePlus の動いている PC のローカル IP アドレス):8100/ にアクセスし、鍵マークが正常についていれば証明書の導入は完了です。
 - ホーム画面に追加すると、ネイティブアプリのように利用できるようになるはずです。

## TwitterAPI 開発者アカウントの取得について
長くなるため別ページにまとめています。  
[Twitter_Develop.md](Twitter_Develop.md)

## 注意事項
 - 配信準備中…からストリームにうまく移らない・再生が止まった などの時は、時計表示をクリック・タップしてください。リロードされます。
 - TSTask は後述の無理やり taskkill させる関係上、クライアントプログラムを起動させないオプションで起動させています。
   - 立ち上がってるか心配な場合、タスクマネージャーで調べるか別途 TSTaskCentre を起動させるといいとおもいます。
   - ffmpeg・QSVEnc は独立ウインドウにて最小化した状態で起動します。
 - ニコニコ実況にコメントを投稿する場合、数秒遅延している事を念頭に入れた上でコメントしてください…(それほど気にならないとは思いますが)
 - 同梱している動作に必要なソフトウェア（後述）は全て TVRemotePlus 向けに設定やフォルダ構成等を最適化してあります。
 - 端末のスペックにもよりますが、基本的に処理が重たいです（コメント表示オン時は特に）。コメントが多くなると固まる場合もあります…

## 既知の問題
 - ストリームが起動しているかどうかを監視する機能を実装出来ていないため、ストリーム起動に失敗したかは PC のエンコーダーのログを見ない限り分からない
 - ストリームを終了させる際、ffmpeg・QSVEnc・TSTask 等を taskkill で強制終了させる雑な仕様なので、ストリーム起動時にffmpegなど別のソフトを利用している場合に突然ブッチされる
   - php から exec() でコマンドを非同期で叩いており、プロセス管理(？)が出来ていないためです…
   - 本当は プロセス管理用 exe でも作るべきなんでしょうけど…

## 利用ソフトウェア
動作に必要なソフトウェアをお借りしています。この場で御礼申し上げます。  
全て配布アーカイブの中に組み込んでいますが、一部設定が必要な箇所があります。  
また、QSVEncC を利用する場合は Intel QSV に対応した CPU が必要です。

- Apache（2.4.39・Webサーバ）
- php（7.3.6・実行環境）
- TSTask（0.2.0(patch)・テレビ放送の受信、UDP 送信に利用）
- rplsinfo（1.5・TSファイル内の番組情報取得に利用）
- ffmpeg（4.1.1・UDP 受信→エンコードに利用）
- QSVEncC（3.24・UDP 受信→ハードウェアエンコードに利用）

## 動作環境
  - サーバー：**Windows7 以上（のはず）・64bit**
    - 32bit でも動くとは思いますが、恐らく 64bit の環境が殆どだと思います。
    - そのため、配布アーカイブに同梱されているソフトは全て 64bit 版で組み込んでいます。
  - クライアント：**最新の Chrome・Firefox・Safari など**
    - **Chrome を強く推奨します。**
    - Opera・Vivaldi などはブラウザエンジンが Chrome（ Blink ）なので Chrome とみなします。
    - 当然ながら **IE と Edge はサポートしていません。**（滅びろ） 
    - iOS 端末ではブラウザエンジンが Safari 以外利用できないらしく、  
    一部正常に動作しない機能があります。
      - iOS 版 Chrome・Firefox の内部ブラウザエンジンは Safari です。
    - キャプチャ付きツイートの投稿機能は、**Android 版 Firefox・Mac 版 Safari では対応していません。**（ブラウザのバグによるエラーでキャプチャに失敗します）
      - 動画のキャプチャはブラウザの仕様に依存する上、ブラウザ側のバグが非常に多いため、基本的に最新の Chrome を利用してください。
    - Firefox では、コメント描画が途中で途切れます。
      - ブラウザの仕様らしいです。（そのうち修正予定です）
    - 古い Android 端末では、コメント描画が重くなる場合があります。
      - このため、コメント描画中にキャプチャする場合、キャプチャ画像の取得に時間がかかる場合があります。
      - 最新の端末でも、（スペックにもよりますが）コメントが多い場合はキャプチャ画像の取得に時間がかかる場合があります。

## 動作確認
  - サーバー：Windows7 Professional 64bit
    - 首都圏での利用を前提で開発しています。
      - （確かめようがないのですが）もしかすると、地方では一部動作しない箇所があるかもしれません…
    - CS はこちらに環境がないので基本的に動作対象外とさせて頂きます。（ソースを弄れば出来るかもしれません）
  - クライアント：
    - Windows・Mac
      - Chrome  
    - Android
      - Chrome
      - Opera  
    - iOS
      - Safari
      - Chrome  


## その他
このソフトを利用して起こったいかなる不利益も、当方は一切の責任を負いかねます。あくまで自己責任にて利用してください。  
改変・再配布等はお好きにどうぞ（改変ソースは個人的に取り入れる事があります）。  
Issue か Twitter @Mc_204_1003 にて不具合報告などは受け付けておきます。

## License
[MIT Licence](LICENSE.txt)