<html>

<head>

<!-- referencia frame clarity css -->
<link rel="stylesheet" href="https://unpkg.com/@clr/ui/clr-ui.min.css" />

<!-- referencia frame clarity js -->
<link rel="stylesheet" href="https://unpkg.com/@clr/ui@0.12.5/clr-ui.min.css" />
  <link rel="stylesheet" href="path/to/node_modules/@clr/ui/clr-ui.min.css"/>
    <link rel="stylesheet" href="path/to/node_modules/@clr/icons/clr-icons.min.css"/>
      <script src="path/to/node_modules/@webcomponents/custom-elements/custom-elements.min.js"></script>
         <script src="path/to/node_modules/@clr/icons/clr-icons.min.js"></script>

</head>


<body>


<!-- cabeçalho -->
<header class="header-6">
  
<!-- descrição a esquerda -->  
<div class="branding">
  ...
    </div>

<!-- descrição do cabeçalho -->
<div class="header-nav">
  <a href="javascript://" class="active nav-link nav-text">Dashboard</a>
    <a href="javascript://" class="nav-link nav-text">Interactive Analytics</a>
       </div>

<div class="header-actions">
  <a href="javascript://" class="nav-link nav-icon" aria-label="settings">
    <clr-icon shape="cog"></clr-icon>
      </a>
        </div>

</header>


<!-- Descrição da página -->
<div class="login-wrapper">

<form class="login">
  <section class="title">
    <h3 class="welcome">Bem vindo a empresa</h3>
      Gabriel BITTRADER o cara da cripto
        <h5 class="hint">Preencha por favor os campos ao lado</h5>
          </section>

<!-- Campo de formulário -->
 <div class="login-group">
            
<form action="cadastrar.php" method="POST">
  <clr-input-container>
    <label class="clr-sr-only">Username</label>
      <input type="text" name="username" clrInput placeholder="Username" [(ngModel)]="form.username"/>
        </clr-input-container>

  <clr-password-container>
    <label class="clr-sr-only">Password</label>
      <input type="password" name="password" clrPassword placeholder="Password" [(ngModel)]="form.password"/>
        </clr-password-container>
          </form>
            
<!-- descrição do formu´lário -->            
<button type="submit" class="btn btn-primary" value="enviar">NEXT</button>
  <a href="javascript://" class="signup">Sign up for a Company ID</a>
    </div>
      </form>
         </div>

</body>


<Footer>
</footer>

</html>