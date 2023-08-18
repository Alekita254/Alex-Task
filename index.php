<!DOCTYPE html>
<html>
<head>
    <title>JSON Visualization</title>
</head>
<body>

<?php
$jsonUrl = 'https://www.thebrand.ai/i/prompt/seo-strategy?mode=categoryView';
$jsonData = file_get_contents($jsonUrl);
$data = json_decode($jsonData, true); // Convert JSON to PHP array

echo '<h1>' . $data['title'] . '</h1>';
echo '<h2>' . $data['category']['name'] . '</h2>';

foreach ($data['posts'] as $post) {
    echo '<div>';
    echo '<h3>' . $post['title'] . '</h3>';
    echo '<p>' . $post['created_at'] . '</p>';
    echo '<img src="img/img_64afce13320925-40899747-89813831.jpg' . $post['image_default'] . '" alt="Image">';
    echo '<p>' . $post['keywords'] . '</p>';
    echo '</div>';
}
?>

</body>
</html>


echo '<img  . $post['image_default'] . '" alt="Image">';
