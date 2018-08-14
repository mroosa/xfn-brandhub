<?php
  $dir = "../";
  $scriptList = ['subnav.js','gallery.js'];
  $styleList = ['gallery.css'];
  $activeMain = 1; // Design
  $activeSub = 2;
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
<body class="two-col design">
  <div class="contain">
    <?php include_once($dir . "_templates/_structure/header.php"); ?>
    <main>
      <div class="inner">
        <?php
          if (file_exists("_subnav.php")):
            print "<div id=\"subnav\">\n";
            include_once("_subnav.php");
            print "</div>\n";
          endif;
        ?>
        <div class="content">
          <h1>Expressive X</h1>
          <section class="section" id="top">
            <h2 class="section-title">Introduction</h2>
            <div class="flex-column flex-2col">
              <div>
                <p>Our X is the most differentiating and distinctive feature of our brand name and identity, it’s what makes us, us. </p>
                <p>It’s a dynamic, ownable brand storytelling device that visually represents our brand purpose – fueling discovery for everyday enjoyment – through passions, partnerships, and differentiating product experience.</p>
              </div>
              <div class="img">
                <img style="width: 220px; margin: 0 auto;" src="<?php print $dir; ?>images/design-expressive-x.png" alt-"" />
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Best Practices</h2>
            <div class="flex-column flex-2col">
              <div>
                <h3>The X should be used for:</h3>
                <ul>
                  <li>Big brand moments</li>
                  <li>Differentiating innovations and product launches (e.g., xFi Pods, music on X1, “Storefront”)</li>
                  <li>Exclusive partnerships/sponsorships that differentiate the brand (e.g., NASCAR, Olympics)</li>
                  <li>Tentpole events and experiences that align with key passions (e.g., Oscars, AMAs)</li>
                </ul>
              </div>
              <div>
                <h3>The X should not be used for:</h3>
                <ul>
                  <li>BAU marketing and customer communications</li>
                  <li>Sales/promos</li>
                  <li>Competitive</li>
                  <li>Transactional, legal or support communications</li>
                  <li>Political, religious or otherwise controversial or overly niche subject matter</li>
                </ul>
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Rules of the X</h2>
            <div class="gallery">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-rules-3-00.jpeg" alt="" />
                <p class="caption"><strong>Completed Expressive X</strong><br />The final expressive X art will bring together all important elements - subject, background and X guidelines. Go through the carousel to see the rules of the X.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-rules-3-01.jpeg" alt="" />
                <p class="caption"><strong>Subject</strong><br />For the most part, these sponsorship/partnerships will promote featured artists, athletes, actors or characters. The first thing to do is to examine the provided artwork to determine where the energy of the subject is directed.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-rules-3-02.jpeg" alt="" />
                <p class="caption"><strong>Construction</strong><br />The X should always be low contrast in relation to the background – it shouldn’t be too loud as to overpower what we’re promoting. There are 3 corners from which the foreground art can emerge – left, right, and bottom. The energy of the subject on the previous page will determine which corner of the X the subject will break out of.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-rules-3-03.jpeg" alt="" />
                <p class="caption"><strong>Tone</strong><br />Tonally, the X should look like a rip in the background, not an object on top of it. To achieve this, use a darker X than the background on a dark background, and a lighter X than the background on a light background.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-rules-3-04.jpeg" alt="" />
                <p class="caption"><strong>Crop</strong><br />The X tends to be more successful when it is cropped, conveying the idea of endlessness – endless content, infinite experiences. The X should be cropped just above the curve of the tail – no shorter and no longer.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-rules-3-05.jpeg" alt="" />
                <p class="caption"><strong>Float</strong><br />If the X works better with the art floating, follow the illustration below for spacing.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-rules-3-06.jpeg" alt="" />
                <p class="caption"><strong>Emerging Right</strong><br />In this execution the subject’s energy is moving right, so he steps out from behind the left corner of the X.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-rules-3-07.jpeg" alt="" />
                <p class="caption"><strong>Emerging Bottom</strong><br />In this execution the subject’s energy is centered and moving up, so he leaps out of the bottom corner of the X.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-rules-3-08.jpeg" alt="" />
                <p class="caption"><strong>Emerging Left</strong><br />In this execution the subject’s energy is moving left, so he steps out from behind the right corner of the X.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-rules-3-09.jpeg" alt="" />
                <p class="caption"><strong>2 Corners</strong><br />It is also possible to tuck the subject behind 2 corners of the X if more space is needed around the artwork or if tells a more interesting story.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-rules-3-00.jpeg" alt="" />
                <p class="caption"><strong>Background Element</strong><br />The final element to creating expressive X art is to add a background. Most properties will have a background – behind a movie star, album art, video game packaging etc.. Once the X and foreground subject have been crafted, the background element should be placed behind and integrated.</p>
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">Building the X</h2>
            <div class="gallery">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-building-4-07.jpg" alt="" />
                <p class="caption">Here's a simple list of steps to help you create consistent expressive X artwork.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-building-4-01.jpg" alt="" />
                <p class="caption"><strong>1. Select your subject</strong><br />In this example we’ll take a look at some artwork from Justice League featuring Gal Gadot.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-building-4-02.jpg" alt="" />
                <p class="caption"><strong>2. Isolate the subject</strong><br />Cut out the foreground subject.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-building-4-03.jpg" alt="" />
                <p class="caption"><strong>3. Choose placement</strong><br />In this case, the subject’s position is mainly centered, so she will look best emerging from the bottom corner.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-building-4-04.jpg" alt="" />
                <p class="caption"><strong>4. Evaluate color tone</strong><br />This poster art is a little more complex. It has a lot of existing artifacts in the background. If this is the case, a simpler background can be created from the tones in the image.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-building-4-05.jpg" alt="" />
                <p class="caption"><strong>5. Create a background</strong><br />This background was inspired by the sky and earth tones in the artwork. We now have a simple background to place our art on.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-building-4-06.jpg" alt="" />
                <p class="caption"><strong>6. Combine elements</strong><br />Note that the X is not overpowering. At this point, subtle design flourishes may be added, like the flare on her belt.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-building-4-07.jpg" alt="" />
                <p class="caption"><strong>7. Crop & add branding</strong><br />The final step is to ensure that the crop is right, and to add any type or branding around the art.</p>
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">The X in Use</h2>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-4-1.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-4-2.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-4-3.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-4-4.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-4-5.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-4-6.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-4-7.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-4-8.jpg" alt-"" />
              </div>
          </section>

          <section class="section">
            <h2 class="section-title">Creative Discovery</h2>
            <p>The Expressive X allows for creative exploration. This approach should be used sparingly or for special circumstances.</p>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-5-1.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-5-2.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-5-3.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/design-x-5-4.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-5-5.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-5-6.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/design-x-5-7.jpg" alt-"" />
              </div>
            </div>
          </section>

          <section class="section">
            <h2 class="section-title">X Misuses</h2>
            <p>The Expressive X allows for creative exploration. This approach should be used sparingly or for special circumstances.</p>
            <div class="flex-column flex-3col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-x-6-1.png" alt-"" />
                <p class="caption">Do not make the X high contrast against the backgound. Also, make sure there’s enough contrast between the X and the subject.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-x-6-2.png" alt-"" />
                <p class="caption">Do not make the X loud colors that make it shout.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-x-6-3.png" alt-"" />
                <p class="caption">Do not make the X dimensional –  through 3D, bevels or embossing.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-x-6-4.png" alt-"" />
                <p class="caption">Do not make the X appear as a foreground object.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-x-6-5.png" alt-"" />
                <p class="caption">Do not extend, manipulate or alter the official X brand symbol.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/design-x-6-6.png" alt-"" />
                <p class="caption">Make sure the subject’s movement propels them out of the X, not into it.</p>
              </div>
              <div class="img img-w-caption extend">
                <img src="<?php print $dir; ?>images/design-x-6-7.png" alt-"" />
                <p class="caption">Do not place words or logos in the X.</p>
              </div>
              <div class="img img-w-caption extend">
                <img src="<?php print $dir; ?>images/design-x-6-8.png" alt-"" />
                <p class="caption">Do not create an Expressive X within the full Xfinity word mark.</p>
              </div>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
