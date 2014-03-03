﻿<?php include('header.php'); ?>
<body><!-- top area starts -->
    <div class="menubar">
        <div class="github-fork-ribbon-wrapper left">
            <div class="github-fork-ribbon">
            <a href="https://github.com/jimaek/jsdelivr">Fork me on GitHub</a>
            </div>
        </div>
        <div class="container">
            <header class="clearfix">
                <a class="pull-left" href="index.php">
                    <img src="img/jsdelivr-logo.png" alt="jsdelivr.com" width="167" height="50">
                </a>
				<div class="plugins pull-left">
                    <a href="http://wordpress.org/extend/plugins/jsdelivr-wordpress-cdn-plugin/">
                        <img src="img/wordpress-logo-square.png" width="40" height="40" alt="Get jsDelivr for WordPress" title="Get WordPress Plugin">
                    </a>
                <!--<img src="img/joomla-s.png" width="40" height="40" alt="Get jsDelivr for Joomla" title="Joomla plugin coming *not* soon">
                    <img src="img/drupal.png" width="40" height="40" alt="Get jsDelivr for Drupal" title="Drupal plugin coming *not* soon">-->
                </div>
                <nav class="pull-right">
                    <ul>
                        <li><a href="network.php">Network</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a target="_blank" href="http://blog.jsdelivr.com">Blog <i class="icon-share-alt"></i></a></li>
                        <li id="submit"><a href="https://github.com/jimaek/jsdelivr" class="btn btn-info">Submit</a></li>
                    </ul>
                </nav>
            </header>
        </div><!-- container ends -->
    </div><!-- menu ends -->
	   
    <div class="page-title">
    	<div class="container">
    	<h2>Sponsorships</h2>
    	</div><!-- container ends -->
    </div>
    
    
    <div class="container content"><!-- actual container for content starts -->
        <div class="row first">
            <div class="span12">
                <h2>About</h2>
                <p>
                    jsDelivr is a free CDN (Content Delivery Network) where any web developer can host their files,
                    including CSS, fonts, JavaScript, jQuery plugins, etc.
                </p>
                <p>
                     jsDelivr is a public open-source CDN where anyone can submit a project to be hosted
                     and delivered by our network. Most people probably know that Google hosts jQuery and a few other popular libraries.
                </p>
                <p>
                     We don’t look at the popularity of the project to approve it for inclusion in jsDelivr.
                     Plus a lot more types of projects are allowed, like CSS frameworks, fonts, WordPress plugins etc.
                </p>
                <p>
                     And by using GitHub, we allow the community to fully interact with jsDelivr by adding and updating files.
                </p>

                <h2>Sponsors</h2>
                <p>Currently jsDelivr is sponsored by:</p>
                <ul>
                    <li>Cedexis - Load balancing services.</li>
                    <li>MaxCDN - Unlimited traffic and SSL.</li>
                    <li>Leapswitch - 2 VPS in Portugal and Ukraine</li>
                    <li>Prometeus - 1 VPS in Italy</li>
                    <li>SecureAX - 1 VPS in Singapore</li>
                    <li>Jetdino - 1 VPS in Indonesia</li>
                </ul>

                <h2>Info</h2>
                <p>
                     jsDelivr has been around from June of 2012 and is getting more popular every month.
                     Currently serves around 10TB of traffic per month.
                </p>

                <h2>What we are looking for</h2>
                <ul>
                    <li>
                        CDN Providers - Min Requirements: At least 5TB of monthly traffic. Custom CNAME. Custom CNAME SSL. Pull Zone.
                        <ul>
                            <li>Hosting companies that resell major CDN providers</li>
                            <li>Hosting companies that have their own CDN networks.</li>
                        </ul>
                    </li>
                    <li>
                        POPs - Min Requirements: 5GB HDD, 1TB Bandwidth, 512MB RAM, 2 cores CPU, CentOS x64
                        <ul>
                            <li>VPS servers with good network speed and uptime.</li>
                            <li>Dedicated servers with good network speed.</li>
                            <li>Specialized file storage services with FTP or Rsync access. Must support Custom CNAME and SSL.</li>
                            <li>All POP locations will be used to serve static content. Nginx+SSL will be installed. We do not expect big CPU loads.</li>
                            <li>The traffic is load balanced by intelligent software that will monitor all POPs for performance and uptime.</li>
                        </ul>
                    </li>
                    <li>Web services to integrate our CDN.</li>
                    <li>Companies to help us promote our services.</li>
                    <li>Developers/companies that want to utilize our CDN for their(free)projects.</li>
                </ul>

                <h2>What we can offer</h2>
                <ul>
                    <li>About page link</li>
                    <li>Logo in footer</li>
                    <li>POP location on Map with name of the company</li>
                    <li>Media mentions - Current Media/Mentions/Links</li>
                    <li>We will consider any other request</li>
                </ul>
                 <p>*We wont offer all of the above to all sponsors, it depends on the offer.</p>
            </div>
        </div>

<?php include('footer.php'); ?>
