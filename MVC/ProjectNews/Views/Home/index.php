<?php
//run first file Startup config ...
require_once '../../Core/Startup.php';
 $run = new  Startup();
$run->run();
//=============================================================================
require_once "../../Controllers/HomeController.php";
require_once "../Shared/_Header.html";
$model= new ProjectNews\Controllers\HomeController();
$slide= $model->slide();
$news=$model->LoadNews();//news of Homecontroller
?>


    <!-- Page Content -->
    <div class="container">

        <!-- slider -->
        <div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                        <?php
                        foreach ($slide[0] as $key=>$val)
                        {
                            echo '  <div class="item ">
                                     <img class="slide-image" src="../../Scripts/image/'.$val['Hinh'].'" alt="">
                                 </div>';
                        }
                        ?>

                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>


        <div class="row main-left">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                    	Menu
                    </li>
                   <!-- append ajax at here! -->

                </ul>
            </div>

            <div class="col-md-9">
	            <div class="panel panel-default">
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;"> Tin Tức</h2>
	            	</div>

	            	<div class="panel-body">

	            		<!-- item -->
                        <?php
                        $xhtml='';
                         foreach ($news as $key=>$value)
                         {
                             $preVal='';
                             $subtitle=explode(',',$value['Typenews']);
                             $xhtml.='<div class="row-item row">
		                	<h3>
		                		<a href="#">'. $value['Ten']. '</a> |';
		                		foreach ($subtitle as $idx=>$val)
                                {
                                    if(!is_numeric($val)&&strpos($val,"-")==false&&$val!=$preVal)
                                    {
                                        $preVal=$val;
                                        $xhtml.='<small><a href="loaitin.html"><i>'.$val.'</i></a>/</small>';
                                    }

                                }
		                $xhtml.='</h3>
		                	<div class="col-md-12 border-right">
		                		<div class="col-md-3">
			                        <a href="chitiet.html">
			                            <img class="img-responsive" src="../../Scripts/image/' .$value['Hinh'].'" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-9">
			                        <h3>'.$value['TieuDe'].'</h3>
			                        <p>'.$value['TomTat'].'</p>
			                        <a class="btn btn-primary" href="'.$value['TieuDeKhongDau'].'">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

		                	</div>
							<div class="break"></div>
		                </div>';
                         }
                         echo $xhtml;
                        ?>

		                <!-- end item -->
					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
<?php require_once "../Shared/_Footer.html" ?>


