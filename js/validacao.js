function validaForm(frm) {
    /*
    o parâmetro frm desta função significa: this.form,
    pois a chamada da função - validaForm(this) foi
    definida na tag form.
    */
        //Verifica se o campo nome foi preenchido e
        //contém no mínimo três caracteres.
        if(frm.name.value == "" || frm.name.value == null) {
            //É mostrado um alerta, caso o campo esteja vazio.
            alert("Por favor, indique o seu nome.");
            //Foi definido um focus no campo.
            frm.name.focus();
            //o form não é enviado.
            return false;
        }
        //o campo e-mail precisa de conter: "@", "." e não pode estar vazio
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