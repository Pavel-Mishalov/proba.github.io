import $ from 'jquery';

$('.input__file-input[type="file"]').bind('change',function(){
	var abs_path = $(this).val().split('\\');
	$(this).parent().find('.input__file-input:not([type="file"])').text( abs_path[ abs_path.length - 1 ] );
});

$('.input__file-input:not([type="file"])').click(function(){
	$(this).parent().find('.input__file-input[type="file"]').click();
});