<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="pungle.me">
<?php require("include/head.php"); ?>

    <!-- !!MUST SET THIS IMPORTANT!! -->
    <link rel="canonical" href="http://pungle.me/" />
</head>

<body>
<?php require("include/nav.php"); ?>

    
    <div id="content" class="clearfix">
        <div class="row">
            <div class="col col_13"><p>13</p></div>
        </div>

        <div class="row">
            <div class="col col_8"><p>8</p>
                <div class="row">
                    <div class="col col_3"><p>3</p></div>
        	        <div class="col col_5"><p>5</p></div>
				</div>
            </div>
            <div class="col col_5"><p style="line-height: 202px;">5</p></div>
        </div>

        <div class="row">
            <div class="col col_2"><p>2</p></div>
            <div class="col col_2"><p>2</p></div>
            <div class="col col_2"><p>2</p></div>
            <div class="col col_2"><p>2</p></div>
            <div class="col col_2"><p>2</p></div>
            <div class="col col_2"><p>2</p></div>
            <div class="col col_1"><p>1</p></div>
        </div>
    </div>

<?php require("include/footer.php"); ?>
    
</body>

</html>