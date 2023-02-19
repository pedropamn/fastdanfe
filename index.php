<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="img/rocket.png" />
<title>FastDANFE - Conversão de XML para DANFE</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" href="cssmenu/styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<meta name="description" content="Converta seus XML's em DANFE gratuitamente">
<meta name="keywords" content="Danfe, XML, Receita, Fazenda, Fiscal">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="pMrLwU-Ou1FIjfGqUvAJm7P4foGLViGkx4mHbwwDRjk" />
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

/* BOTAO DE UPLOAD */

.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn_custom {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
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
   <li class="active"><a href='./'><span><i class="fa fa-home" aria-hidden="true"></i> Home</span></a></li>
   <li><a href="sobre"><span><i class="fa fa-info-circle" aria-hidden="true"></i> Sobre</span></a></li>
   <li><a href="contato"><span><i class="fa fa-envelope" aria-hidden="true"></i> Contato</span></a></li>
</ul>
</div>
<div class="row">
<div class="col s12">

<div id="zdrop" class="fileuploader">
	<div id="upload-label" class="box_upload" style="width: 200px;">
		<i class="material-icons">cloud_upload</i>
		<span class="title">Clique ou arraste até 100 XML's</span>
		<span>E converta todos em PDF :) <span />
	</div>
	<center class="aviso_fuploader_princ" style="font-size: 20px; color: rgb(251, 111, 11);padding-top: 251px;"></center>
</div>

<div class="fileuploader_b" style="display:none;">	
	<div class="box_download" style="width:50%; display:none; float:left; padding-left: 410px;padding-top: 102px;">
		<a class="box_download_link" href="">
			<div id="upload-label-b" style="width: 200px;background: #0cad0c;">
				<i class="material-icons">arrow_downward</i>
				<span class="title">Download</span>
				<span>Baixe em PDF :) <span />
			</div>
		</a>
	</div>
	
<div class="box_reload" style="width:50%; display:none;float:right;padding-right: 500px;padding-top: 102px;">
	<div id="upload-label-b" class="btn_nova" style="width: 200px; background: orange;">
				<i class="material-icons">autorenew</i>
				<span class="title">Nova Consulta</span>
				<span>Converta mais XML's <span />
	</div>
</div>
<center class="aviso" style="font-size: 20px; color: rgb(251, 111, 11);padding-top: 251px;"></center>
</div>

<!-- BLOCOS OCULTOS -->
<div style="display: none; text-align:center;" id="termos">
  <h2>Sobre</h2>
  Utilize o FastDANFE para converter seus XML em PDF rapidamente!<br><br>
  <i>Nossas Garantias e Isenções de Responsabilidade<br>
I. O serviço é utilizado sem compromisso, não há qualquer garantia para o mesmo nem para documentos por ele gerados.<br>
II.O documento gerado é de inteira responsabilidade do usuário<br>
III. Nenhum dado é coletado. A finalidade é simplesmente prestar um serviço</i><br>
<br><br>
<?php echo date('Y');?>, FastDANFE
	<!-- Random comment -->
</div>

<div style="display: none; text-align:center;" id="contato">
  <h2>Contato</h2>
  Deixe sua mensagem
	<form method="POST" name="contato" action="mail.php">
		Nome: <input type="text" name="nome" />
		E-mail: <input type="email" name="email" />
		 <textarea style="height:100px;" name="mensagem" placeholder="Sugira aqui" cols="50"></textarea>
		<br><center><button>Enviar</button></center>
	</form>	  

      		  </div>
</div>








<div class="preview-container">
<div class="header">
<span>Arquivos</span>
<i id="controller" class="material-icons">keyboard_arrow_down</i>
</div>
<div class="collection card" id="previews">
<div class="collection-item clearhack valign-wrapper item-template" id="zdrop-template">
<div class="left pv zdrop-info" data-dz-thumbnail>
<div>
<span data-dz-name></span> <span data-dz-size></span>
</div>
<div class="progress">
<div class="determinate" style="width:0" data-dz-uploadprogress></div>
</div>
<div class="dz-error-message"><span data-dz-errormessage></span></div>
</div>
<div class="secondary-content actions">
<a href="#!" data-dz-remove class="btn-floating ph red white-text waves-effect waves-light"><div class="icone"><i style="padding-left: 3px;" class="material-icons white-text">clear</i></div></i></a>
</div>
</div>
</div>
</div>
</div>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js'></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


