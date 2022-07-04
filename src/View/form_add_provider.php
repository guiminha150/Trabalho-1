<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=[]], initial-scale=1.0">
    <title>Loja de varejo - Novo produto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="../Controller/Provider.php" method="POST">
        <section class="mx-4 mt-4 columns-2">
            
            <article>
                <label for="name"
                class="cursor-pointer">Nome do Fornecedor:
            </label>
                <input type="3text" id="name" name="name"
                class="border border-blue-400" required>    
            </article>
        
            <article>
                <label for="cnpj"
                class="cursor-pointer">Cnpj:
            </label>
                <input type="3text" id="cnpj" name="cnpj"
                class="border border-blue-400" required>    
            </article>
          
            </section>
         <br>
         <hr>
         <hr>
         <h1>Cadastro endereço:</h1>
         <hr>
         <hr>
         <br>
            
            <section class="mx-4 mt-4 columns-3">
            <article>
                <label for="publicPlace"
                class="cursor-pointer">Login:
            </label>
                <input type="3text" id="publicPlace" name="publicPlace"
                class="border border-blue-400" required>    
            </article>
      <br>
            <article>
                <label for="streetNumber">Número da casa</label>
                <input type="number" name="streetNumber" id="streetNumber" class="border border-blue-400" required min=1 max=1000>    
            </article>
         
            <article>
                <label for="neighborhood"
                class="cursor-pointer">Bairro:
            </label>
                <input type="3text" id="neighborhood" name="neighborhood"
                class="border border-blue-400" required>    
            </article>
            <br>
            <article>
                <label for="city"
                class="cursor-pointer">Cidade:
            </label>
                <input type="3text" id="city" name="city"
                class="border border-blue-400" required>    
            </article>
            
            <article>
                <label for="postalCode"
                class="cursor-pointer">Código postal:
            </label>
                <input type="3text" id="postalCode" name="postalCode"
                class="border border-blue-400" required>    
            </article>
        
            </section>
        <article class="flex justify-center mt-3">
        <button type="submit" class="p-3 text-white bg-blue-400 rounded bg-blue">Cadastrar</button>
     </article>
    </form>
</body>
</html>