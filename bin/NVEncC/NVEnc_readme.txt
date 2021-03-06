---------------------------------------------------


	NVEnc.auo / NVEncC
	 by rigaya

---------------------------------------------------

NVEnc.auo は、
NVIDIAのNVEncを使用してエンコードを行うAviutlの出力プラグインです。
NVEncによるハードウェア高速エンコードを目指します。

【基本動作環境】
Windows 7,8,8.1,10 (x86/x64)
Aviutl 0.99g4 以降
NVEncが載ったハードウェア
  NVIDIA製 GPU GeForce Kepler世代以降 (GT/GTX 6xx 以降)
  ※GT 63x, 62x等はFermi世代のリネームであるため非対応なものがあります。
NVEnc 0.00 NVIDIA グラフィックドライバ 334.89以降
NVEnc 1.00 NVIDIA グラフィックドライバ 347.09以降
NVEnc 2.00 NVIDIA グラフィックドライバ 358   以降
NVEnc 2.08 NVIDIA グラフィックドライバ 368.69以降
NVEnc 3.02 NVIDIA グラフィックドライバ 369.30以降
NVEnc 3.08 NVIDIA グラフィックドライバ 378.66以降
NVEnc 4.00 NVIDIA グラフィックドライバ 390.77以降
NVEnc 4.31 NVIDIA グラフィックドライバ 418.81以降
NVEnc 4.51 NVIDIA グラフィックドライバ 436.15以降


【NVIDIA CORPORATION CUDA SAMPLES EULA のライセンス規定の準拠表記】
本プログラムは、NVIDA CUDA Samplesをベースに作成されています。
すなわちサンプルコードをベースとする派生プログラムであり、サンプルコードを含みます。
“This software contains source code provided by NVIDIA Corporation.”

【tinyxml2の使用表記】
本プログラムは、tinyxml2を内部で使用しています。
http://www.grinninglizard.com/tinyxml2/index.html

【NVEnc 使用にあたっての注意事項】
無保証です。自己責任で使用してください。
NVEncを使用したことによる、いかなる損害・トラブルについても責任を負いません。

【NVEnc 再配布(二次配布)について】
このファイル(NVEnc_readme.txt)と一緒に配布してください。念のため。
まあできればアーカイブまるごとで。

【NVEnc 使用方法 (簡易インストーラ使用)】
付属の簡易インストーラを使用する方法です。
手動で行う場合は、後述のNVEnc 使用方法 (手動)を御覧ください。

1. ダウンロードしたNVEnc_1.xx.zipを一度解凍します。

2. auo_setup.exeをダブルクリックし、実行します。
   基本的に自動で必要なもののダウンロード・インストールが行われます。

3. 途中でAviutl.exeのあるフォルダ場所を聞かれますので、
   右側のボタンをクリックしてAviutlのフォルダを指定してください。
   
4. インストールが完了しました、と出るのをお待ちください。


【NVEnc 使用方法 (手動)】
1. 
以下のものをインストールしてください。

Visual Studio 2015 の Visual C++ 再頒布可能パッケージ (x86) 
https://www.microsoft.com/ja-jp/download/details.aspx?id=48145

.NET Framework 4.5がインストールされていない場合、インストールしてください。
通常はWindows Updateでインストールされ、またCatalyst Control Centerでも使用されているため、
インストールの必要はありません。

.NET Framework 4.5 (x86)
http://download.microsoft.com/download/E/2/1/E21644B5-2DF2-47C2-91BD-63C560427900/NDP452-KB2901907-x86-x64-AllOS-ENU.exe

.NET Framework 4.5 (x86) 言語パック
http://download.microsoft.com/download/9/1/2/9125E189-97A4-4364-860C-09A0F96F6FB2/NDP452-KB2901907-x86-x64-AllOS-JPN.exe

2. 
NVEnc.NVEnc.ini、NVEnc_stgフォルダ をAviutlのpluginフォルダにコピーします。

3. 
Aviutlを起動し、「その他」>「出力プラグイン情報」にNVEncがあるか確かめます。
ここでNVEncの表示がない場合、1.で必要なものを忘れている、あるいは失敗したなどが考えられます。

4. 必要な実行ファイルを集めます。
   以下に実行ファイル名とダウンロード場所を列挙します。
   実行ファイルは32bit/64bitともに可です。
<主要エンコーダ・muxer>
 [qaac/refalac (AAC/ALACエンコーダ)]
 http://sites.google.com/site/qaacpage/
 
 [L-SMASH (mp4出力時に必要)]
 http://pop.4-bit.jp/
 
 [mkvmerge (mkv出力時に必要)]
 http://www.bunkus.org/videotools/mkvtoolnix/
 
<音声エンコーダ>
 [neroaacenc (AACエンコーダ)]
 http://www.nero.com/jpn/downloads-nerodigital-nero-aac-codec.php
 
 [FAW(fawcl) (FakeAACWave(偽装wav)解除)]
 http://2sen.dip.jp/cgi-bin/friioup/upload.cgi?search=FakeAacWav&sstart=0001&send=9999
 
 [faw2aac.auo (FakeAACWave(偽装wav)解除)]
 http://www.rutice.net/FAW2aac

 [qtaacenc   (AACエンコーダ, 要QuickTime)]
 http://tmkk.pv.land.to/qtaacenc/
 
 [ext_bs     (PVシリーズAAC抽出)]
 http://www.sakurachan.org/soft/mediatools/
 
 [lame       (mp3エンコーダ)]
 http://www.rarewares.org/mp3-lame-bundle.php
 
 [ffmpeg     (AC3エンコーダとして使用)]
 http://blog.k-tai-douga.com/
 
 [oggenc2    (ogg Vorbis, mkv専用)]
 http://www.rarewares.org/ogg-oggenc.php 
 
 [mp4alsrm23 (MPEG4 ALS (MPEG4 Audio Lossless Coding))]
 http://www.nue.tu-berlin.de/menue/forschung/projekte/beendete_projekte/mpeg-4_audio_lossless_coding_als/parameter/en/
 ※Reference Software のとこにある MPEG-4 ALS codec for Windows - mp4alsRM23.exe
 
5.
NVEncの設定画面を開き、各実行ファイルの場所を指定します。
あと適当に設定します。

6.
エンコード開始。気長に待ちます。


【iniファイルによる拡張】
NVEnc.iniを書き換えることにより、
音声エンコーダやmuxerのコマンドラインを変更できます。
また音声エンコーダを追加することもできます。

デフォルトの設定では不十分だと思った場合は、
iniファイルの音声やmuxerのコマンドラインを調整してみてください。


【ビルドについて】
ビルドにはVC++2015が必要です。

また、その他に以下のものも必要です。

