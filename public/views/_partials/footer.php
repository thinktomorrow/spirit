</main>

<script type="text/javascript" src="assets/js/jquery.3.2.1.min.js"></script>
<script>
$(function() {
    // SCROLL TO ID
    $('a[href*=""]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 50,
                }, 2000);
                return false;
            }
        }
    });

    // Clone your html into a pre box
    // !important: You can't skip a number because the loop stops working.
    // and all the id's needs to be in the dom to be recognized by the function
    function cloneHtml(){
        $('[id^=clone-]').each(function (i) {
            var cloneDiv = $('#clone-'+ i).html();
            var stripFromTag = cloneDiv.replace(/\/</,'&lt;',/\/>/,'&gt;');
            $('#code-'+ i).text(cloneDiv);
        });
    }
    cloneHtml();

    // BRING IN THE COLORS

    // Function to turn rgb to hex
    function rgb2hex(orig){
        var rgb = orig.replace(/\s/g,'').match(/^rgba?\((\d+),(\d+),(\d+)/i);
        return (rgb && rgb.length === 4) ? "#" +
        ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
        ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
        ("0" + parseInt(rgb[3],10).toString(16)).slice(-2) : orig;
    };



    var colorArray=[];

    $('.color-block > [class^=bg-]').each(function (i,j) {
        var rgb = $(this).css('background-color');
        var hex = rgb2hex($(this).css('background-color'));

        $('.rgbCode-'+i).text( rgb );
        $('.hexCode-'+i).text( hex );

    });

});
</script>

</body>
</html>