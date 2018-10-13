<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Teens at the Bill Memorial Library</title>
	<meta name="desription" content="A page containing information for the teenage patrons of the Bill Memorial Library in Groton, CT">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- Timestamp Java Code Start -->
	<script>
 
	function printDate() {
    var d = new Date();
    var day = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
    var hours = d.getHours();
    var minutes = d.getMinutes();
     
    if (minutes < 10) {
        minutes = "0" + minutes;
    }
 
    var suffix = "AM";
    if (hours >= 12) {
        suffix = "PM";
        hours = hours - 12;
    }
     
    if (hours == 0) {
        hours = 12;
    }
   document.write("It is " + hours + ":" + minutes + " " + suffix + " on " + month + "/" + day + "/" + year);
	} 
	</script>
	<!-- End Timestamp -->
</head>

<body>

<div class="contentWrapper">
<header class="banner">
<?php include('includes/header.php');?>
</header>

<div class="mainWrapper">

<main>
<h2>Welcome to your Library!</h2><br>

<h3>December News</h3><br>

<article>
	<h4>Teen Bulletin Boards Gets a Facelift</h4>
	
	<figure class="floatright">
		<img src="images/yafireplace.jpg" alt="The fireplace in the young adult room of the Bill Memorial Library">
		<figcaption>The YA room has something for everyone.  Stop by today!</figcaption>
	</figure>
	
	<p>I moustache you if you have noticed the new teen bulletin board.  Located on the back of the door leading from the circ desk to the teen room, this board has always held vital information for your everday life, but it has never before been quite so dashing.  Next time you are in to check out a book or participate in a program, take a gander at the YA room's newest poster man and maybe take a stab at answering our newest "Question of the Moment".  This month's is "Why do you like to read?"</p>
	
</article>

<article>
	<h4>New Teen Friends Group to Focus on Library Halloween Event</h4>
	
	<p>For the last two years, the Bill Memorial Library has transformed into a spook-tacular destination for haunted house lovers all around the Groton community.  Attracting more than 100 people each year, the Haunted Library events are becoming more popular and more highly anticipated.  This year, 175 people dared to enter the Library's Creepy Carnival and Monstrous Maze.</p>
	
	<figure  class="floatleft">
		<img src="images/friends.jpg" alt="Decorative text reading 'Friend Your Library'">
		<figcaption>Join the Friends today!</figcaption>
	</figure>
	
	<p>Planning has already started for next year's Haunted Library event thanks to the newly formed Teen Friends of the Library group.  The Haunted Library events of 2015 and 2016 were successful because of the hard work of a group of dedicated teen volunteers, and these same teens have returned to begin planning 2017's festivities.  The group has settled on the theme "Haunted Fandoms" which will focus on spookifying popular television shows, movies, and YA novels.</p>
	
	<p>If you are interested in being a part of the Teen Friends group, drop into the library to say hi or <a href="contact.php">fill out this contact form</a> so we can get in touch with you about upcoming meetings.</p>
</article>	
</main>

<aside class="leftsidebar">
<img src="images/quote.png" alt="An open quotation mark" class="floatleft">

<p>The more you read, the more things you will know; The more you learn, the more places you'll go.<br><br>
-Dr. Seuss</p>
</aside>
</div> <!-- Ends "mainWrapper" -->	

<aside class="rightsidebar">
<nav class="primary-menu">
		<?php include('includes/nav.php');?>
</nav>
</aside>

<footer class="clear">
<?php include('includes/footer.php');?></footer>
</div> <!-- Ends "contentWrapper" -->

</body>


</html>