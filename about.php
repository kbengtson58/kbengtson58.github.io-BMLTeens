<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>About Us | Teens at the Bill Memorial Library</title>
	<meta name="desription" content="A description of the teen program and library collection at the Bill Memorial Library in Groton, CT">
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
<h2>About Us</h2>

<p>The Bill Memorial Library has a lot going on for teens in grades 6-12!  Our Young Adult Room offers hardcover fiction, non-fiction, paperbacks, and graphic novels just for you.  We also offer internet access computers that are reserved specifically for teens during popular library times.  <a href="programs.php">Programs</a>, including game nights and book discussions, are held throughout the year.</p>

<img src="images/yaroom.jpg" alt="The young adult room at the Bill Memorial Library" class="bodyimg">

<p>We also have a lot to offer right on this website!  We have <a href="resources.php">online resources</a> available for everything you might need as you study, look for your first job, apply for college, or look for a good book to read.</p>

<p>All of us at the Library want to see you succeed in everything you do, and we want to help in any way we can!  We hope this website will be useful to you.  If you have more questions, are looking for a good book to read, or just want to come and hang out, stop by the Library or <a href="contact.php">get in touch with us here</a>.</p>

<img src="images/snowylibrary.jpg" alt="The Bill Memorial Library building after a light snow" class="bodyimg">

<h3>Want to know more about the Bill Memorial Library?</h3>

<p>Check out the <a href="http://www.billmemorial.org">Library website</a> to learn more about everything it has to offer.</p>
</main>

<aside class="leftsidebar">
<h3>Who Is Mr. Bill?</h3>

<img src="images/fredbill.jpg" alt="A portrait of Frederic Bill" class="bodyimg">

<p class="textleft">Frederic Bill was born in 1833. As a young boy Mr. Bill lived and went to school in our area and he grew up to become a schoolteacher, a bookseller, a publisher, and eventually a businessman in New York City. He retired at the age of 40 and returned to his hometown of Groton, where he bought a farm near the Thames River.</p>	

<p class="textleft">Besides the library, Mr. Bill gave money to help build the Groton Congregational Church, which is just down the street from the library, and in 1912 he paid for the new Groton Heights Elementary School, which is right next door.</p>

</aside>
</div> <!-- Ends "mainWrapper" -->	

<aside class="rightsidebar">
<nav class="primary-menu">
		<?php include('includes/nav.php');?>
</nav>
</aside>

<footer class="clear">
<?php include('includes/footer.php');?>
</footer>
</div> <!-- Ends "contentWrapper" -->

</body>
</html>