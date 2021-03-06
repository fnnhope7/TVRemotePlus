<?php 

// TVRemotePlus 内部で読み込む定義ファイルです
// 基本的に変更する必要はありません
// 変更すると動作しなくなるものも含まれています

// ***** 定義 *****

//タイムゾーンを日本に
date_default_timezone_set('Asia/Tokyo');

// べースディレクトリ(フォルダ)
$base_dir = str_replace('\\', '/', dirname(__FILE__)).'/';

// バージョン
$version = file_get_contents(dirname(__FILE__).'/data/version.txt');

// HTTPSアクセスかどうか
if (!empty($_SERVER['HTTPS'])){
	$scheme = 'https://';
	$http_port = @$_SERVER['SERVER_PORT'] - 100;
	$https_port = @$_SERVER['SERVER_PORT'];
} else {
	$scheme = 'http://';
	$http_port = @$_SERVER['SERVER_PORT'];
	$https_port = @$_SERVER['SERVER_PORT'] + 100;
}

// HTTPホスト
// リバースプロキシからかどうか判定
if (isset($_SERVER['HTTP_X_FORWARDED_HOST'])){
	$reverse_proxy = true;
    $http_host = @$_SERVER['HTTP_X_FORWARDED_HOST'];
// 通常のアクセス
} else {
	$reverse_proxy = false;
    $http_host = @$_SERVER['HTTP_HOST'];
}


// ***** ファイルパス *****

// サイト名
$site_title = 'TVRemotePlus';

// サイトのベース URL
$site_url = @$scheme.$http_host.'/';

// Twitter API のコールバック URL
$OAUTH_CALLBACK = $site_url.'tweet/callback.php';

// アイコンのパス
// htdocs からのパス
$icon_file = '/files/TVRemotePlus.svg';

// BonDriver のあるディレクトリ(フォルダ)
// デフォルトは TSTask のあるフォルダ/BonDriver/ フォルダです
$BonDriver_dir = $base_dir.'bin/TSTask/BonDriver/';

// セグメントを一時的に保管するフォルダのパス
// 変更すると作動しなくなります
// HDD など別のドライブに変更したい場合は、Windows のシンボリックリンク機能を利用して下さい
$segment_folder = $base_dir.'htdocs/stream/';

// config.php のパス
$tvrp_conf_file = $base_dir.'config.php';

// ファイル情報保存ファイルのパス
$infofile = $base_dir.'htdocs/files/fileinfo.json';

// 再生履歴保存ファイルのパス
$historyfile = $base_dir.'htdocs/files/history.json';

// 設定ファイルのパス
$inifile = $base_dir.'data/setting.json';

// コメント設定ファイルのパス
$commentfile = $base_dir.'data/comment.json';

// ニコニコのログイン Cookie 保存ファイルのパス
$cookiefile = $base_dir.'data/nico.cookie';

// ツイートのタイムスタンプ記録ファイルのパス
$tweet_time_file = $base_dir.'data/tweet_time.txt';

// オフライン時の m3u8 のパス
$offline_m3u8 = $base_dir.'data/offline.m3u8';
$offline_silent_m3u8 = $base_dir.'data/offline_silent.m3u8';

// スタンバイ時の m3u8 のパス
$standby_m3u8 = $base_dir.'data/standby.m3u8';
$standby_silent_m3u8 = $base_dir.'data/standby_silent.m3u8';

// .htaccess のパス
$htaccess = $base_dir.'htdocs/.htaccess';

// .htpasswd のパス
$htpasswd = $base_dir.'htdocs/.htpasswd';


// ***** 各種exeファイルのパス *****

// TSTask の名前とパス
$tstask_exe = 'TSTask-tvrp.exe';
$tstask_path = $base_dir.'bin/TSTask/'.$tstask_exe;

// rplsinfo の名前とパス
$rplsinfo_exe =  'rplsinfo-tvrp.exe';
$rplsinfo_path =  $base_dir.'bin/'.$rplsinfo_exe;

// ffmpeg の名前とパス
$ffmpeg_exe =  'ffmpeg-tvrp.exe';
$ffmpeg_path = $base_dir.'bin/ffmpeg/'.$ffmpeg_exe;

// ffprobe の名前とパス
$ffprobe_exe =  'ffprobe-tvrp.exe';
$ffprobe_path = $base_dir.'bin/ffmpeg/'.$ffprobe_exe;

// QSVEncC の名前とパス
$qsvencc_exe = 'QSVEncC-tvrp.exe';
$qsvencc_path =  $base_dir.'bin/QSVEncC/'.$qsvencc_exe;

// NVEncC の名前とパス
$nvencc_exe = 'NVEncC-tvrp.exe';
$nvencc_path =  $base_dir.'bin/NVEncC/'.$nvencc_exe;

// VCEEncC の名前とパス
$vceencc_exe = 'VCEEncC-tvrp.exe';
$vceencc_path =  $base_dir.'bin/VCEEncC/'.$vceencc_exe;


// ***** 設定読み込み *****

// config.php を読み込む
require_once (dirname(__FILE__).'/config.php');

// リバースプロキシからのアクセス時はOAUTH_CALLBACKを差し替える
if ($reverse_proxy){
	$OAUTH_CALLBACK = rtrim($reverse_proxy_url, '/').'/tweet/callback.php';
}
