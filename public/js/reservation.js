$(function(){

    var areaListView = $('#areaListView');
    var areaTypeListView = $('#areaTypeListView');
    var blockListView = $('#blockListView');
    var plotPanel = $('#plotPanel');
    var sitePlanPanel = $('#sitePlanPanel');

    $(document).ready(function () {
        areaTypeListView.find('li').hide();
        blockListView.find('li').hide();
        plotPanel.hide();
        sitePlanPanel.hide();

        $('#plotDataTable').DataTable();

    });

    areaListView.find('li').on('click', function () {
        var areaListItem = $(this);

        areaId = areaListItem.data('area-id');
        var url = "/search/getAreaType";
        $.get(url, {area_id: areaId}, function (data, status) {
            console.log("json received = " + data);

            var jsonData = JSON.parse(data);
            areaTypeListView.find('li').hide();
            blockListView.find('li').hide();
            plotPanel.hide();
            sitePlanPanel.hide();

            for (var i = 0; i < jsonData.length; i++) {
                var counter = jsonData[i];
                console.log(counter.name);
                $('#areaTypeListView').find('li').eq(counter.areas_type_id).show();
            }
        });

    });

    areaTypeListView.find('li').on('click', function () {
        var areaTypeListItem = $(this);

        area_type_id = areaTypeListItem.data('area-type-id');
        console.log("area_id: " + areaId);
        console.log("area_type_id: " + area_type_id);

        var url = "/search/getBlock";
        $.get(url, {area_id: areaId, area_type_id: area_type_id}, function (data, status) {
            console.log("json received = " + data);

            var jsonData = JSON.parse(data);
            blockListView.find('li').hide();
            plotPanel.hide();
            sitePlanPanel.hide();

            for (var i = 0; i < jsonData.length; i++) {
                var counter = jsonData[i];
                console.log(counter.name);
                $('#blockListView').find('li').eq(counter.block_id).show();
            }
        });

    });

    blockListView.find('li').on('click', function () {
        var blockListItem = $(this);
        block_id = blockListItem.data('block-id');
        console.log("clicked block id = " + block_id);

        plotPanel.show();
        sitePlanPanel.show();


        var url = "/search/getPlot";
        $.get(url, {area_id: areaId, area_type_id: area_type_id, block_id: block_id}, function (data, status) {
            console.log("json received = " + data);

            var jsonData = JSON.parse(data);
            plotPanel.hide();
            plotPanel.show();

            var html = "";

            html += "<div class='panel-heading'><h3 class='panel-title'>Plots</h3></div><ul class='list-group'><table id='plotDataTable' class='table table-hover display' cellspacing='0' width='100%'><thead><tr><th>Plot #</th><th>Size (sq. m)</th><th>Price (TZS)</th><th>Reservation</th></tr></thead><tbody>";


            for (var i = 0; i < jsonData.length; i++) {
                var counter = jsonData[i];
                site_plan = counter.file_name;
                html += "<tr>";
                    html += "<td>" + counter.plot_id + "</td>";
                    html += "<td>" + counter.size + "</td>";
                    html += "<td>" + counter.size * counter.price + "</td>";

                    html += "<td>";

                        html += "<a class='btn btn-primary' data-toggle='modal' href='" + "#" + counter.plot_id + "'>Reserve</a>";

                    html += "</td>";

                        html += "<div class='modal fade' id='" + counter.plot_id + "'>";
                            html += "<div class='modal-dialog'>";
                                html += "<div class='modal-content'>";
                                    html += "<div class='modal-header'>";
                                        html += "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>";
                                        html += "<h4 class='modal-title'>" + "#" + counter.plot_id + "</h4>";
                                    html += "</div>";
                                    html += "<div class='modal-body'>";

                                    html += "<h4>Reservation Summary</h4>";


                                        html += "<div class='row'>";
                                            html += "<div class='col-sm-4'>";
                                                html += "Plot#";
                                            html += "</div>";  
                                            html += "<div class='col-sm-4'>";
                                                html += "Size (sqm)";
                                            html += "</div>";
                                            html += "<div class='col-sm-4'>";
                                                html += "Price (TZS)";
                                            html += "</div>";                                                                                                                                   
                                        html += "</div>"; 
                                        html += "<div class='row'>";
                                            html += "<div class='col-sm-4'>";
                                                html += "<strong>" + counter.plot_id + "</strong>";
                                            html += "</div>";  
                                            html += "<div class='col-sm-4'>";
                                                html += "<strong>" + counter.size + "</strong>";
                                            html += "</div>";
                                            html += "<div class='col-sm-4'>";
                                                html += "<strong>" + counter.size * counter.price + "</strong>";
                                            html += "</div>";                                                                                                                                   
                                        html += "</div>";   

                                    html += "</div>";
                                    html += "<div class='modal-footer'>";
                                        html += "<button type='button' class='btn btn-default' data-dismiss='modal'><i class='fa fa-remove'></i> Cancel</button>";
                                        html += "<a href'#' class='btn btn-primary'><i class='fa fa-check'></i> Confirm</a>";
                                    html += "</div>";
                                html += "</div>";
                        html += "</div>";


                html += "</tr>";
            }

            html += "</tbody></table></ul>";





            var site_plan_html = "<img src='" + "/img/uploads/plots/" + site_plan + "' alt='...' class='img-responsive'>";

            console.log(site_plan_html);

            $("#site-plan").html("<a href='" + "/img/uploads/plots/" + site_plan + "'>" + site_plan_html + "</a>");

            $("#plotPanel").html(html);
        });

    });


});