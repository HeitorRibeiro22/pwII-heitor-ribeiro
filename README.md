# pwII-heitor-ribeiro
Aulas de Programação Web II com os professores João Siles e Ricardo Palhares
## Identidade
Heitor Ribeiro Bortoti de Oliveira,17 anos de idade,farei 18 anos no dia 5 de maio de 2026
...
## Interesses
cozinhar,pokemon,mangá,desenhos animados,filmes,e ouvir musica,especialmente Tyler the creator.

## Programação
Sinceramente,quero aprender pra não ser um inútil na minha area de profissionalização 





⁠Meu nome é Yoshikage Kira. Tenho 33 anos. Minha casa fica na parte nordeste de Morioh, onde todas as casas estão, e eu não sou casado. Eu trabalho como funcionário das lojas de departamentos Kame Yu e chego em casa todos os dias às oito da noite, no máximo. Eu não fumo, mas ocasionalmente bebo. Estou na cama às 23 horas e me certifico de ter oito horas de sono, não importa o que aconteça. Depois de tomar um copo de leite morno e fazer cerca de vinte minutos de alongamentos antes de ir para a cama, geralmente não tenho problemas para dormir até de manhã. Assim como um bebê, eu acordo sem nenhum cansaço ou estresse pela manhã. Foi-me dito que não houve problemas no meu último check-up. Estou tentando explicar que sou uma pessoa que deseja viver uma vida muito tranquila. Eu cuido para não me incomodar com inimigos, como ganhar e perder, isso me faria perder o sono à noite. É assim que eu lido com a sociedade e sei que é isso que me traz felicidade. Embora, se eu fosse lutar, não perderia para ninguém.





INSTALAÇÃO e CONFIGURAÇÃO DO LARAVEL:


## **1. Instalação do Laravel**

### **Pré-requisitos**

Antes de instalar:

-   **PHP** ≥ 8.1
    
-   **Composer**
    
-   **MySQL** (opcional, se for usar banco de dados)
    
-   **Node.js** + **npm** (opcional, mas necessário para assets com Vite)
    

Verificação rápida:

**bash**



`php -v
composer -V
node -v
npm -v` 

----------

### **Passo 1 – Criar um novo projeto**

No terminal:

**bash**


`composer create-project laravel/laravel nome-do-projeto` 

----------

### **Passo 2 – Acessar a pasta do projeto**

**bash**



`cd nome-do-projeto` 

----------

### **Passo 3 – Permissões (somente Linux/macOS)**

**bash**



`chmod -R 775 storage bootstrap/cache` 

----------

## **2. Configuração do Laravel**

----------

### **Passo 1 – Configurar o arquivo `.env`**

-   Localize o arquivo `.env` na raiz do projeto.
    
-   Ajuste:
    

**env**



`APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=meubanco
DB_USERNAME=root
DB_PASSWORD=` 

----------

### **Passo 2 – Gerar chave da aplicação**

**bash**



`php artisan key:generate` 

----------

### **Passo 3 – Criar banco de dados (opcional, mas recomendado)**

No MySQL:

**sql**



`CREATE DATABASE meubanco;` 

Depois, confirme no `.env` que os dados estão corretos.

----------

### **Passo 4 – Rodar migrações iniciais**

**bash**

CopiarEditar

`php artisan migrate` 

----------

### **Passo 5 – Instalar e compilar assets (se necessário)**

**bash**



`npm install
npm run dev` 

----------

### **Passo 6 – Rodar o servidor**

**bash**



`php artisan serve` 

Acesse no navegador:

**cpp**



`http://127.0.0.1:8000`





Tutorial – Clonar e Enviar Repositórios no GitHub
1. Verificar se existe uma conta GitHub configurada no computador
No terminal:

bash
Copiar
Editar
git config --list
Isso vai mostrar as configurações atuais do Git, incluindo o user.name e o user.email.

2. Remover a conta GitHub configurada (caso precise trocar)
bash
Copiar
Editar
git config --global --unset-all user.email
git config --global --unset-all user.name
3. Adicionar uma nova conta GitHub
Substitua pelos seus dados:

bash
Copiar
Editar
git config --global user.name "SeuUserName"
git config --global user.email "seuemail@example.com"
💡 Para confirmar que deu certo, repita o passo 1.

4. Clonar um repositório
No terminal:

bash
Copiar
Editar
git clone URL_DO_REPOSITORIO
Dica: No terminal, colar é geralmente Shift + Insert ou Ctrl + Shift + V.

5. Entrar na pasta do repositório
bash
Copiar
Editar
cd nome-da-pasta
Para ver os arquivos:

bash
Copiar
Editar
ls
E para verificar o estado atual:

bash
Copiar
Editar
git status
6. Adicionar arquivos ao controle de versão
Adicionar um arquivo específico:

bash
Copiar
Editar
git add nome-do-arquivo
Adicionar todos os arquivos de uma vez:

bash
Copiar
Editar
git add .
7. Criar um commit com mensagem
bash
Copiar
Editar
git commit -m "Mensagem descritiva das alterações"
8. Enviar para o GitHub
bash
Copiar
Editar
git push
