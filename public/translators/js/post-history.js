$(document).ready(() => {
    "use strict";
        // var maxLength = 278;
        // $(".card-text.show-read-more").each(function () {
        //     var myStr = $(this).text();
        //     if ($.trim(myStr).length > maxLength) {
        //         var newStr = myStr.substring(0, maxLength);
        //         var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
        //         $(this).empty().html(newStr);
        //         $(this).append(' <a href="javascript:void(0);" class="read-more">More...</a>');
        //         $(this).append('<span class="more-text">' + removedStr + '</span>');
        //     }
        // });
        // $(".read-more").click(function () {
        //     $(this).siblings(".more-text").contents().unwrap();
        //     $(this).remove();
        // });

    var showChar = 278;
    var ellipsestext = "...";
    var moretext = "more";
    var lesstext = "less";
    $('.more').each(function() {
        var content = $(this).html();

        if(content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar-1, content.length - showChar);

            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

            $(this).html(html);
        }

    });

    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
