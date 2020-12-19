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
 * This is a "Docblock Comment," also known as a "docblock".
 */
require 'header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $msg = $prodobjects->fetchHosting($id, $data);

    $msg1 = $prodobjects->fetchHostingDetails($id, $data);

    //print_r($msg1);
    
} 
?>
<link rel="stylesheet" href="css/swipebox.css">
            <script src="js/jquery.swipebox.min.js"></script> 
                <script type="text/javascript">
                    jQuery(function($) {
            $(".swipebox").swipebox();
        });
    </script>
<!--script-->
</head>
<body>
    <div class="content">
        <div class="linux-section">
            <div class="container" id="title">                         
                <?php echo $msg[0]['html']; ?>                                 
            </div>
        </div>
        <div class="tab-prices">
            <div class="container">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">IN Hosting</a></li>
                        <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">US Hosting</a></li>
                        </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                            <div class="linux-prices">
                                <?php
                                if (!empty($msg1)) {                              
                                    foreach ($msg1 as $result) :
                                        $decoded = json_decode($result['description']);
                                        $space = $decoded->{'webspace'};
                                        $band = $decoded->{'bandwidth'};
                                        $domain = $decoded->{'domain'};
                                        $lang = $decoded->{'lang'};
                                        $mail = $decoded->{'mail'};
                                ?>
                                <div class="col-md-3 linux-price">
                                    <div class="linux-top">
                                    <h4><?php echo $result['prod_name'];?></h4>
                                    </div>
                                    <div class="linux-bottom">
                                        <h5><?php echo $result['mon_price'];?><span class="month"> /-month</span></h5>
                                        <h5><?php echo $result['annual_price'];?><span class="month"> /-per year</span></h5>
                                        <h6><?php echo $domain;?> Domain</h6>
                                        <ul>
                                        <li><strong><?php echo $space;?></strong> -Disk Space</li>
                                        <li><strong><?php echo $band;?></strong> -Bandwidth</li>                                      
                                        <li><strong><?php echo $lang;?></strong> -Technology</li>
                                        <li><strong><?php echo $mail;?></strong> -Mailbox</li>
                                        <li><strong>location</strong> : <img src="images/india.png"></li>
                                        </ul>
                                    </div>
                                    <a href="cart.php?id=<?php echo $result['id']?>&mp=<?php echo $result['mon_price'];?>&ap=<?php echo $result['annual_price'];?>&dm=<?php echo $domain;?>&sp=<?php echo $space;?>&bd=<?php echo $band;?>&lg=<?php echo $lang;?>&ml=<?php echo $mail;?>">Buy now</a>
                                </div>
                                <?php
                                    endforeach;
                                } else {
                                    ?>
                                    <h3>No Records Found !</h3>
                                    <?php
                                }
                                ?>
                                <div class="clearfix"></div>                                                          
                            </div>
                            
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                            <div class="linux-prices">
                                
                                <div class="col-md-3 linux-price">
                                    <div class="linux-top us-top">
                                    <h4>Standard</h4>
                                    </div>
                                    <div class="linux-bottom us-bottom">
                                        <h5>$259 <span class="month">per month</span></h5>
                                        <h6>Single Domain</h6>
                                        <ul>
                                        <li><strong>Unlimited</strong> Disk Space</li>
                                        <li><strong>Unlimited</strong> Data Transfer</li>
                                        <li><strong>Unlimited</strong> Email Accounts</li>
                                        <li><strong>Includes </strong>  Global CDN</li>
                                        <li><strong>High Performance</strong>  Servers</li>
                                        <li><strong>location</strong> : <img src="images/us.png"></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="us-button">buy now</a>
                                </div>
                                <div class="col-md-3 linux-price">
                                    <div class="linux-top us-top">
                                    <h4>Advanced</h4>
                                    </div>
                                    <div class="linux-bottom us-bottom">
                                        <h5>$359 <span class="month">per month</span></h5>
                                        <h6>2 Domains</h6>
                                        <ul>
                                        <li><strong>Unlimited</strong> Disk Space</li>
                                        <li><strong>Unlimited</strong> Data Transfer</li>
                                        <li><strong>Unlimited</strong> Email Accounts</li>
                                        <li><strong>Includes </strong>  Global CDN</li>
                                        <li><strong>High Performance</strong>  Servers</li>
                                        <li><strong>location</strong> : <img src="images/us.png"></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="us-button">buy now</a>
                                </div>
                                <div class="col-md-3 linux-price">
                                    <div class="linux-top us-top">
                                    <h4>Business</h4>
                                    </div>
                                    <div class="linux-bottom us-bottom">
                                        <h5>$539 <span class="month">per month</span></h5>
                                        <h6>3 Domains</h6>
                                        <ul>
                                        <li><strong>Unlimited</strong> Disk Space</li>
                                        <li><strong>Unlimited</strong> Data Transfer</li>
                                        <li><strong>Unlimited</strong> Email Accounts</li>
                                        <li><strong>Includes </strong>  Global CDN</li>
                                        <li><strong>High Performance</strong>  Servers</li>
                                        <li><strong>location</strong> : <img src="images/us.png"></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="us-button">buy now</a>
                                </div>
                                <div class="col-md-3 linux-price">
                                    <div class="linux-top us-top">
                                    <h4>Pro</h4>
                                    </div>
                                    <div class="linux-bottom us-bottom">
                                        <h5>$639 <span class="month">per month</span></h5>
                                        <h6>Unlimited Domains</h6>
                                        <ul>
                                        <li><strong>Unlimited</strong> Disk Space</li>
                                        <li><strong>Unlimited</strong> Data Transfer</li>
                                        <li><strong>Unlimited</strong> Email Accounts</li>
                                        <li><strong>Includes </strong>  Global CDN</li>
                                        <li><strong>High Performance</strong>  Servers</li>
                                        <li><strong>location</strong> : <img src="images/us.png"></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="us-button">buy now</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- clients -->
    <!-- <div class="clients">
        <div class="container">
            <h3>Some of our satisfied clients include...</h3>
            <ul>
                <li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
                <li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
                <li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
                <li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
                <li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
                <li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
            </ul>
        </div>
    </div> -->
<!-- clients -->
        <!-- <div class="whatdo">
            <div class="container">
                <h3>Linux Features</h3>
                <div class="what-grids">
                    <div class="col-md-4 what-grid">
                        <div class="what-left">
                        <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Expert Web Design</h4>
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 what-grid">
                        <div class="what-left">
                        <i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Expert Web Design</h4>
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 what-grid">
                        <div class="what-left">
                        <i class="glyphicon glyphicon-stats" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Expert Web Design</h4>
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="what-grids">
                    <div class="col-md-4 what-grid">
                        <div class="what-left">
                        <i class="glyphicon glyphicon-download-alt" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Expert Web Design</h4>
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 what-grid">
                        <div class="what-left">
                        <i class="glyphicon glyphicon-move" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Expert Web Design</h4>
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 what-grid">
                        <div class="what-left">
                        <i class="glyphicon glyphicon-screenshot" aria-hidden="true"></i>
                        </div>
                        <div class="what-right">
                            <h4>Expert Web Design</h4>
                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div> -->

    </div>
<!---footer--->
<?php
require 'footer.php';
?>