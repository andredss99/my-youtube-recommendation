MyYoutubeRecommendation.loadVideos(my_yt_rec_ajax.url).then((value) => {
    MyYoutubeRecommendation.listCallbacks.forEach((item) => {
        item.callback(value, item.containerId, item.layout, item.limit, item.lang);
    });
});