@extends("home.layout.userside")
@section("content")

<div class="zurf-page-title-wrap zurf-style-custom zurf-center-align">
    <div class="zurf-header-transparent-substitute"></div>
    <div class="zurf-page-title-overlay"></div>
    <div class="zurf-page-title-container zurf-container">
        <div class="zurf-page-title-content zurf-item-pdlr"><h1 class="zurf-page-title">Search Tours</h1></div>
    </div>
</div>
<div class="zurf-page-wrapper" id="zurf-page-wrapper">
    <div class="tourmaster-template-wrapper tourmaster-search-style-2">
        <div class="tourmaster-container">
            <div class="tourmaster-sidebar-wrap clearfix tourmaster-sidebar-style-none">
                <div class="tourmaster-sidebar-center tourmaster-column-60">
                    <div class="tourmaster-page-content">
                        <div class="tourmaster-tour-search-item-wrap">
                            <div class="tourmaster-tour-search-item clearfix tourmaster-style-full tourmaster-column-count-8 tourmaster-item-pdlr tourmaster-input-style-default tourmaster-tour-search-item-style-2">
                                <div class="tourmaster-tour-search-wrap clearfix tourmaster-with-frame">
                                    <form class="tourmaster-form-field tourmaster-with-border" action="#" method="GET">
                                        <div class="tourmaster-tour-search-field tourmaster-tour-search-field-keywords">
                                            <label class="gdlr-core-skin-title">Keywords</label>
                                            <div class="tourmaster-tour-search-field-inner"><input name="tour-search" type="text" value="" /></div>
                                        </div>
                                        <div class="tourmaster-type-filter-item">
                                            <h5 class="tourmaster-type-filter-item-title">Category</h5>
                                            <label class="tourmaster-type-filter-term">
                                                <input type="checkbox" name="tax-tour_category[]" value="active-adventures" />
                                                <span class="tourmaster-type-filter-display"><i class="fa fa-check"></i><span class="tourmaster-head">Active Adventures</span></span>
                                            </label>
                                            <label class="tourmaster-type-filter-term">
                                                <input type="checkbox" name="tax-tour_category[]" value="expedition-cruise" />
                                                <span class="tourmaster-type-filter-display"><i class="fa fa-check"></i><span class="tourmaster-head">Expedition Cruise</span></span>
                                            </label>
                                            <label class="tourmaster-type-filter-term">
                                                <input type="checkbox" name="tax-tour_category[]" value="light-moderate" />
                                                <span class="tourmaster-type-filter-display"><i class="fa fa-check"></i><span class="tourmaster-head">Light Moderate</span></span>
                                            </label>
                                            <label class="tourmaster-type-filter-term">
                                                <input type="checkbox" name="tax-tour_category[]" value="moderate" />
                                                <span class="tourmaster-type-filter-display"><i class="fa fa-check"></i><span class="tourmaster-head">Moderate</span></span>
                                            </label>
                                            <label class="tourmaster-type-filter-term">
                                                <input type="checkbox" name="tax-tour_category[]" value="pro-dive" />
                                                <span class="tourmaster-type-filter-display"><i class="fa fa-check"></i><span class="tourmaster-head">Pro Dive</span></span>
                                            </label>
                                            <label class="gdlr-core-skin-title">
                                                <input class="tourmaster-type-filter-show-more" type="checkbox" /><span class="tourmaster-type-filter-more-button">More<i class="fa fa-angle-down"></i></span>
                                                <div class="tourmaster-type-filter-hide">
                                                    <label class="tourmaster-type-filter-term">
                                                        <input type="checkbox" name="tax-tour_category[]" value="scuba" />
                                                        <span class="tourmaster-type-filter-display"><i class="fa fa-check"></i><span class="tourmaster-head">Scuba</span></span>
                                                    </label>
                                                    <label class="tourmaster-type-filter-term">
                                                        <input type="checkbox" name="tax-tour_category[]" value="signature-land" />
                                                        <span class="tourmaster-type-filter-display"><i class="fa fa-check"></i><span class="tourmaster-head">Signature Land</span></span>
                                                    </label>
                                                    <label class="tourmaster-type-filter-term">
                                                        <input type="checkbox" name="tax-tour_category[]" value="snorkeling" />
                                                        <span class="tourmaster-type-filter-display"><i class="fa fa-check"></i><span class="tourmaster-head">snorkeling</span></span>
                                                    </label>
                                                    <label class="tourmaster-type-filter-term">
                                                        <input type="checkbox" name="tax-tour_category[]" value="surfing" />
                                                        <span class="tourmaster-type-filter-display"><i class="fa fa-check"></i><span class="tourmaster-head">Surfing</span></span>
                                                    </label>
                                                    <label class="tourmaster-type-filter-term">
                                                        <input type="checkbox" name="tax-tour_category[]" value="tour-exclusive" />
                                                        <span class="tourmaster-type-filter-display"><i class="fa fa-check"></i><span class="tourmaster-head">Tour Exclusive</span></span>
                                                    </label>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tourmaster-tour-search-field tourmaster-tour-search-field-duration">
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
                                                <input class="tourmaster-datepicker" type="text" value="" data-date-format="d M yy" /><input class="tourmaster-datepicker-alt" name="date" type="hidden" value="" />
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
                                            <div class="tourmaster-tour-search-field tourmaster-tour-search-field-min-price">
                                                <label class="gdlr-core-skin-title">Min Price</label><input name="min-price" type="text" value="" />
                                            </div>
                                        </div>
                                        <div class="tourmaster-column-30 tourmaster-search-price-column-right">
                                            <div class="tourmaster-tour-search-field tourmaster-tour-search-field-max-price">
                                                <label class="gdlr-core-skin-title">Max Price</label><input name="max-price" type="text" value="" />
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="tourmaster-tour-search-field tourmaster-tour-search-field-rating clearfix">
                                            <label class="gdlr-core-skin-title">Rating</label><span class="tourmaster-rating-select" data-rating-score="0"></span>
                                            <i class="tourmaster-rating-select fa fa-star-o" data-rating-score="1"></i><span class="tourmaster-rating-select" data-rating-score="2"></span>
                                            <i class="tourmaster-rating-select fa fa-star-o" data-rating-score="3"></i><span class="tourmaster-rating-select" data-rating-score="4"></span>
                                            <i class="tourmaster-rating-select fa fa-star-o" data-rating-score="5"></i><span class="tourmaster-rating-select" data-rating-score="6"></span>
                                            <i class="tourmaster-rating-select fa fa-star-o" data-rating-score="7"></i><span class="tourmaster-rating-select" data-rating-score="8"></span>
                                            <i class="tourmaster-rating-select fa fa-star-o" data-rating-score="9"></i><span class="tourmaster-rating-select" data-rating-score="10"></span>
                                            <input type="hidden" name="rating" value="0" /><span class="tourmaster-tail">or more</span>
                                        </div>
                                        <a class="tourmaster-tour-search-filter-clear" href="#">× Clear Filter</a><input class="tourmaster-tour-search-submit" type="submit" value="Search" />
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tourmaster-tour-search-content-wrap">
                            <h3 class="tourmaster-tour-search-content-head tourmaster-item-mglr">18 Results Found</h3>
                            <div class="tourmaster-tour-item clearfix tourmaster-tour-item-style-grid tourmaster-tour-item-column-2">
                                <div
                                    class="tourmaster-tour-order-filterer-wrap tourmaster-item-mglr clearfix"
                                    data-tm-ajax="tourmaster_tour_order_ajax"
                                    data-settings='{"category":"","tag":"","num-fetch":"9","layout":"fitrows","thumbnail-size":"Personnel Thumbnail","orderby":"date","order":"desc","tour-style":"grid","hover":"title-icon","hover-info":["title","icon"],"has-column":"yes","no-space":"no","excerpt":"none","excerpt-number":"55","column-size":"30","filterer":"none","filterer-align":"center","pagination":"page","custom-pagination":true,"grid-style":"style-2","tour-info":["duration-text","availability","departure-location"],"tour-rating":"enable","tour-border-radius":"10px","frame-shadow-size":{"x":"0px","y":"20px","size":"25px"},"frame-shadow-color":"#004760","frame-shadow-opacity":"0.09","tour-title-font-size":"21px","tour-title-font-weight":"500","tour-title-letter-spacing":"0px","tour-title-text-transform":"none","price-position":"","paged":1,"filter-icon":"svg","enable-order-filterer":"enable","order-filterer-grid-style":"grid-with-frame","order-filterer-grid-style-thumbnail":"Personnel Thumbnail","order-filterer-grid-style-column":"30","order-filterer-list-style":"medium-with-frame","order-filterer-list-style-thumbnail":"Tour Side Thumbnail","s":"","tax_query":{"relation":"AND"},"meta_query":{"relation":"AND"},"with-frame":"enable","column-size-temp":"30"}'
                                    data-target="tourmaster-tour-item-holder"
                                    data-target-action="replace"
                                    data-ajax-url="https://demo.goodlayers.com/zurf/scuba/wp-admin/admin-ajax.php"
                                >
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
                                        <a href="#" data-ajax-name="item-style" class="" data-ajax-value="list-style">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewbox="0 0 25 20">
                                                <circle class="cls-1" cx="2" cy="2" r="2"></circle>
                                                <circle id="Ellipse_955_copy_2" data-name="Ellipse 955 copy 2" class="cls-1" cx="2" cy="10" r="2"></circle>
                                                <circle id="Ellipse_955_copy_3" data-name="Ellipse 955 copy 3" class="cls-1" cx="2" cy="18" r="2"></circle>
                                                <rect class="cls-1" x="6" width="19" height="4" rx="2" ry="2"></rect>
                                                <rect id="Rectangle_959_copy" data-name="Rectangle 959 copy" class="cls-1" x="6" y="8" width="19" height="4" rx="2" ry="2"></rect>
                                                <rect id="Rectangle_959_copy_2" data-name="Rectangle 959 copy 2" class="cls-1" x="6" y="16" width="19" height="4" rx="2" ry="2"></rect>
                                            </svg>
                                        </a>
                                        <a href="#" data-ajax-name="item-style" class="tourmaster-active" data-ajax-value="grid-style">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 18 18">
                                                <circle id="Ellipse_955_copy_2" data-name="Ellipse 955 copy 2" class="cls-1" cx="2" cy="2" r="2"></circle>
                                                <circle id="Ellipse_955_copy_3" data-name="Ellipse 955 copy 3" class="cls-1" cx="9" cy="2" r="2"></circle>
                                                <circle id="Ellipse_955_copy_4" data-name="Ellipse 955 copy 4" class="cls-1" cx="16" cy="2" r="2"></circle>
                                                <circle id="Ellipse_955_copy_5" data-name="Ellipse 955 copy 5" class="cls-1" cx="2" cy="9" r="2"></circle>
                                                <circle id="Ellipse_955_copy_5-2" data-name="Ellipse 955 copy 5" class="cls-1" cx="9" cy="9" r="2"></circle>
                                                <circle id="Ellipse_955_copy_5-3" data-name="Ellipse 955 copy 5" class="cls-1" cx="16" cy="9" r="2"></circle>
                                                <circle id="Ellipse_955_copy_6" data-name="Ellipse 955 copy 6" class="cls-1" cx="2" cy="16" r="2"></circle>
                                                <circle id="Ellipse_955_copy_6-2" data-name="Ellipse 955 copy 6" class="cls-1" cx="9" cy="16" r="2"></circle>
                                                <circle id="Ellipse_955_copy_6-3" data-name="Ellipse 955 copy 6" class="cls-1" cx="16" cy="16" r="2"></circle>
                                            </svg>
                                        </a>
                                    </span>
                                </div>
                                <div class="tourmaster-tour-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                    <div class="gdlr-core-item-list tourmaster-item-pdlr tourmaster-column-30 tourmaster-column-first">
                                        <div class="tourmaster-tour-grid tourmaster-tour-frame tourmaster-tour-grid-style-2 tourmaster-price-right-title">
                                            <div
                                                class="tourmaster-tour-grid-inner"
                                                style="
                                                    box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -moz-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -webkit-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    border-radius: 10px;
                                                    -moz-border-radius: 10px;
                                                    -webkit-border-radius: 10px;
                                                "
                                            >
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                    <a href="singletor">
                                                        <img src="images/steven-wilcox-FlXGsR5nCqk-unsplash-700x500.jpg" alt="" width="700" height="500" />
                                                    </a>
                                                </div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-40">
                                                    <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff; background-color: #48bf84;">
                                                        <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(72, 191, 132, 0.5);"></div>
                                                        Very Popular!
                                                    </div>
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                        <a href="singletor">
                                                            <svg
                                                                version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                x="0px"
                                                                y="0px"
                                                                viewbox="0 0 512 512"
                                                                xml:space="preserve"
                                                                style="fill: #48bf84;"
                                                            >
                                                                <path
                                                                    d="M397.413,199.303c-2.944-4.576-8-7.296-13.408-7.296h-112v-176c0-7.552-5.28-14.08-12.672-15.648
                                                                    c-7.52-1.6-14.88,2.272-17.952,9.152l-128,288c-2.208,4.928-1.728,10.688,1.216,15.2c2.944,4.544,8,7.296,13.408,7.296h112v176
                                                                    c0,7.552,5.28,14.08,12.672,15.648c1.12,0.224,2.24,0.352,3.328,0.352c6.208,0,12-3.616,14.624-9.504l128-288
                                                                    C400.805,209.543,400.389,203.847,397.413,199.303z"
                                                                ></path>
                                                            </svg>
                                                            <span>9 Days Surf Costa Rica </span>
                                                        </a>
                                                    </h3>
                                                    <div class="tourmaster-tour-price-wrap">
                                                        <span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail">$1,700</span></span>
                                                    </div>
                                                    <div class="tourmaster-tour-info-wrap clearfix">
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-duration-text">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 465 465" xml:space="preserve">
                                                                <path
                                                                    d="M279.591,423.714c-3.836,0.956-7.747,1.805-11.629,2.52c-10.148,1.887-16.857,11.647-14.98,21.804
                                                                    c0.927,4.997,3.765,9.159,7.618,11.876c3.971,2.795,9.025,4.057,14.175,3.099c4.623-0.858,9.282-1.867,13.854-3.008
                                                                    c10.021-2.494,16.126-12.646,13.626-22.662C299.761,427.318,289.618,421.218,279.591,423.714z"
                                                                ></path>
                                                                <path
                                                                    d="M417.887,173.047c1.31,3.948,3.811,7.171,6.97,9.398c4.684,3.299,10.813,4.409,16.662,2.475
                                                                    c9.806-3.256,15.119-13.83,11.875-23.631c-1.478-4.468-3.118-8.95-4.865-13.314c-3.836-9.59-14.714-14.259-24.309-10.423
                                                                    c-9.585,3.834-14.256,14.715-10.417,24.308C415.271,165.528,416.646,169.293,417.887,173.047z"
                                                                ></path>
                                                                <path
                                                                    d="M340.36,397.013c-3.299,2.178-6.704,4.286-10.134,6.261c-8.949,5.162-12.014,16.601-6.854,25.546
                                                                    c1.401,2.433,3.267,4.422,5.416,5.942c5.769,4.059,13.604,4.667,20.127,0.909c4.078-2.352,8.133-4.854,12.062-7.452
                                                                    c8.614-5.691,10.985-17.294,5.291-25.912C360.575,393.686,348.977,391.318,340.36,397.013z"
                                                                ></path>
                                                                <path
                                                                    d="M465.022,225.279c-0.407-10.322-9.101-18.356-19.426-17.953c-10.312,0.407-18.352,9.104-17.947,19.422
                                                                    c0.155,3.945,0.195,7.949,0.104,11.89c-0.145,6.473,3.021,12.243,7.941,15.711c2.931,2.064,6.488,3.313,10.345,3.401
                                                                    c10.322,0.229,18.876-7.958,19.105-18.285C465.247,234.756,465.208,229.985,465.022,225.279z"
                                                                ></path>
                                                                <path
                                                                    d="M414.835,347.816c-8.277-6.21-19.987-4.524-26.186,3.738c-2.374,3.164-4.874,6.289-7.434,9.298
                                                                    c-6.69,7.86-5.745,19.666,2.115,26.361c0.448,0.38,0.901,0.729,1.371,1.057c7.814,5.509,18.674,4.243,24.992-3.171
                                                                    c3.057-3.59,6.037-7.323,8.874-11.102C424.767,365.735,423.089,354.017,414.835,347.816z"
                                                                ></path>
                                                                <path
                                                                    d="M442.325,280.213c-9.855-3.09-20.35,2.396-23.438,12.251c-1.182,3.765-2.492,7.548-3.906,11.253
                                                                    c-3.105,8.156-0.13,17.13,6.69,21.939c1.251,0.879,2.629,1.624,4.126,2.19c9.649,3.682,20.454-1.159,24.132-10.812
                                                                    c1.679-4.405,3.237-8.906,4.646-13.382C457.66,293.795,452.178,283.303,442.325,280.213z"
                                                                ></path>
                                                                <path
                                                                    d="M197.999,426.402c-16.72-3.002-32.759-8.114-47.968-15.244c-0.18-0.094-0.341-0.201-0.53-0.287
                                                                    c-3.584-1.687-7.162-3.494-10.63-5.382c-0.012-0.014-0.034-0.023-0.053-0.031c-6.363-3.504-12.573-7.381-18.606-11.628
                                                                    C32.24,331.86,11.088,209.872,73.062,121.901c13.476-19.122,29.784-35.075,47.965-47.719c0.224-0.156,0.448-0.311,0.67-0.468
                                                                    c64.067-44.144,151.06-47.119,219.089-1.757l-14.611,21.111c-4.062,5.876-1.563,10.158,5.548,9.518l63.467-5.682
                                                                    c7.12-0.64,11.378-6.799,9.463-13.675L387.61,21.823c-1.908-6.884-6.793-7.708-10.859-1.833l-14.645,21.161
                                                                    C312.182,7.638,252.303-5.141,192.87,5.165c-5.986,1.036-11.888,2.304-17.709,3.78c-0.045,0.008-0.081,0.013-0.117,0.021
                                                                    c-0.225,0.055-0.453,0.128-0.672,0.189C123.122,22.316,78.407,52.207,46.5,94.855c-0.269,0.319-0.546,0.631-0.8,0.978
                                                                    c-1.061,1.429-2.114,2.891-3.145,4.353c-1.686,2.396-3.348,4.852-4.938,7.308c-0.199,0.296-0.351,0.597-0.525,0.896
                                                                    C10.762,149.191-1.938,196.361,0.24,244.383c0.005,0.158-0.004,0.317,0,0.479c0.211,4.691,0.583,9.447,1.088,14.129
                                                                    c0.027,0.302,0.094,0.588,0.145,0.89c0.522,4.708,1.177,9.427,1.998,14.145c8.344,48.138,31.052,91.455,65.079,125.16
                                                                    c0.079,0.079,0.161,0.165,0.241,0.247c0.028,0.031,0.059,0.047,0.086,0.076c9.142,9.017,19.086,17.357,29.793,24.898
                                                                    c28.02,19.744,59.221,32.795,92.729,38.808c10.167,1.827,19.879-4.941,21.703-15.103
                                                                    C214.925,437.943,208.163,428.223,197.999,426.402z"
                                                                ></path>
                                                                <path
                                                                    d="M221.124,83.198c-8.363,0-15.137,6.78-15.137,15.131v150.747l137.87,71.271c2.219,1.149,4.595,1.69,6.933,1.69
                                                                    c5.476,0,10.765-2.982,13.454-8.185c3.835-7.426,0.933-16.549-6.493-20.384l-121.507-62.818V98.329
                                                                    C236.243,89.978,229.477,83.198,221.124,83.198z"
                                                                ></path>
                                                            </svg>
                                                            9 days
                                                        </div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-availability"><i class="fa fa-calendar"></i>Availability : Mar - Sep</div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-departure-location"><i class="flaticon-takeoff-the-plane"></i>Costa Rica</div>
                                                    </div>
                                                    <div class="tourmaster-tour-rating">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <span class="tourmaster-tour-rating-text">(1 Review)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-item-list tourmaster-item-pdlr tourmaster-column-30">
                                        <div class="tourmaster-tour-grid tourmaster-tour-frame tourmaster-tour-grid-style-2 tourmaster-price-right-title">
                                            <div
                                                class="tourmaster-tour-grid-inner"
                                                style="
                                                    box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -moz-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -webkit-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    border-radius: 10px;
                                                    -moz-border-radius: 10px;
                                                    -webkit-border-radius: 10px;
                                                "
                                            >
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                    <a href="singletor">
                                                        <img
                                                            src="images/lachlan-dempsey-O14abKtZ5iY-unsplash-700x500.jpg"
                                                            alt=""
                                                            width="700"
                                                            height="500"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-40">
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                        <a href="singletor">Hawaiian Canoe Surfing and Island Adventure</a>
                                                    </h3>
                                                    <div class="tourmaster-tour-price-wrap">
                                                        <span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail">$139</span></span>
                                                    </div>
                                                    <div class="tourmaster-tour-info-wrap clearfix">
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-duration-text">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 465 465" xml:space="preserve">
                                                                <path
                                                                    d="M279.591,423.714c-3.836,0.956-7.747,1.805-11.629,2.52c-10.148,1.887-16.857,11.647-14.98,21.804
                                                                    c0.927,4.997,3.765,9.159,7.618,11.876c3.971,2.795,9.025,4.057,14.175,3.099c4.623-0.858,9.282-1.867,13.854-3.008
                                                                    c10.021-2.494,16.126-12.646,13.626-22.662C299.761,427.318,289.618,421.218,279.591,423.714z"
                                                                ></path>
                                                                <path
                                                                    d="M417.887,173.047c1.31,3.948,3.811,7.171,6.97,9.398c4.684,3.299,10.813,4.409,16.662,2.475
                                                                    c9.806-3.256,15.119-13.83,11.875-23.631c-1.478-4.468-3.118-8.95-4.865-13.314c-3.836-9.59-14.714-14.259-24.309-10.423
                                                                    c-9.585,3.834-14.256,14.715-10.417,24.308C415.271,165.528,416.646,169.293,417.887,173.047z"
                                                                ></path>
                                                                <path
                                                                    d="M340.36,397.013c-3.299,2.178-6.704,4.286-10.134,6.261c-8.949,5.162-12.014,16.601-6.854,25.546
                                                                    c1.401,2.433,3.267,4.422,5.416,5.942c5.769,4.059,13.604,4.667,20.127,0.909c4.078-2.352,8.133-4.854,12.062-7.452
                                                                    c8.614-5.691,10.985-17.294,5.291-25.912C360.575,393.686,348.977,391.318,340.36,397.013z"
                                                                ></path>
                                                                <path
                                                                    d="M465.022,225.279c-0.407-10.322-9.101-18.356-19.426-17.953c-10.312,0.407-18.352,9.104-17.947,19.422
                                                                    c0.155,3.945,0.195,7.949,0.104,11.89c-0.145,6.473,3.021,12.243,7.941,15.711c2.931,2.064,6.488,3.313,10.345,3.401
                                                                    c10.322,0.229,18.876-7.958,19.105-18.285C465.247,234.756,465.208,229.985,465.022,225.279z"
                                                                ></path>
                                                                <path
                                                                    d="M414.835,347.816c-8.277-6.21-19.987-4.524-26.186,3.738c-2.374,3.164-4.874,6.289-7.434,9.298
                                                                    c-6.69,7.86-5.745,19.666,2.115,26.361c0.448,0.38,0.901,0.729,1.371,1.057c7.814,5.509,18.674,4.243,24.992-3.171
                                                                    c3.057-3.59,6.037-7.323,8.874-11.102C424.767,365.735,423.089,354.017,414.835,347.816z"
                                                                ></path>
                                                                <path
                                                                    d="M442.325,280.213c-9.855-3.09-20.35,2.396-23.438,12.251c-1.182,3.765-2.492,7.548-3.906,11.253
                                                                    c-3.105,8.156-0.13,17.13,6.69,21.939c1.251,0.879,2.629,1.624,4.126,2.19c9.649,3.682,20.454-1.159,24.132-10.812
                                                                    c1.679-4.405,3.237-8.906,4.646-13.382C457.66,293.795,452.178,283.303,442.325,280.213z"
                                                                ></path>
                                                                <path
                                                                    d="M197.999,426.402c-16.72-3.002-32.759-8.114-47.968-15.244c-0.18-0.094-0.341-0.201-0.53-0.287
                                                                    c-3.584-1.687-7.162-3.494-10.63-5.382c-0.012-0.014-0.034-0.023-0.053-0.031c-6.363-3.504-12.573-7.381-18.606-11.628
                                                                    C32.24,331.86,11.088,209.872,73.062,121.901c13.476-19.122,29.784-35.075,47.965-47.719c0.224-0.156,0.448-0.311,0.67-0.468
                                                                    c64.067-44.144,151.06-47.119,219.089-1.757l-14.611,21.111c-4.062,5.876-1.563,10.158,5.548,9.518l63.467-5.682
                                                                    c7.12-0.64,11.378-6.799,9.463-13.675L387.61,21.823c-1.908-6.884-6.793-7.708-10.859-1.833l-14.645,21.161
                                                                    C312.182,7.638,252.303-5.141,192.87,5.165c-5.986,1.036-11.888,2.304-17.709,3.78c-0.045,0.008-0.081,0.013-0.117,0.021
                                                                    c-0.225,0.055-0.453,0.128-0.672,0.189C123.122,22.316,78.407,52.207,46.5,94.855c-0.269,0.319-0.546,0.631-0.8,0.978
                                                                    c-1.061,1.429-2.114,2.891-3.145,4.353c-1.686,2.396-3.348,4.852-4.938,7.308c-0.199,0.296-0.351,0.597-0.525,0.896
                                                                    C10.762,149.191-1.938,196.361,0.24,244.383c0.005,0.158-0.004,0.317,0,0.479c0.211,4.691,0.583,9.447,1.088,14.129
                                                                    c0.027,0.302,0.094,0.588,0.145,0.89c0.522,4.708,1.177,9.427,1.998,14.145c8.344,48.138,31.052,91.455,65.079,125.16
                                                                    c0.079,0.079,0.161,0.165,0.241,0.247c0.028,0.031,0.059,0.047,0.086,0.076c9.142,9.017,19.086,17.357,29.793,24.898
                                                                    c28.02,19.744,59.221,32.795,92.729,38.808c10.167,1.827,19.879-4.941,21.703-15.103
                                                                    C214.925,437.943,208.163,428.223,197.999,426.402z"
                                                                ></path>
                                                                <path
                                                                    d="M221.124,83.198c-8.363,0-15.137,6.78-15.137,15.131v150.747l137.87,71.271c2.219,1.149,4.595,1.69,6.933,1.69
                                                                    c5.476,0,10.765-2.982,13.454-8.185c3.835-7.426,0.933-16.549-6.493-20.384l-121.507-62.818V98.329
                                                                    C236.243,89.978,229.477,83.198,221.124,83.198z"
                                                                ></path>
                                                            </svg>
                                                            2 Hours 30 Minutes
                                                        </div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-availability"><i class="fa fa-calendar"></i>Availability : Feb - Oct</div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-departure-location"><i class="flaticon-takeoff-the-plane"></i>Hawaii, USA</div>
                                                    </div>
                                                    <div class="tourmaster-tour-rating">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <span class="tourmaster-tour-rating-text">(1 Review)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-item-list tourmaster-item-pdlr tourmaster-column-30 tourmaster-column-first">
                                        <div class="tourmaster-tour-grid tourmaster-tour-frame tourmaster-tour-grid-style-2 tourmaster-price-right-title">
                                            <div
                                                class="tourmaster-tour-grid-inner"
                                                style="
                                                    box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -moz-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -webkit-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    border-radius: 10px;
                                                    -moz-border-radius: 10px;
                                                    -webkit-border-radius: 10px;
                                                "
                                            >
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                    <a href="singletor">
                                                        <img src="images/felipe-archer-9WLWuVuHK-E-unsplash-700x500.jpg" alt="" width="700" height="500" />
                                                    </a>
                                                </div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-40">
                                                    <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff; background-color: #48bf84;">
                                                        <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(72, 191, 132, 0.5);"></div>
                                                        New!
                                                    </div>
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                        <a href="singletor">
                                                            <svg
                                                                version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                x="0px"
                                                                y="0px"
                                                                viewbox="0 0 512 512"
                                                                xml:space="preserve"
                                                                style="fill: #48bf84;"
                                                            >
                                                                <path
                                                                    d="M397.413,199.303c-2.944-4.576-8-7.296-13.408-7.296h-112v-176c0-7.552-5.28-14.08-12.672-15.648
                                                                    c-7.52-1.6-14.88,2.272-17.952,9.152l-128,288c-2.208,4.928-1.728,10.688,1.216,15.2c2.944,4.544,8,7.296,13.408,7.296h112v176
                                                                    c0,7.552,5.28,14.08,12.672,15.648c1.12,0.224,2.24,0.352,3.328,0.352c6.208,0,12-3.616,14.624-9.504l128-288
                                                                    C400.805,209.543,400.389,203.847,397.413,199.303z"
                                                                ></path>
                                                            </svg>
                                                            <span>Bushwalks &#038; Surfing (Enquiry Only)</span>
                                                        </a>
                                                    </h3>
                                                    <div class="tourmaster-tour-price-wrap">
                                                        <span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail">$1,270</span></span>
                                                    </div>
                                                    <div class="tourmaster-tour-info-wrap clearfix">
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-duration-text">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 465 465" xml:space="preserve">
                                                                <path
                                                                    d="M279.591,423.714c-3.836,0.956-7.747,1.805-11.629,2.52c-10.148,1.887-16.857,11.647-14.98,21.804
                                                                    c0.927,4.997,3.765,9.159,7.618,11.876c3.971,2.795,9.025,4.057,14.175,3.099c4.623-0.858,9.282-1.867,13.854-3.008
                                                                    c10.021-2.494,16.126-12.646,13.626-22.662C299.761,427.318,289.618,421.218,279.591,423.714z"
                                                                ></path>
                                                                <path
                                                                    d="M417.887,173.047c1.31,3.948,3.811,7.171,6.97,9.398c4.684,3.299,10.813,4.409,16.662,2.475
                                                                    c9.806-3.256,15.119-13.83,11.875-23.631c-1.478-4.468-3.118-8.95-4.865-13.314c-3.836-9.59-14.714-14.259-24.309-10.423
                                                                    c-9.585,3.834-14.256,14.715-10.417,24.308C415.271,165.528,416.646,169.293,417.887,173.047z"
                                                                ></path>
                                                                <path
                                                                    d="M340.36,397.013c-3.299,2.178-6.704,4.286-10.134,6.261c-8.949,5.162-12.014,16.601-6.854,25.546
                                                                    c1.401,2.433,3.267,4.422,5.416,5.942c5.769,4.059,13.604,4.667,20.127,0.909c4.078-2.352,8.133-4.854,12.062-7.452
                                                                    c8.614-5.691,10.985-17.294,5.291-25.912C360.575,393.686,348.977,391.318,340.36,397.013z"
                                                                ></path>
                                                                <path
                                                                    d="M465.022,225.279c-0.407-10.322-9.101-18.356-19.426-17.953c-10.312,0.407-18.352,9.104-17.947,19.422
                                                                    c0.155,3.945,0.195,7.949,0.104,11.89c-0.145,6.473,3.021,12.243,7.941,15.711c2.931,2.064,6.488,3.313,10.345,3.401
                                                                    c10.322,0.229,18.876-7.958,19.105-18.285C465.247,234.756,465.208,229.985,465.022,225.279z"
                                                                ></path>
                                                                <path
                                                                    d="M414.835,347.816c-8.277-6.21-19.987-4.524-26.186,3.738c-2.374,3.164-4.874,6.289-7.434,9.298
                                                                    c-6.69,7.86-5.745,19.666,2.115,26.361c0.448,0.38,0.901,0.729,1.371,1.057c7.814,5.509,18.674,4.243,24.992-3.171
                                                                    c3.057-3.59,6.037-7.323,8.874-11.102C424.767,365.735,423.089,354.017,414.835,347.816z"
                                                                ></path>
                                                                <path
                                                                    d="M442.325,280.213c-9.855-3.09-20.35,2.396-23.438,12.251c-1.182,3.765-2.492,7.548-3.906,11.253
                                                                    c-3.105,8.156-0.13,17.13,6.69,21.939c1.251,0.879,2.629,1.624,4.126,2.19c9.649,3.682,20.454-1.159,24.132-10.812
                                                                    c1.679-4.405,3.237-8.906,4.646-13.382C457.66,293.795,452.178,283.303,442.325,280.213z"
                                                                ></path>
                                                                <path
                                                                    d="M197.999,426.402c-16.72-3.002-32.759-8.114-47.968-15.244c-0.18-0.094-0.341-0.201-0.53-0.287
                                                                    c-3.584-1.687-7.162-3.494-10.63-5.382c-0.012-0.014-0.034-0.023-0.053-0.031c-6.363-3.504-12.573-7.381-18.606-11.628
                                                                    C32.24,331.86,11.088,209.872,73.062,121.901c13.476-19.122,29.784-35.075,47.965-47.719c0.224-0.156,0.448-0.311,0.67-0.468
                                                                    c64.067-44.144,151.06-47.119,219.089-1.757l-14.611,21.111c-4.062,5.876-1.563,10.158,5.548,9.518l63.467-5.682
                                                                    c7.12-0.64,11.378-6.799,9.463-13.675L387.61,21.823c-1.908-6.884-6.793-7.708-10.859-1.833l-14.645,21.161
                                                                    C312.182,7.638,252.303-5.141,192.87,5.165c-5.986,1.036-11.888,2.304-17.709,3.78c-0.045,0.008-0.081,0.013-0.117,0.021
                                                                    c-0.225,0.055-0.453,0.128-0.672,0.189C123.122,22.316,78.407,52.207,46.5,94.855c-0.269,0.319-0.546,0.631-0.8,0.978
                                                                    c-1.061,1.429-2.114,2.891-3.145,4.353c-1.686,2.396-3.348,4.852-4.938,7.308c-0.199,0.296-0.351,0.597-0.525,0.896
                                                                    C10.762,149.191-1.938,196.361,0.24,244.383c0.005,0.158-0.004,0.317,0,0.479c0.211,4.691,0.583,9.447,1.088,14.129
                                                                    c0.027,0.302,0.094,0.588,0.145,0.89c0.522,4.708,1.177,9.427,1.998,14.145c8.344,48.138,31.052,91.455,65.079,125.16
                                                                    c0.079,0.079,0.161,0.165,0.241,0.247c0.028,0.031,0.059,0.047,0.086,0.076c9.142,9.017,19.086,17.357,29.793,24.898
                                                                    c28.02,19.744,59.221,32.795,92.729,38.808c10.167,1.827,19.879-4.941,21.703-15.103
                                                                    C214.925,437.943,208.163,428.223,197.999,426.402z"
                                                                ></path>
                                                                <path
                                                                    d="M221.124,83.198c-8.363,0-15.137,6.78-15.137,15.131v150.747l137.87,71.271c2.219,1.149,4.595,1.69,6.933,1.69
                                                                    c5.476,0,10.765-2.982,13.454-8.185c3.835-7.426,0.933-16.549-6.493-20.384l-121.507-62.818V98.329
                                                                    C236.243,89.978,229.477,83.198,221.124,83.198z"
                                                                ></path>
                                                            </svg>
                                                            7 Days
                                                        </div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-availability"><i class="fa fa-calendar"></i>Availability : Mar - Nov</div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-departure-location"><i class="flaticon-takeoff-the-plane"></i>Sydney</div>
                                                    </div>
                                                    <div class="tourmaster-tour-rating">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <span class="tourmaster-tour-rating-text">(1 Review)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-item-list tourmaster-item-pdlr tourmaster-column-30">
                                        <div class="tourmaster-tour-grid tourmaster-tour-frame tourmaster-tour-grid-style-2 tourmaster-price-right-title">
                                            <div
                                                class="tourmaster-tour-grid-inner"
                                                style="
                                                    box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -moz-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -webkit-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    border-radius: 10px;
                                                    -moz-border-radius: 10px;
                                                    -webkit-border-radius: 10px;
                                                "
                                            >
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                    <a href="singletor">
                                                        <img
                                                            src="images/james-donaldson-toPRrcyAIUY-unsplash-700x500.jpg"
                                                            alt=""
                                                            width="700"
                                                            height="500"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-40">
                                                    <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff; background-color: #48bf84;">
                                                        <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(72, 191, 132, 0.5);"></div>
                                                        Hot Sale!
                                                    </div>
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                        <a href="singletor">
                                                            <svg
                                                                version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                x="0px"
                                                                y="0px"
                                                                viewbox="0 0 512 512"
                                                                xml:space="preserve"
                                                                style="fill: #48bf84;"
                                                            >
                                                                <path
                                                                    d="M397.413,199.303c-2.944-4.576-8-7.296-13.408-7.296h-112v-176c0-7.552-5.28-14.08-12.672-15.648
                                                                    c-7.52-1.6-14.88,2.272-17.952,9.152l-128,288c-2.208,4.928-1.728,10.688,1.216,15.2c2.944,4.544,8,7.296,13.408,7.296h112v176
                                                                    c0,7.552,5.28,14.08,12.672,15.648c1.12,0.224,2.24,0.352,3.328,0.352c6.208,0,12-3.616,14.624-9.504l128-288
                                                                    C400.805,209.543,400.389,203.847,397.413,199.303z"
                                                                ></path>
                                                            </svg>
                                                            <span>6 Days Rio Surfing Adventure</span>
                                                        </a>
                                                    </h3>
                                                    <div class="tourmaster-tour-price-wrap tourmaster-discount">
                                                        <span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail">$775</span></span>
                                                        <span class="tourmaster-tour-discount-price">$620</span>
                                                    </div>
                                                    <div class="tourmaster-tour-info-wrap clearfix">
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-duration-text">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 465 465" xml:space="preserve">
                                                                <path
                                                                    d="M279.591,423.714c-3.836,0.956-7.747,1.805-11.629,2.52c-10.148,1.887-16.857,11.647-14.98,21.804
                                                                    c0.927,4.997,3.765,9.159,7.618,11.876c3.971,2.795,9.025,4.057,14.175,3.099c4.623-0.858,9.282-1.867,13.854-3.008
                                                                    c10.021-2.494,16.126-12.646,13.626-22.662C299.761,427.318,289.618,421.218,279.591,423.714z"
                                                                ></path>
                                                                <path
                                                                    d="M417.887,173.047c1.31,3.948,3.811,7.171,6.97,9.398c4.684,3.299,10.813,4.409,16.662,2.475
                                                                    c9.806-3.256,15.119-13.83,11.875-23.631c-1.478-4.468-3.118-8.95-4.865-13.314c-3.836-9.59-14.714-14.259-24.309-10.423
                                                                    c-9.585,3.834-14.256,14.715-10.417,24.308C415.271,165.528,416.646,169.293,417.887,173.047z"
                                                                ></path>
                                                                <path
                                                                    d="M340.36,397.013c-3.299,2.178-6.704,4.286-10.134,6.261c-8.949,5.162-12.014,16.601-6.854,25.546
                                                                    c1.401,2.433,3.267,4.422,5.416,5.942c5.769,4.059,13.604,4.667,20.127,0.909c4.078-2.352,8.133-4.854,12.062-7.452
                                                                    c8.614-5.691,10.985-17.294,5.291-25.912C360.575,393.686,348.977,391.318,340.36,397.013z"
                                                                ></path>
                                                                <path
                                                                    d="M465.022,225.279c-0.407-10.322-9.101-18.356-19.426-17.953c-10.312,0.407-18.352,9.104-17.947,19.422
                                                                    c0.155,3.945,0.195,7.949,0.104,11.89c-0.145,6.473,3.021,12.243,7.941,15.711c2.931,2.064,6.488,3.313,10.345,3.401
                                                                    c10.322,0.229,18.876-7.958,19.105-18.285C465.247,234.756,465.208,229.985,465.022,225.279z"
                                                                ></path>
                                                                <path
                                                                    d="M414.835,347.816c-8.277-6.21-19.987-4.524-26.186,3.738c-2.374,3.164-4.874,6.289-7.434,9.298
                                                                    c-6.69,7.86-5.745,19.666,2.115,26.361c0.448,0.38,0.901,0.729,1.371,1.057c7.814,5.509,18.674,4.243,24.992-3.171
                                                                    c3.057-3.59,6.037-7.323,8.874-11.102C424.767,365.735,423.089,354.017,414.835,347.816z"
                                                                ></path>
                                                                <path
                                                                    d="M442.325,280.213c-9.855-3.09-20.35,2.396-23.438,12.251c-1.182,3.765-2.492,7.548-3.906,11.253
                                                                    c-3.105,8.156-0.13,17.13,6.69,21.939c1.251,0.879,2.629,1.624,4.126,2.19c9.649,3.682,20.454-1.159,24.132-10.812
                                                                    c1.679-4.405,3.237-8.906,4.646-13.382C457.66,293.795,452.178,283.303,442.325,280.213z"
                                                                ></path>
                                                                <path
                                                                    d="M197.999,426.402c-16.72-3.002-32.759-8.114-47.968-15.244c-0.18-0.094-0.341-0.201-0.53-0.287
                                                                    c-3.584-1.687-7.162-3.494-10.63-5.382c-0.012-0.014-0.034-0.023-0.053-0.031c-6.363-3.504-12.573-7.381-18.606-11.628
                                                                    C32.24,331.86,11.088,209.872,73.062,121.901c13.476-19.122,29.784-35.075,47.965-47.719c0.224-0.156,0.448-0.311,0.67-0.468
                                                                    c64.067-44.144,151.06-47.119,219.089-1.757l-14.611,21.111c-4.062,5.876-1.563,10.158,5.548,9.518l63.467-5.682
                                                                    c7.12-0.64,11.378-6.799,9.463-13.675L387.61,21.823c-1.908-6.884-6.793-7.708-10.859-1.833l-14.645,21.161
                                                                    C312.182,7.638,252.303-5.141,192.87,5.165c-5.986,1.036-11.888,2.304-17.709,3.78c-0.045,0.008-0.081,0.013-0.117,0.021
                                                                    c-0.225,0.055-0.453,0.128-0.672,0.189C123.122,22.316,78.407,52.207,46.5,94.855c-0.269,0.319-0.546,0.631-0.8,0.978
                                                                    c-1.061,1.429-2.114,2.891-3.145,4.353c-1.686,2.396-3.348,4.852-4.938,7.308c-0.199,0.296-0.351,0.597-0.525,0.896
                                                                    C10.762,149.191-1.938,196.361,0.24,244.383c0.005,0.158-0.004,0.317,0,0.479c0.211,4.691,0.583,9.447,1.088,14.129
                                                                    c0.027,0.302,0.094,0.588,0.145,0.89c0.522,4.708,1.177,9.427,1.998,14.145c8.344,48.138,31.052,91.455,65.079,125.16
                                                                    c0.079,0.079,0.161,0.165,0.241,0.247c0.028,0.031,0.059,0.047,0.086,0.076c9.142,9.017,19.086,17.357,29.793,24.898
                                                                    c28.02,19.744,59.221,32.795,92.729,38.808c10.167,1.827,19.879-4.941,21.703-15.103
                                                                    C214.925,437.943,208.163,428.223,197.999,426.402z"
                                                                ></path>
                                                                <path
                                                                    d="M221.124,83.198c-8.363,0-15.137,6.78-15.137,15.131v150.747l137.87,71.271c2.219,1.149,4.595,1.69,6.933,1.69
                                                                    c5.476,0,10.765-2.982,13.454-8.185c3.835-7.426,0.933-16.549-6.493-20.384l-121.507-62.818V98.329
                                                                    C236.243,89.978,229.477,83.198,221.124,83.198z"
                                                                ></path>
                                                            </svg>
                                                            6 Days
                                                        </div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-availability"><i class="fa fa-calendar"></i>Availability : Jan - Jul</div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-departure-location"><i class="flaticon-takeoff-the-plane"></i>Rio de Janeiro, Brazil</div>
                                                    </div>
                                                    <div class="tourmaster-tour-rating">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <span class="tourmaster-tour-rating-text">(1 Review)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-item-list tourmaster-item-pdlr tourmaster-column-30 tourmaster-column-first">
                                        <div class="tourmaster-tour-grid tourmaster-tour-frame tourmaster-tour-grid-style-2 tourmaster-price-right-title">
                                            <div
                                                class="tourmaster-tour-grid-inner"
                                                style="
                                                    box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -moz-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -webkit-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    border-radius: 10px;
                                                    -moz-border-radius: 10px;
                                                    -webkit-border-radius: 10px;
                                                "
                                            >
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                    <a href="singletor">
                                                        <img src="images/iStock-1138573276-700x500.jpg" alt="" width="700" height="500" />
                                                    </a>
                                                </div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-40">
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                        <a href="singletor">Byron Bay Surf Lessons</a>
                                                    </h3>
                                                    <div class="tourmaster-tour-price-wrap">
                                                        <span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail">$89</span></span>
                                                    </div>
                                                    <div class="tourmaster-tour-info-wrap clearfix">
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-duration-text">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 465 465" xml:space="preserve">
                                                                <path
                                                                    d="M279.591,423.714c-3.836,0.956-7.747,1.805-11.629,2.52c-10.148,1.887-16.857,11.647-14.98,21.804
                                                                    c0.927,4.997,3.765,9.159,7.618,11.876c3.971,2.795,9.025,4.057,14.175,3.099c4.623-0.858,9.282-1.867,13.854-3.008
                                                                    c10.021-2.494,16.126-12.646,13.626-22.662C299.761,427.318,289.618,421.218,279.591,423.714z"
                                                                ></path>
                                                                <path
                                                                    d="M417.887,173.047c1.31,3.948,3.811,7.171,6.97,9.398c4.684,3.299,10.813,4.409,16.662,2.475
                                                                    c9.806-3.256,15.119-13.83,11.875-23.631c-1.478-4.468-3.118-8.95-4.865-13.314c-3.836-9.59-14.714-14.259-24.309-10.423
                                                                    c-9.585,3.834-14.256,14.715-10.417,24.308C415.271,165.528,416.646,169.293,417.887,173.047z"
                                                                ></path>
                                                                <path
                                                                    d="M340.36,397.013c-3.299,2.178-6.704,4.286-10.134,6.261c-8.949,5.162-12.014,16.601-6.854,25.546
                                                                    c1.401,2.433,3.267,4.422,5.416,5.942c5.769,4.059,13.604,4.667,20.127,0.909c4.078-2.352,8.133-4.854,12.062-7.452
                                                                    c8.614-5.691,10.985-17.294,5.291-25.912C360.575,393.686,348.977,391.318,340.36,397.013z"
                                                                ></path>
                                                                <path
                                                                    d="M465.022,225.279c-0.407-10.322-9.101-18.356-19.426-17.953c-10.312,0.407-18.352,9.104-17.947,19.422
                                                                    c0.155,3.945,0.195,7.949,0.104,11.89c-0.145,6.473,3.021,12.243,7.941,15.711c2.931,2.064,6.488,3.313,10.345,3.401
                                                                    c10.322,0.229,18.876-7.958,19.105-18.285C465.247,234.756,465.208,229.985,465.022,225.279z"
                                                                ></path>
                                                                <path
                                                                    d="M414.835,347.816c-8.277-6.21-19.987-4.524-26.186,3.738c-2.374,3.164-4.874,6.289-7.434,9.298
                                                                    c-6.69,7.86-5.745,19.666,2.115,26.361c0.448,0.38,0.901,0.729,1.371,1.057c7.814,5.509,18.674,4.243,24.992-3.171
                                                                    c3.057-3.59,6.037-7.323,8.874-11.102C424.767,365.735,423.089,354.017,414.835,347.816z"
                                                                ></path>
                                                                <path
                                                                    d="M442.325,280.213c-9.855-3.09-20.35,2.396-23.438,12.251c-1.182,3.765-2.492,7.548-3.906,11.253
                                                                    c-3.105,8.156-0.13,17.13,6.69,21.939c1.251,0.879,2.629,1.624,4.126,2.19c9.649,3.682,20.454-1.159,24.132-10.812
                                                                    c1.679-4.405,3.237-8.906,4.646-13.382C457.66,293.795,452.178,283.303,442.325,280.213z"
                                                                ></path>
                                                                <path
                                                                    d="M197.999,426.402c-16.72-3.002-32.759-8.114-47.968-15.244c-0.18-0.094-0.341-0.201-0.53-0.287
                                                                    c-3.584-1.687-7.162-3.494-10.63-5.382c-0.012-0.014-0.034-0.023-0.053-0.031c-6.363-3.504-12.573-7.381-18.606-11.628
                                                                    C32.24,331.86,11.088,209.872,73.062,121.901c13.476-19.122,29.784-35.075,47.965-47.719c0.224-0.156,0.448-0.311,0.67-0.468
                                                                    c64.067-44.144,151.06-47.119,219.089-1.757l-14.611,21.111c-4.062,5.876-1.563,10.158,5.548,9.518l63.467-5.682
                                                                    c7.12-0.64,11.378-6.799,9.463-13.675L387.61,21.823c-1.908-6.884-6.793-7.708-10.859-1.833l-14.645,21.161
                                                                    C312.182,7.638,252.303-5.141,192.87,5.165c-5.986,1.036-11.888,2.304-17.709,3.78c-0.045,0.008-0.081,0.013-0.117,0.021
                                                                    c-0.225,0.055-0.453,0.128-0.672,0.189C123.122,22.316,78.407,52.207,46.5,94.855c-0.269,0.319-0.546,0.631-0.8,0.978
                                                                    c-1.061,1.429-2.114,2.891-3.145,4.353c-1.686,2.396-3.348,4.852-4.938,7.308c-0.199,0.296-0.351,0.597-0.525,0.896
                                                                    C10.762,149.191-1.938,196.361,0.24,244.383c0.005,0.158-0.004,0.317,0,0.479c0.211,4.691,0.583,9.447,1.088,14.129
                                                                    c0.027,0.302,0.094,0.588,0.145,0.89c0.522,4.708,1.177,9.427,1.998,14.145c8.344,48.138,31.052,91.455,65.079,125.16
                                                                    c0.079,0.079,0.161,0.165,0.241,0.247c0.028,0.031,0.059,0.047,0.086,0.076c9.142,9.017,19.086,17.357,29.793,24.898
                                                                    c28.02,19.744,59.221,32.795,92.729,38.808c10.167,1.827,19.879-4.941,21.703-15.103
                                                                    C214.925,437.943,208.163,428.223,197.999,426.402z"
                                                                ></path>
                                                                <path
                                                                    d="M221.124,83.198c-8.363,0-15.137,6.78-15.137,15.131v150.747l137.87,71.271c2.219,1.149,4.595,1.69,6.933,1.69
                                                                    c5.476,0,10.765-2.982,13.454-8.185c3.835-7.426,0.933-16.549-6.493-20.384l-121.507-62.818V98.329
                                                                    C236.243,89.978,229.477,83.198,221.124,83.198z"
                                                                ></path>
                                                            </svg>
                                                            4 Hours 30 Minutes
                                                        </div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-availability"><i class="fa fa-calendar"></i>Availability : Mar - Aug</div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-departure-location"><i class="flaticon-takeoff-the-plane"></i>Byron Bay, Australia</div>
                                                    </div>
                                                    <div class="tourmaster-tour-rating">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <span class="tourmaster-tour-rating-text">(1 Review)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-item-list tourmaster-item-pdlr tourmaster-column-30">
                                        <div class="tourmaster-tour-grid tourmaster-tour-frame tourmaster-tour-grid-style-2 tourmaster-price-right-title">
                                            <div
                                                class="tourmaster-tour-grid-inner"
                                                style="
                                                    box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -moz-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -webkit-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    border-radius: 10px;
                                                    -moz-border-radius: 10px;
                                                    -webkit-border-radius: 10px;
                                                "
                                            >
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                    <a href="singletor">
                                                        <img src="images/ian-stauffer-njRirZFLloE-unsplash-700x500.jpg" alt="" width="700" height="500" />
                                                    </a>
                                                </div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-40">
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                        <a href="singletor">Surfing Papua New Guinea 8 Days</a>
                                                    </h3>
                                                    <div class="tourmaster-tour-price-wrap">
                                                        <span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail">$1,200</span></span>
                                                    </div>
                                                    <div class="tourmaster-tour-info-wrap clearfix">
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-duration-text">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 465 465" xml:space="preserve">
                                                                <path
                                                                    d="M279.591,423.714c-3.836,0.956-7.747,1.805-11.629,2.52c-10.148,1.887-16.857,11.647-14.98,21.804
                                                                    c0.927,4.997,3.765,9.159,7.618,11.876c3.971,2.795,9.025,4.057,14.175,3.099c4.623-0.858,9.282-1.867,13.854-3.008
                                                                    c10.021-2.494,16.126-12.646,13.626-22.662C299.761,427.318,289.618,421.218,279.591,423.714z"
                                                                ></path>
                                                                <path
                                                                    d="M417.887,173.047c1.31,3.948,3.811,7.171,6.97,9.398c4.684,3.299,10.813,4.409,16.662,2.475
                                                                    c9.806-3.256,15.119-13.83,11.875-23.631c-1.478-4.468-3.118-8.95-4.865-13.314c-3.836-9.59-14.714-14.259-24.309-10.423
                                                                    c-9.585,3.834-14.256,14.715-10.417,24.308C415.271,165.528,416.646,169.293,417.887,173.047z"
                                                                ></path>
                                                                <path
                                                                    d="M340.36,397.013c-3.299,2.178-6.704,4.286-10.134,6.261c-8.949,5.162-12.014,16.601-6.854,25.546
                                                                    c1.401,2.433,3.267,4.422,5.416,5.942c5.769,4.059,13.604,4.667,20.127,0.909c4.078-2.352,8.133-4.854,12.062-7.452
                                                                    c8.614-5.691,10.985-17.294,5.291-25.912C360.575,393.686,348.977,391.318,340.36,397.013z"
                                                                ></path>
                                                                <path
                                                                    d="M465.022,225.279c-0.407-10.322-9.101-18.356-19.426-17.953c-10.312,0.407-18.352,9.104-17.947,19.422
                                                                    c0.155,3.945,0.195,7.949,0.104,11.89c-0.145,6.473,3.021,12.243,7.941,15.711c2.931,2.064,6.488,3.313,10.345,3.401
                                                                    c10.322,0.229,18.876-7.958,19.105-18.285C465.247,234.756,465.208,229.985,465.022,225.279z"
                                                                ></path>
                                                                <path
                                                                    d="M414.835,347.816c-8.277-6.21-19.987-4.524-26.186,3.738c-2.374,3.164-4.874,6.289-7.434,9.298
                                                                    c-6.69,7.86-5.745,19.666,2.115,26.361c0.448,0.38,0.901,0.729,1.371,1.057c7.814,5.509,18.674,4.243,24.992-3.171
                                                                    c3.057-3.59,6.037-7.323,8.874-11.102C424.767,365.735,423.089,354.017,414.835,347.816z"
                                                                ></path>
                                                                <path
                                                                    d="M442.325,280.213c-9.855-3.09-20.35,2.396-23.438,12.251c-1.182,3.765-2.492,7.548-3.906,11.253
                                                                    c-3.105,8.156-0.13,17.13,6.69,21.939c1.251,0.879,2.629,1.624,4.126,2.19c9.649,3.682,20.454-1.159,24.132-10.812
                                                                    c1.679-4.405,3.237-8.906,4.646-13.382C457.66,293.795,452.178,283.303,442.325,280.213z"
                                                                ></path>
                                                                <path
                                                                    d="M197.999,426.402c-16.72-3.002-32.759-8.114-47.968-15.244c-0.18-0.094-0.341-0.201-0.53-0.287
                                                                    c-3.584-1.687-7.162-3.494-10.63-5.382c-0.012-0.014-0.034-0.023-0.053-0.031c-6.363-3.504-12.573-7.381-18.606-11.628
                                                                    C32.24,331.86,11.088,209.872,73.062,121.901c13.476-19.122,29.784-35.075,47.965-47.719c0.224-0.156,0.448-0.311,0.67-0.468
                                                                    c64.067-44.144,151.06-47.119,219.089-1.757l-14.611,21.111c-4.062,5.876-1.563,10.158,5.548,9.518l63.467-5.682
                                                                    c7.12-0.64,11.378-6.799,9.463-13.675L387.61,21.823c-1.908-6.884-6.793-7.708-10.859-1.833l-14.645,21.161
                                                                    C312.182,7.638,252.303-5.141,192.87,5.165c-5.986,1.036-11.888,2.304-17.709,3.78c-0.045,0.008-0.081,0.013-0.117,0.021
                                                                    c-0.225,0.055-0.453,0.128-0.672,0.189C123.122,22.316,78.407,52.207,46.5,94.855c-0.269,0.319-0.546,0.631-0.8,0.978
                                                                    c-1.061,1.429-2.114,2.891-3.145,4.353c-1.686,2.396-3.348,4.852-4.938,7.308c-0.199,0.296-0.351,0.597-0.525,0.896
                                                                    C10.762,149.191-1.938,196.361,0.24,244.383c0.005,0.158-0.004,0.317,0,0.479c0.211,4.691,0.583,9.447,1.088,14.129
                                                                    c0.027,0.302,0.094,0.588,0.145,0.89c0.522,4.708,1.177,9.427,1.998,14.145c8.344,48.138,31.052,91.455,65.079,125.16
                                                                    c0.079,0.079,0.161,0.165,0.241,0.247c0.028,0.031,0.059,0.047,0.086,0.076c9.142,9.017,19.086,17.357,29.793,24.898
                                                                    c28.02,19.744,59.221,32.795,92.729,38.808c10.167,1.827,19.879-4.941,21.703-15.103
                                                                    C214.925,437.943,208.163,428.223,197.999,426.402z"
                                                                ></path>
                                                                <path
                                                                    d="M221.124,83.198c-8.363,0-15.137,6.78-15.137,15.131v150.747l137.87,71.271c2.219,1.149,4.595,1.69,6.933,1.69
                                                                    c5.476,0,10.765-2.982,13.454-8.185c3.835-7.426,0.933-16.549-6.493-20.384l-121.507-62.818V98.329
                                                                    C236.243,89.978,229.477,83.198,221.124,83.198z"
                                                                ></path>
                                                            </svg>
                                                            8 Days
                                                        </div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-availability"><i class="fa fa-calendar"></i>Availability : Jan - Jul</div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-departure-location"><i class="flaticon-takeoff-the-plane"></i>Papua New Guinea</div>
                                                    </div>
                                                    <div class="tourmaster-tour-rating">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <span class="tourmaster-tour-rating-text">(1 Review)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-item-list tourmaster-item-pdlr tourmaster-column-30 tourmaster-column-first">
                                        <div class="tourmaster-tour-grid tourmaster-tour-frame tourmaster-tour-grid-style-2 tourmaster-price-right-title">
                                            <div
                                                class="tourmaster-tour-grid-inner"
                                                style="
                                                    box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -moz-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -webkit-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    border-radius: 10px;
                                                    -moz-border-radius: 10px;
                                                    -webkit-border-radius: 10px;
                                                "
                                            >
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                    <a href="singletor">
                                                        <img src="images/shutterstock_363198860-700x500.jpg" alt="" width="700" height="500" />
                                                    </a>
                                                </div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-40">
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                        <a href="singletor">Arugam Bay Safari and Surfing Tours 6 Days</a>
                                                    </h3>
                                                    <div class="tourmaster-tour-price-wrap">
                                                        <span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail">$670</span></span>
                                                    </div>
                                                    <div class="tourmaster-tour-info-wrap clearfix">
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-duration-text">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 465 465" xml:space="preserve">
                                                                <path
                                                                    d="M279.591,423.714c-3.836,0.956-7.747,1.805-11.629,2.52c-10.148,1.887-16.857,11.647-14.98,21.804
                                                                    c0.927,4.997,3.765,9.159,7.618,11.876c3.971,2.795,9.025,4.057,14.175,3.099c4.623-0.858,9.282-1.867,13.854-3.008
                                                                    c10.021-2.494,16.126-12.646,13.626-22.662C299.761,427.318,289.618,421.218,279.591,423.714z"
                                                                ></path>
                                                                <path
                                                                    d="M417.887,173.047c1.31,3.948,3.811,7.171,6.97,9.398c4.684,3.299,10.813,4.409,16.662,2.475
                                                                    c9.806-3.256,15.119-13.83,11.875-23.631c-1.478-4.468-3.118-8.95-4.865-13.314c-3.836-9.59-14.714-14.259-24.309-10.423
                                                                    c-9.585,3.834-14.256,14.715-10.417,24.308C415.271,165.528,416.646,169.293,417.887,173.047z"
                                                                ></path>
                                                                <path
                                                                    d="M340.36,397.013c-3.299,2.178-6.704,4.286-10.134,6.261c-8.949,5.162-12.014,16.601-6.854,25.546
                                                                    c1.401,2.433,3.267,4.422,5.416,5.942c5.769,4.059,13.604,4.667,20.127,0.909c4.078-2.352,8.133-4.854,12.062-7.452
                                                                    c8.614-5.691,10.985-17.294,5.291-25.912C360.575,393.686,348.977,391.318,340.36,397.013z"
                                                                ></path>
                                                                <path
                                                                    d="M465.022,225.279c-0.407-10.322-9.101-18.356-19.426-17.953c-10.312,0.407-18.352,9.104-17.947,19.422
                                                                    c0.155,3.945,0.195,7.949,0.104,11.89c-0.145,6.473,3.021,12.243,7.941,15.711c2.931,2.064,6.488,3.313,10.345,3.401
                                                                    c10.322,0.229,18.876-7.958,19.105-18.285C465.247,234.756,465.208,229.985,465.022,225.279z"
                                                                ></path>
                                                                <path
                                                                    d="M414.835,347.816c-8.277-6.21-19.987-4.524-26.186,3.738c-2.374,3.164-4.874,6.289-7.434,9.298
                                                                    c-6.69,7.86-5.745,19.666,2.115,26.361c0.448,0.38,0.901,0.729,1.371,1.057c7.814,5.509,18.674,4.243,24.992-3.171
                                                                    c3.057-3.59,6.037-7.323,8.874-11.102C424.767,365.735,423.089,354.017,414.835,347.816z"
                                                                ></path>
                                                                <path
                                                                    d="M442.325,280.213c-9.855-3.09-20.35,2.396-23.438,12.251c-1.182,3.765-2.492,7.548-3.906,11.253
                                                                    c-3.105,8.156-0.13,17.13,6.69,21.939c1.251,0.879,2.629,1.624,4.126,2.19c9.649,3.682,20.454-1.159,24.132-10.812
                                                                    c1.679-4.405,3.237-8.906,4.646-13.382C457.66,293.795,452.178,283.303,442.325,280.213z"
                                                                ></path>
                                                                <path
                                                                    d="M197.999,426.402c-16.72-3.002-32.759-8.114-47.968-15.244c-0.18-0.094-0.341-0.201-0.53-0.287
                                                                    c-3.584-1.687-7.162-3.494-10.63-5.382c-0.012-0.014-0.034-0.023-0.053-0.031c-6.363-3.504-12.573-7.381-18.606-11.628
                                                                    C32.24,331.86,11.088,209.872,73.062,121.901c13.476-19.122,29.784-35.075,47.965-47.719c0.224-0.156,0.448-0.311,0.67-0.468
                                                                    c64.067-44.144,151.06-47.119,219.089-1.757l-14.611,21.111c-4.062,5.876-1.563,10.158,5.548,9.518l63.467-5.682
                                                                    c7.12-0.64,11.378-6.799,9.463-13.675L387.61,21.823c-1.908-6.884-6.793-7.708-10.859-1.833l-14.645,21.161
                                                                    C312.182,7.638,252.303-5.141,192.87,5.165c-5.986,1.036-11.888,2.304-17.709,3.78c-0.045,0.008-0.081,0.013-0.117,0.021
                                                                    c-0.225,0.055-0.453,0.128-0.672,0.189C123.122,22.316,78.407,52.207,46.5,94.855c-0.269,0.319-0.546,0.631-0.8,0.978
                                                                    c-1.061,1.429-2.114,2.891-3.145,4.353c-1.686,2.396-3.348,4.852-4.938,7.308c-0.199,0.296-0.351,0.597-0.525,0.896
                                                                    C10.762,149.191-1.938,196.361,0.24,244.383c0.005,0.158-0.004,0.317,0,0.479c0.211,4.691,0.583,9.447,1.088,14.129
                                                                    c0.027,0.302,0.094,0.588,0.145,0.89c0.522,4.708,1.177,9.427,1.998,14.145c8.344,48.138,31.052,91.455,65.079,125.16
                                                                    c0.079,0.079,0.161,0.165,0.241,0.247c0.028,0.031,0.059,0.047,0.086,0.076c9.142,9.017,19.086,17.357,29.793,24.898
                                                                    c28.02,19.744,59.221,32.795,92.729,38.808c10.167,1.827,19.879-4.941,21.703-15.103
                                                                    C214.925,437.943,208.163,428.223,197.999,426.402z"
                                                                ></path>
                                                                <path
                                                                    d="M221.124,83.198c-8.363,0-15.137,6.78-15.137,15.131v150.747l137.87,71.271c2.219,1.149,4.595,1.69,6.933,1.69
                                                                    c5.476,0,10.765-2.982,13.454-8.185c3.835-7.426,0.933-16.549-6.493-20.384l-121.507-62.818V98.329
                                                                    C236.243,89.978,229.477,83.198,221.124,83.198z"
                                                                ></path>
                                                            </svg>
                                                            6 Days
                                                        </div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-availability"><i class="fa fa-calendar"></i>Availability : Mar - Sep</div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-departure-location"><i class="flaticon-takeoff-the-plane"></i>Arugam Bay Sri Lanka</div>
                                                    </div>
                                                    <div class="tourmaster-tour-rating">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <span class="tourmaster-tour-rating-text">(1 Review)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-item-list tourmaster-item-pdlr tourmaster-column-30">
                                        <div class="tourmaster-tour-grid tourmaster-tour-frame tourmaster-tour-grid-style-2 tourmaster-price-right-title">
                                            <div
                                                class="tourmaster-tour-grid-inner"
                                                style="
                                                    box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -moz-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -webkit-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    border-radius: 10px;
                                                    -moz-border-radius: 10px;
                                                    -webkit-border-radius: 10px;
                                                "
                                            >
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                    <a href="singletor">
                                                        <img
                                                            src="images/delfi-de-la-rua-Sj5efgWguDs-unsplash-700x500.jpg"
                                                            alt=""
                                                            width="700"
                                                            height="500"
                                                        />
                                                    </a>
                                                </div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-40">
                                                    <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff; background-color: #48bf84;">
                                                        <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(72, 191, 132, 0.5);"></div>
                                                        Hot Sale!
                                                    </div>
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                        <a href="singletor">
                                                            <svg
                                                                version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                x="0px"
                                                                y="0px"
                                                                viewbox="0 0 512 512"
                                                                xml:space="preserve"
                                                                style="fill: #48bf84;"
                                                            >
                                                                <path
                                                                    d="M397.413,199.303c-2.944-4.576-8-7.296-13.408-7.296h-112v-176c0-7.552-5.28-14.08-12.672-15.648
                                                                    c-7.52-1.6-14.88,2.272-17.952,9.152l-128,288c-2.208,4.928-1.728,10.688,1.216,15.2c2.944,4.544,8,7.296,13.408,7.296h112v176
                                                                    c0,7.552,5.28,14.08,12.672,15.648c1.12,0.224,2.24,0.352,3.328,0.352c6.208,0,12-3.616,14.624-9.504l128-288
                                                                    C400.805,209.543,400.389,203.847,397.413,199.303z"
                                                                ></path>
                                                            </svg>
                                                            <span> 6 days Surf Free diving and Yoga Retreat</span>
                                                        </a>
                                                    </h3>
                                                    <div class="tourmaster-tour-price-wrap tourmaster-discount">
                                                        <span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail">$932</span></span>
                                                        <span class="tourmaster-tour-discount-price">$745</span>
                                                    </div>
                                                    <div class="tourmaster-tour-info-wrap clearfix">
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-duration-text">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 465 465" xml:space="preserve">
                                                                <path
                                                                    d="M279.591,423.714c-3.836,0.956-7.747,1.805-11.629,2.52c-10.148,1.887-16.857,11.647-14.98,21.804
                                                                    c0.927,4.997,3.765,9.159,7.618,11.876c3.971,2.795,9.025,4.057,14.175,3.099c4.623-0.858,9.282-1.867,13.854-3.008
                                                                    c10.021-2.494,16.126-12.646,13.626-22.662C299.761,427.318,289.618,421.218,279.591,423.714z"
                                                                ></path>
                                                                <path
                                                                    d="M417.887,173.047c1.31,3.948,3.811,7.171,6.97,9.398c4.684,3.299,10.813,4.409,16.662,2.475
                                                                    c9.806-3.256,15.119-13.83,11.875-23.631c-1.478-4.468-3.118-8.95-4.865-13.314c-3.836-9.59-14.714-14.259-24.309-10.423
                                                                    c-9.585,3.834-14.256,14.715-10.417,24.308C415.271,165.528,416.646,169.293,417.887,173.047z"
                                                                ></path>
                                                                <path
                                                                    d="M340.36,397.013c-3.299,2.178-6.704,4.286-10.134,6.261c-8.949,5.162-12.014,16.601-6.854,25.546
                                                                    c1.401,2.433,3.267,4.422,5.416,5.942c5.769,4.059,13.604,4.667,20.127,0.909c4.078-2.352,8.133-4.854,12.062-7.452
                                                                    c8.614-5.691,10.985-17.294,5.291-25.912C360.575,393.686,348.977,391.318,340.36,397.013z"
                                                                ></path>
                                                                <path
                                                                    d="M465.022,225.279c-0.407-10.322-9.101-18.356-19.426-17.953c-10.312,0.407-18.352,9.104-17.947,19.422
                                                                    c0.155,3.945,0.195,7.949,0.104,11.89c-0.145,6.473,3.021,12.243,7.941,15.711c2.931,2.064,6.488,3.313,10.345,3.401
                                                                    c10.322,0.229,18.876-7.958,19.105-18.285C465.247,234.756,465.208,229.985,465.022,225.279z"
                                                                ></path>
                                                                <path
                                                                    d="M414.835,347.816c-8.277-6.21-19.987-4.524-26.186,3.738c-2.374,3.164-4.874,6.289-7.434,9.298
                                                                    c-6.69,7.86-5.745,19.666,2.115,26.361c0.448,0.38,0.901,0.729,1.371,1.057c7.814,5.509,18.674,4.243,24.992-3.171
                                                                    c3.057-3.59,6.037-7.323,8.874-11.102C424.767,365.735,423.089,354.017,414.835,347.816z"
                                                                ></path>
                                                                <path
                                                                    d="M442.325,280.213c-9.855-3.09-20.35,2.396-23.438,12.251c-1.182,3.765-2.492,7.548-3.906,11.253
                                                                    c-3.105,8.156-0.13,17.13,6.69,21.939c1.251,0.879,2.629,1.624,4.126,2.19c9.649,3.682,20.454-1.159,24.132-10.812
                                                                    c1.679-4.405,3.237-8.906,4.646-13.382C457.66,293.795,452.178,283.303,442.325,280.213z"
                                                                ></path>
                                                                <path
                                                                    d="M197.999,426.402c-16.72-3.002-32.759-8.114-47.968-15.244c-0.18-0.094-0.341-0.201-0.53-0.287
                                                                    c-3.584-1.687-7.162-3.494-10.63-5.382c-0.012-0.014-0.034-0.023-0.053-0.031c-6.363-3.504-12.573-7.381-18.606-11.628
                                                                    C32.24,331.86,11.088,209.872,73.062,121.901c13.476-19.122,29.784-35.075,47.965-47.719c0.224-0.156,0.448-0.311,0.67-0.468
                                                                    c64.067-44.144,151.06-47.119,219.089-1.757l-14.611,21.111c-4.062,5.876-1.563,10.158,5.548,9.518l63.467-5.682
                                                                    c7.12-0.64,11.378-6.799,9.463-13.675L387.61,21.823c-1.908-6.884-6.793-7.708-10.859-1.833l-14.645,21.161
                                                                    C312.182,7.638,252.303-5.141,192.87,5.165c-5.986,1.036-11.888,2.304-17.709,3.78c-0.045,0.008-0.081,0.013-0.117,0.021
                                                                    c-0.225,0.055-0.453,0.128-0.672,0.189C123.122,22.316,78.407,52.207,46.5,94.855c-0.269,0.319-0.546,0.631-0.8,0.978
                                                                    c-1.061,1.429-2.114,2.891-3.145,4.353c-1.686,2.396-3.348,4.852-4.938,7.308c-0.199,0.296-0.351,0.597-0.525,0.896
                                                                    C10.762,149.191-1.938,196.361,0.24,244.383c0.005,0.158-0.004,0.317,0,0.479c0.211,4.691,0.583,9.447,1.088,14.129
                                                                    c0.027,0.302,0.094,0.588,0.145,0.89c0.522,4.708,1.177,9.427,1.998,14.145c8.344,48.138,31.052,91.455,65.079,125.16
                                                                    c0.079,0.079,0.161,0.165,0.241,0.247c0.028,0.031,0.059,0.047,0.086,0.076c9.142,9.017,19.086,17.357,29.793,24.898
                                                                    c28.02,19.744,59.221,32.795,92.729,38.808c10.167,1.827,19.879-4.941,21.703-15.103
                                                                    C214.925,437.943,208.163,428.223,197.999,426.402z"
                                                                ></path>
                                                                <path
                                                                    d="M221.124,83.198c-8.363,0-15.137,6.78-15.137,15.131v150.747l137.87,71.271c2.219,1.149,4.595,1.69,6.933,1.69
                                                                    c5.476,0,10.765-2.982,13.454-8.185c3.835-7.426,0.933-16.549-6.493-20.384l-121.507-62.818V98.329
                                                                    C236.243,89.978,229.477,83.198,221.124,83.198z"
                                                                ></path>
                                                            </svg>
                                                            6 days
                                                        </div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-availability"><i class="fa fa-calendar"></i>Availability : Feb - Jun</div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-departure-location"><i class="flaticon-takeoff-the-plane"></i>Nusa Lembongan</div>
                                                    </div>
                                                    <div class="tourmaster-tour-rating">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <span class="tourmaster-tour-rating-text">(1 Review)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-item-list tourmaster-item-pdlr tourmaster-column-30 tourmaster-column-first">
                                        <div class="tourmaster-tour-grid tourmaster-tour-frame tourmaster-tour-grid-style-2 tourmaster-price-right-title">
                                            <div
                                                class="tourmaster-tour-grid-inner"
                                                style="
                                                    box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -moz-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    -webkit-box-shadow: 0px 20px 25px rgba(0, 71, 96, 0.09);
                                                    border-radius: 10px;
                                                    -moz-border-radius: 10px;
                                                    -webkit-border-radius: 10px;
                                                "
                                            >
                                                <div class="tourmaster-tour-thumbnail tourmaster-media-image gdlr-core-outer-frame-element">
                                                    <a href="singletor">
                                                        <img src="images/shutterstock_1022187463-700x500.jpg" alt="" width="700" height="500" />
                                                    </a>
                                                </div>
                                                <div class="tourmaster-tour-content-wrap gdlr-core-skin-e-background gdlr-core-js" data-sync-height="tour-item-40">
                                                    <div class="tourmaster-thumbnail-ribbon gdlr-core-outer-frame-element" style="color: #ffffff; background-color: #48bf84;">
                                                        <div class="tourmaster-thumbnail-ribbon-cornor" style="border-right-color: rgba(72, 191, 132, 0.5);"></div>
                                                        Very Popular!
                                                    </div>
                                                    <h3 class="tourmaster-tour-title gdlr-core-skin-title" style="font-size: 21px; font-weight: 500; letter-spacing: 0px; text-transform: none;">
                                                        <a href="singletor">
                                                            <svg
                                                                version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                x="0px"
                                                                y="0px"
                                                                viewbox="0 0 512 512"
                                                                xml:space="preserve"
                                                                style="fill: #48bf84;"
                                                            >
                                                                <path
                                                                    d="M397.413,199.303c-2.944-4.576-8-7.296-13.408-7.296h-112v-176c0-7.552-5.28-14.08-12.672-15.648
                                                                    c-7.52-1.6-14.88,2.272-17.952,9.152l-128,288c-2.208,4.928-1.728,10.688,1.216,15.2c2.944,4.544,8,7.296,13.408,7.296h112v176
                                                                    c0,7.552,5.28,14.08,12.672,15.648c1.12,0.224,2.24,0.352,3.328,0.352c6.208,0,12-3.616,14.624-9.504l128-288
                                                                    C400.805,209.543,400.389,203.847,397.413,199.303z"
                                                                ></path>
                                                            </svg>
                                                            <span>Surf Lessons on the North Shore of Oahu</span>
                                                        </a>
                                                    </h3>
                                                    <div class="tourmaster-tour-price-wrap">
                                                        <span class="tourmaster-tour-price"><span class="tourmaster-head">From</span><span class="tourmaster-tail">$178</span></span>
                                                    </div>
                                                    <div class="tourmaster-tour-info-wrap clearfix">
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-duration-text">
                                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 465 465" xml:space="preserve">
                                                                <path
                                                                    d="M279.591,423.714c-3.836,0.956-7.747,1.805-11.629,2.52c-10.148,1.887-16.857,11.647-14.98,21.804
                                                                    c0.927,4.997,3.765,9.159,7.618,11.876c3.971,2.795,9.025,4.057,14.175,3.099c4.623-0.858,9.282-1.867,13.854-3.008
                                                                    c10.021-2.494,16.126-12.646,13.626-22.662C299.761,427.318,289.618,421.218,279.591,423.714z"
                                                                ></path>
                                                                <path
                                                                    d="M417.887,173.047c1.31,3.948,3.811,7.171,6.97,9.398c4.684,3.299,10.813,4.409,16.662,2.475
                                                                    c9.806-3.256,15.119-13.83,11.875-23.631c-1.478-4.468-3.118-8.95-4.865-13.314c-3.836-9.59-14.714-14.259-24.309-10.423
                                                                    c-9.585,3.834-14.256,14.715-10.417,24.308C415.271,165.528,416.646,169.293,417.887,173.047z"
                                                                ></path>
                                                                <path
                                                                    d="M340.36,397.013c-3.299,2.178-6.704,4.286-10.134,6.261c-8.949,5.162-12.014,16.601-6.854,25.546
                                                                    c1.401,2.433,3.267,4.422,5.416,5.942c5.769,4.059,13.604,4.667,20.127,0.909c4.078-2.352,8.133-4.854,12.062-7.452
                                                                    c8.614-5.691,10.985-17.294,5.291-25.912C360.575,393.686,348.977,391.318,340.36,397.013z"
                                                                ></path>
                                                                <path
                                                                    d="M465.022,225.279c-0.407-10.322-9.101-18.356-19.426-17.953c-10.312,0.407-18.352,9.104-17.947,19.422
                                                                    c0.155,3.945,0.195,7.949,0.104,11.89c-0.145,6.473,3.021,12.243,7.941,15.711c2.931,2.064,6.488,3.313,10.345,3.401
                                                                    c10.322,0.229,18.876-7.958,19.105-18.285C465.247,234.756,465.208,229.985,465.022,225.279z"
                                                                ></path>
                                                                <path
                                                                    d="M414.835,347.816c-8.277-6.21-19.987-4.524-26.186,3.738c-2.374,3.164-4.874,6.289-7.434,9.298
                                                                    c-6.69,7.86-5.745,19.666,2.115,26.361c0.448,0.38,0.901,0.729,1.371,1.057c7.814,5.509,18.674,4.243,24.992-3.171
                                                                    c3.057-3.59,6.037-7.323,8.874-11.102C424.767,365.735,423.089,354.017,414.835,347.816z"
                                                                ></path>
                                                                <path
                                                                    d="M442.325,280.213c-9.855-3.09-20.35,2.396-23.438,12.251c-1.182,3.765-2.492,7.548-3.906,11.253
                                                                    c-3.105,8.156-0.13,17.13,6.69,21.939c1.251,0.879,2.629,1.624,4.126,2.19c9.649,3.682,20.454-1.159,24.132-10.812
                                                                    c1.679-4.405,3.237-8.906,4.646-13.382C457.66,293.795,452.178,283.303,442.325,280.213z"
                                                                ></path>
                                                                <path
                                                                    d="M197.999,426.402c-16.72-3.002-32.759-8.114-47.968-15.244c-0.18-0.094-0.341-0.201-0.53-0.287
                                                                    c-3.584-1.687-7.162-3.494-10.63-5.382c-0.012-0.014-0.034-0.023-0.053-0.031c-6.363-3.504-12.573-7.381-18.606-11.628
                                                                    C32.24,331.86,11.088,209.872,73.062,121.901c13.476-19.122,29.784-35.075,47.965-47.719c0.224-0.156,0.448-0.311,0.67-0.468
                                                                    c64.067-44.144,151.06-47.119,219.089-1.757l-14.611,21.111c-4.062,5.876-1.563,10.158,5.548,9.518l63.467-5.682
                                                                    c7.12-0.64,11.378-6.799,9.463-13.675L387.61,21.823c-1.908-6.884-6.793-7.708-10.859-1.833l-14.645,21.161
                                                                    C312.182,7.638,252.303-5.141,192.87,5.165c-5.986,1.036-11.888,2.304-17.709,3.78c-0.045,0.008-0.081,0.013-0.117,0.021
                                                                    c-0.225,0.055-0.453,0.128-0.672,0.189C123.122,22.316,78.407,52.207,46.5,94.855c-0.269,0.319-0.546,0.631-0.8,0.978
                                                                    c-1.061,1.429-2.114,2.891-3.145,4.353c-1.686,2.396-3.348,4.852-4.938,7.308c-0.199,0.296-0.351,0.597-0.525,0.896
                                                                    C10.762,149.191-1.938,196.361,0.24,244.383c0.005,0.158-0.004,0.317,0,0.479c0.211,4.691,0.583,9.447,1.088,14.129
                                                                    c0.027,0.302,0.094,0.588,0.145,0.89c0.522,4.708,1.177,9.427,1.998,14.145c8.344,48.138,31.052,91.455,65.079,125.16
                                                                    c0.079,0.079,0.161,0.165,0.241,0.247c0.028,0.031,0.059,0.047,0.086,0.076c9.142,9.017,19.086,17.357,29.793,24.898
                                                                    c28.02,19.744,59.221,32.795,92.729,38.808c10.167,1.827,19.879-4.941,21.703-15.103
                                                                    C214.925,437.943,208.163,428.223,197.999,426.402z"
                                                                ></path>
                                                                <path
                                                                    d="M221.124,83.198c-8.363,0-15.137,6.78-15.137,15.131v150.747l137.87,71.271c2.219,1.149,4.595,1.69,6.933,1.69
                                                                    c5.476,0,10.765-2.982,13.454-8.185c3.835-7.426,0.933-16.549-6.493-20.384l-121.507-62.818V98.329
                                                                    C236.243,89.978,229.477,83.198,221.124,83.198z"
                                                                ></path>
                                                            </svg>
                                                            3 Hours
                                                        </div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-availability"><i class="fa fa-calendar"></i>Availability : Jul - Nov</div>
                                                        <div class="tourmaster-tour-info tourmaster-tour-info-departure-location"><i class="flaticon-takeoff-the-plane"></i>The North Shore of Oahu</div>
                                                    </div>
                                                    <div class="tourmaster-tour-rating">
                                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                        <span class="tourmaster-tour-rating-text">(1 Review)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tourmaster-pagination tourmaster-ajax-action tourmaster-style-round tourmaster-right-align tourmaster-item-pdlr"
                                    data-tm-ajax="tourmaster_tour_ajax"
                                    data-settings='{"category":"","tag":"","num-fetch":"9","layout":"fitrows","thumbnail-size":"Personnel Thumbnail","orderby":"date","order":"desc","tour-style":"grid","hover":"title-icon","hover-info":["title","icon"],"has-column":"yes","no-space":"no","excerpt":"none","excerpt-number":"55","column-size":"30","filterer":"none","filterer-align":"center","pagination":"page","custom-pagination":true,"grid-style":"style-2","tour-info":["duration-text","availability","departure-location"],"tour-rating":"enable","tour-border-radius":"10px","frame-shadow-size":{"x":"0px","y":"20px","size":"25px"},"frame-shadow-color":"#004760","frame-shadow-opacity":"0.09","tour-title-font-size":"21px","tour-title-font-weight":"500","tour-title-letter-spacing":"0px","tour-title-text-transform":"none","price-position":"","paged":1,"filter-icon":"svg","enable-order-filterer":"enable","order-filterer-grid-style":"grid-with-frame","order-filterer-grid-style-thumbnail":"Personnel Thumbnail","order-filterer-grid-style-column":"30","order-filterer-list-style":"medium-with-frame","order-filterer-list-style-thumbnail":"Tour Side Thumbnail","s":"","tax_query":{"relation":"AND"},"meta_query":{"relation":"AND"},"with-frame":"enable","column-size-temp":"30"}'
                                    data-target="tourmaster-tour-item-holder"
                                    data-target-action="replace"
                                    data-ajax-url="https://demo.goodlayers.com/zurf/scuba/wp-admin/admin-ajax.php"
                                >
                                    <a class="page-numbers tourmaster-active" data-ajax-name="paged" data-ajax-value="1">1</a> <a class="page-numbers" data-ajax-name="paged" data-ajax-value="2">2</a>
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