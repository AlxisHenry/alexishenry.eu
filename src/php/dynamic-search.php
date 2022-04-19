<?php

$get_data = $_GET['user_research'];

include('configs/database.login.php');

// todo: Améliorer la requête (avec l'alt de l'image et la date complète)
$GET_LIKE_Element = 'SELECT *
FROM `Articles`
INNER JOIN `Dates` ON `Articles`.identifier = `Dates`.identifier
INNER JOIN `Images` ON `Dates`.identifier = `Images`.identifier
INNER JOIN `Themes` ON `Images`.identifier = `Themes`.identifier
WHERE `title` LIKE "%' . $get_data . '%"
OR `Dates`.FullDate LIKE "%' . $get_data . '%"
OR `Articles`.introduction LIKE "%' . $get_data . '%"
OR `Articles`.author LIKE "%' . $get_data . '%"
ORDER BY `Articles`.identifier';

$DynamicResearchElements = Connection()->prepare($GET_LIKE_Element);
$DynamicResearchElements->execute();

$i = 0;

while ($result = $DynamicResearchElements->fetch()) {
	date_default_timezone_set('Europe/Paris');
	setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
	if (strpos($result['UploadDate'], ':')) {
        $formatDate = str_replace('-', "/", substr($result['UploadDate'], 0, strpos($result['UploadDate'], 'T')));
        $datetime = $result['UploadDate'];
	} else {
		$formatDate = $result['UploadDate'];
		$datetime = $result['UploadDate'];
		// $datetime = 'a';
	}
	echo '
	<div class="article-card article-nb-' . $result['identifier'] . ' card-nb-' . $i++ . '"> 
	<img loading="lazy" class="content-article-card image-article" src="' . $result['LinkImage'] . '" alt="' . $result['AltImage'] . '"/>
	<div class="content-article-card under-image">
	<h1 class="content-article-card title-article"> ' . $result['title'] . '... </h1>
	<h2 class="content-article-card date-publication"> Publié le <time datetime="' . $datetime . '">' . $formatDate . '</time></h2>
    <a class="content-artcile-card href-to-article-page" href="' . $result['UrlArticle'] . '">
	<div class="content-article-card button-href-article ' . $result['identifier'] . '"> Voir ' . "l'article" . ' </div>
	</a>
	</div>
	</div>
	';
}

$DynamicResearchElements->closeCursor();