<script id="rendered-js">
		var rand = makeid(50);
		 function makeid(length) {
			   var result           = '';
			   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
			   var charactersLength = characters.length;
			   for ( var i = 0; i < length; i++ ) {
				  result += characters.charAt(Math.floor(Math.random() * charactersLength));
			   }
			   return result;
			}
			
      $(document).ready(function () {		  
		//Custom functions
		 
			function UrlExists(rand){				
				 $.ajax({
					url: 'check_ok.php?id='+rand,
					type: 'GET', 
					success: function(result){
						if(result == 'ok'){
							$('.upload_logo').hide();
							$('.fileuploader').remove();
							$('.fileuploader_b').show();
							$('.box_download').show();
							$('.box_download_link').attr('href','zip/'+rand+'/danfes_'+rand+'.zip');
							$('.box_reload').show();
							$('.btn_nova').click(function(){
								location.reload();
							});
							
							clearInterval(interval);
				
						}
						else{
							
						}
					},
					error: function(){
						
					}
				});		
				
			}
			
			
			
			
			//Checa se o zip já está na pasta
			var interval = setInterval(function(){
				UrlExists(rand)
			}, 1000);
			
			
			 //Custom functions
  initFileUploader("#zdrop");

  function initFileUploader(target) {	
    var previewNode = document.querySelector("#zdrop-template");
    previewNode.id = "";
    var previewTemplate = previewNode.parentNode.innerHTML;
    previewNode.parentNode.removeChild(previewNode);

	  
			 
    var zdrop = new Dropzone(target, {
      url: 'upload.php?id='+rand,
	  paramName: "fileToUpload", 
	  acceptedFiles: ".xml",
      maxFilesize: 5,
	  maxFiles: 100,
      previewTemplate: previewTemplate,
      autoQueue: true,
      previewsContainer: "#previews",
      clickable: "#upload-label" });
console.log(zdrop);

    zdrop.on("addedfile", function (file) {
      $('.preview-container').css('visibility', 'visible');
	 console.log(file);
	setTimeout(function(){
		if(file.xhr.response == 'ARQ_NAO_ACEITO'){
			$('.aviso_fuploader_princ').html("Alguns XMLs sao invalidos...");
			$('.aviso').html("Feito, mas alguns XMLs sao invalidos e nao estarao na relacao...");
		}
		
	},1000);
	
    });

    zdrop.on("totaluploadprogress", function (progress) {
      var progr = document.querySelector(".progress .determinate");
      if (progr === undefined || progr === null)
      return;

      progr.style.width = progress + "%";
	  if(progress == 100){
		  $('.icone').html('<i style="padding-left: 2px;background-color: #12d412;width: 22px;" class="material-icons white-text">check</i>');
		  $('.aviso_fuploader_princ').show();
		  $('.aviso_fuploader_princ').html('Aguarde...');
		  $('.icone').html('<i style="padding-left: 2px;background-color: #12d412;width: 22px;" class="material-icons white-text">check</i>');		  
	  }
    });

    zdrop.on('dragenter', function () {
      $('.fileuploader').addClass("active");
    });

    zdrop.on('dragleave', function () {
      $('.fileuploader').removeClass("active");
    });

    zdrop.on('drop', function () {
      $('.fileuploader').removeClass("active");
    });
	
	
	zdrop.on('complete', function (a) {
		if(a.status === 'error'){
			$('.aviso').show();
			$('.aviso').html('Talvez alguns arquivos não tenham sido convertidos. Cheque a caixa "arquivos" no canto inferior direito para detalhes');
		}
		//Quando todos os uploads estiverem concluídos		
		if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
			var senha_zip = $('#senha').val();
			
			 $.ajax({
					url: 'gera_pdf_zip.php?id='+rand+'&senha='+senha_zip,
					type: 'GET', 
					 statusCode: {
						 500: function (response) {
							 alert('Há algo errado com um ou todos os seus XMLs. Talvez estejam em formato inválido. Cancelando a operação...');
							location.reload();
						  }
					}, 
					success: function(data){
						//console.log(data);						
						if(data == 'ERR_CRIAR_PASTA_PDF' || data == 'ERR_CRIAR_PASTA_ZIP'){
							$('.fileuploader').hide();
							$('.fileuploader_b').show();
							$('.aviso').show();
							$('.aviso').html('Houve um erro interno. Atualize a página e tente novamente');
						}
						else if(data.search('ERR_HA_PDF_NAO_VALIDO')!= -1){		
							$('.aviso').show();
							$('.aviso').html('Alguns dos seus PDFs não estarão no arquivo unificado por estarem corrompidos');
						}
					}
			 });
		}
		
		
		
		
      
    });

    var toggle = true;
    /* Preview controller of hide / show */
    $('#controller').click(function () {
      if (toggle) {
        $('#previews').css('visibility', 'hidden');
        $('#controller').html("keyboard_arrow_up");
        $('#previews').css('height', '0px');
        toggle = false;
      } else {
        $('#previews').css('visibility', 'visible');
        $('#controller').html("keyboard_arrow_down");
        $('#previews').css('height', 'initial');
        toggle = true;
      }
    });
  }

});
      //# sourceURL=pen.js

