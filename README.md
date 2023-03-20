<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->



<!-- PROJECT LOGO -->
<br />
<div align="center">
    <img src="https://github.com/pedropamn/fastdanfe/blob/main/img/rocket.png?raw=true" alt="Logo" width="100" height="100">


  <h1 align="center">FastDANFE</h1>

  <p align="center">
    Converta XML's em DANFE's em PDF
    <br />    
    <br />
    <a target="_blank" href="https://www.pedronetoweb.com.br/apps-files/fastdanfe/index.php"><img src="https://img.shields.io/badge/-Acessar Agora!-blue?style=for-the-badge&logo=Google Chrome&logoColor=white" width="250"/></a>
    <br />
    <br />
    ·
    <a href="https://github.com/pedropamn/fastdanfe/issues">Reportar um  Bug</a>
    ·
    <a href="https://github.com/pedropamn/fastdanfe/issues">Sugerir funcionalidade</a>
  </p>
</div>




<!-- ABOUT THE PROJECT -->
## Sobre o projeto

<div align="center">
  <img src="https://raw.githubusercontent.com/pedropamn/fastdanfe/main/screenshot.png" width="900" height="400" />
</div>

<br><br>

FastDANFE é um website desenvolvido em PHP para conversão de XML's em DANFE em PDF. Envie seus arquivos e obtenha suas NF's em segundos!

* 🔁 Conversão de múltiplos arquivos
* ⬇️ Download ZIP
* 🔒 Proteja seus DANFE's com senha



<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Feito com

<img src="https://img.shields.io/badge/-PHP-blue?style=for-the-badge&logo=php&logoColor=white"></img>
<img src="https://img.shields.io/badge/-Javascript-yellow?style=for-the-badge&logo=javascript&logoColor=white"></img>
<img src="https://img.shields.io/badge/-CSS-orange?style=for-the-badge&logo=css3&logoColor=white"></img>
<img src="https://img.shields.io/badge/-HTML-blue?style=for-the-badge&logo=html5&logoColor=white"></img>

<p align="right">(<a href="#readme-top">back to top</a>)</p>


## Dependências

O projeto utiliza a biblioteca `nfe-php`


<!-- ROADMAP -->
## Roadmap

- [x] Proteger arquivo zip com senha
- [ ] Impedir PDF's inválidos de aparecerem dentro do ZIP (assim como no merge) e avisar o usuário
- [ ] DANFE com Logotipo (o usuário selecionar um logotipo para aparecer em todos os DANFEs)
- [ ] Suporte a DACTE
- [ ] Usar apenas chave de acesso
- [ ] Salvar na nuvem automatica ou manualmente (Dropbox, Box, etc,)
- [ ] API (Endpoint que recebe um arquivo XML e retorna um PDF)
- [ ] Cliente Desktop que monitora XML's em determinada pasta e gera PDF's automaticamente em outra pasta (Via API)
- [ ] Geração de um relatório depois do Upload de vários XML'S (Clientes, Valores, Datas, etc), exportavel para PDF e Excel
- [ ] Encrypt/Decrypt arquivos XML, deixando os ilegíveis, mediante senha


<p align="right">(<a href="#readme-top">back to top</a>)</p>



## Configurações no servidor:

* O projeto utiliza a biblioteca `nfe-php`
* Usuário Dono dos arquivos: `www-data`
* Permissão das pastas: 743
* Cronjob: `* * * * * /usr/bin/php /var/www/delete.php fastdanfe_tok` (para excluir os XML's e PDF's residuais nas pastas)






<!-- CONTRIBUTING -->
## Contribute

1. Fork
2. Crie uma Branch (`git checkout -b feature/AmazingFeature`)
3. Commit (`git commit -m 'Add some AmazingFeature'`)
4. Push (`git push origin feature/AmazingFeature`)
5. Abra uma Pull Request




<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->
## Contact

apps@pedronetoweb.com.br


<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 
