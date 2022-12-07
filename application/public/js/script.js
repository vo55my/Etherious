$('#search-button').on('click', function() {
  $.ajax({
    url: 'https://jikan.moe/',
    type: 'get',
    dataType: 'json',
    data: {
      'q': $('#search-input').val()
    },
    success: function(result) {
      console.log(result);
    }
  });
});