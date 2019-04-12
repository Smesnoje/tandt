$( document ).ready(function() {

if($('.menu-color-blob').text().indexOf('Dark')>0){
    $('.gheader').addClass('ghdark');
}
else{
    $('.gheader').addClass('ghlight');
}
});