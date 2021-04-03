<div class="c-sidebar c-sidebar-fixed c-sidebar-lg-show" id="sidebar" style="background: #FFFFFF;">                                   
<ul class="c-sidebar-nav">
<li class="c-sidebar-nav-item mb-5">
    <a class="c-sidebar-nav-link" style="cursor: pointer;background: #FFFFFF; " onclick="homePage()">
</a>
    <img src="{{ asset('image/homeDashboard.png') }}" style="cursor: pointer;" onclick="homePage()" style="cursor: pointer;" alt="" class="logoKapalasar">
</li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"  style="cursor: pointer;color: #54595f;background: #FFFFFF;background: #FFFFFF;" onclick="homePage()">
    <img src="{{ asset('image/home-page.png') }}" class="mr-1" alt=""> Dashboard</a>
</li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"  style="cursor: pointer;color: #54595f;background: #FFFFFF; " onclick="adminPage()">
    <img src="{{ asset('image/admin.png') }}" class="mr-1" alt=""> Admin</a>
</li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"  style="cursor: pointer;color: #54595f;background: #FFFFFF; " onclick="merchantPage()">
    <img src="{{ asset('image/merchant.png') }}" class="mr-1" alt=""> Merchant</a>
</li>
<li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"  style="cursor: pointer;color: #54595f;background: #FFFFFF; " onclick="userPage()">
    <img src="{{ asset('image/user.png') }}" class="mr-1" alt=""> User</a>
</li>
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" style="cursor: pointer;color: #54595f;background: #FFFFFF; " onclick="productPage()">
        <img src="{{ asset('image/product.png') }}"class="mr-1" alt=""> Produk
    </a>
</li>
<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" style="cursor: pointer;color: #54595f;background: #FFFFFF; " onclick="voucherPage();">
        <img src="{{ asset('image/voucher.png') }}"class="mr-1" alt=""> Voucher
    </a>
</li>

</ul>
</div>

<script>
    
    function homePage(){
        window.location.href = "{{ URL::to('/super-index') }}";
    }
    function productPage(){
        window.location.href = "{{ URL::to('/super-produk') }}";
    }
    function voucherPage(){
        window.location.href = "{{ URL::to('/super-voucher') }}";
    } function adminPage(){
        window.location.href = "{{ URL::to('/super-admin') }}";
    }
    function merchantPage(){
        window.location.href = "{{ URL::to('super-merchant') }}";
    }
    function userPage(){
        window.location.href = "{{ URL::to('super-user') }}";
    }
</script>
<script>
    
</script>