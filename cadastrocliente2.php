<?php
	include "Include/header.php";
?>
<script>
	function check_form(){
		var inputs = document.getElementsByClassName('required');
	  var len = inputs.length;
	  var valid = true;
	  for(var i=0; i < len; i++){
		 if (!inputs[i].value){ valid = false; }
	  }
	  if (!valid){
		alert('Por favor, preencha todos os campos do formulário.');
		return false;
	  } else { return true; }
	}
</script>

<br/>
<br/>
<div class="container">
<div class="row">
<div class="col-xs-12">
	<h1>Cadastrar Novo Funcionário</h1><br>
	<div align="center">
		<br/>
		<br/>
		<div class="col-xs-12">
					<form class="form-horizontal" action="cadastrocliente3.php" method="POST" onsubmit="return check_form()">
						<div class="form-group">
							<label for="nomefunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Nome Completo:</label>
							<div class="col-xs-10">
								<input type="text" class="form-control required" id="nome" name="nome"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group" id="sexo" name="sexo">
							<label for="sexofunc" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Sexo:</label>
							<div class="col-xs-3">
								<label class="radio-inline control-label">
									<input type="radio" class="required" name="sexo" id="sexo" value="F" style="font: 1.2em Garamond; font-weight: bold;">Feminino
								</label>
								<label class="radio-inline control-label">
									<input type="radio" class="required" name="sexo" id="sexo" value="M" style="font: 1.2em Garamond; font-weight: bold;">Masculino
								</label>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="cpf" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">CPF:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control required" id="cpf" name="cpf"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="idade" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Data de Nascimento:</label>
							<div class="col-xs-3">
								<input type="date" class="form-control required" id="idade" name="idade"/>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="endereco" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Endereço:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control required" id="endereco" name="endereco"/>
							</div>
						</div>
						<p>&nbsp;</p><!-- Um espaço em branco, força a criação de um parágrafo -->
						<div class="form-group">
							<label for="cep" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">CEP:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control required" id="cep" name="cep"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="cidade" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Cidade:</label>
							<div class="col-xs-10">
								<input type="varchar" class="form-control required" id="cidade" name="cidade"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="estado" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Estado:</label>
							<div class="col-xs-3">
								<select class="form-control required" name="estado" id="estado" name="estado">
									<option value="selecione">Selecione...</option>
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="res" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Telefone Residencial:</label>
							<div class="col-xs-10">
								<input type="tel" class="form-control required" id="res" name="res"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="cel" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Celular:</label>
							<div class="col-xs-10">
								<input type="tel" class="form-control required" id="cel" name="cel"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<label for="senha" class="col-xs-2 control-label" style="font: 1.2em Garamond; font-weight: bold;">Senha:</label>
							<div class="col-xs-10">
								<input type="password" class="form-control required" id="senha" name="senha"/>
							</div>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<div class="col-xs-offset-3 col-xs-2">
								<button type="submit" class="btn btn-carrinho" style="color: #FFFFFF;">Cadastrar</button>
							</div>
							<div class="col-xs-2">
								<button type="reset" class="btn btn-muted">Limpar</button>
							</div>
						</div>
					</form>
				</div>
</div>
</div>
</div>
</div>
<br/>
<br/>
<br/>
<?php
	include "Include/footer.php";
?>