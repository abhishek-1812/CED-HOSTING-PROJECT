<?php
/**
 * Short description for code
 * php version 7.2.10
 * 
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Singh <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName 
 * 
 * This is a "Docblock Comment," also known as a "docblock."  The class'
 * docblock, below, contains a complete description of how to write these.
 */
require 'header.php';
if (empty($_SESSION['userdata'])) {
    echo '<script>window.location.href="login.php";</script>';
} else {

}
?>

<script type="text/javascript">
    $(function() {
    $('.team a').Chocolat();
    });
</script>	
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
                        <script type="text/javascript">
                            $(function() {
                            
                                $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

                            });
                        </script>						
<!--script-->
</head>
<body>
    <!---header--->
        <!-- <div class="header">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
        
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <i class="sr-only">Toggle navigation</i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </button>				  
                            <div class="navbar-brand">
                                <h1><a href="index.php"><span id="ced">Ced</span>-<span id="host">Hosting</span></a></h1>
                            </div>
                        </div>

        
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
                                        <ul class="dropdown-menu">
                                        <li><a href="linuxhosting.php">Linux hosting</a></li>
                                            <li><a href="wordpresshosting.php">WordPress Hosting</a></li>
                                            <li><a href="windowshosting.php">Windows Hosting</a></li>
                                            <li><a href="cmshosting.php">CMS Hosting</a></li>
                                          </ul>
                                        </li>
                                        
                                
                                <li><a href="#">Blog</a></li>
                                
                            
                                <li><a href="#">Pricing</a></li>

                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="#"><i class='fas fa-shopping-cart' style='font-size:22px;color:#e7663f'></i></a></li>
                                <li><a href="login.php">Log In</a></li>
                            </ul>
                                      
                        </div>
                    </div>
                </nav>
            </div>
        </div> -->
    <!---header--->
    <!---banner--->
        <div class="banner">
            <div class="container">
                <div class="banner-grids">
                    <div class="col-md-6 banner-grid">
                        <img src="images/srceen.png" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-6 banner-grid">
                        <h3>Unlimited Web Hosting</h3>
                        <p>this hero area to show off some of your nice work. You can even have a video inside it since it’s great as a secondary call to action alongside this button underneath this text.</p>
                        <a href="" class="button">get started</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    <!---banner--->
    <!---brilliantly --->
            <div class="content">
                <div class="brilliant-section">
                    <div class="container">
                        <h2>this is what we do.</h2>
                        <h5>We get the job done, no matter the project</h5>
                        <div class="brilliant-grids">
                            <div class="col-md-4 brilliant-grid">
                                <div class="brilliant-left">
                                <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                                </div>
                                <div class="brilliant-right">
                                    <h4>Expert Web Design</h4>
                                    <p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-4 brilliant-grid">
                                <div class="brilliant-left">
                                <i class="glyphicon glyphicon-cloud" aria-hidden="true"></i>
                                </div>
                                <div class="brilliant-right">
                                    <h4>ftp services</h4>
                                    <p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-4 brilliant-grid">
                                <div class="brilliant-left">
                                <i class="glyphicon glyphicon-signal" aria-hidden="true"></i>
                                </div>
                                <div class="brilliant-right">
                                    <h4>Support Service</h4>
                                    <p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="brilliant-grids">
                            <div class="col-md-4 brilliant-grid">
                                <div class="brilliant-left">
                                <i class="glyphicon glyphicon-globe" aria-hidden="true"></i>
                                </div>
                                <div class="brilliant-right">
                                    <h4>multi domain</h4>
                                    <p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-4 brilliant-grid">
                                <div class="brilliant-left">
                                <i class="glyphicon glyphicon-link" aria-hidden="true"></i>
                                </div>
                                <div class="brilliant-right">
                                    <h4>Link Building</h4>
                                    <p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-4 brilliant-grid">
                                <div class="brilliant-left">
                                <i class="glyphicon glyphicon-phone" aria-hidden="true"></i>
                                </div>
                                <div class="brilliant-right">
                                    <h4>Mobile Optimization</h4>
                                    <p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            
                    <div class="price-section">
                        <div class="container">
                            <h3>transparent prices</h3>
                            <h5>Premium quality, low prices guaranteed!</h5>
                            <div class="price-grids">
                                <div class="col-md-3 price-grid">
                                    <div class="pricing">
                                        <div class="price-top">
                                            <h4>Bronze</h4>
                                        </div>
                                        <div class="price-bottom">
                                            <h6>$199/<span>month</span></h6>
                                            <ul>
                                                <li>2 Concepts</li>
                                                <li> 12 Total Revisions</li>
                                                <li>1 Year Free Hosting</li>
                                                <li> 1 Gb Disk Space</li>
                                                <li> 10 Email Address</li>
                                                <li> 2 Conference Calls</li>
                                                <li> E-mail Support</li>
                                            </ul>
                                            <a href="" class="button1">
                                            sget started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 price-grid">
                                    <div class="pricing">
                                        <div class="price-top">
                                            <h4>Silver</h4>
                                        </div>
                                        <div class="price-bottom">
                                            <h6>$499/<span>month</span></h6>
                                            <ul>
                                                <li>2 Concepts</li>
                                                <li> 16 Total Revisions</li>
                                                <li>1 Year Free Hosting</li>
                                                <li> 2 Gb Disk Space</li>
                                                <li> 20 Email Address</li>
                                                <li> 5 Conference Calls</li>
                                                <li> E-mail Support</li>
                                            </ul>
                                            <a href="#" class="button1">get started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 price-grid">
                                        <div class="seller">
                                        </div>
                                    <div class="pricing">
                                        <div class="price-top">
                                            <h4>Gold</h4>
                                        </div>
                                        <div class="price-bottom">
                                            <h6>$799/<span>month</span></h6>
                                            <ul>
                                                <li>2 Concepts</li>
                                                <li> 18 Total Revisions</li>
                                                <li>1 Year Free Hosting</li>
                                                <li> 4 Gb Disk Space</li>
                                                <li> 30 Email Address</li>
                                                <li> 7 Conference Calls</li>
                                                <li> E-mail Support</li>
                                            </ul>
                                            <a href="#" class="button1">get started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 price-grid">
                                    <div class="pricing">
                                        <div class="price-top">
                                            <h4>Platinum</h4>
                                        </div>
                                        <div class="price-bottom">
                                            <h6>$777/<span>month</span></h6>
                                            <ul>
                                                <li>Unlimited Concepts</li>
                                                <li> Unlimited Revisions</li>
                                                <li>1 Year Free Hosting</li>
                                                <li> Unlimited Gb Disk Space</li>
                                                <li> 100 Email Address</li>
                                                <li> 20 Conference Calls</li>
                                                <li> Live Support</li>
                                            </ul>
                                            <a href="#" class="button1">get started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                <!---prices--->
                <!---posts--->
                    <div class="post-section">
                        <div class="container">
                            <h3>Check our recent posts</h3>
                            <h5>We like to keep everyone updated</h5>
                            <div class="post-grids">
                                <div class="col-md-4 post-grid">
                                    <a href="single.php" class="mask"><img src="images/p1.jpg" class="img-responsive zoom-img" alt="/"></a>
                                    <a href="single.php"><h4>Vestibulum ipsums eros</h4></a>
                                    <p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart from the competition.</p>
                                </div>
                                <div class="col-md-4 post-grid">
                                    <a href="single.php" class="mask"><img src="images/p2.jpg" class="img-responsive zoom-img" alt="/"></a>
                                    <a href="single.php"><h4>Vestibulum ipsums eros</h4></a>
                                    <p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart from the competition.</p>
                                </div>
                                <div class="col-md-4 post-grid">
                                    <a href="single.php" class="mask"><img src="images/p3.jpg" class="img-responsive zoom-img" alt="/"></a>
                                    <a href="single.php"><h4>Vestibulum ipsums eros</h4></a>
                                    <p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart from the competition.</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                <!---posts--->
            </div>	
<?php
require 'footer.php';
?>