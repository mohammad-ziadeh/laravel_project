@extends('home.layout.userside')
@section('content')
    <div class="zurf-page-title-wrap zurf-style-custom zurf-center-align">
        <div class="zurf-header-transparent-substitute"></div>
        <div class="zurf-page-title-overlay"></div>
        <div class="zurf-page-title-container zurf-container">
            <div class="zurf-page-title-content zurf-item-pdlr">
                <h1 class="zurf-page-title">Search Tours</h1>
            </div>
        </div>
    </div>
    <div class="zurf-page-wrapper" id="zurf-page-wrapper">
        <div class="tourmaster-template-wrapper tourmaster-search-style-2">
            <div class="tourmaster-container">
                <div class="tourmaster-sidebar-wrap clearfix tourmaster-sidebar-style-none">
                    <div class="tourmaster-sidebar-center tourmaster-column-60">
                        <div class="tourmaster-page-content">
                            <div class="tourmaster-tour-search-item-wrap">
                                <div
                                    class="tourmaster-tour-search-item clearfix tourmaster-style-full tourmaster-column-count-8 tourmaster-item-pdlr tourmaster-input-style-default tourmaster-tour-search-item-style-2">
                                    <div class="tourmaster-tour-search-wrap clearfix tourmaster-with-frame">
                                        <form class="tourmaster-form-field tourmaster-with-border"
                                            action="{{ route('ourtrips.store') }}" method="POST">
                                            @csrf
                                            <div class="tourmaster-tour-search-field tourmaster-tour-search-field-keywords">
                                                <label class="gdlr-core-skin-title">Keywords</label>
                                                <div class="tourmaster-tour-search-field-inner"><input name="tour-search"
                                                        type="text" value="" /></div>
                                            </div>
                                            <div class="tourmaster-type-filter-item">
                                                <h5 class="tourmaster-type-filter-item-title">Category</h5>
                                                <label class="tourmaster-type-filter-term">
                                                    <input type="checkbox" name="tax-tour_category[]"
                                                        value="active-adventures" />
                                                    <span class="tourmaster-type-filter-display"><i
                                                            class="fa fa-check"></i><span class="tourmaster-head">Active
                                                            Adventures</span></span>
                                                </label>
                                                <label class="tourmaster-type-filter-term">
                                                    <input type="checkbox" name="tax-tour_category[]"
                                                        value="expedition-cruise" />
                                                    <span class="tourmaster-type-filter-display"><i
                                                            class="fa fa-check"></i><span class="tourmaster-head">Expedition
                                                            Cruise</span></span>
                                                </label>
                                                <label class="tourmaster-type-filter-term">
                                                    <input type="checkbox" name="tax-tour_category[]"
                                                        value="light-moderate" />
                                                    <span class="tourmaster-type-filter-display"><i
                                                            class="fa fa-check"></i><span class="tourmaster-head">Light
                                                            Moderate</span></span>
                                                </label>
                                                <label class="tourmaster-type-filter-term">
                                                    <input type="checkbox" name="tax-tour_category[]" value="moderate" />
                                                    <span class="tourmaster-type-filter-display"><i
                                                            class="fa fa-check"></i><span
                                                            class="tourmaster-head">Moderate</span></span>
                                                </label>
                                                <label class="tourmaster-type-filter-term">
                                                    <input type="checkbox" name="tax-tour_category[]" value="pro-dive" />
                                                    <span class="tourmaster-type-filter-display"><i
                                                            class="fa fa-check"></i><span class="tourmaster-head">Pro
                                                            Dive</span></span>
                                                </label>
                                                <label class="gdlr-core-skin-title">
                                                    <input class="tourmaster-type-filter-show-more" type="checkbox" /><span
                                                        class="tourmaster-type-filter-more-button">More<i
                                                            class="fa fa-angle-down"></i></span>
                                                    <div class="tourmaster-type-filter-hide">
                                                        <label class="tourmaster-type-filter-term">
                                                            <input type="checkbox" name="tax-tour_category[]"
                                                                value="scuba" />
                                                            <span class="tourmaster-type-filter-display"><i
                                                                    class="fa fa-check"></i><span
                                                                    class="tourmaster-head">Scuba</span></span>
                                                        </label>
                                                        <label class="tourmaster-type-filter-term">
                                                            <input type="checkbox" name="tax-tour_category[]"
                                                                value="signature-land" />
                                                            <span class="tourmaster-type-filter-display"><i
                                                                    class="fa fa-check"></i><span
                                                                    class="tourmaster-head">Signature Land</span></span>
                                                        </label>
                                                        <label class="tourmaster-type-filter-term">
                                                            <input type="checkbox" name="tax-tour_category[]"
                                                                value="snorkeling" />
                                                            <span class="tourmaster-type-filter-display"><i
                                                                    class="fa fa-check"></i><span
                                                                    class="tourmaster-head">snorkeling</span></span>
                                                        </label>
                                                        <label class="tourmaster-type-filter-term">
                                                            <input type="checkbox" name="tax-tour_category[]"
                                                                value="surfing" />
                                                            <span class="tourmaster-type-filter-display"><i
                                                                    class="fa fa-check"></i><span
                                                                    class="tourmaster-head">Surfing</span></span>
                                                        </label>
                                                        <label class="tourmaster-type-filter-term">
                                                            <input type="checkbox" name="tax-tour_category[]"
                                                                value="tour-exclusive" />
                                                            <span class="tourmaster-type-filter-display"><i
                                                                    class="fa fa-check"></i><span
                                                                    class="tourmaster-head">Tour Exclusive</span></span>
                                                        </label>
                                                    </div>
                                                </label>
                                            </div>
                                            <div
                                                class="tourmaster-tour-search-field tourmaster-tour-search-field-duration">
                                                <label class="gdlr-core-skin-title">Duration</label>
                                                <div class="tourmaster-combobox-wrap">
                                                    <select name="duration">
                                                        <option value="">Any</option>
                                                        <option value="1">1 Day Tour</option>
                                                        <option value="2">2-4 Days Tour</option>
                                                        <option value="5">5-7 Days Tour</option>
                                                        <option value="7">7+ Days Tour</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="tourmaster-tour-search-field tourmaster-tour-search-field-date">
                                                <label class="gdlr-core-skin-title">Date</label>
                                                <div class="tourmaster-datepicker-wrap">
                                                    <input class="tourmaster-datepicker" type="text" value=""
                                                        data-date-format="d M yy" /><input
                                                        class="tourmaster-datepicker-alt" name="date" type="hidden"
                                                        value="" />
                                                    <span class="tourmaster-clear-date">Clear<span></span></span>
                                                </div>
                                            </div>
                                            <div class="tourmaster-tour-search-field tourmaster-tour-search-field-month">
                                                <label class="gdlr-core-skin-title">Month</label>
                                                <div class="tourmaster-combobox-wrap">
                                                    <select name="month">
                                                        <option value="">Any</option>
                                                        <option value="2025-01">January 2025</option>
                                                        <option value="2025-02">February 2025</option>
                                                        <option value="2025-03">March 2025</option>
                                                        <option value="2025-04">April 2025</option>
                                                        <option value="2025-05">May 2025</option>
                                                        <option value="2025-06">June 2025</option>
                                                        <option value="2025-07">July 2025</option>
                                                        <option value="2025-08">August 2025</option>
                                                        <option value="2025-09">September 2025</option>
                                                        <option value="2025-10">October 2025</option>
                                                        <option value="2025-11">November 2025</option>
                                                        <option value="2025-12">December 2025</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="tourmaster-column-30 tourmaster-search-price-column-left">
                                                <div
                                                    class="tourmaster-tour-search-field tourmaster-tour-search-field-min-price">
                                                    <label class="gdlr-core-skin-title">Min Price</label><input
                                                        name="min-price" type="text" step="0.01"
                                                        value="{{ old('min-price') }}" />
                                                </div>
                                            </div>
                                            <div class="tourmaster-column-30 tourmaster-search-price-column-right">
                                                <div
                                                    class="tourmaster-tour-search-field tourmaster-tour-search-field-max-price">
                                                    <label class="gdlr-core-skin-title">Max Price</label><input
                                                        name="max-price" type="text" step="0.01"
                                                        value="{{ old('max-price') }}" />
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div
                                                class="tourmaster-tour-search-field tourmaster-tour-search-field-rating clearfix">
                                                <label class="gdlr-core-skin-title">Rating</label><span
                                                    class="tourmaster-rating-select" data-rating-score="0"></span>
                                                <i class="tourmaster-rating-select fa fa-star-o"
                                                    data-rating-score="1"></i><span class="tourmaster-rating-select"
                                                    data-rating-score="2"></span>
                                                <i class="tourmaster-rating-select fa fa-star-o"
                                                    data-rating-score="3"></i><span class="tourmaster-rating-select"
                                                    data-rating-score="4"></span>
                                                <i class="tourmaster-rating-select fa fa-star-o"
                                                    data-rating-score="5"></i><span class="tourmaster-rating-select"
                                                    data-rating-score="6"></span>
                                                <i class="tourmaster-rating-select fa fa-star-o"
                                                    data-rating-score="7"></i><span class="tourmaster-rating-select"
                                                    data-rating-score="8"></span>
                                                <i class="tourmaster-rating-select fa fa-star-o"
                                                    data-rating-score="9"></i><span class="tourmaster-rating-select"
                                                    data-rating-score="10"></span>
                                                <input type="hidden" name="rating" value="0" /><span
                                                    class="tourmaster-tail">or more</span>
                                            </div>
                                            <a class="tourmaster-tour-search-filter-clear" href="#">× Clear
                                                Filter</a><input class="tourmaster-tour-search-submit" type="submit"
                                                value="Search" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tourmaster-tour-search-content-wrap">
                                <h3 class="tourmaster-tour-search-content-head tourmaster-item-mglr">18 Results Found</h3>
                                <div
                                    class="tourmaster-tour-item clearfix tourmaster-tour-item-style-grid tourmaster-tour-item-column-2">



                                    <div class="tourmaster-tour-order-filterer-wrap tourmaster-item-mglr clearfix"
                                        data-tm-ajax="tourmaster_tour_order_ajax"
                                        data-settings='{"category":"","tag":"","num-fetch":"9","layout":"fitrows","thumbnail-size":"Personnel Thumbnail","orderby":"date","order":"desc","tour-style":"grid","hover":"title-icon","hover-info":["title","icon"],"has-column":"yes","no-space":"no","excerpt":"none","excerpt-number":"55","column-size":"30","filterer":"none","filterer-align":"center","pagination":"page","custom-pagination":true,"grid-style":"style-2","tour-info":["duration-text","availability","departure-location"],"tour-rating":"enable","tour-border-radius":"10px","frame-shadow-size":{"x":"0px","y":"20px","size":"25px"},"frame-shadow-color":"#004760","frame-shadow-opacity":"0.09","tour-title-font-size":"21px","tour-title-font-weight":"500","tour-title-letter-spacing":"0px","tour-title-text-transform":"none","price-position":"","paged":1,"filter-icon":"svg","enable-order-filterer":"enable","order-filterer-grid-style":"grid-with-frame","order-filterer-grid-style-thumbnail":"Personnel Thumbnail","order-filterer-grid-style-column":"30","order-filterer-list-style":"medium-with-frame","order-filterer-list-style-thumbnail":"Tour Side Thumbnail","s":"","tax_query":{"relation":"AND"},"meta_query":{"relation":"AND"},"with-frame":"enable","column-size-temp":"30"}'
                                        data-target="tourmaster-tour-item-holder" data-target-action="replace"
                                        data-ajax-url="https://demo.goodlayers.com/zurf/scuba/wp-admin/admin-ajax.php">
                                        <h3 class="tourmaster-tour-order-filterer-title">Sort by</h3>
                                        <div class="tourmaster-combobox-wrap">
                                            <select data-ajax-name="orderby">
                                                <option value="date" selected="">Release Date</option>
                                                <option value="tour-date">Tour Date</option>
                                                <option value="title">Title</option>
                                                <option value="price">Price</option>
                                                <option value="popularity">Popularity</option>
                                                <option value="rating">Rating</option>
                                                <option value="duration">Duration</option>
                                            </select>
                                        </div>
                                        <div class="tourmaster-combobox-wrap">
                                            <select data-ajax-name="order">
                                                <option value="asc">Ascending</option>
                                                <option value="desc" selected="">Descending</option>
                                            </select>
                                        </div>
                                        <span class="tourmaster-tour-order-filterer-style">
                                            <a href="#" data-ajax-name="item-style" class=""
                                                data-ajax-value="list-style">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20"
                                                    viewbox="0 0 25 20">
                                                    <circle class="cls-1" cx="2" cy="2" r="2"></circle>
                                                    <circle id="Ellipse_955_copy_2" data-name="Ellipse 955 copy 2"
                                                        class="cls-1" cx="2" cy="10" r="2"></circle>
                                                    <circle id="Ellipse_955_copy_3" data-name="Ellipse 955 copy 3"
                                                        class="cls-1" cx="2" cy="18" r="2"></circle>
                                                    <rect class="cls-1" x="6" width="19" height="4"
                                                        rx="2" ry="2"></rect>
                                                    <rect id="Rectangle_959_copy" data-name="Rectangle 959 copy"
                                                        class="cls-1" x="6" y="8" width="19" height="4"
                                                        rx="2" ry="2"></rect>
                                                    <rect id="Rectangle_959_copy_2" data-name="Rectangle 959 copy 2"
                                                        class="cls-1" x="6" y="16" width="19" height="4"
                                                        rx="2" ry="2"></rect>
                                                </svg>
                                            </a>
                                            <a href="#" data-ajax-name="item-style" class="tourmaster-active"
                                                data-ajax-value="grid-style">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewbox="0 0 18 18">
                                                    <circle id="Ellipse_955_copy_2" data-name="Ellipse 955 copy 2"
                                                        class="cls-1" cx="2" cy="2" r="2"></circle>
                                                    <circle id="Ellipse_955_copy_3" data-name="Ellipse 955 copy 3"
                                                        class="cls-1" cx="9" cy="2" r="2"></circle>
                                                    <circle id="Ellipse_955_copy_4" data-name="Ellipse 955 copy 4"
                                                        class="cls-1" cx="16" cy="2" r="2"></circle>
                                                    <circle id="Ellipse_955_copy_5" data-name="Ellipse 955 copy 5"
                                                        class="cls-1" cx="2" cy="9" r="2"></circle>
                                                    <circle id="Ellipse_955_copy_5-2" data-name="Ellipse 955 copy 5"
                                                        class="cls-1" cx="9" cy="9" r="2"></circle>
                                                    <circle id="Ellipse_955_copy_5-3" data-name="Ellipse 955 copy 5"
                                                        class="cls-1" cx="16" cy="9" r="2"></circle>
                                                    <circle id="Ellipse_955_copy_6" data-name="Ellipse 955 copy 6"
                                                        class="cls-1" cx="2" cy="16" r="2"></circle>
                                                    <circle id="Ellipse_955_copy_6-2" data-name="Ellipse 955 copy 6"
                                                        class="cls-1" cx="9" cy="16" r="2"></circle>
                                                    <circle id="Ellipse_955_copy_6-3" data-name="Ellipse 955 copy 6"
                                                        class="cls-1" cx="16" cy="16" r="2"></circle>
                                                </svg>
                                            </a>
                                        </span>
                                    </div>


                                    <form action="{{ route('tripcruds.store') }}" method="POST"
                                        enctype="multipart/form-data" class="trip-form">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="title" class="label-field">Title</label>
                                                <input type="text" class="form-control input-field" name="title"
                                                    id="title" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="image" class="label-field">Image</label>
                                                <input type="file" class="form-control input-field" name="image"
                                                    id="image">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="duration" class="label-field">Duration</label>
                                                <input type="number" class="form-control input-field" name="duration"
                                                    id="duration" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="availability" class="label-field">Availability</label>
                                                <input type="text" class="form-control input-field"
                                                    name="availability" id="availability" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="location" class="label-field">Location</label>
                                                <input type="text" class="form-control input-field" name="location"
                                                    id="location" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="description" class="label-field">Description</label>
                                                <textarea class="form-control input-field textarea-field" name="description" id="description"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="reviews_count" class="label-field">Reviews Count</label>
                                                <input type="number" class="form-control input-field"
                                                    name="reviews_count" id="reviews_count" value="0" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="price" class="label-field">Price</label>
                                                <input type="number" step="0.01" class="form-control input-field"
                                                    name="price" id="price" required>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                                    </form>



                                    <div class="tourmaster-tour-item-holder gdlr-core-js-2 clearfix"
                                        data-layout="fitrows">



                                        @foreach ($ourtripcruds as $ourtripcrud)
                                            <div
                                                class="gdlr-core-item-list tourmaster-item-pdlr tourmaster-column-30 tourmaster-column-first">
                                                <div
                                                    class="tourmaster-tour-grid tourmaster-tour-frame tourmaster-tour-grid-style-2 tourmaster-price-right-title">
                                                    <div class="tourmaster-tour-grid-inner"
                                                        style="box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09); -moz-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09); -webkit-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09); border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;">

                                                        <div
                                                            class="tourmaster-tour-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                            <img src="{{ asset('storage/' . $ourtripcrud->image) }}"
                                                                alt="" width="700" height="500" />
                                                        </div>

                                                        <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js"
                                                            data-sync-height="tour-item-40">


                                                            <div class="tourmaster-icons"
                                                                style="position: absolute; top: 10px; right: 10px; z-index: 10;">
                                                                <a href="{{ route('tripcruds.edit', $ourtripcrud->id) }}"
                                                                    class="tourmaster-edit-icon"
                                                                    style="margin-right: 10px;">
                                                                    <i class="fa fa-edit" style="color: #48bf84;"></i>
                                                                </a>

                                                                <form id="delete-form-{{ $ourtripcrud->id }}"
                                                                    action="{{ route('tripcruds.destroy', $ourtripcrud->id) }}"
                                                                    method="POST" style="display: inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" class="tourmaster-delete-icon"
                                                                        style="background: none; border: none; cursor: pointer; transition: transform 0.3s, background-color 0.3s;"
                                                                        onclick="confirmDelete({{ $ourtripcrud->id }})">
                                                                        <i class="fa fa-trash"
                                                                            style="color: #48bf84;"></i>
                                                                    </button>
                                                                </form>
                                                            </div>

                                                            <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element"
                                                                style="color: #ffffff; background-color: #48bf84;">
                                                                <div class="tourmaster-thumbnail-ribbon-cornor"
                                                                    style="border-right-color: rgba(72, 191, 132, 0.5);">
                                                                </div>
                                                                Very Popular!
                                                            </div>

                                                            <h3 class="tourmaster-tour-title gdlr-core-skin-title"
                                                                style="font-size: 21px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" viewbox="0 0 512 512" xml:space="preserve"
                                                                    style="fill: #48bf84;">
                                                                    <path
                                                                        d="M397.413,199.303c-2.944-4.576-8-7.296-13.408-7.296h-112v-176c0-7.552-5.28-14.08-12.672-15.648 c-7.52-1.6-14.88,2.272-17.952,9.152l-128,288c-2.208,4.928-1.728,10.688,1.216,15.2c2.944,4.544,8,7.296,13.408,7.296h112v176 c0,7.552,5.28,14.08,12.672,15.648c1.12,0.224,2.24,0.352,3.328,0.352c6.208,0,12-3.616,14.624-9.504l128-288 C400.805,209.543,400.389,203.847,397.413,199.303z">
                                                                    </path>
                                                                </svg>
                                                                <span>{{ $ourtripcrud->title }}</span>
                                                            </h3>

                                                            <div class="tourmaster-tour-price-wrap"
                                                                style="margin-top: 50px; margin-bottom: 25px;">
                                                                <span class="tourmaster-tour-price"
                                                                    style="font-size: 18px; font-weight: bold; color: #48bf84; display: block; margin-top: 50px !important;">
                                                                    <span class="tourmaster-head">From</span>
                                                                    <span
                                                                        class="tourmaster-tail">${{ $ourtripcrud->price }}</span>
                                                                </span>
                                                            </div>

                                                            <div class="tourmaster-tour-info-wrap clearfix">
                                                                <div
                                                                    class="tourmaster-tour-info tourmaster-tour-info-duration-text">
                                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                        y="0px" viewbox="0 0 465 465"
                                                                        xml:space="preserve">
                                                                        <path
                                                                            d="M279.591,423.714c-3.836,0.956-7.747,1.805-11.629,2.52c-10.148,1.887-16.857,11.647-14.98,21.804 c0.927,4.997,3.765,9.159,7.618,11.876c3.971,2.795,9.025,4.057,14.175,3.099c4.623-0.858,9.282-1.867,13.854-3.008 c10.021-2.494,16.126-12.646,13.626-22.662C299.761,427.318,289.618,421.218,279.591,423.714z">
                                                                        </path>
                                                                    </svg>
                                                                    {{ $ourtripcrud->duration }} days
                                                                </div>

                                                                <div
                                                                    class="tourmaster-tour-info tourmaster-tour-info-availability">
                                                                    <i class="fa fa-calendar"></i> Availability:
                                                                    {{ $ourtripcrud->availability }}
                                                                </div>
                                                                <div
                                                                    class="tourmaster-tour-info tourmaster-tour-info-departure-location">
                                                                    <i class="flaticon-takeoff-the-plane"></i>
                                                                    {{ $ourtripcrud->location }}
                                                                </div>
                                                            </div>

                                                            <div class="tourmaster-tour-description">
                                                                <i class="fa fa-file-text icon-description"
                                                                    style="margin-right: 10px;"></i>
                                                                {{ $ourtripcrud->description }}
                                                            </div>

                                                            <div class="tourmaster-tour-rating">
                                                                @for ($i = 0; $i < 5; $i++)
                                                                    <i
                                                                        class="fa fa-star{{ $i < $ourtripcrud->reviews_count ? '' : '-o' }}"></i>
                                                                @endfor
                                                                <span
                                                                    class="tourmaster-tour-rating-text">({{ $ourtripcrud->reviews_count }}
                                                                    Reviews)</span>
                                                            </div>

                                                            <div class="tourmaster-tour-booking"
                                                                style="text-align: center;">
                                                                <button class="tourmaster-button"
                                                                    onclick="openModal({{ $ourtripcrud->id }})"
                                                                    style="padding: 10px; background-color: #48bf84; color: white; border-radius: 5px;">
                                                                    Book Now
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach



                                        <div id="bookingModal" class="modal" >
                                            <div class="modal-content">
                                                <span class="close" onclick="closeModal()">&times;</span>
                                                <form action="{{ route('booknows.store') }}" method="POST">
                                                    @csrf
                                                    <h4>Booking Form</h4>
                                                    <input type="hidden" id="trip_id" name="trip_id">
                                                    <input type="text" name="name" placeholder="Your Name" required
                                                        style="width: 100%; padding: 10px; margin-bottom: 10px;">
                                                    <input type="email" name="email" placeholder="Your Email"
                                                        required style="width: 100%; padding: 10px; margin-bottom: 10px;">
                                                    <input type="number" name="numberofpeople"
                                                        placeholder="Number of People" required
                                                        style="width: 100%; padding: 10px; margin-bottom: 10px;">
                                                    <input type="date" name="date" required
                                                        style="width: 100%; padding: 10px; margin-bottom: 10px;">
                                                    <input type="time" name="time" required
                                                        style="width: 100%; padding: 10px; margin-bottom: 10px;">
                                                    <textarea name="message" placeholder="Additional Requests" style="width: 100%; padding: 10px; margin-bottom: 10px;"></textarea>

                                                    <button type="submit" class="tourmaster-button"
                                                        style="padding: 10px; background-color: #48bf84; color: white; border-radius: 5px;">
                                                        Submit Booking
                                                    </button>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="tourmaster-pagination tourmaster-ajax-action tourmaster-style-round tourmaster-right-align tourmaster-item-pdlr"
                                            data-tm-ajax="tourmaster_tour_ajax"
                                            data-settings='{"category":"","tag":"","num-fetch":"9","layout":"fitrows","thumbnail-size":"Personnel Thumbnail","orderby":"date","order":"desc","tour-style":"grid","hover":"title-icon","hover-info":["title","icon"],"has-column":"yes","no-space":"no","excerpt":"none","excerpt-number":"55","column-size":"30","filterer":"none","filterer-align":"center","pagination":"page","custom-pagination":true,"grid-style":"style-2","tour-info":["duration-text","availability","departure-location"],"tour-rating":"enable","tour-border-radius":"10px","frame-shadow-size":{"x":"0px","y":"20px","size":"25px"},"frame-shadow-color":"#004760","frame-shadow-opacity":"0.09","tour-title-font-size":"21px","tour-title-font-weight":"500","tour-title-letter-spacing":"0px","tour-title-text-transform":"none","price-position":"","paged":1,"filter-icon":"svg","enable-order-filterer":"enable","order-filterer-grid-style":"grid-with-frame","order-filterer-grid-style-thumbnail":"Personnel Thumbnail","order-filterer-grid-style-column":"30","order-filterer-list-style":"medium-with-frame","order-filterer-list-style-thumbnail":"Tour Side Thumbnail","s":"","tax_query":{"relation":"AND"},"meta_query":{"relation":"AND"},"with-frame":"enable","column-size-temp":"30"}'
                                            data-target="tourmaster-tour-item-holder" data-target-action="replace"
                                            data-ajax-url="https://demo.goodlayers.com/zurf/scuba/wp-admin/admin-ajax.php">
                                            <a class="page-numbers tourmaster-active" data-ajax-name="paged"
                                                data-ajax-value="1">1</a> <a class="page-numbers" data-ajax-name="paged"
                                                data-ajax-value="2">2</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <style>
        .trip-form {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .form-group {
            flex-basis: 48%;
            /* تحديد عرض الحقول ليكون 48% من الحاوية */
            margin-right: 2%;
        }

        .form-group:last-child {
            margin-right: 0;
        }

        .label-field {
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
            font-size: 14px;
        }

        .input-field,
        .textarea-field {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            background-color: #fff;
            transition: border-color 0.3s;
        }

        .input-field:focus,
        .textarea-field:focus {
            border-color: #007bff;
            outline: none;
        }

        .textarea-field {
            resize: vertical;
            min-height: 150px;
        }

        .submit-btn {
            margin-top: 20px;
            padding: 12px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .submit-btn:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .submit-btn:focus {
            outline: none;
        }

        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
            }

            .form-group {
                margin-bottom: 15px;
                flex-basis: 100%;
                /* في الشاشات الصغيرة، الحقول تأخذ 100% من العرض */
            }
        }
    </style>
