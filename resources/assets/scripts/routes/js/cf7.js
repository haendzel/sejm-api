if( $('form.wpcf7-form').length ) {

  $('form.wpcf7-form .form-input').each(function(){
    var span = $(this).find('span.wpcf7-form-control-wrap');
    var label = $(this).find('label');

    span.addClass('form-floating');

    label.appendTo(span);
  });
}
