<!TEMPLATE TAGGER HTML5>

<html>

<head>
    
    <!-- Meta Dados -->
    <title> Tagger Alpha</title>
        <!-- Caracteres Universal UTF-8 -->
        <meta charset="utf-8">
    
        <!-- Escala Responsiva -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- .Meta Dados -->
    
    <!-- Icone navegador -->
    <link rel="shortcut icon" href="Folders/Imagens/TAGGER/Icons/Tagger.png">
    
    
    <!-- CssStyles  -->
    
        <!-- Body -->
        <link rel="stylesheet" href="Folders/CssStyle/Body.css">
    
        <!-- Container -->
        <link  rel="stylesheet" href="Folders/CssStyle/Container.css">
    
        <!-- NavBar -->
        <link rel="stylesheet" href="Folders/CssStyle/NavBar.css">
    
        <!-- Banner -->
        <link rel="stylesheet" href="Folders/CssStyle/Banner.css">
    
    
        <!-- Conteudo -->
        <link rel="stylesheet" href="Folders/CssStyle/Conteudo.css">
    
        <!-- Galeria -->
        <link rel="stylesheet" href="Folders/CssStyle/Gallery.css">
    
         <!-- Rodape -->
        <link rel="stylesheet" href="Folders/CssStyle/Rodape.css">
        
        <!-- formulario -->
        <link rel="stylesheet" href="Folders/CssStyle/formulario.css">
    <!-- .CssStyles  -->
        
 
    <!-- JsScripts -->
    
        <!-- Biblioteca Jquery 3.3.1 -->
         <script src="Folders/JsScripts/Jquery%203.3.1.js"></script>
    
        <!-- Menu -->
        <script src="Folders/JsScripts/Menu.js"></script>
    
    <!-- .JsScripts  -->
        
</head>

