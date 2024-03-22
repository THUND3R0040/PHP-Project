//scroll thingy
window.addEventListener('scroll', function () {
    let header = document.querySelector('header');
    let bar = document.querySelector(".fa-bars");
    let img = document.querySelector("#img");
    let img2 = document.querySelector("#img2");
    let cart = document.querySelector(".fa-shopping-cart");
    let windowPosition = window.scrollY > 0;
    header.classList.toggle('scrolling-active', windowPosition);
    bar.classList.toggle('black', windowPosition);
    cart.classList.toggle('black', windowPosition);
    if (windowPosition) {
        img.src = "logos/logo.png";
        img2.src = "logos/logo.png";
    }
    if (!windowPosition) {
        img.src = "logos/basketv3.png";
        img2.src = "logos/basketv3.png";
    }

})





// function of bar to show it and hide it



let logo = document.querySelector(".logo");
let logo2 = document.querySelector(".logo2");
let navbar = document.querySelector(".navbar");
let a1 = document.getElementById("a1");
let a2 = document.querySelector("#a2");
let a4 = document.querySelector("#a4")
let phone = document.querySelector(".phone");
let para = document.querySelector(".para");
let bar = document.querySelector("#bar");
let href1 = document.querySelector("#href1");
let href2 = document.querySelector("#href2");
let href4 = document.querySelector("#href4");
let close = document.querySelector("#close");
let header = document.querySelector("header");
let a = 0;
let grey = document.querySelector(".grey");

//reload page when click on logo
$(document).ready(function () {
    var src = "../mainPage/index.php";
    var a = $("<a/>").attr("href", src);
    $(".logo2").wrap(a);
});


$(document).ready(function () {
    var src1 = "../mainPage/index.php";
    var a1 = $("<a/>").attr("href", src1);
    $(".logo").wrap(a1);
});


// function of bar to show it and hide it


bar.addEventListener("click", () => {
    if (a == 0) {

        phone.style.width = "60vw";
        href1.style.display = "block";
        href2.style.display = "block";
        href4.style.display = "block";
        header.style.pointerEvents = "none";
        bar.style.display = "none";
        close.style.display = "block";
        grey.style.display = "block";
        a = 1;
    }
})

//hide it

close.addEventListener("click", function () {
    if (a == 1) {
        a = 0;
        phone.style.width = "0vw";
        close.style.display = "none";
        href1.style.display = "none";
        href2.style.display = "none";
        href4.style.display = "none";
        bar.style.display = "block";
        header.style.pointerEvents = "auto";
        grey.style.display = "none";
    }

})


grey.addEventListener("click", () => {
    if (a == 1) {
        a = 0;
        phone.style.width = "0vw";
        close.style.display = "none";
        href1.style.display = "none";
        href2.style.display = "none";
        href4.style.display = "none";
        bar.style.display = "block";
        header.style.pointerEvents = "auto";
        grey.style.display = "none";
    }
    else if (a == 0) {
        phone.style.width = "60vw";
        href1.style.display = "block";
        href2.style.display = "block";
        href4.style.display = "block";
        header.style.pointerEvents = "none";
        bar.style.display = "none";
        close.style.display = "block";
        grey.style.display = "block";
        a = 1;
    }
})



let a3;
let b = 0;
let grey2 = document.querySelector(".grey2");
let cart_close = document.querySelector("#cart_close")
let cart = document.querySelector(".cart");




