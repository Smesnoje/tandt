$( document ).ready(function() {
    var tagArray = [];
    $('.post_tag').each(function(){
        if(tagArray.indexOf($(this).text())== -1){
            tagArray.push($(this).text());
        }
      
    })

    tagArray.forEach(function(value){
        let tagButton = '';
        tagButton = `<a href="#" class="${value}">${value}</a> `;
        $('.filter_tags').append(tagButton);
       
        console.log(value);
    });
});