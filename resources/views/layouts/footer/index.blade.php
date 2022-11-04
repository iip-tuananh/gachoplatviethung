<footer class="footer">
   <div class="container">
         <div class="row">
         <div class="col-lg-7 col-md-12 col-12">
            <div class="row">
               <div class="col-sm-6 col-lg-6 col-12 footer-nav-logo widget">
                     {!!$setting->iframe_map!!}
                     <div id="fb-root"></div>
                     <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="eVw4NSZQ"></script>
                     <div class="fb-page" 
                     data-href="{{$setting->facebook}}"
                     data-width="380" 
                     data-hide-cover="false"
                     data-show-facepile="false"></div>
               </div>
               <div class="col-sm-6 col-lg-6 col-12 footer-nav-info widget">
                     <p class="footer-title">Bạn cần hỗ trợ</p>
                     <p class="footer-tel">
                     <a href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">{{$setting->phone1}}</a>
                     </p>
                     <p class="evo-in"><strong>Địa chỉ: </strong>{{$setting->address1}}</p>
                     <p class="evo-in">
                     <strong>Email: </strong><a href="mailto:{{$setting->email}}" title="{{$setting->email}}">{{$setting->email}}</a>
                     </p>
                     <div class="social">
                     <a class="fb" href="{{$setting->facebbok}}" target="_blank" aria-label="Facebook" title="Theo dõi trên Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px" viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
                           <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#EBE7E7"/>
                        </svg>
                     </a>
                     <a class="tt" href="{{$setting->google}}" target="_blank" aria-label="Twitter" title="Theo dõi trên Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="25px" height="25px">
                           <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016    c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992    c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056    c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152    c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792    c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44    C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568    C480.224,136.96,497.728,118.496,512,97.248z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#EBE7E7"/>
                        </svg>
                     </a>
                     <a class="yt" href="{{$setting->fbPixel}}" target="_blank" aria-label="Youtube" title="Theo dõi trên Youtube">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                           <path d="M490.24,113.92c-13.888-24.704-28.96-29.248-59.648-30.976C399.936,80.864,322.848,80,256.064,80
                                 c-66.912,0-144.032,0.864-174.656,2.912c-30.624,1.76-45.728,6.272-59.744,31.008C7.36,138.592,0,181.088,0,255.904
                                 C0,255.968,0,256,0,256c0,0.064,0,0.096,0,0.096v0.064c0,74.496,7.36,117.312,21.664,141.728
                                 c14.016,24.704,29.088,29.184,59.712,31.264C112.032,430.944,189.152,432,256.064,432c66.784,0,143.872-1.056,174.56-2.816
                                 c30.688-2.08,45.76-6.56,59.648-31.264C504.704,373.504,512,330.688,512,256.192c0,0,0-0.096,0-0.16c0,0,0-0.064,0-0.096
                                 C512,181.088,504.704,138.592,490.24,113.92z M192,352V160l160,96L192,352z"/>
                        </svg>
                     </a>
                     <a class="ins" href="{{$setting->GA}}" target="_blank" aria-label="Instagram" title="Theo dõi trên Instagram">
                        <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                           <path d="m75 512h362c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-362c-24.8125 0-45-20.1875-45-45zm0 0"/>
                           <path d="m256 391c74.4375 0 135-60.5625 135-135s-60.5625-135-135-135-135 60.5625-135 135 60.5625 135 135 135zm0-240c57.898438 0 105 47.101562 105 105s-47.101562 105-105 105-105-47.101562-105-105 47.101562-105 105-105zm0 0"/>
                           <path d="m406 151c24.8125 0 45-20.1875 45-45s-20.1875-45-45-45-45 20.1875-45 45 20.1875 45 45 45zm0-60c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0"/>
                        </svg>
                     </a>
                     </div>
                     <div class="payment">
                     <img width="370" height="45" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{url('frontend/images/payment_1.png')}}" alt="" class="lazy" />
                     </div>
               </div>
            </div>
         </div>
         <div class="col-lg-5 col-md-12 col-12 fix-ipad-footer">
            <div class="row">
               <div class="col-sm-6 col-lg-6 col-6 footer-nav-menu widget">
                  <p class="footer-title">Hỗ trợ khách hàng</p>
                  <div class="footer-menu">
                     @foreach ($helpCustomer as $item)
                     <a href="{{route('helpCus', ['slug'=>$item->slug])}}" title="{{$item->title}}" rel="nofollow">{{$item->title}}</a>
                     @endforeach
                  </div>
               </div>
               <div class="col-sm-6 col-lg-6 col-6 footer-nav-menu widget">
                     <p class="footer-title">Về chúng tôi</p>
                     <div class="footer-menu">
                     <a href="{{route('home')}}" title="Trang chủ" rel="nofollow">Trang chủ</a>
                     <a href="{{route('aboutUs')}}" title="Giới thiệu" rel="nofollow">Giới thiệu</a>
                     @foreach ($blogCate as $cate)
                     <a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}" title="{{languageName($cate->name)}}" rel="nofollow">{{languageName($cate->name)}}</a>
                     @endforeach
                     <a href="{{route('lienHe')}}" title="Liên hệ" rel="nofollow">Liên hệ</a>
                     </div>
               </div>
               
            </div>
         </div>
         </div>
   </div>
   <div class="copyright text-center">
         © Bản quyền thuộc về Việt Hùng <span class="s480-f">|</span> Cung cấp bởi <a href="https://sbtsoftware.vn/" title="SBT" target="_blank" rel="nofollow">SBT</a>
         <div class="back-to-top text-center" title="Lên đầu trang">
         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 284.929 284.929" style="enable-background:new 0 0 284.929 284.929;" xml:space="preserve">
            <path d="M282.082,195.285L149.028,62.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665,0.953-6.567,2.856L2.856,195.285   C0.95,197.191,0,199.378,0,201.853c0,2.474,0.953,4.664,2.856,6.566l14.272,14.271c1.903,1.903,4.093,2.854,6.567,2.854   c2.474,0,4.664-0.951,6.567-2.854l112.204-112.202l112.208,112.209c1.902,1.903,4.093,2.848,6.563,2.848   c2.478,0,4.668-0.951,6.57-2.848l14.274-14.277c1.902-1.902,2.847-4.093,2.847-6.566   C284.929,199.378,283.984,197.188,282.082,195.285z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
         </svg>
         </div>
   </div>
</footer>