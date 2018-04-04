<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>White July</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- vue CDN -->
        <link rel="stylesheet" href="https://unpkg.com/vue-material@beta/dist/vue-material.min.css">
        <link rel="stylesheet" href="https://unpkg.com/vue-material@beta/dist/theme/default.css">

        <script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>

        <style>
            .md-app {
                min-height: 350px;
                border: 1px solid rgba(#000, .12);
              }
            .md-app-toolbar {
                background-color: #343A40;
                color: white;
            }
            .content-display {
/*                margin-left: 275px;*/
                padding-top: 30px;
                position: relative;
                z-index: 9999999999;
            }
            .md-drawer{
                max-width: 230px !important;
   
                /*max-width: calc(100vw - 125px);     USE WHEN SASS IS INTEGRATED*/
            }
            label {
                margin-bottom: 0 !important;
            }
            .mdl-textfield{
                width: 100%;
            }
            .body-footer{
                margin-top: 50px;
                text-align: right;
            }
        </style>

    </head>
    <body>