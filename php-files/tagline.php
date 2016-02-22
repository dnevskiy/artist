<!-- tagline og:, profile:, fb:, place:, business:, itemprop, twitter:, ... -->
<meta name="description" content="">
<meta name="author" content="">
<!-- Google Plus verification: http://www.google.com/webmasters/tools/richsnippets -->
<meta itemprop="name" content="Название сайта">
<meta itemprop="description" content="Описание сайта">
<meta itemprop="image" content="https://website.com/image250X250.png">
<!-- Twitter verification: https://dev.twitter.com/docs/cards/validation/validator -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="Название сайта">
<meta name="twitter:title" content="Название страницы">
<meta name="twitter:description" content="Описание">
<meta name="twitter:creator" content="автор">
<meta name="twitter:image:src" content="https://website.com/image250X250.png">
<meta name="twitter:domain" content="website.com">
<!-- Facebook verification: https://developers.facebook.com/tools/debug -->
<meta property="og:type" content="profile">
<meta property="profile:first_name" content="Имя">
<meta property="profile:last_name" content="Фамилия">
<meta property="profile:username" content="Ник">
<meta property="og:title" content="Название страницы">
<meta property="og:description" content="Описание">
<meta property="og:image" content="https://website.com/image250X250.png">
<meta property="og:url" content="http://www.site.com">
<meta property="og:site_name" content="Название сайта">
<meta property="og:see_also" content="http://www.website.com">
<meta property="fb:admins" content="Facebook_ID">
<!-- Company  -->
<?php if($company == true){
	echo '<meta property="place:location:latitude" content="13.062616"> 
		<meta property="place:location:longitude" content="80.229508"> 
		<meta property="business:contact_data:street_address" content=""> 
		<meta property="business:contact_data:locality" content="City"> 
		<meta property="business:contact_data:postal_code" content=""> 
		<meta property="business:contact_data:country_name" content=""> 
		<meta property="business:contact_data:email" content="cotact@mail.com"> 
		<meta property="business:contact_data:phone_number" content="+91 1234567890"> 
		<meta property="business:contact_data:website" content="http://www.website.com">';
	}