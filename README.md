# PHP (Hypertext Preprocessor)
 
Uma linguagem server-side, roda do lado do servidor. É uma linguagem de programação back-end, pois ela realiza comunicação com banco de dados

Ela é processasdo no servidor e o resultado do processamento é enviado ao cliente(quem requisitou). Exemplo:

Arquivo PHP: 2+2

Resposta para o cliente: 4

Todo aquivo PHP terá a extensão .php

## Aula 01
-Introdução ao PHP 
-Infruestrutura necessária
-Variáveis
-Tipos de dados
-Operadores aritímeticos
-Envio/Recebimento de informações entre arquivos

### Introdução ao PHP 
-Documentação oficial
-Ele brilha na WEB, 79% da web usa PHP
-PHP pode ser ultilizado para projetos de IoT(internet das coisas), funciona para criar aplicações de linha de comando(modo texto), pode criar aplicativos desktop com PHP
-PHP é uma linguagem interpretada
  
### Infruestrutura necessária
-Servidor é computador que fornece serviços a clientes. Exemplo: Serviço de DHCP: O servidor fica responsavel por distribuir números IP(Internet Protocol) para os clientes(Hosts) na rede.
-Nossos sites ficam em servidores web é responsavel por exibir um site quando for solicitado(requisição). Iremos ultilizar o servidor web chamado APACHE(existem outros como IIS.NGINX) juntamente com um banco de dados chamado MariaDB(mesma coisa que o MySql).
-Vamos instalar o XAMPP, esse programa ja instala o APACHE, o PHP e o MariaDB

### Onde colocar nossos arquivos
-Os arquivos PHP precisam ser executadosá partir do servdor, como se voce estivesse acessando pela internet
-Para XAMPP, o local aonde devemos colocar nossos arquivos é em `c:\xampp\htdocs\site\index.php´
-Para executar os arquivos PHP. precisamos requisita-los á partir do navegador digitando `https://localhost/`. Exemplo: `https://localhost/site/index.php`

### Variaveis
-variavel é um espaço na memória que damos um nome para armazenar algum valor
-o PHP e case-sensitive, significa que ele diferencia maiúsculas de minúsculas, ou seja, Nome é diferente de nome
-o nome de uma variavel deve ser significatico de acordo com seu valor. Exemplo: para uma variavel que vai armazenar a idade de uma pessoa eu coloco o nome da variavel de $idade
-No PHP toda variavel se inica com $
-Não ultilize caracteres especiais, espaços ou acentos para nome de variaveis. Alguns deles até funcionam, porém e recomendado escrever nomes de variaveis de forma simples. Exemplo: ao invés de endereço para o nome de uma variavel ultilize $endereco sem o 'Ç'

### Tipos de dados
-Os valores em Php podem ser divididos entre os tipos:
    -String: todo valor que estiver entre aspas é uma string, ou seja, um texto. Exemplo: 36
    -Float ou Double: todo número decimal. Exemplo: 1.83
    -boolean: valor de verdadeiro(true) ou falso(false)

### Operadores aritiméticos
- + : adição
- - : subtração
- * : multiplicação
- / : divisão
- % :resto da divisão, operador de módulo]
- ** : exponenciação