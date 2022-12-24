# このSCSSの目的・ルールなど

## FLOCSSの設計理念をもとにモックアップに最適なCSS設計を目指すことを目的とする。
* ブロックパターンの簡易なカスタマイズ
* marginやpadding、gapなどの自在なコントロール

## 設計理念
### クラス名の命名を考えることではなくクラスの構造を明確にすることを目的とする。

## 構造
* base          -body,html,reset,（各種タグの設定もここで行う）
* common        -buttonなど（ボタンなど全体に共通するパーツ）
* component     -blockは（ブロックパターンなどのパーツの塊）
* global        -mixinとvar（変数）
	* mixin     -
	* variables -
* layout        -header,main,footer（大区分）
* utility       -marginなど（詳細）

## 未定・問題点
ページごと？

## 追記事項
* _00から始まるファイルはテストデータです。0が増えた場合はバージョンが変わります。