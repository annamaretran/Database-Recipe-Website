<?php 
$dsn = 'mysql:host=localhost;dbname=recipe_ninja_database';
$username = 'root';
$password = '';

try {
    $db= new PDO($dsn, $username, $password);
} 
catch (PDOException $e) {
    $error= $e->getMessage();
    echo '<p> Unable to connect to database:' .$error;
    exit();
}
	session_start();
	if (!isset($_SESSION['user'])) {
  	header("Location: loggedout.html");
	}

?>
<!DOCTYPE html>
<html lang = "en">

<head> 
	<meta charset="utf-8">
	<title>Recipe Ninja</title>
	<link rel="shortcut icon"
            href="favicon.ico">
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="tips.css">
</head>

<body>

<header>
	<h1>Tips and Tricks</h1>
	<label>&nbsp;</label>
	<form action="logout.php" method="post">
	<input type="submit" id="button" name="logout" value="Logout">
	</form>
	<h2><i>How to get better at cooking</i></h2>
</header>
<nav id="nav_menu">
	<ul>
		<li><a href="explore.php">Explore</a></li>
		<li><a href="my_page.php">My Page</a></li>
		<li><a href="profile_info.php">My Profile</a></li>
		<li><a class="current" href="tips_tricks.php">Tips & Tricks</a></li>
		<li><a href="about.html">About</a></li>		
		<li class="lastitem"><a href="donation.php">Donate!</a></li>
	</ul>
</nav>

<aside>
	<h3> Find the best cooking tools for you! </h3>
	<p> One of the most important parts of cooking is having the proper supplies, follow these links to see our favorite recommendations! </p>
	<ul>
		<li><a href= "https://dalstrong.com/collections/chefs-knife-1?msclkid=97eace6c5d701cc819e7ae0364348f2e"><b>Knives</b></a></li>
		<li><a href= "https://nymag.com/strategist/article/best-pots-and-pans.html"><b>Pots and Pans</b></a></li>
		<li><a href= "https://buyersguide.org/panini-press/t/best?msclkid=8033424cd1c3168a13a42223e8136164&m=e&d=c&c=84044044932482&oid=kwd-84044246211114:loc-190&qs=best%20panini%20press&lp=79247&li=&nw=o&nts=1&tdid=8626088"><b>Panini Press</b></a></li>
		<li><a href= "https://www.goodhousekeeping.com/appliances/blender-reviews/g4864/best-blender-reviews/?utm_source=bing&utm_medium=cpc&utm_campaign=arb_bg_ghk_d_bm_hp_g4864&msclkid=1a91cace2f2e164788ddaaa11538ffa4"><b>Blender</b></a></li>
		<li><a href= "https://www.foodnetwork.com/how-to/packages/shopping/product-reviews/best-air-fryer"><b>Air Fryer</b></a></li>
	
	</ul>
</aside>
	
<main>
	<h1> 10 Tips to Improve Your Cooking Experience </h1>
	<h3> We searched through our team and compiled a list of their very favorite recipe tricks and hacks to improve your overall kitchen experience </h3>
	
	
	<h2> 1. For glossy, restaurant-quality sauces, finish them with a pat of cold butter... </h2>
	<p> Do you ever wonder how restaurants get their sauces so shiny and rich? It's because they finish them with a few pats of cold butter (aka monter au beurre) before serving them. Next time you're making a sauce, try adding a few pats of cold butter at the very end to add richness and shine.  </p>
	<h2> 2. And always deglaze your pan. </h2>
	<p> I remember my teacher watching in horror as I scrubbed the burnt bits out of a hot pan. Turns out, those brown bits that get stuck to the bottom of the pan (aka fond) are what makes pan sauces so flavorful! Instead of washing them down the drain, deglaze them with wine or stock to build a flavorful base for your sauce.  </p>
	<h2> 3. Completely dry your meats before cooking them. </h2>
	<p> Whether it's roasted chicken or seared scallops, drying them ensures you'll get a crisp, golden skin that won't stick to the pan. Pat them dry with paper towels or let them air-dry in the cooler for a few hours before cooking them. </p>
	<h2> 4. For maximum flavor, toast your nuts and spices. </h2>
	<p> Toasting nuts and spices brings out their flavors and takes your cooking to a whole new level. For spices, give them a quick toasting in a dry pan over low heat or bloom them in hot oil. For nuts, toast them in a 350??F oven for 10???15 minutes before cooking with them. </p>
	<h2> 5. If your food tastes flat, add a touch of acid. </h2>
	<p> Acid makes your food come to life. A squeeze of lemon juice or a dash of vinegar cuts through fat, brightens flavors, and wakes up flat dishes. Just like salt and sugar, acid balances flavors and makes food shine. </p>
	<h2> 6. Cooking for a crowd is all about keeping it simple. </h2>
	<p> There are several tricks to make cooking for a crowd easier, but the best thing I learned was to keep it simple. If you plan on having family over for dinner, don't cook several courses ??? instead, focus on making one thing and make it great. Roasted chicken and pasta were always safe bets and made serving guests a breeze. </p>
	<h2> 7.  Finish cooking your pasta in its sauce and always reserve some pasta water.</h2>
	<p> Cook your pasta until it's almost done, then transfer it to your sauce to finish cooking. The pasta will absorb a ton of flavor and cling to the sauce better. If the sauce is too thick, add some reserved pasta water to thin it out and give it a beautifully glossy shine. </p>
	<h2> 8. For perfectly juicy meat, brine it. </h2>
	<p> Do you ever wonder why pork chops and chicken are so much juicer when you get them in a restaurant? That's because they brine them (which is just a fancy word for soaking meat in salt water). Brining meat makes them juicy, succulent, and bursting with flavor (and a brined meat is way more forgiving when overcooked). </p>
	<h2> 9. Be patient and stop poking your meat.... </h2>
	<p> When I first started classes I would flip, poke, and move meat as it cooked. I soon realized it takes a long time to get a perfectly dark sear and that patience was the secret ingredient to a perfect steak. Keep your heat high, flip it once, and stop poking it. When the meat is done, it will release itself ??? no scraping with a spatula needed. </p>
	<h2> 10. Hone your knife EVERY. TIME. YOU. COOK. </h2>
	<p> Before you start cooking for the day, hone ??? or realign ??? your knife. It won't sharpen it, but it will keep the edge aligned and prevent it from becoming warped. </p>
	
	
	
</main>

</body>

</html>