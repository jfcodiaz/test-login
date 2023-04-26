(($) => {
  $('form').on('submit', (e) => {
    e.preventDefault();
    const user = $('#exampleInputEmail1').val();
    const pass = $('#exampleInputPassword1').val()
    const url = '/?action=login'
    $.post('/?action=login', {user, pass}).done((data) => {
      if(!data.success) {
        $('.alert').show('slow').html(data.error);
      }
    });
  });
})(jQuery);