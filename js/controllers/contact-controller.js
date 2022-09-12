define(['../services/contact-service', '../views/contact-view'], function (contactService, contactView) {

    var externals = {};

    externals.init = function () {
        contactService.getData(contactView.showData);
    }


    return externals;
})