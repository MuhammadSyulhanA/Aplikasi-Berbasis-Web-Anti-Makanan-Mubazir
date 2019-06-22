// $(document).ready(function(){
// 	if('.content').each(function(){
// 	//bikin tombol read more
// 		$(this).append('<a class="readmore">Read More</a><hr/>');
// 	});
// 	$('.readmore').on('click', function(){
// 		$('.hide').slideUp(500);
// 		$(this).siblings('.hide').slideDown(500);
// 	});
// });
$(document).ready(function() {
        $(".pesan").hide();
        $(".baca_selengkapnya").click(function(){
          $(".pesan").slideDown('slow');
          $(this).hide();
        })
      });
