jQuery(document).ready(function($) { 

	$('ul.top-menu li:has(ul.sub-menu) > a').append('<i class="fas fa-chevron-down"></i>');
	$('ul.menu_with_border > li:last-child a').addClass('btn-border');

	$(document).on('click', '.load_vacancies', function(e){
		e.preventDefault();
		let _this = $(this);

		let data = {
			'action': 'load_vacancies',
			'query': _this.attr('data-param-posts'),
			'page': this_page,
			'read_more_text': php_vars_add.read_more_text,
		}

		$.ajax({
			url: '/wp-admin/admin-ajax.php',
			data: data,
			type: 'POST',
			success:function(data){
				if (data) {
					console.log(data)
					$('#response_vacancies').append(data); 
					this_page++;                      
					if (this_page == _this.attr('data-max-pages')) {
						_this.remove();               
					}
				} else {                              
					_this.remove();                   
				}
			}
		});
	});
});
