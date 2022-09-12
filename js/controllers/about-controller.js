define(['../services/about-service', '../views/about-view'], function (aboutService, aboutView) {

    var externals = {};

    externals.init = function () {
        aboutService.getStrings(aboutView.getData);
        // cityService.getApiData(cityView.showData);
        // cityService.changeImg();

    }

    return externals;
})