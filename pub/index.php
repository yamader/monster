<?php $host = $_SERVER["HTTP_HOST"] ?? "xn--8dr019o.monster" ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>†魔剤†</title>
  <meta name="description" content="魔剤">
  <meta name="twitter:card" content="summary">
  <meta property="og:title" content="魔剤.monster">
  <meta property="og:image" content="https://<?php echo $host ?>/monster.png">
  <style>
    * {
      box-sizing: border-box;
    }
    html, body {
      height: 100%;
      margin: 0;
    }
    .content {
      display: flex;
      height: 100%;
      margin: 0;
      flex-direction: column;
      background-color: #000;
      color: #0f0;
    <?php
  $color = array_reverse(explode(".", $host))[2] ?? false;
  if($color) echo "  color: ", $color, ";\n    ";
?>}
    main {
      display: flex;
      width: 100%;
      max-height: 80%;
      margin: auto;
      flex-direction: column;
      align-items: center;
    }
    img.monster {
      max-width: 80%;
      height: 100%;
    }
    footer {
      margin-top: auto;
      text-align: center;
      color: #0f0;
    }
  </style>
</head>
<body>
  <div class="content">
    <main>
      <img class="monster" src="monster.png">
      <h2>News</h2>
      <ul>
        <li>2023/1/24 - ワイルドカードドメインに対応しました。</li>
        <li>2022/10/24 - OGPを追加しました。</li>
        <li>2022/5/3 - Google Chromeでレイアウトが崩れる問題に気が付きました。</li>
        <li>2022/4/30 - 寄付を頂きました。</li>
        <li>2022/4/26 - 寄付を頂きました。</li>
      </ul>
    </main>
    <footer>
      <hr>
      <p>
        お問い合わせはTwitterへお願いします<br>
        ↓↓↓↓<br>
        <a href="https://twitter.com/intent/tweet?screen_name=_yamader" class="twitter-mention-button">Tweet to @_yamader</a>
      </p>
      <p>&copy; 2023 YamaD</p>
    </footer>
  </div>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>
