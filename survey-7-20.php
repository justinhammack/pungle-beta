<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
    <title></title>
    <meta name="description" content="Take a brief survey, possibly win $20!">
    <meta name="author" content="pungle.me">
<?php require("include/head.php"); ?>

    <!-- !!MUST SET THIS IMPORTANT!! -->
    <link rel="canonical" href="http://pungle.me/survey/" />

    <style type="text/css">
        #emailForm { -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius:4px; height:20px; border:1px solid #ccc; padding:3px 0 1px 5px; line-height: normal; margin-top: 5px; width: 200px; }
        #submitEmail { width: 85px; }
    </style>
</head>

<body>
<?php require("include/nav.php"); ?>

    <div id="subheader" class="clearfix">
        <div class="row">
            <div class="col col_16"><h1 style="display: inline-block"><b>SURVEY</b> TIME</h1></div>
        </div>
    </div>
    
    <div id="content" class="clearfix">
        <div class="row">
            <div class="col col_16">
                <?php include 'include/referrer.php'; ?>
                <br/>

                
                <input type="text" placeholder="<?php echo $placeHOLDER; ?>" id="emailForm">                
                <input type="submit" class="signup" id="submitEmail" value="Submit">

                <?php if ($showREF == true) { ?>
                    <br/><a href="/survey/?id=<?php echo $id; ?>">Link</a>
                <?php } ?>
                
                <br/><br/>
                <iframe src="https://spreadsheets.google.com/spreadsheet/embeddedform?formkey=dHI2Z3ZhNW1qV0s3UGFHT1NVLU8zR2c6MQ" width="940" height="623" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
            </div>
        </div>

        <div class="row">
            <div class="col col_16">
                <h3><i>Share to increase your odds of winning!</i></h3>
                <p>
                    <br/>Enter your email to generate a personalized link you can share on Facebook & Twitter. Every person you send our way earns you an extra chance to win. Easily double your odds with a just a few clicks!<br/>
                    
                    
                </p>
            </div>            
        </div>

        <div class="row">
            <div class="col col_16 align_justify">
                <p>
                    <small>
                        <b>Contest Rules & Regulations</b><br/>
                        1. Agreement: No purchase is necessary to enter the Contest. The act of entering the Contest constitutes acceptance of the Contest Rules and decisions of the Contest judge.<br/>
                        2. Sponsor(s): The Contest Sponsor is Pungle, LLC.<br/>
                        3. Eligibility: The Contest is open to legal residents in the United States of America, 18 years of age and older, except for employees or contractors of the Contest Sponsor(s) or their advertising or promotional agencies or affiliates, and immediate families of or any one living with any employee or contractor of the Contest Sponsor(s) or their advertising or promotional agencies or affiliates. The Contest is void where prohibited by law. Contestants who reside in areas where the Contest is prohibited by law may participate in the Contest but will be ineligible for the prizes. Facsimiles and illegible entries are not acceptable. Chances of winning depend on the total number of eligible entries received. One entry per person per household.<br/>
                        4. Contest Instructions: To enter, contestants must a) Fille out the survey found on this page.<br/>
                        5. Contest Period: This Contest runs July 20 – September 1, 2011. On September 1, 2011 at or around noon, a random draw of all eligible entries submitted will take place. The selected contestant will be contacted by a representative of Pungle and announced on our Facebook Page.<br/>
                        6. Prize(s): One winner will be chosen from all entries collected for the contest prize.   The prize for this contest will be a $20 Amazon Gift Card.<br/>
                        7. Other: All information collected will be used for the purposes of administering the Contest and for Contest Sponsor’s internal marketing purposes only and will not be sold or rented to third parties. All personal information collected by the Contest Sponsor(s) will be kept in accordance with our privacy policy, which can be found in the footer below. All decisions of the Contest judge are final. The Contest is governed by the laws of Washington and the laws of the United States of America applicable therein. The Contest Sponsor(s) reserve the right to cancel or modify the Contest or the Contest Rules at any time without notice. The Contest Sponsor(s) reserve the right to substitute any prize or portion of the prize with a prize of equal or greater value. All prizes are awarded as-is and no warranties or guarantees are implied or expressed. All prizes are non-transferable and are not convertible to cash. The Contest Sponsor(s) are not liable for any errors or negligence that may arise in connection with this Contest.
                    </small>
                </p>
            </div>
	    </div>
    </div>

<?php require("include/footer.php"); ?>

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
	<script>!window.jQuery && document.write('<script src="/core/libs/jquery.min.js" type="text/javascript"><\/script>')</script> 
  
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>
	<script>!$.ui && document.write('<script src="/core/libs/jquery-ui-1.8.9.min.js" type="text/javascript"><\/script>')</script>

    <script type="text/javascript">
	    $(document).ready(function(){
	        
	        $("input#emailForm").keyup(function(event) {
	            if (event.keyCode == '13') window.location = "/survey/?update=" + $('input#emailForm').val();
	            $("input#submitEmail").click(function() { 
	                window.location = "/survey/?update=" + $('input#emailForm').val();
	            });
	        });
	        
	    });	    
	</script>
		    
</body>

</html>
