<?php
if(session_id() == '')
session_start();

function lang($phrase){
	
	if(!isset($_SESSION['lang'])){
		$_SESSION['lang']='es'; //idioma per defecte
	}
	
	//ES
	if($_SESSION['lang']=='es'){
    $lang = array(
        'ABOUT_US' => 'Acerca de nosotros',
				'ACTION' => 'Acci&oacute;n',
        'ADD_TO_CART' => 'A&ntilde;adir al carro',
        'BACK_TO_INDEX' => 'Volver al inicio',
        'CART' => 'Carro de la compra',
        'CART_EMPTIED' => 'Tu carrito se ha vaciado correctamente.',
				'CHECK_OUT' => 'Finalizar pedido',
        'CONTACT' => 'Contacto',
        'COPYRIGHT' => 'Copyright &copy; 2013 Innovate PC. Todos los derechos reservados.',
				'DELETE' => 'Eliminar',
				'DISCOUNT' => 'Descuento',
				'EMPTY_CART' => 'Vaciar carrito',
				'EMPTY_CART_DESC' => 'Tu carrito est&aacute; vac&iacute;o. A&ntilde;ade productos para comenzar tu pedido.',
        'FOR' => 'para',
        'HOME' => 'Inicio',
				'IMAGE' => 'Imagen',
        'INFO_NOT_AVAILABLE' => 'Informaci&oacute;n no disponible',
        'MANUFACTURERS' => 'Fabricantes',
        'MOST_SOLD' => 'Lo m&aacute;s vendido',
        'MY_CONFIGURATION' => 'Mi configuraci&oacute;n',
        'NEXT' => 'Siguiente',
        'OUTSTANDING_OFFERS' => 'Ofertas destacadas',
        'PASSWORD' => 'Clave',
        'PREV' => 'Anterior',
        'PRICE' => 'Precio',
				'PRODUCT' => 'Producto',
				'PRODUCT_ADDED_TO_CART' => 'Producto a&ntilde;adido al carrito correctamente.',
				'PRODUCT_DELETED_FROM_CART' => 'Producto eliminado del carrito correctamente.',
        'PRODUCT_DESC' => 'Descripci&oacute;n del producto',
        'PRODUCTS' => 'Productos',
        'PRODUCTS_NOT_AVAILABLE_FOR_THIS_CATEGORY' => 'Actualmente no hay productos disponibles para esta categor&iacute;a.',
        'PROFILE' => 'Perfil',
				'QUANTITY' => 'Cantidad',
        'RELATED_PRODUCTS' => 'Productos relacionados',
        'SEARCH' => 'Buscar',
        'SEARCH_RESULTS' => 'Resultados de la b&uacute;squeda',
        'SIGN_IN' => 'Identificarse',
        'SIGN_UP' => 'Registrarse',
        'TERMS_OF_USE' => 'Condiciones de uso',
        'TERMS_OF_USE_TITLE' => 'Condiciones de uso del servicio',
        'TOTAL' => 'Total',
        'VIEW_CART' => 'Ver el carrito',
        'VIEW_MORE_INFO' => 'Ver m&aacute;s informaci&oacute;n',
        'VIEW_PROFILE' => 'Ver perfil',
        'YOU_ARE_HERE' => 'Est&aacute;s aqu&iacute;',
    );
    return $lang[$phrase];
  }
  
  
  
  //CA_ES
	if($_SESSION['lang']=='ca'){
    $lang = array(
				'ABOUT_US' => 'Sobre nosaltres',
				'ACTION' => 'Acci&oacute;',
				'ADD_TO_CART' => 'Afegir al carro',
				'BACK_TO_INDEX' => 'Tornar a l\'inici',
				'CART' => 'Carro de la compra',
        'CART_EMPTIED' => 'El teu carrito s\'ha buidat correctament.',
				'CHECK_OUT' => 'Finalitzar comanda',
				'CONTACT' => 'Contacte',
				'COPYRIGHT' => 'Copyright &copy; 2013 Innovate PC. Tots els drets reservats.',
				'DELETE' => 'Eliminar',
				'DISCOUNT' => 'Descompte',
				'EMPTY_CART' => 'Buidar carrito',
				'EMPTY_CART_DESC' => 'El teu carrito est&agrave; buit. Afegeix productes per comen&ccedil;ar la teva comanda.',
        'FOR' => 'per a',
				'HOME' => 'Inici',
				'IMAGE' => 'Imatge',
				'INFO_NOT_AVAILABLE' => 'Informaci&oacute; no disponible',
				'MANUFACTURERS' => 'Fabricants',
				'MOST_SOLD' => 'El m&eacute;s venut',
        'MY_CONFIGURATION' => 'La meva configuraci&oacute;',
				'NEXT' => 'Seg&uuml;ent',
				'OUTSTANDING_OFFERS' => 'Ofertes destacades',
				'PASSWORD' => 'Clau',
				'PREV' => 'Anterior',
        'PRICE' => 'Preu',
				'PRODUCT' => 'Producte',
				'PRODUCT_ADDED_TO_CART' => 'Producte afegit al carrito correctament.',
				'PRODUCT_DELETED_FROM_CART' => 'Producte eliminat del carrito correctament.',
				'PRODUCT_DESC' => 'Descripci&oacute; del producte',
				'PRODUCTS' => 'Productes',
				'PRODUCTS_NOT_AVAILABLE_FOR_THIS_CATEGORY' => 'Actualment no hi ha productes disponibles per a aquesta categoria.',
        'PROFILE' => 'Perfil',
				'QUANTITY' => 'Quantitat',
				'RELATED_PRODUCTS' => 'Productes relacionats',
				'SEARCH' => 'Cercar',
        'SEARCH_RESULTS' => 'Resultats de la cerca',
				'SIGN_IN' => 'Identificar-se',
				'SIGN_UP' => 'Registrarse',
				'TERMS_OF_USE' => 'Condicions d\'&uacute;s',
				'TERMS_OF_USE_TITLE' => 'Condicions d\'&uacute;s del servei',
        'TOTAL' => 'Total',
				'VIEW_CART' => 'Veure el carrito',
				'VIEW_MORE_INFO' => 'Veure m&eacute;s informaci&oacute;',
        'VIEW_PROFILE' => 'Veure perfil',
				'YOU_ARE_HERE' => 'Est&agrave;s aqu&iacute;',
    );
    return $lang[$phrase];
  }
  
  
  
  //EN
	if($_SESSION['lang']=='en'){
    $lang = array(
				'ABOUT_US' => 'About us',
				'ACTION' => 'Action',
				'ADD_TO_CART' => 'Add to cart',
				'BACK_TO_INDEX' => 'Back to index',
				'CART' => 'Shopping cart',
        'CART_EMPTIED' => 'Your cart has been emptied successfully.',
				'CHECK_OUT' => 'Check out',
				'CONTACT' => 'Contact',
				'COPYRIGHT' => 'Copyright &copy; 2013 Innovate PC. All rights reserved.',
				'DELETE' => 'Delete',
				'DISCOUNT' => 'Discount',
				'EMPTY_CART' => 'Empty cart',
				'EMPTY_CART_DESC' => 'Your cart is empty. Add products to request your order.',
        'FOR' => 'for',
				'HOME' => 'Home',
				'IMAGE' => 'Image',
				'INFO_NOT_AVAILABLE' => 'Information not available',
				'MANUFACTURERS' => 'Manufacturers',
				'MOST_SOLD' => 'Most sold',
        'MY_CONFIGURATION' => 'My configuration',
				'NEXT' => 'Next',
				'OUTSTANDING_OFFERS' => 'Outstanding offers',
				'PASSWORD' => 'Password',
				'PREV' => 'Previous',
        'PRICE' => 'Price',
				'PRODUCT' => 'Product',
				'PRODUCT_ADDED_TO_CART' => 'Product added to the cart successfully.',
				'PRODUCT_DELETED_FROM_CART' => 'Product deleted from the cart successfully.',
				'PRODUCT_DESC' => 'Product description',
				'PRODUCTS' => 'Products',
				'PRODUCTS_NOT_AVAILABLE_FOR_THIS_CATEGORY' => 'There are no products available for this category.',
        'PROFILE' => 'Profile',
				'QUANTITY' => 'Quantity',
				'RELATED_PRODUCTS' => 'Related products',
				'SEARCH' => 'Search',
        'SEARCH_RESULTS' => 'Search results',
				'SIGN_IN' => 'Sign In',
				'SIGN_UP' => 'Sign Up',
				'TERMS_OF_USE' => 'Terms of use',
				'TERMS_OF_USE_TITLE' => 'Terms of use of the service',
        'TOTAL' => 'Total',
				'VIEW_CART' => 'View cart',
				'VIEW_MORE_INFO' => 'View more information',
        'VIEW_PROFILE' => 'View profile',
				'YOU_ARE_HERE' => 'You are here',
    );
    return $lang[$phrase];
  }
}

?>