//SLIDESHOW
$('.next').click(function()
    {
    var $slide = $('.slide.current');
    var is_last = $slide.is(":last-child");
    
    if (is_last)
        {
        $slide.fadeOut().removeClass('current');
        $('.slide:first-child').fadeIn().addClass('current');
        }
    else
        {
        $slide.next().fadeIn().addClass('current');
        $slide.fadeOut().removeClass('current');
        }
    })

$('.prev').click(function()
    {
    var $slide = $('.slide.current');
    var is_first = $slide.is(":first-child");
    
    if (is_first)
        {
        $slide.fadeOut().removeClass('current');
        $('.slide:last-child').fadeIn().addClass('current');
        }
    else
        {
        $slide.prev().fadeIn().addClass('current');
        $slide.fadeOut().removeClass('current');
        }
    })