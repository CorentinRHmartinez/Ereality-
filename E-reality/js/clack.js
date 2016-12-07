$(function () {
    $("#triggers-container1").on('mouseover', '.trigger', function (e) {
        e.preventDefault && e.stopPropagation();

        $('#triggers-container1 .trigger').removeClass('blue');
        $('#img-container1 div').removeClass('visible');

        console.log($(this).data('target'));
        $(this).addClass("blue");
        $("." + $(this).data('target')).addClass("visible");



    });
});