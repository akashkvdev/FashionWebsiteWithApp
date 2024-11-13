@extends('Fashion_WebSite.commonlayout')

@section('websiteContents')
<div class="row property__gallery">
    <div class="col-lg-3 col-md-4 col-sm-6 mix women">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="{{asset('img/Mens/Mens1.jpeg')}}">
                <div class="label new">New</div>
                <ul class="product__hover">
                    <li><a href="{{asset('img/Mens/Mens1.jpeg')}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#">Buttons tweed blazer</a></h6>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product__price">$ 59.0</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix men">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="{{asset('img/Mens/Mens2.jpg')}}">
                <ul class="product__hover">
                    <li><a href="{{asset('img/Mens/Mens2.jpg')}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#">Flowy striped skirt</a></h6>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product__price">$ 49.0</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix accessories">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="{{asset('img/Mens/Mens3.jpg')}}">
                <div class="label stockout">out of stock</div>
                <ul class="product__hover">
                    <li><a href="{{asset('img/Mens/Mens3.jpg')}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#">Cotton T-Shirt</a></h6>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product__price">$ 59.0</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix cosmetic">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="{{asset('img/Mens/Mens4.jpg')}}">
                <ul class="product__hover">
                    <li><a href="{{asset('img/Mens/Mens4.jpg')}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#">Slim striped pocket shirt</a></h6>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product__price">$ 59.0</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix kid">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="{{asset('img/Mens/Mens5.jpg')}}">
                <ul class="product__hover">
                    <li><a href="{{asset('img/Mens/Mens5.jpg')}}" class="image-popup"><span class="arrow_expand"></span></a></li>
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#">Fit micro corduroy shirt</a></h6>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product__price">$ 59.0</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
        <div class="product__item sale">
            <div class="product__item__pic set-bg" data-setbg="https://www.fashionfreek.ca/cdn/shop/products/Y2K-Korean-Men-Fashion-Black-Streetwear-Casual-Skull-Straight-Wide-Leg-Cargo-Pants-Baggy-Denim-Trousers_280f2b31-4e99-4ce2-bc87-9aa85abf2492.jpg?v=1670195774">
                <div class="label sale">Sale</div>
                <ul class="product__hover">
                    <li><a href="https://www.fashionfreek.ca/cdn/shop/products/Y2K-Korean-Men-Fashion-Black-Streetwear-Casual-Skull-Straight-Wide-Leg-Cargo-Pants-Baggy-Denim-Trousers_280f2b31-4e99-4ce2-bc87-9aa85abf2492.jpg?v=1670195774" class="image-popup"><span class="arrow_expand"></span></a></li>
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#">Tropical Kimono</a></h6>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="https://i.ebayimg.com/images/g/qvUAAOSwKLphE3Jd/s-l1200.jpg">
                <ul class="product__hover">
                    <li><a href="https://i.ebayimg.com/images/g/qvUAAOSwKLphE3Jd/s-l1200.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#">Contrasting sunglasses</a></h6>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product__price">$ 59.0</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
        <div class="product__item sale">
            <div class="product__item__pic set-bg" data-setbg="https://media.istockphoto.com/id/1434508124/photo/portrait-of-a-happy-asian-handsome-man-in-fashionable-purple-jacket-clothing-standing-smiling.jpg?s=612x612&w=0&k=20&c=2oQHToWlgwKqAr1h7LwOpw62-CXDcsKEC35h-QoS5M0=">
                <div class="label">Sale</div>
                <ul class="product__hover">
                    <li><a href="https://media.istockphoto.com/id/1434508124/photo/portrait-of-a-happy-asian-handsome-man-in-fashionable-purple-jacket-clothing-standing-smiling.jpg?s=612x612&w=0&k=20&c=2oQHToWlgwKqAr1h7LwOpw62-CXDcsKEC35h-QoS5M0=" class="image-popup"><span class="arrow_expand"></span></a></li>
                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
                </ul>
            </div>
            <div class="product__item__text">
                <h6><a href="#">Water resistant backpack</a></h6>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="product__price">$ 49.0 <span>$ 59.0</span></div>
            </div>
        </div>
    </div>
</div>



@endsection