function myFunction(media) {
    if (media.matches) { // If media query matches
        a = 0;
        phone.style.width = "0vw";
        close.style.display = "none";
        href1.style.display = "none";
        href2.style.display = "none";
        href4.style.display = "none";
        bar.style.display = "block";
        header.style.pointerEvents = "auto";
        grey.style.display = "none";
        a3 = document.querySelector("#a3");
        a3.addEventListener("click", () => {
            if (b == 0) {
                b = 1;
                cart.style.width = "80vw";
                grey2.style.display = "block";
                cart_close.style.display = "block";
                not_found.style.display = "block";
                cart_full.style.display = "flex";
                nbr.style.display = "flex";
                // total.style.display = "flex";

            }
        })

        cart_close.addEventListener("click", () => {
            if (b == 1) {
                b = 0;
                cart.style.width = "0vw";
                grey2.style.display = "none";
                cart_close.style.display = "none";
                not_found.style.display = "none";
                cart_full.style.display = "none";
                nbr.style.display = "none";
                //   total.style.display = "none";
            }
        })

        grey2.addEventListener("click", () => {
            if (b == 1) {
                b = 0;
                cart.style.width = "0vw";

                grey2.style.display = "none";
                cart_close.style.display = "none";
                not_found.style.display = "none";
                cart_full.style.display = "none";
                nbr.style.display = "none";
                //  total.style.display = "none";
            }
        })


    }
}

var media1 = window.matchMedia("(min-width: 831px)")
myFunction(media1) // Call listener function at run time
media1.addListener(myFunction)






function myFunction2(media2) {
    if (media2.matches) { // If media query matches
        a3 = document.querySelector("#mb");



        a3.addEventListener("click", () => {
            if (b == 0) {
                b = 1;

                cart.style.width = "80vw";
                grey2.style.display = "block";
                cart_close.style.display = "block";
                not_found.style.display = "block";
                cart_full.style.display = "flex";
                nbr.style.display = "flex";
                // total.style.display = "flex";
            }
        })

        cart_close.addEventListener("click", () => {
            if (b == 1) {
                b = 0;

                cart.style.width = "0vw";
                grey2.style.display = "none";
                cart_close.style.display = "none";
                cart_full.style.display = "none";
                not_found.style.display = "none";
                nbr.style.display = "none";
                // total.style.display = "none";
            }
        })

        grey2.addEventListener("click", () => {
            if (b == 1) {
                b = 0;
                cart.style.width = "0vw";

                grey2.style.display = "none";
                cart_close.style.display = "none";
                cart_full.style.display = "none";
                not_found.style.display = "none";
                nbr.style.display = "none";
                // total.style.display = "none";
            }
        })

    }
}
var media2 = window.matchMedia("(max-width: 831px)")
myFunction(media2) // Call listener function at run time
media2.addListener(myFunction2)







if (window.matchMedia("(min-width: 831px)").matches) {
    /* the view port is at least 831 pixels wide */
    a3 = document.querySelector("#a3");
    a3.addEventListener("click", () => {
        if (b == 0) {
            b = 1;
            cart.style.width = "80vw";

            not_found.style.display = "block";
            cart_full.style.display = "flex";
            grey2.style.display = "block";
            cart_close.style.display = "block";
            nbr.style.display = "flex";
            // total.style.display = "flex";
        }
    })

    cart_close.addEventListener("click", () => {
        if (b == 1) {
            b = 0;
            cart.style.width = "0vw";

            grey2.style.display = "none";
            not_found.style.display = "none";
            cart_close.style.display = "none";
            cart_full.style.display = "none";
            nbr.style.display = "none";
            // total.style.display = "none";
        }
    })

    grey2.addEventListener("click", () => {
        if (b == 1) {
            b = 0;
            cart.style.width = "0vw";

            grey2.style.display = "none";
            cart_close.style.display = "none";
            not_found.style.display = "none";
            cart_full.style.display = "none";
            nbr.style.display = "none";
            // total.style.display = "none";
        }
    })


} else {
    /* the view port is less than 831 pixels wide */
    a3 = document.querySelector("#mb");



    a3.addEventListener("click", () => {
        if (b == 0) {
            b = 1;
            cart.style.width = "80vw";

            not_found.style.display = "block";
            grey2.style.display = "block";
            cart_close.style.display = "block";
            cart_full.style.display = "flex";
            nbr.style.display = "flex";
            // total.style.display = "flex";
        }
    })

    cart_close.addEventListener("click", () => {
        if (b == 1) {
            b = 0;
            cart.style.width = "0vw";

            grey2.style.display = "none";
            cart_close.style.display = "none";
            not_found.style.display = "none";
            cart_full.style.display = "none";
            nbr.style.display = "none";
            // total.style.display = "none";
        }
    })

    grey2.addEventListener("click", () => {
        if (b == 1) {
            b = 0;
            not_found.style.display = "none";
            cart.style.width = "0vw";


            grey2.style.display = "none";
            cart_close.style.display = "none";
            cart_full.style.display = "none";
            cart_full.style.display = "none";
            nbr.style.display = "none";
            // total.style.display="none";
        }
    })


}







