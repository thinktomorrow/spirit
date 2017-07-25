<section class="stack-l panels" id="panels">
  <h1>Tabs</h1>
  <hr>
  <div class="row gutter">
    <div class="column-12">
      <div class="tabs inset">
        <nav class="pull-right">
          <ul class="tab-nav">
            <li class="active"><a href="#tab1">Tab #1</a></li>
            <li><a href="#tab2">Tab #2</a></li>
            <li><a href="#tab3">Tab #3</a></li>
            <li><a href="#tab4">Tab #4</a></li>
          </ul>
        </nav>
        <div class="clearfix"></div>
        <div class="tab-content">
          <div id="tab1" class="tab active">
            <p>Tab #1 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis.</p>
          </div>

          <div id="tab2" class="tab">
            <p>Tab #2 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
          </div>

          <div id="tab3" class="tab">
            <p>Tab #3 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p>
          </div>

          <div id="tab4" class="tab">
            <p>Tab #4 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
$(function() {
  jQuery('.tabs .tab-links a').on('click', function(e)  {
    var currentAttrValue = jQuery(this).attr('href');

    // Show/Hide Tabs
    jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

    // Change/remove current tab to active
    jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

    e.preventDefault();
  });
});
</script>