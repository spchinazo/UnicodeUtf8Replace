<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Scrolling Nav - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="http://blackrockdigital.github.io/startbootstrap-scrolling-nav/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="http://blackrockdigital.github.io/startbootstrap-scrolling-nav/css/scrolling-nav.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Start Dropsize MVCf</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Acerca</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">UnicodeUtf8Replace</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contacto</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Intro Section -->
        <section id="intro" class="intro-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Isaac Trenado Mx</h1>
                        <img src="//c5.staticflickr.com/8/7180/26678564700_c6d9eb1cb2_b.jpg" />
                        <p>
                            <strong>UnicodeUtf8Replace:</strong> 
                            Clase que modifica caracteres especiales regresando su correcta conversi&oacute;n para
                            cadenas JSON.
                        </p>
                        <a class="btn btn-default page-scroll" href="#about">Conocer m&aacute;s</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Acerca</h1>
                        <p>
                            <textarea style="width: 100%; height: 600px; border: 0px;">
DropsizeMVCf - extension of the SlimFramework and others tools

@author      Isaac Trenado <isaac.trenado@codigolimpio.com>
@copyright   2013 Isaac Trenado
@link        http://dropsize.codigolimpio.com
@license     http://dropsize.codigolimpio.com/license.txt
@version     3.0.1
@package     DropsizeMVCf

DropsizeMVCf - Web publishing software
Copyright 2015 by the contributors

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

This program incorporates work covered by the following copyright and
permission notices:

DropsizeMVCf is (c) 2013, 2015 
Isaac Trenado - isaac.trenado@codigolimpio.com -
http://www.codigolimpio.com

Wherever third party code has been used, credit has been given in the code's comments.

DropsizeMVCf is released under the GPL
                            </textarea>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>UnicodeUtf8Replace</h1>
                        <p>
                            <?php
                            include "./UnicodeUtf8Replace.php";

                            $lstOriginalJSON = '{"oficio":"","solped":"000000000","pos_financiera":"0000","fecha":"9999-99-99","fecha_sol":"9999-99-99","centro":"4410","zona":"MEXICO","fecha_libsol":"9999-99-99","fondo":"000","area":"XXX","monto_solped":"0000000.00","orden":"","entidad":"MEXICO","tipo_licitacion":"PUBLICA","obra":"OPERACIÓN Y RESTABLECIMIENTO DE LA INFRAESTRUCTURA DE LÍNEAS Y REDES DE, DISTRIBUCIÓN DE ENERGIA ELECTRICA, Y DE CONTROL EN EL ÁMBITO DE INFLUENCIA DE LA DIVISION DE DISTRIBUCIÓN VALLA DE MÉXICO NORTE DE LA ZONA TLALNEPANTLA.","id_solicitud":"0"}';

                            $lstConvertJSON = UnicodeUtf8Replace::UnicodeReplace($lstOriginalJSON);

                            echo "<h1>Original</h1>";
                            echo "<div style=\"width: 100%; word-wrap: break-word;\">" . $lstOriginalJSON . "</div>";
                            echo "<br />";

                            echo "<h1>Resultado</h1>";
                            echo "<div style=\"width: 100%; word-wrap: break-word;\">" . $lstConvertJSON . "</div>";
                            echo "<br />";

                            $lstResultJsonLint = <<<EOD
{
	"oficio": "",
	"solped": "000000000",
	"pos_financiera": "0000",
	"fecha": "9999-99-99",
	"fecha_sol": "9999-99-99",
	"centro": "4410",
	"zona": "MEXICO",
	"fecha_libsol": "9999-99-99",
	"fondo": "000",
	"area": "XXX",
	"monto_solped": "0000000.00",
	"orden": "",
	"entidad": "MEXICO",
	"tipo_licitacion": "PUBLICA",
	"obra": "OPERACI\u00c3?N Y RESTABLECIMIENTO DE LA INFRAESTRUCTURA DE L\u00c3?NEAS Y REDES DE, DISTRIBUCI\u00c3?N DE ENERGIA ELECTRICA, Y DE CONTROL EN EL \u00c3?MBITO DE INFLUENCIA DE LA DIVISION DE DISTRIBUCI\u00c3?N VALLA DE M\u00c3?XICO NORTE DE LA ZONA TLALNEPANTLA.",
	"id_solicitud": "0"
}
EOD;

                            echo "<h1><a href=\"jsonlint.com\">jsonlint.com</a> - Resultado</h1>";
                            echo "<div style=\"width: 100%\">" . $lstResultJsonLint . "</div>";
                            echo "<br />";
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1 text-center">
                            <h4>
                                <strong>Dropsize powered by <a href="http://www.codigolimpio.com">codigo limpio</a></strong>
                            </h4>
                            <p>Cuautitlan Izcalli, M&eacute;xico 54763<br>Ni&ntilde;os H&eacute;roes</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-phone fa-fw"></i> +52 55 42589237</li>
                                <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:isaac.trenado@codigolimpio.com">isaac.trenado@codigolimpio.com</a>
                                </li>
                            </ul>
                            <br>
                            <ul class="list-inline">
                                <li>
                                    <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                                </li>
                            </ul>
                            <hr class="small">
                            <p class="text-muted">Derechos reservados &copy; <a href="http://www.codigolimpio.com">codigolimpio.com</a> 2015</p>
                        </div>
                    </div>
                </div>
            </footer>

        </section>

        <!-- jQuery -->
        <script src="http://blackrockdigital.github.io/startbootstrap-scrolling-nav/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="http://blackrockdigital.github.io/startbootstrap-scrolling-nav/js/bootstrap.min.js"></script>

        <!-- Scrolling Nav JavaScript -->
        <script src="http://blackrockdigital.github.io/startbootstrap-scrolling-nav/js/jquery.easing.min.js"></script>
        <script src="http://blackrockdigital.github.io/startbootstrap-scrolling-nav/js/scrolling-nav.js"></script>

    </body>

</html>

<?php

//echo "<pre>";
//print_r($lstConvertJSON);
//echo "</pre>";
//$lstVariableJSONConvert = '{"oficio":"","solped":"000000000","pos_financiera":"0000","fecha":"9999-99-99","fecha_sol":"9999-99-99","centro":"4410","zona":"MEXICO","fecha_libsol":"9999-99-99","fondo":"000","area":"XXX","monto_solped":"0000000.00","orden":"","entidad":"MEXICO","tipo_licitacion":"PUBLICA","obra":"OPERACI\u00d3N Y RESTABLECIMIENTO DE LA INFRAESTRUCTURA DE L\u00cdNEAS Y REDES DE, DISTRIBUCI\u00d3N DE ENERGIA ELECTRICA, Y DE CONTROL EN EL \u00c1MBITO DE INFLUENCIA DE LA DIVISION DE DISTRIBUCI\u00d3N VALLA DE M\u00c9XICO NORTE DE LA ZONA TLALNEPANTLA.","id_solicitud":"0"}';