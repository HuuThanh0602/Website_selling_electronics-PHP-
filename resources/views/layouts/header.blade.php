<header class="li-header-4" style="background-color:#263b96;">
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container" >
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="logo pb-sm-30 pb-xs-30">
                                <img src="images/logo.png"   style="width: 80px;" alt="">
                                </div>
                            </div>
                            <div class="col-lg-10 pl-0 ml-sm-15 ml-xs-15">
                                <form action="#" class="hm-searchbox">
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <div class="header-middle-right">
                                    <ul class="hm-menu" style="display: flex;">                                       
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger" style="background-color:#263b96;">
                                                <span class="item-icon"></span>
                                                <span class="item-text">Giỏ hàng
                                                <span class="badge" style="font-size: 15px;">{{$totalQuantity}}</span>
                                                </span>
                                            </div>                                         
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    @foreach($cartItems ?? collect() as $cartItem)
                                                    <li>
                                                        <a href="" class="minicart-product-image">
                                                            <img src="images/product/small-size/{{$cartItem->product->image}}.jpg" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details d-flex">
                                                            <div>
                                                                <h6><a href=""></a>{{$cartItem->product->name}}</h6>
                                                                <span>{{$cartItem->price}}</span>
                                                            </div>
                                                            <span class="quantity" style="margin-left: auto; padding-left: 10px;">x{{$cartItem->quantity}}</span>
                                                        </div>
                                                        <style>
                                                        .minicart-product-details {
                                                            display: flex;
                                                            justify-content: space-between;  
                                                            align-items: center;  
                                                        }

                                                        .quantity {
                                                            margin-left: 15px;  
                                                            padding-left: 10px; 
                                                        }
                                                        </style>

                                                        <button class="close">
                                                            <a href="{{ route('cart.remove', $cartItem->id) }}"><i class="fa fa-close"></i></a>
                                                            
                                                        </button>
                                                    </li> 
                                                    @endforeach                                                   
                                                </ul>
                                                <p class="minicart-total">Tổng tiền: <span>{{$totalAmount}} VNĐ</span></p>
                                                <div class="minicart-button">
                                                    <a href="checkout.html" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                                        <span>Giỏ hàng</span>
                                                    </a>
                                                    <a href="checkout.html" class="li-button li-button-fullwidth li-button-sm">
                                                        <span>Thanh toán</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="hm d-flex" style="align-items: center; ">
                                            @if (Route::has('login'))
                                                @auth 
                                                <span class="bi bi-person-circle" style="color:white; font-size:20px ;"></span>                               
                                                <div class="hm-minicart-trigger" style="background-color:#263b96;">
                                                    <span class="item-text">{{ Auth::user()->name }}                                       
                                                    </span>
                                                </div>                                          
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    <li>
                                                    <a class="dropdown-item" href="{{ route('profile.edit') }}" style="color: black;">
                                                        Hồ sơ
                                                    </a>
                                                    </li>
                                                    <li>  
                                                        <form method="POST" action="{{ route('logout') }}" style="margin-top: 0.1rem;">
                                                                @csrf
                                                                <button type="submit" class="dropdown-item" style="background: none; border: none; color: black;">
                                                                    Đăng xuất
                                                                </button>
                                                        </form>                                                 
                                                    </li>
                                                </ul>
                                            </div>
                                                @else
                                                    <div class="d-flex" style="margin-top: 0.4rem;">
                                                        <a href="{{ route('login') }}" class="d-flex justify-content-center align-items-center text-white text-decoration-none" style="height: 100%; margin-right: 1rem; color: #ffffff; font-size: 1rem;">
                                                            {{ __('Đăng Nhập') }}
                                                        </a>

                                                        @if (Route::has('register'))
                                                            <a href="{{ route('register') }}" class="d-flex justify-content-center align-items-center text-white text-decoration-none" style="height: 100%; color: #ffffff; font-size: 1rem;">
                                                                {{ __('Đăng Ký') }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                @endauth
                                            @endif
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block" style="background-color:#fdfdfd;" >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                               <div class="hb-menu" style="margin:0 auto; width: 53%;">
                                   <nav>
                                       <ul >
                                           <li class="" ><a href="index.php" style="color:#263b96;">Trang Chủ</li>
                                           </li>
                                           <li class="megamenu-holder"><a href="" style="color:#263b96;">Sản phẩm</a>
                                               <ul class="megamenu hb-megamenu">
                                                   <li><a href="">Sản Phẩm</a>
                                                           <ul>                                            
                                                           <li><a href=""></a></li>                                                                                                        
                                                           </ul>
                                                   </li>
                                                       
                                               </ul>
                                           </li>
                                           <li class="dropdown-holder"><a href="blog.php" style="color:#263b96;">BLOG</a>
                                              
                                           </li>
                                           <li class="dropdown-holder"><a href="{{ route('introduction') }}" style="color:#263b96;">GIỚI THIỆU</a>
                                              
                                           </li>
                                           <li class="megamenu-static-holder"><a href="index.php" style="color:#263b96;">Tư liệu tham khảo</a>
                                               <ul class="megamenu hb-megamenu">
                                                   <li><a href="blog.php">Blog Layouts</a>
                                                       <ul>
                                                           <li><a href="blog-2-column.html">Blog 2 Column</a></li>
                                                           <li><a href="blog-3-column.html">Blog 3 Column</a></li>
                                                           <li><a href="blog-right-sidebarr.html">Grid Left Sidebar</a></li>
                                                           <li><a href="blog.php">Grid Right Sidebar</a></li>
                                                           <li><a href="blog-list.html">Blog List</a></li>                                                          
                                                       </ul>
                                                   </li>
                                                   <li><a href="blog-details-left-sidebar.html">Blog Details Pages</a>
                                                       <ul>
                                                           <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                           <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                                           <li><a href="blog-audio-format.html">Blog Audio Format</a></li>
                                                           <li><a href="blog-video-format.html">Blog Video Format</a></li>
                                                           <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>
                                                       </ul>
                                                   </li>
                                               </ul>
                                           </li>
                                                
                                       </ul>
                                   </nav>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Nút chat con con -->
<div id="chat-widget" class="chat-widget">
    <button id="chat-btn" class="chat-btn">
        <i class="bi bi-chat-dots"></i> <!-- Biểu tượng chat -->
    </button>
    <div id="chat-box" class="chat-box">
        <div class="chat-header">
            <span>Hỗ trợ khách hàng</span>
            <button id="close-chat" class="close-chat">X</button>
        </div>
        <div class="chat-messages" id="chat-messages">
            <!-- Tin nhắn sẽ hiển thị ở đây -->
        </div>
        <div class="chat-input">
            <input type="text" id="message-input" placeholder="Nhập tin nhắn...">
            <button onclick="sendMessage()">Gửi</button>
        </div>
    </div>
</div>

<style>
.chat-widget {
    position: fixed;
    bottom: 100px;
    right: 20px;
    z-index: 9999;
}

.chat-btn {
    background-color: #007bff;
    border: none;
    border-radius: 48%;
    padding: 15px;
    font-size: 24px;
    color: white;
    cursor: pointer;
}

.chat-btn:hover {
    background-color: #0069d9 ;
}
.chat-box {
    display: none;
    position: fixed;
    bottom: 70px;
    right: 20px;
    background-color: white;
    width: 300px;
    height: 400px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    flex-direction: column;
    box-sizing: border-box;
}

.chat-header {
    background-color: #007bff;
    color: white;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.close-chat {
    background-color: transparent;
    border: none;
    color: white;
    cursor: pointer;
    font-size: 18px;
}

.chat-messages {
    padding: 10px;
    overflow-y: auto;
    flex-grow: 1;
    max-height: 300px;
}

.chat-input {
    display: flex;
    padding: 10px;
    background-color: #007bff;
    border-top: 1px solid #ddd;
}

.chat-input input {
    flex-grow: 1;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ddd;
}

.chat-input button {
    background-color: #007bff;
    border: none;
    color: white;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

.chat-input button:hover {
    background-color: #128c7e;
}

.message {
    margin: 10px 0;
    padding: 8px;
    background-color: #f1f1f1;
    border-radius: 4px;
    max-width: 80%;
}

.message.sent {
    background-color: #dcf8c6;
    align-self: flex-end;
}

.message.received {
    background-color: #f1f1f1;
    align-self: flex-start;
}

</style>
<script>
document.getElementById("chat-btn").addEventListener("click", function() {
    const chatBox = document.getElementById("chat-box");
    chatBox.style.display = chatBox.style.display === "none" ? "flex" : "none";
});

document.getElementById("close-chat").addEventListener("click", function() {
    const chatBox = document.getElementById("chat-box");
    chatBox.style.display = "none";
});

function sendMessage() {
    const messageInput = document.getElementById("message-input");
    const messageText = messageInput.value.trim();

    if (messageText) {
        const chatMessages = document.getElementById("chat-messages");
        const messageElement = document.createElement("div");
        messageElement.classList.add("message", "sent");
        messageElement.textContent = messageText;
        chatMessages.appendChild(messageElement);
        chatMessages.scrollTop = chatMessages.scrollHeight;
        setTimeout(() => {
            const responseMessage = document.createElement("div");
            responseMessage.classList.add("message", "received");
            responseMessage.textContent = "Chúng tôi sẽ trả lời bạn sớm.";
            chatMessages.appendChild(responseMessage);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }, 1000);

        messageInput.value = '';
    }
}
</script>