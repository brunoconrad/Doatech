function usuario_cadastro() {
	var nome = document.getElementById("inputNome").value;
	var cpf = document.getElementById("inputCnpj").value;
    var endereco = document.getElementById("inputEndereco").value;
    var email = document.getElementById("inputEmail").value;
    var telefone = document.getElementById("inputTelefone").value;
    var senha = document.getElementById("inputSenha").value;
	var imagem = document.getElementById("inputImagem").value;

	if (nome == "")
	{
		alert('Preencha o campo de Nome');
	}
	else if (cpf == "")
	{
		alert('Preencha o campo da CPF/CNPJ');
	}
  else if (endereco == "")
	{
		alert('Preencha o campo da Endereço');
	}
  else if (email == "")
	{
		alert('Preencha o campo da Email');
	}
  else if (telefone == "")
	{
		alert('Preencha o campo da Telefone');
	}
  else if (senha == "")
	{
		alert('Preencha o campo da Senha');
	}
	else if (imagem == "")
	{
		alert('Anexe uma imagem');
	}
}
