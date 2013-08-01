<?php
$path = realpath("./builds"); 

$latest_ctime = 0;
$latest_filename = '';    

$d = dir($path);
while (false !== ($entry = $d->read())) {
  $filepath = "{$path}/{$entry}";
  // if the file is newer than the last ctime, and is a valid file
  if (is_file($filepath) && filectime($filepath) > $latest_ctime && !strstr($filepath, "md5")) {
    $latest_ctime = filectime($filepath);
    $latest_filename = $entry;
  }
}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		<title>Someguy123's Unofficial Tox Repository</title>
	</head>
	
	<body>
		<div class="content">
			<div class="center">
				<img src="http://tox.im/assets/imgs/logo_main.png" alt="Unofficial Tox Repo" />
			</div>
			<h1 class="center">Someguy123's Unofficial Tox Repository</h1>
			<p>This page contains information and links collected by Someguy123 for the open source, encrypted chat client <a href="http://tox.im">Tox</a>.
			On this page you will find binary builds for different platforms to allow you to get started with Tox fast and easily.</p>
			<span id="warning"><b>Warning:&nbsp;</b> These builds are provided for your convenience. As with all software downloaded from the internet, apply correct security precautions to what you're downloading. Scan it with your antivirus, run it in a sandbox or virtual machine etc.</span>
			<div class="block-1">
			  <ol>
				<li><a href="#download">Download</a></li>
				<li><a href="#faq">FAQ</a></li>
				<li><a href="#screenshots">Screenshots</a></li>
				<li><a href="#git">Contribute to this page</a></li>
			  </ol>
			</div>
			<h3 id="download">Binary Downloads available:</h3>
			<a href="/builds/<?=$latest_filename?>"><img src="assets/images/download.png" alt="Windows" /></a>
			<br/>
			<br/>
			<br/>
			<div id="faq">
				<h1>Frequently Asked Questions</h1>
				<b>Q: Why can't I download Tox from Tox.im</b><br/>
				A: The download button is disabled because there aren't any true downloads<br/>
				<hr/>
				<b>Q: Is there any way I can get Tox right now?</b><br/>
				A: <a href="https://github.com/irungentoo/ProjectTox-Core/blob/master/INSTALL.md">Compile it!</a><br/>
				<hr/>
				<b>Q: Are there are Windows downloads available?</b><br/>
				A: Scroll up. They're on this page.<br/>
				<hr/>
				<b>Q: What command line stuff do I use to make nTox work?</b><br/>
				A: ./ntox 66.175.223.88 33445 AC4112C975240CAD260BB2FCD134266521FAAF0A5D159C5FD3201196191E4F5D<br/>
				Tadah.<br/>
				<hr/>
				<b>Q: I can't get this to compile, or I'm having other issues with Tox</b><br/>
				A: The best place to ask for help is on the IRC @ irc.freenode.net #tox<br/>
				<hr/>
				<b>Q: Where do I get the amazing GUI I saw?</b><br/>
				A: You don't. It's a mockup, there is <b>no GUI</b> that comes close to the mockup on tox.im (yet).<br/>
				You can, however, try to compile <a href="https://github.com/nurupo/ProjectTox-Qt-GUI">ProjectTox-Qt-GUI</a><br/>
				<hr/>
				<b>Q: How do I add a friend</b><br/>
				A: Ask them for their ID that their client gives them, in nTox you simply "/f thatlongidtheygiveyou". They have to accept you before you can talk to them.<br/>
				<hr/>
				<b>Q: I compiled the QT GUI, but it's always offline, help?</b><br/>
				A: If you have a settings.ini, open it up and put this inside of it: <a href="https://gist.github.com/nurupo/6e6a76c26df50efafce2">https://gist.github.com/nurupo/6e6a76c26df50efafce2</a><br/>
			</div>
			<div id="screenshots">
				<h2>Screenshots</h2>
				<h4><a href="https://github.com/nurupo/ProjectTox-Qt-GUI">ProjectTox-Qt-GUI</a> running on Windows 8(Image by Someguy123)</h4>
				<img src="http://i.imgur.com/0pr2U6m.png" />
				<hr/>
				<h4><a href="https://github.com/irungentoo/ProjectTox-Core">ProjectTox-Core</a> with ncurses enabled (Toxic) running on crunchbang</h4>
				<img src="http://i.imgur.com/HxATUmU.png" />
				<hr/>
				<h4><a href="https://github.com/stal888/Poison">Poison</a> running on Mac OSX (Image by Pseudonym)</h4>
				<img src="http://i.imgur.com/5Qf1GqU.png" />
				<hr/>
				<h4>nTox_win32 (The Windows download on this site) (Image by Someguy123)</h4>
				<img src="http://i.imgur.com/RurwOfv.png" />
			</div>
		</div>
		<div class="content push" id="git">
			<h2>Contributing to this page</h2>
			<p>Did you know this site is available on GitHub? If you want something to be changed or fixed, do it yourself by <a href="https://github.com/Someguy123/tox-site/fork">forking the site</a> and then <a href="https://help.github.com/articles/using-pull-requests">submit a pull request</a> with your changes to my website. After I've reviewed your request and pulled it, it will soon appear on this page. Thanks to those who contribute to my site, making tox better for others to use.</p>
			<p class="p-1">Useful to you? Donate :) <strong>1SoMGuYknDgyYypJPVVKE2teHBN4HDAh3</strong> or<strong> LSomguyTSwcw3hZKFts4P453sPfn4Y5Jzv</strong></p>
		</div>
	</body>
</html>
