app.service('TweetService', ['$http', function ($http) {
    this.getTweets = function (data) {
        return $http({
            method: "GET",
            url: 'tweets/' + data.username + '/' + data.offset + '/' + data.limit
        })
    }
}]);

