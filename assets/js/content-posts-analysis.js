$(function(){

    init();

    $('.btnAnalysis').on('click', function(){

        let _type = $(this).data('type');

        if($('#' + _type).css('display') == 'block'){
            $(this).prop("checked", false);
            $('.posts-container').find('.btn-img > img').addClass('border-0');
            $('.icon-performance').addClass('d-none');
            $('.type-analysis').hide();
        } else {
            $('.type-analysis').hide();
            $('#' + _type).show();
            $('#' + _type).removeClass('d-none');

            if(_type == 'byContenttype'){
                $('.posts-container').find('.btn-img > img').removeClass('border-0');
                $('.icon-performance').addClass('d-none');
                $('.icon-performance').removeClass('d-block');
            } else if(_type == 'byPerformance') {
                $('.posts-container').find('.btn-img > img').addClass('border-0');
                $('.icon-performance').removeClass('d-none');
                $('.icon-performance').addClass('d-block');
            };
        };
    });

    $('body').on('click', '.post-item', function(){

        if($(this).hasClass('btn-activo')){
            $(this).toggleClass('btn-activo'); 
        } else {
            //Count Images active
            let count = $('.posts-container .btn-activo').length;
            if(count < 5){
                $(this).toggleClass('btn-activo');
            } else {
                alert('You can select only 5 items.')
                return false;
            };
        };

        let accordion_combined = $('#send-combined').find('.accordion-button');
        let target_combined = accordion_combined.attr('data-bs-target');

        accordion_combined.prop('disabled', true);
            accordion_combined.addClass('collapsed');
            $(target_combined).removeClass('show');

        if($('.posts-container .btn-activo').length == 0){
            $('.btn-calculate').prop('disabled', true);
        } else {
            $('.btn-calculate').prop('disabled', false);
        };
    });

    $('.btn-calculate').on('click', function(){
        let accordion_combined = $('#send-combined').find('.accordion-button');
        let target_combined = accordion_combined.attr('data-bs-target');

        $('.combined-loading').removeClass('d-none');
        $('#combined-stats').addClass('d-none');
        $(this).prop('disabled', true);

        setTimeout(function(){
            getData();
        }, 100);

        accordion_combined.prop('disabled', false);
        accordion_combined.removeClass('collapsed');
        $(target_combined).addClass('show');
        $(this).prop('disabled', false);
    });

    $('#dropPlatform').on('change', function(){
        let _url = "./include/getPosts.php";

        let dataString = 'platform='+$(this).val();

        $('.posts-container').empty();

        let accordion_combined = $('#send-combined').find('.accordion-button');
        let target_combined = accordion_combined.attr('data-bs-target');
        accordion_combined.prop('disabled', true);
        accordion_combined.addClass('collapsed');
        $(target_combined).removeClass('show');

        let loading = '<div class="d-flex justify-content-center">';
        loading += '<div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">';
        loading += '<span class="sr-only"></span>';
        loading += '</div>';
        loading += '</div>';

        $('.posts-container').html(loading);

        setTimeout(function(){
            $.ajax({
                url: _url,
                type: 'GET',
                async: false,
                data: dataString,
                success: function (response) {
                    
                    let data = jQuery.parseJSON(response);

                    //dropPlatforms(data.platforms);

                    $('.posts-container').empty();
                    $('.posts-container').html(data.content);

                    let legend_type = '';
                    $('.type-content').empty();
                    data.types.forEach(function(content_type, index){
                        legend_type +=  content_type.legend;
                    });
                    $('.type-content').html(legend_type);

                    return true;
                },
                error:function(response){
                    console.log(response);
                }
            });
        }, 100);

    });

});

var init = function(){
    let _url = "./include/getPosts.php";

    $.ajax({
        url: _url,
        type: 'GET',
        async: false,
        success: function (response) {
            
            let data = jQuery.parseJSON(response);

            dropPlatforms(data.platforms);

            $('.posts-container').empty();
            $('.posts-container').html(data.content);

            let legend_type = '';
            $('.type-content').empty();
            data.types.forEach(function(content_type, index){
                legend_type +=  content_type.legend;
            });
            $('.type-content').html(legend_type);

            //console.log(data.errors);

            return true;
        },
        error:function(response){
            console.log(response);
        }
    });
};

var dropPlatforms = function(platforms){

    let dropPlatform = '#dropPlatform';

    $(dropPlatform).empty();
    $(dropPlatform).append('<option value="" selected>By platform</option>');

    platforms.forEach(function(platform, index){
        let _select = '';
        if(platform.selected == 1){
            _select = "selected";
        }
        $(dropPlatform).append('<option value="' + platform.platform + '" '+_select+'>' + platform.platform + '</option>');
    });
    
};

