<!--A class="nombreyDescuento"uthor: W3layouts modificado por marc3l 

Author plantilla original: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>citio web ropa maternal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content=" web template" />
  

    <?php

        // CONEXION A LA BASE 
    //conectar servidor
   $usuario = "root";
   $contrasena = "";  
   $servidor = "localhost";
   $basededatos = "modelos";

    $conexion = mysqli_connect( $servidor, $usuario,$contrasena )  or die ("No se ha podido conectar al servidor de Base de datos");
    //verificar
        
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

    // llamando a banner1
                                    $sqlban1="SELECT * from modelo where categoria = 'BanerO1'";
                                    $resultban1=mysqli_query($conexion,$sqlban1);

                                    while($traerban1=mysqli_fetch_array($resultban1)){

                                    $id_unicoBAN1 = $traerban1['ID_modelo'] ;
                                    $nombreBAN1 = $traerban1['NOMBRE'];
                                    $catItemBAN1 = $traerban1['categoria'] ;
                                    $PrecioItemOBAN1 = number_format($traerban1['PRECIO_original'], 0,',','.');
                                    $PrecioItemRBAN1 = number_format($traerban1['PRECIO_rebajado'], 0, ',','.');
                                    $descripcionBAN1 = $traerban1['DESCRIPCION'];

                                    $aBAN1 = $traerban1['PRECIO_original'];
                                    $bBAN1 = $traerban1['PRECIO_rebajado']; //precio menor
                                    
                                    $resBAN1= $bBAN1*100 / $aBAN1; 

                                    $imgBAN1= $traerban1['IMAGEN1'];
                                    }
                                   
                                    
                                    // llamando a banner2
                                    $sqlban2="SELECT * from modelo where categoria = 'BanerO2'";
                                    $resultban2=mysqli_query($conexion,$sqlban2);

                                    while($traerban2=mysqli_fetch_array($resultban2)){

                                    $id_unicoBAN2 = $traerban2['ID_modelo'] ;
                                    $nombreBAN2 = $traerban2['NOMBRE'];
                                    $catItemBAN2 = $traerban2['categoria'] ;
                                    $PrecioItemOBAN2 = number_format($traerban2['PRECIO_original'], 0,',','.');
                                    $PrecioItemRBAN2 = number_format($traerban2['PRECIO_rebajado'], 0, ',','.');
                                    $descripcionBAN2 = $traerban2['DESCRIPCION'];

                                    $aBAN2 = $traerban2['PRECIO_original'];
                                    $bBAN2 = $traerban2['PRECIO_rebajado']; //precio menor
                                  
                                    $resBAN2 = $bBAN2*100 / $aBAN2; 

                                    $imgBAN2= $traerban2['IMAGEN1'];
                                    }

                                    // llamando a banner3
                                    $sqlban3="SELECT * from modelo where categoria = 'BanerO3'";
                                    $resultban3=mysqli_query($conexion,$sqlban3);

                                    while($traerban3=mysqli_fetch_array($resultban3)){

                                    $id_unicoBAN3 = $traerban3['ID_modelo'] ;
                                    $nombreBAN3 = $traerban3['NOMBRE'];
                                    $catItemBAN3 = $traerban3['categoria'] ;
                                    $PrecioItemOBAN3 = number_format($traerban3['PRECIO_original'], 0,',','.');
                                    $PrecioItemRBAN3 = number_format($traerban3['PRECIO_rebajado'], 0, ',','.');
                                    $descripcionBAN3 = $traerban3['DESCRIPCION'];

                                    $aBAN3 = $traerban3['PRECIO_original'];
                                    $bBAN3 = $traerban3['PRECIO_rebajado']; //precio menor
                                    
                                    $resBAN3 = $bBAN3*100 / $aBAN3; 

                                    $imgBAN3= $traerban3['IMAGEN1'];   }
    



    ?>


    <script>        
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Owl-Carousel-CSS -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <!-- top nav -->
            <nav class="top_nav d-flex pt-3 pb-1">
                <!-- logo -->
                <h1>
                    <img src='imgUP/letrasLogo.jpg' alt='img' class='card-img-top'>
                </h1>
                
                
                <!-- //logo  con buscador inicio de sesion y carrito-->
                
                <div class="w3ls_right_nav ml-auto d-flex">
                    <!-- search form -->
                    
                    <form class="nav-search form-inline my-0 form-control" action="#" method="post"> 
                        <select class="form-control input-lg" name="category">
                            <option value="all">buscar en tienda</option>
                            <optgroup label="maternal(Embarazo)">
                                <option value="jardineras y shorts">jardineras y shorts</option>
                                <option value="pantalones">pantalones</option>
                                <option value="vestidos1">vestidos </option>
                                <option value="Polerones y abrigos">Polerones y abrigos</option>
                                <option value="Poleras y Blusas">Poleras y Blusas</option>
                                <option value="Calzas">Calzas</option>                                
                             </optgroup>  
                             <optgroup label="Post natal(Lactancia)">
                                <option value="Poleras">Poleras</option>
                                <option value="Polerones">Polererones</option>
                                <option value="Calzas postparto">Calzas(Post parto)</option>
                                <option value="Lenceria">Lenceria (post parto)</option>
                                <option value="vestidos y minivestidos">vestidos </option>
                                <option value="Pillamas">Pillamas</option>                                                               
                            </optgroup>                              
                        </select>
                        <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Search">
                    </form>
                    
                    
                    <!-- search form -->
                    <div class="nav-icon d-flex">
                        
                        
                        <!-- sigin and sign up -->
                        
                        <!-- sigin and sign up -->
                        
                        
                        
                        <!-- shopping cart -->
                        <div class="cart-mainf">
                            <div class="hubcart hubcart2 cart cart box_1">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="btn top_hub_cart mt-1" type="submit" name="submit" value="" title="Cart">
                                        <i class="fas fa-shopping-bag"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- //shopping cart ends here -->
                    </div>
                </div>
                
                
                
            </nav>
            <!-- //top nav -->
           
        </div>
        <!-- //header container -->
    </header>
    <!-- //header -->


    <!-- banner -->
    <div class="banner-text">
        <div class="callbacks_container">
           
            <ul class="rslides" id="slider3">
                
                <li class="banner" >
                    <div class="container">
                        <h6 class="bn_right">
                                
                                
                                 <div id="contenedor" style="width:100%; height:100%;">
                                    <div class="centrar-imagen">
                                   <img src="imgUP/logoTorso.jpg" />
                                    </div> 
                                     </div>
                         </h6>
                       
                        
                        <div class="slider-info mt-sm-5">
                            
                            <div class="bnr_clip position-relative">
                                
                                    <p style="">
                                       
                                    
                                    <?php 
                                    echo $nombreBAN1;
                                    ?>

                                    </p>
                                    <?php
                                       
                                       
                                           
                                       echo  "<FONT FACE='impact' SIZE=6 COLOR='red'>"; echo number_format($resBAN1); echo "%</FONT>";
                                    ?> 
                                
                                <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                
                                </div>
                                <div class="containerBAN">
                                            <p class="textoContainerBAN"><?php echo $descripcionBAN1;?></p>
                                        </div> 
                                <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">IR</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="banner banner2">
                    <div class="container">
                       <h6 class="bn_right">
                                
                                 <div id="contenedor" style="width:100%; height:100%;">
                                    <div class="centrar-imagen">
                                   <img src="imgUP/logoTorso.jpg" />
                                    </div> 
                                     </div>
                            </h6>
                        <div class="slider-info mt-sm-5">
                            
                            <div class="bnr_clip position-relative">
                                    <h4  style="position: relative; color: #BA55D3;">
                                        <br>
                                    <?php 
                                    echo $nombreBAN2;
                                    ?>


                                  
                                   <?php
                                    echo  "<span class='px-2'>"; echo number_format($resBAN2); echo "%</span>";
                                    echo "</h4>";                                                              
                                    ?> 
                                
                                <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                
                                </div>
                                        <div class="containerBAN">
                                            <p class="textoContainerBAN"><?php echo $descripcionBAN2;?></p>
                                        </div> 
                                <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">IR</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="banner banner3">
                    <div class="container">
                      <h6 class="bn_right">
                                
                                 <div id="contenedor" style="width:100%; height:100%;">
                                    <div class="centrar-imagen">
                                   <img src="imgUP/logoTorso.jpg" />
                                    </div> 
                                     </div>

                            </h6>
                        <div class="slider-info mt-sm-5">
                          
                           <div class="bnr_clip position-relative">
                                    <h4  style="position: relative; color: #BA55D3;">
                                        <br>
                                    <?php 
                                    echo $nombreBAN3;
                                    ?>


                                    <?php
                                    echo  "<span class='px-2'>"; echo number_format($resBAN3); echo "%</span>";
                                    echo "</h4>";                                                              
                                    ?> 
                                
                                <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                
                                </div>
                                        <div class="containerBAN">
                                            <p class="textoContainerBAN"><?php echo $descripcionBAN3;?></p>
                                        </div>       
                                
                                <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">IR</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- //banner -->
    
 
    <!-- product tabs -->
    <section class="tabs_pro py-md-5 pt-sm-3 pb-5">
        <h5 class="head_agileinfo text-center text-capitalize pb-5">
            <span>N</span>uestros productos</h5>
        <div class="tabs tabs-style-line pt-md-5">
            <nav class="container">
                <ul id="clothing-nav" class="nav nav-tabs tabs-style-line" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#women" id="women-tab" role="tab" data-toggle="tab" aria-controls="women" aria-expanded="true">Maternal(embarazo)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#men" role="tab" id="men-tab" data-toggle="tab" aria-controls="men">Post natal(lactancia)
                        </a>
                    </li>
                </ul>
            </nav>
            <a href='ADMIN_POST.html'>admin</a>
            <!-- Content Panel -->
            <div id="clothing-nav-content" class="tab-content py-sm-5">
                <div role="tabpanel" class="tab-pane fade show active" id="women" aria-labelledby="women-tab"> 
                    <div id="owl-demo" class="owl-carousel text-center">      
                        