CUDA 5.0 toolkit以降
http://developer.nvidia.com/cuda/cuda-toolkit

DirectX SDK
http://www.microsoft.com/en-us/download/details.aspx?id=6812
※VC++2010再頒布パッケージ(x86/x64)がすでに入っていると、インストールに失敗する場合があります。
  その場合は、VC++2010再頒布パッケージ(x86/x64)を一度アンインストールし、後でインストールし直すことでインストールできます。

Windows DDK
http://msdn.microsoft.com/ja-jp/windows/hardware/hh852365.aspx



コーディングが汚いとか言わないで。

【コンパイル環境】
VC++ 2015 Community


【検証環境 2014.03〜】
Win7 x64
Intel Core i7 4770K + Asrock Z87 Extreme4
GeForce GTX 660
16GB 
NVIDIA グラフィックドライバ 335.23
NVIDIA グラフィックドライバ 347.09

【検証環境 2015.01〜】
Win8.1 x64
Intel Core i7 5960X + ASUS X99 Deluxe
Geforce GTX 970
32GB RAM
NVIDIA グラフィックドライバ 347.25

【検証環境 2015.08〜】
Win10 x64
Intel Core i7 5960X + ASUS X99 Deluxe
Geforce GTX 970
32GB RAM
NVIDIA グラフィックドライバ 353.62

【検証環境 2015.12〜】
Win8.1 x64
Intel Core i3 4170 + Gigabyte Z97M-DS3H
Geforce GTX 970
8GB RAM
NVIDIA グラフィックドライバ 359.00

【検証環境 2015.12〜】
Win10 x64
Intel Core i7 5960X + ASUS X99 Deluxe
Geforce GTX 960
32GB RAM
NVIDIA グラフィックドライバ 364.51


【検証環境 2016.07〜】
Win10 x64
Intel Core i7 5960X + ASUS X99 Deluxe
Geforce GTX 1060
32GB 
NVIDIA グラフィックドライバ 368.81
NVIDIA グラフィックドライバ 372.70
NVIDIA グラフィックドライバ 375.95
NVIDIA グラフィックドライバ 382.33
NVIDIA グラフィックドライバ 385.41
NVIDIA グラフィックドライバ 385.69

【検証環境 2017.11〜】
Win10 x64
Intel Core i9 7980XE + Asrock X299 OC Formula
Geforce GTX 1060
NVIDIA グラフィックドライバ 388.31
NVIDIA グラフィックドライバ 390.77

【検証環境 2018.11〜】
Win10 x64
Intel Core i9 7980XE + Asrock X299 OC Formula
Geforce RTX 2070
Geforce GTX 1060
NVIDIA グラフィックドライバ 416.16
NVIDIA グラフィックドライバ 416.81
NVIDIA グラフィックドライバ 417.22
NVIDIA グラフィックドライバ 418.81
NVIDIA グラフィックドライバ 419.35
NVIDIA グラフィックドライバ 419.67
NVIDIA グラフィックドライバ 419.67
NVIDIA グラフィックドライバ 436.02

【お断り】
今後の更新で設定ファイルの互換性がなくなるかもしれません。

【メモ】
2019.11.05 (4.55)
[NVEncC]
・4.53での下記の変更の修正方法が間違っていたのを修正。
  - master-display, max-cllなどを指定してmp4/mkv等にmuxした際に、
    値が化けてしまうのを修正。

2019.11.02 (4.54)
・なかったことに…。

2019.10.30 (4.53)
[NVEncC]
・avsからの音声処理に対応。
・master-display, max-cllなどを指定してmp4/mkv等にmuxした際に、
  値が化けてしまうのを修正。
・横解像度が16で割り切れない場合の安定化。

[NVEnc.auo]
・横解像度が16で割り切れない場合の動作を改善。
・縦解像度が4で割り切れない場合に異常終了する問題を修正。

2019.10.07 (4.52)
[NVEncC]
・Multiple refsの指定方法を変更。(--multiref-l0/--multiref-l1)
・--multiref-**をhelpに追加。

2019.10.07 (4.51)
[NVEncC]
・NVENC SDKを9.1に更新。
  Multiple refsの指定機能を追加。(--ref)
・可能なら進捗表示に沿うフレーム数も表示するように。

2019.09.21 (4.50)
[NVEncC]
・yuv444(16bit)->nv12/yv12でオーバーフローが発生することがあったのを修正。
・vpp-resize spline16の係数設定に誤りがあったのを修正。

[NVEnc.auo]
・自動フィールドシフトのトラックバーとテキストボックスの連動が解除されていたのを修正。

2019.09.18 (4.49)
[NVEncC]
・vpp-subburnに透過性、輝度、コントラストの調整を行うオプションを追加。

2019.09.17 (4.48)
[NVEncC]
・vpp-colorspace reinhard/mobiusの変換式を修正。高輝度の場合の値が正しく算出されていなかった。
・vpp-colorspace hdr2sdrについて、RGBを同期して値を調整するように。
・vpp-afsのフレームバッファの実装を簡略化。無駄に複雑になっていた。
・コンソールの幅に合わせた進捗表示に。

2019.09.01 (4.47)
[NVEnc.auo]
・NVEnc.auo - NVEncC間のフレーム転送を効率化して高速化。
  2〜10%程度高速化。
・エンコードを中断できるように。
・ログウィンドウに何%エンコードできたかと、予想ファイルサイズを表示。
  自動フィールドシフト使用時を除く。

[NVEncC]
・高負荷時の安定化。
・字幕ファイルを読み込むオプションを追加。 (--sub-source)
・環境によっては、GPUを正しく検出できない問題を改善。
・4.44以降、--audio-sourceが正常に動作しない問題を修正。
・4.44以降、--output-formatが使用できなくなっていたのを修正。

2019.08.27 (4.46)
[NVEncC]
・高負荷時にデッドロックが発生しうる問題を修正。
・出力ファイルサイズを推定するように。
・GPUチェック時(--check-hw)のログ出力を追加。

2019.08.19 (4.45)
[NVEncC]
・--vpp-subburnで緑の線が出てしまう問題を修正。
・音声エンコードの安定性を向上。
・wma proのデコードに失敗する問題を修正。

2019.08.10 (4.44)
[NVEncC]
・--audio-sourceを改修し、より柔軟に音声ファイルを取り扱えるように。
・--dhrd10-infoが正常に動作しない問題を修正。
・--vpp-subburnで字幕を拡大すると、緑の線が入ってしまうことがあるのを修正。