var getData = function(){
    
    let _url = "./include/getPostsData.php";

    let _selectPosts = '';

    $(".posts-container").find(".btn-activo").each(function(){
        _selectPosts += $(this).data('post_id') + ';';
    });
    
    let dataString = "posts="+_selectPosts;
    let green_icon = "./assets/img/icos/ico-up-circle-green.svg";
    let red_icon = "./assets/img/icos/ico-down-circle-red.svg";
    let gray_icon = "./assets/img/icos/ico-arrow-down-circle-gray.svg";

    $.ajax({
        url: _url,
        type: 'GET',
        async: false,
        data: dataString,
        beforeSend: function() {
            $('.combined-loading').removeClass('d-none');
            $('#combined-stats').addClass('d-none');
        },
        complete: function(){
            $('.combined-loading').addClass('d-none');
            $('#combined-stats').removeClass('d-none');
        },
        success: function (response) {
            
            let data = jQuery.parseJSON(response);
            let container = $('#combined-stats');

            //Reach
            container.find('#reach').text(data.reach);
            let reachBenchmark = Number(data.reachBenchmark).toFixed(0);
            container.find('#reach_b').text(reachBenchmark);
            let vsReachBenchmarkRate = Number(data.vsReachBenchmarkRate * 100).toFixed(2);
            container.find('#reach_b_rate').text(vsReachBenchmarkRate + '%');
            if(vsReachBenchmarkRate > 0){
                container.find('#reach_b_icon').attr("src", green_icon);
                container.find('#reach_b_rate').addClass('text-green');
                container.find('#reach_b_rate').removeClass('text-red');
            } else if(vsReachBenchmarkRate < 0){
                container.find('#reach_b_icon').attr("src", red_icon);
                container.find('#reach_b_rate').removeClass('text-green');
                container.find('#reach_b_rate').addClass('text-red');
            } else {
                container.find('#reach_b_icon').attr("src", gray_icon);
                container.find('#reach_b_rate').removeClass('text-green');
                container.find('#reach_b_rate').removeClass('text-red');
            }

            container.find('#reach_h').text(data.reachHistory);
            let vsReachHistoricRate = Number(data.vsReachHistoricRate * 100).toFixed(2);
            container.find('#reach_h_rate').text(vsReachHistoricRate + '%');
            if(vsReachHistoricRate > 0){
                container.find('#reach_h_icon').attr("src", green_icon);
                container.find('#reach_h_rate').addClass('text-green');
                container.find('#reach_h_rate').removeClass('text-red');
            } else if(vsReachHistoricRate < 0){
                container.find('#reach_h_icon').attr("src", red_icon);
                container.find('#reach_h_rate').removeClass('text-green');
                container.find('#reach_h_rate').addClass('text-red');
            } else {
                container.find('#reach_h_icon').attr("src", gray_icon);
                container.find('#reach_h_rate').removeClass('text-green');
                container.find('#reach_h_rate').removeClass('text-red');
            }



            //Likes
            container.find('#like').text(data.likes);
            let likesBenchmark = Number(data.likesBenchmark).toFixed(0);
            container.find('#like_b').text(likesBenchmark);
            let vsLikesBenchmarkRate = Number(data.vsLikesBenchmarkRate * 100).toFixed(2);
            container.find('#like_b_rate').text(vsLikesBenchmarkRate + '%');
            if(vsLikesBenchmarkRate > 0){
                container.find('#like_b_icon').attr("src", green_icon);
                container.find('#like_b_rate').addClass('text-green');
                container.find('#like_b_rate').removeClass('text-red');
            } else if(vsLikesBenchmarkRate < 0){
                container.find('#like_b_icon').attr("src", red_icon);
                container.find('#like_b_rate').removeClass('text-green');
                container.find('#like_b_rate').addClass('text-red');
            } else {
                container.find('#like_b_icon').attr("src", gray_icon);
                container.find('#like_b_rate').removeClass('text-green');
                container.find('#like_b_rate').removeClass('text-red');
            }

            container.find('#like_h').text(data.likesHistory);
            let vsLikesHistoricRate = Number(data.vsLikesHistoricRate * 100).toFixed(2);
            container.find('#like_h_rate').text(vsLikesHistoricRate + '%');
            if(vsLikesHistoricRate > 0){
                container.find('#like_h_icon').attr("src", green_icon);
                container.find('#like_h_rate').addClass('text-green');
                container.find('#like_h_rate').removeClass('text-red');
            } else if(vsLikesHistoricRate < 0){
                container.find('#like_h_icon').attr("src", red_icon);
                container.find('#like_h_rate').removeClass('text-green');
                container.find('#like_h_rate').addClass('text-red');
            } else {
                container.find('#like_h_icon').attr("src", gray_icon);
                container.find('#like_h_rate').removeClass('text-green');
                container.find('#like_h_rate').removeClass('text-red');
            }


            //Comments
            container.find('#comments').text(data.comments);
            let commentsBenchmark = Number(data.commentsBenchmark).toFixed(0);
            container.find('#comments_b').text(commentsBenchmark);
            let vsCommentBenchmarkRate = Number(data.vsCommentBenchmarkRate * 100).toFixed(2);
            container.find('#comments_b_rate').text(vsCommentBenchmarkRate + '%');
            if(vsCommentBenchmarkRate > 0){
                container.find('#comments_b_icon').attr("src", green_icon);
                container.find('#comments_b_rate').addClass('text-green');
                container.find('#comments_b_rate').removeClass('text-red');
            } else if(vsCommentBenchmarkRate < 0){
                container.find('#comments_b_icon').attr("src", red_icon);
                container.find('#comments_b_rate').removeClass('text-green');
                container.find('#comments_b_rate').addClass('text-red');
            } else {
                container.find('#comments_b_icon').attr("src", gray_icon);
                container.find('#comments_b_rate').removeClass('text-green');
                container.find('#comments_b_rate').removeClass('text-red');
            }

            container.find('#comments_h').text(data.commentsHistory);
            let vsCommentHistoricRate = Number(data.vsCommentHistoricRate * 100).toFixed(2);
            container.find('#comments_h_rate').text(vsCommentHistoricRate + '%');
            if(vsCommentHistoricRate > 0){
                container.find('#comments_h_icon').attr("src", green_icon);
                container.find('#comments_h_rate').addClass('text-green');
                container.find('#comments_h_rate').removeClass('text-red');
            } else if(vsCommentHistoricRate < 0){
                container.find('#comments_h_icon').attr("src", red_icon);
                container.find('#comments_h_rate').removeClass('text-green');
                container.find('#comments_h_rate').addClass('text-red');
            } else {
                container.find('#comments_h_icon').attr("src", gray_icon);
                container.find('#comments_h_rate').removeClass('text-green');
                container.find('#comments_h_rate').removeClass('text-red');
            }


            //Shares
            container.find('#shares').text(data.shares);
            let sharesBenchmark = Number(data.sharesBenchmark).toFixed(0);
            container.find('#shares_b').text(sharesBenchmark);
            let vsSharesBenchmarkRate = Number(data.vsSharesBenchmarkRate * 100).toFixed(2);
            container.find('#shares_b_rate').text(vsSharesBenchmarkRate + '%');
            if(vsSharesBenchmarkRate > 0){
                container.find('#shares_b_icon').attr("src", green_icon);
                container.find('#shares_b_rate').addClass('text-green');
                container.find('#shares_b_rate').removeClass('text-red');
            } else if(vsSharesBenchmarkRate < 0){
                container.find('#shares_b_icon').attr("src", red_icon);
                container.find('#shares_b_rate').removeClass('text-green');
                container.find('#shares_b_rate').addClass('text-red');
            } else {
                container.find('#shares_b_icon').attr("src", gray_icon);
                container.find('#shares_b_rate').removeClass('text-green');
                container.find('#shares_b_rate').removeClass('text-red');
            }

            container.find('#shares_h').text(data.sharesHistory);
            let vsSharesHistoricRate = Number(data.vsSharesHistoricRate * 100).toFixed(2);
            container.find('#shares_h_rate').text(vsSharesHistoricRate + '%');
            if(vsSharesHistoricRate > 0){
                container.find('#shares_h_icon').attr("src", green_icon);
                container.find('#shares_h_rate').addClass('text-green');
                container.find('#shares_h_rate').removeClass('text-red');
            } else if(vsSharesHistoricRate < 0){
                container.find('#shares_h_icon').attr("src", red_icon);
                container.find('#shares_h_rate').removeClass('text-green');
                container.find('#shares_h_rate').addClass('text-red');
            } else {
                container.find('#shares_h_icon').attr("src", gray_icon);
                container.find('#shares_h_rate').removeClass('text-green');
                container.find('#shares_h_rate').removeClass('text-red');
            }


            

            return true;
        },
        error:function(response){
            console.log(response);
        }
    });

};