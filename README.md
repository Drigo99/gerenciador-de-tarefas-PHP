# 📝 Gerenciador de Tarefas PHP

Uma aplicação web simples, responsiva e robusta voltada para a organização e gerenciamento de tarefas diárias (To-Do List). O projeto foi desenvolvido como critério avaliativo acadêmico utilizando a linguagem **PHP** pura sob a arquitetura **MVC (Model-View-Controller)**.

---

## Objetivo do Projeto
O principal intuito deste projeto é consolidar de forma prática os pilares trabalhados em aula:
* Estruturação de projetos web usando o padrão arquitetural **MVC**.
* Manipulação segura de bancos de dados relacionais (**MySQL**) usando **PDO**.
* Desenvolvimento de interfaces limpas e totalmente responsivas com **Bootstrap 5**.
* Uso de **JavaScript (ES6)** para validações de formulários no lado do cliente e melhora na experiência do usuário.


---

## Tecnologias Utilizadas
 **PHP 8.x** (Linguagem backend principal)
 **MySQL** (Sistema gerenciador de banco de dados)
 **Bootstrap 5** (Framework CSS para design responsivo e moderno)
 **JavaScript (ES6)** (Interações e validações no Front-end)
 **PDO (PHP Data Objects)** (Abstração e segurança contra SQL Injection)

---

## Estrutura de Pastas (Padrão MVC)
A divisão do ecossistema do código foi estritamente organizada da seguinte maneira:

```text
gerenciador-de-tarefas-PHP/
├── database/
│   ├── conexao.php      # Classe Singleton/Instância de Conexão com o Banco via PDO
│   └── tarefas.sql      # Script de criação estrutural do Banco de Dados
├── controllers/
│   └── TarefaController.php # Orquestrador de ações, requisições e regras de fluxo
├── models/
│   └── Tarefa.php       # Objeto de negócio e persistência de dados (Queries SQL)
├── views/
│   ├── home.php         # Interface de visualização renderizada com Bootstrap
│   └── assets/
│       └── js/
│           └── main.js  # Regras de comportamento e interceptações com JS
└── index.php            # Roteador centralizado (Ponto único de entrada da aplicação)

## Instalação e Execução Local
Siga o passo a passo abaixo para rodar o projeto na sua máquina local:

1. Clonar o repositório
Navegue até a pasta raiz do seu servidor local (ex: C:/xampp/htdocs/) pelo terminal e execute:

git clone https://github.com/Drigo99/gerenciador-de-tarefas-PHP.git

2. Configurar o Banco de Dados (MySQL)
Certifique-se de ativar os módulos do Apache e MySQL no painel de controle do XAMPP.

Acesse o painel do phpMyAdmin pelo seu navegador em: http://localhost/phpmyadmin/.

Vá até a aba SQL, copie as instruções contidas no arquivo database/tarefas.sql do projeto, cole no painel e clique em Executar.

3. Rodar a aplicação
Abra o navegador e acesse a URL correspondente (ajuste as pastas caso necessário):

http://localhost/gerenciador-tarefas-php/

## Segurança Aplicada no Projeto
SQL Injection: Totalmente mitigado através da utilização de Prepared Statements com parâmetros nomeados (bindParam/bindValue) nativos do componente PDO do PHP.

XSS (Cross-Site Scripting): Tratado nas saídas dinâmicas dentro do HTML da View utilizando a função htmlspecialchars(), limpando caracteres especiais antes da exibição ao usuário final.