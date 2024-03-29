<?php
session_start();
$frm_error=isset($_SESSION['frm_error'])?$_SESSION['frm_error']:null;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Digital Ocean</title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="scripts/css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="bootstrap/lib/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/lib/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row nav-top">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p style="line-height: 40px;font-weight:bold;font-size: 12px" >
                    <span class="btn btn-info" style="  font-weight: bold;  text-transform: uppercase;font-size:10px ;width: 38px;height: 19px;line-height: 5px;padding-left:5px;color: #031b4e;  ">New</span>
                    <a href="" >
                        Fresh features and 1-Click Apps for DigitalOcean Kubernetes
                    </a><i class="fas fa-angle-right"></i></p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <nav  class="header">
                <ul class="nav justify-content-end">

                    <li class="nav-item">
                        <a  class="nav-link " href="#">Docs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Sign in</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <hr style="margin: 0;padding: 0"/>
    <!-- End nav-top -->
    <div class="row ">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-top">
                <a class="navbar-brand ml-5" href="#" >
                    <svg  style="fill: #0069ff" xmlns="http://www.w3.org/2000/svg" width="172" height="29" viewBox="0 0 172 29" class="UnifiedNav-logoSVG">
                        <title >DigitalOcean home</title>
                        <g fill-rule="evenodd">
                            <path d="M14.4942 29v-5.5674c5.9572 0 10.5633-5.8478 8.2892-12.059-.8425-2.3006-2.693-4.1355-5.0126-4.9706-6.262-2.2534-12.1564 2.3135-12.1573 8.2207 0 0-.0006.0014-.0014.0014H0C0 5.2123 9.1687-2.1167 19.1138.9624c4.3459 1.3457 7.7993 4.7708 9.1561 9.081C31.3742 19.9068 23.985 29 14.4942 29">
                            </path>
                            <path d="M14.507 23.4468H8.9103v-5.549s.0005-.0011.0011-.0011h5.5949c.0006 0 .0009.0006.0009.0006v5.5495M8.9093 27.7118H4.6105l-.0012-.0012v-4.2638h4.3009v4.2638l-.0009.0012M4.6125 23.4468H1.0088c-.0015 0-.0026-.0012-.0026-.0012v-3.5724s.0011-.0025.0026-.0025h3.601c.0015 0 .0027.0011.0027.0011v3.575M43.2806 9.6357h1.649c1.8346 0 3.345.358 4.49 1.0647 1.2714.7603 1.9164 2.2069 1.9164 4.2991 0 2.1554-.6465 3.6671-1.9207 4.4942h-.0008c-1.0971.7196-2.5981 1.0846-4.462 1.0846h-1.6719V9.6357zm8.324-1.0736c-1.6598-1.142-3.7252-1.721-6.1387-1.721h-5.2537V23.373h5.2537c2.4074 0 4.4737-.6113 6.1407-1.8157.907-.6382 1.6197-1.5304 2.1185-2.651.4962-1.1144.7479-2.4288.7479-3.9067 0-1.4605-.2517-2.758-.7482-3.857-.4988-1.104-1.212-1.972-2.1202-2.5804zM58.1303 6.6376c-.5051 0-.9403.1777-1.2906.5254-.3546.335-.5346.7597-.5346 1.2618 0 .501.1791.9322.532 1.2825.3529.35.788.528 1.2932.528.5042 0 .9394-.178 1.2928-.528.3535-.3508.5324-.7821.5324-1.2825 0-.5015-.18-.926-.5324-1.2592-.3534-.3503-.7886-.528-1.2928-.528M56.6247 23.3729h2.9538V11.7294h-2.9538zM69.5321 19.5787c-.5162.5814-1.1793.8635-2.0264.8635-.8471 0-1.5064-.282-2.015-.863-.5065-.5777-.7637-1.3439-.7637-2.2773 0-.9479.2572-1.7238.764-2.3058.502-.576 1.1796-.8683 2.0147-.8683.8465 0 1.5096.284 2.0262.8695.5142.582.7751 1.3573.7751 2.3046 0 .9328-.2609 1.6988-.7749 2.2768zm.775-6.8767c-.8908-.7858-1.8858-1.2444-2.9614-1.2444-1.6305 0-2.9859.5598-4.0276 1.662-1.0555 1.0932-1.5907 2.5006-1.5907 4.1823 0 1.644.5269 3.0464 1.568 4.1709 1.0498 1.088 2.4123 1.6396 4.0503 1.6396 1.139 0 2.1182-.3144 2.9157-.9356v.268c0 .9662-.2608 1.7176-.7751 2.234-.5137.5154-1.226.7764-2.1173.7764-1.3637 0-2.2183-.5314-3.2589-1.9262l-2.0115 1.917.0542.0754c.4346.605 1.1 1.197 1.9785 1.7594.8787.5603 1.9832.8447 3.2832.8447 1.7536 0 3.1726-.5363 4.2172-1.5933 1.0506-1.0628 1.5835-2.486 1.5835-4.2286V11.7294H70.307v.9726zM75.7434 23.3729h2.9541V11.7294h-2.9541zM77.249 6.6376c-.5052 0-.94.1777-1.2906.5254-.3547.335-.5344.7597-.5344 1.2618 0 .501.1789.9322.532 1.2825.353.35.7878.528 1.293.528.5045 0 .9396-.178 1.2928-.528.3535-.3508.5323-.7821.5323-1.2825 0-.5015-.1797-.926-.5323-1.2592-.3532-.3503-.7883-.528-1.2929-.528M85.1724 8.5831h-2.9082v3.1463h-1.6888v2.6702h1.6888v4.8365c0 1.5134.3047 2.5964.9064 3.2181.6031.6247 1.6741.9414 3.1831.9414.48 0 .963-.0156 1.4354-.0463l.133-.0088v-2.6683l-1.013.0526c-.7033 0-1.1728-.1226-1.3961-.3637-.226-.245-.3406-.7636-.3406-1.5404v-4.421h2.7497v-2.6703h-2.7497V8.583M101.7735 23.3729h2.9544V6.8412h-2.9544zM134.5728 19.2094c-.5286.5874-1.0693 1.0966-1.4855 1.3613v.0005c-.4085.2599-.924.3918-1.532.3918-.8703 0-1.5703-.3144-2.1405-.9621-.567-.644-.8545-1.4716-.8545-2.4613s.2838-1.8162.8436-2.4556c.5625-.6434 1.2588-.9562 2.1285-.9562.9515 0 1.9548.5869 2.8145 1.5947l1.9525-1.8568c-1.273-1.6433-2.897-2.4081-4.8352-2.4081-1.622 0-3.028.5862-4.1788 1.7411-1.1446 1.147-1.7251 2.6074-1.7251 4.3409 0 1.7335.58 3.1977 1.7234 4.352 1.1447 1.1557 2.5514 1.7417 4.1805 1.7417 2.139 0 3.8651-.9158 5.029-2.5935l-1.9204-1.8304M140.2405 16.0973c.1422-.5567.401-1.0207.7714-1.381.4005-.3906.9214-.5885 1.5489-.5885.716 0 1.2702.2019 1.6474.6014.3495.3696.5467.8296.588 1.368h-4.5557zm6.4569-2.7414c-.4191-.5788-.9896-1.0448-1.6965-1.3854-.7047-.3404-1.526-.513-2.441-.513-1.6489 0-2.9982.6037-4.0113 1.7946-.9836 1.182-1.4818 2.651-1.4818 4.3665 0 1.7648.547 3.2253 1.6254 4.341 1.0727 1.1105 2.5083 1.6737 4.267 1.6737 1.992 0 3.627-.799 4.8587-2.3752l.0666-.0847-1.9273-1.837c-.1789.2139-.4317.4561-.6628.6722-.2918.273-.5659.4842-.8588.6289-.4415.218-.9369.3255-1.4907.3255-.8187 0-1.4964-.2388-2.0147-.71-.4847-.4403-.768-1.0345-.843-1.7683h7.8265l.0264-1.0693c0-.7569-.1038-1.4862-.3088-2.1677a6.312 6.312 0 0 0-.934-1.8918zM152.797 18.9234c.3352-.2318.8085-.3483 1.4073-.3483.7112 0 1.4654.1413 2.2426.421v1.1421c-.6421.592-1.4996.8922-2.5499.8922-.5114 0-.909-.1126-1.1822-.3355-.2683-.218-.3985-.4955-.3985-.847 0-.3994.1571-.7022.4808-.9245zm5.2452-6.3229h-.0003c-.8952-.758-2.1328-1.143-3.678-1.143-.9829 0-1.902.2144-2.7336.6324-.7691.387-1.5245 1.0275-2.0043 1.8662l.0298.0358 1.8917 1.796c.7791-1.2322 1.6454-1.66 2.7941-1.66.6172 0 1.1298.1643 1.5234.4881.3916.3216.5819.7304.5819 1.249v.5652c-.7324-.221-1.4629-.333-2.1738-.333-1.47 0-2.6663.3432-3.555 1.0193-.9.6852-1.3562 1.665-1.3562 2.9125 0 1.094.3847 1.9829 1.1461 2.6433.7677.6372 1.7275.961 2.8524.961 1.1246 0 2.177-.4495 3.132-1.2191v.9587h2.9089v-7.4852c0-1.4173-.4572-2.523-1.3591-3.2872zM170.7656 12.8285c-.8227-.9092-1.9791-1.371-3.4371-1.371-1.172 0-2.1236.3338-2.8357.9926v-.7207h-2.897v11.6435h2.954v-6.4215c0-.8823.2119-1.5828.6293-2.0826.4162-.4987.989-.741 1.75-.741.6691 0 1.1765.2167 1.5506.662.3759.4474.5662 1.0638.5662 1.8335v6.7496H172v-6.7496c0-1.6127-.415-2.889-1.2344-3.7948M92.8158 18.9234c.3351-.2318.8087-.3483 1.4075-.3483.7112 0 1.4652.1413 2.2426.421v1.1421c-.6421.592-1.4998.8922-2.5502.8922-.5114 0-.9087-.1126-1.1819-.3355-.2683-.218-.3988-.4955-.3988-.847 0-.3994.1574-.7022.4808-.9245zm5.2451-6.3229h-.0003c-.8952-.758-2.1328-1.143-3.6776-1.143-.983 0-1.902.2144-2.7337.6324-.7694.387-1.5247 1.0275-2.0043 1.8662l.0295.0358 1.8917 1.796c.7792-1.2322 1.6458-1.66 2.7941-1.66.6172 0 1.1298.1643 1.5234.4881.3916.3216.5822.7304.5822 1.249v.5652c-.7327-.221-1.4631-.333-2.174-.333-1.47 0-2.6664.3432-3.555 1.0193-.8999.6852-1.3562 1.665-1.3562 2.9125 0 1.094.3847 1.9829 1.1463 2.6433.7677.6372 1.7272.961 2.8524.961 1.1246 0 2.1766-.4495 3.1318-1.2191v.9587H99.42v-7.4852c0-1.4173-.457-2.523-1.359-3.2872zM115.4464 9.5808c-3.0682 0-5.5645 2.4755-5.5645 5.5188s2.4963 5.5188 5.5645 5.5188c3.0682 0 5.5645-2.4755 5.5645-5.5188s-2.4963-5.5188-5.5645-5.5188zm0 14.0408c-4.7383 0-8.5928-3.8228-8.5928-8.522 0-4.6994 3.8545-8.5223 8.5928-8.5223 4.738 0 8.5925 3.8229 8.5925 8.5223 0 4.6992-3.8545 8.522-8.5925 8.522z">
                            </path>
                        </g>
                    </svg>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto " >
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Products
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Marketplace</a>
                                <a class="dropdown-item" href="#">Customers</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Marketplace <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Partners
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Community
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Pricing

                            </a>
                        </li>

                    </ul>
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Sign in</button>

                </div>
            </nav>
        </div>
    </div>
    <!-- End Navbar--->
    <hr style="margin: 0;padding: 0"/>
