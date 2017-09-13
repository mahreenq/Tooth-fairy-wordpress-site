front-page.php

<?php

get_header();

get_banner();

echo '<h2>';
echo get_field("banner_message");
echo '</h2>';

echo '<h2>';
echo get_field("question");
echo '</h2>';

echo '<h3>';
echo get_field("answer_one");
echo '</h3>';

echo '<h4>';
echo get_field("reasoning_one");
echo '</h4>';

echo '<h3>';
echo get_field("answer_two");
echo '</h3>';

echo '<h4>';
echo get_field("reasoning_two");
echo '</h4>';

echo '<h3>';
echo get_field("answer_three");
echo '</h3>';

echo '<h4>';
echo get_field("reasoning_three");
echo '</h4>';

?>