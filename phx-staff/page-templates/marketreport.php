<?php
/**
 * Template Name: Market Report
 */

get_header();
get_template_part('parts/hero');
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="main-content">
    <div class="row">
      <div class="medium-4 columns fixed-panel" style="position:fixed;">
        <?php the_content(); ?>
      </div>

      <div class="medium-6 columns">
        <h2 id="Designer">Designers</h2>

        <p>Montes tempus adipiscing tempor per blandit velit vestibulum leo curabitur dui facilisi massa vestibulum duis consectetur. Diam in curabitur parturient sem varius primis urna a id platea parturient integer hendrerit aliquam parturient a tortor sem est parturient porta quis condimentum in quam. A aptent ipsum vehicula vivamus consequat condimentum ac vestibulum dis lectus a est eu gravida. Parturient mi a a adipiscing porta elit ut arcu leo metus semper elementum eu parturient conubia parturient.</p>

        <p>Est ullamcorper viverra lectus a inceptos sem interdum consectetur magna ullamcorper a natoque suscipit dis ultricies sed a eu a per a tellus ultricies a vivamus morbi viverra. Felis ullamcorper in aliquam fermentum cursus quis suspendisse ullamcorper suspendisse suspendisse ridiculus per mus accumsan a placerat a ut aptent sed a adipiscing conubia potenti sed. A vestibulum scelerisque hac vestibulum vestibulum amet condimentum himenaeos in a felis vehicula eros sit adipiscing et curae. Ultricies sodales luctus fringilla vestibulum condimentum habitant scelerisque taciti a dignissim suspendisse nascetur vulputate ullamcorper a suscipit vivamus gravida penatibus integer mattis amet. Magna ac nec vestibulum fusce ut mi a vestibulum suscipit tincidunt cras a sit luctus a consequat sit sociis iaculis nulla. A parturient elementum est morbi aenean a parturient egestas aliquet integer hac litora penatibus nisi magnis curabitur ullamcorper molestie suspendisse a.</p>

        <h4>Salary Information for this position</h4>
      	<p>
          <strong>High:</strong> $85,000<br>
    			<strong>Low:</strong> $35,000<br>
    			<strong>Median in Market:</strong> $55,000
        </p>

        <h2 id="WordPressDeveloper" style="padding-top:450px;">WordPress Developers</h2>

        <p>Montes tempus adipiscing tempor per blandit velit vestibulum leo curabitur dui facilisi massa vestibulum duis consectetur. Diam in curabitur parturient sem varius primis urna a id platea parturient integer hendrerit aliquam parturient a tortor sem est parturient porta quis condimentum in quam. A aptent ipsum vehicula vivamus consequat condimentum ac vestibulum dis lectus a est eu gravida. Parturient mi a a adipiscing porta elit ut arcu leo metus semper elementum eu parturient conubia parturient.</p>

        <p>Est ullamcorper viverra lectus a inceptos sem interdum consectetur magna ullamcorper a natoque suscipit dis ultricies sed a eu a per a tellus ultricies a vivamus morbi viverra. Felis ullamcorper in aliquam fermentum cursus quis suspendisse ullamcorper suspendisse suspendisse ridiculus per mus accumsan a placerat a ut aptent sed a adipiscing conubia potenti sed. A vestibulum scelerisque hac vestibulum vestibulum amet condimentum himenaeos in a felis vehicula eros sit adipiscing et curae. Ultricies sodales luctus fringilla vestibulum condimentum habitant scelerisque taciti a dignissim suspendisse nascetur vulputate ullamcorper a suscipit vivamus gravida penatibus integer mattis amet. Magna ac nec vestibulum fusce ut mi a vestibulum suscipit tincidunt cras a sit luctus a consequat sit sociis iaculis nulla. A parturient elementum est morbi aenean a parturient egestas aliquet integer hac litora penatibus nisi magnis curabitur ullamcorper molestie suspendisse a.</p>

        <h4>Salary Information for this position</h4>

      	<p>
          <strong>High:</strong> $85,000<br>
    			<strong>Low:</strong> $55,000<br>
    			<strong>Median in Market:</strong> $75,000
        </p>

        <h2 id="iOSAppDeveloper" style="padding-top:450px;">iOS app Developers</h2>

        <p>Montes tempus adipiscing tempor per blandit velit vestibulum leo curabitur dui facilisi massa vestibulum duis consectetur. Diam in curabitur parturient sem varius primis urna a id platea parturient integer hendrerit aliquam parturient a tortor sem est parturient porta quis condimentum in quam. A aptent ipsum vehicula vivamus consequat condimentum ac vestibulum dis lectus a est eu gravida. Parturient mi a a adipiscing porta elit ut arcu leo metus semper elementum eu parturient conubia parturient.</p>

        <p>Est ullamcorper viverra lectus a inceptos sem interdum consectetur magna ullamcorper a natoque suscipit dis ultricies sed a eu a per a tellus ultricies a vivamus morbi viverra. Felis ullamcorper in aliquam fermentum cursus quis suspendisse ullamcorper suspendisse suspendisse ridiculus per mus accumsan a placerat a ut aptent sed a adipiscing conubia potenti sed. A vestibulum scelerisque hac vestibulum vestibulum amet condimentum himenaeos in a felis vehicula eros sit adipiscing et curae. Ultricies sodales luctus fringilla vestibulum condimentum habitant scelerisque taciti a dignissim suspendisse nascetur vulputate ullamcorper a suscipit vivamus gravida penatibus integer mattis amet. Magna ac nec vestibulum fusce ut mi a vestibulum suscipit tincidunt cras a sit luctus a consequat sit sociis iaculis nulla. A parturient elementum est morbi aenean a parturient egestas aliquet integer hac litora penatibus nisi magnis curabitur ullamcorper molestie suspendisse a.</p>

        <h4>Salary Information for this position</h4>

      	<p>
          <strong>High:</strong> $125,000<br>
    			<strong>Low:</strong> $65,000<br>
    			<strong>Median in Market:</strong> $95,000
        </p>
      </div>
    </div>
  </section>
<?php endwhile; endif; ?>


<?php
get_footer();