</div>
<div class="container" >
    <div class="row " style="background: #fafbfc">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 paragraph" >
            <h1 >Get in touch</h1>
            <p style=" margin: 0 auto;width:850px;text-align: center;font-size: 20px;color: #808693; ">Have a question? Send us a note using the form below and someone from the DigitalOcean team will be in touch soon.</p>
        </div>
    </div>
    <!--tabs-->
    <div class="row " >
        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!-- My tabs--->
            <ul class="nav nav-tabs" id="myTab" role="tablist"style="background: #fafbfc;padding-top: 50px; ">
                <li class="nav-item active" style="width: 386px; background: #fafbfc;">
                    <a class="nav-link "  id="tab-support" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                        Need Support?<br/>
                        <span  style="color: rgba(3,27,78,.25)">Open a support ticket and get help, fast</span>
                    </a>

                </li>
                <li class="nav-item"style="width: 386px;background: #fafbfc; ">
                    <a class="nav-link" id="tab-sale"  data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                        Sales Inquiries<br/>
                        <span class="" style="color: rgba(3,27,78,.25)">Contact sales about large deployments</span>
                    </a>
                </li>
                <li class="nav-item" style="width: 386px ;background: #fafbfc;">
                    <a class="nav-link" id="tab-report" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                        Report Abuse<br/>
                        <span class=""style="color: rgba(3,27,78,.25)" >Report any abuse or suspicious activity</span>
                    </a>
                </li>
            </ul>
            <!--End my tabs-->
            <!--tabs content-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <!-- Tabs-support-->
                    <div class="container">
                        <p class="fast-answer" style="text-align: center">
                            Existing customer?
                            <a href="https://cloudsupport.digitalocean.com">Open a ticket</a>.
                            <br>
                            Need a fast answer? Search our
                            <a href="https://www.digitalocean.com/community/questions">Community Q&amp;A</a>.
                        </p>
                        <form id="frm_support" action="core/process.php" method="post">
                            <div class="form-row ">
                                <div  class="form-group col-md-6">
                                    <div class="error">
                                        <?php echo  ($frm_error!=null&&!empty($frm_error['name']))?"<li style=\" margin-left:13px;font-size:13px ;color: red;font-weight: bold\">".$frm_error['name']." </li>":""; ?>
                                        <input  style="border: none" type="text" class="form-control" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="error">
                                        <?php echo  ($frm_error!=null&&!empty($frm_error['email']))?"<li style=\" margin-left:13px;font-size:13px ;color: red;font-weight: bold\">".$frm_error['email']." </li>":""; ?>
                                        <input style="border: none" type="email" class="form-control" name="email" placeholder="Email">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo  ($frm_error!=null&&!empty($frm_error['reason']))?"<li style=\" list-style-type: none;margin-left:13px;font-size:13px ;color: red;font-weight: bold\">".$frm_error['reason']." </li>":""; ?>
                                <select  name="reason" style="height: 48px;"  class="form-control">
                                    <option value="0"  >Reason for getting in touch</option>
                                    <option value="1">Account / Control Panel</option>
                                    <option value="2">App / Website</option>
                                    <option value="3">Billing</option>
                                    <option value="4">Droplets</option>
                                    <option value="5">Networking</option>
                                    <option value="6">Something is Broken</option>
                                    <option value="7">Spaces</option>
                                    <option value="8">Volumes</option>
                                    <option value="9">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="error">
                                    <?php echo  ($frm_error!=null&&!empty($frm_error['subject']))?"<li style=\" margin-left:13px;font-size:13px ;color: red;font-weight: bold\">".$frm_error['subject']." </li>":""; ?>
                                    <input type="text"  style="border: none"class="form-control" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="error">
                                    <?php echo  ($frm_error!=null&&!empty($frm_error['descripton']))?"<li style=\" margin-left:13px;font-size:13px ;color: red;font-weight: bold\">".$frm_error['descripton']." </li>":""; ?>
                                    <textarea type="text" style="height: 68px;width: 895px;border: none" class="form-control" name="descripton" placeholder="Brief description of how DigitalOcean can help you"></textarea>
                                </div>
                            </div>
                            <br/>
                            <br/>
                            <input  style="width: 443px;float: right;height: 48px;" style="border: none" type="submit"  name="submit" class="btn btn-primary" value="Sign in" />
                        </form>
                    </div>
                </div>
                <!---tabs sales -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="container">
                        <form   method="post" action="#" id="frm_sales">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input style="height: 48px;" type="text" class="form-control " name="firstname" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input style="height: 48px;" type="text" class="form-control" name="lastname" placeholder="Last Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input style="height: 48px;" type="email" class="form-control" name="email" placeholder="Business Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <input style="height: 48px;" type="text" class="form-control"  name="phone" placeholder="Business Phone Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <input style="height: 48px;" type="text" class="form-control"  name="company" placeholder="Company Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <select style="height: 48px;" name="role" class="form-control">
                                        <option value="">What is your primary role?</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Infrastructure">Infrastructure</option>
                                        <option value="DevOps">DevOps</option>
                                        <option value="Development">Development</option>
                                        <option value="Architecture">Architecture</option>
                                        <option value="Operations">Operations</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select style="height: 48px;" name="seniority"  class="form-control">
                                        <option value="">What is your seniority?</option>
                                        <option value="Founder / CEO / President">Founder / CEO / President</option>
                                        <option value="VP">VP</option>
                                        <option value="Director">Director</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Individual Contributor">Individual Contributor</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select name="usecase"  class="form-control">
                                        <option value="">What is your use case?</option>
                                        <option value="Ad Tech">Ad Tech</option>
                                        <option value="Agency (Web, Dev, Hosting)">Agency (Web, Dev, Hosting)</option>
                                        <option value="Big Data, Analytics &amp; BI">Big Data, Analytics &amp; BI</option>
                                        <option value="Dev &amp; Test Environment">Dev &amp; Test Environment</option>
                                        <option value="Gaming">Gaming</option>
                                        <option value="Internet of Things">Internet of Things</option>
                                        <option value="Mobile">Mobile</option>
                                        <option value="Streaming (Video, Audio, Data)">Streaming (Video, Audio, Data)</option>
                                        <option value="SaaS / Web Apps">SaaS / Web Apps</option>
                                        <option value="VPN">VPN</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select name="spend"  class="form-control">
                                        <option value="" class="first">What is your estimated monthly spend?</option>
                                        <option value="$0 - $499">$0 - $499</option>
                                        <option value="$500 - $999">$500 - $999</option>
                                        <option value="$1,000 - $4,999">$1,000 - $4,999</option>
                                        <option value="$5,000 +">$5,000 +</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select name="migration" class="form-control">
                                        <option value="" class="first">What is your timeline for deployment/migration?</option>
                                        <option value="ASAP">ASAP</option>
                                        <option value="Within the next 4 weeks">Within the next 4 weeks</option>
                                        <option value="Within 2-6 months">Within 2-6 months</option>
                                        <option value="More than 6 months out">More than 6 months out</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <p>Which products & services are you considering using in this project?</p>
                                    <input type="checkbox" name="project" value="Droplets (VMs)" checked> Droplets (VMs)<br/>
                                    <input type="checkbox" name="project" value="Managed Kubernetes" > Managed Kubernetes<br/>
                                    <input type="checkbox" name="project" value="Spaces Object Storage" > Spaces Object Storage<br/>
                                    <input type="checkbox" name="project" value="Volumes Block Storage" > Volumes Block Storage<br/>
                                    <input type="checkbox" name="project" value="Managed Databases" > Managed Databases<br/>
                                    <input type="checkbox" name="project" value="Premier Support" > Premier Support<br/>
                                    <input type="checkbox" name="project" value="Networking Tools (LBs, Firewalls, Floating IPs)" > Networking Tools (LBs, Firewalls, Floating IPs)<br/>
                                    <input type="checkbox" name="project" value="Developer Tools (API, Monitoring, Team Accounts)" > Developer Tools (API, Monitoring, Team Accounts)<br/>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea style="width: 100%;height: 68px;" type="text" name="discription" placeholder="What is the biggest challenge you are trying to solve with this project?"></textarea>
                                </div>
                            </div>

                            <input  id="btn_submit" style="width: 100%;height: 48px" name="submit" type="submit" class="btn btn-primary float-right" value="Send Message">

                        </form>
                    </div>
                </div>
                <!-- Tabs report-->
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" id="tabsSelect">
                                        <option value="0" selected>Select Abuse Type</option>
                                        <option value="1">DMCA Takedown</option>
                                        <option value="2">Trademark Infringement</option>
                                        <option value="3">Spam</option>
                                        <option value="4">Phishing</option>
                                        <option value="5">Malware</option>
                                        <option value="6">Botnet</option>
                                        <option value="7">Bruteforce/PortScan</option>
                                        <option value="8">Child Abuse</option>
                                        <option value="9">Violent Threats and Harassment</option>
                                        <option value="10">Other</option>

                                    </select>
                                </div>
                                <!--- tooggle form--->
                                <div class="toggle_effect">
                                    <p id="text" style="text-align: center;color: #808693;margin-top: 40px;">Please select an abuse type above</p>
                                    <div class="Abuse-content" data-abuse="start"></div>

                                    <div id="_dmca" class="Abuse-content" data-abuse="dmca">
                                        <form name="DmcaAbuse" accept-charset="UTF-8" data-parsley-validate="" novalidate="">
                                            <input type="hidden" name="utf8" value="✓">
                                            <input type="hidden" name="cookie_id" value="null">
                                            <input type="hidden" name="abuse_report[abuse_type]" value="dmca">

                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control " id="DmcaAbuse-copyrightHolderName" type="text" name="abuse_report[copyright_holder_name]" placeholder="Copyright Owner's Full Name" required="">
                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="DmcaAbuse-reporterName" type="text" name="abuse_report[reporter_name]" placeholder="Your Full Name" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="DmcaAbuse-address" type="text" name="abuse_report[address]" placeholder="Address" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="DmcaAbuse-phone" type="tel" name="abuse_report[phone]" placeholder="Phone Number (Digits Only)" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control"  id="DmcaAbuse-email" type="email" name="abuse_report[email]" placeholder="Email Address" data-mailcheck="#dmca-abuse-mailcheck" required="">

                                                </div>
                                                <div id="dmca-abuse-mailcheck" class="www-u-hidden text-muted www-u-TextColor--muted bui-u-mt--small"></div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea class="form-control" id="DmcaAbuse-infringingDescription" name="abuse_report[infringing_description]" placeholder="URL(s) and/or a description of the infringing content" type="url" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="DmcaAbuse-acknowledgementCheck" type="checkbox" name="abuse_report[acknowledgment_check]" value="acknowledged" required="" data-parsley-multiple="abuse_reportacknowledgment_check">
                                                    <label for="DmcaAbuse-acknowledgementCheck">
                                                        By checking this box, you attest, under penalty of
                                                        perjury, that (1) you have a good faith belief that use
                                                        of the material in this report is not authorized by the
                                                        copyright owner, its agent, or the law; (2) you are the
                                                        copyright owner or authorized to act on behalf of the
                                                        copyright owner; and (3) you understand, under 17
                                                        U.S.C. § 512(f), that you may be liable for any
                                                        damages, including costs and attorneys' fees, if you
                                                        knowingly materially misrepresent that the material
                                                        you are reporting is infringing.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="DmcaAbuse-digitalSignature" type="text" name="abuse_report[digital_signature]" placeholder="Digital Signature" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <p class="col-md-6">
                                                    By entering your name, you affirm all information is true and accurate.
                                                </p>
                                                <p class="col-md-6">
                                                    All information submitted to us may be relayed to the customer during
                                                    our remediation process.
                                                </p>
                                                <input class="form-control col-md-6 btn btn-primary"  type="submit">
                                            </div>
                                        </form>
                                    </div>


                                    <div id="_trademark" class="Abuse-content " data-abuse="trademark">
                                        <form name="TrademarkAbuse" accept-charset="UTF-8" data-parsley-validate="" novalidate=""><input class="form-control" type="hidden" name="utf8" value="✓">
                                            <input class="form-control" type="hidden" name="cookie_id" value="null">
                                            <input class="form-control" type="hidden" name="abuse_report[abuse_type]" value="trademark">

                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="TrademarkAbuse-reporterName" type="text" name="abuse_report[reporter_name]" placeholder="Your Full Name" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="TrademarkAbuse-address" type="text" name="abuse_report[address]" placeholder="Address" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="TrademarkAbuse-phone" type="tel" name="abuse_report[phone]" placeholder="Phone Number (Digits Only)" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="TrademarkAbuse-email" type="email" name="abuse_report[email]" placeholder="Email Address" data-mailcheck="#trademark-abuse-mailcheck" required="">

                                                </div>
                                                <div id="trademark-abuse-mailcheck" class="www-u-hidden text-muted www-u-TextColor--muted bui-u-mt--small">
                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="TrademarkAbuse-trademarkedWork" type="text" name="abuse_report[trademarked_work]" placeholder="Trademarked word/symbol" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input  class="form-control"id="TrademarkAbuse-registrationOffice" type="text" name="abuse_report[registration_office]" placeholder="Registration office, Country" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" id="TrademarkAbuse-registrationNumber" type="text" name="abuse_report[registration_number]" placeholder="Registration number" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea class="form-control" id="TrademarkAbuse-infringingDescription" name="abuse_report[infringing_description]" placeholder="URL(s) and/or a description of the infringing content" type="url" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea  class="form-control" id="TrademarkAbuse-abuseComments" name="abuse_report[abuse_comments]" placeholder="Comments" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <input   class="form-control" id="TrademarkAbuse-digitalSignature" type="text" name="abuse_report[digital_signature]" placeholder="Digital Signature" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <p class="col-md-6">
                                                    By entering your name, you affirm all information is true and accurate.
                                                </p>
                                                <p class="col-md-6">
                                                    All information submitted to us may be relayed to the customer during
                                                    our remediation process.
                                                </p>
                                                <input  class="form-control col-sm-6 btn btn-primary" type="submit" >
                                            </div>
                                        </form>
                                    </div>


                                    <div id="_violent" class="Abuse-content" data-abuse="violent">
                                        <form name="ViolentAbuse" accept-charset="UTF-8" data-parsley-validate="" novalidate="">
                                            <input type="hidden" name="utf8" value="✓">
                                            <input type="hidden" name="cookie_id" value="null">
                                            <input type="hidden" name="abuse_report[abuse_type]" value="violent">
                                            <div class="text-muted">
                                                <div class="form-group col-sm-6">
                                                    <input class="form-control" id="ViolentAbuse-reporterName" type="text" name="abuse_report[reporter_name]" placeholder="Your Full Name" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-sm-6">
                                                    <input class="form-control" id="ViolentAbuse-email" type="email" name="abuse_report[email]" placeholder="Email Address" data-mailcheck="#Violent-abuse-mailcheck" required="">

                                                </div>
                                                <div id="Violent-abuse-mailcheck" class="www-u-hidden text-muted www-u-TextColor--muted bui-u-mt--small"></div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-sm-6">
                                                    <textarea class="form-control" id="ViolentAbuse-evidence" name="abuse_report[evidence_urls]" placeholder="Evidence URL" type="url" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-sm-6">
                                                    <textarea class="form-control" id="ViolentAbuse-additionalinfo" name="abuse_report[additional_information]" placeholder="Additional information" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <p class="col-md-6">
                                                    By entering your name, you affirm all information is true and accurate.
                                                </p>
                                                <p class="col-md-6">
                                                    All information submitted to us may be relayed to the customer during
                                                    our remediation process.
                                                </p>
                                                <input  class="form-control col-sm-6 btn btn-primary" type="submit">
                                            </div>
                                        </form>
                                    </div>


                                    <div id="_spam" class="Abuse-content" data-abuse="spam">
                                        <form name="SpamAbuse" accept-charset="UTF-8" data-parsley-validate="" novalidate="">
                                            <input type="hidden" name="utf8" value="✓">
                                            <input type="hidden" name="cookie_id" value="null">
                                            <input type="hidden" name="abuse_report[abuse_type]" value="spam">
                                            <div class="text-muted">
                                                <div class="form-group col-sm-6">
                                                    <input class="form-control" id="SpamAbuse-reporterName" type="text" name="abuse_report[reporter_name]" placeholder="Your Full Name" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-sm-6">
                                                    <input class="form-control" id="SpamAbuse-email" type="email" name="abuse_report[email]" placeholder="Email Address" data-mailcheck="#spam-abuse-mailcheck" required="">

                                                </div>
                                                <div id="spam-abuse-mailcheck" class="www-u-hidden text-muted www-u-TextColor--muted bui-u-mt--small"></div>
                                            </div>

                                            <div class="text-muted">
                                                <div class="form-group col-sm-6">
                                                    <textarea class="form-control" id="SpamAbuse-headers" name="abuse_report[headers]" placeholder="Headers from email received" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-sm-6">
                                                    <textarea class="form-control" id="SpamAbuse-originalDescription" name="abuse_report[message_body]" placeholder="Message Body" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <p class="col-md-6">
                                                    By entering your name, you affirm all information is true and accurate.
                                                </p>
                                                <p class="col-md-6">
                                                    All information submitted to us may be relayed to the customer during
                                                    our remediation process.
                                                </p>
                                                <input class="form-control col-sm-6 btn btn-primary" type="submit">
                                            </div>
                                        </form>
                                    </div>


                                    <div id="_botnet" class="Abuse-content" data-abuse="botnet">
                                        <form name="BotnetAbuse" accept-charset="UTF-8" data-parsley-validate="" novalidate="">
                                            <input type="hidden" name="utf8" value="✓">
                                            <input type="hidden" name="cookie_id" value="null">
                                            <input type="hidden" name="abuse_report[abuse_type]" value="botnet">
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control"id="BotnetAbuse-reporterName" type="text" name="abuse_report[reporter_name]" placeholder="Your Full Name" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control"id="BotnetAbuse-email" type="email" name="abuse_report[email]" placeholder="Email Address" data-mailcheck="#Botnet-abuse-mailcheck" required="">

                                                </div>
                                                <div id="Botnet-abuse-mailcheck" class="www-u-hidden text-muted www-u-TextColor--muted bui-u-mt--small"></div>
                                            </div>
                                            <div class="wtext-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea class="form-control"  id="BotnetAbuse-evidence" name="abuse_report[evidence_urls]" placeholder="Evidence URLs" type="url" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <p class="col-md-6">
                                                    By entering your name, you affirm all information is true and accurate.
                                                </p>
                                                <p class="col-md-6">
                                                    All information submitted to us may be relayed to the customer during
                                                    our remediation process.
                                                </p>
                                               <input class="form-control col-sm-6 btn btn-primary" type="submit">
                                            </div>
                                        </form>
                                    </div>


                                    <div id="_other" class="Abuse-content" data-abuse="other">
                                        <form name="OtherAbuse" accept-charset="UTF-8" data-parsley-validate="" novalidate="">
                                           <input class="form-control" type="hidden" name="utf8" value="✓">
                                           <input class="form-control" type="hidden" name="cookie_id" value="null">
                                           <input class="form-control" type="hidden" name="abuse_report[abuse_type]" value="other">
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control" id="OtherAbuse-reporterName" type="text" name="abuse_report[reporter_name]" placeholder="Your Full Name" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control" id="OtherAbuse-email" type="email" name="abuse_report[email]" placeholder="Email Address" data-mailcheck="#Other-abuse-mailcheck" required="">

                                                </div>
                                                <div id="Other-abuse-mailcheck" class="www-u-hidden text-muted www-u-TextColor--muted bui-u-mt--small"></div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea class="form-control"  id="OtherAbuse-description" name="abuse_report[original_description]" placeholder="Description of issue" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea class="form-control"  id="OtherAbuse-evidence" name="abuse_report[evidence]" placeholder="Evidence URL" type="url" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea class="form-control"  id="OtherAbuse-comments" name="abuse_report[abuse_comments]" placeholder="Comments" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <p class="col-md-6">
                                                    By entering your name, you affirm all information is true and accurate.
                                                </p>
                                                <p class="col-md-6">
                                                    All information submitted to us may be relayed to the customer during
                                                    our remediation process.
                                                </p>
                                               <input class="form-control col-sm-6 btn btn-primary"  type="submit">
                                            </div>
                                        </form>
                                    </div>


                                    <div id="_childabuse" class="Abuse-content" data-abuse="childabuse">
                                        <form name="ChildabuseAbuse" accept-charset="UTF-8" data-parsley-validate="" novalidate="">
                                           <input class="form-control" type="hidden" name="utf8" value="✓">
                                           <input class="form-control" type="hidden" name="cookie_id" value="null">
                                           <input class="form-control" type="hidden" name="abuse_report[abuse_type]" value="childabuse">
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control" id="ChildabuseAbuse-reporterName" type="text" name="abuse_report[reporter_name]" placeholder="Your Full Name" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control" id="ChildabuseAbuse-email" type="email" name="abuse_report[email]" placeholder="Email Address" data-mailcheck="#Childabuse-abuse-mailcheck" required="">

                                                </div>
                                                <div id="Childabuse-abuse-mailcheck" class="www-u-hidden text-muted www-u-TextColor--muted bui-u-mt--small"></div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea class="form-control"  id="ChildabuseAbuse-evidence" name="abuse_report[evidence_urls]" placeholder="Evidence URLs" type="url" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control" id="ChildabuseAbuse-digitalSignature" type="text" name="abuse_report[digital_signature]" placeholder="Digital Signature" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <p class="col-md-6">
                                                    By entering your name, you affirm all information is true and accurate.
                                                </p>
                                                <p class="col-md-6">
                                                    All information submitted to us may be relayed to the customer during
                                                    our remediation process.
                                                </p>
                                               <input class="form-control col-sm-6 btn btn-primary"  type="submit">
                                            </div>
                                        </form>
                                    </div>


                                    <div id="_phishing" class="Abuse-content" data-abuse="phishing">
                                        <form name="PhishingAbuse" accept-charset="UTF-8" data-parsley-validate="" novalidate="">
                                           <input class="form-control" type="hidden" name="utf8" value="✓">
                                           <input class="form-control" type="hidden" name="cookie_id" value="null">
                                           <input class="form-control" type="hidden" name="abuse_report[abuse_type]" value="phishing">
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control" id="PhishingAbuse-reporterName" type="text" name="abuse_report[reporter_name]" placeholder="Your Full Name" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control" id="PhishingAbuse-email" type="email" name="abuse_report[email]" placeholder="Email Address" data-mailcheck="#Phishing-abuse-mailcheck" required="">

                                                </div>
                                                <div id="Phishing-abuse-mailcheck" class="www-u-hidden text-muted www-u-TextColor--muted bui-u-mt--small"></div>
                                            </div>

                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control" id="PhishingAbuse-target" type="text" name="abuse_report[phishing_target]" placeholder="Target of Phishing Campaign" required="">

                                                </div>
                                            </div>

                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea class="form-control"  id="PhishingAbuse-evidenceURLS" name="abuse_report[evidence_urls]" placeholder="Evidence URLs" type="url" required=""></textarea>

                                                </div>
                                            </div>

                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea class="form-control"  id="PhishingAbuse-additional" name="abuse_report[additional_information]" placeholder="Additional Evidence or Logs" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <p class="col-md-6">
                                                    By entering your name, you affirm all information is true and accurate.
                                                </p>
                                                <p class="col-md-6">
                                                    All information submitted to us may be relayed to the customer during
                                                    our remediation process.
                                                </p>
                                               <input   class="form-control col-sm-6 btn btn-primary" type="submit">
                                            </div>
                                        </form>
                                    </div>


                                    <div id="_malware" class="Abuse-content" data-abuse="malware">
                                        <form name="MalwareAbuse" accept-charset="UTF-8" data-parsley-validate="" novalidate="">
                                           <input class="form-control" type="hidden" name="utf8" value="✓">
                                           <input class="form-control" type="hidden" name="cookie_id" value="null">
                                           <input class="form-control" type="hidden" name="abuse_report[abuse_type]" value="malware">
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control" id="MalwareAbuse-reporterName" type="text" name="abuse_report[reporter_name]" placeholder="Your Full Name" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control" id="MalwareAbuse-email" type="email" name="abuse_report[email]" placeholder="Email Address" data-mailcheck="#Malware-abuse-mailcheck" required="">

                                                </div>
                                                <div id="Malware-abuse-mailcheck" class="www-u-hidden text-muted www-u-TextColor--muted bui-u-mt--small"></div>
                                            </div>

                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea class="form-control"  id="MalwareAbuse-evidenceURLS" name="abuse_report[evidence_urls]" placeholder="Evidence URLs" type="url" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea class="form-control"  id="MalwareAbuse-additional" name="abuse_report[additional_information]" placeholder="Additional Evidence or Logs" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <p class="col-md-6">
                                                    By entering your name, you affirm all information is true and accurate.
                                                </p>
                                                <p class="col-md-6">
                                                    All information submitted to us may be relayed to the customer during
                                                    our remediation process.
                                                </p>
                                               <input class="form-control col-sm-6 btn btn-primary"  type="submit">
                                            </div>
                                        </form>
                                    </div>


                                    <div id="_bruteforce" class="Abuse-content" data-abuse="bruteforce">
                                        <form name="BruteforceAbuse" accept-charset="UTF-8" data-parsley-validate="" novalidate="">
                                           <input class="form-control" type="hidden" name="utf8" value="✓">
                                           <input class="form-control" type="hidden" name="cookie_id" value="null">
                                           <input class="form-control" type="hidden" name="abuse_report[abuse_type]" value="bruteforce">
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control" id="BruteforceAbuse-reporterName" type="text" name="abuse_report[reporter_name]" placeholder="Your Full Name" required="">

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                   <input class="form-control" id="BruteforceAbuse-email" type="email" name="abuse_report[email]" placeholder="Email Address" data-mailcheck="#Bruteforce-abuse-mailcheck" required="">

                                                </div>
                                                <div id="Bruteforce-abuse-mailcheck" class="www-u-hidden text-muted www-u-TextColor--muted bui-u-mt--small"></div>
                                            </div>

                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea class="form-control"  id="BruteforceAbuse-evidence" name="abuse_report[evidence]" placeholder="Evidence or logs of the activity showing source IP" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <div class="form-group col-md-6">
                                                    <textarea class="form-control"  id="BruteforceAbuse-timezone" name="abuse_report[timezone]" placeholder="Your server's time zone" required=""></textarea>

                                                </div>
                                            </div>
                                            <div class="text-muted">
                                                <p class="col-md-6">
                                                    By entering your name, you affirm all information is true and accurate.
                                                </p>
                                                <p class="col-md-6">
                                                    All information submitted to us may be relayed to the customer during
                                                    our remediation process.
                                                </p>
                                               <input class="form-control col-sm-6 btn btn-primary" type="submit">
                                            </div>
                                        </form>

                                    </div>


                            </div>
                            </div>
                                <!---End toggle form-->
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                 <div class="toggleContent">
                                     <div id="__start" class="Abuse-content" data-abuse="start">
                                         <h4 >Report Abuse</h4>
                                         <div class="text-muted">
                                             <p class="">
                                                 DigitalOcean is a platform that's committed to a better
                                                 Internet. If you know about, or are a victim of, abuse on
                                                 a site hosted by DigitalOcean, you can use this form to
                                                 report the problem to our Trust &amp; Safety team; they are
                                                 here to help.
                                             </p>
                                             <p>
                                                 Before submitting your report, please take a moment
                                                 to review the section titled "Rules of Conduct" in our
                                                 <a href="https://www.digitalocean.com/legal/terms-of-service-agreement/">Terms of Service Agreement</a>.
                                             </p>
                                         </div>
                                     </div>
                                     <div id="__dmca" class="Abuse-content" data-abuse="dmca">
                                         <h4>What is the DMCA?</h4>
                                         <div class="text-muted">
                                             <p>
                                                 The Digital Millennium Copyright Act – often called the
                                                 DMCA—is a federal law that helps copyright holders secure
                                                 the quick removal of their content from websites that don't
                                                 have the right to use it.
                                             </p>
                                             <p>
                                                 The DMCA provides web hosts, search engines, and other
                                                 Internet services "safe harbor" from copyright infringement
                                                 claims. In return, the law instructs those service providers
                                                 to act promptly to take down infringing material when
                                                 properly notified by a copyright owner.
                                             </p>
                                             <p>
                                                 This form provides an easy way for copyright owners
                                                 (and their agents) to notify DigitalOcean about infringing
                                                 material that may be hosted by our customers.
                                             </p>
                                         </div>
                                     </div>
                                     <div id="__trademark" class="Abuse-content is-active" data-abuse="trademark">
                                         <h4>What is trademark abuse?</h4>
                                         <div class="text-muted">
                                             <p>
                                                 Trademark abuse is the unauthorized use of a trademark on
                                                 or in connection with goods or services in a way that is
                                                 likely to cause confusion about the source of the goods or
                                                 services.
                                             </p>
                                             <p>
                                                 Trademarks are national or regionally registered symbols,
                                                 words, signs, or names used to identify or distinguish the
                                                 brand, goods, or services of a company or individual. Each
                                                 country or region has their own specific laws and authorities
                                                 around trademark. The USPTO, the trademark authority in the
                                                 US, requires registration and approval of US recognized
                                                 trademarks.
                                             </p>
                                             <p>
                                                 This form provides an easy way for trademark owners (or their
                                                 agents) to notify DigitalOcean about trademark abuse that
                                                 may be hosted by our customers.
                                             </p>
                                         </div>
                                     </div>
                                     <div id="__spam" class="Abuse-content" data-abuse="spam">
                                         <h4>What is Spam?</h4>
                                         <div class="text-muted">
                                             <p>
                                                 Spam is Unsolicited Bulk Email distributed to recipients who have
                                                 not provided direct consent.
                                             </p>
                                             <p>
                                                 This form provides an easy way for SPAM recipients to notify
                                                 DigitalOcean about these abuses that may be propagated by
                                                 DigitalOcean users.
                                             </p>
                                             <p>
                                                 In submitting a complaint, please include as much information as
                                                 is possible in the Spam abuse form including full unedited
                                                 message headers and any URLs from the body of the message. The
                                                 more information provided about the issue, the quicker our Trust
                                                 &amp; Safety specialists can assist in resolving the complaint.
                                             </p>
                                         </div>
                                     </div>
                                     <div id="__phishing" class="Abuse-content" data-abuse="phishing">
                                         <h4>What is Phishing?</h4>
                                         <div class="text-muted">
                                             <p>
                                                 Phishing is the fraudulent practice of sending emails purporting to be from reputable companies in order to induce individuals to reveal personal information, such as passwords and credit card numbers.
                                             </p>
                                             <p>
                                                 This form provides an easy way for victims of phishing to notify DigitalOcean about these abuses that
                                                 may be propagated by our customers.
                                             </p>
                                             <p>
                                                 In submitting a complaint, please include as much information as
                                                 is possible in the phishing abuse form. The more information
                                                 provided about the issue, the quicker our Trust &amp; Safety
                                                 specialists can assist in resolving the complaint.
                                             </p>
                                         </div>
                                     </div>
                                     <div id="__violent" class="Abuse-content" data-abuse="violent">
                                         <h4>What are Violent Threats and Harassment?</h4>
                                         <div class="text-muted">
                                             <p>
                                                 Violent threats and harassment are any sort of content pertaining
                                                 to intent to harm a person(s). These can be threats of physical
                                                 altercation or content to cause emotional distress.
                                             </p>
                                             <p>
                                                 <strong>
                                                     If you believe that you are at imminent risk, contact your
                                                     local law enforcement immediately.
                                                 </strong>
                                             </p>
                                             <p>
                                                 This form provides an easy way for victims of violent threats or
                                                 harassment to notify DigitalOcean about these abuses that may be
                                                 propagated by our customers.
                                             </p>
                                             <p>
                                                 In submitting a complaint, please include as much information as
                                                 is possible in the violent threats and harassment abuse form.
                                                 The more information provided about the issue, the quicker our
                                                 Trust &amp; Safety specialists can assist in resolving the
                                                 complaint.
                                             </p>
                                         </div>
                                     </div>
                                     <div id="__malware" class="Abuse-content" data-abuse="malware">
                                         <h4>What is Malware?</h4>
                                         <div class="text-muted">
                                             <p>
                                                 Malware is software that is intended to damage or disable computers and computer systems.
                                             </p>
                                             <p>
                                                 This form provides an easy way for victims of malware to notify DigitalOcean about these abuses that
                                                 may be propagated by our customers.
                                             </p>
                                             <p>
                                                 In submitting a complaint, please include as much information as
                                                 is possible in the malware abuse form. The more information
                                                 provided about the issue, the quicker our Trust &amp; Safety
                                                 specialists can assist in resolving the complaint.
                                             </p>
                                         </div>
                                     </div>
                                     <div id="__botnet" class="Abuse-content" data-abuse="botnet">
                                         <h4>What is a Botnet?</h4>
                                         <div class="text-muted">
                                             <p>
                                                 A botnet is a network of private computers infected with malicious software and controlled as a group without the owners' knowledge.
                                             </p>
                                             <p>
                                                 This form provides an easy way for victims of botnet activity to notify DigitalOcean about these abuses that
                                                 may be propagated by our customers.
                                             </p>
                                             <p>
                                                 In submitting a complaint, please include as much information as
                                                 is possible in the botnet abuse form. The more information
                                                 provided about the issue, the quicker our Trust &amp; Safety
                                                 specialists can assist in resolving the complaint.
                                             </p>
                                         </div>
                                     </div>
                                     <div id="__bruteforce" class="Abuse-content" data-abuse="bruteforce">
                                         <h4>What are Bruteforce/PortScan attacks?</h4>
                                         <div class="text-muted">
                                             <p>
                                                 Bruteforce/PortScan attacks are when malicious applications makes several attempts to access, crack, or locate vulnerabilities on machines they have no right accessing. This is a technique commonly employed by malicious actors in order to find an attack vector to utilize against a server/website.
                                             </p>
                                             <p>
                                                 This form provides an easy way for victims of bruteforce or portscanning activity to notify DigitalOcean about these abuses that
                                                 may be propagated by our customers.
                                             </p>
                                             <p>
                                                 In submitting a complaint, please include as much information as
                                                 is possible in the bruteforce/portscan abuse form. The more
                                                 information provided about the issue, the quicker our Trust &amp;
                                                 Safety specialists can assist in resolving the complaint.
                                             </p>
                                         </div>
                                     </div>
                                     <div id="__childabuse" class="Abuse-content" data-abuse="childabuse">
                                         <h4>What is Child Abuse?</h4>
                                         <div class="text-muted">
                                             <p>
                                                 Child Abuse is physical maltreatment or sexual molestation of a
                                                 child.
                                             </p>
                                             <p>
                                                 This form provides an easy way for persons exposed to Child Abuse
                                                 content to notify DigitalOcean about these abuses that may be
                                                 present on our network.
                                             </p>
                                             <p>
                                                 In submitting a complaint, please include as much information as
                                                 you're aware of regarding the site and any people connected to
                                                 the site that you are aware of. Further, we would also
                                                 recommend that you fill out a report with the
                                                 <a href="https://report.cybertip.org/">National Center for Missing and Exploited Children</a>
                                                 at
                                                 <a href="https://report.cybertip.org/">https://report.cybertip.org/</a>
                                                 as they are able to investigate content in ways we are not.
                                             </p>
                                         </div>
                                     </div>
                                     <div id="__other" class="Abuse-content" data-abuse="other">
                                         <h4>Other Abuse</h4>
                                         <div class="text-muted">
                                             <p>
                                                 Please utilize this form to provide DigitalOcean with evidence of any abuse outside of our categories listed.
                                             </p>
                                             <p>
                                                 This form provides an easy way for persons reporting abuse content to notify DigitalOcean about these abuses that
                                                 may be propagated by our customers.
                                             </p>
                                             <p>
                                                 In submitting a complaint, please include as much information as
                                                 is possible in the other abuse form. The more information
                                                 provided about the issue, the quicker our Trust &amp; Safety
                                                 specialists can assist in resolving the complaint.
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                            </div>
                                <!--End discription select-->
                        </div>
                    </div>
                </div>
            </div>
            <!---End tabs content-->
        </div>
    </div>
    <!---End tabs-->
