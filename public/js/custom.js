var layout = {
    init: function(){
        var _this = this;
        _this.showTooltip.init();
        _this.advanceTables();
        _this.select2.dropdown();
        _this.hideEmptyPageHeading();
        _this.datepicker.bind();
        _this.tableGridLink();
        //_this.renderDonutChart();
        _this.resetButton();
        _this.toggleFullWidth();
        _this.deleteAttachment();
        _this.ajax_form_submission.bind();
        
        
        $(document).ready(function(){
            _this.load_ajax_modal();
            _this.tableAddNewRows.deleteRow();
            _this.deleteRecord();
            // _this.datatable_event_on_pagination();
        });
    },
    toggleFullWidth: function(){
        $(document).ready(function(){
            $('.toggle-full-width').on('click', function(){
                if($('#page-wrapper').hasClass('full-width')){
                    $('#main-sidebar').show();
                    $('#page-wrapper').removeClass('full-width');
                }else{
                    $('#main-sidebar').hide();
                    $('#page-wrapper').addClass('full-width');
                }
            });
        });
    },
    /*datatable_event_on_pagination: function(){
        var _this = this;
        $('.dataTables').on('page.dt', function(){
            setTimeout(function(){
                _this.deleteRecord();
            },1000);
            
        });
    },*/
    deleteRecord: function(){
        $('table').on("click", "a.deleteRecord", function(e) {
            e.preventDefault();
            e.stopPropagation();
            msg = confirm("Are you sure you want to want to delete this record?");
            if(msg == true){
                $.post({
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrf_token
                    },
                    url: $(this).data('route')
                }).done(function (data) {
                    window.location.reload(true);
                });
            }
            
        });
    },
    load_ajax_modal:  function(){
        
            $(document).on('click', '[data-toggle="ajaxModal"]',function(e) {
                e.preventDefault();
                $('#ajaxModal').remove();
                var $this = $(this)
                , $remote = $this.data('remote') || $this.attr('href')
                , $modal = $('<div class="modal" id="ajaxModal"><div class="modal-body"></div></div>');
              $('body').append($modal);
              $modal.modal({backdrop: 'static', keyboard: false});
              var callback = function(){
                layout.location_controller.init();
                layout.ajax_form_submission.method();
                layout.datepicker.method();
                layout.tabPanelAddNewTab.bind();
                };
              $modal.load($remote, callback, callback);
            }
          );
        
    },
    ajax_form_submission:  {
        bind: function(){
            var _this = this;
            $(document).ready(function(){
                _this.method();
            });
        },
        method: function(){
            // process the form
            $('form.ajaxsubmit').on('submit', function(e) {
                e.preventDefault();
                var _this = $(this);
                // get the form data
                // there are many ways to get this data using jQuery (you can use the class or id also)
                var formData = $(this).serializeArray();
        
                // process the form
                $.ajax({
                    type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url         : $(this).attr('action'), // the url where we want to POST
                    data        : formData, // our data object
                    dataType    : 'json', // what type of data do we expect back from the server
                    encode          : true
                })
                .fail(function(data, textStatus, xhr) {
                    if(data.responseJSON){
                        $.each(data.responseJSON, function(i, val){
                            $.each(val, function(ar_idex, ar_val){
                                _this.prepend('<div class="alert alert-danger">' + ar_val + '</div>');
                            });
                            
                        });
                    }
                    
               })
                .done(function(data) {
                    // here we will handle errors and validation messages
                    if (data.success) {
                        _this.prepend('<div class="alert alert-success">' + data.message + '</div>');
                    }
                    if (data.html) {
                        $("body").append(data.html);
                    }
                });
        
            });
        }

    },
    tableGridLink: function(){
        $(document).ready(function(){
            try{
                $('table').on('click', 'tr[data-route]', function(e){
                    var no_anchor = $(e.target).hasClass('no-anchor');
                    var route = $(this).data('route');
                    if(route && !no_anchor){
                        location = route;
                    }
                });
            }catch(err) {
                console.log("---table.err---", err);
            }
            
        });
    },
    resetButton: function(){
        $('.btn-reset').on('click', function() {
            var confirm = window.confirm("Are you sure, you want to reset this form?");
            if(confirm){
                var form = $(this).parents('form');
                form.find(':input')
                .not(':button, :submit, :reset, :hidden')
                .val('')
                .removeAttr('checked')
                .removeAttr('selected');
            }
        });
    },
    /*renderDonutChart: function(){
        try{
            Morris.Donut({
                element: 'morris-donut-chart',
                colors : ['#5cb85c', '#FFAA00', '#FF0000'],
                data: [
				{
                    label: "Utilized",
                    value: 28
                },  
				{
                    label: "Free",
                    value: 4
                }
				],
                resize: true
            });
        }catch(err) {
            console.log("---morris-donut-chart---", err);
        }
        
    },*/
    showTooltip: {
        init: function(){
            var _this = this;
            $(document).ready(function(){
                _this.method();
            });
        },
        method:function(){
            $('.bs-tooltip').tooltip(); 
        }
    },
    datepicker: {
        bind: function(){
            var _this = this;
            $(document).ready(function() {
                _this.method();
            });
        },
        method: function(){
            try {
                if($('.datepicker').length){
                    $('.datepicker').datepicker({
                        autoclose: true,
                        todayHighlight: true,
                        format: "dd/mm/yyyy"
                    });
                }
                
            }
            catch(err) {
                console.log("DatePicker does not exists.", err);
            }

            try {
                if($('.timepicker').length){
                    $('.timepicker').timepicker({
                        showInputs: false
                      });
                }
                
            }
            catch(err) {
                console.log("TimePicker does not exists.", err);
            }
        },
        add_default_value: function(obj){
            var today = moment().format('DD/MM/YYYY');
            obj.find('input.datepicker').val(today);
        }
    },
    advanceTables: function(){
        $(document).ready(function() {
            try {
                $('.dataTables').DataTable({
                    responsive: true,
                    // "scrollX": true
                });
            }
            catch(err) {
                console.log("DataTable does not exists.");
            }
            
        });
    },
    select2:{
        dropdown: function(){
            try{
                $('.select2').select2();
            }catch(err) {
                console.log(err);
            }
            
        }
    },
    hideEmptyPageHeading: function(){
        $(document).ready(function(){
            var obj = $('.page-header');
            if(obj.length > 0){
                var len = obj.html().length;
                if(len == 0){
                    obj.addClass('hide');
                }else{
                    obj.removeClass('hide');
                }
            }
            
        });
    },
    tableAddNewRows:{
        init: function(objAddRowbtn){
            var _this = this;
            $(document).ready(function(){
                _this.addRow(objAddRowbtn);
                _this.dynamicIndexing();
            });
        },
        addRow: function(btn){
            if(btn.length){
                btn.off().on('click', function(e){
                    e.preventDefault();
                    var tableid = $(this).data('tableid');
                    
                    if(typeof tableid != 'undefined'){
                        var tr_html = $('#'+tableid).children('tbody').find('tr:last').html();
                        tr_html = "<tr data-id='new'>"+tr_html+"</tr>";
                        $('#'+tableid).children('tbody').prepend(tr_html);
                        var new_tr = $('#'+tableid).children('tbody').find('tr:first');
                    }else{
                        var tr_html = $(this).parents('tbody').find('tr:first').html();
                        tr_html = "<tr>"+tr_html+"</tr>";
                        $(this).parents('tr').before(tr_html);
                        var new_tr = $(this).parents('tr').prev('tr');
                    }
                    
                    
                    new_tr.find('input').val('');
                    new_tr.find('select').each(function(){
                        $(this).val($(this).find('option:first').val());
                    });
                    
                    new_tr.find('a.attachment-download-link').remove();
                    new_tr.find('.attachment-row').remove();
                    
                    layout.datepicker.add_default_value(new_tr);
                    layout.tableAddNewRows.dynamicIndexing();
                    layout.datepicker.method();
                    
                });
            }
        },
        dynamicIndexing: function(){
            $(".table-dynamic-index").find('tr').each(function(rowIndex) {
                $(this).find('input[name], select[name]').each(function(){
                    var name;
                    name = $(this).attr('name');
                    name = name.replace(/\[[0-9]+\]/g, '['+rowIndex+']');
                    $(this).attr('name',name);
                });
            });
        },
        deleteRow: function(){
            $(document).on('click', '.delete-table-row', function(e){
                e.preventDefault();
                if($(this).hasClass('delete-comment')){
                    var row = $(this).parents('li');
                }else{
                    var row = $(this).parents('tr');
                }
                
                
                var url = $(this).data('href');
                if(url){
                    $.ajax({
                        url: url,
                        type: 'get',
                        success: function(resp){
                            if(resp.status == 'success'){
                                row.remove();
                            }
                        },
                        error: function(xhr) {
                            alert("There is some issue occurring. Please try later.");
                        }
                    });
                }else{
                    row.remove();
                }
                
            });
            
        }
    },
    tabPanelAddNewTab:{
        init: function(){
            var _this = this;
            $(document).ready(function(){
                _this.bind();
                _this.deleteTab();
                _this.activateTab();
            });
        },
        bind: function(){
            this.addRow();
            this.dynamicIndexing();
            this.toggleDeleteIcon();
            $('.country-dropdown').trigger('change');
        },
        addRow: function(){
            try{
                btn  = $('a[data-toggle="add-tab"]');
                if(btn.length){
                    btn.off().on('click', function(e){
                        e.preventDefault();
                        
                        var tabButtonHtml = $(this).parents('ul').find('li:first').clone();
                        $(this).parents('li').before(tabButtonHtml);
                        $(this).parents('ul').find('li').removeClass('active');
                        $(this).parents('ul').find("li:nth-last-child(2)").addClass('active');

                        var tabPanel = $(this).parents('div.tab-container').find('div.tab-pane:first').clone();
                        $(this).parents('div.tab-container').find('div.tab-content').append(tabPanel);
                        $(this).parents('div.tab-container').find('div.tab-pane').removeClass('active').removeClass('in');
                        
                        var newTabPanel = $(this).parents('div.tab-container').find("div.tab-pane:nth-last-child(1)");
                        newTabPanel.addClass('active').addClass('in');
                        newTabPanel.find('input').val('');
                        newTabPanel.find('select').each(function(){
                            $(this).val($(this).find('option:first').val());
                        });
                        
                        layout.datepicker.add_default_value(newTabPanel);
                        // layout.tableAddNewRows.deleteRow();
                        layout.tabPanelAddNewTab.dynamicIndexing();
                        layout.datepicker.method();
                        layout.showTooltip.method();
                        layout.tabPanelAddNewTab.toggleDeleteIcon();
                            
                    });
                }
            }catch(error){
                console.log("tabPanelAddNewTab.addRow", error);
            }
        },
        dynamicIndexing: function(){
            $(".tab-dynamic-index").each(function(){
                var id = $(this).data("tabid");
                $(this).find('.nav.nav-tabs').find('li').each(function(rowIndex) {
                    var index = rowIndex+1;
                    $(this).find('a[data-toggle="tab"]').html(index);
                    $(this).find('a[data-toggle="tab"]').attr("href", "#"+id+"-"+index);
                });
                $(this).find('div.tab-pane').each(function(rowIndex) {
                    var index = rowIndex+1;
                    $(this).attr("id", id+"-"+index);
                    $(this).find('input[name], select[name]').each(function(){
                        var name;
                        name = $(this).attr('name');
                        name = name.replace(/\[[0-9]+\]/g, '['+index+']');
                        $(this).attr('name',name);

                        
                        var state_name;
                        state_name = $(this).attr('data-state_name');
                        if(state_name){
                            state_name = state_name.replace(/\[[0-9]+\]/g, '['+index+']');
                            $(this).data('state_name',state_name);
                        }

                        var city_name;
                        city_name = $(this).attr('data-city_name');
                        if(city_name){
                            city_name = city_name.replace(/\[[0-9]+\]/g, '['+index+']');
                            $(this).data('city_name',city_name);
                        }
                        
                    });
                });
            });
            
        },
        toggleDeleteIcon: function(){
            $(".tab-dynamic-index").each(function(){
                var length = $(this).find('ul').find('li').length;
                if(length > 2){
                    $(this).find('span.delete-tab-panel').show();
                }else{
                    $(this).find('span.delete-tab-panel').hide();
                }
            });
        },
        deleteTab: function(){
            $(document).on('click', '.delete-tab-panel',function(e){
                e.preventDefault();
                
                var tab_container = $(this).parents('div.tab-container');
                var ul = $(this).parents('ul');

                var anchor = $(this).parent('li').find('a');
                var href = anchor.attr('href');
                $(href).remove();
                $(this).parent('li').remove();

                tab_container.find('div.tab-pane').removeClass('active').removeClass('in');
                tab_container.find('div.tab-pane:first').addClass('active').addClass('in');
                ul.find('li').removeClass('active');
                ul.find("li:first").addClass('active');
                
                layout.tabPanelAddNewTab.dynamicIndexing();
                layout.tabPanelAddNewTab.toggleDeleteIcon();
                
            });
            
        },
        activateTab: function(){
            try{
                $('div.tab-pane[data-isactive="1"]').each(function(){
                    var id = $(this).attr('Id');
                    $(this).parent('.tab-content').children('div.tab-pane').removeClass('active');
                    $(this).parent('.tab-content').children('div.tab-pane#'+id).addClass('active');
    
                    var ul = $('a[href="#'+id+'"]').parent('li').parent('ul');
                    ul.children('li').removeClass('active');
                    $('a[href="#'+id+'"]').parent('li').addClass('active');
                    
                });
            }catch(e){
                console.log("====Error::activateTab====", e);
            }
            
        }
    },
    deleteAttachment: function(){
        $('.delete-attachment').on('click', function(e){
            e.preventDefault();
            var row = $(this).parents('.attachment-row')
            var url = $(this).attr('href');
            $.ajax({
                url: url,
                type: 'get',
                success: function(resp){
                    if(resp.status == 'success'){
                        row.remove();
                    }
                },
                error: function(xhr) {
                    alert("There is some issue occurring. Please try later.");
                }
              });

        });
    }

}
layout.init();