2019.07.14 (4.43)
[NVEncC]
・--audio-copyなどがないと、trackを指定した字幕の焼きこみができないのを修正。
・複数の字幕ファイルを焼きこめるよう拡張。
・データストリームをコピーするオプションを追加する。(--data-copy)
・CPUの動作周波数が適切に取得できないことがあったのを修正。
・字幕を拡大/縮小して焼きこめるように。
・pulldownの判定を改善。
・ffmpegと関連dllを追加/更新。
  - [追加] libxml2 2.9.9
  - [追加] libbluray 1.1.2
  - [追加] aribb24 rev85
  - [更新] libpng 1.6.34 -> 1.6.37
  - [更新] libvorbis 1.3.5 -> 1.3.6
  - [更新] opus 1.2.1 -> 1.3.1
  - [更新] soxr 0.1.2 -> 0.1.3

2019.06.02 (4.42)
[NVEnc.auo]
・losslessを設定画面に追加。

[NVEncC]
・--vpp-subburnで入力ファイルによっては、字幕が正常に焼きこまれないのを修正。
・non-reference P-framesを自動的に挿入するオプションを追加。(--nonrefp)
・lookahead未使用時のGPUメモリ使用量を削減。
・4.40の修正が不十分な場合があったのを修正。

2019.05.25 (4.41)
[NVEncC]
・--chapterでmatroska形式に対応する。
・動的にレート制御モードを変更するオプションを追加。(--dynamic-rc)
・dynamic HDR10+ metadataを付与する機能を追加。(--dhdr10-info)
・字幕焼きこみ時に--cropを反映して焼きこむように。
・nppライブラリによるリサイズが正常に動作しなかったのを修正。
・nv12->nv12で並列化した場合に映像がずれてしまう問題を修正。

2019.05.21 (4.40)
[NVEncC]
・avhw以外のリーダーを使用した際に、横解像度が64で割り切れない場合に
  並列で色フォーマットの変換をすると左端にノイズが生じる問題を修正。

2019.05.20 (4.39)
[NVEncC]
・字幕焼きこみのフィルタを追加。(--vpp-subburn)
・--sub-copyで字幕の選択番号がひとつずれてしまっているのを修正。
・--vpp-colorspaceのhdr2sdrにhable, mobius, reinhardを追加。
  hdr2sdrの指定方法が変更になるので注意。(hable, mobius, reinhardの中から選択)
・--vpp-colorspaceにsmpte240m用の行列が欠けているのを修正。
・--avhw利用時、cuvidでcropを使用しないようにして、CUDAでcropするようにする。
  cuvidでcropを行うと、縦のcropが4で割り切れない場合に指定通りにcropされないなど、よくわからない現象に悩まされるため。

2019.05.07 (4.38)
[共通]
・vpp-nnediで埋め込みの重みデータを使用する場合に一時バッファを使用しないようにする。
  cufilter.aufなどの32bit環境では最悪メモリ確保に失敗する恐れがあった。

[NVEnc.auo]
・AVX2を搭載しないCPUでもAVX2を使用した関数が使われるようになってしまっていた問題を修正。

[NVEncC]
・--vpp-colorspaceを実行する際に、nvrtc-builtins64_101.dllも必要だったのだがこれが含まれておらず、正常に実行できなかったのを修正。

2019.05.05 (4.37)
[共通]
・リサイズアルゴリズムを追加。(lanczos2,lanczos3,lanczos4,spline16,spline64)
・色空間変換の並列化。

[NVEncC]
・x64版をVC++2019に移行。
・YUV444のhwデコードに対応。(Turing以降)
・インタレ解除フィルタyadifの追加。(--vpp-yadif)
・RGBの対応範囲を拡大。
・色空間変換を行うフィルタを追加。(--vpp-colorspace)
  zimgの実装をベースにmatrix/colorprim/transferの変換とhdr2sdrの変換を行う。
  この際、jitifyを使用したCUDAの実行時コンパイルを行うため、nvrtc_101.dllが必要。この関係でx64版のみのサポートとなる。

2019.04.02 (4.36)
[共通]
・エンコードできない場合のエラーメッセージを改善。

[NVEncC]
・--audio-copyでTrueHDなどが正しくコピーされないのを修正。

2019.03.24 (4.35)
[共通]
・vpp-nnedi利用時に異常終了する可能性があったのを修正。

[NVEncC]
・audio-filter利用時にフィルターによっては異常終了する可能性があったのを修正。

2019.03.20 (4.34)
[共通]
・CUDA 10.1で必要なdll名が間違っていたのを修正。

[NVEncC]
・helpにnnediについての記述を追記。

2019.03.17 (4.33)
[共通]
・3つめのインタレ解除フィルタを追加。(--vpp-nnedi)
・Turing世代のGPUが2倍のコア数として表示されてしまっていたのを修正。
・[x64版のみ] CUDA 10.1に移行。

2019.03.04 (4.32)
[NVEncC]
・--trimを使用すると音声とずれてしまう場合があったのを修正。
・映像のcodec tagを指定するオプションを追加。(--video-tag)

2019.02.12 (4.31)
[共通]
・NVENC SDK 9.0に更新。NVIDIA グラフィックドライバ 418.81以降が必要。
・HEVCエンコ時のB ref modeの設定を追加。(--bref-mode)

[NVEnc.auo]
・設定画面に「品質(--preset)」「Bフレーム参照モード(--bref-mode)」を追加。

[NVEncC]
・--presetをreadmeに追加。


2019.02.07 (4.30)
[共通]
・TuringでHEVCのBフレームが使用可能になったので、HEVCでもデフォルトのBフレーム数を3にする。
・インタレ保持エンコで出力したファイルのシーク時の挙動が不安定だったのを修正。

[NVEnc.auo]
・NVEnc.auoからHEVCのBフレームが使用できなかった問題を修正する。

[NVEncC]
・音声エンコード時のtimestampを取り扱いを改良、VFR時の音ズレを抑制。

2018.12.17 (4.29)
[NVEncC]
・--master-displayが正常に動作しない場合があったのを修正。

2018.12.11 (4.28)
[NVEnc.auo]
・Aviutlからのフレーム取得時間がエンコードを中断した場合に正常に計算されないのを修正。

2018.12.10 (4.27)
[NVEncC]
・--chapterを指定した場合、暗黙のうちに--chapter-copyを有効にする。
・計算時にオーバーフローが発生してしまう場合があったのを修正。
  mkvのchapterをmuxする際などに正常にchapterをmuxできなかった。
  
[NVEnc.auo]
・自動フィールドシフト使用時、widthが32で割り切れない場合に範囲外アクセスの例外で落ちる可能性があったのを修正。

2018.11.24 (4.26)
[NVEncC]
・色空間変換とGPU転送の効率化。
・--audio-fileが正常に動作しないことがあったのを修正。

