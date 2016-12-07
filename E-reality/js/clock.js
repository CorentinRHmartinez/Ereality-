$(function () {
    $("#triggers-container2").on('click', '.trigger', function (e) {
        e.preventDefault && e.stopPropagation();

        $('#triggers-container2 .trigger').removeClass('visible');
        $('#img-container2 .hut').removeClass('visible');

        console.log($(this).data('target'));
        $(this).addClass("visible");
        $("." + $(this).data('target')).addClass("visible");



    });
});