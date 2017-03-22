var mD = {creaElementoConNombre: function (tipoNodo, nombreNodo){var elemento = null;try{elemento = xCreateElement('<' + tipoNodo + ' name="' + nombreNodo + '">');}catch (e){}if (!elemento || elemento.nodeName != tipoNodo.toUpperCase()){elemento = xCreateElement(tipoNodo);elemento.setAttribute('name', nombreNodo);}return elemento;},agregaAtributo: function (elemento, atributos){if (!xDef(elemento) || !xDef(atributos) || (typeof atributos != 'object')) return;for (at in atributos){switch (at.toUpperCase()){case 'CLASS': if (!elemento.className || elemento.className != atributos[at]) elemento.className = atributos[at];break; case 'COLSPAN':if (!elemento.colSpan || elemento.colSpan != atributos[at]) elemento.colSpan = atributos[at];break;default:elemento.setAttribute(at, atributos[at]);}}},anexaEvento: function(elemento, evento, funcion, argumentos){if (!xDef(elemento) || !xDef(evento) || !xDef(funcion) || (typeof funcion != 'function')) return;if (xDef(argumentos) && (typeof argumentos == 'object') && (argumentos instanceof Array)){xAddEventListener(elemento, evento, function(){funcion.apply(null, argumentos);}, false);}else{xAddEventListener(elemento, evento, funcion, false);}},agregaNodoElemento: function (tipo, nombre, id, atributos){if (xDef(nombre)){var el = mD.creaElementoConNombre(tipo, nombre);}else{var el = xCreateElement(tipo);return el;}if (xDef(id)) el.setAttribute('id', id); else{el.setAttribute('id', nombre);return el;}mD.agregaAtributo(el, atributos);return el;},agregaNodoTexto: function (el, texto){if (xDef(el)){var nodoTexto = document.createTextNode(texto);xAppendChild(el, nodoTexto);}},agregaVinculo: function (texto, atributos){vinculo = xCreateElement('a');if (xDef(texto) && (typeof texto == 'string')){mD.agregaNodoTexto(vinculo, texto);mD.agregaAtributo(vinculo, atributos);}return vinculo;},insertarFila: function (tabla, indice, atributos){if (!xDef(tabla)) return;if (!xDef(indice) || (indice < -1)) indice = -1;if (indice > tabla.childNodes.length) indice = tabla.childNodes.length;var fila = tabla.insertRow(indice);mD.agregaAtributo(fila, atributos);return fila;},insertarCelda: function (fila, indice, atributos, texto){if (!xDef(fila)) return;if (!xDef(indice) || (indice < -1)) indice = -1;if (indice > fila.childNodes.length) indice = fila.childNodes.length;var celda = fila.insertCell(indice);mD.agregaAtributo(celda, atributos);if (xDef(texto) && (typeof texto == 'string')){mD.agregaNodoTexto(celda, texto); }return celda;},insertarFilaCompleta: function (){var long = arguments.length; if (long < 1) return;var fila = mD.insertarFila(arguments[0], arguments[1], arguments[2]);if (!xDef(fila)) return;if (long < 4) return fila;for (var i=3; i<long; i+=2){if (xDef(arguments[i+1])){mD.insertarCelda(fila, -1, arguments[i], arguments[i+1]);}else {mD.insertarCelda(fila, -1, arguments[i]);}}return fila;},insertarVariasCeldas: function (){var long = arguments.length;if ((long < 1) || !xDef(arguments[0])) return;var fila = arguments[0];if (xDef(arguments[1])) var indice = arguments[1];else var indice = -1;if ((indice < 0) || (indice >= fila.childNodes.length)) indice = fila.childNodes.length;for (var i=2; i<long; i+=2){if (xDef(arguments[i+1])){mD.insertarCelda(fila, indice, arguments[i], arguments[i+1]);}else{mD.insertarCelda(fila, indice, arguments[i]);}indice++;}return fila;},agregaEntrada: function (tipo, nombre, valor, id, tamano, maxTamano, atributos){if (xDef(nombre)){var entrada = mD.creaElementoConNombre('input', nombre);}else {var entrada = xCreateElement('input');}if (xDef(tipo)) entrada.setAttribute('type', tipo);else return null;if (xDef(valor)) entrada.setAttribute('value', valor);else entrada.setAttribute('value', '');if (xDef(id)) entrada.setAttribute('id', id);else entrada.setAttribute('id', nombre);if (xDef(tamano)){entrada.setAttribute('size', tamano);if (xDef(maxTamano)) entrada.setAttribute('maxlength', maxTamano);else entrada.setAttribute('maxlength', tamano);}mD.agregaAtributo(entrada, atributos);return entrada;},agregaEtiqueta: function (texto, id, para, tecla, atributos){var etiqueta = xCreateElement('label');if (xDef(texto)) var nodoTexto = document.createTextNode(texto);if (xDef(id)) etiqueta.setAttribute('id', id);if (xDef(para)) etiqueta.setAttribute('for', para);if (xDef(tecla)) etiqueta.setAttribute('accesskey', tecla);mD.agregaAtributo(etiqueta, atributos);xAppendChild(etiqueta, nodoTexto);return etiqueta;},agregaBoton: function (texto, nombre, id, atributos){if (xDef(nombre)){var boton = mD.creaElementoConNombre('button', nombre);}else{var boton = xCreateElement('button');}if (xDef(texto)) var textoE = document.createTextNode(texto);else return boton;xAppendChild(boton, textoE);if (xDef(id)) boton.setAttribute('id', id);else if (xDef(nombre)) boton.setAttribute('id', nombre);else return boton;mD.agregaAtributo(boton, atributos);return boton;},agregaElementoBr: function (el, numero){if (!xDef(el)) return;if (!xDef(numero)) numero = 1;for (var i = 0; i < numero; i++){var elBr = xCreateElement('br');xAppendChild(el, elBr);}},preparaFecha: function (nodoPadre, nombreEntrada, fechaVen, botFecha, valFecha){if (!xDef(valFecha) || (valFecha == '')){var valFecha = ahora;}var valorFecha = valFecha.formato('aa-mm-dd');var fechaMostrada = valFecha.formato('dd/mm/aa');var fechaBdeD = mD.agregaEntrada("hidden", nombreEntrada, valorFecha, nombreEntrada, 10, 10);var fechaVenezolana = mD.agregaNodoElemento("span", fechaVen);mD.agregaNodoTexto(fechaVenezolana, fechaMostrada);var botonFecha = mD.agregaNodoElemento("img", botFecha, botFecha, {"src": "imagenes/img.gif", "style": "cursor: pointer; border: 1px solid red;", "title": "Presione para seleccionar la fecha", "onmouseover": "this.style.background='red';", "onmouseout": "this.style.background=''"} );mD.agregaHijo(nodoPadre, fechaBdeD, fechaVenezolana, botonFecha);Calendar.setup({'inputField'  : fechaBdeD,'displayArea':fechaVenezolana,'button':botonFecha});},preparaSelect: function (nodoPadre, nombreSelect, arregloOpciones, valPredeterminado){var seleccion = mD.agregaNodoElemento("select", nombreSelect);for (var i=0, len=arregloOpciones.length; i < len; i++){var opcion = xCreateElement("option");opcion.setAttribute("value", arregloOpciones[i][0]);if (valPredeterminado == arregloOpciones[i][0]) opcion.setAttribute('selected', true);mD.agregaNodoTexto(opcion, arregloOpciones[i][1]);mD.agregaHijo(seleccion, opcion);}mD.agregaHijo(nodoPadre, seleccion);},preparaRadio: function (nodoPadre, nombreEntrada, arregloRadio, valPredeterminado){for (var i=0, len=arregloRadio.length; i < len; i++){var radio = mD.agregaEntrada("radio", nombreEntrada, arregloRadio[i][0], nombreEntrada + i);if (valPredeterminado == arregloRadio[i][0]) radio.setAttribute('checked', true);mD.agregaHijo(nodoPadre, radio);mD.agregaNodoTexto(nodoPadre, arregloRadio[i][1]);}},preparaAreaTexto: function (nodoPadre, nombreArea, columnas, filas, valor){var areaTexto = mD.agregaNodoElemento('textarea', nombreArea, nombreArea, {  "cols":columnas, "rows":filas } );if (xDef(valor)){mD.agregaNodoTexto(areaTexto, valor);}mD.agregaHijo(nodoPadre, areaTexto);},agregaHijo: function (){if (arguments.length < 2) return;var nodoPadre = arguments[0];for (var i=1, len = arguments.length; i<len; i++){xAppendChild(nodoPadre, arguments[i]);}},remplazaTexto: function (el, texto){if (xDef(el)){mD.limpiaTexto(el);var nodoTexto = document.createTextNode(texto);xAppendChild(el, nodoTexto);}},limpiaTexto: function (el,hijo){if (xDef(el)) {el.removeChild(el.hijo);}},leeTexto: function (el){var texto = "";if (xDef(el)){if (el.childNodes){for (var i = 0, len = el.childNodes.length; i < len; i++){var nodoHijo = el.childNodes[i];if (nodoHijo.nodeValue != null){texto = texto + nodoHijo.nodeValue;}}}}return texto;}}