2018.11.19 (4.25)
[NVEncC]
・読み込みにudp等のプロトコルを使用する場合に、正常に処理できなくなっていたのを修正。
  4.22以降のバグ。

2018.11.18 (4.24)
[NVEncC]
・--vpp-select-everyを使用してもログ表示に反映されないのを改善。
・muxなしで出力すると、caption2assを使用しないときでもメッセージが出ていたのを修正。
・古いAvisynthを使うと正常に動作しなくなっていたのを修正。

[NVEnc.auo]
・簡易インストーラを更新。
  - Apple dllがダウンロードできなくなっていたので対応。
  - システムのプロキシ設定を自動的に使用するように。

2018.11.08 (4.23)
[NVEncC]
・指定stepフレームごとに1フレームを選択してフレームを間引くオプションを追加。(--vpp-select-every)
・VC-1デコードの際にエラー終了することがあったのを改善。
・perf-monitorにPCIe周りの情報を追加。
・マルチGPU環境でのGPU選択改善。
  - インタレ保持エンコを考慮したGPU選択をするように。
  - Bフレームの指定があった場合には、それをサポートするGPUを選択するように。

2018.11.03 (4.22)
[共通]
・yuv420のlossless出力に対応。

[NVEncC]
・Caption.dllによる字幕抽出処理を実装。(--caption2ass)
・--check-featuresでGPU名が正しく表示されていなかったのを修正。
・--check-featuresにバージョン情報も出力するように。
・--check-environmentの出力先をstderrからstdoutに。

2018.10.27 (4.21)
[NVEnc.auo]
・NVEnc.auoのリサイズアルゴリズム選択を修正。
・NVEnc.iniにffmpegによる音声エンコードと、デュアルモノの分離処理を追加。
・NVEnc.auoの設定画面からwav出力できなかったのを修正。
  指定された動画エンコーダは存在しません。[ ]とエラーが出てしまっていた。
・faw2aac処理後も音声エンコ後バッチ処理を行うように。
  なお、音声エンコ前バッチ処理は実施されない。

2018.10.13 (4.20)
[NVEnc.auo]
・--vbr-qualityが小数で指定できるように。

[NVEncC]
・VC-1 hwデコードを有効に。

2018.10.08 (4.19)
[共通]
・GPUバイナリを含めないようにして、配布バイナリを軽量化。

[NVEnc.auo]
・品質指定のプロファイルを追加。
・プロファイル「HEVC ビットレート指定 高画質」から重み付きPフレームを外した。
・一時フォルダの相対パス指定に対応した。
・多重音声を扱う際、muxer.exeがエラー終了してしまうのを修正。

[NVEncC]
・--aud/--pic-struct/--slicesを追加。
・--check-hwの出力を改善。
・NPPライブラリのリサイザアルゴリズムのうち、最近NPP_INTERPOLATION_ERRORを返すようになったものをドキュメントから削除。
  cubic_bspline, cubic_catmull, cubic_b05c03が削除。cubicは問題ないので、そちらを使用してください。

2018.09.27 (4.18)
・--key-on-chapterをmuxしない場合にも使用可能に。
・ファイルによるキーフレームの指定に対応。(--keyfile)

2018.09.26 (4.17)
[NVEncC]
・チャプターのあるフレームに、キーフレームを挿入する機能を追加。(--key-on-chapter)
  ただし、--trimとの併用は不可。

2018.09.18 (4.16)
[NVEncC]
・一部のmp4/mkv等のコンテナに入った10bit HEVCの入力ファイルが正常にデコードできない問題について、
  avhwでの問題を回避。

2018.09.12 (4.15)
[NVEncC]
・一部のmp4/mkv等のコンテナに入った10bit HEVCの入力ファイルが正常にデコードできない問題について、
  avswでは問題を解消。(avhwでは未解決)
・Max MB Per secについてはチェックをしていないので、--check-featuresの表示項目から外した。

2018.08.28 (4.14)
[NVEncC]
・vpp-delogoで自動フェードを有効にするとエラー終了する問題を修正。

2018.08.19 (4.13)
[NVEnc.auo]
・NVEnc 4.12で動作しなくなっていた(NVEncCが異常終了する)のを修正。

[NVEncC]
・vpp-delogoの自動フェード・自動NRを大幅に高速化。
・高ビット深度出力時のvpp-padの動作を修正。

2018.08.10 (4.12)
[NVEncC]
・vpp-delogoの自動フェード・自動NR機能を追加。
  ・合わせてvpp-delogoのオプションの指定方法を変更。
  ・一部機能を除いた簡易版です。
  ・まだ遅いです。

2018.08.06 (4.11)
[NVEncC]
・一部の動画ファイルで、音ズレの発生するケースに対処。
・BlurayオプションのGOP長の制限を緩和。

2018.07.27 (4.10)
[NVEncC]
・進捗状況でtrimを考慮するように。
・OpenCLがまともに動作しない環境でのクラッシュを回避。
  まれによくあることらしい。

2018.07.10 (4.09)
[NVEncC]
・音声エンコーダにオプションを引き渡せるように。
  例: --audio-codec aac:aac_coder=twoloop
・音声エンコード時にプロファイルを指定できるように。(--audio-profile)
・高ビットレートでのメモリ使用量を少し削減。
・パディングを付加するフィルタを追加。(--vpp-pad)
・可変フレームレートなどの場合に、中途半端なフレームレートとなってしまうのを改善。
・音声のほうが先に始まる場合の同期を改善。
  
2018.07.05 (4.08)
[NVEncC]
・--audio-fileが正常に動作していなかったのを修正。
・--input-analyzeの効果を改善。
・SAR指定時の安定性を改善。

2018.06.05 (4.07)
[共通]
・--darが4.04以降正常に動作しなかったのを修正。
・4.02以降、主に海外でコマンドラインの浮動小数点がうまく読めない場合があったのを修正。

2018.06.02 (4.06)
[NVEncC]
・--audio-codec / --audio-bitrate / --audio-samplerate / --audio-filter等のコマンドを
  トラックを指定せずに指定した場合、入力ファイルのすべての音声トラックを処理対象に。
・--max-cll / --masterdisplay 使用時の互換性を改善。

2018.05.29 (4.05)
[NVEnc.auo]
・4.04で設定画面を表示しようとするとクラッシュしたのを修正。

[NVEncC]
・--max-cll / --masterdisplay 使用時の出力を改善。
・--sarと--max-cll / --masterdisplay を同時に使用すると、正常に動作しなかったのを修正。

2018.05.28 (4.04)
[共通]
・意図したsar比がセットされないのを回避。

[NVEncC]
・chroma locationのフラグを指定するオプションを追加。
・インタレ保持エンコードでmuxしながら出力する際、フィールド単位でmuxせず、フレーム単位でmuxするように。