let sm = document.querySelectorAll(".sm");
let dd = document.querySelectorAll(".dd");

for (let i = 0; i < dd.length; i++) {
    $(document).ready(function () {
        $(sm[i]).mouseover(function () {
            $(dd[i]).css("color", "black");
            $(dd[i]).css("font-size", "30px");
        });
    });

    $(document).ready(function () {
        $(sm[i]).mouseout(function () {
            $(dd[i]).css("color", "white");
            $(dd[i]).css("font-size", "26px");
        });
    });
}






$(function () {
    $("#accordion").accordion();
});














let not_found = document.querySelector(".not_found");
let cart_full = document.querySelector(".cart_full");
let nbr = document.querySelector(".nbr");
let checkout = document.querySelector(".checkout");






       
    
setInterval(() => {
    let remove_item = document.querySelectorAll(".remove-btn");
    let cart_items = document.querySelectorAll(".cart_items");
    for (let t = 0; t < remove_item.length; t++) {
        remove_item[t].addEventListener("click", () => {
            cart_items[t].remove();
        })
    }
}, 10)




setInterval(function () {
    let remove_item = document.querySelectorAll(".remove-btn");
    let total = document.querySelector(".total");
    let numb = remove_item.length;
    let num = document.querySelector(".num");
    num.innerHTML = numb;
    if (numb == 0) {
        total.style.display = "none";
        checkout.style.display = "none";
    }
    else {
        total.style.display = "flex";
        checkout.style.display = "flex";
    }
}, 1);


setInterval(function () {
    let money = document.querySelector(".money");
    let cart_price = document.querySelectorAll(".cart-quantity");
    let total = 0;
    for (let i = 0; i < cart_price.length; i++) {
        total += parseInt(cart_price[i].innerHTML);


    }

    money.innerHTML = `${total}$`;


}, 1);












