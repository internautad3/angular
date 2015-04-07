<?php
ini_set('default_charset', UTF - 8);
//include_once "config.php";
//include_once "functions/functions.php";
//include_once "classes/conexao.php";
?> 

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--BOOTSTRAP CSS-->
        <link href="public/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>

        <!--ANGULAR CSS-->
        <link href="public/css/animations.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/doc_widgets.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/docs.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/prettify-theme.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/prettify.css" rel="stylesheet" type="text/css"/>
        <link href="public/js/angular/angular-csp.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container-fluid bg-danger">
            <div class="jumbotron">
                <h3 class="text-center">RUY DE CARVALHO SANTOS</h3>
            </div>

            <div class="row">
                <div class="well" ng-controller="helloController">
                    {{nome}}
                </div>


            </div>
        </div>

        <script>
        var helloController = function($scope){
            helloController.$inject = ['$scope'];
            $scope.nome = 'adsfa';
        };
        </script>
        <!--ANGULAR JS-->

        <script src="public/js/angular/angular.js" type="text/javascript"></script>
        <script src="public/js/angular/angular-animate.js" type="text/javascript"></script>
        <script src="public/js/angular/angular-aria.js" type="text/javascript"></script>
        <script src="public/js/angular/angular-cookies.js" type="text/javascript"></script>
        <script src="public/js/angular/angular-loader.js" type="text/javascript"></script>
        <script src="public/js/angular/angular-messages.js" type="text/javascript"></script>
        <script src="public/js/angular/angular-mocks.js" type="text/javascript"></script>
        <script src="public/js/angular/angular-resource.js" type="text/javascript"></script>
        <script src="public/js/angular/angular-route.js" type="text/javascript"></script>
        <script src="public/js/angular/angular-sanitize.js" type="text/javascript"></script>
        <script src="public/js/angular/angular-scenario.js" type="text/javascript"></script>
        <script src="public/js/angular/angular-touch.js" type="text/javascript"></script>

        <!--BOOTSTRAP JS-->
        <script src="public/js/js/bootstrap.js" type="text/javascript"></script>
        <script src="public/js/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/js/js/npm.js" type="text/javascript"></script>



    </body>
</html>
