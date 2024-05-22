var $top_loop = "";

$(document).ready(function() {
    $(".ul_heading li").click(function(){
        var heading_id = $(this).attr('data-id');
        $('html, body').animate({
            scrollTop: $('.content_item[data-id="'+heading_id+'"]').offset().top
        }, 100);
    }); 
    $('#search_input').on('input',function(e){
        let key = $(this).val();
        key = key.toLowerCase();
        let key_split = key.split(" ");
        let key_list = [];
        key_split.forEach(each_key => {
            if(each_key.length != 0) {
                if(!key_list.includes(each_key)){
                    key_list.push(each_key);
                }
            }
        });
        let num_list = [];
        for(let no = 0;no<heading_list.length;no++) {
            let matched = true;
            for(let i=0;i<key_list.length;i++) {
                if(!heading_list[no].includes(key_list[i])) {
                    matched = false;
                }
            }
            if(matched) {
                num_list.push(no);
            }
        }
        for(let no = 0;no<heading_list.length;no++) {
            let sel_no = no+1;
            if(num_list.includes(no)) {
                $('.ul_heading li[data-id="heading' + sel_no + '"]').css({display: 'block'});
            }
            else {
                $('.ul_heading li[data-id="heading' + sel_no + '"]').css({display: 'none'});
            }
            
        }
    });
    $("#search_input").dblclick(function(){
        $(this).val('');
        for(let no = 0;no<heading_list.length;no++) {
            $('.ul_heading li[data-id="heading' + no + '"]').css({display: 'block'});
        }
    });

    $('#top_input').on('input',function(e){
        $('.content_item').css({'background-color':'white'});
        let key = $(this).val();
        key = key.toLowerCase();
        let key_split = key.split(" ");
        let key_list = [];
        key_split.forEach(each_key => {
            if(each_key.length != 0 || each_key != "") {
                if(!key_list.includes(each_key)){
                    key_list.push(each_key);
                }
            }
        });
        let jqtext = '.content_item:contains("';
        for(let no=0;no<key_list.length-1;no++) {
            jqtext = jqtext + key_list[no] + '"):contains("';
        }
        if(key_list.length>0) {
            jqtext = jqtext + key_list[key_list.length-1] + '")';
        }
        else return;
        $top_loop = $(jqtext);
        if($top_loop.length <= 0) return;
        $top_loop.css({'background-color':'#F0FFFE '});
        $('.top_result').html('1/' + $top_loop.length);
        var heading_id = $top_loop.first().attr('data-id');
        console.log(heading_id);
        $('html, body').animate({
            scrollTop: $('.content_item[data-id="'+heading_id+'"]').offset().top
        }, 100);
    });
});

$.expr[":"].contains = $.expr.createPseudo(function(arg) {
    return function( elem ) {
        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
});