<?php

// ******** 設定 ********

//タイムゾーンを日本に
date_default_timezone_set('Asia/Tokyo');

// べースディレクトリ(フォルダ)
$base_dir = str_replace('\\', '/', dirname(__FILE__)).'/';

// TVRemotePlus 内で利用する変数を読み込み
require_once (dirname(__FILE__).'/require.php');

// ↓↓↓↓↓ ここから編集箇所 ↓↓↓↓↓


// ***** デフォルト設定 *****

// デフォルトとはなっていますが、変更必須な設定もあります、必ず目を通してください

// フォルダのパスを記述するときは「\」(バックスラッシュ)ではなく必ず「/」(スラッシュ)を利用してください
// 動作環境である php は元々 Unix 系環境ベースのため、バックスラッシュだと動作がおかしくなる場合があります

// また、数値以外は必ず「'」(シングルクォーテーション)で囲んでください
// 囲まない場合・左右どちらかの「'」が欠けている場合は動作がおかしくなる場合があります
// また、「`」(バッククオート)は別物です、ご注意ください

// デフォルトの動画の画質
$quality_default = '1080p'; // 1080p-high・1080p・810p・720p・540p・360p・240P から選択

// デフォルトのエンコーダー
// ffmpeg が通常のエンコーダー(ソフトウェアエンコード)、
// QSVEncC・NVEncC・VCEEncC がハードウェアエンコーダーです
// QSVEncC・NVEncC・VCEEncC の方が CPU を消費しない・エンコードが早いためおすすめですが、
// QSVEncC は Intel 製の一部の GPU 、NVEncC は nvidia 製の GPU 環境、VCEEncC は AMD の Radeon GPU でしか利用できません
$encoder_default = 'QSVEncC'; // ffmpeg・QSVEncC・NVEncC・VCEEncC から選択

// デフォルトでライブ再生時に字幕データをストリームに含めるか(含める… true 含めない… false )
// 字幕データを配信するストリームに含めると、字幕をプレイヤー側で表示出来るようになります
// ただし、字幕を含めると ffmpeg の場合はまれにエラーを吐いてストリームが開始出来ない場合があったり、
// 字幕の無い番組の場合やCMに入った場合等、一部のセグメントのエンコードが遅れ、ストリームがカクつく場合があります
// 字幕自体は個々にプレイヤー側で表示/非表示を切り替え可能です
$subtitle_default = 'false';

// デフォルトでファイル再生時に字幕データをストリームに含めるか(含める… true 含めない… false )
// 字幕データを配信するストリームに含めると、字幕をプレイヤー側で表示出来るようになります
// ファイル再生時は基本的にライブ再生時のようなエンコードの問題は起こりません
// ただ、ごく稀に字幕付きでエンコードした事で途中でエンコードが失敗する事もあるため、念の為設定出来るようにしています
// デフォルトはオンにして、問題が起きたときのみオフにすることを推奨します
// 字幕自体は個々にプレイヤー側で表示/非表示を切り替え可能です
$subtitle_file_default = 'true';

// BonDriver は (TVRemotePlusをインストールしたフォルダ)/bin/TSTask/BonDriver/ に配置してください
// デフォルトの BonDriver (地デジ用・変更必須)
// 例：$BonDriver_default_T = 'BonDriver_Proxy_T.dll';
$BonDriver_default_T = '';

// デフォルトの BonDriver (BS用・変更必須)
// 例：$BonDriver_default_S = 'BonDriver_Proxy_S.dll';
$BonDriver_default_S = '';

// 録画ファイルのあるフォルダ (変更必須)
// ファイル再生の際に利用します
// ネットワークドライブ内のフォルダは認識できないかもしれません
// 例：$TSfile_dir = 'E:/TV-Record/';
$TSfile_dir = '';

// EDCB Material WebUI (EMWUI) の API がある URL を指定します (番組表取得で利用します・変更必須)
// この機能を利用する場合、EDCB_Material_WebUI を導入しておいてください(APIを番組表取得で利用します)
// http://(EDCB(EMWUI)の動いてるPCのローカルIP):5510/api/ のように指定します
// 例：$EDCB_http_url = 'http://192.168.1.11:5510/api/';
$EDCB_http_url = '';

// リバースプロキシからアクセスする場合の URL を指定します
// リバースプロキシからのアクセス時のみ利用されます
// リバースプロキシからのアクセスをしない場合は空のままで OK です
// また、リバースプロキシから Twitter 投稿機能を利用する場合は、
// ここで指定した URL を Twitter 開発者アカウントの Callback URLs に追加しておいてください
// 例：$reverse_proxy_url = 'https://example.com/tvrp/';
$reverse_proxy_url = '';

