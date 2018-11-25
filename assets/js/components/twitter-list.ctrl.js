app.controller('TwitterCtrl', ['$scope', 'TweetService',
    function ($scope, TweetService) {
        $scope.limit = 6;
        $scope.offset = 0;
        $scope.lastID = 0;
        $scope.username = 'official_php';
        $scope.tweets = [];
        $scope.errors = [];

        $scope.nextTweets = function () {
            $scope.lastID = $scope.tweets[$scope.tweets.length -1].id_str;
            $scope.offset++;
            $scope.limit = Math.abs($scope.limit);
            $scope.getTweets();
        };

        $scope.previousTweets = function () {
            $scope.lastID = $scope.tweets[$scope.tweets.length -1].id_str;
            $scope.offset--;
            $scope.limit = -$scope.limit;
            $scope.getTweets();
        };

        $scope.getTweets = function () {
            TweetService.getTweets({
                username: this.username,
                limit: this.limit,
                offset: this.lastID
            }).then(function success(response) {
                console.log(response);
                if(response.data.errors) {
                    $scope.tweets = [];
                    $scope.errors = response.data.errors
                } else {
                    $scope.tweets = response.data;
                }

            }, function error(response) {
                console.log(response);
            });
        }
    }
]);