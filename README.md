# FastDANFE

Dono dos arquivos: www-data

Permissão das pastas: 743

Cronjob: * * * * * /usr/bin/php /var/www/delete.php fastdanfe_tok

# TODO

Fixes:
  - Impedir PDF's inválidos de aparecerem dentro do ZIP (assim como no merge) e avisar o usuário

Gratuito:

- DANFE com Logotipo (o usuário selecionar um logotipo para aparecer em todos os DANFEs)
- Suporte a DACTE
- Extrair dados básicos de uma chave de acesso (não do XML.)
- Proteger arquivo zip fina com senha
- Gera DANFE/DACTE apenas com a chave de acesso

Premium (Exigem cadastro):

- Salvar na nuvem automatica ou manualmente (Dropbox, Box, etc, exige login para armazenar o token bAuth)
-API (Endpoint que recebe um arquivo XML e retorna um PD
- Cliente Desktop que monitora XML's em determinada pasta e gera POF's automaticamente em outra pasta (Via API)
- Geração de um relatório depois do Upload de vários XML'S (Clientes, Valores, Datas, etc), exportavel para PDF Excel
- Encrypt/Decrypt arquivos XML, deixando os ilegíveis, mediante senha