2018.05.20 (4.03)
[NVEncC]
・ffmpegと関連ライブラリのdllを更新。

2018.05.14 (4.02)
[NVEncC]
・プロセスのロケールを明示的にシステムのロケールに合わせるように。

2018.05.03 (4.01)
[NVEncC]
・muxしながら出力する際、--max-cllや--masterdisplayを使用するとフリーズしてしまうのを修正。
・ロゴの自動選択が正常に動作しないのを修正。

2018.05.02 (4.00)
[共通]
・NVENC SDKを8.1に更新。

[NVEnc.auo]
・エンコーダを内蔵せず、NVEncCにパイプ渡しするように。
  Aviutl本体プロセスのメモリ使用量を削減。
  またwin7における連続バッチ出力時のリソース開放漏れ問題が発生しなくなる。

[NVEncC]
・Bフレームの参照モードを設定するオプションを追加。(--bref-mode)
  現行のGPUではサポートされない模様。
・HEVCのtierを指定するオプションを追加。(--tier)
・HEVCエンコ時にVUI情報の自動設定が行われないのを修正。
・mux時にHDR関連のmetadataの反映を改善。
・mux時の映像/音声の同期を改善。

2018.03.13 (3.33)
[NVEncC]
3.32でtrimを使うとエラー終了してしまうのを修正。

2018.03.11 (3.32)
[共通]
・やはりHEVC + --weightpは不安定な場合があるようなので、警告メッセージを出すようにした。

[NVEncC]
・--avsync vfrの安定性を改善。
・動画のrotation情報があればコピーするように。
・"%"を含む出力ファイル名で--logを指定すると落ちるのを修正。
・--input-analysisを大きくしすぎると、エラー終了する場合があったのを修正。

2018.03.04 (3.31)
[NVEncC]
・"%"を含む出力ファイル名で出力しようとすると落ちるのを修正。
・avswのデコーダのスレッド数を16までに制限。
・--avsync vfrを追加。avhw/avswモード時にソースのtimestampのままで出力するモード。
  --trimとは併用できない。
・tsファイルなどでtrim使用時に、ずれてしまう場合があったのを修正。

2018.02.20 (3.30)
[共通]
・--max-cll, --master-displayを使用しないときの出力がおかしかったのを修正。
・出力バッファサイズをドライバに決めさせるようにして安定性を改善。

[NVEncC]
・動画のDEFAULT stream情報とlanguage情報もあればコピーするように。

2018.02.19 (3.29)
[共通]
・バッファサイズを動的に変更するようにして、lookaheadが多い時の安定性を改善。
・HEVCエンコ時にsliceを明示的に1にするようにして、安定性を改善。
・HEVCエンコ時にweightpを再度有効に。390.77では問題なさそう?

[NVEncC]
・--audio-copy, --sub-copy等で、streamの情報を適切にコピーするように。

2018.02.14 (3.28)
[NVEncC]
・HDR関連metadataを設定するオプションを追加。(--max-cll, --master-display)

2018.02.03 (3.27v2)
[NVEnc.auo]
・設定画面でOKボタンが押せない場合があったのを修正(たぶん)。
  120dpiベースでGUIが作成されてしまっていたのを96dpiベースに戻した。

2018.01.07 (3.27)
[共通]
・色調補正フィルタを追加。(vpp-tweak)
・--vpp-deinterlace bobを使用時に、ビットレートが半分として表示されてしまうのを修正。
・同時エンコードが2までに制限されていることのエラーメッセージを強化。

[NVEnc]
・リソース開放がうまく行われていなかったのを修正。
・デバッグログ出力を設定画面から有効にできるように。

[NVEncC]
・不適切なデバイスIDを指定したときに、自動的にデバイスを変更するように。
・vpp-delogoが正常に動かなくなっていたのを修正。
・avsからのyuv420/yuv422/yuv444の高ビット深度読み込みに対応。
  ただし、いわゆるhigh bitdepth hackには対応しない。

2017.12.14 (3.26)
[共通]
・VUI情報が正しく反映されないことがあるのを修正。
・ログ表示のミスを修正。

[NVEncC]
・--audio-copy/--audio-codec/--sub-copy指定時に、入力ファイルに音声/字幕トラックがない場合でもエラー終了しないように。

2017.11.26 (3.25)
[共通]
・不安定なため、HEVCエンコード時にはweightpを無効化。

2017.11.14 (3.24)
[共通]
・フィルタ使用時のGPUメモリ使用量を削減。

[NVEncC]
・pulldownを検出するように。
  完全な2:3pulldownの場合には29.97fpsでなく、23.976fpsとして検出する。
  avsync, vpp-rff, vpp-afsを使用していない場合のみ有効。
・nvmlのエラー情報を詳細に表示するように。
・yv12(high)->p010[AVX2]のバグを修正。
・GPUが見つからないと表示される箇所があったのを修正。

2017.09.26 (3.23)
[共通]
・vpp-afsで、最終フレームがdropとなると異常終了することがあったのを修正。

2017.09.23 (3.22)
[共通]
・--cuda-scheduleのデフォルトをautoに戻す。
  syncだと速度がかなり落ちてしまう場合があった。

2017.09.19 (3.21)
[共通]
・Unsharpフィルタを使用した際に、色が赤みがかったり、青みがかったりすることがあったのを修正。

2017.09.18 (3.20)
[共通]
・Unsharpフィルタを追加。(--vpp-unsharp)
・エッジレベル調整フィルタを追加。(--vpp-edgelevel)
・特に指定のない場合、deviceの選択を実行時に自動で決定するように。
  エンコーダ/デコーダ/GPUの使用率/GPUの世代/GPUのコア数等を考慮して、自動的に決定する。
  --deviceで明示的に指定した場合は、従来通り指定に従う。

[NVEncC]
・avhwリーダー使用時に、cropとresizeを使用すると、cropが二重にかかるようになっていたのを修正。
・--transferの引数をx264等で使用されているものに合わせる。
  smpte-st-2048 → smpte2048
  smpte-st-428  → smpte428

2017.09.11 (3.19)
[NVEnc.auo]
・HEVCエンコ時にフレームタイプが設定できるように。

