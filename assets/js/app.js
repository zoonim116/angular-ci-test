var app = angular.module('tweetsList', ['ngResource', 'ngRoute']);

app.config(function ($routeProvider) {
    $routeProvider.when('/', {
        templateUrl: 'assets/js/components/twitter-list.template.html',
        controller: 'TwitterCtrl'
    })
});