$('iframe').load(function(){
    $(this).contents().find("body").on('click', function(event) { alert('test'); });
});
$('iframe').attr("src","JavaScript:'iframe content'");