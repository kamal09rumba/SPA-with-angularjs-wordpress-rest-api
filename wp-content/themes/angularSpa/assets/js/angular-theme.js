//initlializing the angular app and injecting router and resource
var wpApp = new angular.module( 'wpAngularTheme', ['ui.router', 'ngResource'] );

wpApp.factory( 'Posts', function( $resource ) {
    return $resource( appInfo.api_url + 'posts/:ID', {
        ID: '@id'
    })
});

/** angular Controllers **/

wpApp.controller( 'ListCtrl', ['$scope', 'Posts', function( $scope, Posts ) {
    console.log('ListCtrl');
    $scope.page_title = 'Blog Listing Page';

    Posts.query(function( res ) {
        $scope.posts = res;
    });

}]);


//$stateParams => variable comes from url to the controller
wpApp.controller('DetailCtrl',['$scope', '$stateParams', 'Posts', function( $scope, $stateParams, Posts){
    console.log($stateParams);
    Posts.get({ID:$stateParams.id},function(res)
        {
            $scope.post = res;
        })
}])


wpApp.config( function( $stateProvider, $urlRouterProvider){
    $urlRouterProvider.otherwise('/');
    $stateProvider
        .state( 'list', {
            url: '/',
            controller: 'ListCtrl',
            templateUrl: appInfo.template_directory + 'templates/list.html'
        })
        .state('detail',{
            url: '/post/:id',
            controller: 'DetailCtrl',
            templateUrl: appInfo.template_directory+'templates/detail.html',
        })
})

wpApp.filter('to_trusted',['$sce',function($sce){
        return function(text){
            return $sce.trustAsHtml(text);
        }
}])