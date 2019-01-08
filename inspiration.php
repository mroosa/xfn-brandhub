<?php
  $scriptList = ['masonry.pkgd.min.js','imagesloaded.pkgd.min.js','featherlight.js','inspiration.js'];
  $styleList = ['inspiration.css','featherlight.css'];
  $activeTop = 2; // inspiration
  $dir = "";
?>
<?php include_once($dir . "_templates/_structure/html-head.php"); ?>
<?php
  $ejson = file_get_contents($dir . 'data/inspiration.json', true);
  $eobj = json_decode($ejson);
  $taglist = $eobj->tagslist;

  $items = $eobj->items;
  $itmAry = [];
  foreach ($items as $item) {
    array_push($itmAry, $item);
  }
  shuffle($itmAry);

?>
<body class="one-col inspiration">
  <div class="contain">
    <?php include_once($dir . "_templates/_structure/header.php"); ?>
    <main>
      <div class="inner">
        <div class="content">
          <h1>Inspiration Gallery</h1>
          <section class="section form">
          <?php
            // Output tags
            $output = "";
            foreach($taglist as $tag) {
              $output .= "<div class=\"selection\">\n";
              $output .= "\t<label for=\"" . $tag -> id . "\">" . $tag -> title . "</label>\n";
              $output .= "\t<select id=\"" . $tag -> id . "\" name=\"" . $tag -> id . "\">\n";
              $output .= "\t\t<option value=\"all\">" . $tag -> all ."</option>\n";
              foreach($tag -> options as $option) {
                $output .= "\t\t<option value=\"" . $option -> value ."\">" . $option -> title ."</option>\n";
              }
              $output .= "\t</select>\n";
              $output .= "</div><!-- /.selection -->\n";
            }
            echo $output;
          ?>
          </section>
          <section class="section inspiration-gallery">
            <?php
              // grid items
              $output = "";
              $output .= "<ul class=\"grid\">\n";
              foreach($itmAry as $item) {
                $output .= "\t<li data-tags=\"" . $item -> tags . "\">\n";
                // If data values are present
                $dataSet = '';
                if (isset($item -> data)) {
                  foreach($item -> data as $data) {
                    foreach ($data as $key => $dataOption) {
                      $dataSet .= ' data-' . $key . '="' . $dataOption . '"';
                    }
                  }
                }
                $linkPreUrl = ($item -> type == 'image') ? "images/inspirations/" : "";
                $dataType = " data-featherlight=\"" . $item -> type . "\"";
                $output .= "\t\t<a href=\"" . $linkPreUrl . $item -> link . "\"" . $dataType . $dataSet . ">\n";
                $output .= "\t\t\t<img src=\"images/inspirations/thumbnail/" . $item -> thumb . "\" alt=\"" . $item -> title . "\" />\n";
                $output .= "\t\t</a>\n";
                $output .= "\t</li>\n";
              }
              $output .= "</ul>\n";
              echo $output;
            ?>
          </section>

        </div><!-- /.content -->
      </div><!-- /.inner -->
    </main>
<?php include_once($dir . "_templates/_structure/html-foot.php"); ?>