</div>

<!--End paragraph question. -->
<!---footer -->
<div class="container-fluid">
    <div class="row footer">
        <div class="container">
            <div class="row">
                <div style="margin:0 auto;" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 ">

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a style="color: white" class="nav-link active" href="#">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Leadership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Partners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Referral Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Press</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Legal & Security</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <ul class="nav flex-column">
                        <li   class="nav-item">
                            <a style="color: white" class="nav-link " href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Droplets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Kubernetes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Managed Databases</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Spaces</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Marketplace</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Load Balancers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Block Storage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Tools & Integrations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">API</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Documentation</a>
                        </li><li class="nav-item">
                            <a class="nav-link active" href="#">Release Notes</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a style="color: white" class="nav-link active" href="#">Community</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tutorials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Meetups</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Q&A</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Write for DOnations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Droplets for Demos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Hatch Startup Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Shop Swag</a>
                        </li> <li class="nav-item">
                            <a class="nav-link " href="#">Research Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Currents Research</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Open Source</a>
                        </li>


                    </ul>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a style="color: white;" class="nav-link active" href="#">Solutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Web & mobile apps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Website hosting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Big data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Managed services</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a style="color: white" class="nav-link active" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Report Abuse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"> System Status</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr style="background:white"/>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <p style="   color:#808693 ;font-weight: 500;font-size: 15px">© 2019 DigitalOcean, LLC. All rights reserved.</p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal-->
<?php
if(isset($_SESSION['alert_modal']) &&$_SESSION['alert_modal']==='show')
{
   $xhtml=' <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-info" style="text-shadow:5px 5px 10px dodgerblue "  >Digital Ocean</h4>
        </div>
        <div class="modal-body">
          <p  class="text-success">Information sent successfully. thank you!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>';
   echo $xhtml;

   echo '<script>
            $("#myModal").modal();
        </script>';
}
session_destroy();
?>
<!-- My js-->
<script src="scripts/js/custom.js" ></script>
<script src="scripts/js/formSales.js"></script>

</body>
</html>