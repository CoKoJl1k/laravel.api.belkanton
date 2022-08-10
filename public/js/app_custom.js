$( document ).ready(function(){

    $( "div.price-wrap__prc-cur-wrap" )
        .mouseover(function() {
            console.log($(this));
            $(this).find( ".prod-price-drop_pos" ).css("display","contents");
        })
        .mouseout(function() {
            console.log($(this));
            $(this).find( ".prod-price-drop_pos" ).css("display","none");
        });

    /*
    //console.log(1111);
    // устанавливаем прямой обработчик события "click" и передаем объект события в качестве параметра функции
    //$( ".prod-pic.prod-pic_mod" ).mouseover(function( event ) {
  //  prod-txt-content prod-txt-content_mod
  //  class="price-wrap prod-txt-content__price"
    $( ".p-card-tile-content" ).mouseover(function( event ) {

    //    price-wrap__prc-cur-wrap
        $(this).find(".prod-price-drop_pos");

        console.log($(this).find(".prod-price-drop_pos"));
        $(this).find(".prod-price-drop_pos").css("display", "contents");

   // $(".prod-price-drop_pos").css("display","contents");
        //event.currentTarget.find(".prod-price-drop_pos").css("display","contents");

      //  console.log($(".prod-price-drop_pos"));
      //  console.log( "div currentTarget", event.currentTarget);
       // console.log( "div currentTarget", event.currentTarget); // выводим в консоль значение свойства currentTarget
       // console.log( "div target", event.target); // выводим в консоль значение свойства target
    })
    */
});
