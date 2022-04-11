<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Sala de Aula</title>
</head>

<body>



	<form class="form-horizontal" method="POST" action="/despesa">

		<div class="panel-body">
			<div class="panel panel-dafault">
				<div class="panel-heading ">
					<h1 class="panel=title">Formulário Despesa</h1>
				</div>

				<div class="panel-body diminuir-form">
					<div class="form-group row">
						<label for="descricao" class="col-4 control-label">Descrição</label>
						<div class="col-5">
							<input type="text" class="form-control" placeholder="Descreva" id="descricao" name="descricao"/>
						</div>

					</div>

					<div class="form-group row">
						<label for="dataVencimento" class="col-4  control-label">Data de Vencimento</label>
						<div class="col-5">
							<input type="date" class="form-control" id="dataVencimento" name="dataVencimento"/>
						</div>

					</div>

					<div class="form-group row">
						<label for="valor" class="col-4 control-label">Valor (R$)</label>
						<div class="col-5">
							<input type="number" class="form-control" placeholder="R$" id="valor" name="valor"/>
						</div>

					</div>

					<div class="form-group row">
						<label for="status" class="col-4  control-label">Status</label>
						<div class="col-5">
							<select class="form-select" name="status">
								<option>Selecione</option>
								<option value="PENDENTE">Pendente</option>
								<option value="RECEBIDO">Recebido</option>

							</select>
						</div>
					</div>

					<div class="form-group row    separar-salvar">
						<div class="offset-4 col-5">
														
							<button type="reset" class="btn btn-outline-danger" onclick=resetForm()>Limpar</button>
														
							<button type="submit" class="btn btn-outline-primary" onclick="salvarForm()">Salvar</button>
						</div>
					</div>
				</div>

	
	<script>

		function salvarForm() {
			window.confirm('Deseja Realmente Salvar?')
			window.alert('Salvo!')
		}
		function resetForm() {
			window.confirm('Deseja Realmente Limpar?')
			window.alert('Será Limpo!')
		}

	</script>
	</form>
</body>


	<footer>
		<div class="central">
			<section class="secoes-rodape central">

				<a href="https://www.facebook.com/jarbasn3249" target="_blank">
					<img src="css/facebook.png" /></a>

				<a href="https://www.instagram.com/jarbasjr7/" target="_blank">
					<img src="css/instagram.png" /></a>

				<a href="https://twitter.com/Jarbasnbjunior" target="_blank">
					<img src="css/twitter.png" /></a>

				<a href="mailto:jarbasn3249@gmail.com" target="_blank">
					<img src="css/gmail.png" /></a>


				<a href="https://www.linkedin.com/in/jarbas-jr-229693225/" target="_blank">
					<img src="css/linkedin.png" /></a>
			</section>
		</div>


	</footer>


	
</body>
</html>