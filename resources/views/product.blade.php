@include('header')

@include('success_message')
@include('errors')


@if (session('status'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('status') }}
    </div>
@elseif(session('failed'))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('failed') }}
    </div>
@endif


@section('content')
<div class="container">
    <div class="row">

        <div class="js_catalog-list col-xs-12 col-md-8 col-lg-12">
            <div class="prod-card-list js-hover ">
                @if(count($products) > 0)
                    @foreach( $products as $product )

                        <div class="p-card-tile  p-card-tile_catalog js_increment_logic js_cat_list_item js_cat_list_item227068" data-item="227068" rel="/catalog/salfetki-bumazhnye-7962/?BASKET_ADD=227068">
                        <div class="p-card-tile-inner p-card-tile-inner_col-2">
                            <div class="p-card-tile-content">
                                <div class="controls-prod controls-prod_pos">
                                    <button class="controls-prod__btn controls-prod_toCollection  js-favorite-element js-favorite-element_227068" data-product-id="227068" title="Добавить в избранное">
                                        <div class="hide js_favorite_items_category_227068">
                                        </div>
                                    </button>
                                </div>
                                <div class="prod-pic prod-pic_mod">
                                    <a href="/articul/salfetki-bumazhnye-bik-pak-995239/" class="prod-pic__link 1">
                                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="prod-pic__image prod-pic__image-main ">
                                    </a>
                                    <div class="billets-wrap">
                                        <div class="billets-scroll-wrap">
                                            <div class="billets-scroll">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prod-txt-content prod-txt-content_mod">

                                    <div class="price-wrap prod-txt-content__price">

                                        <div class="price-wrap__prc-current">
                                            <div class="price-wrap__prc-cur-wrap">
                                                @foreach($product->prices as $v)

                                                    <div class="price-wrap__cur-val">{{$v['value']/100}}</div>
                                                    <div class="price-wrap__cur-cur">руб</div>
                                                    <div class="price-wrap__cur-txt">без НДС</div>
                                                    @break
                                                @endforeach

                                                    <div class="prod-price-drop prod-price-drop_pos">
                                                        <div class="prod-price-drop-i">
                                                            <div class="prod-price-drop__body">
                                                                <div class="prod-price-drop__description">
                                                                    <h1>{{--$product->measures --}}</h1>
                                                                    @foreach($product->measures as $v)
                                                                    <div class="prod-price-drop__line">Ед. измерения: {{$v['name']}}</div>
                                                                        @foreach($product->prices as $v)
                                                                            <div class="prod-price-drop__line">Цена без НДС: {{$v['value']/100}}руб.</div>
                                                                            <div class="prod-price-drop__line">Ставка НДС: 20%</div>

                                                                            <div class="prod-price-drop__line"><b>Цена с НДС: {{$v['value_total']/100}} руб.</b></div>
                                                                            @break
                                                                        @endforeach

                                                                        @break
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="b-status-wrap">
                                        <div class="b-status-wrap__text under-order">
                                            @if( $product->status == 'В наличии')
                                                <div class="text available">
                                                    {{$product->status}}
                                                </div>
                                            @else
                                                <div class="text">
                                                    {{$product->status}}
                                                </div>
                                            @endif

                                            @if($product->status == 'В наличии')
                                                <span class="count available">
                                                    {{$product->quantity. ' шт.'}}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="b-status-wrap__in-basket hide"></div>
                                    </div>
                                    <div class="title-wrap">
                                        <a href="/articul/salfetki-bumazhnye-bik-pak-995239/" class="title-wrap__ttl">{{$product->name}}</a>
                                        <span class="title-wrap__articul">арт. {{$product->code}}</span>
                                    </div>
                                </div>
                                <div class="prod-drop p-card-tile-content__drop">
                                    <div class="add-wrap add-wrap_mod">
                                        <div class="add-wrap__item add-wrap__item_block add-wrap__item_pos upakovka">
                                            <div class="add-wrap__count">
                                                {!! $product->measures[1]['name'] ?? '' !!}
                                                @if(isset($product->measures[1]['capacity']))
                                                 {{$product->measures[1]['capacity'].' шт.'}}
                                                 @endif
                                            </div>
                                            <button data-count="9" class="add-wrap__btn-add btn-add js_orderMeasureButton">+ Добавить</button>
                                        </div>
                                    </div>

                                    <div class="controls-wrap prod-drop__controls">
                                        <div class="b-basket-controls">
                                            <div class="b-count b-basket-controls__count js-add-one-box">
                                                <input type="text" value="1" data-min-val="1" autocomplete="off" data-inc-val="1" data-max-val="999999" name="COUNT" class="b-count__input js-add-one-box-input">
                                                <span class="js_orderButton_quantity hide">0</span>
                                                <button class="b-count__btn-pls  js-btn-add-one-box js-btn-add-one-box-pl"></button>
                                                <button class="b-count__btn-mns  js-btn-add-one-box js-btn-add-one-box-mn"></button>
                                            </div>

                                            <button class="b-basket-controls__btn btn btn-status b-basket-controls__btn_pos btn-available btn btn-status js_orderButton">
                                                <span class="icon"></span>
                                                <span>В корзину</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="container">
                        <div class="row">
                            <p><b>По Вашему запросу ничего не найдено.</b></p>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="d-flex justify-content-center">
            @if(isset($s))
                {{ $products->appends(['s' => $s ])->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
            @else
                {{ $products->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
            @endif
        </div>
    </div>
</div>

@endsection
@yield('content')
@include('footer')