2017.09.10 (3.18)
[共通]
・自動フィールドシフトを追加。(vpp-afs)

  Aviutl版とほぼ同様だが、GPUでの実装の都合上全く同じ結果にはならないのと、一部機能制限がある。

  パラメータ ... 基本的にはAviutl版のパラメータをそのまま使用する。
    top=<int>           (上)
    bottom=<int>        (下)
    left=<int>          (左)
    right=<int>         (右)
    method_switch=<int> (切替点)
    coeff_shift=<int>   (判定比)
    thre_shift=<int>    (縞(シフト))
    thre_deint=<int>    (縞(解除))
    thre_motion_y=<int> (Y動き)
    thre_motion_c=<int> (C動き)
    analyze=<int>       (解除Lv)
    shift=<bool>        (フィールドシフト)
    drop=<bool>         (ドロップ)
    smooth=<bool>       (スムージング)
    24fps=<bool>        (24fps化)
    tune=<bool>         (調整モード)
    rff=<bool>          (rffフラグをチェックして反映)
    log=<bool>          (デバッグ用のログ出力)

  下記には未対応
    解除Lv5
    シーンチェンジ検出(解除Lv1)
    編集モード
    ログ保存
    ログ再生
    YUY2補間
    シフト・解除なし

・各種フィルタがインタレ保持でも適切に処理できるように。
  vpp-resize, vpp-knn, vpp-pmd, vpp-gauss, vpp-unsharpが対象。
  vpp-delogo, vpp-debandはもとから対応済み。
  
[NVEnc.auo]
・簡易インストーラを更新。

[NVEncC]
・rffを適切に反映し、フィールドに展開する機能を追加。(vpp-rff)
  avcuvid読み込み時専用。またtrimとは併用できない。
・高ビット深度のyuv420からp010に変換するときに異常終了することがあるのを修正。

2017.08.01 (3.17)
[NVEncC]
・rawでの読み込みが正常に動作していなかったのを修正。

2017.07.26 (3.16)
[NVEncC]
・x64版が動かなかったのを修正。

2017.07.25 (3.15)
[共通]
・GPUのドライババージョンをチェックするように。
・CUDAの存在しない環境で、クラッシュしてしまうのを修正。
・ヘルプのささいな修正。

[NVEncC]
・高ビット深度のyuv422/yuv444をy4mから読み込むと色成分がおかしくなるのを修正。
・高ビット深度でdelogoが正常に動作しなかったのを修正。
・3.08からy4mからパイプで読み込めなくなっていたのを修正。

2017.06.30 (3.14)
[共通]
・CPU使用率を低減。特に、HWデコーダ使用時のCPU使用率を大きく削減。
・CUDAのスケジューリングモードを指定するオプションを追加。(--cuda-schedule <string>)
  主に、GPUのタスク終了を待機する際のCPUの挙動を決める。デフォルトはsync。
  - auto  ... CUDAのドライバにモード決定を委ねる。
  - spin  ... 常にCPUを稼働させ、GPUタスクの終了を監視する。
              復帰のレイテンシが最小となり、最も高速だが、1コア分のCPU使用率を常に使用する。
  - yield ... 基本的にはspinと同じだが、他のスレッドがあればそちらに譲る。
  - sync  ... GPUタスクの終了まで、スレッドをスリープさせる。
              わずかに性能が落ちるかわりに、特にHWデコード使用時に、CPU使用率を大きく削減する。
・実行時のCUDAのバージョンをログに表示するように。

[NVEncC]
・helpの表示がおかしかった箇所を修正。
・エンコード終了時に進捗表示のゴミが残らないように。
・NVMLを使用してGPU使用率などの情報を取得するように。x64版のみ。

2017.06.24 (3.13)
[共通]
・バンディング低減フィルタを追加。
・パフォーマンス分析ができなくなっていたのを修正。

[NVEncC]
・--avcuvidを使用すると、--cropが正しく反映されない場合があったのを修正。

2017.06.19 (3.12)
[NVEnc.auo]
・NVEnc.auoで10bit深度、yuv444のエンコードができなくなっていたのを修正。

2017.06.18 (3.11)
[共通]
・より柔軟にSAR比の指定に対応。
・NVEncのrevision情報を表示するように。

[NVEncC]
・実行時に取得したデコーダの機能をもとに、デコードの可否を判定するように。
・avswにrgb読み込みを追加。
・avsw/y4m/vpyからのyuv422読み込みに対応(インタレは除く)。
・--audio-streamを使用した際に、条件によっては、再生できないファイルができてしまうのを修正。

2017.06.12 (3.10)
[NVEncC]
・y4m渡しが3.09でも壊れていたので修正。
・正常終了した場合でも、エラーコード上はエラーを返していることがあるのを修正。

2017.06.11 (3.09)
[NVEncC]
・高ビット深度をy4m渡しすると、絵が破綻するのを修正。

2017.06.10 (3.08)
[共通]
・NVENC SDKを8.0に更新。
・重み付きPフレームを有効にするオプションを追加。(--weightp)
・Windowsのビルドバージョンをログに表示するように。
・32で割りきれない高さの動画をインタレ保持エンコードできない場合があったのを修正。
・GPU-Zの"Video Engine Load"を集計できるように。

[NVEnc.auo]
・簡易インストーラを更新。
・QPの上限・下限・初期値の設定を追加。
・VBR品質目標の設定を追加。

[NVEncC]
・10bit HEVCのHWデコードに対応。
・ffmpegと関連ライブラリのdllを更新。
・HWデコード時の安定性を向上。
・--vbr-qualityを小数点指定に対応。
・aviファイルリーダーを追加。
・LTR Trust modeは今後非推奨となる予定のため、--enable-ltrオプションを削除。
・vpyリーダー使用時に、エンコードを中断しようとするとフリーズしてしまう問題を修正。
・字幕のコピーが正常に行われない場合があったのを修正。

2017.03.08 (3.07)
[共通]
・ログにいくつかのパラメータを追加。

[NVEnc.auo]
・プリセットを現状に合わせて調整。
・簡易インストーラを更新。

[NVEncC]
・H.264ではLTRが非対応であるとのことをhelpに明記。
・いくつかのオプションを追加。(--direct, --adapt-transform)
・NVENCのpresetを反映するオプションを追加。(--preset)

2017.02.05 (3.06)
※同梱のdll類も更新してください!
[NVEncC]
・HEVC/VP8/VP9のハードウェアデコードを追加。
・メモリリークを修正。
・使用しているCUDAのバージョン情報を表示。

2017.01.11 (3.05)
[共通]
・3.04のミスを修正。

2017.01.10 (3.04)
[共通]
・HEVCでもロスレス出力可能なように。

2017.01.09 (3.03)
[共通]
・NVENC SDKを7.1に更新。
・NVENC SDKを7.1に合わせてレート制御モードを整理。
  - CQP
  - VBR
  - VBRHQ (旧VBR2)
  - CBR
  - CBRHQ
・低解像度で--level 3などを指定してもエラー終了してしまう問題を解消。

[NVEncC]
・mkvを入力としたHEVCエンコードで、エンコード開始直後にフリーズしてしまうのを解消。

