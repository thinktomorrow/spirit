<section class="stack-l" id="tabs">
    <h1>Tabs</h1>
    <hr>
    <div class="row gutter">
        <div class="column-6" id="clone-28">
            <div class="panel --raised tabs" id="tabs">
                <ul role="tablist" class="tabs-nav">
                    <li role="presentation"><a href="#first" aria-controls="#first" aria-selected="true" role="tab" class="--bottomline squished active">first</a></li>
                    <li role="presentation"><a href="#second" aria-controls="#second" role="tab" class="--bottomline squished">second</a></li>
                    <li role="presentation"><a href="#third" aria-controls="#third" role="tab" class="--bottomline squished">third</a></li>
                </ul>
                <div class="tab-content inset clearfix">
                    <div role="tabpanel" class="active" data-tab="first">
                        <p>Sed fringilla placerat velit vel congue. Aliquam erat volutpat. Suspendisse tempus commodo ex vitae eleifend. Praesent finibus ullamcorper cursus. Morbi et nunc sit amet lacus luctus accumsan.</p>
                    </div>
                    <div role="tabpanel" data-tab="second">
                        <p>Ut elementum lorem vel urna convallis dictum. Nullam porttitor posuere tellus eu congue.</p>
                    </div>
                    <div role="tabpanel" data-tab="third">
                        <p>Suspendisse varius augue et felis pellentesque, feugiat hendrerit erat finibus. Aenean neque leo, egestas nec mi vitae, efficitur auctor nisl. Vivamus pulvinar dolor ex, eu consectetur justo pretium eget.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <pre class="code-box" id="code-28"></pre>
</section>

<script>
    $function(){
        // TABS
        $('#tabs .tabs-nav li').click(function(){
            var nav_tabs = $('#tabs .tabs-nav li');
            var panel_tabs = $('.tab');
            var tab_id = $(this).attr('data-tab');

            nav_tabs.removeClass('active');
            panel_tabs.removeClass('active');

            $(this).addClass('active');
        })
    }
</script>
