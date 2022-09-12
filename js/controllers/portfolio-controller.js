define(['../services/portfolio-service', '../views/portfolio-view'], function (portfolioService, portfolioView) {

    var externals = {};

    externals.init = function () {
        portfolioService.getData(portfolioView.showData);
    }


    return externals;
})