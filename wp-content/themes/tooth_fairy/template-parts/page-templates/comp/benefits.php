<?php $servicesTitle = get_post_meta( get_the_ID(), 'services-corp_2');
      print_r($servicesTitle[0]);
$serviceRes = get_post_meta( get_the_ID(), 'wiki_test_repeat_group_2');

foreach($serviceRes[0] as $services) { ?>
  <div class="padding-sm">
    <img src= "<?php echo $services['image-corp']; ?>">
    <p><span class="lg-blue-font"><?php echo $services['description-1'];?> </span>
    <?php echo $services['description-2']; ?>
    <p><span class="lg-blue-font"><?php echo $services['description-3']; ?></span>
    <?php echo $services['description-4']; ?></p>
<?php } ?>
