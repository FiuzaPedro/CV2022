define(['../services/experience-service', '../views/experience-view'], function (experienceService, experienceView) {

    var externals = {};

    externals.init = function () {
        experienceService.getData(experienceView.showData);
    }


    return externals;
})