async function get() {
    const url = "products.json";
    const response = await fetch(url);
    let products = await response.json();
    console.log(products);
    for (let i = 0; i < products.length; i++) {
       // let type = products[i].type;
        //span3 = document.createElement("span");
       // span3.innerHTML = type;
        //span3.classList = "genre";
        //fet = document.createElement("span");
        //fet.innerHTML =products[i].ft;
        //fet.classList = "fet";
        //bs = document.createElement("span");
        //bs.innerHTML = products[i].bs;
        //bs.classList = "bs";
        let overlay = document.createElement("div");
        overlay.style.backgroundImage = `url(${products[i].overlay})`;
        overlay.classList = "overlay";
        let product = document.createElement("div");
        let img = document.createElement("img");
        let span1 = document.createElement("span");
        span1.innerHTML = `${products[i].name}`;
        let span2 = document.createElement("span");
        let add = document.createElement("button");
        add.innerHTML = "Buy";
        add.classList = "glow-on-hover";
        span2.innerHTML = products[i].price;
        span1.classList = "lorem";
        span2.classList = "price";
        img.classList = "pro";
        product.classList = "pr";
        //product.appendChild(span3);
       // product.appendChild(fet);
        //product.appendChild(bs);
        img.src = products[i].img;
        product.appendChild(overlay);
        product.appendChild(img);
        product.appendChild(span1);
        product.appendChild(span2);
        product.appendChild(add);
        container1.appendChild(product);
    }
    let pr = document.querySelectorAll(".pr");
    //let genre = document.querySelectorAll(".genre");

    kid.click(function () {
        man.fadeOut();
        women.fadeOut();
        for (let i = 0; i < products.length; i++) {
            if (products[i].type == "women" || products[i].type == "men") {
                pr[i].style.position = "absolute";
                pr[i].style.left = "-9999px";
                pr[i].style.top = "-9999px";

            }
        }


    });


    man.click(function () {
        kid.fadeOut();
        women.fadeOut();

        for (let i = 0; i < pr.length; i++) {
            if (products[i].type == "kids" || products[i].type == "women") {
                pr[i].style.position = "absolute";
                pr[i].style.left = "-9999px";
                pr[i].style.top = "-9999px";

            }
        }
    });

    women.click(function () {
        man.fadeOut();
        kid.fadeOut();
        for (let i = 0; i < pr.length; i++) {
            if (products[i].type == "kids" || products[i].type == "men") {
                pr[i].style.position="absolute";
                pr[i].style.left="-9999px";
                pr[i].style.top = "-9999px";
                
            }
        }
    });


    let everyone = document.querySelector(".typed");

    everyone.addEventListener("click", () => {
        man.fadeIn();
        women.fadeIn();
        kid.fadeIn();
        for (let i = 0; i < pr.length; i++) {
            pr[i].style.position = "static";
            
        }
    })
    let btn = document.querySelectorAll(".glow-on-hover");
    for (let i = 0; i < btn.length; i++) {
        
        btn[i].addEventListener("click", () => {
            

            let span1 = document.createElement("img");
            let div = document.createElement("div");
            let span2 = document.createElement("span");
            let span5 = document.createElement("span");
            let span3 = document.createElement("span");
            let span4 = document.createElement("button");
            let icon = document.createElement("i");
            icon.classList = "fas";
            div.classList="c-div";
            span5.classList="c-note";
            icon.classList.add("fa-trash-alt");
            span3.innerHTML = `${products[i].price}`;
            span2.innerHTML = `${products[i].name}`;
            span5.innerHTML = `${products[i].doc}`;
            span1.src = `${products[i].img}`;
            span1.classList ="cart-item";
            span2.classList ="cart-price";
            span3.classList ="cart-quantity";
            span4.appendChild(icon);
            span4.classList="remove-btn";
            let cart_item = document.createElement("div");
            cart_item.appendChild(span1);
            div.appendChild(span2);
            div.appendChild(span5);
            div.appendChild(span3);
            cart_item.appendChild(div);
            cart_item.appendChild(span4);
            cart_full.appendChild(cart_item);
            cart_item.classList="cart_items";


        })
    }
    
    
    let inpt = document.querySelector(".inpt");
  
                
                    inpt.addEventListener("change", () => {
                        if (inpt.value == "ft") {
                            for (let i = 0; i < products.length; i++) {
                                if (pr[i].style.display = "none") {
                                    pr[i].style.display = "flex";
                                    if (products[i].ft == "false") {
                                        pr[i].style.display = "none";
                                    }
                    

                    

                }
            }
        }
        else if (inpt.value == "bs") {
            for (let i = 0; i < products.length; i++) {
                if (pr[i].style.display = "none") {
                    pr[i].style.display = "flex";
                    if (products[i].bs == "false") {
                        pr[i].style.display = "none";
                    }
                        
                    
                
            
                }}}



        else if(inpt.value=="all"){
            for(let i = 0;i<pr.length;i++){
                pr[i].style.display="flex";
            }
        }
})}
    

    




let span3;
let container1 = document.querySelector(".container1");


let kid = $(".kid");
let man = $(".man");
let women = $(".women");

get();


























let swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    effect: "fade",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});











let btt = document.querySelector(".btt");


window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        btt.classList.add("show");
    } else {
        btt.classList.remove("show");
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

btt.addEventListener("click", topFunction);