// リバースプロキシからのアクセス時に環境設定を非表示にする
// (非表示にする… true 非表示にしない（表示する）… false )
$setting_hide = 'false';

// 配信休止中…・配信準備中… の動画の音楽を消すかどうか
// (音楽を消す… true 音楽を流す(消さない)… false )
$silent = 'true';

// 再生履歴を何件まで保持するか
// デフォルトは10件です
$history_keep = 10;

// TVRemotePlus のアップデートを確認するか
// 鬱陶しい場合・TVRemotePlusの読み込みが遅い場合はオフにしてください
$update_confirm = 'true';


// ***** ニコニコ実況関連設定 *****
// ニコニコのメールアドレスとパスワードは、ニコニコ実況への投稿・過去ログの取得に必須です

// ニコニコにログインする際のメールアドレス (変更必須)
// 例：$nicologin_mail = 'example@gmail.com';
$nicologin_mail = '';

// ニコニコにログインする際のパスワード (変更必須)
// 例：$nicologin_password = '12345678';
$nicologin_password = '';


// ***** Twitter 関連設定 *****

// ハッシュタグ付きツイートを連投した際に何秒以内ならハッシュタグを消してシャドウバンを回避するか
// Twitter の規制が厳しいため、60秒以内(？)にハッシュタグつけて連投するとシャドウバン(Search Ban)されるみたいです
// その対策用です、鬱陶しいのであれば0にすればオフになります
$tweet_time = 60;

// 画像付きツイートを投稿する際に一度アップロードする画像の保存フォルダ
// デフォルトの upload/ に設定すると、(TVRemotePlusをインストールしたフォルダ)\htdocs\tweet\upload\ に保存されます
// 例：$tweet_upload = 'E:/TV-Capture/';
$tweet_upload = 'upload/';

// 画像付きツイートを投稿する際に一度アップロードした画像を削除するかどうか
// 削除するなら true 、削除しないなら false です
$tweet_delete = 'false';


// ***** Twitter API関連 *****
// TVRemotePlus からツイートを投稿するのに必須です
// 別途、TwitterAPI の開発者アカウントを取得する必要があります

// コンシューマーキー(変更必須)
// 例：$CONSUMER_KEY =  'XXXXXXXXXXXXXXXXXXXXXXXXX';
$CONSUMER_KEY =  '';

// コンシューマーシークレットキー(変更必須)
// 例：$CONSUMER_SECRET = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
$CONSUMER_SECRET = '';


// ***** basic 認証設定 *****
// basic 認証を利用する場合に設定してください

// basic 認証を利用するかどうか(利用する… true 利用しない… false )
$basicauth = 'false';

// basic 認証の際のユーザー名(変更必須)
// 例：$basicauth_user = 'user';
$basicauth_user = 'user';

// basic 認証の際のパスワード(変更必須)
// 例：$basicauth_password = 'password';
$basicauth_password = 'password';


// ***** その他の設定 *****
// よく分からない方はいじる必要はありません

// ストリーム開始設定後の画面を表示せずに再生画面へリダイレクトするか
// (リダイレクトする… true リダイレクトしない… false )
$setting_redirect = 'true';

// UDP 送信時の開始ポート番号
// エンコードソフトが落ちてしまう場合、ポートがバッティングしている可能性が高いです。
// その場合は、ここの値を空いているポートに変更してください。
$udp_port = 8201;

// HLS セグメントあたりの秒数
// 基本は変える必要はありませんが、外部から視聴する場合でネットワークが不安定な場合、
// 値を 5(秒) や 10(秒) にすることで、安定して再生できる場合があります(小数点はエラーになります)
$hlslive_time = 1; // ライブ再生時 デフォルト: 1(秒)
$hlsfile_time = 5; // ファイル再生時 デフォルト: 5(秒)

// ライブ再生時に HLS プレイリストに載せるセグメントの個数
// (ファイル再生時は全てのセグメントをリストに載せています)
// 基本は変える必要はありませんが、外部から視聴する場合でネットワークが不安定な場合、
// 値を 5(個) や 10(個) にすることで、安定して再生できる場合があります(小数点はエラーになります)
$hlslive_list = 4; // デフォルト: 4(個)

// TSTask を強制終了させるかどうか
// 一部の環境にて TSTask がうまく終了しない場合用の設定です(基本は変える必要はありません)
// 強制終了させる場合は true にしてください(デフォルトは false (通常終了)です)
$TSTask_shutdown = 'false';


// ↑↑↑↑↑ 編集箇所ここまで ↑↑↑↑↑