<!--            items           wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww                                                    wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww -->
                            <?php 

                                    //ofertas principales 1
                                    $sqlOfP1m="SELECT * from modelo where categoria = 'OfertaM'";
                                    $resultOfP1m=mysqli_query($conexion,$sqlOfP1m);


                                    $numfilas = $resultOfP1m->num_rows;

                                    while($traerOfP1m=mysqli_fetch_array($resultOfP1m)){

                                  
                                    $IDOfP1m = $traerOfP1m['ID_modelo'];
                                    $nombreOfP1m = $traerOfP1m['NOMBRE'];
                                    $catItemOfP1m = $traerOfP1m['categoria'] ;
                                    $PrecioItemOOfP1m = number_format($traerOfP1m['PRECIO_original'], 0,',','.');
                                    $PrecioItemROfP1m = number_format($traerOfP1m['PRECIO_rebajado'], 0, ',','.');
                                                                         
                                    $img1OfP1m= $traerOfP1m['IMAGEN1'];
                                    
                        ?>
                        <div class="item">                            
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                  

                                   

                                    <?php
                                    echo  "<img src='imgUP/"; echo $img1OfP1m; echo "' alt='img' class='card-img-top'>";
                                    ?>  
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <form action="#" method="POST">
                                            <input type="hidden" id="PRODUCTID" name="PRODUCTO" value=<?php $IDOfP1m ?>>  
                                            <input type="submit" class="link-product-add-cart" name="verof" value="ver">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">
                                            <?php echo $nombreOfP1m ?>

                                        </h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold"><?php echo $PrecioItemROfP1m ?></p>
                                        <p class="line-through"><?php echo $PrecioItemOOfP1m ?></p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value=<?php echo $nombreOfP1m ?>>
                                        <input type="hidden" name="amount" value=<?php echo $PrecioItemROfP1m ?>>
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->                         
                        </div>

                        <?php  } ?>


                        
                        <div class="item">
                            <div class="product-men p-3 text-center">
                                <img src="images/p2.png" class="img-responsive" alt="" />
                                <a href="women.html" class="btn btn-lg bg-info text-white">view more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="men" aria-labelledby="men-tab">
                    <div id="owl-demo1" class="owl-carousel text-center">
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pm1.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="mens.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Solid Formal Black Shirt</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$40.00</p>
                                        <p class="line-through">$50.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Solid Formal Black Shirt">
                                        <input type="hidden" name="amount" value="40.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pm2.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="mens.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Solid Formal Brown Shirt</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$24.99</p>
                                        <p class="line-through">$35.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Solid Formal Brown Shirt">
                                        <input type="hidden" name="amount" value="24.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <!-- card -->
                        <div class="item">
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pm11.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="mens.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Black Casual Men's Blazer</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$20.00</p>
                                        <p class="line-through">$25.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Black Casual Men's Blazer">
                                        <input type="hidden" name="amount" value="20.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pt1.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="mens.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Slim Fit Men's Black Trousers</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$14.99</p>
                                        <p class="line-through">$18.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Slim Fit Men's Black Trousers">
                                        <input type="hidden" name="amount" value="18.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pt2.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="mens.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Slim Fit Men's Denim Jeans</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$24.99</p>
                                        <p class="line-through">$35.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Slim Fit Men's Denim Jeans">
                                        <input type="hidden" name="amount" value="24.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class=" card product-men p-3 ">
                                <div class="men-thumb-item ">
                                    <img src="images/pt3.jpg " alt="img " class="card-img-top ">
                                    <div class="men-cart-pro ">
                                        <div class="inner-men-cart-pro ">
                                            <a href="mens.html " class="link-product-add-cart ">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body py-3 px-2 ">
                                    <h5 class="card-title text-capitalize ">Slim Fit Men's Gold Trousers</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold ">$14.99</p>
                                        <p class="line-through ">$18.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Slim Fit Men's Gold Trousers">
                                        <input type="hidden" name="amount" value="14.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">

                            <div class="product-men p-3 text-center">
                                <img src="images/p2.png" class="img-responsive" alt="">
                                <a href="men.html" class="btn btn-lg bg-info text-white">view more</a>
                            </div>
                            <!-- //card -->
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="girl" aria-labelledby="girl-tab">
                    <div id="owl-demo2" class="owl-carousel text-center">
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pg1.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Midi/Knee Length Casual Dress</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$20.00</p>
                                        <p class="line-through">$39.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Midi/Knee Length Casual Dress">
                                        <input type="hidden" name="amount" value="20.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pg2.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Midi/Knee Length Casual Dress</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$24.99</p>
                                        <p class="line-through">$34.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Midi/Knee Length Casual Dress">
                                        <input type="hidden" name="amount" value="24.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pg3.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$14.99</p>
                                        <p class="line-through">$27.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                        <input type="hidden" name="amount" value="14.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3 out_w3">
                                <div class="men-thumb-item position-relative">
                                    <img src="images/pg7.jpg" alt="img" class="card-img-top">
                                    <span class="px-2 position-absolute">out of stock</span>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Girls Party Top and Skirt Set</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$19.00</p>
                                        <p class="line-through">$25.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pg4.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Girl's Full Length Party Dress </h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$20.00</p>
                                        <p class="line-through">$35.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Full Length Party Dress">
                                        <input type="hidden" name="amount" value="20.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pg5.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="girl.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Midi/Knee Length Party Dress</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$18.00</p>
                                        <p class="line-through">$25.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Midi/Knee Length Party Dress">
                                        <input type="hidden" name="amount" value="18.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <div class="product-men p-3 text-center">
                                <img src="images/p2.png" class="img-responsive" alt="" />
                                <a href="girls.html" class="btn btn-lg bg-info text-white">view more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="boy" aria-labelledby="boy-tab">
                    <div id="owl-demo3" class="owl-carousel text-center">
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb1.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Shirt, Waistcoat and Pant Set</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$21.00</p>
                                        <p class="line-through">$39.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Shirt, Waistcoat and Pant Set">
                                        <input type="hidden" name="amount" value="21.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb2.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Festive Kurta and Pyjama Set</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$19.99</p>
                                        <p class="line-through">$29.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Festive Kurta and Pyjama Set">
                                        <input type="hidden" name="amount" value="19.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb3.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Boys Casual Shirt and Jeans</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$17.99</p>
                                        <p class="line-through">$24.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Boys Casual Shirt and Jeans">
                                        <input type="hidden" name="amount" value="24.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3 out_w3">
                                <div class="men-thumb-item position-relative">
                                    <img src="images/pb7.jpg" alt="img" class="card-img-top">
                                    <span class="px-2 position-absolute">out of stock</span>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Casual Blazer,Shirt and Trouser Set</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$18.00</p>
                                        <p class="line-through">$26.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <button type="submit" class="hub-cart phub-cart btn">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb4.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Dungaree Casual Solid Denim</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$19.99</p>
                                        <p class="line-through">$24.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Dungaree Casual Solid Denim">
                                        <input type="hidden" name="amount" value="19.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb5.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Boy's Casual Blue T-Shirt</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$15.00</p>
                                        <p class="line-through">$20.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Boy's Casual Blue T-Shirt">
                                        <input type="hidden" name="amount" value="15.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb6.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Boy's Casual Grey T-Shirt</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$10.00</p>
                                        <p class="line-through">$25.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Boy's Casual Grey T-Shirt">
                                        <input type="hidden" name="amount" value="10.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb8.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Casual Shirt and Denim Jeans</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$15.99</p>
                                        <p class="line-through">$25.99</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Casual Shirt and Denim Jeans">
                                        <input type="hidden" name="amount" value="15.99">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <!-- card -->
                            <div class="card product-men p-3">
                                <div class="men-thumb-item">
                                    <img src="images/pb9.jpg" alt="img" class="card-img-top">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="boy.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- card body -->
                                <div class="card-body  py-3 px-2">
                                    <h5 class="card-title text-capitalize">Festive Kurta And Pyjama Set</h5>
                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-dark font-weight-bold">$18.00</p>
                                        <p class="line-through">$25.00</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="Festive Kurta And Pyjama Set">
                                        <input type="hidden" name="amount" value="18.00">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                    </form>
                                </div>
                            </div>
                            <!-- //card -->
                        </div>
                        <div class="item">
                            <div class="product-men p-3 text-center">
                                <img src="images/p2.png" class="img-responsive" alt="" />
                                <a href="boys.html" class="btn btn-lg bg-info text-white">view more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- //product tabs -->
    


     


    <!-- footer -->
    <footer>
        <div class="footerv2-w3ls">
            <div class="footer-w3lagile-innerr">
                
                
                <!-- //footer-top -->
                <div class="footer-bottomv2 py-5">
                    <div class="container">
                        <ul class="bottom-links-agile">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="shop.html">Shop</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>

                        </ul>
                        <h3 class="text-center follow">Follow Us</h3>
                        <ul class="social-iconsv2 agileinfo">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid py-5 footer-copy_w3ls">
                <div class="d-lg-flex justify-content-between">
                    <div class="mt-2 sub-some align-self-lg-center">
                      
                    </div>
                    <div class="cpy-right align-self-center">
                        <h2 class="agile_btxt">
                            <a href="index.html">
                                <span>M</span>aternal
                                <span>J</span>uvenil</a>
                        </h2>
                        <p>© 2018 All rights reserved | Design by
                             Marcel
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    
    
    
  
    <!-- signin Modal -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for show signin and signup modal -->
    <script>
        $(document).ready(function () {
            $("#myModal_btn").modal();
        });
    </script>
    <!-- //script for show signin and signup modal -->
    <!-- smooth dropdown -->
    <script>
        $(document).ready(function () {
            $('ul li.dropdown').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
            });
        });
    </script>
    <!-- //smooth dropdown -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- Banner Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                Timeout: 8,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- // Banner Responsiveslides -->



    <!-- Product slider Owl-Carousel-JavaScript -->
    <script src="js/owl.carousel.js"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: false,
            margin: 10,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            responsive: {
                320: {
                    items: 1,
                },
                568: {
                    items: 2,
                },
                991: {
                    items: 3,
                },
                1050: {
                    items: 4
                }
            }
        });
    </script>
    <!-- //Product slider Owl-Carousel-JavaScript -->
    <!-- cart-js -->
    <script src="js/minicart.js">
    </script>
    <script>
        hub.render();

        hub.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>