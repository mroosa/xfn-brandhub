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
          <h1>Brand Symbol</h1>
          <section class="section" id="top" data-title="Overview">
            <p>Our brand symbol is the most differentiating and distinctive feature of our brand name and identity, it's what makes us, us.</p>
            <p>It’s a dynamic, ownable brand storytelling device that visually represents our brand purpose – fueling discovery for everyday enjoyment – through passions, partnerships, and differentiating product experience.</p>
            <div class="img">
              <img src="<?php print $dir; ?>images/brand-symbol/01.svg" alt-"" />
            </div>
            <p>Our brand symbol has two roles:</p>
            <ul>
              <li><strong>Functional:</strong> The X can be a shorthand for Xfinity in Xfinity-branded environments where the brand has already been established</li>
              <li><strong>Expressive:</strong> The X is an expressive device for storytelling around our passions and products.</li>
            </ul>
            <p class="caption">For any questions and for approval for use of the Expressive X, please reach out to the Xfinity Brand Team.</p>
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
                <h3>The X <u>should not</u> be used for:</h3>
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
<!--
          <section class="section">
            <h2 class="section-title">Rules of the X</h2>
            <div class="gallery">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/rules-00.jpeg" alt="" />
                <p class="caption"><strong>Completed Expressive X</strong><br />The final expressive X art will bring together all important elements - subject, background and X guidelines. Go through the carousel to see the rules of the X.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/rules-01.jpeg" alt="" />
                <p class="caption"><strong>Subject</strong><br />For the most part, these sponsorship/partnerships will promote featured artists, athletes, actors or characters. The first thing to do is to examine the provided artwork to determine where the energy of the subject is directed.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/rules-02.jpeg" alt="" />
                <p class="caption"><strong>Construction</strong><br />The X should always be low contrast in relation to the background – it shouldn’t be too loud as to overpower what we’re promoting. There are 3 corners from which the foreground art can emerge – left, right, and bottom. The energy of the subject on the previous page will determine which corner of the X the subject will break out of.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/rules-03.jpeg" alt="" />
                <p class="caption"><strong>Tone</strong><br />Tonally, the X should look like a rip in the background, not an object on top of it. To achieve this, use a darker X than the background on a dark background, and a lighter X than the background on a light background.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/rules-04.jpeg" alt="" />
                <p class="caption"><strong>Crop</strong><br />The X tends to be more successful when it is cropped, conveying the idea of endlessness – endless content, infinite experiences. The X should be cropped just above the curve of the tail – no shorter and no longer.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/rules-05.jpeg" alt="" />
                <p class="caption"><strong>Float</strong><br />If the X works better with the art floating, follow the illustration below for spacing.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/rules-06.jpeg" alt="" />
                <p class="caption"><strong>Emerging Right</strong><br />In this execution the subject’s energy is moving right, so he steps out from behind the left corner of the X.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/rules-07.jpeg" alt="" />
                <p class="caption"><strong>Emerging Bottom</strong><br />In this execution the subject’s energy is centered and moving up, so he leaps out of the bottom corner of the X.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/rules-08.jpeg" alt="" />
                <p class="caption"><strong>Emerging Left</strong><br />In this execution the subject’s energy is moving left, so he steps out from behind the right corner of the X.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/rules-09.jpeg" alt="" />
                <p class="caption"><strong>2 Corners</strong><br />It is also possible to tuck the subject behind 2 corners of the X if more space is needed around the artwork or if tells a more interesting story.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/rules-00.jpeg" alt="" />
                <p class="caption"><strong>Background Element</strong><br />The final element to creating expressive X art is to add a background. Most properties will have a background – behind a movie star, album art, video game packaging etc.. Once the X and foreground subject have been crafted, the background element should be placed behind and integrated.</p>
              </div>
            </div>
          </section>
