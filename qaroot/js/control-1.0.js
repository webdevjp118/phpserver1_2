var $top_loop = "";
var chare_map = [];
const CHARE_DEEP = 6;
const FORCUS_OFFSET = -70;
$(document).ready(function() {
    if(chare_map.length<=0) {
        $(".ul_heading li").each(function(i,obj){
            each_chare = Array(CHARE_DEEP).fill(-1);
            let this_chare = $(this).attr('data-chare');
            this_chare = parseInt(this_chare, 10);
            for(let this_itr = 0;this_itr<this_chare-1;this_itr++) {
                for(let j=i-1;j>=0;j--) {
                    if(chare_map[j][this_itr] >= 0) {
                        each_chare[this_itr] = chare_map[j][this_itr];
                        break;
                    }
                }
            }
            each_chare[this_chare-1] = i;
            chare_map.push(each_chare);
            let chare_html = "";
            for(let j=0;j<CHARE_DEEP;j++) {
                if(each_chare[j]>=0 && each_chare[j] != i) {
                    let heading_id = each_chare[j]+1;
                    chare_html = chare_html + '<span class="chare_name" data-id="' + heading_id + '">'+heading_list[each_chare[j]]+'</span><span calss="chare_sep">&nbsp;/&nbsp;</span>';
                }
            }
            if(chare_html != "") {
                let this_heading_id = i+1;
                $('.content_item[data-id="'+this_heading_id+'"]').before(chare_html);
            }
        });
    }
    
    $(".ul_heading li, .chare_name").click(function(){
        var heading_id = $(this).attr('data-id');
        console.log(heading_id);
        $('html, body').animate({
            scrollTop: $('.content_item[data-id="'+heading_id+'"]').offset().top + FORCUS_OFFSET
        }, 100);
        mark_text($('.content_item[data-id="'+heading_id+'"]'))
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
                $('.ul_heading li[data-id="' + sel_no + '"]').css({display: 'block'});
            }
            else {
                $('.ul_heading li[data-id="' + sel_no + '"]').css({display: 'none'});
            }
            
        }
    });
    $("#search_input").dblclick(function(){
        $(this).val('');
        for(let no = 0;no<heading_list.length;no++) {
            $('.ul_heading li[data-id="' + no + '"]').css({display: 'block'});
        }
    });
    function updateLeft() {
        let key_list = [];
        $('.opt_word[data-checked=true]').each(function() {
            key_list.push($(this).html().toLowerCase());
        });
        let num_list = [];
        for(let no = 0;no<heading_list.length;no++) {
            //self match
            let matched = true;
            for(let i=0;i<key_list.length;i++) {
                if(!heading_list[no].includes(key_list[i])) {
                    matched = false;
                }
            }
            if(matched) {
                if(num_list.indexOf(no) == -1) num_list.push(no);
                for(let uni = 0;uni<CHARE_DEEP;uni++) {
                    if(chare_map[no][uni]>=0) {
                        if(num_list.indexOf(chare_map[no][uni]) == -1) num_list.push(chare_map[no][uni]);
                    }
                }
            }
            else {
                if(chare_map[no][1] >= 0) {
                    //chare match
                    let matched = true;
                    let uni_title = ""
                    for(let uni = 0;uni<CHARE_DEEP;uni++) {
                        if(chare_map[no][uni]>=0) uni_title = uni_title + " " + heading_list[chare_map[no][uni]];
                    }
                    for(let i=0;i<key_list.length;i++) {
                        if(!uni_title.includes(key_list[i])){
                            matched = false;
                        }
                    }
                    if(matched) {
                        if(num_list.indexOf(no) == -1) num_list.push(no);
                        for(let uni = 0;uni<CHARE_DEEP;uni++) {
                            if(chare_map[no][uni]>=0) {
                                if(num_list.indexOf(chare_map[no][uni]) == -1) num_list.push(chare_map[no][uni]);
                            }
                        }
                    }
                }
            }
        }
        for(let no = 0;no<heading_list.length;no++) {
            let sel_no = no+1;
            if(num_list.includes(no)) {
                $('.ul_heading li[data-id="' + sel_no + '"]').show()
            }
            else {
                $('.ul_heading li[data-id="' + sel_no + '"]').hide()
            }
            
        }
    }
    function clearSearch() {
        $("#top_input").val('');
        $('.opt_word').html('').attr('data-checked','false');
        $top_loop = "";
        $('.content_item').css({'background-color':'white'});
        $('.top_result').html('/');
        $('.ul_heading li').show();
    }
    $('.opt_word').dblclick(function(){
        clearSearch();
    });
    $('.opt_word').click(function(){
        if($(this).html() == "") return;
        let checked = $(this).attr('data-checked');
        if(checked == "true") checked = "false"
        else checked = "true"
        $(this).attr('data-checked', checked);
        updateLeft();
    }); 
    function mark_text(jqObj) {
        if(jqObj == null) return;
        if(jqObj.length <= 0) return;
        jqObj.unmark();
        /****************************** */
        var regex, matches,
        // Read the keyword
        keyword = $('#top_input').val(),
        // test for regex (e.g. "/(lorem|ipsum)/gi")
        testRegex = /^\/((?:\\\/|[^\/])+)\/([mig]{0,3})?$/;
        if (testRegex.test(keyword)) {
            matches = testRegex.exec(keyword);
            try {
                regex = new RegExp(matches[1], matches[2]);
            } catch (err) {
                regex = null;
            }
        }

        var options = {};
        if (regex instanceof RegExp) {
            jqObj.markRegExp(regex, options);
        } else {
            jqObj.mark(keyword, options);
        }
        /**************************************** */
    }
    $('#top_input').keydown(function (e) {
        if (e.keyCode == 13) {
            let loopval = $('.top_result').html();
            loopval = loopval.split("/");
            if(loopval.length>=2 && $top_loop.length>0) {
                let jumpno = parseInt(loopval[0], 10) - 1;
                jumpno++;
                let total =  parseInt(loopval[1], 10);
                if(jumpno >= total) jumpno = 0
                loopval = (jumpno+1).toString()  + "/" + total.toString();
                $('.top_result').html(loopval);
                if($top_loop.length > jumpno) {
                    $('html, body').animate({
                        scrollTop: $top_loop.eq(jumpno).offset().top + FORCUS_OFFSET
                    }, 100);
                    mark_text($top_loop.eq(jumpno));
                }
            }
        }
    });
    $('#top_input').mousedown(function(e){ 
        if( e.button == 2 ) { 
            clearSearch();
            return false; 
        } 
        return true; 
    }); 
    $('#top_input').dblclick(function(e){
    });
    function top_input_typing() {
        $('.content_item').css({'background-color':'white'});
        $('.top_result').html('/');
        let key = $("#top_input").val();
        key = key.toLowerCase();
        let key_split = key.split(" ");
        let key_list = [];
        key_split.forEach(each_key => {
            if(each_key.length > 2) {
                if(!key_list.includes(each_key)){
                    key_list.push(each_key);
                }
            }
        });
        if(key_list.length<=0) return;

        $('.opt_word').each(function(i, obj) {
            if(i<key_list.length) {
                $(this).html(key_list[i]);
                $(this).attr('data-checked', 'true');
            }
            else {
                $(this).html('');
                $(this).attr('data-checked', 'false');
            }
        });

        updateLeft();
        
        let jqtext = '.content_item:contains("';
        for(let no=0;no<key_list.length-1;no++) {
            jqtext = jqtext + key_list[no] + '"):contains("';
        }
        jqtext = jqtext + key_list[key_list.length-1] + '")';
        $top_loop = $(jqtext);
        if($top_loop.length <= 0) return;

        $top_loop.css({'background-color':'#F0FFFE '});
        $('.top_result').html('1/' + $top_loop.length);
        var heading_id = $top_loop.first().attr('data-id');
        $('html, body').animate({
            scrollTop: $('.content_item[data-id="'+heading_id+'"]').offset().top + FORCUS_OFFSET
        }, 100);
        mark_text($('.content_item[data-id="'+heading_id+'"]'));
    }
    var top_input_processing = false;
    var SENSE_RPOCESS = 300;
    $('#top_input').on('input',function(e){
        if(top_input_processing) return;
        top_input_processing = true;
        setTimeout(() => {
            top_input_typing();
            top_input_processing = false;
        }, SENSE_RPOCESS);
    });
});

$.expr[":"].contains = $.expr.createPseudo(function(arg) {
    return function( elem ) {
        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
});