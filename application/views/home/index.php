<!DOCTYPE html>
<html lang="en" ng-app="tweetsList">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset_url('css/style.css'); ?>">

</head>
<body>
    <div class="container">
        <ng-view></ng-view>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-resource/1.7.5/angular-resource.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular-route.min.js"></script>
    <script src="<?php echo asset_url('js/app.js') ?>"></script>
    <script src="<?php echo asset_url('js/components/twitter-list.service.js') ?>"></script>
    <script src="<?php echo asset_url('js/components/twitter-list.ctrl.js') ?>"></script>
</body>
</html>