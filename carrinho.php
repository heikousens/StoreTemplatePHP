<!doctype html>
<?php
session_start();
	 if(!isset($_SESSION['carrinho'])){ 
        $_SESSION['carrinho'] = array(); 
    } 

	if(isset($_GET['acao'])){ 
        //ADICIONAR CARRINHO 
        if($_GET['acao'] == 'add'){ 
            $codproduto= intval($_GET['codproduto']); 
            if(!isset($_SESSION['carrinho'][$codproduto])){ 
                $_SESSION['carrinho'][$codproduto] = 1; 
            } else { 
                $_SESSION['carrinho'][$codproduto] += 1; 
            } 
		}
		
		//REMOVER
		 if($_GET['acao'] == 'del'){ 
            $codproduto= intval($_GET['codproduto']); 
            if(isset($_SESSION['carrinho'][$codproduto])){ 
                unset($_SESSION['carrinho'][$codproduto]); 
            } 
		 }
		
		//ALTERAR QUANTIDADE
		if($_GET['acao'] == 'up'){ 
            if(is_array($_POST['prod'])){ 
                foreach($_POST['prod'] as $codproduto=> $qtd){
                        $codproduto = intval($codproduto);
                        $qtd = intval($qtd);
                        if(!empty($qtd) || $qtd <> 0){
                            $_SESSION['carrinho'][$codproduto] = $qtd;
                        }else{
                            unset($_SESSION['carrinho'][$codproduto]);
						}
					}
            	}
        	}
		
		//FINALIZA O CARRINHO E FAZ O LOGIN DO CLIENTE
		if($_GET['acao'] == 'finalizar'){ 
			$codproduto= intval($_GET['codproduto']); 
			if(!isset($_SESSION['carrinho'][$codproduto])){ 
				$_SESSION['carrinho'][$codproduto] = 1; 
			} else { 
				$_SESSION['carrinho'][$codproduto] += 1; 
            } 
		}
		}

?>
<html>
<?php
        include ('Include/header2.php');
    
        
        ?>

<body>
<br>
    
<div class="container">
    
    	<div class="card mt-5">
			 <div class="card-body">
	    		<h2>Carrinho</h2>
	    	</div>
		</div>
<br/>
<br/>
	<table class="table table-strip">
        
		<thead>
			<tr>
				<th width="244">PRODUTOS</th>
				<th width="244">QUANTIDADE</th>
				
				<th width="244">PREÇO</th>
				<th width="244">SUBTOTAL</th>
				<th width="244">REMOVER</th>
			</tr>
		</thead>
		
			<form action="?acao=up" method="post">
		
				
		
				
		<tbody>
			<?php
			
				if(count($_SESSION['carrinho']) == 0){
					
					echo('<tr><td colspan="5">Nenhum produto no carrinho</td></tr>');
					
				}else{
					
					include('conexao.php');
					$total = 0;
					$qtdtotal = 0;
					foreach($_SESSION['carrinho'] as $codproduto=> $qtd){
						
						$sql     = "SELECT * FROM produto WHERE codproduto = '$codproduto'";
						$executa = mysqli_query($conexao, $sql) or die (mysqli_error());
						$in      = mysqli_fetch_assoc($executa);
						$nomeproduto = $in['nomeproduto'];
						
					
						$preco   = number_format ($in['preco'], 2,',','.');
						$sub     = number_format ($in['preco'] * $qtd, 2,',','.');
						$total   += $in['preco'] * $qtd;
						$qtdtotal += number_format ($qtd);
						
						echo '<tr>
				
								
                               <td>'.$nomeproduto.'</td> 
								<td><input type="text" size="3" name="prod['.$codproduto.']" value="'.$qtd.'" ></td>
                                
								<td>R$ '.$preco.'</td>
                                
								<td>R$'.$sub.'</td>
                                
								<td><a href="?acao=del&codproduto='.$codproduto.'" class="btn btn-danger" style="color:#FFFFFF;">Remover</td>

							  </tr>' ;
					}
					
						$total = number_format($total, 2, ',', '.');
                echo 	'<tr>                         
                            <td colspan="4">Total</td>
                            <td>R$ '.$total.'</td>
                    	</tr>';
				}
			
			?>
		          <td ><input class="btn btn-carrinho"  type="submit" value="Atualizar Carrinho" style="color: #FFFFFF;"/></td>
				<td ><a class="btn btn-carrinho" href='index.php' style="color: #FFFFFF;">Continuar comprando</a></td>
				<td ><a href='admc/login.php' class="btn btn-finalizar" style="color: #FFFFFF;" value="finalizar">Finalizar Compra</a></td>

	
		</tbody>
			
			</form>
		
	</table>
</div>
</body>
</html>