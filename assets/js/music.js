$('.listen-sound').click(function(e){
    e.preventDefault();

    var $id = $(this).data('id');
    var audio = document.getElementById('audio');

    var $sound_src = $(this).data('src');    
    $(audio).find('source').attr('src',$sound_src);

    audio.load(); // carrega a música na playlist
    audio.play(); // toca a música

    //update o valor de quantidade de cliques


    $.ajax({
        url: "index.php/update_qtde/"+$id,        
        success: function(html){
            
        }
      });

});