-->
<!--
          <section class="section">
            <h2 class="section-title">Building the X</h2>
            <div class="gallery">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/building-07.jpg" alt="" />
                <p class="caption">Here's a simple list of steps to help you create consistent expressive X artwork.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/building-01.jpg" alt="" />
                <p class="caption"><strong>1. Select your subject</strong><br />In this example we’ll take a look at some artwork from Justice League featuring Gal Gadot.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/building-02.jpg" alt="" />
                <p class="caption"><strong>2. Isolate the subject</strong><br />Cut out the foreground subject.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/building-03.jpg" alt="" />
                <p class="caption"><strong>3. Choose placement</strong><br />In this case, the subject’s position is mainly centered, so she will look best emerging from the bottom corner.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/building-04.jpg" alt="" />
                <p class="caption"><strong>4. Evaluate color tone</strong><br />This poster art is a little more complex. It has a lot of existing artifacts in the background. If this is the case, a simpler background can be created from the tones in the image.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/building-05.jpg" alt="" />
                <p class="caption"><strong>5. Create a background</strong><br />This background was inspired by the sky and earth tones in the artwork. We now have a simple background to place our art on.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/building-06.jpg" alt="" />
                <p class="caption"><strong>6. Combine elements</strong><br />Note that the X is not overpowering. At this point, subtle design flourishes may be added, like the flare on her belt.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/building-07.jpg" alt="" />
                <p class="caption"><strong>7. Crop & add branding</strong><br />The final step is to ensure that the crop is right, and to add any type or branding around the art.</p>
              </div>
            </div>
          </section>
-->

          <section class="section">
            <h2>The Brand Symbol in Use</h2>

            <h3>Functional</h3>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/brand-symbol/02.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/brand-symbol/03.jpg" alt-"" />
              </div>
            </div>
            <div class="img">
              <img src="<?php print $dir; ?>images/brand-symbol/04.jpg" alt-"" />
            </div>
            <div class="img">
              <img src="<?php print $dir; ?>images/brand-symbol/05.jpg" alt-"" />
            </div>

            <h3>Expressive</h3>
            <div class="flex-column flex-2col">
              <div class="img">
                <img src="<?php print $dir; ?>images/brand-symbol/061.jpg" alt-"" />
              </div>
              <div class="img">
                <img src="<?php print $dir; ?>images/brand-symbol/062.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/brand-symbol/063.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/brand-symbol/064.jpg" alt-"" />
              </div>
              <div class="img extend">
                <img src="<?php print $dir; ?>images/brand-symbol/065.jpg" alt-"" />
              </div>
          </section>

<!--
          <section class="section">
            <h2 class="section-title">X Misuses</h2>
            <p>The Expressive X allows for creative exploration. This approach should be used sparingly or for special circumstances.</p>
            <div class="flex-column flex-3col">
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/misuse-01.png" alt-"" />
                <p class="caption">Do not make the X high contrast against the backgound. Also, make sure there’s enough contrast between the X and the subject.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/misuse-02.png" alt-"" />
                <p class="caption">Do not make the X loud colors that make it shout.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/misuse-03.png" alt-"" />
                <p class="caption">Do not make the X dimensional –  through 3D, bevels or embossing.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/misuse-04.png" alt-"" />
                <p class="caption">Do not make the X appear as a foreground object.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/misuse-05.png" alt-"" />
                <p class="caption">Do not extend, manipulate or alter the official X brand symbol.</p>
              </div>
              <div class="img img-w-caption">
                <img src="<?php print $dir; ?>images/brand-symbol/misuse-06.png" alt-"" />
                <p class="caption">Make sure the subject’s movement propels them out of the X, not into it.</p>
              </div>
              <div class="img img-w-caption extend">
                <img src="<?php print $dir; ?>images/brand-symbol/misuse-07.png" alt-"" />
                <p class="caption">Do not place words or logos in the X.</p>
              </div>
              <div class="img img-w-caption extend">
                <img src="<?php print $dir; ?>images/brand-symbol/misuse-08.png" alt-"" />
                <p class="caption">Do not create an Expressive X within the full Xfinity word mark.</p>
              </div>
          </section>
-->
        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
    <?php include_once($dir . "_templates/_structure/page-nav.php"); ?>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