[NVEnc.auo]
・自動フィールドシフト使用時に、最後のフレームがdropであると1フレーム多く出力されてしまう問題を修正。
  これが原因で、timecodeとフレーム数が合わずmuxに失敗する問題があった。

2016.11.21 (3.02)
[共通]
・2.xxのnvcuvid利用時及び3.00以降のすべてのケースでインタレ保持エンコードが正常にできなくなっていたのを修正。

[NVEnc.auo]
・簡易インストーラを更新。

2016.10.11 (3.01)
[共通]
・CUDA 8.0正式版にコンパイラを変更。

[NVEncC]
・muxする際、プログレッシブエンコードなのにBFFのフラグが立っていた問題を修正。
・--audio-sourceが期待どおりに動作しない場合があったのを修正。

2016.09.18 (3.00)
[共通]
・さまざまなリサイズアルゴリズムを追加。(--vpp-resize)
・Knn(K nearest neighbor)ノイズ除去を追加。(--vpp-knn)
・正則化PMD法によるノイズ除去を追加。(--vpp-pmd)

[NVEncC]
・音声処理のエラー耐性を向上。
・avcuvid読み込み以外でもリサイズを可能に。
・avcuvid読み込み以外でもtrimを可能に。
・左cropが動作しないのを解消。
・透過性ロゴフィルタを追加。(--vpp-delogo)
・ガウシアンフィルタを追加(x64のみ)。(--vpp-gauss)

2016.08.07 (2.11)
[NVEncC]
・2.08から、vpp-deinterlaceが使用できなくなっていたのを修正。

2016.07.28 (2.10)
[共通]
・PascalのHEVC YUV444 10bitエンコードに対応。

[NVEncC]
・出力ビット深度を設定するオプションを追加。(--output-depth <int>)
・avsw/y4m/vpyリーダーからのyuv420高ビット深度の入力に対応。
・avsw/y4m/vpyリーダーからのyuv444(8bit,高ビット深度)の入力に対応。

[NVEnc.auo]
・afs使用時にHEVC 10bitエンコードができなかった問題を修正。
・進捗表示がされない問題を修正。

2016.07.22 (2.09)
[共通]
・--helpが壊れている問題を修正。
・fpsが正しく取得できていない場合のエラーを追加。
・HEVC 4:4:4に対応。
  profileでmain444を指定してください。

[NVEncC]
・10bitエンコードを追加 (HEVCのみ)。(--output-depth <int>)

[NVEnc.auo]
・10bitエンコードを追加 (HEVCのみ)。
  プロファイルで「main10」を指定してください。
  YC48から10bitへの直接変換を行います。

2016.07.19 (2.08)
[共通]
・NVENC SDK 7.0に対応
  NVIDIA グラフィックドライバ 368.69以降が必要
・SDK 7.0で追加された機能のオプションを追加。
  --lookahead <int> (0-32)
  --strict-gop (NVEncCのみ)
  --no-i-adapt (NVEncCのみ)
  --no-b-adapt (NVEncCのみ)
  --enable-ltr (NVEncCのみ)
  --aq-temporal
  --aq-strength <int> (0-15)
  --vbr-quality <int> (0-51)
・--avswを追加。
・複数の動画トラックがある際に、これを選択するオプションを追加。(--video-track, --video-streamid)
  --video-trackは最も解像度の高いトラックから1,2,3...、あるいは低い解像度から -1,-2,-3,...と選択する。
  --video-streamidは動画ストリームののstream idで指定する。
・入力ファイルのフォーマットを指定するオプションを追加。(--input-format)

2016.06.18 (2.07v2)
・簡易インストーラを更新。

2016.05.29 (2.07)
・Bluray出力が行えなくなっていたのを修正。
・ログが正常に表示されないものがあったのを修正。
・コマンドラインのオプション名が存在しない場合のエラーメッセージを改善。
・NVEnc.auoで中断できないのを修正。

2016.04.29 (2.06)
・avcuvid使用時にデコーダのモードを指定できるように。
  --avcuvid native (デフォルト)
  --avcuvid cuda
  なにも指定しないときはnative。

2016.04.20 (2.05v2)
・簡易インストーラを更新。

2016.04.15 (2.05)
[NVEncC]
・--audio-copyの際のエラー回避を追加。

2016.04.03 (2.04)
[NVEncC]
・qp-min, qp-max, qp-initなどが指定できなかった問題を修正。

2016.04.01 (2.03)
[NVEncC]
・入力ファイルにudpなどのプロトコルが指定されていたら、自動的にavcuvidリーダーを使用するように。
・音声関連ログの体裁改善とフィルタ情報の追加。
・音声フィルタリングを可能に。 (--audio-filter)
  ffmpegのdllを含めて更新してください。(ソースは QSVEnc_2.42_lgpl_dll_src.7z)
  音量変更の場合は、"--audio-filter volume=0.2"など。
  書式はffmpegの-afと同じ。いわゆるsimple filter (1 stream in 1 stream out) なら使用可能なはず。

2016.03.27 (2.02)
[NVEncC]
・エンコード速度が低い時のCPU使用率を大幅に低減。
・mux時に書き込む情報がQSVEncになっていたのを修正。
・HEVCのmuxが正常に行えないことがあるのを修正。
・avsync forcecfr + trimは併用できないので、エラー終了するように。
・dll更新。(ソースは QSVEnc_2.42_lgpl_dll_src.7z)

2016.03.24 (2.01)
[共通]
・MB per secのチェックを行わないようにした。
[NVEnc]
・簡易インストーラを更新。
[NVEncC]
・QSVEncからmux関連機能を追加する。
  --avcuvid-analyze
  --trim
  --seek
  -f, --format
  --audio-copy
  --audio-codec
  --audio-bitrate
  --audio-stream
  --audio-samplerate
  --audio-resampler
  --audio-file
  --audio-ignore-decode-error
  --audio-ignore-notrack-error
  --audio-source
  --chapter
  --chapter-copy
  --sub-copy
  -m, --mux-options
  --output-buf
  --output-thread
  --max-procfps
  あわせてffmpegのdllを追加。(ソースは QSVEnc_2.29_lgpl_dll_src.7z)
・リサイズが行われるときは、入力からのsar比の自動反映を行わないように。
・--levelの読み取りを柔軟に。
・コマンドライン読み取り時のエラー表示を改善。

2016.01.05 (2.00β4)
[NVEncC]
・DeviceIDを指定してエンコードできるように。(--device <int>)
・利用可能なGPUのDeviceIdを表示できるように。(--check-device)
・--check-hw, --check-featuresがdeviceIDを引数にとれるように。
  指定したdeviceIdをチェックする。省略した場合は"DeviceId:0"をチェック。

