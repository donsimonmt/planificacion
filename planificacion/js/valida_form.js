function validarEntradaNumerica(id){
		if(!id) id = this.id
		var valor = document.getElementById(id);
		var num=valor.value.length
		var i=0,j='',dat;
		var rango="0123456789.";
		for (i = 0; i < num; i++) {
			dat = valor.value.charAt(i)
			if (rango.indexOf(dat) != -1) {
				j += dat;
			}
		}
		valor.value=j;

	}
    
function SoloNumeros(evt){
   var nav4 = window.Event ? true : false;   
// NOTE: Backspace = 8, Enter = 13, '0' = 48, '9' = 57  
var key = nav4 ? evt.which : evt.keyCode;  
return (key <= 13 || (key >= 48 && key <= 57) || key==13) ; 
}



function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    especiales = [8, 37, 39, 46, 6, 9]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}

function espacio(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    if(key==32)return false;
}