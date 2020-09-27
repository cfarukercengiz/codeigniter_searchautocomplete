$(document).ready(function () {

    $("#search").autocomplete({
        source: "http://localhost/codeigniter_searchautocomplete/book/search/",
        minLength: 3
    });

    $("#search").data('ui-autocomplete')._renderItem = function (ul, item) {

        var $li = $("<li>");

        $li.html("<a href='http://localhost/codeigniter_searchautocomplete/book/" + item.methodName + "/" + item.id + "'><span>" + item.value + "</span></a>");

        return $li.appendTo(ul);
    }


});