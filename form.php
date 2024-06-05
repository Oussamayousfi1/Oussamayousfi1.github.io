<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="/style.css" />
<script type = "text/javascript" src="/script.js"></script>

</head>

<body >


<div class="top">
<img src= '/fpbm.jpg' class="small-image image-margin"/>
<span class="large-text">D3SI</span><br />
<span class="small-text">Facult&eacute; Polydisciplinaire B&eacute;ni Mellal</span>
</div>


<h4>&nbsp;<span id="LaDate"></span> </h4>
<br />



<h1>Ajouter un étudiant</h1>
<hr />

<!-- l'attribut name permet d'accèder facilement au formulaire -->

<form id = "myForm" name = "myForm" action = "script.php" method = "post">

<pre>
<!-- chaque  élément de formulaire à un attribut name -->
Entrez le code:              
<input type="text" name="Code" value=""/> <span class="Err" id="ErrCode"> </span>


Entrez le nom:
<input  type="text"  name="Nom" value="" /> <span class="Err" id="ErrNom"> </span>

Entrez le prénom:
<input type="text" name="Prenom" value="" /> <span class="Err" id="ErrPrenom"> </span>

Entrez la note:
<input type="text" name ="Note" value="" /> <span class="Err" id="ErrNote"> </span>
<!-- Un seule nom pour la liste, chaque élément de la liste a une "Value" -->
Filière:
<select name = "Filiere">
		<option  value =  "D3SI" "selected">Data Science et Sécurité des Systèmes d’Information</option>
		<option  value =  "SMI" >Sciences Mathématiques et Informatique</option>		
		<option  value =  "SMA"           >Sciences Mathématiques et Application</option>
		<option  value =  "SMP"           >Sciences de la Matière Physique</option>
		</select> <span class="Err"> </span>

<input  type = 'submit'  value =  'Envoyer' /> <input  type = 'reset'  value =  'Annuler' />
</pre>
</form>

﻿
<br />
<hr />
<a href ="index.html">Acceuil</a> |
<a href ="liste.html">Liste de étudiants</a> |
<a href ="form.html">Ajouter un étudiant</a>
<br /><hr /><br />
<div class="bas">&copy; copyright: D3SI 2024<br />Facult&eacute; Polydisciplinaire B&eacute;ni Mellal </br>d3si@usms.ma</div>
</body>
</html>
