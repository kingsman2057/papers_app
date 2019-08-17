$(function(){
    var value='';
    var char_len = 15;
    var flag = true;
    var target_key = '---1.機密情報の定義---'
$('input[type=radio][name="what_secret"]').click(function(){
        var full_text_length = quill.getLength(); 
       var full_text = quill.getText(0,full_text_length);

        
        var target_start = full_text.indexOf(target_key);
    
    
    console.log(target_start);
    
    if($(this).prop("checked")){   
        quill.deleteText(target_start,char_len);
        console.log(target_start);
        target_key=$(this).val();
        char_len = $(this).val().length;
 
        quill.insertText(target_start,target_key,{
            'background':'rgba(250,200,200,0.8)'
        });
        setTimeout(function(){
            quill.formatText(target_start,char_len,{
                'background':'rgba(250,200,200,0)'
            });
            },1000
            )
        console.log(target_start);
        console.log(value);
    }else{
        value='';
    }
    
});

})
