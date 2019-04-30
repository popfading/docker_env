<?php
$link = mysqli_connect("db", "root", "secret", "test");

/* 接続状況をチェックします */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* サーバーが稼動中かどうかを確認します */
if (mysqli_ping($link)) {
    printf ("Our connection is ok!\n");
} else {
    printf ("Error: %s\n", mysqli_error($link));
}

/* 接続を閉じます */
mysqli_close($link);
?>