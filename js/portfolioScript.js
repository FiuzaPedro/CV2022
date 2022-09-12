//  function to dynamically add buttons and the portfolio filter list
(function () {
    var $imgs = $('#gallery div');                  // Store all images
    var $buttons = $('#buttons');                   // Store buttons element
    var tagged = {};                                // Create tagged object

    $imgs.each(function () {                         // Loop through images and
        var img = this;                               // Store img in variable
        var tags = $(this).data('tags');              // Get this element's tags

        if (tags) {      // If the element had tags
            tags.split(',').forEach(function (tagName) { // Split at comma and
                if (tagged[tagName] == null) {            // If object doesn't have tag
                    tagged[tagName] = [];                   // Add empty array to object
                }
                tagged[tagName].push(img);                // Add the image to the array
            });
        }
    });

    $('<button/>', {                                 // Create empty button
        text: 'Show all',                              // Add text 'show all'
        class: 'active',                               // Make it active
        click: function () {                            // Add onclick handler to
            $(this)                                      // Get the clicked on button
                .addClass('active')                        // Add the class of active
                .siblings()                                // Get its siblings
                .removeClass('active');                    // Remove active from siblings
            $imgs.delay(250).fadeIn();                                // Show all images
        }
    }).appendTo($buttons);                           // Add to buttons

    $.each(tagged, function (tagName) {               // For each tag name
        $('<button/>', {                               // Create empty button
            text: tagName + ' (' + tagged[tagName].length + ')', // Add tag name
            click: function () {                          // Add click handler
                $(this)                                    // The button clicked on
                    .addClass('active')                      // Make clicked item active
                    .siblings()                              // Get its siblings
                    .removeClass('active');                  // Remove active from siblings
                $imgs
                    .delay(250)                                      // With all of the images
                    .fadeOut()                                        // Hide them
                    .filter(tagged[tagName])                 // Find ones with this tag
                    .delay(250)
                    .fadeIn();                                 // Show just those images
            }
        }).appendTo($buttons);                         // Add to the buttons
    });

}());


/*caption onclick function to show portfolio works*/
var hCaption = $('.hCaption');
var btnOff = $('.turnOff');
var modalPortfolio = $('.modalPortfolio');

hCaption.click(function () {
    let frame = $('.iFrameCurrent');
    let currentText = ($(this).text());
    let targetSrc = currentText.split(' ')[0];

    modalPortfolio.addClass('modalOn');
    btnOff.animate({ "opacity": 1 }, 1500)

    // frame.animate({
    //     height: ''
    // })
    if ($(this).parent().data('tags') !== 'backend' || targetSrc === "Hackaton") {
        frame.attr("src", './PortfolioWorks/' + targetSrc + '/index.html');
    } else {
        frame.attr("src", './PortfolioWorks/' + targetSrc + '/index.php');
    }
    setTimeout(function () {
        console.log(modalPortfolio.height())
        frame.animate({
            height: modalPortfolio.height()
        })
    }, 2000)
})

btnOff.click(function () {

    modalPortfolio.removeClass('modalOn');
    $(this).css("opacity", "0")
})
