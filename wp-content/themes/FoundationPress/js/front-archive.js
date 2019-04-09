var tagArray= [];
$( document ).ready(function() {
    
    var tagArrayDisplay = [];
    $('.post-card_tag').each(function(){
        if(tagArrayDisplay.indexOf($(this).text())== -1){
            tagArrayDisplay.push($(this).text());
        }
      
    })

    tagArrayDisplay.forEach(function(value){
        let tagButton = '';
        tagButton = ` <span  class="${value} front-header_filters--tag">${value}</span> `;
        $('.front-header_filters').append(tagButton);
    });
    $(".front-header_filters--tag").on('click',function(){
        tagInsert($(this));
      });
});

function tagInsert(element){
    if ( $( element ).hasClass( "tag-active" ) ) {
        $( element ).removeClass("tag-active");
    }
    else{
        $( element ).addClass("tag-active");
    }
    tag=$(element).text()
    tag=tag.replace(/ /g, '_');
    if(tagArray.indexOf(tag) >-1){
        tagArray.splice($.inArray(tag, tagArray),1);

    }
    else{
        tagArray.push(tag);
    }
    filtering();
}

function filtering(){
    if(tagArray.length==0){
        $('.post-card').show();
    }else{
        $('.post-card').hide();
        $('.post-card').each(function(){
            var self=this;
            tagArray.forEach(function(value){
               
              if(  $(self).hasClass(value)== true){
                  $(self).show();
              }
            });
           
    
    
        });
    }
    
}