

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="img/rocket.png" />
<title>Contato - FastDANFE</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" href="cssmenu/styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<meta name="description" content="Entre em contato com a FastDANFE">
<meta name="keywords" content="Danfe, XML, Receita, Fazenda, Fiscal">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
	margin: 0px 0px 0px 0px;
}
.fileuploader{
  position: relative;
  background: white;
  width: 100%;
  height: 335px;
  border: 1px solid #e9e9e9;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
.fileuploader #upload-label{
  background: #2196F3;
  color: #fff;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  padding: 16px;
  position: absolute;
  top: 38%;
  left: 0;
  right: 0;
  margin-right: auto;
  margin-left: auto;
  min-width: 20%;
  text-align: center;
  padding-top: 40px;
  transition: 0.8s all;
  -webkit-transition: 0.8s all;
  -moz-transition: 0.8s all;
  cursor: pointer;
}
.fileuploader.active{
  background: #2196F3;
}
.fileuploader.active #upload-label{
  background: #fff;
  color: #2196F3;
}
.fileuploader #upload-label span.title{
  font-size: 1.1em;
  font-weight: bold;
  display: block;
}
.fileuploader #upload-label i{
  text-align: center;
  display: block;
  background: white;
  color: #2196F3;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  border-radius: 100%;
  width: 80px;
  height: 80px;
  font-size: 60px;
  padding-top: 10px;
  position: absolute;
  top: -50px;
  left: 0;
  right: 0;
  margin-right: auto;
  margin-left: auto;
}

.fileuploader_b{
  position: relative;
  background: white;
  width: 100%;
  height: 335px;
  border: 1px solid #e9e9e9;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
.fileuploader_b #upload-label-b{
  background: #2196F3;
  color: #fff;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  padding: 16px;
  position: relative;
  top: 45%;
  left: 0;
  right: 0;
  margin-right: auto;
  margin-left: auto;
  min-width: 20%;
  text-align: center;
  padding-top: 40px;
  transition: 0.8s all;
  -webkit-transition: 0.8s all;
  -moz-transition: 0.8s all;
  cursor: pointer;
}
.fileuploader_b.active{
  background: #2196F3;
}
.fileuploader_b.active #upload-label-b{
  background: #fff;
  color: #2196F3;
}
.fileuploader_b #upload-label-b span.title{
  font-size: 1.1em;
  font-weight: bold;
  display: block;
}
.fileuploader_b #upload-label-b i{
  text-align: center;
  display: block;
  background: white;
  color: #2196F3;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  border-radius: 100%;
  width: 80px;
  height: 80px;
  font-size: 60px;
  padding-top: 10px;
  position: absolute;
  top: -50px;
  left: 0;
  right: 0;
  margin-right: auto;
  margin-left: auto;
}

/** Preview of collections of uploaded documents **/
.preview-container{
  position: fixed;
  right: 10px;
  bottom: 0px;
  width: 300px;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  visibility: hidden;
}
.preview-container #previews{
  max-height: 400px;
  overflow: auto; 
}
.preview-container #previews .zdrop-info{
  width: 88%;
  margin-right: 2%;
}
.preview-container #previews.collection{
  margin: 0;
}
.preview-container #previews.collection .actions a{
  width: 1.5em;
  height: 1.5em;
  line-height: 1;
}
.preview-container #previews.collection .actions a i{
  font-size: 1em;
  line-height: 1.6;
}
.preview-container #previews.collection .dz-error-message{
  font-size: 0.8em;
  margin-top: -12px;
  color: #F44336;
}
.preview-container .header{
  background: #2196F3;
  color: #fff;
  padding: 8px;
}
.preview-container .header i{
  float: right;
  cursor: pointer;
}
    </style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>
<body translate="no">
<div id='cssmenu'>
<a href="./"><img src="img/rocket.gif" style="width: 61px; margin-left: 48px;"><span style="
    color: white;
    font-weight: bold;
    font-size: 26px;
    position: absolute;
    padding-top: 17px;
">FastDANFE</span></a>
<ul style="float:right;margin:7px;">
   <li><a href='./'><span><i class="fa fa-home" aria-hidden="true"></i> Home</span></a></li>
   <li><a href="sobre"><span><i class="fa fa-info-circle" aria-hidden="true"></i> Sobre</span></a></li>
   <li class="active"><a href="contato"><span><i class="fa fa-envelope" aria-hidden="true"></i> Contato</span></a></li>
</ul>
</div>
<div class="row">
<div class="col s12">
	<div style="text-align:center;" id="contato">
	  <h2>Contato</h2>
	  <h4>Tem algo a dizer, sugerir ou reportar? Deixe sua mensagem</h4>
		<form method="POST" name="contato" class="form_contato" action="mail.php">
			Nome: <input type="text" class="nome" name="nome" />
			E-mail: <input type="email" class="email" name="email" />
			Mensagem: <textarea style="height:100px;" class="mensagem" name="mensagem" placeholder="Sua mensagem aqui" cols="50"></textarea>
			<br><center><button type="button" class="btn btn-success enviar">Enviar</button></center>
		</form>	  

	</div>
</div>

</div>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js'></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>



	<script>
		$('.enviar').click(function(){
			if($('.nome').val() == "" || $('.email').val() == "" || $('.mensagem').val() == ""){
				alert("Preencha todos os campos");
			}
			else{
				$('.form_contato').submit();
			}
		})
    </script>
</body>
</html>
