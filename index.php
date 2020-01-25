<?php
error_reporting(0);
?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <title>Zxilly's Photograph</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="icon" href="icon.png">
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css"/>
    </noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
        <header id="header">
            <h1><a href="index.php"><strong>影像</strong> by Zxilly</a></h1>
            <nav>
                <ul>
                    <li><a href="#footer" class="icon solid fa-info-circle">关于</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <div id="main">
            <?php
                        $file=fopen("dat.csv","r");
                        while($data=fgetcsv($file))
                        {
                            $filename=$data[0];
                            $photoname=$data[1];
                            $photodes=$data[2];
                            echo <<<EOF
<article class="thumb">
<a href="images/$filename" class="image"><img src="images/$filename" alt="" /></a>
<h2>$photoname</h2>
<p>$photodes</p>
</article>
EOF;
                        }
            fclose($file);
                        ?>
        </div>

        <!-- Footer -->
        <footer id="footer" class="panel">
            <div class="inner split">
                <div>
                    <section>
                        <h2>Zxilly 的照片</h2>
                        <p>这是 Zxilly ，喜爱编程与摄影，这个网页包含了一些我觉得尚可的影像作品。</p>
                        <p>照片主要由索尼黑卡 5 拍摄，部分照片由 LG G7 ThinQ 拍摄。</p>
                        <p>所有内容采用 <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh">CC BY-NC-SA
                                4.0</a> 协议进行许可，在您遵循此协议的情况下，可以自由共享与演绎。</p>
                    </section>
                    <section>
                        <h2>Follow me on ...</h2>
                        <ul class="icons">
                            <li><a href="https://learningman.top" class="icon brands fa-wordpress"><span class="label">Blog</span></a>
                            </li>
                            <li><a href="https://github.com/Zxilly" class="icon brands fa-github"><span class="label">GitHub</span></a>
                            </li>
                        </ul>
                    </section>
                    <p class="copyright">
                        &copy; 2017-2020 Zxilly. Opensourced as <a href="https://github.com/Zxilly/CamShow">CamShow</a>.
                    </p>
                </div>
            </div>
        </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.poptrox.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>