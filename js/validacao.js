function validaForm(frm) {
    
        if(frm.name.value == "" || frm.name.value == null) {
            alert("Por favor, indique o seu nome.");
            frm.name.focus();
            return false;
        }
        
        if(frm.email.value.indexOf("@") == -1 ||
          frm.email.value == "" ||
          frm.email.value == null) {
            alert("Por favor, indique um e-mail válido.");
            frm.email.focus();
            return false;
        }

        if(frm.phone.value == "" ||
          frm.phone.value == null) {
            alert("Por favor, indique um telefone válido.");
            frm.phone.focus();
            return false;
        }

        if(frm.address.value == "" ||
          frm.address.value == null) {
            alert("Por favor, indique um endereço válido.");
            frm.phone.focus();
            return false;
        }
        
    }