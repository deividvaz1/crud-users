<h2>CRUD - Cadastro Usuários</h2>

<p><strong>Descrição</strong></p>
<p>Este repositório contém uma aplicação simples de cadastro de usuários desenvolvida em <strong>Laravel</strong> (PHP).</p>

<p><strong>Funcionalidades</strong></p>
<ul>
  <li><strong>Criar um novo usuário</strong>
    <ul>
      <li>Campos: Nome, CPF, E-mail, Data de Nascimento, Telefone, Senha.</li>
      <li>A senha é criptografada usando bcrypt antes de ser salva no banco.</li>
    </ul>
  </li>
  <li><strong>Listar todos os usuários</strong>
    <ul>
      <li>Exibe todos os usuários cadastrados (exceto a senha) em uma tabela.</li>
    </ul>
  </li>
  <li><strong>Atualizar um usuário</strong>
    <ul>
      <li>Permite editar Nome, E-mail, Data de Nascimento, Telefone e Senha de um usuário existente.</li>
    </ul>
  </li>
  <li><strong>Excluir um usuário</strong>
    <ul>
      <li>Permite remover um usuário da listagem.</li>
    </ul>
  </li>
</ul>

<p><strong>Requisitos Técnicos</strong></p>
<ul>
  <li>PHP 8.x ou superior</li>
  <li>Laravel 10</li>
  <li>MySQL ou MariaDB</li>
  <li>MaterializeCSS para estilo (opcional)</li>
</ul>

<p><strong>Arquitetura MVC</strong></p>
<ul>
  <li><strong>Model</strong>: <code>app/Models/Usuario.php</code> representa a tabela <code>users</code>.</li>
  <li><strong>View</strong>: arquivos em <code>resources/views/site</code> e <code>resources/views/components</code>.</li>
  <li><strong>Controller</strong>: <code>app/Http/Controllers/UsuarioController.php</code> implementa <code>index</code>, <code>store</code>, <code>edit</code>, <code>update</code>, <code>destroy</code>.</li>
</ul>

<p><strong>Instalação</strong></p>
<ol>
  <li>Clone o repositório:<br>
    <code>git clone https://github.com/deividvaz1/crud-users.git<br>cd repositorio</code>
  </li>
  <li>Instale as dependências com Composer:<br>
    <code>composer install</code>
  </li>
  <li>Configure o arquivo <code>.env</code>:<br>
    <ul>
      <li>Copie <code>.env.example</code> para <code>.env</code></li>
      <li>Ajuste as credenciais do banco de dados (<code>DB_HOST</code>, <code>DB_DATABASE</code>, <code>DB_USERNAME</code>, <code>DB_PASSWORD</code>)</li>
    </ul>
  </li>
  <li>Gere a chave de aplicação:<br>
    <code>php artisan key:generate</code>
  </li>
  <li>Execute as migrations:<br>
    <code>php artisan migrate</code>
  </li>
  <li>Inicie o servidor local:<br>
    <code>php artisan serve</code>
  </li>
</ol>

<p><strong>Uso</strong></p>
<ul>
  <li>Acesse o localhost para visualizar a página inicial.</li>
</ul>

<hr>


