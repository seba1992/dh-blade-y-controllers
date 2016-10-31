<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portada</title>

	<style type="text/css">
		body {
		  margin: 0;
		  padding: 0;
		  background: #ccc;
	      background-color:white;
		  font-family: "Source Sans Pro", sans-serif;
		}

		.nav ul {
		  list-style: none;
		  background-color: #444;
		  text-align: center;
		  padding: 0;
		  margin: 0;
		}
		.nav li {
		  font-size: 1.2em;
		  line-height: 40px;
		  height: 40px;
		  border-bottom: 1px solid #888;
		}

		.nav a {
		  text-decoration: none;
		  color: #fff;
		  display: block;
		  transition: .2s color;
		}

		.nav a:hover {
			color:#337ab7;
		}

		.nav a.active {
		  background-color: #fff;
		  color: #444;
		  cursor: default;
		}

		@media screen and (min-width: 600px) {
		  .nav li {
		    min-width: 120px;
		    border-bottom: none;
		    height: 50px;
		    line-height: 50px;
		    font-size: 1.2em;
		  }

		  /* Option 1 - Display Inline */
		  .nav li {
		    display: inline-block;
		    margin-right: -4px;
		  }
		}

		.contenido {
			padding:100px;
			text-align:center;
			height:100%;
		}
	</style>
</head>
<body>

	<div class="nav">
		<ul>
			<li><a href="/">Portada</a></li>
			<li><a href="/campus">Campus</a></li>
			<li><a href="/training">Training</a></li>
			<li><a href="/nosotros">Nosotros</a></li>
		</ul>
	</div>

	<div class="contenido">
		<h2>SOBRE NOSOTROS</h2>

		<p>
      Digital House, nace de la pasión por formar talento en tecnología y disciplinas digitales. Y creemos que estas nuevas habilidades se aprenden practicando, haciendo y experimentando.
  Nos proponemos desarrollar las nuevas generaciones de coders y profesionales del mundo tecnológico, para que sueñen, innoven y creen el nuevo futuro digital.
		</p>
	</div>
</body>
</html>
