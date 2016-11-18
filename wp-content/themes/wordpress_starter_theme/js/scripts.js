//USING THE INSTAGRAM API
var instagramFeed = {};

instagramFeed.getInfo = function() {

    var access_token = "1688239682.3a81a9f.1aabde687ed2437ea4ab44d9c6e2db6b";
    var apiUrl = "https://api.instagram.com/v1/users/self/media/recent/?access_token=" + access_token;

    $.ajax({
        url: apiUrl,
        method: 'GET',
        dataType: 'jsonp',
        data: {
            count: 10
        }
    }).then(function(instagramData) {
        
        instagramFeed.getPhotos(instagramData);
        console.log(instagramData);
    });
};

instagramFeed.getPhotos = function(instagramData) {

    var returnedData = instagramData.data;

    for (i = 0; i < returnedData.length; i++) {
        var photoLinks = returnedData[i].images.standard_resolution.url;

        $instagramImg = $('<img>').attr({
            src: photoLinks
        });
        console.log(photoLinks);

        $('.instagram-feed').append($instagramImg);
    }
};

instagramFeed.init = function() {
    instagramFeed.getInfo();
};

$(function() {
    //LOADER
    setTimeout(function() {
        $('.loader').fadeOut('slow', function() {
        })
    }, 2000);

    instagramFeed.init();
});





