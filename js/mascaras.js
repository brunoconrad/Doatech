function fMasc(objeto, mascara) {
  obj = objeto
  masc = mascara
  setTimeout("aplicarMascara()", 1)
}

	function aplicarMascara() {
		obj.value = masc(obj.value)
	}

  function mCPF(cpf) {
  		cpf = cpf.replace(/\D/g, "")
  		cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
  		cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2")
  		cpf = cpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2")
  		return cpf
  	}


  function mTel(tel) {
    tel = tel.replace(/\D/g, "")
    tel = tel.replace(/^(\d)/, "($1")
    tel = tel.replace(/(.{3})(\d)/, "$1)$2")
    if (tel.length == 9) {
      tel = tel.replace(/(.{1})$/, "-$1")
    } else if (tel.length == 10) {
      tel = tel.replace(/(.{2})$/, "-$1")
    } else if (tel.length == 11) {
      tel = tel.replace(/(.{3})$/, "-$1")
    } else if (tel.length == 12) {
      tel = tel.replace(/(.{4})$/, "-$1")
    } else if (tel.length > 12) {
      tel = tel.replace(/(.{4})$/, "-$1")
    }
    return tel;
  }
