<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <?php
      $quoteArray = array("A penny saved is a penny earned.",
                            "Do unto others as you would have them do to unto you.",
                            "Peter Piper picked a pack of pickled peppers.",
                             "If at first you don't succeed, try, try again.",
                             "Success comes before work only in the dictionary.");
      $myquote = $quoteArray[rand(0,4)];
    ?>
</head>
<body>
<!--  This is where I put my picture -->
<a href="http://p1.ambitiously.me/images/dickpic.jpg">
    <img src="images/dickpicicon.jpg" title="Picture of Dick" />
</a>
<h1>William Richardson "Dick" Blair IV</h1>
<!-- This section is for the intro -->
<section class="padded">
    Dick Blair is currently a Masters candidate at the Harvard Extension School studying Software Engineering.
    Dick currently works as a programmer at the United Services Automobile Association (USAA). Prior to USAA, Dick
    served as an operational rocket scientist on the Patriot missile system. During his 20 years of service in the Army,
    he served on 12 combat and restricted tours. He has multiple years of command and staff experience, including as
    the United Nations Command's Ambassador to the Republic of Korea - US Alliance, command of a 212 strong Patriot
    battery, and command of the Army's World Class Opposing Force. Dick managed 134 projects in the military, including
    an $11 billion construction and acquisition project. Dick's bachelor's degree is in German. Dick's hobbies include
    learning languages, and he has certificates in Chinese, Arabic, and Korean. Dick also has an interest in
    information security topics. He's recently served as the Vice President of the board for the Alamo Chapter of
    (ISC)2 and the keynote speaker for Secure San Antonio.
</section>
<br/>
<!--This section is for the random quotes -->
<footer class="bottom">
    I am thinking of a famous quote that I am sure someone important said:
    <div id="quote">
        <?php
            echo $myquote;
        ?>
    </div>
</footer>


</body>
</html> 