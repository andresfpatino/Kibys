jQuery('#billing_cp_lista').on('change', function() {
    let value = jQuery(this).val()
    let post_code = value.split(':')
    jQuery('#billing_postcode').val( post_code[1] )
})

jQuery('#billing_cp_lista_field').each(function() {
    let header_title = jQuery(this)
    header_title.append('<span> Si tu codigo postal no se encuentra en esta lista buscalos <a href="http://visor.codigopostal.gov.co/472/visor/" target="_blank"> Aquí</a> <span>')
})


