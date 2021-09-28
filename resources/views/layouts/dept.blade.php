<button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="tm tm-departments-thin"></i>
    <span>All Departments</span>
</button>
<ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
    @forelse (\App\Models\Category::with('children.children')->where('parent_id', null)->get() as $item)
        @if ($item->children->count())
            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">
                    {{$item->category}}
                    <span class="caret"></span>
                </a>
                <ul role="menu" class="dropdown-menu ml-2">
                    <li class="menu-item menu-item-object-static_block animate-dropdown">
                        <div class="yamm-content">
                            <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                <div class="kc-col-container">
                                    <div class="kc_single_image">
                                        <img src="assets/images/megamenu.jpg" class="" alt="" />
                                    </div>
                                    <!-- .kc_single_image -->
                                </div>
                                <!-- .kc-col-container -->
                            </div>
                            <!-- .bg-yamm-content -->
                            <div class="row yamm-content-row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="kc-col-container">
                                        <div class="kc_text_block">
                                            <ul>
                                                @foreach ($item->children as $value)
                                                    @if ($value->children->count() == 0)
                                                        <li>
                                                            <a href="">{{$value->category}}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!-- .kc_text_block -->
                                    </div>
                                    <!-- .kc-col-container -->
                                </div>
                                <!-- .kc_column -->
                            </div>
                            <div class="nav-divider"></div>
                            <div class="row yamm-content-row">
                                @foreach ($item->children as $subcategory)
                                    @if ($subcategory->children->count() > 0)
                                        <div class="col-md-4 col-sm-12">
                                            <div class="kc-col-container">
                                                <div class="kc_text_block">
                                                    <ul>
                                                        <li class="nav-title">
                                                            <a href="">
                                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                                                {{$subcategory->category}}
                                                            </a>
                                                        </li>
                                                        @foreach ($subcategory->children as $subsubcategory)
                                                            <li>
                                                                <a href="">-- {{$subsubcategory->category}}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <!-- .kc_text_block -->
                                            </div>
                                            <!-- .kc-col-container -->
                                        </div>
                                        <!-- .kc_column -->
                                    @endif
                                @endforeach
                            </div> 
                            <!-- .kc_row -->
                        </div>
                        <!-- .yamm-content -->
                    </li>
                </ul>
            </li>
        @else
            <li class="menu-item menu-item-type-custom animate-dropdown">
                <a title="Gadgets" href="">{{$item->category}}</a>
            </li>
        @endif
    @empty
        
    @endforelse
</ul>