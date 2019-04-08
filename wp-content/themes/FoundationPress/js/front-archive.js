var tagArray= [];
$( document ).ready(function() {
    var tagArrayDisplay = [];
    $('.post_tag').each(function(){
        if(tagArrayDisplay.indexOf($(this).text())== -1){
            tagArrayDisplay.push($(this).text());
        }
      
    })

    tagArrayDisplay.forEach(function(value){
        let tagButton = '';
        tagButton = `<a href="#" onclick="tagInsert('${value}')" class="${value}">${value}</a> `;
        $('.filter_tags').append(tagButton);
    });
});

function tagInsert(tag){

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
        $('.post_card').show();
    }else{
        $('.post_card').hide();
        $('.post_card').each(function(){
            var self=this;
            tagArray.forEach(function(value){
               
              if(  $(self).hasClass(value)== true){
                  $(self).show();
              }
            });
           
    
    
        });
    }
    
}