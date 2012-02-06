<?php
require "signed-request.php";
?>
<!DOCTYPE html>
<html>
<head>	
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	
	<title>Wikidocs</title>

	<script src="aloha-config.js"></script>
    <script src="http://aloha-wikidocs.com/aloha-wikidocs.js"
	        data-aloha-plugins="common/format,
	                            common/table,
	                            common/list,
	                            common/link,
	                            common/highlighteditables,
	                            common/contenthandler,
	                            common/paste,
	                            common/characterpicker,
	                            common/commands,
                                wikidocs/wikidocs
                               "></script>

	<link rel="stylesheet" href="wikidocs.css" type="text/css" />
    <script> WIKIDOCS_SIGNED_REQUEST = "<?php echo signContentIds(array('title', 'teaser', 'content')); ?>"; </script>
</head>
<body>
	<div id="main">
		<div id="tree-div"></div>
		<h1 id="title" data-wikidocs-id="title">Aloha, World!</h1>
		<div id="bodyContent">
			<div id="teaser" class="shorttext" data-wikidocs-id="teaser">
				<p><b>Aloha</b> in the Hawaiian language means affection, love, peace, compassion and mercy. Since the middle of the 19th century, it also has come to be used as an English greeting to say <i>goodbye</i> and <i>hello</i>. Currently, it is mostly used in the sense of hello; however, it is used as the above.
				</p>
			</div>
			<div id="content" class="article" data-wikidocs-id="content">
				<h2>Etymology</h2>
				<p>The word <a href="http://en.wikipedia.org/wiki/Aloha-invalid" target="_blank" class="aloha">aloha</a> derives from the Proto-Polynesian root <i>*qalofa</i>. It has cognates in other Polynesian languages, such as Samoan alofaand Māori aroha, also meaning "love."
				</p>
				<p>A folk etymology claims that it derives from a compound of the <a href="http://en.wikipedia.org/wiki/Hawaii" target="_blank" class="aloha">Hawaiian</a> words alo meaning "presence", "front", "face", or "share"; and ha, meaning "breath of life" or "essence of life." Although alo does indeed mean "presence" etc., the word for breath is spelled with a macronor kahakō over the a (hā) whereas the word aloha does not have a long a.
				</p>

				<h2>Usage</h2>
				<p>Before contact with the West, the words used for greeting were welina and anoai. Today, "aloha kakahiaka" is the phrase for "good morning." "Aloha ʻauinalā" means "good afternoon" and "aloha ahiahi" means "good evening." "Aloha kākou" is a common form of "welcome to all."
				</p>
				<p>In modern Hawaiʻi, numerous businesses have aloha in their names, with more than 3 pages of listings in the Oʻahu phone book alone.
				</p>

				<h2>Trends</h2>
				<p>Recent trends are popularizing the term elsewhere in the United States. Popular entertainer, Broadway star and Hollywood actress Bette Midler, born in Honolulu, uses the greeting frequently in national appearances. The word was also used frequently in the hit television drama Hawaii Five-O. In the influential 1982 film comedy Fast Times at Ridgemont High, the eccentric teacher Mr. Hand makes use of the greeting. The Aloha Spirit is a major concept in Lilo and Stitch, a very popular Disney series of movies and TV shows, set in Hawaiʻi. The drama series Lost, shot in Hawaiʻi, has a thank you note at the end of the credits saying "We thank the people of Hawaiʻi and their Aloha Spirit". Aloha is a term also used in the Nickelodeon program Rocket Power.
				</p>

				<ul>
					<li>Arguably the most famous historical Hawaiian song, "Aloha ʻOe" was written by the last queen of Hawaii, Liliʻuokalani.</li>
					<li>The term inspired the name of the ALOHA Protocol introduced in the 1970s by the University of Hawaii.</li>
					<li>In Hawaii someone can be said to have or show aloha in the way they treat others; whether family, friend, neighbor or stranger.</li>
				</ul>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	Aloha.ready(function(){
	    Aloha.require([ "aloha/jquery" ],
	        function($) {
	            $( "#title" ).aloha();
	            $( "#teaser" ).aloha();
	            $( "#content" ).aloha();
	        }
	    );
	});
	</script>
</body>
</html>
