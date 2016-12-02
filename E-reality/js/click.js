$(function () {
    $("#triggers-container").on('click', '.trigger', function (e) {
        e.preventDefault && e.stopPropagation();

        $('#triggers-container .trigger').removeClass('visible');
        $('#img-container img').removeClass('visible');

        console.log($(this).data('target'));
        $(this).addClass("visible");
        $("." + $(this).data('target')).addClass("visible");



    });
});