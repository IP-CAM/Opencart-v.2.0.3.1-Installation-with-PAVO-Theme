<?php
// Text
$_['text_title']				= 'Factura Klarna - Pague dentro de 14 días';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna Invoice requiere información adicional antes de poder procesar su pedido.';
$_['text_male']					= 'Masculino';
$_['text_female']				= 'Femenino';
$_['text_year']					= 'Año';
$_['text_month']				= 'Mes';
$_['text_day']					= 'Dia';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Genero';
$_['entry_pno']					= 'Numero personal';
$_['entry_dob']					= 'Fecha de nacimiento';
$_['entry_phone_no']			= 'Número de teléfono';
$_['entry_street']				= 'Calle';
$_['entry_house_no']			= 'Casa No.';
$_['entry_house_ext']			= 'Casa Ext.';
$_['entry_company']				= 'Número de registro de la compañía';

// Help
$_['help_pno']					= 'Ingrese su número de Seguro Social aquí.';
$_['help_phone_no']				= 'Por favor ingrese su numero telefonico.';
$_['help_street']				= 'Tenga en cuenta que la entrega sólo puede tener lugar a la dirección registrada al pagar con Klarna.';
$_['help_house_no']				= 'Por favor ingrese su numero de casa.';
$_['help_house_ext']			= 'Por favor, envíe su extensión de la casa aquí. P.ej. A, B, C, Rojo, Azul ect.';
$_['help_company']				= 'Por favor introduzca el número de registro de su empresa';

// Error
$_['error_deu_terms']			= 'Usted debe aceptar la política de privacidad de Klarna (Datenschutz)';
$_['error_address_match']		= 'Las direcciones de facturación y envío deben coincidir si desea utilizar la factura de Klarna';
$_['error_network']				= 'Se ha producido un error al conectar a Klarna. Por favor, inténtelo de nuevo más tarde.';