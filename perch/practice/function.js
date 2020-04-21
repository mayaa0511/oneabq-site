$(document).ready(function() {
    $(.menu-icon).on("click", function(){
        $("nav ul").toggleClass("showing");
    });
});

$(window).on("scroll", fucntion(){
    if($(window).scrollTop()){
        $("nav").addClass("black")
    }
    else{
        $("nav").removeClass("black");
    }
})