<?php

$urlMap = [
    'ol' => 'https://ubiobiocl-my.sharepoint.com/:f:/g/personal/rlinfati_ubiobio_cl/EokHGjB3qt5HqTp8ka82LSsBCjhFI2WYV-T6U9jLU8cbEw',
    'li' => 'https://ubiobiocl-my.sharepoint.com/:f:/g/personal/rlinfati_ubiobio_cl/EqUuPaSvtqtHgYF1it4Vc3AB-E5EKoB7595tVKmpk23_pA',
    'ep' => 'https://ubiobiocl-my.sharepoint.com/:f:/g/personal/rlinfati_ubiobio_cl/EkeBY0qyvQxPpQCuPFUa9JEBJcxk7jrwZOus0F9uGvskag',
    'ap' => 'https://ubiobiocl-my.sharepoint.com/:f:/g/personal/rlinfati_ubiobio_cl/EmuYxVEx0SFJolbWmn48q_sBjx9CutW_6bNX--5KDhwzCA',
    'mh' => 'https://ubiobiocl-my.sharepoint.com/:f:/g/personal/rlinfati_ubiobio_cl/Eur1KFZKXIBBtmkIqmdWAoUBDNNKcpcRxUeSrL4_K0cdrQ',
    'sg' => 'https://ubiobiocl-my.sharepoint.com/:f:/g/personal/rlinfati_ubiobio_cl/EhZghe9hfOdFqAXKvMmif9EBsjMLCWDaeC44NU7EkczwKA',
    'oa' => 'https://ubiobiocl-my.sharepoint.com/:f:/g/personal/rlinfati_ubiobio_cl/IgD-i1XgJ3UUTJ8znfp40ktcAU3U7z43WjBKGyROov7zWJ0',

    'z101'  => 'https://zoom.us/j/7180331197?pwd=MFdWclI1anY0U0RnKzY1T2hzRWxXQT09',
    'z102'  => 'https://zoom.us/j/6838170552?pwd=czVmV0lvQUUxNGFESzlHZmxRWFg0UT09',
    'z103'  => 'https://zoom.us/j/7183520854?pwd=ZHVKMURmVUwvZ3RvTzlKUlkvSHNIUT09',
    'cs'    => 'https://classroomscreen.com/app',
];

$urlKey = isset($_GET['url']) ? $_GET['url'] : '';
$redirectUrl = "http://www.linfati.cl/";

if (array_key_exists($urlKey, $urlMap)) {
    $redirectUrl = $urlMap[$urlKey];
}

header("Location: $redirectUrl", true, 302);
exit();

?>
