<div class="c-sidebar c-sidebar-fixed c-sidebar-lg-show" id="sidebar" style="background: #FFFFFF;">

<ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item mb-5">
        <a class="c-sidebar-nav-link" style="cursor: pointer;background: #FFFFFF;" onclick="homePage()"></a>
    <img src="{{ asset('image/homeDashboard.png') }}" style="cursor: pointer;" onclick="homePage()"  alt="" class="logoKapalasar">
    </li>
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"  style="cursor: pointer;color: #54595f;background: #FFFFFF; " onclick="homePage()">
    <img src="{{ asset('image/home-page.png') }}" class="mr-1" alt=""> Dashboard</a>
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
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" style="cursor: pointer;color: #54595f;background: #FFFFFF; " onclick="flashsalePage();">
            <img src="{{ asset('image/voucher.png') }}"class="mr-1" alt=""> Flash Sale
            </a>
        </li>
</ul>
</div>

<script>
   
   function homePage(){
        window.location.href = "{{ URL::to('/home') }}";
    }
    function productPage(){
        window.location.href = "{{ URL::to('produk') }}";
    }
    function voucherPage(){
        window.location.href = "{{ URL::to('voucher') }}";
    }
    function flashsalePage(){
        window.location.href = "{{ URL::to('flashsale') }}";
    }
</script>