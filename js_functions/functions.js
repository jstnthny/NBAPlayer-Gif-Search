
function grabLink(){
    $("img").on('click', function (){
        $("span").html($(this).attr('src'));

    })

}

$("img").click(function(){
    $("img").removeClass('active');
    $(this).addClass('active');

})

grabLink();

function copyToClipboard(element){
    var $text = $("<input>");
    $("body").append($text);
    $text.val($(element).text()).select();
    document.execCommand("copy");
    $text.remove();
}