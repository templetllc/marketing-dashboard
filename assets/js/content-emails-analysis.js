$(function(){

    init();

    $('.btnAnalysis').on('click', function(){

        let _type = $(this).data('type');

        if($('#' + _type).css('display') == 'block'){
            $(this).prop("checked", false);
            $('.emails-container').find('.btn-img').addClass('border-normal');
            $('.icon-performance').addClass('d-none');
            $('.type-analysis').hide();
        } else {
            $('.type-analysis').hide();
            $('#' + _type).show();
            $('#' + _type).removeClass('d-none');

            if(_type == 'byContenttype'){
                $('.emails-container').find('.btn-img').removeClass('border-normal');
                $('.icon-performance').addClass('d-none');
                $('.icon-performance').removeClass('d-block');
            } else if(_type == 'byPerformance') {
                $('.emails-container').find('.btn-img').addClass('border-normal');
                $('.icon-performance').removeClass('d-none');
                $('.icon-performance').addClass('d-block');
            };
        };
    });

    $('body').on('click', '.email-item', function(){

        if($(this).hasClass('btn-activo')){
            $(this).toggleClass('btn-activo');    
        } else {
            //Count Images active
            let count = $('.emails-container .btn-activo').length;
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

        if($('.emails-container .btn-activo').length == 0){
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

    $('#dropCampaign').on('change', function(){
        let _url = "./include/getEmails.php";

        let dataString = 'campaign='+$(this).val();

        $('.emails-container').empty();

        let accordion_combined = $('#send-combined').find('.accordion-button');
        let target_combined = accordion_combined.attr('data-bs-target');
        accordion_combined.prop('disabled', true);
        accordion_combined.addClass('collapsed');
        $(target_combined).removeClass('show');

        let loading = '<div class="d-flex justify-content-center">';
        loading += '<div class="spinner-grow text-warning" style="width: 3rem; height: 3rem;" role="status">';
        loading += '<span class="sr-only"></span>';
        loading += '</div>';
        loading += '</div>';

        $('.emails-container').html(loading);

        setTimeout(function(){
            $.ajax({
                url: _url,
                type: 'GET',
                async: false,
                data: dataString,
                success: function (response) {
                    
                    let data = jQuery.parseJSON(response);

                    //dropCampaigns(data.campaigns);

                    $('.emails-container').empty();
                    $('.emails-container').html(data.content);

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
    let _url = "./include/getEmails.php";

    $.ajax({
        url: _url,
        type: 'GET',
        async: false,
        success: function (response) {
            
            let data = jQuery.parseJSON(response);

            dropCampaigns(data.campaigns);

            $('.emails-container').empty();
            $('.emails-container').html(data.content);

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
};

var dropCampaigns = function(campaigns){

    let dropCampaign = '#dropCampaign';

    $(dropCampaign).empty();
    $(dropCampaign).append('<option value="" selected>By campaign</option>');

    campaigns.forEach(function(campaign, index){
        let _select = '';
        if(campaign.selected == 1){
            _select = "selected";
        }
        $(dropCampaign).append('<option value="' + campaign.campaign + '" '+_select+'>' + campaign.campaign + '</option>');
    });
    
};

var getData = function(){
    
    let _url = "./include/getEmailsData.php";

    let _selectEmails = '';

    $(".emails-container").find(".btn-activo").each(function(){
        _selectEmails += $(this).data('email_id') + ';';
    });
    
    let dataString = "emails="+_selectEmails;
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

            container.find('#combine-delivered').text(data.deliveries);
            container.find('#combine-open').text(data.opens);

            let openPct = Number(data.openPct * 100).toFixed(2);
            container.find('#combine-rate-open').text( openPct + '%');

            let opensBenchmark = (Math.round(data.opensBenchmark * 100) / 100).toFixed(0);
            container.find('#combine-open_b').text(opensBenchmark);

            let vsOpenBenchmarkRate = Number(data.vsOpenBenchmarkRate * 100).toFixed(2);
            container.find('#combine-rate-open_b').text(vsOpenBenchmarkRate + '%');
            if(vsOpenBenchmarkRate > 0){
                container.find('#combine-open_b_icon').attr("src", green_icon);
                container.find('#combine-rate-open_b').addClass('text-green');
                container.find('#combine-rate-open_b').removeClass('text-red');
            } else if(vsOpenBenchmarkRate < 0) {
                container.find('#combine-open_b_icon').attr("src", red_icon);
                container.find('#combine-rate-open_b').removeClass('text-green');
                container.find('#combine-rate-open_b').addClass('text-red');
            } else {
                container.find('#combine-open_b_icon').attr("src", gray_icon);
                container.find('#combine-rate-open_b').removeClass('text-green');
                container.find('#combine-rate-open_b').removeClass('text-red');
            }

            let opensHistory = (Math.round(data.opensHistory * 100) / 100).toFixed(0);
            container.find('#combine-open_h').text(opensHistory);

            let vsOpenHistoricRate = Number(data.vsOpenHistoricRate * 100).toFixed(2);
            container.find('#combine-rate-open_h').text(vsOpenHistoricRate + '%');
            if(vsOpenHistoricRate > 0){
                container.find('#combine-open_h_icon').attr("src", green_icon);
                container.find('#combine-rate-open_h').addClass('text-green');
                container.find('#combine-rate-open_h').removeClass('text-red');
            } else if(vsOpenHistoricRate < 0){
                container.find('#combine-open_h_icon').attr("src", red_icon);
                container.find('#combine-rate-open_h').removeClass('text-green');
                container.find('#combine-rate-open_h').addClass('text-red');
            } else {
                container.find('#combine-open_h_icon').attr("src", gray_icon);
                container.find('#combine-rate-open_h').removeClass('text-green');
                container.find('#combine-rate-open_h').removeClass('text-red');
            }
            
            let clicks = (Math.round(data.clicks * 100) / 100).toFixed(0);
            container.find('#combine-click').text(clicks);

            let clicksPct = Number(data.clicksPct * 100).toFixed(2);
            container.find('#combine-rate-click').text(clicksPct + '%');

            let clicksBenchmark = (Math.round(data.clicksBenchmark * 100) / 100).toFixed(0);
            container.find('#combine-click_b').text(clicksBenchmark);

            let vsClickBenchmarkRate = Number(data.vsClickBenchmarkRate * 100).toFixed(2);
            container.find('#combine-rate-click_b').text(vsClickBenchmarkRate + '%');
            if(vsClickBenchmarkRate > 0){
                container.find('#combine-click_b_icon').attr("src", green_icon);
                container.find('#combine-rate-click_b').addClass('text-green');
                container.find('#combine-rate-click_b').removeClass('text-red');
            } else if(vsClickBenchmarkRate < 0) {
                container.find('#combine-click_b_icon').attr("src", red_icon);
                container.find('#combine-rate-click_b').removeClass('text-green');
                container.find('#combine-rate-click_b').addClass('text-red');
            } else {
                container.find('#combine-click_b_icon').attr("src", gray_icon);
                container.find('#combine-rate-click_b').removeClass('text-green');
                container.find('#combine-rate-click_b').removeClass('text-red');
            }

            let clicksHistory = (Math.round(data.clicksHistory * 100) / 100).toFixed(0);
            container.find('#combine-click_h').text(clicksHistory);

            let vsClicksHistoricRate = Number(data.vsClicksHistoricRate * 100).toFixed(2);
            container.find('#combine-rate-click_h').text(vsClicksHistoricRate  + '%');
            if(vsClicksHistoricRate > 0){
                container.find('#combine-click_h_icon').attr("src", green_icon);
                container.find('#combine-rate-click_h').addClass('text-green');
                container.find('#combine-rate-click_h').removeClass('text-red');
            } else if(vsClicksHistoricRate < 0) {
                container.find('#combine-click_h_icon').attr("src", red_icon);
                container.find('#combine-rate-click_h').removeClass('text-green');
                container.find('#combine-rate-click_h').addClass('text-red');
            } else {
                container.find('#combine-click_h_icon').attr("src", gray_icon);
                container.find('#combine-rate-click_h').removeClass('text-green');
                container.find('#combine-rate-click_h').removeClass('text-red');
            }

            return true;
        },
        error:function(response){
            console.log(response);
        }
    });

};



