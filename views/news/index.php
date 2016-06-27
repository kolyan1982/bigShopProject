<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8"/>
    <title>Culinary by Free Css Templates</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="../../template/css/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <h1><a href="#">Culinary</a></h1>
            <h2><span>Template By Free CSS Templates</span></h2>
        </div>
        <!-- end div#logo -->
    </div>
    <!-- end div#header -->
    <div id="menu">
        <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <!-- end div#menu -->
    <div id="page">
        <div id="sidebar">
            <ul>
                <li>
                    <h2 class="categories">Lorem Ipsum</h2>
                    <ul>
                        <li><a href="#">Fusce dui neque fringilla</a></li>
                        <li><a href="#">Eget tempor eget nonummy</a></li>
                        <li><a href="#">Magna lacus bibendum mauris</a></li>
                        <li><a href="#">Nec metus sed donec</a></li>
                        <li><a href="#">Magna lacus bibendum mauris</a></li>
                        <li><a href="#">Velit semper nisi molestie</a></li>
                        <li><a href="#">Eget tempor eget nonummy</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="content">
            <?php foreach ($newsList as $newsItem): ?>
            <div class="post">
                <h2 class="title"><a href="/news/<?php echo $newsItem['id'] ?>"><?php echo $newsItem['title'] ?></a>
                </h2>
                <p class="byline"><?php echo $newsItem['date'] ?></p>
                <div class="entry">
                    <p><?php echo $newsItem['short_content'] ?></p>
                </div>
                <div class="meta">
                    <p class="links"><a href="/news/<?php echo $newsItem['id'] ?>" class="comments">Read more</a></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>


        <!-- end div#content -->

        <!-- end div#sidebar -->

    </div>
    <!-- end div#page -->
    <div id="footer">
        <p>Copyright &copy; 2015 Culinary. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org">FCT</a>.&nbsp;&nbsp;<a
                href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
    </div>
    <!-- end div#footer -->
</div>
<!-- end div#wrapper -->
</body>
</html>