//Função que trata do formulário de Upload do logo
		function encodeImageFileAsURL() {
			var filesSelected = document.getElementById("inputFileToLoad").files;
			
			//Continua apenas se o MIME for válido
			
				if (filesSelected.length > 0) {
					console.log(filesSelected);
					if(filesSelected[0].type == 'image/png' || filesSelected[0].type == 'image/jpeg'){						
					  var fileToLoad = filesSelected[0];
					  var fileReader = new FileReader();
					  fileReader.onload = function(fileLoadedEvent) {
						var srcData = fileLoadedEvent.target.result; // <--- data: base64
						$.ajax({
							url: 'logos.php',
							data: {id: rand, base64: srcData},
							type: 'POST', 
							success: function(result){
								//console.log(result);
							},
							error: function(){
							}
						});	
					  }
					  fileReader.readAsDataURL(fileToLoad);
				}
				else{
					alert("Selecione um arquivo .jpg ou .png");
					//document.getElementById('inputFileToLoad').value = "";
					location.reload();
				}
			}
			
			
		  }	 

</script>
	<!--<div style="width:82%; text-align:center;" class="upload_logo">
		<div style="float:left;text-align:right;width:50%;padding-top: 15px;font-size: 20px;">
			<span>Você pode, opcionalmente, inserir seu logo nas DANFE's</span>
		</div>
		
		<div style="float:right;text-align:center;width:50%;">
			<input id="inputFileToLoad" accept=".jpg,.png" class="upload-btn-wrapper btn_custom" type="file" onchange="encodeImageFileAsURL();" />  <img onClick="location.reload();"src="img/x.png" width="20" style="vertical-align: top;padding-top: 17px; cursor:pointer;">
		</div>
		
	</div>-->
	<div style="width:82%; text-align:center;" class="upload_logo">
		<div style="float:left;text-align:right;width:50%;padding-top: 15px;font-size: 20px;">
			<span>Você pode, se quiser, inserir uma senha para o arquivo final</span>
		</div>
		
		<div style="float:right;text-align:center;width:50%;">
			<input id="senha" class="upload-btn-wrapper btn_custom" type="password" style="
				width: 433px;
				border: 2px solid #9e9e9e;
				border-radius: 8px;
				margin-left: -19px;
				text-align: center;
				font-size: 30px;
			">  
		</div>		
	</div>
</body>
</html>
