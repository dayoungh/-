$(function(){
    // ----------------------------
$('.m_slider').slick({
    arrows:false,
    autoplay:true,
    pauseOnHover:false,
});


$('#mv01').YTPlayer({
    videoURL:'https://youtu.be/Sfzmf8BZ7B4',
    containment:'self',
    autoPlay:true, 
    mute:true, 
    startAt:0, 
    opacity:1,
    showControls:false,
    playOnlyIfVisible:true,
    optimizeDisplay:false,
});






    // ----------------------------
});