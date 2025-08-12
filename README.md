# Documentação
AULA 02
Intalar Laravel
1. Para iniciar o novo projeto devemos  seguir os passos de instalação do projeto LARAVEL
	1.  Ligar o xamp -> Tanto a opção APACHE quanto a opção MYSQL

	2.  Abrir o git bash -> Clonar o seu repositório do Git
    
	3.  Colocar o repositório dentro da pasta no HTDOCS
    
	4.  Conferindo o compuser --> Na sua máquina e a instalação de HP
    
	5.  Colar a instalação -> # Run as administrator...
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
    
    6.  Fechar o terminal
    7.  Abrir o terminal na pasta do Git
    8.  Abrindo um novo PoewrShelll para criar >  laravel new aula02
    9. <img title="a title" alt="LARAVEL" src="/print/Laravel">
    10.  Aparecendo [None] -> ENTER
    11. [SQLite] -> escrever sqlite
    12. <img title="a title" alt="SQLite" src="/print/SQLite">
    13. YES
    14. <img title="a title" alt="YES" src="/print/Yes">
2. Agora para abrir no VS CODE sua pasta criada 
	1. -> cd aula02 (nome do projeto criado)
	2. -> code .  

# Programação PWII

# SERVIDOR | LARAVEL
**PASSO A PASSO PARA ABRIR O SERVIDOR LARAVEL** 
Quando você baixa um projeto **Laravel** vem com vários arquivos desconfigurados 
Falta uma série de coisas
Arquivo de configuração do ambiente 
- Muita atenção 
**.ENV = Environment**  = Ambiente que protege seus dados sensíveis 
Ter acesso à vários bancos de dados mas, como proteger a cliente?

Quando você tem dados de muitas importância você não entrega diretamente ao seu desenvolvedor 
Mas, nunca o dado do cliente FINAL 
Apenas os dados gerais como por exemplo: CNPJ
1. **Nunca subir para o GitHub pois, são dados sensíveis**.
SURGE COMO PROTEÇÃO
SEMPRE TEM UMA COPIA: **.env.example** (nunca apagar)
--> fazer UMA COPIA do .env

PASSO A PASSO PARA ABRIR O SERVIDOR LARAVEL 
**PASSO 1**
--> Criar uma copia do arquivo **.env.example** e renomear para apenas **.ENV**

**PASSO 2**
--> No terminal, dentro da pasta do projeto -> **Rodar composer install**
Essa etapa = INTALA DEPENDENCIA DO PHP E GERA A PASTA VENDOR
- Demora um pouco para gerar 
- Precisa da Internet para funcionar
obs.: Além de ter internet, os pré requisitos é deixar pré instalado um LARAVEL, UM COMPOSER 

**PASSO 3
--> EXECULTAR  npm install** - o que vai gerar dependência da sequencia JavaScript 
Você precisa fazer com que essas dependências sejam atualizadas

**PASSO 4
--> Agora para continuar npm run bild** 
Se você tentar iniciar vai dar erro e vai dizer que a aplicação não tem uma chave especificada

**PASSO 5
--> php artizan key:generete**
Ele vai gerar a chave que a gente precisa PARA criptografia do servidor mas, ainda assim não dará certo.
Precisamos mandar rodar as migrações = Migration para que realmente funcione no nosso banco de Dados = **DataBase**
Hoje temo o ORM = Gerenciamento de mapeamento Relacional, que permite trabalhar com linguagem alternativa 
Eloquente 

**PASSO 6
--> PHP artizan migrate** 
Cria o seu banco de dados para que ele possa rodar 