<body>
    
    <div class="container"></div>
    
    <!-- NavBar -->
    <nav id="Navbar">
            
        <div class="Hamburguer">
            <div class="H H01"></div>
            <div class="H H02"></div>
            <div class="H H03"></div>
        </div>
        
    </nav>
    <!-- .NavBar -->

    <!-- Menu -->
    <div class="Painel"></div>
    
    <div class="Menu">
        
        <div class="BarraMenu">
            <button class="ButtonFechar">&times;</button>
        </div>
    
        
        <div class="Options">
            <li class="Links Home"><a href="#">Home</a></li>
            <li class="Links Serv"><a href="#">Serviços</a></li>
            <li class="Links Somos"><a href="#">Quem&nbsp;Somos&nbsp;?</a></li>
            <li class="Links Home"><a href="#">Contate nos !</a></li>
        </div>
    
        <h5 class="Version">Version: Mate 1.1.3 </h5>
        
    </div>
    <!-- .Menu -->

    <!-- Banner -->
     <div class="banner">
    
        <div class="Wallpaper"></div>
        <div class="Logo"></div>
    
    </div>
    <!-- .Banner -->
      

    <!-- Conteudo -->
    <div class="Conteudo">
        
    
        <div id="Planos">
        
            <div class="Plano">
    
                <div class="icon"></div>
                <img src="Folders/Imagens/TAGGER/Planos/icons/Laptop.svg">
   
                <h5>Criar Site</h5>
                
                <p>
                    Seu site sob medida <br>
                    para melhor publicidade de seu negócio 
                </p>
                
            </div>

        </div>
        
        <div id="Planos">
        
           
           <div class="Plano">
    
               <div class="icon"></div>
                <img src="Folders/Imagens/TAGGER/Planos/icons/Laptop.svg">
   
                <h5>Criar Site</h5>
                
                <p>
                    Seu site sob medida <br>
                    para melhor publicidade de seu negócio 
                </p>
                
            </div>
            
            <div class="Plano">
    
                <div class="icon"></div>
                <img src="Folders/Imagens/TAGGER/Planos/icons/Laptop.svg">
   
                <h5>Criar Site</h5>
                
                <p>
                    Seu site sob medida <br>
                    para melhor publicidade de seu negócio 
                </p>
                
            </div>
            
            <div class="Plano">
    
                <div class="icon"></div>
                <img src="Folders/Imagens/TAGGER/Planos/icons/Laptop.svg">
   
                <h5>Criar Site</h5>
                
                <p>
                    Seu site sob medida <br>
                    para melhor publicidade de seu negócio 
                </p>
                
            </div>
            
        
        </div>
          
    </div>
    <!-- .Conteudo -->

    <!-- Galeria -->
    <div id="Galeria">
    
        <div class="Galeria G01">
            <img src="Folders/Imagens/Photos/BlankIcon.png" >
            <h5 class="Nome">Fabricio Oliveira</h5>
            <h5 class="Profissão">WebDesign</h5>
        </div>
        
          <div class="Galeria G02">
            <img src="Folders/Imagens/Photos/BlankIcon.png" >
            <h5 class="Nome">Francisco </h5>
            <h5 class="Profissão">WebDesign</h5>
        </div>

          <div class="Galeria G03">
            <img src="Folders/Imagens/Photos/BlankIcon.png" >
            <h5 class="Nome">Matheus Jesus</h5>
            <h5 class="Profissão">WebDesign</h5>
        </div>
        
          <div class="Galeria G04">
            <img src="Folders/Imagens/Photos/BlankIcon.png" >
            <h5 class="Nome">Allan Fernandes</h5>
            <h5 class="Profissão">WebDesign</h5>
        </div>
        
    </div>
    <!-- .Galeria -->
        <!-- Formulario Rapido -->
    <nav id=formulario>
      
         <form id="formulario"  method="post" action="Folders/cadastro.php">
               
              <ul id="progress" >
                  <li class="ativo">Configurações</li>
                  <li>Dados Pessoais</li>
                  <li>Detalhes</li>
                  </ul>
             
            <!-- ABAIXO PRIMEIRA PAGINA CADASTRO -->
             <Fieldset>
            <h2> Dados para contato</h2>
                 <h3> Algumas configuracoes</h3>
                 <input type="text" name="email" placeholder="Email" />
                 <input type="text" name="assunto" placeholder="Assunto" />
                 <input type="text" name="mensagem" placeholder="Mensagem" />
                 <input type="submit" name="next" class="next acao" value="proximo">
             </Fieldset>
             
             <!-- ABAIXO SEGUNDA PAGINA CADASTRO -->
               <Fieldset>
            <h2> Perfis Pessoais</h2>
                 <h3>Redes sociais</h3>
                 <input type="text" name="facebook" placeholder="Facebook (opcional)"  />
                 <input type="text" name="Discord " placeholder="Discord (opcional)" />
                 <input type="text" name="Youtube" placeholder="Youtube (opcional)" />
                   <input type="submit" name="prev" class="prev acao" value="anterior">
                 <input type="submit" name="next" class="next acao" value="proximo">
             </Fieldset>
             
             <!-- ABAIXO TERCEIRA PAGINA CADASTRO -->
               <Fieldset>
            <h2> Detalhes Pessoais</h2>
                 <h3>Informe nos alguns detalhes</h3>
                 <input type="text" name="primeiro" placeholder="Primeiro nome" />
                 <input type="text" name="segundo" placeholder="sobrenome" />
                 <input type="text" name="telefone" placeholder="telefone" />
                   <input type="submit" name="prev" class="prev acao" value="anterior">
                 <input type="submit" name="next" class="acao"  id="cadastrar" value="cadastrar" >
             </Fieldset>
             
             
            <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
             
             <script type="text/javascript" src="Folders/JsScripts/function.js"></script>
                
             <!-- Antigo Form >
            <legend>Entre em contato, estamos aguardando</legend>
             <h1> Digite o seu endereço de email !</h1>
             <input type = "text" name="email" value="Seu email aqui">
             <br>
             <h1> Nos mande uma mensagem ou solicitação!</h1>
             <input type = "text" name ="mensagem" value= "sua mensagem aqui">  
                  --> 
            
        </form>
    </nav>

    <!-- Rodape -->
    <div class="Rodape">
    
    </div>
    <!-- .Rodape -->
    
</body>
    
</html>