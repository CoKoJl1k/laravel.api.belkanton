$( document ).ready(function(){
    $(".prod-txt-content_mod")
        .mouseover(function() {
            $(this).find( ".prod-price-drop_pos" ).css("opacity",1);
        })
        .mouseout(function() {
            $(this).find( ".prod-price-drop_pos" ).css("opacity",0);
        });
});


$(document).ready(function(){
    $('#ajaxInputSearch').keyup(function(e) {
        if (e.keyCode === 13 ) {
            e.preventDefault();
        }
        let searchStr = '';
        searchStr = $("input[name='search']").val();
        if (searchStr !== '' && e.keyCode !== 17) {
            $.ajax({
                type: 'POST',
                url: 'search_ajax',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                data: {
                    search: searchStr,
                },
                success: function (data) {
                    let listOfItems = '';
                    let len = data['products'].length;
                    for (let i = 0; i < len; i++) {
                        let price = '';
                        if (data['products'][i]['prices'][0]['value'] !== 'undefined' && data['products'][i]['prices'][0]['value'] !== null) {
                            price = (data['products'][i]['prices'][0]['value'] / 100);
                        }
                        listOfItems += '<tr class="prod-card js-hover-wrap js_increment_logic js_cat_list_item js_cat_list_item' + data['products'][i]['code'] + '" data-item="' + data['products'][i]['code'] + '" rel="/?BASKET_ADD=' + data['products'][i]['code'] + '">' +
                            '<td class="td-pic">' +
                            '<div class="p-pic">' +
                            '<a href="/articul/' + data['products'][i]['code'] + '/" class="p-pic-link js-hover-trg">' +
                            '<img src="' + data['products'][i]['image'] + '" alt="' + data['products'][i]['name'] + '" title="' + data['products'][i]['name'] + '">' +
                            '</a>' +
                            '</div>' +
                            '</td>' +
                            '<td class="td-title">' +
                            '<div class="p-title">' +
                            '<a href="/articul/' + data['products'][i]['code'] + '/" class="js-hover-trg">' + data['products'][i]['name'] + '</a>' +
                            '</div>' +
                            '</td>' +
                            '<td class="td-price">' +
                            '<div class="p-price">' +
                            '<div class="p-price-cur">' +
                            '<span class="val">' + price + '</span><span class="cur">руб</span>' +
                            '<span class="p-price__note">без ндс</span>' +
                            '</div>' +
                            '<div class="price-wrap__old-sale">' +
                            '</div>' +
                            '</div>' +
                            '</td>' +
                            '<td class="td-controls right">' +
                            '<div class="p-btn-wrap clearfix js-add-one-box">' +
                            '<i data-role="decrease" class="p-count-minus js-btn-add-one-box js-btn-add-one-box-mn">-</i>' +
                            '<input type="text" value="1" data-min-val="1" autocomplete="off" data-inc-val="1" data-max-val="999999" name="COUNT" class="p-count js-add-one-box-input">' +
                            '<span class="js_orderButton_quantity hide">0</span>' +
                            '<i data-role="increase" class="p-count-plus js-btn-add-one-box js-btn-add-one-box-pl">+</i>' +
                            '<a href="javascript:void(0)" class="btn btn-success js_orderButton">В корзину</a>' +
                            '</div>' +
                            '</td>' +
                            '</tr>';
                    }
                    /* Deletes data that we added before*/
                    $('#ajaxSearchListOfItems .js_cat_list_item').remove();
                    $('#ajaxSearchListOfItemsCount .all-results').remove();

                    $('#ajaxSearchListOfItems').append(listOfItems);
                    $('#ajaxSearchListOfItemsCount').append(
                        '<div class="all-results">'+
                        '<a href="/search?search='+encodeURI(data.search)+'" class="sd-item ">' +
                        'Показать все результаты: '+data.productsCount+'</a></div>');
                }
            });
        }
    });
});
