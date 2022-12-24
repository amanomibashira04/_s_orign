# コンポーネントおよびユニット単位のオブジェクトの設定

## 項目
* タグ。
* リセットCSS（CDNの場合はfunction.php）【注意：外部から読み込みの場合、一番最初に読み込むように！】。

## 留意事項
* font関連。
* ブレイクポイント。
* Block、ElementのないModifier（display: none;など）。
* JavaScriptでクラス（js-gnav-itemなど）の設定
* htmlまたはbodyまたは全体にかかるクラス。
* commonディレクトリとの区分


必要な具体的なファイルは、次になります。

（例）
body{
  color: #000;
  font-family: フォント名;
}
//SP
@media screen and (max-width: #{nth($breakPointList, 1)}){
  body{
    min-width: 320px;
  }
  html, body{
    height: 100%;
    min-height: 100%;
  }
}
//PC
@media print,screen and (min-width: #{nth($breakPointList, 2)}){
  body{
    width: 100%;
  }
}

JavaScriptで次のようなクラスを設定
（例外：例1）
<nav class="gnav">
<ul class="gnav-list">
<li class="gnav-item js-gnav-item"><a href="#"></a></li>
<li class="gnav-item js-gnav-item"><a href="#"></a></li>
<li class="gnav-item js-gnav-item"><a href="#"></a></li>
</ul>
</nav>

（例外：例2）
Block、ElementのないModifier
//SP
@media screen and (max-width: #{nth($breakPointList, 1)}){
  ._pc{
    display: none;
  }
}
//PC
@media print,screen and (min-width: #{nth($breakPointList, 2)}){
  ._sp{
    display: none;
  }
}

