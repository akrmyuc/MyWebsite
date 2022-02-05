<?php
$message = "こんにちは！閲覧ありがとう！";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>あかりのポートフォリオサイト</title>
  <meta name="description" content="あかりのポートフォリオサイトです。">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <div class="container">
      <div class="icon">
        <img src="img/akari.png" width="120" height="120" alt="あかりのアイコンです">
      </div>
      <div class="info">
        <h1>Akari Miyauchi</h1>
        <p><?= $message ?></p>
      </div>
    </div>
  </header>

  <section class="works">
    <h1>WORKS</h1>