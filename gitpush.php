<?php

  if(isset($_GET['fileid'])) {
    $fileid = $_GET['fileid'];
    $filepath = "https://drive.google.com/uc?export=download&id=" . $fileid;

    $data = file_get_contents($filepath);
    file_put_contents('./download.csv', $data);

    exec('git add ./download.csv && git commit -m "auto commit by Google Apps." && git push origin master');
  }