2015.12.31 (2.00β3v2)
[NVEncC]
・ffmpegのdllをSSE2ビルドに変更。
  ソースはQSVEnc_2.26_lgpl_dll_src.7zのものを流用。

2015.12.26 (2.00β3)
[NVEncC]
・--qp-init, --qp-max, --qp-minを追加。
・デバッグ用のメッセージを大量に追加。

2015.12.06 (2.00β2)
[NVEncC]
・NVENC SDK 6.0に対応
  NVIDIA グラフィックドライバ 358.xx 以降が必要
・NVIDIA CUVIDによるインターレース解除に対応。
  --vpp-deinterlace bob,adaptive
・help-enにoutput-resがなかったのを修正。
・avcuvidでは、下記がサポートされないので、エラーチェックを追加。
  lossless, high444, crop left
・HEVCエンコード時に色関連の設定が反映可能に。

2015.11.29 (2.00β1)
[NVEncC]
・NVIDIA CUVIDによるデコード・リサイズに対応。
  ソフトウェアデコードより高速。
  H.264 / MPEG1 / MPEG2 のデコードに対応。
  --avcuvid
  --output-res <int>x<int>
・ログファイルの出力に対応。
  --log <string>
  --log-level <string>
・ffmpegのdllはQSVEnc_2.22_lgpl_dll_src.7zのものを流用。
  
2015.11.08 (1.13v2)
[NVEncC]
・x64の実行ファイルが最新版になっていなかったので修正。

2015.11.06 (1.13)
[共通]
・VBR2モードを追加。--vbr2。SDKのいうところの2passVBR。
・AQを追加。

[NVEncC]
・y4mからsar情報を受け取れるように。
  特に指定がない場合に、y4mからの情報を使用する。

2015.11.02 (1.12)
[NVEnc]
・fdk-aac (ffmpeg)にもaudio delay cut用のパラメータをNVEnc.iniに追加。

[NVEncC]
・y4mでのyuv422/yuv444読み込みを追加。

2015.10.24 (1.11)
[共通]
・VC2015に移行。
・OSのバージョン情報取得を改善、Windows10に対応。
・NVEncのH.264/AVC high444 profileとロスレス出力に対応。
  QSVEnc
    YUV444出力…プロファイルをhigh444と指定する
    ロスレス出力…CQPでIフレーム、Bフレーム、PフレームのQP値を0にする。

  QSVEncC
    YUV444出力…--profile high444
    ロスレス出力…--lossless

2015.08.18 (1.10)
[共通]
・ハードウェア上限に達した場合のエラーメッセージを表示しようとすると落ちる問題を修正。

2015.07.13 (1.09)
[NVEnc]
・.NET Framework 4.5に移行。
・音声エンコードでフリーズする場合があったのを修正。

[NVEncC]
・特になし。

2015.04.29 (1.08)
[共通]
・環境によって例外:0xc0000096で落ちることがあるのを回避。
[NVEnc]
・音声エンコ前後にバッチ処理を行う機能を追加。
[NVEncC]
・64bit版にavsリーダーを追加。

2015.04.16 (1.07)
[NVEnc]
※要NVEnc.ini更新
・neroを使用すると途中でフリーズする問題を修正。
・いくつかの音声エンコーダの設定を追加。

2015.04.12 (1.06)
[共通]
・VBVバッファサイズを指定するオプションを追加。
・Bluray用出力を行うオプションを追加。
  Bluray用に出力する際には、必ず指定してください。

2015.04.05 (1.05)
[NVEncC]
・--check-featuresをNVENCのない環境で実行するとフリーズする問題を修正。

2015.03.15 (1.04)
[NVEncC]
・英語化が一部不完全だったのを修正。

2015.03.09 (1.03)
[共通]
・1.00からインタレ保持エンコードができていなかったのを修正。
・インタレ保持でtffかbffかを選択できるように。
[NVEncC]
・コンソールで問題が起こることがあるので、ログ表記等を英語化。

2015.02.27 (1.02)
[NVEncC]
・--inputと--outputが効いていなかったのを修正。

2015.02.14 (1.01)
[共通]
・SAR/DARを指定できるように。
[NVEnc]
・自動フィールドシフト使用時以外には、muxerでmuxを行うように。
  muxを一工程削減できる。
[NVEncC]
・--cropオプションを追加。
  LSMASHSourceでdr=trueを使用して高速化できる。
・読み込みでエラーになった際に、エラー情報を表示するように。
・初期化に失敗した際の処理を改善。
・vpyリーダーを追加。
・x64版を追加(avsリーダーは無効)
  
2015.01.24 (1.00)
[共通]
・エンコードログの表示に動きベクトル精度、CABAC、deblockを追加。
・GOP長のデフォルトを0:自動に。
・HEVCの参照距離が適切に設定されないのを修正。
・デフォルトパラメータを高品質よりに調整。
・プリセットを更新。
[NVEncC]
・colormatrix, colorprim, transferが正しく設定されないのを修正。
・短縮オプションの一部がヘルプにないのを修正。
・AVSリーダーでYUY2読み込みが正常に行われていなかったのを修正。

2015.01.24 (1.00 べ〜た)
・NVEnc API v5.0に対応
  - HEVCエンコードに対応
・コマンドライン版 NVEncCを追加。
  - raw, y4m, avs読み込みに対応。
・x264guiEx 2.24までの更新を反映。
  - qaacについて、edtsにより音声ディレイのカットをする機能を追加
  - 音声エンコーダにfdkaacを追加
  - muxerのコマンドに--file-formatを追加。
  - flacの圧縮率を変更できるように
  - 音声やmuxerのログも出力できるように
  - 0秒時点にチャプターがないときは、ダミーのチャプターを追加するように。
    Apple形式のチャプター埋め込み時に最初のチャプターが時間指定を無視して0秒時点に振られてしまうのを回避。
  - ログにmuxer/音声エンコーダのバージョンを表示するように。
  - ログが文字化けすることがあるのを改善。
    また、文字コード判定コードのバグを修正。SJISと判定されやすくなっていた。
  - 音声エンコーダにopusencを追加。
  - nero形式のチャプターをUTF-8に変換すると、秒単位に切り捨てられてしまう問題を修正。
  - CPU使用率を表示。

2014.04.21 (0.03)
・nero形式のチャプターをUTF-8に変換してからmuxする機能を追加
・なおも99.9%で停止することがある問題を修正 

2014.04.13 (0.02)
・99.9%で停止してしまう問題を改善…できているかもしれない。

2014.04.05 (0.01)
・nvcuda.dllの存在しない環境で、「コンピューターにnvcuda.dllがないため、プログラムを開始できません。」と出る問題を解決

2014.03.28 (0.00)
・公開版

2014.03.20
製作開始
