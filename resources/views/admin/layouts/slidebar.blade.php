    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
    <div class="sl-sideleft">
        <div class="input-group input-group-search">
            <input type="search" name="search" class="form-control" placeholder="Search">
            <span class="input-group-btn">
                <button class="btn"><i class="fa fa-search"></i></button>
            </span><!-- input-group-btn -->
        </div><!-- input-group -->

        <label class="sidebar-label">Navigation</label>
        <div class="sl-sideleft-menu">
            <a href="{{ route('admin.index') }}" class="sl-menu-link active">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->




            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                    <span class="menu-item-label"> {{ __('admin.museums') }} </span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('museum.create') }}" class="nav-link"> {{ __('admin.add') }} </a>
                </li>
                <li class="nav-item"><a href="{{ route('museum.index') }}" class="nav-link">
                        {{ __('admin.all_museums') }} </a></li>
            </ul>



            <a href="{{ route('civilization.index') }}" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
                    <span class="menu-item-label"> {{ __('admin.civilization') }} </span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->


            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                    <span class="menu-item-label"> {{ __('admin.antiques') }} </span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('antique.create') }}" class="nav-link"> {{ __('admin.add') }} </a>
                </li>
                <li class="nav-item"><a href="{{ route('antique.index') }}" class="nav-link">
                        {{ __('admin.all_antiques') }} </a></li>
            </ul>


            <a href="#" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                    <span class="menu-item-label"> {{ __('admin.hotels') }} </span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{ route('hotel.create') }}" class="nav-link"> {{ __('admin.add') }} </a>
                </li>
                <li class="nav-item"><a href="{{ route('hotel.index') }}" class="nav-link">
                        {{ __('admin.all_hotels') }} </a></li>
            </ul>



        </div><!-- sl-sideleft-menu -->

        <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->
