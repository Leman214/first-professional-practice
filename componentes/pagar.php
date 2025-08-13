<!DOCTYPE html>
<html lang="es">

<?php include('head.php'); ?>

<body id="inicio">
    
    <?php include('header.php'); ?>

    <section class="seccion-pagar">

        <div class="caja-compra">
            <h3>1. Mi Compra</h3>
            <?php include('../database/carrito-cargado.php') ?>

            <form action="" class="formulario-compra" method="POST">

                <h3>2. Mis datos</h3>

                <input type="text" name="nombre-cliente" placeholder="Nombre" required>
                <input type="text" name="apellido-cliente" placeholder="Apellido" required>
                <input type="number" name="telefono-cliente" placeholder="Numero Celular" required>
                <input type="number" name="dni-cliente" placeholder="DNI" required>

                <h3>3. ¿Cómo querés recibir tu pedido?</h3>
                <!-- Opciones de retiro/envío -->
                
                <label>
                    <input type="radio" name="tipo-entrega" value="retiro" onclick="mostrarFormulario('retiro')"> 
                    Retiro en local
                </label>
                
                <label>
                    <input type="radio" name="tipo-entrega" value="envio" onclick="mostrarFormulario('envio')"> 
                    Envío a domicilio
                </label>

                <!-- Formulario para RETIRO -->
                <div id="formulario-retiro" style="display: none; flex-direction: column;">
                    <h4>Datos para el retiro</h4>
                    <p>Dirección del local: Av. Ejemplo 123, Centro</p>
                    <p>Horarios de atención: Lunes a Viernes de 9 a 18hs</p>
                    
                    <label for="fecha-retiro">Fecha preferida para el retiro:</label>
                    <input type="date" name="fecha-retiro" id="fecha-retiro">
                    
                    <label for="horario-retiro">Horario preferido:</label>
                    <select name="horario-retiro" id="horario-retiro">
                        <option value="">Seleccionar horario</option>
                        <option value="9-12">9:00 a 12:00</option>
                        <option value="12-15">12:00 a 15:00</option>
                        <option value="15-18">15:00 a 18:00</option>
                    </select>
                </div>

                <!-- Formulario para ENVÍO -->
                <div id="formulario-envio" style="display: none; flex-direction: column;">
                    <h4>Datos para el envío</h4>
                    <input type="text" name="direccion" placeholder="Dirección">
                    <input type="text" name="ciudad" placeholder="Ciudad">
                    <input type="text" name="codigo-postal" placeholder="Código Postal">
                    
                    <label for="referencias">Referencias (opcional):</label>
                    <textarea name="referencias" id="referencias" placeholder="Ej: Timbre azul, departamento 2B, etc."></textarea>
                    
                    <label for="fecha-envio">Fecha preferida para el envío:</label>
                    <input type="date" name="fecha-envio" id="fecha-envio">
                </div>

                <h3>4. Metodo de Pago</h3>

                <label>
                    <input type="radio" name="tipo-pago" value="efectivo" onclick="mostrarBoton('efectivo')"> 
                    Efectivo
                </label>
                    
                <label>
                    <input type="radio" name="tipo-pago" value="tarjeta" onclick="mostrarBoton('tarjeta')"> 
                    Tarjeta
                </label>

                <div id="boton-efectivo" style="display: none;">
                    <button type="button" name="pago_efectivo" onclick="pagarEfectivo()">Pagar en efectivo</button>
                </div>

                <div id="boton-tarjeta" style="display: none;">
                    <button type="submit" name="pago_tarjeta">Pagar con tarjeta</button>
                </div>

            </form>

        </div>

    </section>

    <style>
        #formulario-retiro, #formulario-envio {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        #formulario-retiro > *, #formulario-envio > * {
            margin-bottom: 10px;
        }
    </style>

    <script>
        function pagarEfectivo() {
            // Recolectar datos personales
            const nombre = document.querySelector('input[name="nombre-cliente"]').value;
            const apellido = document.querySelector('input[name="apellido-cliente"]').value;
            const telefono = document.querySelector('input[name="telefono-cliente"]').value;
            const dni = document.querySelector('input[name="dni-cliente"]').value;
            
            // Recolectar tipo de entrega
            const tipoEntrega = document.querySelector('input[name="tipo-entrega"]:checked')?.value;
            
            // Recolectar datos según tipo de entrega
            let datosEntrega = '';
            if (tipoEntrega === 'retiro') {
                const fechaRetiro = document.querySelector('input[name="fecha-retiro"]').value;
                const horarioRetiro = document.querySelector('select[name="horario-retiro"]').value;
                datosEntrega = `📍 RETIRO EN LOCAL
Fecha: ${fechaRetiro}
Horario: ${horarioRetiro}`;
            } else if (tipoEntrega === 'envio') {
                const direccion = document.querySelector('input[name="direccion"]').value;
                const ciudad = document.querySelector('input[name="ciudad"]').value;
                const codigoPostal = document.querySelector('input[name="codigo-postal"]').value;
                const referencias = document.querySelector('textarea[name="referencias"]').value;
                const fechaEnvio = document.querySelector('input[name="fecha-envio"]').value;
                datosEntrega = `🚚 ENVÍO A DOMICILIO
Dirección: ${direccion}
Ciudad: ${ciudad}
Código Postal: ${codigoPostal}
Referencias: ${referencias}
Fecha: ${fechaEnvio}`;
            }
            
            // Construir desglose del pedido
            let desglosePedido = '🛒 PEDIDO DEL CLIENTE:\n';
            if (typeof pedidoItems !== 'undefined' && pedidoItems.length > 0) {
                pedidoItems.forEach(item => {
                    desglosePedido += `- x${item.cantidad} ${item.categoria} - ${item.subtotal}\n`;
                });
                desglosePedido += `\n💰 TOTAL: ${totalPedido}`;
            } else {
                desglosePedido += 'Error: No se pudieron cargar los datos del pedido';
            }
            
            // Construir mensaje completo
            const mensaje = `🛒 NUEVO PEDIDO - PAGO EN EFECTIVO

👤 DATOS DEL CLIENTE:
Nombre: ${nombre} ${apellido}
Teléfono: ${telefono}
DNI: ${dni}

${datosEntrega}

${desglosePedido}

💳 MÉTODO DE PAGO: Efectivo`;
            
            // Número de WhatsApp del negocio
            const telefonoNegocio = "543518032679";
            
            // URL de WhatsApp
            const urlWhatsapp = `https://wa.me/${telefonoNegocio}?text=${encodeURIComponent(mensaje)}`;
            
            // Abrir WhatsApp
            window.open(urlWhatsapp, '_blank');
        }

        function mostrarBoton(tipo) {
            document.getElementById('boton-efectivo').style.display = 'none';
            document.getElementById('boton-tarjeta').style.display = 'none';

            if (tipo === 'efectivo') {
                document.getElementById('boton-efectivo').style.display = 'block';
                
            } else if (tipo === 'tarjeta') {
                document.getElementById('boton-tarjeta').style.display = 'block';
            }
        }

        function mostrarFormulario(tipo) {
            // Ocultar ambos formularios primero
            document.getElementById('formulario-retiro').style.display = 'none';
            document.getElementById('formulario-envio').style.display = 'none';
            
            // Mostrar el formulario correspondiente
            if (tipo === 'retiro') {
                document.getElementById('formulario-retiro').style.display = 'flex';
            } else if (tipo === 'envio') {
                document.getElementById('formulario-envio').style.display = 'flex';
            }
        }
    </script>

<?php include('boton-top.php'); ?>
</body>

<?php include('footer.php'); ?>

</html>