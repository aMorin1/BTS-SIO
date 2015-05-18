<?php
  session_start();
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Alan MORIN | Portfolio BTS SIO</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="front/css/ie/html5shiv.js"></script><![endif]-->
		<script src="front/js/jquery.min.js"></script>
        <script src="front/js/progressbar.js"></script>
        <script src="front/js/jquery-ui.js"></script>
		<script src="front/js/skel.min.js"></script>
		<script src="front/js/init.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="front/css/font-awesome.css"/>
		<link rel="stylesheet" href="front/css/bootstrap.css">
		<link rel="stylesheet" href="front/css/navpill.css"/>
		<noscript>
			<link rel="stylesheet" href="front/css/skel.css" />
			<link rel="stylesheet" href="front/css/style.css" />
			<link rel="stylesheet" href="front/css/jquery-ui.css"/>
			<link rel="stylesheet" href="front/css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
<body data-spy="scroll" data-target="#myScrollspy">
<div class="container">
    <div id="header">
        <span class="logo icon fa-graduation-cap"></span>
			<h1>Alan MORIN</h1>
			<p>Développeur en alternance</p>
	</div>
    <div class="row">
        <div class="col-xs-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked affix-top responsive" data-spy="affix" data-offset-top="125">
                <li><a href="/">Portail des apps</a></li>
                <li><a href="#section-1">Présentation</a></li>
                <li><a href="#section-2">Projets</a></li>
                <li><a href="#section-3">Parcours</a></li>
                <li><a href="#section-4">Compétences</a></li>
                <li><a href="#section-5">Veille technologique</a></li>
                <li><a href="#section-6">Contact</a></li>
            </ul>
        </div>
        <div class="col-xs-9">
            <h2 id="section-1">Présentation</h2>
            <h3>Je m'appelle Alan MORIN, j'ai 20 ans et je prépare actuellement un
                     <strong style="color: #141313">BTS Services Informatiques aux Organisations (SIO)</strong>
                     option <strong style="color: #141313">Solutions Logicielles et Applications Métiers (SLAM) </strong> 
                     en alternance.
                    <br />
                    Je suis au centre de formation : 
                    <a style="color: #141313" href="http://www.dijonformation.com/">Dijon Formation</a> situé à Quetigny.
                     Et au <a style="color: #141313" href="http://www.sncf.com/">Technicentre SNCF</a> de Dijon, en entreprise.
                    <br/><br/>
                     Ce portfolio présentera les compétences que j’ai pu acquérir au cours de ces deux années, ainsi que les projets que j'ai réalisés.
                    </h3>
            <hr>
            <h2 id="section-2">Projets</h2>
            <section class="feature left">
                        <a href="http://localhost/API_Rest/front/autoloc.php" class="image icon fa-html5"><img src="front/images/pic01.jpg" alt="" /></a>
						<div class="content">
							<h2>AutoLoc</h2>
							<p>Web App type RESTful de gestion des clients d'une société.</p>
                            <br/>
                            <button onclick="location.href = 'https://github.com/aMorin1/BTS-SIO'" type="button" class="button_gith">
                                <i class="fa fa-github fa-2x"></i> Source
                            </button>
						</div>
					</section>
					<section class="feature right">
						<a class="image icon fa-android"><img src="front/images/pic03.jpg" alt="" /></a>
						<div class="content">
							<h2>AutoClient</h2>
							<p>Application Android fonctionnant avec le server RESTful AutoLoc, il présente les emprunteurs de la société.</p>
						    <br/>
						    <button onclick="location.href = 'https://github.com/aMorin1/BTS-SIO'" type="button" class="button_gith">
                                <i class="fa fa-github fa-2x"></i> Source
                            </button>
						</div>
					</section>
					<section class="feature left">
						<a class="image icon fa-camera-retro"><img src="front/images/pic02.jpg" alt="" /></a>
						<div class="content">
							<h2>CameraDetect</h2>
							<p>Logiciel type badgeuse permettant d'enregistrer son portrait avec son nom et son prénom dans une base de donnée.</p>                        
							<br/>
							<button onclick="location.href = 'https://github.com/aMorin1/CameraDetect'" type="button" class="button_gith">
                                <i class="fa fa-github fa-2x"></i> Source
                            </button>
						</div>
					</section>
					<section class="feature right">
						<a href="http://localhost/CameraBadge" class="image icon fa-smile-o"><img src="front/images/pic01.jpg" alt="" /></a>
						<div class="content">
							<h2>CameraBadge</h2>
							<p>Web App permettant d'afficher les personnes enregistrées grâce à CameraDetect.</p>
						    <br/>
						    <button onclick="location.href = 'https://github.com/aMorin1/BTS-SIO'" type="button" class="button_gith">
                                <i class="fa fa-github fa-2x"></i> Source
                            </button>
						</div>
					</section>
            <hr>
            <h2 id="section-3">Mon parcours</h2>
            <div class="col-xs-6">
            <h3>Formations</h3>
            <ul>
                <li>
                    <i class="fa fa-plus-square"></i> Depuis 2014 - BTS SIO Solutions Logicielles et Applications Métiers en alternance</li>
                <br/>
                <li>
                    <i class="fa fa-plus-square"></i> 2012 - BAC STG Gestion des Systèmes Informatique</li>
            </ul>
            </div>
            <div class="col-xs-6">
                <h3>Expériences</h3>
                <ul>
                    <li>
                        <i class="fa fa-plus-square"></i> En alternance depuis septembre 2013 - Technicien de maintenance et assistance informatique</li>
                    <br/>
                    <li>
                        <i class="fa fa-plus-square"></i> Expériences diverses</li>
                </ul>
            </div>
            <div class="row">
                <ul class="actions">
                    <li>
                        <a href="front/CV%20ALAN%202015.pdf" class="button">MON CV</a>
                    </li>
                </ul>
            </div>
            
            <hr></hr>
            <h2 id="section-4">Mes compétences</h2>
                <div class="col-xs-2">
                    <img src="front/images/HTML5.png" class="img-responsive" alt="HTML5"></img>
                </div>
                <div class="col-xs-2">
                    <img src="front/images/CSS3.svg" class="img-responsive" alt="CSS3"></img>
                </div>
                <div class="col-xs-2">
                    <img src="front/images/js.png" class="img-responsive" alt="JavaScript"></img>
                </div>
                <div class="col-xs-2">
                    <img src="front/images/csharp.png" class="img-responsive" alt="C#"></img>
                </div>
                <div class="col-xs-2">
                    <img src="front/images/android.png" class="img-responsive" alt="Android"></img>
                </div>   
                <div class="row">
                    <div class="col-xs-6">
                        <img src="front/images/AngularJS.png" class="img-responsive" alt="AngularJS"></img>
                    </div>
                    <div class="col-xs-6">
                        <p>Afin d'obtenir plus de détail sur les compétences que j'ai pu acquérir au cours  de ces 2 années, vous pouvez visualiser le tableau de synthèse.</p>
                        <a href="front/Tableau_comp_AM.pdf" class="button">Tableau de compétences</a>
                    </div>
                </div>
                          
            <hr></hr>
            <h2 id="section-5">Veille technologique - Objets connectés</h2>
                <div class="col-xs-4">
                    <img src="front/images/startup.png" class="img-responsive" alt="Startup WE"></img>
                </div>
                <div class="col-xs-4">
                    <img src="front/images/objet_connect.jpg" class="img-responsive" alt="Objet Connecté"></img>
                </div>
                <div class="col-xs-4">
                    <img src="front/images/objet_connect2.jpg" class="img-responsive" alt="Objet connecté"></img>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <p>Un <b>startup weekend</b>, c’est 54h durant lesquels les participants vont créer une startup, dans l’idéal mais le plus souvent travailler
                           en groupe sur un projet de notre choix que l’on a choisit au pars avant auprès d’un chef de projet, et réfléchir aux aspects juridique,
                        technologique, financier etc…</p>
                        <p>Le monde des <b>objets connectés</b>, appelé aussi Internet Des Objets (IDO), est l'ajout de la technologie Internet sur des
                           objets faisant partie de notre quotidien. Chaque objet possède alors une identité numérique : on lui 
                           attribue une adresse IP qui lui permet de se connecter à Internet, le plus souvent par des technologies sans fil.</p>
                        <p>L’utilité finale étant l’échange de données entre l’objet, le périphérique qui reçoit ces données (smartphones, tablettes, pc…) et 
                           l’être humain. La frontière entre monde virtuel et monde physique devient dès lors presque imperceptible.Les objets connectés couvrent
                           une multitude de domaines comme la maison (domotique), le sport, la science ou encore la santé.
                           Cette nouvelle utilisation d’Internet, qui n’en est qu’à ses balbutiements, représente le Web 3.0, faisant suite au Web 2.0 des réseaux 
                           sociaux.</p>
                           
                           <h3>Outils utilisés</h3>
                           <p>Pour ma veille technologique, j'ai décidé d'utiliser <b>PearlTrees</b> qui est un outil simple d'utilisation pour garder en mémoire des informations intéressantes en rapport au sujet.</p>
                           <p>Je me suis abonné au fil d'actualité des objets connectés, et grâce aux <b>Googles Alertes</b>, je reçois chaque jour un condensé d'actualité concernant ce thème. Je parcours donc régulièrement quelques articles qui me semblent intéressants et je les ajoute à ma veille via PearlTrees.</p>
                           <p>Enfin, <b>Twitter</b> et <b>Facebook</b> m'ont aussi permis de m'informer sur l'actualité des objets connectés.</p>
                    </div>
                </div>
            <hr>
            <h2 id="section-6">Contact</h2>
  <?php if(array_key_exists('errors',$_SESSION)): ?>
  <div class="alert alert-danger">
  <?= implode('<br>', $_SESSION['errors']); ?>
  </div>
  <?php endif; ?>
  <?php if(array_key_exists('success',$_SESSION)): ?>
  <div class="alert alert-success">
  Votre email à bien été transmis !
  </div>
  <?php endif; ?>
                <form method="post" action="backend/email.php">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label for="inputname">Votre nom</label>
                                <input required type="text" name="name" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                            <label for="inputemail">Votre email</label>
  <input required type="email" name="email" alt="nom@mail.fr" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                            <label for="inputmessage">Votre message</label>
  <textarea required id="inputmessage" name="message" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
                            </div>
                        </div>
                    </div>
                        <div class="col-xs-6">
                            <ul class="actions">
                                <li>
                                    <input type="submit" value="Envoyer" />
                                </li>
                            </ul>
                        </div>
                </form>
                <div class="col-xs-6">
                <ul class="icons">
                    <li>
                        <a href="https://twitter.com/alatusm" class="icon fa-twitter"><span class="label">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/aMORIN1" class="icon fa-github"><span class="label">Github</span></a>
                    </li>
                </ul>
                </div>
        </div>
    </div>
</div>
	</body>
</html>
<?php
unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
?>